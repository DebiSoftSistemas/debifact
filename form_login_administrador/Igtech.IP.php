<?php
//__NM____NM__FUNCTION__NM__//
class IgtechIP {
    public $Router;
    public $ServidorWEB;
    public $ClientePC;

    // Constructor using PHP 7+ style
    public function __construct() {
        $this->Router = $_SERVER['REMOTE_ADDR'];
        $this->ServidorWEB = $_SERVER['SERVER_ADDR'];
        $this->ClientePC = $this->getRealIP();
    }

    // Validate an IP address
    public function validarIP($ip) {
        return filter_var($ip, FILTER_VALIDATE_IP) !== false;
    }

    // Compare an IP against a mask
    public function comparaIP($mascar, $ip) {
        if (!$this->validarIP($ip)) {
            return "IP no válida";
        }

        $ipOctets = explode(".", $ip);
        $maskOctets = explode(".", $mascar);

        if (count($ipOctets) != 4 || count($maskOctets) != 4) {
            return "Formato de máscara o IP incorrecto";
        }

        for ($i = 0; $i < 4; $i++) {
            if ($maskOctets[$i] != '*' && $maskOctets[$i] != $ipOctets[$i]) {
                return "La IP no coincide con la máscara";
            }
        }

        return "La IP coincide con la máscara";
    }

    // Get the real client IP address
    public function getRealIP() {
        $client_ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $entries = preg_split('/[, ]/', $_SERVER['HTTP_X_FORWARDED_FOR']);

            foreach ($entries as $entry) {
                $entry = trim($entry);

                if (preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list)) {
                    $private_ip = [
                        '/^0\./',
                        '/^127\.0\.0\.1/',
                        '/^192\.168\..*/',
                        '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
                        '/^10\..*/'
                    ];

                    $is_private = false;
                    foreach ($private_ip as $pattern) {
                        if (preg_match($pattern, $ip_list[1])) {
                            $is_private = true;
                            break;
                        }
                    }

                    if (!$is_private) {
                        $client_ip = $ip_list[1];
                        break;
                    }
                }
            }
        }

        return $client_ip;
    }
}
?>
<?php
//__NM____NM__FUNCTION__NM__//
class IgtechLog {
    private $fecha;
    private $fecha_log;
    private $ArchivoLog;
    private $logFilePath;

    // Constructor to set the log file path
    public function __construct($logFilePath = null) {
        $this->logFilePath = $logFilePath ?? $this->generateLogFilePath();
    }

    // Generate a default log file path based on the current date
    private function generateLogFilePath() {
        $this->fecha = getDate();
        return 'ws_debifact_' . $this->fecha['year'] .
               str_pad($this->fecha['mon'], 2, '0', STR_PAD_LEFT) .
               str_pad($this->fecha['mday'], 2, '0', STR_PAD_LEFT) . '_log.txt';
    }

    // Open the log file for writing
    public function Abrir() {
        $this->ArchivoLog = fopen($this->logFilePath, 'a');
        if ($this->ArchivoLog === false) {
            throw new Exception("No se pudo abrir el archivo de log: " . $this->logFilePath);
        }
    }

    // Write a log entry
    public function EscribirLog($Datos) {
        if ($this->ArchivoLog === null) {
            throw new Exception("El archivo de log no está abierto.");
        }

        $this->fecha_log = $this->formatDate();
        fwrite($this->ArchivoLog, $this->fecha_log . ': ' . $Datos . PHP_EOL);
    }

    // Format the current date and time
    private function formatDate() {
        $this->fecha = getDate();
        return sprintf(
            '%04d/%02d/%02d %02d:%02d:%02d',
            $this->fecha['year'],
            $this->fecha['mon'],
            $this->fecha['mday'],
            $this->fecha['hours'],
            $this->fecha['minutes'],
            $this->fecha['seconds']
        );
    }

    // Get the log file resource
    public function GetArchivo() {
        return $this->ArchivoLog;
    }

    // Close the log file
    public function Cerrar() {
        if ($this->ArchivoLog !== null) {
            fclose($this->ArchivoLog);
            $this->ArchivoLog = null;
        }
    }

    // Destructor to ensure the log file is closed
    public function __destruct() {
        $this->Cerrar();
    }
}
?>
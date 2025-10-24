<?php

if(isset($this->Ini->Nm_lang))
{
    $Nm_lang = $this->Ini->Nm_lang;
}
else
{
    $Nm_lang = $this->Nm_lang;
}


$this->nmgp_botoes['btn_7']  = 'on';
$this->arr_buttons['btn_7']['hint']             = "";
$this->arr_buttons['btn_7']['type']             = "button";
$this->arr_buttons['btn_7']['value']            = " ";
$this->arr_buttons['btn_7']['display']          = "text_fontawesomeicon";
$this->arr_buttons['btn_7']['display_position'] = "text_right";
$this->arr_buttons['btn_7']['style']            = "default";
$this->arr_buttons['btn_7']['image']            = "";

$this->arr_buttons['btn_7']['has_fa']           = "true";

$this->arr_buttons['btn_7']['fontawesomeicon']  = "fas fa-home";

$this->nmgp_botoes['btn_1']  = 'on';
$this->arr_buttons['btn_1']['hint']             = "";
$this->arr_buttons['btn_1']['type']             = "button";
$this->arr_buttons['btn_1']['value']            = "$_SESSION[Igtech_NombreUsuario]";
$this->arr_buttons['btn_1']['display']          = "text_fontawesomeicon";
$this->arr_buttons['btn_1']['display_position'] = "text_right";
$this->arr_buttons['btn_1']['style']            = "default";
$this->arr_buttons['btn_1']['image']            = "";

$this->arr_buttons['btn_1']['has_fa']           = "true";

$this->arr_buttons['btn_1']['fontawesomeicon']  = "fas fa-user";

$this->nmgp_botoes['btn_5']  = 'on';
$this->arr_buttons['btn_5']['hint']             = "";
$this->arr_buttons['btn_5']['type']             = "button";
$this->arr_buttons['btn_5']['value']            = "" . $Nm_lang['lang_salir'] . "";
$this->arr_buttons['btn_5']['display']          = "text_fontawesomeicon";
$this->arr_buttons['btn_5']['display_position'] = "text_right";
$this->arr_buttons['btn_5']['style']            = "small";
$this->arr_buttons['btn_5']['image']            = "";

$this->arr_buttons['btn_5']['has_fa']           = "true";

$this->arr_buttons['btn_5']['fontawesomeicon']  = "fas fa-sign-out-alt";


?>
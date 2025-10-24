<?php

if(isset($this->Ini->Nm_lang))
{
    $Nm_lang = $this->Ini->Nm_lang;
}
else
{
    $Nm_lang = $this->Nm_lang;
}


$this->nmgp_botoes['btn_1']  = 'on';
$this->arr_buttons['btn_1']['hint']             = "";
$this->arr_buttons['btn_1']['type']             = "button";
$this->arr_buttons['btn_1']['value']            = " ";
$this->arr_buttons['btn_1']['display']          = "text_fontawesomeicon";
$this->arr_buttons['btn_1']['display_position'] = "text_right";
$this->arr_buttons['btn_1']['style']            = "default";
$this->arr_buttons['btn_1']['image']            = "";

$this->arr_buttons['btn_1']['has_fa']           = "true";

$this->arr_buttons['btn_1']['fontawesomeicon']  = "fas fa-home";

$this->nmgp_botoes['btn_5']  = 'on';
$this->arr_buttons['btn_5']['hint']             = "";
$this->arr_buttons['btn_5']['type']             = "button";
$this->arr_buttons['btn_5']['value']            = "$_SESSION[Igtech_NombreUsuario]";
$this->arr_buttons['btn_5']['display']          = "text_fontawesomeicon";
$this->arr_buttons['btn_5']['display_position'] = "text_right";
$this->arr_buttons['btn_5']['style']            = "default";
$this->arr_buttons['btn_5']['image']            = "";

$this->arr_buttons['btn_5']['has_fa']           = "true";

$this->arr_buttons['btn_5']['fontawesomeicon']  = "far fa-user";

$this->nmgp_botoes['btn_4']  = 'on';
$this->arr_buttons['btn_4']['hint']             = "";
$this->arr_buttons['btn_4']['type']             = "button";
$this->arr_buttons['btn_4']['value']            = "" . $Nm_lang['lang_cambio_contrasenia'] . "";
$this->arr_buttons['btn_4']['display']          = "text_fontawesomeicon";
$this->arr_buttons['btn_4']['display_position'] = "text_right";
$this->arr_buttons['btn_4']['style']            = "default";
$this->arr_buttons['btn_4']['image']            = "";

$this->arr_buttons['btn_4']['has_fa']           = "true";

$this->arr_buttons['btn_4']['fontawesomeicon']  = "far fa-edit";

$this->nmgp_botoes['btn_3']  = 'on';
$this->arr_buttons['btn_3']['hint']             = "";
$this->arr_buttons['btn_3']['type']             = "button";
$this->arr_buttons['btn_3']['value']            = "" . $Nm_lang['lang_salir'] . "";
$this->arr_buttons['btn_3']['display']          = "text_fontawesomeicon";
$this->arr_buttons['btn_3']['display_position'] = "text_right";
$this->arr_buttons['btn_3']['style']            = "default";
$this->arr_buttons['btn_3']['image']            = "";

$this->arr_buttons['btn_3']['has_fa']           = "true";

$this->arr_buttons['btn_3']['fontawesomeicon']  = "fas fa-sign-out-alt";


?>
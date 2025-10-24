
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($oField.length > 0) {
    switch ($oField[0].name) {
      case 'emp_logo':
      case 'emp_ruc':
      case 'emp_razon_social':
      case 'emp_nombre_comercial':
      case 'emp_representante_legal':
      case 'emp_direccion_matriz':
      case 'emp_telefono':
      case 'emp_email':
      case 'emp_firma':
      case 'emp_clave_firma':
      case 'emp_codigo_empresa_debi':
      case 'emp_obligado':
      case 'emp_estado':
      case 'escontribuyenteespecial':
      case 'emp_contribuyente_especial':
      case 'esartesanocalificado':
      case 'emp_calificacion_artesanal':
      case 'emp_es_op_transporte':
      case 'emp_socio_transportista':
      case 'es_profesionalsalud':
      case 'emp_agente_retencion':
      case 'emp_ambiente_sri':
      case 'emp_autorizacion_inmediata':
      case 'emp_comisionista':
      case 'emp_tipo_suscripcion':
        sc_exib_ocult_pag('form_admin_empresas_form0');
        break;
      case 'establecimiento':
        sc_exib_ocult_pag('form_admin_empresas_form1');
        break;
      case 'punto_emision':
        sc_exib_ocult_pag('form_admin_empresas_form2');
        break;
      case 'usuarios':
        sc_exib_ocult_pag('form_admin_empresas_form3');
        break;
      case 'productos':
        sc_exib_ocult_pag('form_admin_empresas_form4');
        break;
      case 'tienda_web':
        sc_exib_ocult_pag('form_admin_empresas_form5');
        break;
    }
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["emp_logo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_ruc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_razon_social" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_nombre_comercial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_representante_legal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_direccion_matriz" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_firma" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_clave_firma" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_codigo_empresa_debi" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_obligado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["escontribuyenteespecial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_contribuyente_especial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["esartesanocalificado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_calificacion_artesanal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_es_op_transporte" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_socio_transportista" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["es_profesionalsalud" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_agente_retencion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_ambiente_sri" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_autorizacion_inmediata" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_comisionista" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_tipo_suscripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["establecimiento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["punto_emision" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["usuarios" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["productos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tienda_web" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["emp_ruc" + iSeqRow] && scEventControl_data["emp_ruc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_ruc" + iSeqRow] && scEventControl_data["emp_ruc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_razon_social" + iSeqRow] && scEventControl_data["emp_razon_social" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_razon_social" + iSeqRow] && scEventControl_data["emp_razon_social" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_nombre_comercial" + iSeqRow] && scEventControl_data["emp_nombre_comercial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_nombre_comercial" + iSeqRow] && scEventControl_data["emp_nombre_comercial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_representante_legal" + iSeqRow] && scEventControl_data["emp_representante_legal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_representante_legal" + iSeqRow] && scEventControl_data["emp_representante_legal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_direccion_matriz" + iSeqRow] && scEventControl_data["emp_direccion_matriz" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_direccion_matriz" + iSeqRow] && scEventControl_data["emp_direccion_matriz" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_telefono" + iSeqRow] && scEventControl_data["emp_telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_telefono" + iSeqRow] && scEventControl_data["emp_telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_email" + iSeqRow] && scEventControl_data["emp_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_email" + iSeqRow] && scEventControl_data["emp_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_clave_firma" + iSeqRow] && scEventControl_data["emp_clave_firma" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_clave_firma" + iSeqRow] && scEventControl_data["emp_clave_firma" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_codigo_empresa_debi" + iSeqRow] && scEventControl_data["emp_codigo_empresa_debi" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_codigo_empresa_debi" + iSeqRow] && scEventControl_data["emp_codigo_empresa_debi" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_obligado" + iSeqRow] && scEventControl_data["emp_obligado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_obligado" + iSeqRow] && scEventControl_data["emp_obligado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_estado" + iSeqRow] && scEventControl_data["emp_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_estado" + iSeqRow] && scEventControl_data["emp_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["escontribuyenteespecial" + iSeqRow] && scEventControl_data["escontribuyenteespecial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["escontribuyenteespecial" + iSeqRow] && scEventControl_data["escontribuyenteespecial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_contribuyente_especial" + iSeqRow] && scEventControl_data["emp_contribuyente_especial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_contribuyente_especial" + iSeqRow] && scEventControl_data["emp_contribuyente_especial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["esartesanocalificado" + iSeqRow] && scEventControl_data["esartesanocalificado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["esartesanocalificado" + iSeqRow] && scEventControl_data["esartesanocalificado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_calificacion_artesanal" + iSeqRow] && scEventControl_data["emp_calificacion_artesanal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_calificacion_artesanal" + iSeqRow] && scEventControl_data["emp_calificacion_artesanal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_es_op_transporte" + iSeqRow] && scEventControl_data["emp_es_op_transporte" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_es_op_transporte" + iSeqRow] && scEventControl_data["emp_es_op_transporte" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_socio_transportista" + iSeqRow] && scEventControl_data["emp_socio_transportista" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_socio_transportista" + iSeqRow] && scEventControl_data["emp_socio_transportista" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["es_profesionalsalud" + iSeqRow] && scEventControl_data["es_profesionalsalud" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["es_profesionalsalud" + iSeqRow] && scEventControl_data["es_profesionalsalud" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_agente_retencion" + iSeqRow] && scEventControl_data["emp_agente_retencion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_agente_retencion" + iSeqRow] && scEventControl_data["emp_agente_retencion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_ambiente_sri" + iSeqRow] && scEventControl_data["emp_ambiente_sri" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_ambiente_sri" + iSeqRow] && scEventControl_data["emp_ambiente_sri" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_autorizacion_inmediata" + iSeqRow] && scEventControl_data["emp_autorizacion_inmediata" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_autorizacion_inmediata" + iSeqRow] && scEventControl_data["emp_autorizacion_inmediata" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_comisionista" + iSeqRow] && scEventControl_data["emp_comisionista" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_comisionista" + iSeqRow] && scEventControl_data["emp_comisionista" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_tipo_suscripcion" + iSeqRow] && scEventControl_data["emp_tipo_suscripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_tipo_suscripcion" + iSeqRow] && scEventControl_data["emp_tipo_suscripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["establecimiento" + iSeqRow] && scEventControl_data["establecimiento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["establecimiento" + iSeqRow] && scEventControl_data["establecimiento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["punto_emision" + iSeqRow] && scEventControl_data["punto_emision" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["punto_emision" + iSeqRow] && scEventControl_data["punto_emision" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["usuarios" + iSeqRow] && scEventControl_data["usuarios" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["usuarios" + iSeqRow] && scEventControl_data["usuarios" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["productos" + iSeqRow] && scEventControl_data["productos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["productos" + iSeqRow] && scEventControl_data["productos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tienda_web" + iSeqRow] && scEventControl_data["tienda_web" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tienda_web" + iSeqRow] && scEventControl_data["tienda_web" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("emp_estado" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("emp_comisionista" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_emp_ruc' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_ruc_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_admin_empresas_emp_ruc_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_admin_empresas_emp_ruc_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_razon_social' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_razon_social_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_admin_empresas_emp_razon_social_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_admin_empresas_emp_razon_social_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_nombre_comercial' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_nombre_comercial_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_admin_empresas_emp_nombre_comercial_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_admin_empresas_emp_nombre_comercial_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_logo' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_logo_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_admin_empresas_emp_logo_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_admin_empresas_emp_logo_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_firma' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_firma_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_admin_empresas_emp_firma_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_admin_empresas_emp_firma_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_clave_firma' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_clave_firma_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_admin_empresas_emp_clave_firma_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_admin_empresas_emp_clave_firma_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_obligado' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_obligado_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_admin_empresas_emp_obligado_onchange(this, iSeqRow) })
                                          .bind('click', function() { sc_form_admin_empresas_emp_obligado_onclick(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_admin_empresas_emp_obligado_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_contribuyente_especial' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_contribuyente_especial_onblur(this, iSeqRow) })
                                                        .bind('change', function() { sc_form_admin_empresas_emp_contribuyente_especial_onchange(this, iSeqRow) })
                                                        .bind('focus', function() { sc_form_admin_empresas_emp_contribuyente_especial_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_estado' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_estado_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_admin_empresas_emp_estado_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_admin_empresas_emp_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_email' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_email_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_admin_empresas_emp_email_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_admin_empresas_emp_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_ambiente_sri' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_ambiente_sri_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_admin_empresas_emp_ambiente_sri_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_admin_empresas_emp_ambiente_sri_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_direccion_matriz' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_direccion_matriz_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_admin_empresas_emp_direccion_matriz_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_admin_empresas_emp_direccion_matriz_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_autorizacion_inmediata' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_autorizacion_inmediata_onblur(this, iSeqRow) })
                                                        .bind('change', function() { sc_form_admin_empresas_emp_autorizacion_inmediata_onchange(this, iSeqRow) })
                                                        .bind('focus', function() { sc_form_admin_empresas_emp_autorizacion_inmediata_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_es_op_transporte' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_es_op_transporte_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_admin_empresas_emp_es_op_transporte_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_admin_empresas_emp_es_op_transporte_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_regimen_especial' + iSeqRow).bind('change', function() { sc_form_admin_empresas_emp_regimen_especial_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_agente_retencion' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_agente_retencion_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_admin_empresas_emp_agente_retencion_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_admin_empresas_emp_agente_retencion_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_representante_legal' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_representante_legal_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_admin_empresas_emp_representante_legal_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_admin_empresas_emp_representante_legal_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_telefono' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_telefono_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_admin_empresas_emp_telefono_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_admin_empresas_emp_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_calificacion_artesanal' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_calificacion_artesanal_onblur(this, iSeqRow) })
                                                        .bind('change', function() { sc_form_admin_empresas_emp_calificacion_artesanal_onchange(this, iSeqRow) })
                                                        .bind('focus', function() { sc_form_admin_empresas_emp_calificacion_artesanal_onfocus(this, iSeqRow) });
  $('#id_sc_field_escontribuyenteespecial' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_escontribuyenteespecial_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_admin_empresas_escontribuyenteespecial_onchange(this, iSeqRow) })
                                                     .bind('click', function() { sc_form_admin_empresas_escontribuyenteespecial_onclick(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_admin_empresas_escontribuyenteespecial_onfocus(this, iSeqRow) });
  $('#id_sc_field_esartesanocalificado' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_esartesanocalificado_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_admin_empresas_esartesanocalificado_onchange(this, iSeqRow) })
                                                  .bind('click', function() { sc_form_admin_empresas_esartesanocalificado_onclick(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_admin_empresas_esartesanocalificado_onfocus(this, iSeqRow) });
  $('#id_sc_field_es_profesionalsalud' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_es_profesionalsalud_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_admin_empresas_es_profesionalsalud_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_admin_empresas_es_profesionalsalud_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_primeracompra' + iSeqRow).bind('change', function() { sc_form_admin_empresas_emp_primeracompra_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_tipo_empresa' + iSeqRow).bind('change', function() { sc_form_admin_empresas_emp_tipo_empresa_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_comisionista' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_comisionista_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_admin_empresas_emp_comisionista_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_admin_empresas_emp_comisionista_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_tipo_suscripcion' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_tipo_suscripcion_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_admin_empresas_emp_tipo_suscripcion_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_admin_empresas_emp_tipo_suscripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_id_representante' + iSeqRow).bind('change', function() { sc_form_admin_empresas_emp_id_representante_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_fecha_crea' + iSeqRow).bind('change', function() { sc_form_admin_empresas_emp_fecha_crea_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_fecha_crea_hora' + iSeqRow).bind('change', function() { sc_form_admin_empresas_emp_fecha_crea_hora_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_socio_transportista' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_socio_transportista_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_admin_empresas_emp_socio_transportista_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_admin_empresas_emp_socio_transportista_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_codigo_empresa_debi' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_emp_codigo_empresa_debi_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_admin_empresas_emp_codigo_empresa_debi_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_admin_empresas_emp_codigo_empresa_debi_onfocus(this, iSeqRow) });
  $('#id_sc_field_establecimiento' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_establecimiento_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_admin_empresas_establecimiento_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_admin_empresas_establecimiento_onfocus(this, iSeqRow) });
  $('#id_sc_field_punto_emision' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_punto_emision_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_admin_empresas_punto_emision_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_admin_empresas_punto_emision_onfocus(this, iSeqRow) });
  $('#id_sc_field_tienda_web' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_tienda_web_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_admin_empresas_tienda_web_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_admin_empresas_tienda_web_onfocus(this, iSeqRow) });
  $('#id_sc_field_productos' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_productos_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_admin_empresas_productos_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_admin_empresas_productos_onfocus(this, iSeqRow) });
  $('#id_sc_field_usuarios' + iSeqRow).bind('blur', function() { sc_form_admin_empresas_usuarios_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_admin_empresas_usuarios_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_admin_empresas_usuarios_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-emp_obligado' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-escontribuyenteespecial' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-esartesanocalificado' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-emp_es_op_transporte' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-emp_socio_transportista' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-es_profesionalsalud' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-emp_agente_retencion' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-radio-emp_ambiente_sri' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-emp_autorizacion_inmediata' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-radio-emp_tipo_suscripcion' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-emp_regimen_especial' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_admin_empresas_emp_ruc_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_ruc();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_ruc_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_ruc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_razon_social_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_razon_social();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_razon_social_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_razon_social_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_nombre_comercial_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_nombre_comercial();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_nombre_comercial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_nombre_comercial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_logo_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_logo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_logo_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_firma_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_firma_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_firma_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_clave_firma_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_clave_firma();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_clave_firma_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_clave_firma_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_obligado_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_obligado();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_obligado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_obligado_onclick(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_event_emp_obligado_onclick();
}

function sc_form_admin_empresas_emp_obligado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_contribuyente_especial_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_contribuyente_especial();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_contribuyente_especial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_contribuyente_especial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_estado();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_email_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_email();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_email_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_ambiente_sri_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_ambiente_sri();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_ambiente_sri_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_ambiente_sri_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_direccion_matriz_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_direccion_matriz();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_direccion_matriz_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_direccion_matriz_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_autorizacion_inmediata_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_autorizacion_inmediata();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_autorizacion_inmediata_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_autorizacion_inmediata_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_es_op_transporte_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_es_op_transporte();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_es_op_transporte_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_es_op_transporte_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_regimen_especial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_agente_retencion_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_agente_retencion();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_agente_retencion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_agente_retencion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_representante_legal_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_representante_legal();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_representante_legal_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_representante_legal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_telefono();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_telefono_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_calificacion_artesanal_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_calificacion_artesanal();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_calificacion_artesanal_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_calificacion_artesanal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_escontribuyenteespecial_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_escontribuyenteespecial();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_escontribuyenteespecial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_escontribuyenteespecial_onclick(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_event_escontribuyenteespecial_onclick();
}

function sc_form_admin_empresas_escontribuyenteespecial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_esartesanocalificado_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_esartesanocalificado();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_esartesanocalificado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_esartesanocalificado_onclick(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_event_esartesanocalificado_onclick();
}

function sc_form_admin_empresas_esartesanocalificado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_es_profesionalsalud_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_es_profesionalsalud();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_es_profesionalsalud_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_es_profesionalsalud_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_primeracompra_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_tipo_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_comisionista_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_comisionista();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_comisionista_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_comisionista_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_tipo_suscripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_tipo_suscripcion();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_tipo_suscripcion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_tipo_suscripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_id_representante_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_fecha_crea_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_fecha_crea_hora_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_socio_transportista_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_socio_transportista();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_socio_transportista_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_socio_transportista_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_emp_codigo_empresa_debi_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_emp_codigo_empresa_debi();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_emp_codigo_empresa_debi_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_emp_codigo_empresa_debi_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_establecimiento_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_establecimiento();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_establecimiento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_establecimiento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_punto_emision_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_punto_emision();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_punto_emision_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_punto_emision_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_tienda_web_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_tienda_web();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_tienda_web_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_tienda_web_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_productos_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_productos();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_productos_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_productos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_admin_empresas_usuarios_onblur(oThis, iSeqRow) {
  do_ajax_form_admin_empresas_validate_usuarios();
  scCssBlur(oThis);
}

function sc_form_admin_empresas_usuarios_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_admin_empresas_usuarios_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_page(page, status) {
	if ("0" == page) {
		displayChange_page_0(status);
	}
	if ("1" == page) {
		displayChange_page_1(status);
	}
	if ("2" == page) {
		displayChange_page_2(status);
	}
	if ("3" == page) {
		displayChange_page_3(status);
	}
	if ("4" == page) {
		displayChange_page_4(status);
	}
	if ("5" == page) {
		displayChange_page_5(status);
	}
}

function displayChange_page_0(status) {
	displayChange_block("0", status);
	displayChange_block("1", status);
	displayChange_block("2", status);
}

function displayChange_page_1(status) {
	displayChange_block("3", status);
}

function displayChange_page_2(status) {
	displayChange_block("4", status);
}

function displayChange_page_3(status) {
	displayChange_block("5", status);
}

function displayChange_page_4(status) {
	displayChange_block("6", status);
}

function displayChange_page_5(status) {
	displayChange_block("7", status);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
	if ("1" == block) {
		displayChange_block_1(status);
	}
	if ("2" == block) {
		displayChange_block_2(status);
	}
	if ("3" == block) {
		displayChange_block_3(status);
	}
	if ("4" == block) {
		displayChange_block_4(status);
	}
	if ("5" == block) {
		displayChange_block_5(status);
	}
	if ("6" == block) {
		displayChange_block_6(status);
	}
	if ("7" == block) {
		displayChange_block_7(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("emp_logo", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("emp_ruc", "", status);
	displayChange_field("emp_razon_social", "", status);
	displayChange_field("emp_nombre_comercial", "", status);
	displayChange_field("emp_representante_legal", "", status);
	displayChange_field("emp_direccion_matriz", "", status);
	displayChange_field("emp_telefono", "", status);
	displayChange_field("emp_email", "", status);
	displayChange_field("emp_firma", "", status);
	displayChange_field("emp_clave_firma", "", status);
	displayChange_field("emp_codigo_empresa_debi", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("emp_obligado", "", status);
	displayChange_field("emp_estado", "", status);
	displayChange_field("escontribuyenteespecial", "", status);
	displayChange_field("emp_contribuyente_especial", "", status);
	displayChange_field("esartesanocalificado", "", status);
	displayChange_field("emp_calificacion_artesanal", "", status);
	displayChange_field("emp_es_op_transporte", "", status);
	displayChange_field("emp_socio_transportista", "", status);
	displayChange_field("es_profesionalsalud", "", status);
	displayChange_field("emp_agente_retencion", "", status);
	displayChange_field("emp_ambiente_sri", "", status);
	displayChange_field("emp_autorizacion_inmediata", "", status);
	displayChange_field("emp_comisionista", "", status);
	displayChange_field("emp_tipo_suscripcion", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("establecimiento", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("punto_emision", "", status);
}

function displayChange_block_5(status) {
	displayChange_field("usuarios", "", status);
}

function displayChange_block_6(status) {
	displayChange_field("productos", "", status);
}

function displayChange_block_7(status) {
	displayChange_field("tienda_web", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_emp_logo(row, status);
	displayChange_field_emp_ruc(row, status);
	displayChange_field_emp_razon_social(row, status);
	displayChange_field_emp_nombre_comercial(row, status);
	displayChange_field_emp_representante_legal(row, status);
	displayChange_field_emp_direccion_matriz(row, status);
	displayChange_field_emp_telefono(row, status);
	displayChange_field_emp_email(row, status);
	displayChange_field_emp_firma(row, status);
	displayChange_field_emp_clave_firma(row, status);
	displayChange_field_emp_codigo_empresa_debi(row, status);
	displayChange_field_emp_obligado(row, status);
	displayChange_field_emp_estado(row, status);
	displayChange_field_escontribuyenteespecial(row, status);
	displayChange_field_emp_contribuyente_especial(row, status);
	displayChange_field_esartesanocalificado(row, status);
	displayChange_field_emp_calificacion_artesanal(row, status);
	displayChange_field_emp_es_op_transporte(row, status);
	displayChange_field_emp_socio_transportista(row, status);
	displayChange_field_es_profesionalsalud(row, status);
	displayChange_field_emp_agente_retencion(row, status);
	displayChange_field_emp_ambiente_sri(row, status);
	displayChange_field_emp_autorizacion_inmediata(row, status);
	displayChange_field_emp_comisionista(row, status);
	displayChange_field_emp_tipo_suscripcion(row, status);
	displayChange_field_establecimiento(row, status);
	displayChange_field_punto_emision(row, status);
	displayChange_field_usuarios(row, status);
	displayChange_field_productos(row, status);
	displayChange_field_tienda_web(row, status);
}

function displayChange_field(field, row, status) {
	if ("emp_logo" == field) {
		displayChange_field_emp_logo(row, status);
	}
	if ("emp_ruc" == field) {
		displayChange_field_emp_ruc(row, status);
	}
	if ("emp_razon_social" == field) {
		displayChange_field_emp_razon_social(row, status);
	}
	if ("emp_nombre_comercial" == field) {
		displayChange_field_emp_nombre_comercial(row, status);
	}
	if ("emp_representante_legal" == field) {
		displayChange_field_emp_representante_legal(row, status);
	}
	if ("emp_direccion_matriz" == field) {
		displayChange_field_emp_direccion_matriz(row, status);
	}
	if ("emp_telefono" == field) {
		displayChange_field_emp_telefono(row, status);
	}
	if ("emp_email" == field) {
		displayChange_field_emp_email(row, status);
	}
	if ("emp_firma" == field) {
		displayChange_field_emp_firma(row, status);
	}
	if ("emp_clave_firma" == field) {
		displayChange_field_emp_clave_firma(row, status);
	}
	if ("emp_codigo_empresa_debi" == field) {
		displayChange_field_emp_codigo_empresa_debi(row, status);
	}
	if ("emp_obligado" == field) {
		displayChange_field_emp_obligado(row, status);
	}
	if ("emp_estado" == field) {
		displayChange_field_emp_estado(row, status);
	}
	if ("escontribuyenteespecial" == field) {
		displayChange_field_escontribuyenteespecial(row, status);
	}
	if ("emp_contribuyente_especial" == field) {
		displayChange_field_emp_contribuyente_especial(row, status);
	}
	if ("esartesanocalificado" == field) {
		displayChange_field_esartesanocalificado(row, status);
	}
	if ("emp_calificacion_artesanal" == field) {
		displayChange_field_emp_calificacion_artesanal(row, status);
	}
	if ("emp_es_op_transporte" == field) {
		displayChange_field_emp_es_op_transporte(row, status);
	}
	if ("emp_socio_transportista" == field) {
		displayChange_field_emp_socio_transportista(row, status);
	}
	if ("es_profesionalsalud" == field) {
		displayChange_field_es_profesionalsalud(row, status);
	}
	if ("emp_agente_retencion" == field) {
		displayChange_field_emp_agente_retencion(row, status);
	}
	if ("emp_ambiente_sri" == field) {
		displayChange_field_emp_ambiente_sri(row, status);
	}
	if ("emp_autorizacion_inmediata" == field) {
		displayChange_field_emp_autorizacion_inmediata(row, status);
	}
	if ("emp_comisionista" == field) {
		displayChange_field_emp_comisionista(row, status);
	}
	if ("emp_tipo_suscripcion" == field) {
		displayChange_field_emp_tipo_suscripcion(row, status);
	}
	if ("establecimiento" == field) {
		displayChange_field_establecimiento(row, status);
	}
	if ("punto_emision" == field) {
		displayChange_field_punto_emision(row, status);
	}
	if ("usuarios" == field) {
		displayChange_field_usuarios(row, status);
	}
	if ("productos" == field) {
		displayChange_field_productos(row, status);
	}
	if ("tienda_web" == field) {
		displayChange_field_tienda_web(row, status);
	}
}

function displayChange_field_emp_logo(row, status) {
    var fieldId;
}

function displayChange_field_emp_ruc(row, status) {
    var fieldId;
}

function displayChange_field_emp_razon_social(row, status) {
    var fieldId;
}

function displayChange_field_emp_nombre_comercial(row, status) {
    var fieldId;
}

function displayChange_field_emp_representante_legal(row, status) {
    var fieldId;
}

function displayChange_field_emp_direccion_matriz(row, status) {
    var fieldId;
}

function displayChange_field_emp_telefono(row, status) {
    var fieldId;
}

function displayChange_field_emp_email(row, status) {
    var fieldId;
}

function displayChange_field_emp_firma(row, status) {
    var fieldId;
}

function displayChange_field_emp_clave_firma(row, status) {
    var fieldId;
}

function displayChange_field_emp_codigo_empresa_debi(row, status) {
    var fieldId;
}

function displayChange_field_emp_obligado(row, status) {
    var fieldId;
}

function displayChange_field_emp_estado(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_emp_estado__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_emp_estado" + row).select2("destroy");
		}
		scJQSelect2Add(row, "emp_estado");
	}
}

function displayChange_field_escontribuyenteespecial(row, status) {
    var fieldId;
}

function displayChange_field_emp_contribuyente_especial(row, status) {
    var fieldId;
}

function displayChange_field_esartesanocalificado(row, status) {
    var fieldId;
}

function displayChange_field_emp_calificacion_artesanal(row, status) {
    var fieldId;
}

function displayChange_field_emp_es_op_transporte(row, status) {
    var fieldId;
}

function displayChange_field_emp_socio_transportista(row, status) {
    var fieldId;
}

function displayChange_field_es_profesionalsalud(row, status) {
    var fieldId;
}

function displayChange_field_emp_agente_retencion(row, status) {
    var fieldId;
}

function displayChange_field_emp_ambiente_sri(row, status) {
    var fieldId;
}

function displayChange_field_emp_autorizacion_inmediata(row, status) {
    var fieldId;
}

function displayChange_field_emp_comisionista(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_emp_comisionista__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_emp_comisionista" + row).select2("destroy");
		}
		scJQSelect2Add(row, "emp_comisionista");
	}
}

function displayChange_field_emp_tipo_suscripcion(row, status) {
    var fieldId;
}

function displayChange_field_establecimiento(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_admin_establecimientos")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_admin_establecimientos")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_punto_emision(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_admin_punto_emision")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_admin_punto_emision")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_usuarios(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_del_usuario_admin")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_del_usuario_admin")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_productos(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_admin_productos")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_admin_productos")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_tienda_web(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_del_config_tienda_config")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_del_config_tienda_config")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_emp_estado("all", "on");
	displayChange_field_emp_comisionista("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_admin_empresas_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(27);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_emp_fecha_crea" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_emp_fecha_crea" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['emp_fecha_crea']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['emp_fecha_crea']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime)
<?php
if ('' != $miniCalendarFA) {
?>
    .next('button').append("<?php echo $miniCalendarFA; ?>")
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    .next('button').append("<?php echo $miniCalendarButton[0]; ?>")
<?php
}
?>
    },
    onClose: function(dateText, inst) {
      do_ajax_form_admin_empresas_validate_emp_fecha_crea(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['emp_fecha_crea']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  })
<?php
if ('' != $miniCalendarFA) {
?>
    .next('button').append("<?php echo $miniCalendarFA; ?>")
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    .next('button').append("<?php echo $miniCalendarButton[0]; ?>")
<?php
}
?>
} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_emp_logo" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_admin_empresas_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'emp_logo'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_emp_logo" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_emp_logo" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_emp_logo" + iSeqRow).val("");
      $("#id_sc_field_emp_logo_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_emp_logo_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_emp_logo = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_emp_logo) ? "none" : "";
      $("#id_ajax_img_emp_logo" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_emp_logo" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_emp_logo) {
        document.F1.temp_out_emp_logo.value = var_ajax_img_thumb;
        document.F1.temp_out1_emp_logo.value = var_ajax_img_emp_logo;
      }
      else if (document.F1.temp_out_emp_logo) {
        document.F1.temp_out_emp_logo.value = var_ajax_img_emp_logo;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_emp_logo" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_emp_logo" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_emp_logo" + iSeqRow).css("display", "none");
      $("#id_ajax_link_emp_logo" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_emp_firma" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_admin_empresas_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'emp_firma'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_emp_firma" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_emp_firma" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_emp_firma" + iSeqRow).val("");
      $("#id_sc_field_emp_firma_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_emp_firma_ul_type" + iSeqRow).val(fileData[0].type);
      $("#id_ajax_doc_emp_firma" + iSeqRow).html(fileData[0].name);
      $("#id_ajax_doc_emp_firma" + iSeqRow).css("display", "");
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_emp_firma" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_emp_firma" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd

var api_cache_requests = [];
function ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, hasRun, img_before){
    setTimeout(function(){
        if(img_name == '') return;
        iSeqRow= iSeqRow !== undefined && iSeqRow !== null ? iSeqRow : '';
        var hasVar = p.indexOf('_@NM@_') > -1 || p_cache.indexOf('_@NM@_') > -1 ? true : false;

        p = p.split('_@NM@_');
        $.each(p, function(i,v){
            try{
                p[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p[i] = v;
            }
        });
        p = p.join('');

        p_cache = p_cache.split('_@NM@_');
        $.each(p_cache, function(i,v){
            try{
                p_cache[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p_cache[i] = v;
            }
        });
        p_cache = p_cache.join('');

        img_before = img_before !== undefined ? img_before : $(t).attr('src');
        var str_key_cache = '<?php echo $this->Ini->sc_page; ?>' + img_name+field+p+p_cache;
        if(api_cache_requests[ str_key_cache ] !== undefined && api_cache_requests[ str_key_cache ] !== null){
            if(api_cache_requests[ str_key_cache ] != false){
                do_ajax_check_file(api_cache_requests[ str_key_cache ], field  ,t, iSeqRow);
            }
            return;
        }
        //scAjaxProcOn();
        $(t).attr('src', '<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif');
        api_cache_requests[ str_key_cache ] = false;
        var rs =$.ajax({
                    type: "POST",
                    url: 'index.php?script_case_init=<?php echo $this->Ini->sc_page; ?>',
                    async: true,
                    data:'nmgp_opcao=ajax_check_file&AjaxCheckImg=' + encodeURI(img_name) +'&rsargs='+ field + '&p=' + p + '&p_cache=' + p_cache,
                    success: function (rs) {
                        if(rs.indexOf('</span>') != -1){
                            rs = rs.substr(rs.indexOf('</span>') + 7);
                        }
                        if(rs.indexOf('/') != -1 && rs.indexOf('/') != 0){
                            rs = rs.substr(rs.indexOf('/'));
                        }
                        rs = sc_trim(rs);

                        // if(rs == 0 && hasVar && hasRun === undefined){
                        //     delete window.api_cache_requests[ str_key_cache ];
                        //     ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, 1, img_before);
                        //     return;
                        // }
                        window.api_cache_requests[ str_key_cache ] = rs;
                        do_ajax_check_file(rs, field  ,t, iSeqRow)
                        if(rs == 0){
                            delete window.api_cache_requests[ str_key_cache ];

                           // $(t).attr('src',img_before);
                            do_ajax_check_file(img_before+'_@@NM@@_' + img_before, field  ,t, iSeqRow)

                        }


                    }
        });
    },100);
}

function do_ajax_check_file(rs, field  ,t, iSeqRow){
    if (rs != 0) {
        rs_split = rs.split('_@@NM@@_');
        rs_orig = rs_split[0];
        rs2 = rs_split[1];
        try{
            if(!$(t).is('img')){

                if($('#id_read_on_'+field+iSeqRow).length > 0 ){
                                    var usa_read_only = false;

                switch(field){

                }
                     if(usa_read_only && $('a',$('#id_read_on_'+field+iSeqRow)).length == 0){
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_admin_empresas')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
                     }
                }
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href', target.join(','));
                }else{
                    var target = $(t).attr('href').split(',');
                     target[1] = "'"+rs2+"'";
                     $(t).attr('href', target.join(','));
                }
            }else{
                $(t).attr('src', rs2);
                $(t).css('display', '');
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $(t).attr('href', target.join(','));
                }else{
                     var t_link = $(t).parent('a');
                     var target = $(t_link).attr('href').split(',');
                     target[0] = "javascript:nm_mostra_img('"+rs_orig+"'";
                     $(t_link).attr('href', target.join(','));
                }

            }
            eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        } catch(err){
                        eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        }
    }
   /* hasFalseCacheRequest = false;
    $.each(api_cache_requests, function(i,v){
        if(v == false){
            hasFalseCacheRequest = true;
        }
    });
    if(hasFalseCacheRequest == false){
        scAjaxProcOff();
    }*/
}

$(document).ready(function(){
});

function scJQPasswordToggleAdd(seqRow) {
  $(".sc-ui-pwd-toggle-icon" + seqRow).on("click", function() {
    var fieldName = $(this).attr("id").substr(17), fieldObj = $("#id_sc_field_" + fieldName), fieldFA = $("#id_pwd_fa_" + fieldName);
    if ("text" == fieldObj.attr("type")) {
      fieldObj.attr("type", "password");
      fieldFA.attr("class", "fa fa-eye sc-ui-pwd-eye");
    } else {
      fieldObj.attr("type", "text");
      fieldFA.attr("class", "fa fa-eye-slash sc-ui-pwd-eye");
    }
  });
} // scJQPasswordToggleAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "emp_estado" == specificField) {
    scJQSelect2Add_emp_estado(seqRow);
  }
  if (null == specificField || "emp_comisionista" == specificField) {
    scJQSelect2Add_emp_comisionista(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_emp_estado(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_emp_estado_obj" : "#id_sc_field_emp_estado" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_emp_estado_obj',
      dropdownCssClass: 'css_emp_estado_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_emp_comisionista(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_emp_comisionista_obj" : "#id_sc_field_emp_comisionista" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_emp_comisionista_obj',
      dropdownCssClass: 'css_emp_comisionista_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_emp_estado) { displayChange_field_emp_estado(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_emp_comisionista) { displayChange_field_emp_comisionista(iLine, "on"); } }, 150);
} // scJQElementsAdd

function scGetFileExtension(fileName)
{
    fileNameParts = fileName.split(".");

    if (1 === fileNameParts.length || (2 === fileNameParts.length && "" == fileNameParts[0])) {
        return "";
    }

    return fileNameParts.pop().toLowerCase();
}

function scFormatExtensionSizeErrorMsg(errorMsg)
{
    var msgInfo = errorMsg.split("||"), returnMsg = "";

    if ("err_size" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_size'] ?>. <?php echo $this->Ini->Nm_lang['lang_errm_file_size_extension'] ?>".replace("{SC_EXTENSION}", msgInfo[1]).replace("{SC_LIMIT}", msgInfo[2]);
    } else if ("err_extension" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl'] ?>";
    }

    return returnMsg;
}


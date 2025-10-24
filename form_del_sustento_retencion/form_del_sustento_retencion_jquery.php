
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
  scEventControl_data["sr_fechaemision" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_fecha_registro_contable" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_cod_docsustento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_cod_sustento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_retencion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_serie" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_secuencial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_autorizacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_total_sin_impuestos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_importe_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_pago_loc_ext" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_tipo_regimen" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_pais" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_paraiso_fiscal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_pais_pago" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_aplica_doble_trib" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_pago_sujeto_retencion_nc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_pago_reg_fis" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_total_reembolsos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_total_baseimponible_reembolsos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sr_total_impuesto_reeemboso" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["impuestos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pagos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["retenciones" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["sr_fechaemision" + iSeqRow] && scEventControl_data["sr_fechaemision" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_fechaemision" + iSeqRow] && scEventControl_data["sr_fechaemision" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_fecha_registro_contable" + iSeqRow] && scEventControl_data["sr_fecha_registro_contable" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_fecha_registro_contable" + iSeqRow] && scEventControl_data["sr_fecha_registro_contable" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_cod_docsustento" + iSeqRow] && scEventControl_data["sr_cod_docsustento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_cod_docsustento" + iSeqRow] && scEventControl_data["sr_cod_docsustento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_cod_sustento" + iSeqRow] && scEventControl_data["sr_cod_sustento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_cod_sustento" + iSeqRow] && scEventControl_data["sr_cod_sustento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_id" + iSeqRow] && scEventControl_data["sr_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_id" + iSeqRow] && scEventControl_data["sr_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_retencion" + iSeqRow] && scEventControl_data["sr_retencion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_retencion" + iSeqRow] && scEventControl_data["sr_retencion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_serie" + iSeqRow] && scEventControl_data["sr_serie" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_serie" + iSeqRow] && scEventControl_data["sr_serie" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_secuencial" + iSeqRow] && scEventControl_data["sr_secuencial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_secuencial" + iSeqRow] && scEventControl_data["sr_secuencial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_autorizacion" + iSeqRow] && scEventControl_data["sr_autorizacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_autorizacion" + iSeqRow] && scEventControl_data["sr_autorizacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_total_sin_impuestos" + iSeqRow] && scEventControl_data["sr_total_sin_impuestos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_total_sin_impuestos" + iSeqRow] && scEventControl_data["sr_total_sin_impuestos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_importe_total" + iSeqRow] && scEventControl_data["sr_importe_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_importe_total" + iSeqRow] && scEventControl_data["sr_importe_total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_pago_loc_ext" + iSeqRow] && scEventControl_data["sr_pago_loc_ext" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_pago_loc_ext" + iSeqRow] && scEventControl_data["sr_pago_loc_ext" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_tipo_regimen" + iSeqRow] && scEventControl_data["sr_tipo_regimen" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_tipo_regimen" + iSeqRow] && scEventControl_data["sr_tipo_regimen" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_pais" + iSeqRow] && scEventControl_data["sr_pais" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_pais" + iSeqRow] && scEventControl_data["sr_pais" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_paraiso_fiscal" + iSeqRow] && scEventControl_data["sr_paraiso_fiscal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_paraiso_fiscal" + iSeqRow] && scEventControl_data["sr_paraiso_fiscal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_pais_pago" + iSeqRow] && scEventControl_data["sr_pais_pago" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_pais_pago" + iSeqRow] && scEventControl_data["sr_pais_pago" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_aplica_doble_trib" + iSeqRow] && scEventControl_data["sr_aplica_doble_trib" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_aplica_doble_trib" + iSeqRow] && scEventControl_data["sr_aplica_doble_trib" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_pago_sujeto_retencion_nc" + iSeqRow] && scEventControl_data["sr_pago_sujeto_retencion_nc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_pago_sujeto_retencion_nc" + iSeqRow] && scEventControl_data["sr_pago_sujeto_retencion_nc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_pago_reg_fis" + iSeqRow] && scEventControl_data["sr_pago_reg_fis" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_pago_reg_fis" + iSeqRow] && scEventControl_data["sr_pago_reg_fis" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_total_reembolsos" + iSeqRow] && scEventControl_data["sr_total_reembolsos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_total_reembolsos" + iSeqRow] && scEventControl_data["sr_total_reembolsos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_total_baseimponible_reembolsos" + iSeqRow] && scEventControl_data["sr_total_baseimponible_reembolsos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_total_baseimponible_reembolsos" + iSeqRow] && scEventControl_data["sr_total_baseimponible_reembolsos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sr_total_impuesto_reeemboso" + iSeqRow] && scEventControl_data["sr_total_impuesto_reeemboso" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sr_total_impuesto_reeemboso" + iSeqRow] && scEventControl_data["sr_total_impuesto_reeemboso" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["impuestos" + iSeqRow] && scEventControl_data["impuestos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["impuestos" + iSeqRow] && scEventControl_data["impuestos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pagos" + iSeqRow] && scEventControl_data["pagos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pagos" + iSeqRow] && scEventControl_data["pagos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["retenciones" + iSeqRow] && scEventControl_data["retenciones" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["retenciones" + iSeqRow] && scEventControl_data["retenciones" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("sr_cod_docsustento" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sr_cod_sustento" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sr_pago_loc_ext" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sr_tipo_regimen" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sr_pais" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sr_paraiso_fiscal" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sr_aplica_doble_trib" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sr_pago_sujeto_retencion_nc" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sr_aplica_doble_trib" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("sr_pago_loc_ext" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("sr_pais" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("sr_paraiso_fiscal" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("sr_tipo_regimen" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
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
  $('#id_sc_field_sr_id' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_id_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_del_sustento_retencion_sr_id_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_del_sustento_retencion_sr_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_retencion' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_retencion_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_sustento_retencion_sr_retencion_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_sustento_retencion_sr_retencion_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_cod_sustento' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_cod_sustento_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_sustento_retencion_sr_cod_sustento_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_sustento_retencion_sr_cod_sustento_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_cod_docsustento' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_cod_docsustento_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_del_sustento_retencion_sr_cod_docsustento_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_sustento_retencion_sr_cod_docsustento_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_serie' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_serie_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_del_sustento_retencion_sr_serie_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_sustento_retencion_sr_serie_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_secuencial' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_secuencial_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_sustento_retencion_sr_secuencial_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_sustento_retencion_sr_secuencial_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_fechaemision' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_fechaemision_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_sustento_retencion_sr_fechaemision_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_sustento_retencion_sr_fechaemision_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_fecha_registro_contable' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_fecha_registro_contable_onblur(this, iSeqRow) })
                                                        .bind('change', function() { sc_form_del_sustento_retencion_sr_fecha_registro_contable_onchange(this, iSeqRow) })
                                                        .bind('focus', function() { sc_form_del_sustento_retencion_sr_fecha_registro_contable_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_autorizacion' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_autorizacion_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_sustento_retencion_sr_autorizacion_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_sustento_retencion_sr_autorizacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_pago_loc_ext' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_pago_loc_ext_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_sustento_retencion_sr_pago_loc_ext_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_sustento_retencion_sr_pago_loc_ext_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_tipo_regimen' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_tipo_regimen_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_sustento_retencion_sr_tipo_regimen_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_sustento_retencion_sr_tipo_regimen_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_pais_pago' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_pais_pago_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_sustento_retencion_sr_pais_pago_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_sustento_retencion_sr_pais_pago_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_aplica_doble_trib' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_aplica_doble_trib_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_sustento_retencion_sr_aplica_doble_trib_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_sustento_retencion_sr_aplica_doble_trib_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_pago_sujeto_retencion_nc' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_pago_sujeto_retencion_nc_onblur(this, iSeqRow) })
                                                         .bind('change', function() { sc_form_del_sustento_retencion_sr_pago_sujeto_retencion_nc_onchange(this, iSeqRow) })
                                                         .bind('focus', function() { sc_form_del_sustento_retencion_sr_pago_sujeto_retencion_nc_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_pago_reg_fis' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_pago_reg_fis_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_sustento_retencion_sr_pago_reg_fis_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_sustento_retencion_sr_pago_reg_fis_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_total_reembolsos' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_total_reembolsos_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_del_sustento_retencion_sr_total_reembolsos_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_sustento_retencion_sr_total_reembolsos_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_total_baseimponible_reembolsos' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_total_baseimponible_reembolsos_onblur(this, iSeqRow) })
                                                               .bind('change', function() { sc_form_del_sustento_retencion_sr_total_baseimponible_reembolsos_onchange(this, iSeqRow) })
                                                               .bind('focus', function() { sc_form_del_sustento_retencion_sr_total_baseimponible_reembolsos_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_total_impuesto_reeemboso' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_total_impuesto_reeemboso_onblur(this, iSeqRow) })
                                                         .bind('change', function() { sc_form_del_sustento_retencion_sr_total_impuesto_reeemboso_onchange(this, iSeqRow) })
                                                         .bind('focus', function() { sc_form_del_sustento_retencion_sr_total_impuesto_reeemboso_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_total_sin_impuestos' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_total_sin_impuestos_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_del_sustento_retencion_sr_total_sin_impuestos_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_del_sustento_retencion_sr_total_sin_impuestos_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_importe_total' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_importe_total_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_sustento_retencion_sr_importe_total_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_sustento_retencion_sr_importe_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_pais' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_pais_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_sustento_retencion_sr_pais_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_sustento_retencion_sr_pais_onfocus(this, iSeqRow) });
  $('#id_sc_field_sr_paraiso_fiscal' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_sr_paraiso_fiscal_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_sustento_retencion_sr_paraiso_fiscal_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_sustento_retencion_sr_paraiso_fiscal_onfocus(this, iSeqRow) });
  $('#id_sc_field_impuestos' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_impuestos_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_del_sustento_retencion_impuestos_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_sustento_retencion_impuestos_onfocus(this, iSeqRow) });
  $('#id_sc_field_retenciones' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_retenciones_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_sustento_retencion_retenciones_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_sustento_retencion_retenciones_onfocus(this, iSeqRow) });
  $('#id_sc_field_pagos' + iSeqRow).bind('blur', function() { sc_form_del_sustento_retencion_pagos_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_del_sustento_retencion_pagos_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_del_sustento_retencion_pagos_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_del_sustento_retencion_sr_id_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_id();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_id_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_retencion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_retencion();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_retencion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_retencion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_cod_sustento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_cod_sustento();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_cod_sustento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_cod_sustento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_cod_docsustento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_cod_docsustento();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_cod_docsustento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_sustento_retencion_refresh_sr_cod_docsustento();
}

function sc_form_del_sustento_retencion_sr_cod_docsustento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_serie_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_serie();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_serie_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_serie_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_secuencial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_secuencial();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_secuencial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_secuencial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_fechaemision_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_fechaemision();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_fechaemision_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_fechaemision_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_fecha_registro_contable_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_fecha_registro_contable();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_fecha_registro_contable_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_fecha_registro_contable_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_autorizacion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_autorizacion();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_autorizacion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_autorizacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_pago_loc_ext_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_pago_loc_ext();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_pago_loc_ext_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_sustento_retencion_event_sr_pago_loc_ext_onchange();
}

function sc_form_del_sustento_retencion_sr_pago_loc_ext_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_tipo_regimen_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_tipo_regimen();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_tipo_regimen_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_sustento_retencion_event_sr_tipo_regimen_onchange();
}

function sc_form_del_sustento_retencion_sr_tipo_regimen_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_pais_pago_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_pais_pago();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_pais_pago_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_pais_pago_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_aplica_doble_trib_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_aplica_doble_trib();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_aplica_doble_trib_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_sustento_retencion_event_sr_aplica_doble_trib_onchange();
}

function sc_form_del_sustento_retencion_sr_aplica_doble_trib_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_pago_sujeto_retencion_nc_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_pago_sujeto_retencion_nc();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_pago_sujeto_retencion_nc_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_pago_sujeto_retencion_nc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_pago_reg_fis_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_pago_reg_fis();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_pago_reg_fis_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_pago_reg_fis_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_total_reembolsos_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_total_reembolsos();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_total_reembolsos_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_total_reembolsos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_total_baseimponible_reembolsos_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_total_baseimponible_reembolsos();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_total_baseimponible_reembolsos_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_total_baseimponible_reembolsos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_total_impuesto_reeemboso_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_total_impuesto_reeemboso();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_total_impuesto_reeemboso_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_total_impuesto_reeemboso_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_total_sin_impuestos_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_total_sin_impuestos();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_total_sin_impuestos_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_total_sin_impuestos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_importe_total_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_importe_total();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_importe_total_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_sr_importe_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_pais_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_pais();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_pais_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_sustento_retencion_event_sr_pais_onchange();
}

function sc_form_del_sustento_retencion_sr_pais_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_sr_paraiso_fiscal_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_sr_paraiso_fiscal();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_sr_paraiso_fiscal_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_sustento_retencion_event_sr_paraiso_fiscal_onchange();
}

function sc_form_del_sustento_retencion_sr_paraiso_fiscal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_impuestos_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_impuestos();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_impuestos_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_impuestos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_retenciones_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_retenciones();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_retenciones_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_retenciones_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_sustento_retencion_pagos_onblur(oThis, iSeqRow) {
  do_ajax_form_del_sustento_retencion_validate_pagos();
  scCssBlur(oThis);
}

function sc_form_del_sustento_retencion_pagos_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_sustento_retencion_pagos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
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
}

function displayChange_block_0(status) {
	displayChange_field("sr_fechaemision", "", status);
	displayChange_field("sr_fecha_registro_contable", "", status);
	displayChange_field("sr_cod_docsustento", "", status);
	displayChange_field("sr_cod_sustento", "", status);
	displayChange_field("sr_id", "", status);
	displayChange_field("sr_retencion", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("sr_serie", "", status);
	displayChange_field("sr_secuencial", "", status);
	displayChange_field("sr_autorizacion", "", status);
	displayChange_field("sr_total_sin_impuestos", "", status);
	displayChange_field("sr_importe_total", "", status);
	displayChange_field("sr_pago_loc_ext", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("sr_tipo_regimen", "", status);
	displayChange_field("sr_pais", "", status);
	displayChange_field("sr_paraiso_fiscal", "", status);
	displayChange_field("sr_pais_pago", "", status);
	displayChange_field("sr_aplica_doble_trib", "", status);
	displayChange_field("sr_pago_sujeto_retencion_nc", "", status);
	displayChange_field("sr_pago_reg_fis", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("sr_total_reembolsos", "", status);
	displayChange_field("sr_total_baseimponible_reembolsos", "", status);
	displayChange_field("sr_total_impuesto_reeemboso", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("impuestos", "", status);
}

function displayChange_block_5(status) {
	displayChange_field("pagos", "", status);
}

function displayChange_block_6(status) {
	displayChange_field("retenciones", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_sr_fechaemision(row, status);
	displayChange_field_sr_fecha_registro_contable(row, status);
	displayChange_field_sr_cod_docsustento(row, status);
	displayChange_field_sr_cod_sustento(row, status);
	displayChange_field_sr_id(row, status);
	displayChange_field_sr_retencion(row, status);
	displayChange_field_sr_serie(row, status);
	displayChange_field_sr_secuencial(row, status);
	displayChange_field_sr_autorizacion(row, status);
	displayChange_field_sr_total_sin_impuestos(row, status);
	displayChange_field_sr_importe_total(row, status);
	displayChange_field_sr_pago_loc_ext(row, status);
	displayChange_field_sr_tipo_regimen(row, status);
	displayChange_field_sr_pais(row, status);
	displayChange_field_sr_paraiso_fiscal(row, status);
	displayChange_field_sr_pais_pago(row, status);
	displayChange_field_sr_aplica_doble_trib(row, status);
	displayChange_field_sr_pago_sujeto_retencion_nc(row, status);
	displayChange_field_sr_pago_reg_fis(row, status);
	displayChange_field_sr_total_reembolsos(row, status);
	displayChange_field_sr_total_baseimponible_reembolsos(row, status);
	displayChange_field_sr_total_impuesto_reeemboso(row, status);
	displayChange_field_impuestos(row, status);
	displayChange_field_pagos(row, status);
	displayChange_field_retenciones(row, status);
}

function displayChange_field(field, row, status) {
	if ("sr_fechaemision" == field) {
		displayChange_field_sr_fechaemision(row, status);
	}
	if ("sr_fecha_registro_contable" == field) {
		displayChange_field_sr_fecha_registro_contable(row, status);
	}
	if ("sr_cod_docsustento" == field) {
		displayChange_field_sr_cod_docsustento(row, status);
	}
	if ("sr_cod_sustento" == field) {
		displayChange_field_sr_cod_sustento(row, status);
	}
	if ("sr_id" == field) {
		displayChange_field_sr_id(row, status);
	}
	if ("sr_retencion" == field) {
		displayChange_field_sr_retencion(row, status);
	}
	if ("sr_serie" == field) {
		displayChange_field_sr_serie(row, status);
	}
	if ("sr_secuencial" == field) {
		displayChange_field_sr_secuencial(row, status);
	}
	if ("sr_autorizacion" == field) {
		displayChange_field_sr_autorizacion(row, status);
	}
	if ("sr_total_sin_impuestos" == field) {
		displayChange_field_sr_total_sin_impuestos(row, status);
	}
	if ("sr_importe_total" == field) {
		displayChange_field_sr_importe_total(row, status);
	}
	if ("sr_pago_loc_ext" == field) {
		displayChange_field_sr_pago_loc_ext(row, status);
	}
	if ("sr_tipo_regimen" == field) {
		displayChange_field_sr_tipo_regimen(row, status);
	}
	if ("sr_pais" == field) {
		displayChange_field_sr_pais(row, status);
	}
	if ("sr_paraiso_fiscal" == field) {
		displayChange_field_sr_paraiso_fiscal(row, status);
	}
	if ("sr_pais_pago" == field) {
		displayChange_field_sr_pais_pago(row, status);
	}
	if ("sr_aplica_doble_trib" == field) {
		displayChange_field_sr_aplica_doble_trib(row, status);
	}
	if ("sr_pago_sujeto_retencion_nc" == field) {
		displayChange_field_sr_pago_sujeto_retencion_nc(row, status);
	}
	if ("sr_pago_reg_fis" == field) {
		displayChange_field_sr_pago_reg_fis(row, status);
	}
	if ("sr_total_reembolsos" == field) {
		displayChange_field_sr_total_reembolsos(row, status);
	}
	if ("sr_total_baseimponible_reembolsos" == field) {
		displayChange_field_sr_total_baseimponible_reembolsos(row, status);
	}
	if ("sr_total_impuesto_reeemboso" == field) {
		displayChange_field_sr_total_impuesto_reeemboso(row, status);
	}
	if ("impuestos" == field) {
		displayChange_field_impuestos(row, status);
	}
	if ("pagos" == field) {
		displayChange_field_pagos(row, status);
	}
	if ("retenciones" == field) {
		displayChange_field_retenciones(row, status);
	}
}

function displayChange_field_sr_fechaemision(row, status) {
    var fieldId;
}

function displayChange_field_sr_fecha_registro_contable(row, status) {
    var fieldId;
}

function displayChange_field_sr_cod_docsustento(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_sr_cod_docsustento__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_sr_cod_docsustento" + row).select2("destroy");
		}
		scJQSelect2Add(row, "sr_cod_docsustento");
	}
}

function displayChange_field_sr_cod_sustento(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_sr_cod_sustento__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_sr_cod_sustento" + row).select2("destroy");
		}
		scJQSelect2Add(row, "sr_cod_sustento");
	}
}

function displayChange_field_sr_id(row, status) {
    var fieldId;
}

function displayChange_field_sr_retencion(row, status) {
    var fieldId;
}

function displayChange_field_sr_serie(row, status) {
    var fieldId;
}

function displayChange_field_sr_secuencial(row, status) {
    var fieldId;
}

function displayChange_field_sr_autorizacion(row, status) {
    var fieldId;
}

function displayChange_field_sr_total_sin_impuestos(row, status) {
    var fieldId;
}

function displayChange_field_sr_importe_total(row, status) {
    var fieldId;
}

function displayChange_field_sr_pago_loc_ext(row, status) {
    var fieldId;
}

function displayChange_field_sr_tipo_regimen(row, status) {
    var fieldId;
}

function displayChange_field_sr_pais(row, status) {
    var fieldId;
}

function displayChange_field_sr_paraiso_fiscal(row, status) {
    var fieldId;
}

function displayChange_field_sr_pais_pago(row, status) {
    var fieldId;
}

function displayChange_field_sr_aplica_doble_trib(row, status) {
    var fieldId;
}

function displayChange_field_sr_pago_sujeto_retencion_nc(row, status) {
    var fieldId;
}

function displayChange_field_sr_pago_reg_fis(row, status) {
    var fieldId;
}

function displayChange_field_sr_total_reembolsos(row, status) {
    var fieldId;
}

function displayChange_field_sr_total_baseimponible_reembolsos(row, status) {
    var fieldId;
}

function displayChange_field_sr_total_impuesto_reeemboso(row, status) {
    var fieldId;
}

function displayChange_field_impuestos(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_del_impuesto_sustento_retencion")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_del_impuesto_sustento_retencion")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_pagos(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_del_forma_pago_sustento_retencion")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_del_forma_pago_sustento_retencion")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_retenciones(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_del_impuestos_retenidos_sustento")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_del_impuestos_retenidos_sustento")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_sr_cod_docsustento("all", "on");
	displayChange_field_sr_cod_sustento("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_sustento_retencion_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(35);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_sr_fechaemision" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_sr_fechaemision" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_del_sustento_retencion_validate_sr_fechaemision(iSeqRow); }, 200);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['sr_fechaemision']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_sr_fecha_registro_contable" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_sr_fecha_registro_contable" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_del_sustento_retencion_validate_sr_fecha_registro_contable(iSeqRow); }, 200);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['sr_fecha_registro_contable']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_sustento_retencion')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "sr_cod_docsustento" == specificField) {
    scJQSelect2Add_sr_cod_docsustento(seqRow);
  }
  if (null == specificField || "sr_cod_sustento" == specificField) {
    scJQSelect2Add_sr_cod_sustento(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_sr_cod_docsustento(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_sr_cod_docsustento_obj" : "#id_sc_field_sr_cod_docsustento" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_sr_cod_docsustento_obj',
      dropdownCssClass: 'css_sr_cod_docsustento_obj',
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

function scJQSelect2Add_sr_cod_sustento(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_sr_cod_sustento_obj" : "#id_sc_field_sr_cod_sustento" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_sr_cod_sustento_obj',
      dropdownCssClass: 'css_sr_cod_sustento_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_sr_cod_docsustento) { displayChange_field_sr_cod_docsustento(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_sr_cod_sustento) { displayChange_field_sr_cod_sustento(iLine, "on"); } }, 150);
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


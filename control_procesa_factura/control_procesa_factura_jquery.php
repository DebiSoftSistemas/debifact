
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
  scEventControl_data["fr_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_cedula" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_tipo_libretin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_libretin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_provincia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_canton" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_tipo_identificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_correo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_estado_sri" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_forma_pago" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_valor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_forma_pago2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_valor2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_forma_pago3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_valor3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fr_comentario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["total_pago" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["fr_total" + iSeqRow] && scEventControl_data["fr_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_total" + iSeqRow] && scEventControl_data["fr_total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_cedula" + iSeqRow] && scEventControl_data["fr_cedula" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_cedula" + iSeqRow] && scEventControl_data["fr_cedula" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_tipo_libretin" + iSeqRow] && scEventControl_data["fac_tipo_libretin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_tipo_libretin" + iSeqRow] && scEventControl_data["fac_tipo_libretin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_nombre" + iSeqRow] && scEventControl_data["fr_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_nombre" + iSeqRow] && scEventControl_data["fr_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_libretin" + iSeqRow] && scEventControl_data["fac_libretin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_libretin" + iSeqRow] && scEventControl_data["fac_libretin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_provincia" + iSeqRow] && scEventControl_data["fr_provincia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_provincia" + iSeqRow] && scEventControl_data["fr_provincia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_canton" + iSeqRow] && scEventControl_data["fr_canton" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_canton" + iSeqRow] && scEventControl_data["fr_canton" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_direccion" + iSeqRow] && scEventControl_data["fr_direccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_direccion" + iSeqRow] && scEventControl_data["fr_direccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_tipo_identificacion" + iSeqRow] && scEventControl_data["fr_tipo_identificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_tipo_identificacion" + iSeqRow] && scEventControl_data["fr_tipo_identificacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_correo" + iSeqRow] && scEventControl_data["fr_correo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_correo" + iSeqRow] && scEventControl_data["fr_correo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_estado_sri" + iSeqRow] && scEventControl_data["fac_estado_sri" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_estado_sri" + iSeqRow] && scEventControl_data["fac_estado_sri" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_telefono" + iSeqRow] && scEventControl_data["fr_telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_telefono" + iSeqRow] && scEventControl_data["fr_telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_forma_pago" + iSeqRow] && scEventControl_data["fr_forma_pago" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_forma_pago" + iSeqRow] && scEventControl_data["fr_forma_pago" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_valor" + iSeqRow] && scEventControl_data["fr_valor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_valor" + iSeqRow] && scEventControl_data["fr_valor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_forma_pago2" + iSeqRow] && scEventControl_data["fr_forma_pago2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_forma_pago2" + iSeqRow] && scEventControl_data["fr_forma_pago2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_valor2" + iSeqRow] && scEventControl_data["fr_valor2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_valor2" + iSeqRow] && scEventControl_data["fr_valor2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_forma_pago3" + iSeqRow] && scEventControl_data["fr_forma_pago3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_forma_pago3" + iSeqRow] && scEventControl_data["fr_forma_pago3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_valor3" + iSeqRow] && scEventControl_data["fr_valor3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_valor3" + iSeqRow] && scEventControl_data["fr_valor3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fr_comentario" + iSeqRow] && scEventControl_data["fr_comentario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fr_comentario" + iSeqRow] && scEventControl_data["fr_comentario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["total_pago" + iSeqRow] && scEventControl_data["total_pago" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["total_pago" + iSeqRow] && scEventControl_data["total_pago" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  if ("fr_valor" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  if ("fr_valor2" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  if ("fr_valor3" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  scEventControl_data[fieldName]["blur"] = true;
  if ("fr_provincia" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fr_canton" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fr_forma_pago" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fr_forma_pago2" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fr_forma_pago3" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fr_cantidad" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("fr_cedula" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("fr_valor" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("fr_valor2" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("fr_valor3" + iSeq == fieldName) {
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

function scEventControl_onCalculator_fr_valor() {
  if (!_scCalculatorControl["id_sc_field_fr_valor"]) {
    _scCalculatorBlurOk["id_sc_field_fr_valor"] = true;
    do_ajax_control_procesa_factura_event_fr_valor_onblur();
  }
} // scEventControl_onCalculator_fr_valor

function scEventControl_onCalculator_fr_valor2() {
  if (!_scCalculatorControl["id_sc_field_fr_valor2"]) {
    _scCalculatorBlurOk["id_sc_field_fr_valor2"] = true;
    do_ajax_control_procesa_factura_event_fr_valor2_onblur();
  }
} // scEventControl_onCalculator_fr_valor2

function scEventControl_onCalculator_fr_valor3() {
  if (!_scCalculatorControl["id_sc_field_fr_valor3"]) {
    _scCalculatorBlurOk["id_sc_field_fr_valor3"] = true;
    do_ajax_control_procesa_factura_event_fr_valor3_onblur();
  }
} // scEventControl_onCalculator_fr_valor3

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_fr_valor' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_valor_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_control_procesa_factura_fr_valor_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_control_procesa_factura_fr_valor_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_tipo_identificacion' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_tipo_identificacion_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_control_procesa_factura_fr_tipo_identificacion_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_control_procesa_factura_fr_tipo_identificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_cedula' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_cedula_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_control_procesa_factura_fr_cedula_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_control_procesa_factura_fr_cedula_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_nombre' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_nombre_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_control_procesa_factura_fr_nombre_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_control_procesa_factura_fr_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_direccion' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_direccion_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_control_procesa_factura_fr_direccion_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_control_procesa_factura_fr_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_correo' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_correo_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_control_procesa_factura_fr_correo_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_control_procesa_factura_fr_correo_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_forma_pago' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_forma_pago_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_control_procesa_factura_fr_forma_pago_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_control_procesa_factura_fr_forma_pago_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_provincia' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_provincia_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_control_procesa_factura_fr_provincia_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_control_procesa_factura_fr_provincia_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_canton' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_canton_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_control_procesa_factura_fr_canton_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_control_procesa_factura_fr_canton_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_telefono' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_telefono_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_control_procesa_factura_fr_telefono_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_control_procesa_factura_fr_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_total' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_total_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_control_procesa_factura_fr_total_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_control_procesa_factura_fr_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_comentario' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_comentario_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_control_procesa_factura_fr_comentario_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_control_procesa_factura_fr_comentario_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_forma_pago2' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_forma_pago2_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_control_procesa_factura_fr_forma_pago2_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_control_procesa_factura_fr_forma_pago2_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_valor2' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_valor2_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_control_procesa_factura_fr_valor2_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_control_procesa_factura_fr_valor2_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_forma_pago3' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_forma_pago3_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_control_procesa_factura_fr_forma_pago3_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_control_procesa_factura_fr_forma_pago3_onfocus(this, iSeqRow) });
  $('#id_sc_field_fr_valor3' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fr_valor3_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_control_procesa_factura_fr_valor3_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_control_procesa_factura_fr_valor3_onfocus(this, iSeqRow) });
  $('#id_sc_field_total_pago' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_total_pago_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_control_procesa_factura_total_pago_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_control_procesa_factura_total_pago_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_tipo_libretin' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fac_tipo_libretin_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_control_procesa_factura_fac_tipo_libretin_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_control_procesa_factura_fac_tipo_libretin_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_libretin' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fac_libretin_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_control_procesa_factura_fac_libretin_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_control_procesa_factura_fac_libretin_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_estado_sri' + iSeqRow).bind('blur', function() { sc_control_procesa_factura_fac_estado_sri_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_control_procesa_factura_fac_estado_sri_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_control_procesa_factura_fac_estado_sri_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_estado' + iSeqRow).bind('change', function() { sc_control_procesa_factura_fac_estado_onchange(this, iSeqRow) });
} // scJQEventsAdd

function sc_control_procesa_factura_fr_valor_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_valor();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_valor_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_control_procesa_factura_event_fr_valor_onchange();
}

function sc_control_procesa_factura_fr_valor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_tipo_identificacion_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_tipo_identificacion();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_tipo_identificacion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_tipo_identificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_cedula_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_cedula();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_cedula_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_control_procesa_factura_event_fr_cedula_onchange();
}

function sc_control_procesa_factura_fr_cedula_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_nombre_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_nombre();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_nombre_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_direccion_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_direccion();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_direccion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_correo_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_correo();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_correo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_correo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_forma_pago_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_forma_pago();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_forma_pago_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_forma_pago_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_provincia_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_provincia();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_provincia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_control_procesa_factura_refresh_fr_provincia();
}

function sc_control_procesa_factura_fr_provincia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_canton_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_canton();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_canton_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_canton_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_telefono_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_telefono();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_telefono_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_total_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_total();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_total_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_comentario_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_comentario();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_comentario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_comentario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_forma_pago2_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_forma_pago2();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_forma_pago2_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_forma_pago2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_valor2_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_valor2();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_valor2_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_control_procesa_factura_event_fr_valor2_onchange();
}

function sc_control_procesa_factura_fr_valor2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_forma_pago3_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_forma_pago3();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_forma_pago3_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fr_forma_pago3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fr_valor3_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fr_valor3();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fr_valor3_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_control_procesa_factura_event_fr_valor3_onchange();
}

function sc_control_procesa_factura_fr_valor3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_total_pago_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_total_pago();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_total_pago_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_total_pago_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fac_tipo_libretin_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fac_tipo_libretin();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fac_tipo_libretin_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fac_tipo_libretin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fac_libretin_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fac_libretin();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fac_libretin_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fac_libretin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fac_estado_sri_onblur(oThis, iSeqRow) {
  do_ajax_control_procesa_factura_validate_fac_estado_sri();
  scCssBlur(oThis);
}

function sc_control_procesa_factura_fac_estado_sri_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_control_procesa_factura_fac_estado_sri_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_procesa_factura_fac_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
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
	displayChange_field("fr_total", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("fr_cedula", "", status);
	displayChange_field("fac_tipo_libretin", "", status);
	displayChange_field("fr_nombre", "", status);
	displayChange_field("fac_libretin", "", status);
	displayChange_field("fr_provincia", "", status);
	displayChange_field("fr_canton", "", status);
	displayChange_field("fr_direccion", "", status);
	displayChange_field("fr_tipo_identificacion", "", status);
	displayChange_field("fr_correo", "", status);
	displayChange_field("fac_estado_sri", "", status);
	displayChange_field("fr_telefono", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("fr_forma_pago", "", status);
	displayChange_field("fr_valor", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("fr_forma_pago2", "", status);
	displayChange_field("fr_valor2", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("fr_forma_pago3", "", status);
	displayChange_field("fr_valor3", "", status);
}

function displayChange_block_5(status) {
	displayChange_field("fr_comentario", "", status);
}

function displayChange_block_6(status) {
	displayChange_field("total_pago", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_fr_total(row, status);
	displayChange_field_fr_cedula(row, status);
	displayChange_field_fac_tipo_libretin(row, status);
	displayChange_field_fr_nombre(row, status);
	displayChange_field_fac_libretin(row, status);
	displayChange_field_fr_provincia(row, status);
	displayChange_field_fr_canton(row, status);
	displayChange_field_fr_direccion(row, status);
	displayChange_field_fr_tipo_identificacion(row, status);
	displayChange_field_fr_correo(row, status);
	displayChange_field_fac_estado_sri(row, status);
	displayChange_field_fr_telefono(row, status);
	displayChange_field_fr_forma_pago(row, status);
	displayChange_field_fr_valor(row, status);
	displayChange_field_fr_forma_pago2(row, status);
	displayChange_field_fr_valor2(row, status);
	displayChange_field_fr_forma_pago3(row, status);
	displayChange_field_fr_valor3(row, status);
	displayChange_field_fr_comentario(row, status);
	displayChange_field_total_pago(row, status);
}

function displayChange_field(field, row, status) {
	if ("fr_total" == field) {
		displayChange_field_fr_total(row, status);
	}
	if ("fr_cedula" == field) {
		displayChange_field_fr_cedula(row, status);
	}
	if ("fac_tipo_libretin" == field) {
		displayChange_field_fac_tipo_libretin(row, status);
	}
	if ("fr_nombre" == field) {
		displayChange_field_fr_nombre(row, status);
	}
	if ("fac_libretin" == field) {
		displayChange_field_fac_libretin(row, status);
	}
	if ("fr_provincia" == field) {
		displayChange_field_fr_provincia(row, status);
	}
	if ("fr_canton" == field) {
		displayChange_field_fr_canton(row, status);
	}
	if ("fr_direccion" == field) {
		displayChange_field_fr_direccion(row, status);
	}
	if ("fr_tipo_identificacion" == field) {
		displayChange_field_fr_tipo_identificacion(row, status);
	}
	if ("fr_correo" == field) {
		displayChange_field_fr_correo(row, status);
	}
	if ("fac_estado_sri" == field) {
		displayChange_field_fac_estado_sri(row, status);
	}
	if ("fr_telefono" == field) {
		displayChange_field_fr_telefono(row, status);
	}
	if ("fr_forma_pago" == field) {
		displayChange_field_fr_forma_pago(row, status);
	}
	if ("fr_valor" == field) {
		displayChange_field_fr_valor(row, status);
	}
	if ("fr_forma_pago2" == field) {
		displayChange_field_fr_forma_pago2(row, status);
	}
	if ("fr_valor2" == field) {
		displayChange_field_fr_valor2(row, status);
	}
	if ("fr_forma_pago3" == field) {
		displayChange_field_fr_forma_pago3(row, status);
	}
	if ("fr_valor3" == field) {
		displayChange_field_fr_valor3(row, status);
	}
	if ("fr_comentario" == field) {
		displayChange_field_fr_comentario(row, status);
	}
	if ("total_pago" == field) {
		displayChange_field_total_pago(row, status);
	}
}

function displayChange_field_fr_total(row, status) {
    var fieldId;
}

function displayChange_field_fr_cedula(row, status) {
    var fieldId;
}

function displayChange_field_fac_tipo_libretin(row, status) {
    var fieldId;
}

function displayChange_field_fr_nombre(row, status) {
    var fieldId;
}

function displayChange_field_fac_libretin(row, status) {
    var fieldId;
}

function displayChange_field_fr_provincia(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fr_provincia__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fr_provincia" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fr_provincia");
	}
}

function displayChange_field_fr_canton(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fr_canton__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fr_canton" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fr_canton");
	}
}

function displayChange_field_fr_direccion(row, status) {
    var fieldId;
}

function displayChange_field_fr_tipo_identificacion(row, status) {
    var fieldId;
}

function displayChange_field_fr_correo(row, status) {
    var fieldId;
}

function displayChange_field_fac_estado_sri(row, status) {
    var fieldId;
}

function displayChange_field_fr_telefono(row, status) {
    var fieldId;
}

function displayChange_field_fr_forma_pago(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fr_forma_pago__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fr_forma_pago" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fr_forma_pago");
	}
}

function displayChange_field_fr_valor(row, status) {
    var fieldId;
}

function displayChange_field_fr_forma_pago2(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fr_forma_pago2__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fr_forma_pago2" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fr_forma_pago2");
	}
}

function displayChange_field_fr_valor2(row, status) {
    var fieldId;
}

function displayChange_field_fr_forma_pago3(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fr_forma_pago3__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fr_forma_pago3" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fr_forma_pago3");
	}
}

function displayChange_field_fr_valor3(row, status) {
    var fieldId;
}

function displayChange_field_fr_comentario(row, status) {
    var fieldId;
}

function displayChange_field_total_pago(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_fr_provincia("all", "on");
	displayChange_field_fr_canton("all", "on");
	displayChange_field_fr_forma_pago("all", "on");
	displayChange_field_fr_forma_pago2("all", "on");
	displayChange_field_fr_forma_pago3("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_control_procesa_factura_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(31);
		}
	}
}
var jqCalcMonetPos = {};
var _scCalculatorBlurOk = {};

function scJQCalculatorAdd(iSeqRow) {
  _scCalculatorBlurOk["id_sc_field_fac_estado" + iSeqRow] = true;
  $("#id_sc_field_fr_valor" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_fr_valor" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_fr_valor" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_fr_valor" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor']['symbol_grp']); ?>', <?php echo $this->field_config['fr_valor']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor']['symbol_dec']); ?>', '');
      $(this).val(value);
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_fr_valor" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_fr_valor" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_fr_valor" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor']['symbol_grp']); ?>', <?php echo $this->field_config['fr_valor']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor']['symbol_dec']); ?>', 2, '');
      $(this).val(value);
      if (oldValue != value) {
        $(this).trigger('change');
      }
    },
    precision: 2,
    showOn: "button",
<?php
$miniCalculatorIcon = $this->jqueryIconFile('calculator');
$miniCalculatorFA   = $this->jqueryFAFile('calculator');
if ('' != $miniCalculatorIcon) {
?>
    buttonImage: "<?php echo $miniCalculatorIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalculatorFA) {
?>
    buttonText: "",
<?php
}
?>
  })
<?php
if ('' != $miniCalculatorFA) {
?>
    .next('button').append("<?php echo $miniCalculatorFA; ?>")
<?php
}
?>
;

  $("#id_sc_field_fr_valor2" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_fr_valor2" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_fr_valor2" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_fr_valor2" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor2']['symbol_grp']); ?>', <?php echo $this->field_config['fr_valor2']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor2']['symbol_dec']); ?>', '');
      $(this).val(value);
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_fr_valor2" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_fr_valor2" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_fr_valor2" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor2']['symbol_grp']); ?>', <?php echo $this->field_config['fr_valor2']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor2']['symbol_dec']); ?>', 2, '');
      $(this).val(value);
      if (oldValue != value) {
        $(this).trigger('change');
      }
    },
    precision: 2,
    showOn: "button",
<?php
$miniCalculatorIcon = $this->jqueryIconFile('calculator');
$miniCalculatorFA   = $this->jqueryFAFile('calculator');
if ('' != $miniCalculatorIcon) {
?>
    buttonImage: "<?php echo $miniCalculatorIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalculatorFA) {
?>
    buttonText: "",
<?php
}
?>
  })
<?php
if ('' != $miniCalculatorFA) {
?>
    .next('button').append("<?php echo $miniCalculatorFA; ?>")
<?php
}
?>
;

  $("#id_sc_field_fr_valor3" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_fr_valor3" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_fr_valor3" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_fr_valor3" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor3']['symbol_grp']); ?>', <?php echo $this->field_config['fr_valor3']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor3']['symbol_dec']); ?>', '');
      $(this).val(value);
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_fr_valor3" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_fr_valor3" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_fr_valor3" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor3']['symbol_grp']); ?>', <?php echo $this->field_config['fr_valor3']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['fr_valor3']['symbol_dec']); ?>', 2, '');
      $(this).val(value);
      if (oldValue != value) {
        $(this).trigger('change');
      }
    },
    precision: 2,
    showOn: "button",
<?php
$miniCalculatorIcon = $this->jqueryIconFile('calculator');
$miniCalculatorFA   = $this->jqueryFAFile('calculator');
if ('' != $miniCalculatorIcon) {
?>
    buttonImage: "<?php echo $miniCalculatorIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalculatorFA) {
?>
    buttonText: "",
<?php
}
?>
  })
<?php
if ('' != $miniCalculatorFA) {
?>
    .next('button').append("<?php echo $miniCalculatorFA; ?>")
<?php
}
?>
;

} // scJQCalculatorAdd

function scJQCalculatorUnformat(fValue, sField, sThousands, sFormat, sDecimals, sMonetary) {
  fValue = scJQCalculatorCurrency(fValue, sField, sMonetary);
  if ("" != sThousands) {
    if ("." == sThousands) {
      sThousands = "\\.";
    }
    sRegEx = eval("/" + sThousands + "/g");
    fValue = fValue.replace(sRegEx, "");
  }
  if ("." != sDecimals) {
    sRegEx = eval("/" + sDecimals + "/g");
    fValue = fValue.replace(sRegEx, ".");
  }
  if ("." == fValue.substr(0, 1) || "," == fValue.substr(0, 1)) {
    fValue = "0" + fValue;
  }
  return fValue;
} // scJQCalculatorUnformat

function scJQCalculatorFormat(fValue, sField, sThousands, sFormat, sDecimals, iPrecision, sMonetary) {
  fValue = scJQCalculatorCurrency(fValue.toString(), sField, sMonetary);
  if (-1 < fValue.indexOf('.')) {
    var parts = fValue.split('.'),
        pref = parts[0],
        suf = parts[1];
  }
  else {
    var pref = fValue,
        suf = '';
  }
  if ('' != sThousands) {
    if (3 == sFormat) {
      if (4 <= pref.length) {
        pref_rest = pref.substr(0, pref.length - 3);
        pref = sThousands + pref.substr(pref.length - 3);
        while (2 < pref_rest.length) {
          pref = sThousands + pref_rest.substr(pref_rest.length - 2) + pref;
          pref_rest = pref_rest.substr(0, pref_rest.length - 2);
        }
        if ('' != pref_rest) {
          pref = pref_rest + pref;
        }
      }
    }
    else if (2 == sFormat) {
      if (4 <= pref.length) {
        pref = pref.substr(0, pref.length - 3) + sThousands + pref.substr(pref.length - 3);
      }
    }
    else {
      pref_rest = pref;
      pref = '';
      while (3 < pref_rest.length) {
        pref = sThousands + pref_rest.substr(pref_rest.length - 3) + pref;
        pref_rest = pref_rest.substr(0, pref_rest.length - 3);
      }
      if ('' != pref_rest) {
        pref = pref_rest + pref;
      }
    }
  }
  if ('' != iPrecision) {
    if (suf.length > iPrecision) {
      suf = '1' + suf.substr(0, iPrecision) + '.' + suf.substr(iPrecision);
      suf = Math.round(parseFloat(suf)).toString().substr(1);
    }
    else {
      while (suf.length < iPrecision) {
        suf += '0';
      }
    }
  }
  if ('' != sDecimals && '' != suf) {
    fValue = pref + sDecimals + suf;
  }
  else {
    fValue = pref;
  }
  if ('' != sMonetary) {
    fValue = 'left' == jqCalcMonetPos[sField] ? sMonetary + ' ' + fValue : fValue + ' ' + sMonetary;
  }
  return fValue;
} // scJQCalculatorFormat

function scJQCalculatorCurrency(fValue, sField, sMonetary) {
  if ("" != sMonetary) {
    if (sMonetary + ' ' == fValue.substr(0, sMonetary.length + 1)) {
        fValue = fValue.substr(sMonetary.length + 1);
        jqCalcMonetPos[sField] = 'left';
    }
    else if (sMonetary == fValue.substr(0, sMonetary.length)) {
        fValue = fValue.substr(sMonetary.length + 1);
        jqCalcMonetPos[sField] = 'left';
    }
    else if (' ' + sMonetary == fValue.substr(fValue.length - sMonetary.length - 1)) {
        fValue = fValue.substr(0, fValue.length - sMonetary.length - 1);
        jqCalcMonetPos[sField] = 'right';
    }
    else if (sMonetary == fValue.substr(fValue.length - sMonetary.length)) {
        fValue = fValue.substr(0, fValue.length - sMonetary.length);
        jqCalcMonetPos[sField] = 'right';
    }
  }
  if ("" == fValue) {
    fValue = "0";
  }
  return fValue;
} // scJQCalculatorCurrency

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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'control_procesa_factura')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "fr_provincia" == specificField) {
    scJQSelect2Add_fr_provincia(seqRow);
  }
  if (null == specificField || "fr_canton" == specificField) {
    scJQSelect2Add_fr_canton(seqRow);
  }
  if (null == specificField || "fr_forma_pago" == specificField) {
    scJQSelect2Add_fr_forma_pago(seqRow);
  }
  if (null == specificField || "fr_forma_pago2" == specificField) {
    scJQSelect2Add_fr_forma_pago2(seqRow);
  }
  if (null == specificField || "fr_forma_pago3" == specificField) {
    scJQSelect2Add_fr_forma_pago3(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_fr_provincia(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fr_provincia_obj" : "#id_sc_field_fr_provincia" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fr_provincia_obj',
      dropdownCssClass: 'css_fr_provincia_obj',
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

function scJQSelect2Add_fr_canton(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fr_canton_obj" : "#id_sc_field_fr_canton" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fr_canton_obj',
      dropdownCssClass: 'css_fr_canton_obj',
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

function scJQSelect2Add_fr_forma_pago(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fr_forma_pago_obj" : "#id_sc_field_fr_forma_pago" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fr_forma_pago_obj',
      dropdownCssClass: 'css_fr_forma_pago_obj',
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

function scJQSelect2Add_fr_forma_pago2(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fr_forma_pago2_obj" : "#id_sc_field_fr_forma_pago2" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fr_forma_pago2_obj',
      dropdownCssClass: 'css_fr_forma_pago2_obj',
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

function scJQSelect2Add_fr_forma_pago3(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fr_forma_pago3_obj" : "#id_sc_field_fr_forma_pago3" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fr_forma_pago3_obj',
      dropdownCssClass: 'css_fr_forma_pago3_obj',
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
  scJQCalculatorAdd(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_fr_provincia) { displayChange_field_fr_provincia(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fr_canton) { displayChange_field_fr_canton(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fr_forma_pago) { displayChange_field_fr_forma_pago(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fr_forma_pago2) { displayChange_field_fr_forma_pago2(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fr_forma_pago3) { displayChange_field_fr_forma_pago3(iLine, "on"); } }, 150);
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


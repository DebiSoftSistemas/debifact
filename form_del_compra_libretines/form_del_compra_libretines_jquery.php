
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
  scEventControl_data["cl_id_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_empresa_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_punto_emision_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_producto_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_cantidad_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_valor_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_descuento_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_iva_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_ice_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_total_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_usuario_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_estado_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_tipo_comprobante_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_id_pago_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_compra_promocion_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_fecha_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["cl_id_" + iSeqRow] && scEventControl_data["cl_id_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_id_" + iSeqRow] && scEventControl_data["cl_id_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_empresa_" + iSeqRow] && scEventControl_data["cl_empresa_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_empresa_" + iSeqRow] && scEventControl_data["cl_empresa_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_punto_emision_" + iSeqRow] && scEventControl_data["cl_punto_emision_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_punto_emision_" + iSeqRow] && scEventControl_data["cl_punto_emision_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_producto_" + iSeqRow] && scEventControl_data["cl_producto_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_producto_" + iSeqRow] && scEventControl_data["cl_producto_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_cantidad_" + iSeqRow] && scEventControl_data["cl_cantidad_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_cantidad_" + iSeqRow] && scEventControl_data["cl_cantidad_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_valor_" + iSeqRow] && scEventControl_data["cl_valor_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_valor_" + iSeqRow] && scEventControl_data["cl_valor_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_descuento_" + iSeqRow] && scEventControl_data["cl_descuento_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_descuento_" + iSeqRow] && scEventControl_data["cl_descuento_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_iva_" + iSeqRow] && scEventControl_data["cl_iva_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_iva_" + iSeqRow] && scEventControl_data["cl_iva_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_ice_" + iSeqRow] && scEventControl_data["cl_ice_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_ice_" + iSeqRow] && scEventControl_data["cl_ice_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_total_" + iSeqRow] && scEventControl_data["cl_total_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_total_" + iSeqRow] && scEventControl_data["cl_total_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_usuario_" + iSeqRow] && scEventControl_data["cl_usuario_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_usuario_" + iSeqRow] && scEventControl_data["cl_usuario_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_estado_" + iSeqRow] && scEventControl_data["cl_estado_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_estado_" + iSeqRow] && scEventControl_data["cl_estado_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_tipo_comprobante_" + iSeqRow] && scEventControl_data["cl_tipo_comprobante_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_tipo_comprobante_" + iSeqRow] && scEventControl_data["cl_tipo_comprobante_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_id_pago_" + iSeqRow] && scEventControl_data["cl_id_pago_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_id_pago_" + iSeqRow] && scEventControl_data["cl_id_pago_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_compra_promocion_" + iSeqRow] && scEventControl_data["cl_compra_promocion_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_compra_promocion_" + iSeqRow] && scEventControl_data["cl_compra_promocion_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_fecha_" + iSeqRow] && scEventControl_data["cl_fecha_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_fecha_" + iSeqRow] && scEventControl_data["cl_fecha_" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_active_all() {
  for (var i = 1; i < iAjaxNewLine; i++) {
    if (scEventControl_active(i)) {
      return true;
    }
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  if ("cl_valor_" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  scEventControl_data[fieldName]["blur"] = true;
  if ("cl_punto_emision_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cl_producto_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cl_usuario_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cl_descuento_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("cl_producto_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("cl_valor_" + iSeq == fieldName) {
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

function scEventControl_onCalculator_cl_valor_() {
  if (!_scCalculatorControl["id_sc_field_cl_valor_"]) {
    _scCalculatorBlurOk["id_sc_field_cl_valor_"] = true;
    do_ajax_form_del_compra_libretines_event_cl_valor__onblur();
  }
} // scEventControl_onCalculator_cl_valor_

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_cl_cantidad_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_cantidad__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_compra_libretines_cl_cantidad__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_compra_libretines_cl_cantidad__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_compra_promocion_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_compra_promocion__onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_compra_libretines_cl_compra_promocion__onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_compra_libretines_cl_compra_promocion__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_empresa_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_empresa__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_compra_libretines_cl_empresa__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_compra_libretines_cl_empresa__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_estado_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_estado__onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_compra_libretines_cl_estado__onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_compra_libretines_cl_estado__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_ice_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_ice__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_compra_libretines_cl_ice__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_compra_libretines_cl_ice__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_id_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_id__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_del_compra_libretines_cl_id__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_del_compra_libretines_cl_id__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_id_pago_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_id_pago__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_compra_libretines_cl_id_pago__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_compra_libretines_cl_id_pago__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_iva_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_iva__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_compra_libretines_cl_iva__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_compra_libretines_cl_iva__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_producto_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_producto__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_compra_libretines_cl_producto__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_compra_libretines_cl_producto__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_punto_emision_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_punto_emision__onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_compra_libretines_cl_punto_emision__onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_compra_libretines_cl_punto_emision__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_tipo_comprobante_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_tipo_comprobante__onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_compra_libretines_cl_tipo_comprobante__onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_compra_libretines_cl_tipo_comprobante__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_total_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_total__onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_del_compra_libretines_cl_total__onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_compra_libretines_cl_total__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_usuario_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_usuario__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_compra_libretines_cl_usuario__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_compra_libretines_cl_usuario__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_valor_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_valor__onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_del_compra_libretines_cl_valor__onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_compra_libretines_cl_valor__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_fecha_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_fecha__onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_del_compra_libretines_cl_fecha__onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_compra_libretines_cl_fecha__onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_descuento_' + iSeqRow).bind('blur', function() { sc_form_del_compra_libretines_cl_descuento__onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_compra_libretines_cl_descuento__onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_compra_libretines_cl_descuento__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_del_compra_libretines_cl_cantidad__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_cantidad_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_cantidad__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_cantidad__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_compra_promocion__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_compra_promocion_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_compra_promocion__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_compra_promocion__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_empresa__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_empresa_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_empresa__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_empresa__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_estado__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_estado_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_estado__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_estado__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_ice__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_ice_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_ice__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_ice__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_id__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_id_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_id__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_id__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_id_pago__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_id_pago_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_id_pago__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_id_pago__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_iva__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_iva_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_iva__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_iva__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_producto__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_producto_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_producto__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_compra_libretines_event_cl_producto__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_producto__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_punto_emision__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_punto_emision_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_punto_emision__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_punto_emision__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_tipo_comprobante__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_tipo_comprobante_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_tipo_comprobante__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_tipo_comprobante__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_total__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_total_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_total__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_total__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_usuario__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_usuario_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_usuario__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_usuario__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_valor__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_valor_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_valor__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_compra_libretines_event_cl_valor__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_valor__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_fecha__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_fecha_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_fecha__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_fecha__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_descuento__onblur(oThis, iSeqRow) {
  do_ajax_form_del_compra_libretines_validate_cl_descuento_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_compra_libretines_cl_descuento__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_compra_libretines_event_cl_descuento__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_del_compra_libretines_cl_descuento__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("cl_id_", "", status);
	displayChange_field("cl_empresa_", "", status);
	displayChange_field("cl_punto_emision_", "", status);
	displayChange_field("cl_producto_", "", status);
	displayChange_field("cl_cantidad_", "", status);
	displayChange_field("cl_valor_", "", status);
	displayChange_field("cl_descuento_", "", status);
	displayChange_field("cl_iva_", "", status);
	displayChange_field("cl_ice_", "", status);
	displayChange_field("cl_total_", "", status);
	displayChange_field("cl_usuario_", "", status);
	displayChange_field("cl_estado_", "", status);
	displayChange_field("cl_tipo_comprobante_", "", status);
	displayChange_field("cl_id_pago_", "", status);
	displayChange_field("cl_compra_promocion_", "", status);
	displayChange_field("cl_fecha_", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_cl_id_(row, status);
	displayChange_field_cl_empresa_(row, status);
	displayChange_field_cl_punto_emision_(row, status);
	displayChange_field_cl_producto_(row, status);
	displayChange_field_cl_cantidad_(row, status);
	displayChange_field_cl_valor_(row, status);
	displayChange_field_cl_descuento_(row, status);
	displayChange_field_cl_iva_(row, status);
	displayChange_field_cl_ice_(row, status);
	displayChange_field_cl_total_(row, status);
	displayChange_field_cl_usuario_(row, status);
	displayChange_field_cl_estado_(row, status);
	displayChange_field_cl_tipo_comprobante_(row, status);
	displayChange_field_cl_id_pago_(row, status);
	displayChange_field_cl_compra_promocion_(row, status);
	displayChange_field_cl_fecha_(row, status);
}

function displayChange_field(field, row, status) {
	if ("cl_id_" == field) {
		displayChange_field_cl_id_(row, status);
	}
	if ("cl_empresa_" == field) {
		displayChange_field_cl_empresa_(row, status);
	}
	if ("cl_punto_emision_" == field) {
		displayChange_field_cl_punto_emision_(row, status);
	}
	if ("cl_producto_" == field) {
		displayChange_field_cl_producto_(row, status);
	}
	if ("cl_cantidad_" == field) {
		displayChange_field_cl_cantidad_(row, status);
	}
	if ("cl_valor_" == field) {
		displayChange_field_cl_valor_(row, status);
	}
	if ("cl_descuento_" == field) {
		displayChange_field_cl_descuento_(row, status);
	}
	if ("cl_iva_" == field) {
		displayChange_field_cl_iva_(row, status);
	}
	if ("cl_ice_" == field) {
		displayChange_field_cl_ice_(row, status);
	}
	if ("cl_total_" == field) {
		displayChange_field_cl_total_(row, status);
	}
	if ("cl_usuario_" == field) {
		displayChange_field_cl_usuario_(row, status);
	}
	if ("cl_estado_" == field) {
		displayChange_field_cl_estado_(row, status);
	}
	if ("cl_tipo_comprobante_" == field) {
		displayChange_field_cl_tipo_comprobante_(row, status);
	}
	if ("cl_id_pago_" == field) {
		displayChange_field_cl_id_pago_(row, status);
	}
	if ("cl_compra_promocion_" == field) {
		displayChange_field_cl_compra_promocion_(row, status);
	}
	if ("cl_fecha_" == field) {
		displayChange_field_cl_fecha_(row, status);
	}
}

function displayChange_field_cl_id_(row, status) {
    var fieldId;
}

function displayChange_field_cl_empresa_(row, status) {
    var fieldId;
}

function displayChange_field_cl_punto_emision_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_cl_punto_emision___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_cl_punto_emision_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "cl_punto_emision_");
	}
}

function displayChange_field_cl_producto_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_cl_producto___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_cl_producto_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "cl_producto_");
	}
}

function displayChange_field_cl_cantidad_(row, status) {
    var fieldId;
}

function displayChange_field_cl_valor_(row, status) {
    var fieldId;
}

function displayChange_field_cl_descuento_(row, status) {
    var fieldId;
}

function displayChange_field_cl_iva_(row, status) {
    var fieldId;
}

function displayChange_field_cl_ice_(row, status) {
    var fieldId;
}

function displayChange_field_cl_total_(row, status) {
    var fieldId;
}

function displayChange_field_cl_usuario_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_cl_usuario___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_cl_usuario_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "cl_usuario_");
	}
}

function displayChange_field_cl_estado_(row, status) {
    var fieldId;
}

function displayChange_field_cl_tipo_comprobante_(row, status) {
    var fieldId;
}

function displayChange_field_cl_id_pago_(row, status) {
    var fieldId;
}

function displayChange_field_cl_compra_promocion_(row, status) {
    var fieldId;
}

function displayChange_field_cl_fecha_(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_cl_punto_emision_("all", "on");
	displayChange_field_cl_producto_("all", "on");
	displayChange_field_cl_usuario_("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_compra_libretines_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(34);
		}
	}
}
<?php

$formWidthCorrection = '';
if (false !== strpos($this->Ini->form_table_width, 'calc')) {
	$formWidthCalc = substr($this->Ini->form_table_width, strpos($this->Ini->form_table_width, '(') + 1);
	$formWidthCalc = substr($formWidthCalc, 0, strpos($formWidthCalc, ')'));
	$formWidthParts = explode(' ', $formWidthCalc);
	if (3 == count($formWidthParts) && 'px' == substr($formWidthParts[2], -2)) {
		$formWidthParts[2] = substr($formWidthParts[2], 0, -2) / 2;
		$formWidthCorrection = $formWidthParts[1] . ' ' . $formWidthParts[2];
	}
}

?>

function scSetFixedHeadersCss(baseTop)
{
    let rows, cols, i, j, thisTop;

    rows = $(".sc-ui-header-row");
    thisTop = baseTop;

    for (i = 0; i < rows.length; i++) {
        cols = $(rows[i]).find("td").filter(".sc-col-title");
        for (j = 0; j < cols.length; j++) {
            $(cols[j]).css({
                "position": "sticky",
                "top": thisTop + "px",
                "z-index": 4
            }).addClass("sc-header-fixed");
        }
        thisTop += $(rows[i]).height();
    }

    rows = $(".sc-ui-header-row");

    rows.filter(".sc-col-is-fixed").css("z-index", 5);
    rows.filter(".sc-col-is-fixed").filter(".sc-col-actions").css("z-index", 6);
}

$(function() {
    scSetFixedHeadersCss(0);
});

$(window).scroll(function() {
	scSetFixedHeaders();
});

var rerunHeaderDisplay = 1;

function scSetFixedHeaders(forceDisplay) {
    return;
	if (null == forceDisplay) {
		forceDisplay = false;
	}
	var divScroll, formHeaders, headerPlaceholder;
	formHeaders = scGetHeaderRow();
	headerPlaceholder = $("#sc-id-fixedheaders-placeholder");
	if (!formHeaders) {
		headerPlaceholder.hide();
	}
	else {
		if (scIsHeaderVisible(formHeaders)) {
			headerPlaceholder.hide();
		}
		else {
			if (!headerPlaceholder.filter(":visible").length || forceDisplay) {
				scSetFixedHeadersContents(formHeaders, headerPlaceholder);
				scSetFixedHeadersSize(formHeaders);
				headerPlaceholder.show();
			}
			scSetFixedHeadersPosition(formHeaders, headerPlaceholder);
			if (0 < rerunHeaderDisplay) {
				rerunHeaderDisplay--;
				setTimeout(function() {
					scSetFixedHeadersContents(formHeaders, headerPlaceholder);
					scSetFixedHeadersSize(formHeaders);
					headerPlaceholder.show();
					scSetFixedHeadersPosition(formHeaders, headerPlaceholder);
				}, 5);
			}
		}
	}
}

function scSetFixedHeadersPosition(formHeaders, headerPlaceholder) {
	if (formHeaders) {
		headerPlaceholder.css({"top": 0<?php echo $formWidthCorrection ?>, "left": (Math.floor(formHeaders.offset().left) - $(document).scrollLeft()<?php echo $formWidthCorrection ?>) + "px"});
	}
}

function scIsHeaderVisible(formHeaders) {
	if (typeof(scIsHeaderVisibleMobile) === typeof(function(){})) { return scIsHeaderVisibleMobile(formHeaders); }
	return formHeaders.offset().top > $(document).scrollTop();
}

function scGetHeaderRow() {
	var formHeaders = $(".sc-ui-header-row").filter(":visible");
	if (!formHeaders.length) {
		formHeaders = false;
	}
	return formHeaders;
}

function scSetFixedHeadersContents(formHeaders, headerPlaceholder) {
	var i, htmlContent;
	htmlContent = "<table id=\"sc-id-fixed-headers\" class=\"scFormTable\">";
	for (i = 0; i < formHeaders.length; i++) {
		htmlContent += "<tr class=\"scFormLabelOddMult\" id=\"sc-id-headers-row-" + i + "\">" + $(formHeaders[i]).html() + "</tr>";
	}
	htmlContent += "</table>";
	headerPlaceholder.html(htmlContent);
}

function scSetFixedHeadersSize(formHeaders) {
	var i, j, headerColumns, formColumns, cellHeight, cellWidth, tableOriginal, tableHeaders;
	tableOriginal = $("#hidden_bloco_0");
	tableHeaders = document.getElementById("sc-id-fixed-headers");
	$(tableHeaders).css("width", $(tableOriginal).outerWidth());
	for (i = 0; i < formHeaders.length; i++) {
		headerColumns = $("#sc-id-fixed-headers-row-" + i).find("td");
		formColumns = $(formHeaders[i]).find("td");
		for (j = 0; j < formColumns.length; j++) {
			if (window.getComputedStyle(formColumns[j])) {
				cellWidth = window.getComputedStyle(formColumns[j]).width;
				cellHeight = window.getComputedStyle(formColumns[j]).height;
			}
			else {
				cellWidth = $(formColumns[j]).width() + "px";
				cellHeight = $(formColumns[j]).height() + "px";
			}
			$(headerColumns[j]).css({
				"width": cellWidth,
				"height": cellHeight
			});
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_cl_fecha_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_cl_fecha_" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_del_compra_libretines_validate_cl_fecha_(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['cl_fecha_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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

var jqCalcMonetPos = {};
var _scCalculatorBlurOk = {};

function scJQCalculatorAdd(iSeqRow) {
  _scCalculatorBlurOk["id_sc_field_cl_fecha_" + iSeqRow] = true;
  $("#id_sc_field_cl_valor_" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_cl_valor_" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_cl_valor_" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_cl_valor_" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['cl_valor_']['symbol_grp']); ?>', <?php echo $this->field_config['cl_valor_']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['cl_valor_']['symbol_dec']); ?>', '');
      $(this).val(value);
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_cl_valor_" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_cl_valor_" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_cl_valor_" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['cl_valor_']['symbol_grp']); ?>', <?php echo $this->field_config['cl_valor_']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['cl_valor_']['symbol_dec']); ?>', 6, '');
      $(this).val(value);
      if (oldValue != value) {
        $(this).trigger('change');
      }
    },
    precision: 6,
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_compra_libretines')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "cl_punto_emision_" == specificField) {
    scJQSelect2Add_cl_punto_emision_(seqRow);
  }
  if (null == specificField || "cl_producto_" == specificField) {
    scJQSelect2Add_cl_producto_(seqRow);
  }
  if (null == specificField || "cl_usuario_" == specificField) {
    scJQSelect2Add_cl_usuario_(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_cl_punto_emision_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cl_punto_emision__obj" : "#id_sc_field_cl_punto_emision_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_cl_punto_emision__obj',
      dropdownCssClass: 'css_cl_punto_emision__obj',
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

function scJQSelect2Add_cl_producto_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cl_producto__obj" : "#id_sc_field_cl_producto_" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_cl_producto__obj',
      dropdownCssClass: 'css_cl_producto__obj',
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

function scJQSelect2Add_cl_usuario_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cl_usuario__obj" : "#id_sc_field_cl_usuario_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_cl_usuario__obj',
      dropdownCssClass: 'css_cl_usuario__obj',
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
  scJQCalculatorAdd(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_cl_punto_emision_) { displayChange_field_cl_punto_emision_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_cl_producto_) { displayChange_field_cl_producto_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_cl_usuario_) { displayChange_field_cl_usuario_(iLine, "on"); } }, 150);
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


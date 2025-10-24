
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
  scEventControl_data["df_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_factura" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_producto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_cantidad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_precio_unitario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_descuento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_subtotal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_base_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_porcentaje_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_valor_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_base_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_porcentaje_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_valor_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_base_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_porcentaje_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_valor_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_cantidad_nc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["df_precio_sin_subsidio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["df_id" + iSeqRow] && scEventControl_data["df_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_id" + iSeqRow] && scEventControl_data["df_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_factura" + iSeqRow] && scEventControl_data["df_factura" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_factura" + iSeqRow] && scEventControl_data["df_factura" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_producto" + iSeqRow] && scEventControl_data["df_producto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_producto" + iSeqRow] && scEventControl_data["df_producto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_descripcion" + iSeqRow] && scEventControl_data["df_descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_descripcion" + iSeqRow] && scEventControl_data["df_descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_cantidad" + iSeqRow] && scEventControl_data["df_cantidad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_cantidad" + iSeqRow] && scEventControl_data["df_cantidad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_precio_unitario" + iSeqRow] && scEventControl_data["df_precio_unitario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_precio_unitario" + iSeqRow] && scEventControl_data["df_precio_unitario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_descuento" + iSeqRow] && scEventControl_data["df_descuento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_descuento" + iSeqRow] && scEventControl_data["df_descuento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_subtotal" + iSeqRow] && scEventControl_data["df_subtotal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_subtotal" + iSeqRow] && scEventControl_data["df_subtotal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_base_ice" + iSeqRow] && scEventControl_data["df_base_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_base_ice" + iSeqRow] && scEventControl_data["df_base_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_porcentaje_ice" + iSeqRow] && scEventControl_data["df_porcentaje_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_porcentaje_ice" + iSeqRow] && scEventControl_data["df_porcentaje_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_valor_ice" + iSeqRow] && scEventControl_data["df_valor_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_valor_ice" + iSeqRow] && scEventControl_data["df_valor_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_base_iva" + iSeqRow] && scEventControl_data["df_base_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_base_iva" + iSeqRow] && scEventControl_data["df_base_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_porcentaje_iva" + iSeqRow] && scEventControl_data["df_porcentaje_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_porcentaje_iva" + iSeqRow] && scEventControl_data["df_porcentaje_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_valor_iva" + iSeqRow] && scEventControl_data["df_valor_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_valor_iva" + iSeqRow] && scEventControl_data["df_valor_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_base_irbpnr" + iSeqRow] && scEventControl_data["df_base_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_base_irbpnr" + iSeqRow] && scEventControl_data["df_base_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_porcentaje_irbpnr" + iSeqRow] && scEventControl_data["df_porcentaje_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_porcentaje_irbpnr" + iSeqRow] && scEventControl_data["df_porcentaje_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_valor_irbpnr" + iSeqRow] && scEventControl_data["df_valor_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_valor_irbpnr" + iSeqRow] && scEventControl_data["df_valor_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_total" + iSeqRow] && scEventControl_data["df_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_total" + iSeqRow] && scEventControl_data["df_total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_cantidad_nc" + iSeqRow] && scEventControl_data["df_cantidad_nc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_cantidad_nc" + iSeqRow] && scEventControl_data["df_cantidad_nc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["df_precio_sin_subsidio" + iSeqRow] && scEventControl_data["df_precio_sin_subsidio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["df_precio_sin_subsidio" + iSeqRow] && scEventControl_data["df_precio_sin_subsidio" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  if ("df_cantidad" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  if ("df_precio_unitario" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  if ("df_descuento" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  scEventControl_data[fieldName]["blur"] = true;
  if ("df_producto" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("df_cantidad" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("df_descuento" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("df_precio_unitario" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("df_producto" + iSeq == fieldName) {
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

function scEventControl_onCalculator_df_cantidad() {
  if (!_scCalculatorControl["id_sc_field_df_cantidad"]) {
    _scCalculatorBlurOk["id_sc_field_df_cantidad"] = true;
    do_ajax_form_del_detalle_factura_solo_mob_event_df_cantidad_onblur();
  }
} // scEventControl_onCalculator_df_cantidad

function scEventControl_onCalculator_df_precio_unitario() {
  if (!_scCalculatorControl["id_sc_field_df_precio_unitario"]) {
    _scCalculatorBlurOk["id_sc_field_df_precio_unitario"] = true;
    do_ajax_form_del_detalle_factura_solo_mob_event_df_precio_unitario_onblur();
  }
} // scEventControl_onCalculator_df_precio_unitario

function scEventControl_onCalculator_df_descuento() {
  if (!_scCalculatorControl["id_sc_field_df_descuento"]) {
    _scCalculatorBlurOk["id_sc_field_df_descuento"] = true;
    do_ajax_form_del_detalle_factura_solo_mob_event_df_descuento_onblur();
  }
} // scEventControl_onCalculator_df_descuento

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_df_id' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_id_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_del_detalle_factura_solo_df_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_factura' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_factura_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_detalle_factura_solo_df_factura_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_producto' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_producto_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_detalle_factura_solo_df_producto_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_detalle_factura_solo_df_producto_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_descripcion' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_descripcion_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_detalle_factura_solo_df_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_cantidad' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_cantidad_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_detalle_factura_solo_df_cantidad_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_detalle_factura_solo_df_cantidad_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_precio_unitario' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_precio_unitario_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_del_detalle_factura_solo_df_precio_unitario_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_detalle_factura_solo_df_precio_unitario_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_subtotal' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_subtotal_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_detalle_factura_solo_df_subtotal_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_descuento' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_descuento_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_detalle_factura_solo_df_descuento_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_detalle_factura_solo_df_descuento_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_base_iva' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_base_iva_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_detalle_factura_solo_df_base_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_porcentaje_iva' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_porcentaje_iva_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_detalle_factura_solo_df_porcentaje_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_valor_iva' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_valor_iva_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_detalle_factura_solo_df_valor_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_base_ice' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_base_ice_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_detalle_factura_solo_df_base_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_porcentaje_ice' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_porcentaje_ice_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_detalle_factura_solo_df_porcentaje_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_valor_ice' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_valor_ice_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_detalle_factura_solo_df_valor_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_base_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_base_irbpnr_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_detalle_factura_solo_df_base_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_porcentaje_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_porcentaje_irbpnr_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_detalle_factura_solo_df_porcentaje_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_valor_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_valor_irbpnr_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_detalle_factura_solo_df_valor_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_total' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_total_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_detalle_factura_solo_df_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_cantidad_nc' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_cantidad_nc_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_detalle_factura_solo_df_cantidad_nc_onfocus(this, iSeqRow) });
  $('#id_sc_field_df_precio_sin_subsidio' + iSeqRow).bind('blur', function() { sc_form_del_detalle_factura_solo_df_precio_sin_subsidio_onblur(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_del_detalle_factura_solo_df_precio_sin_subsidio_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_del_detalle_factura_solo_df_id_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_id();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_factura_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_factura();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_factura_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_producto_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_producto();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_producto_onchange(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_event_df_producto_onchange();
}

function sc_form_del_detalle_factura_solo_df_producto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_descripcion();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_cantidad_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_cantidad();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_cantidad_onchange(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_event_df_cantidad_onchange();
}

function sc_form_del_detalle_factura_solo_df_cantidad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_precio_unitario_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_precio_unitario();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_precio_unitario_onchange(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_event_df_precio_unitario_onchange();
}

function sc_form_del_detalle_factura_solo_df_precio_unitario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_subtotal_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_subtotal();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_subtotal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_descuento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_descuento();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_descuento_onchange(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_event_df_descuento_onchange();
}

function sc_form_del_detalle_factura_solo_df_descuento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_base_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_base_iva();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_base_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_porcentaje_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_porcentaje_iva();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_porcentaje_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_valor_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_valor_iva();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_valor_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_base_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_base_ice();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_base_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_porcentaje_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_porcentaje_ice();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_porcentaje_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_valor_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_valor_ice();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_valor_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_base_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_base_irbpnr();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_base_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_porcentaje_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_porcentaje_irbpnr();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_porcentaje_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_valor_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_valor_irbpnr();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_valor_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_total_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_total();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_cantidad_nc_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_cantidad_nc();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_cantidad_nc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_factura_solo_df_precio_sin_subsidio_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_factura_solo_mob_validate_df_precio_sin_subsidio();
  scCssBlur(oThis);
}

function sc_form_del_detalle_factura_solo_df_precio_sin_subsidio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("df_id", "", status);
	displayChange_field("df_factura", "", status);
	displayChange_field("df_producto", "", status);
	displayChange_field("df_descripcion", "", status);
	displayChange_field("df_cantidad", "", status);
	displayChange_field("df_precio_unitario", "", status);
	displayChange_field("df_descuento", "", status);
	displayChange_field("df_subtotal", "", status);
	displayChange_field("df_base_ice", "", status);
	displayChange_field("df_porcentaje_ice", "", status);
	displayChange_field("df_valor_ice", "", status);
	displayChange_field("df_base_iva", "", status);
	displayChange_field("df_porcentaje_iva", "", status);
	displayChange_field("df_valor_iva", "", status);
	displayChange_field("df_base_irbpnr", "", status);
	displayChange_field("df_porcentaje_irbpnr", "", status);
	displayChange_field("df_valor_irbpnr", "", status);
	displayChange_field("df_total", "", status);
	displayChange_field("df_cantidad_nc", "", status);
	displayChange_field("df_precio_sin_subsidio", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_df_id(row, status);
	displayChange_field_df_factura(row, status);
	displayChange_field_df_producto(row, status);
	displayChange_field_df_descripcion(row, status);
	displayChange_field_df_cantidad(row, status);
	displayChange_field_df_precio_unitario(row, status);
	displayChange_field_df_descuento(row, status);
	displayChange_field_df_subtotal(row, status);
	displayChange_field_df_base_ice(row, status);
	displayChange_field_df_porcentaje_ice(row, status);
	displayChange_field_df_valor_ice(row, status);
	displayChange_field_df_base_iva(row, status);
	displayChange_field_df_porcentaje_iva(row, status);
	displayChange_field_df_valor_iva(row, status);
	displayChange_field_df_base_irbpnr(row, status);
	displayChange_field_df_porcentaje_irbpnr(row, status);
	displayChange_field_df_valor_irbpnr(row, status);
	displayChange_field_df_total(row, status);
	displayChange_field_df_cantidad_nc(row, status);
	displayChange_field_df_precio_sin_subsidio(row, status);
}

function displayChange_field(field, row, status) {
	if ("df_id" == field) {
		displayChange_field_df_id(row, status);
	}
	if ("df_factura" == field) {
		displayChange_field_df_factura(row, status);
	}
	if ("df_producto" == field) {
		displayChange_field_df_producto(row, status);
	}
	if ("df_descripcion" == field) {
		displayChange_field_df_descripcion(row, status);
	}
	if ("df_cantidad" == field) {
		displayChange_field_df_cantidad(row, status);
	}
	if ("df_precio_unitario" == field) {
		displayChange_field_df_precio_unitario(row, status);
	}
	if ("df_descuento" == field) {
		displayChange_field_df_descuento(row, status);
	}
	if ("df_subtotal" == field) {
		displayChange_field_df_subtotal(row, status);
	}
	if ("df_base_ice" == field) {
		displayChange_field_df_base_ice(row, status);
	}
	if ("df_porcentaje_ice" == field) {
		displayChange_field_df_porcentaje_ice(row, status);
	}
	if ("df_valor_ice" == field) {
		displayChange_field_df_valor_ice(row, status);
	}
	if ("df_base_iva" == field) {
		displayChange_field_df_base_iva(row, status);
	}
	if ("df_porcentaje_iva" == field) {
		displayChange_field_df_porcentaje_iva(row, status);
	}
	if ("df_valor_iva" == field) {
		displayChange_field_df_valor_iva(row, status);
	}
	if ("df_base_irbpnr" == field) {
		displayChange_field_df_base_irbpnr(row, status);
	}
	if ("df_porcentaje_irbpnr" == field) {
		displayChange_field_df_porcentaje_irbpnr(row, status);
	}
	if ("df_valor_irbpnr" == field) {
		displayChange_field_df_valor_irbpnr(row, status);
	}
	if ("df_total" == field) {
		displayChange_field_df_total(row, status);
	}
	if ("df_cantidad_nc" == field) {
		displayChange_field_df_cantidad_nc(row, status);
	}
	if ("df_precio_sin_subsidio" == field) {
		displayChange_field_df_precio_sin_subsidio(row, status);
	}
}

function displayChange_field_df_id(row, status) {
    var fieldId;
}

function displayChange_field_df_factura(row, status) {
    var fieldId;
}

function displayChange_field_df_producto(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_df_producto__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_df_producto" + row).select2("destroy");
		}
		scJQSelect2Add(row, "df_producto");
	}
}

function displayChange_field_df_descripcion(row, status) {
    var fieldId;
}

function displayChange_field_df_cantidad(row, status) {
    var fieldId;
}

function displayChange_field_df_precio_unitario(row, status) {
    var fieldId;
}

function displayChange_field_df_descuento(row, status) {
    var fieldId;
}

function displayChange_field_df_subtotal(row, status) {
    var fieldId;
}

function displayChange_field_df_base_ice(row, status) {
    var fieldId;
}

function displayChange_field_df_porcentaje_ice(row, status) {
    var fieldId;
}

function displayChange_field_df_valor_ice(row, status) {
    var fieldId;
}

function displayChange_field_df_base_iva(row, status) {
    var fieldId;
}

function displayChange_field_df_porcentaje_iva(row, status) {
    var fieldId;
}

function displayChange_field_df_valor_iva(row, status) {
    var fieldId;
}

function displayChange_field_df_base_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_df_porcentaje_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_df_valor_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_df_total(row, status) {
    var fieldId;
}

function displayChange_field_df_cantidad_nc(row, status) {
    var fieldId;
}

function displayChange_field_df_precio_sin_subsidio(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_df_producto("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_detalle_factura_solo_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(41);
		}
	}
}
var jqCalcMonetPos = {};
var _scCalculatorBlurOk = {};

function scJQCalculatorAdd(iSeqRow) {
  _scCalculatorBlurOk["id_sc_field_df_precio_sin_subsidio" + iSeqRow] = true;
  $("#id_sc_field_df_cantidad" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_df_cantidad" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_df_cantidad" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_df_cantidad" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['df_cantidad']['symbol_grp']); ?>', <?php echo $this->field_config['df_cantidad']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['df_cantidad']['symbol_dec']); ?>', '');
      $(this).val(value);
      $(".calculator-popup").css("min-width", "200px");
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_df_cantidad" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_df_cantidad" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_df_cantidad" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['df_cantidad']['symbol_grp']); ?>', <?php echo $this->field_config['df_cantidad']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['df_cantidad']['symbol_dec']); ?>', 6, '');
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

  $("#id_sc_field_df_precio_unitario" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_df_precio_unitario" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_df_precio_unitario" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_df_precio_unitario" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['df_precio_unitario']['symbol_grp']); ?>', <?php echo $this->field_config['df_precio_unitario']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['df_precio_unitario']['symbol_dec']); ?>', '');
      $(this).val(value);
      $(".calculator-popup").css("min-width", "200px");
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_df_precio_unitario" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_df_precio_unitario" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_df_precio_unitario" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['df_precio_unitario']['symbol_grp']); ?>', <?php echo $this->field_config['df_precio_unitario']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['df_precio_unitario']['symbol_dec']); ?>', 6, '');
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

  $("#id_sc_field_df_descuento" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_df_descuento" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_df_descuento" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_df_descuento" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['df_descuento']['symbol_grp']); ?>', <?php echo $this->field_config['df_descuento']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['df_descuento']['symbol_dec']); ?>', '');
      $(this).val(value);
      $(".calculator-popup").css("min-width", "200px");
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_df_descuento" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_df_descuento" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_df_descuento" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['df_descuento']['symbol_grp']); ?>', <?php echo $this->field_config['df_descuento']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['df_descuento']['symbol_dec']); ?>', 2, '');
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_detalle_factura_solo_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "df_producto" == specificField) {
    scJQSelect2Add_df_producto(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_df_producto(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_df_producto_obj" : "#id_sc_field_df_producto" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_df_producto_obj',
      dropdownCssClass: 'css_df_producto_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_df_producto) { displayChange_field_df_producto(iLine, "on"); } }, 150);
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


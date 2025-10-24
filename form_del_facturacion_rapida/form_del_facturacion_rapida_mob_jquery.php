
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
  scEventControl_data["fac_imagen" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_valor_fijo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_subtotal_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_subtotal_cero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_subtotal_no_objeto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_subtotal_excento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_subtotal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_total_descuento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_valor_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_valor_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_valor_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["detalle" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["fac_id" + iSeqRow] && scEventControl_data["fac_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_id" + iSeqRow] && scEventControl_data["fac_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_empresa" + iSeqRow] && scEventControl_data["fac_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_empresa" + iSeqRow] && scEventControl_data["fac_empresa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_descripcion" + iSeqRow] && scEventControl_data["fac_descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_descripcion" + iSeqRow] && scEventControl_data["fac_descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_fijo" + iSeqRow] && scEventControl_data["fac_valor_fijo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_fijo" + iSeqRow] && scEventControl_data["fac_valor_fijo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_estado" + iSeqRow] && scEventControl_data["fac_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_estado" + iSeqRow] && scEventControl_data["fac_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_usuario" + iSeqRow] && scEventControl_data["fac_usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_usuario" + iSeqRow] && scEventControl_data["fac_usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_iva" + iSeqRow] && scEventControl_data["fac_subtotal_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_iva" + iSeqRow] && scEventControl_data["fac_subtotal_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_cero" + iSeqRow] && scEventControl_data["fac_subtotal_cero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_cero" + iSeqRow] && scEventControl_data["fac_subtotal_cero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_no_objeto" + iSeqRow] && scEventControl_data["fac_subtotal_no_objeto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_no_objeto" + iSeqRow] && scEventControl_data["fac_subtotal_no_objeto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_excento" + iSeqRow] && scEventControl_data["fac_subtotal_excento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_excento" + iSeqRow] && scEventControl_data["fac_subtotal_excento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal" + iSeqRow] && scEventControl_data["fac_subtotal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal" + iSeqRow] && scEventControl_data["fac_subtotal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_total_descuento" + iSeqRow] && scEventControl_data["fac_total_descuento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_total_descuento" + iSeqRow] && scEventControl_data["fac_total_descuento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_ice" + iSeqRow] && scEventControl_data["fac_valor_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_ice" + iSeqRow] && scEventControl_data["fac_valor_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_iva" + iSeqRow] && scEventControl_data["fac_valor_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_iva" + iSeqRow] && scEventControl_data["fac_valor_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_irbpnr" + iSeqRow] && scEventControl_data["fac_valor_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_irbpnr" + iSeqRow] && scEventControl_data["fac_valor_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_total" + iSeqRow] && scEventControl_data["fac_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_total" + iSeqRow] && scEventControl_data["fac_total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["detalle" + iSeqRow] && scEventControl_data["detalle" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["detalle" + iSeqRow] && scEventControl_data["detalle" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("fac_estado" + iSeq == fieldName) {
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
  $('#id_sc_field_fac_id' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_id_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_del_facturacion_rapida_fac_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_empresa' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_empresa_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_facturacion_rapida_fac_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_imagen' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_imagen_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_facturacion_rapida_fac_imagen_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_descripcion' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_descripcion_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_facturacion_rapida_fac_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_fijo' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_valor_fijo_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_facturacion_rapida_fac_valor_fijo_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_iva' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_subtotal_iva_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_facturacion_rapida_fac_subtotal_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_cero' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_subtotal_cero_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_facturacion_rapida_fac_subtotal_cero_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_no_objeto' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_subtotal_no_objeto_onblur(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_del_facturacion_rapida_fac_subtotal_no_objeto_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_excento' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_subtotal_excento_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_facturacion_rapida_fac_subtotal_excento_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_subtotal_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_facturacion_rapida_fac_subtotal_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_total_descuento' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_total_descuento_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_facturacion_rapida_fac_total_descuento_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_ice' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_valor_ice_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_facturacion_rapida_fac_valor_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_iva' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_valor_iva_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_facturacion_rapida_fac_valor_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_valor_irbpnr_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_facturacion_rapida_fac_valor_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_total' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_total_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_facturacion_rapida_fac_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_estado' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_estado_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_facturacion_rapida_fac_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_usuario' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_fac_usuario_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_facturacion_rapida_fac_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_detalle' + iSeqRow).bind('blur', function() { sc_form_del_facturacion_rapida_detalle_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_facturacion_rapida_detalle_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-fac_valor_fijo' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_del_facturacion_rapida_fac_id_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_id();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_empresa();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_imagen_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_imagen_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_descripcion();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_valor_fijo_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_valor_fijo();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_valor_fijo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_subtotal_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_subtotal_iva();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_subtotal_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_subtotal_cero_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_subtotal_cero();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_subtotal_cero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_subtotal_no_objeto_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_subtotal_no_objeto();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_subtotal_no_objeto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_subtotal_excento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_subtotal_excento();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_subtotal_excento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_subtotal_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_subtotal();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_subtotal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_total_descuento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_total_descuento();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_total_descuento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_valor_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_valor_ice();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_valor_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_valor_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_valor_iva();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_valor_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_valor_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_valor_irbpnr();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_valor_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_total_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_total();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_estado();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_fac_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_fac_usuario();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_fac_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_facturacion_rapida_detalle_onblur(oThis, iSeqRow) {
  do_ajax_form_del_facturacion_rapida_mob_validate_detalle();
  scCssBlur(oThis);
}

function sc_form_del_facturacion_rapida_detalle_onfocus(oThis, iSeqRow) {
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
}

function displayChange_block_0(status) {
	displayChange_field("fac_imagen", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("fac_id", "", status);
	displayChange_field("fac_empresa", "", status);
	displayChange_field("fac_descripcion", "", status);
	displayChange_field("fac_valor_fijo", "", status);
	displayChange_field("fac_estado", "", status);
	displayChange_field("fac_usuario", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("fac_subtotal_iva", "", status);
	displayChange_field("fac_subtotal_cero", "", status);
	displayChange_field("fac_subtotal_no_objeto", "", status);
	displayChange_field("fac_subtotal_excento", "", status);
	displayChange_field("fac_subtotal", "", status);
	displayChange_field("fac_total_descuento", "", status);
	displayChange_field("fac_valor_ice", "", status);
	displayChange_field("fac_valor_iva", "", status);
	displayChange_field("fac_valor_irbpnr", "", status);
	displayChange_field("fac_total", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("detalle", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_fac_imagen(row, status);
	displayChange_field_fac_id(row, status);
	displayChange_field_fac_empresa(row, status);
	displayChange_field_fac_descripcion(row, status);
	displayChange_field_fac_valor_fijo(row, status);
	displayChange_field_fac_estado(row, status);
	displayChange_field_fac_usuario(row, status);
	displayChange_field_fac_subtotal_iva(row, status);
	displayChange_field_fac_subtotal_cero(row, status);
	displayChange_field_fac_subtotal_no_objeto(row, status);
	displayChange_field_fac_subtotal_excento(row, status);
	displayChange_field_fac_subtotal(row, status);
	displayChange_field_fac_total_descuento(row, status);
	displayChange_field_fac_valor_ice(row, status);
	displayChange_field_fac_valor_iva(row, status);
	displayChange_field_fac_valor_irbpnr(row, status);
	displayChange_field_fac_total(row, status);
	displayChange_field_detalle(row, status);
}

function displayChange_field(field, row, status) {
	if ("fac_imagen" == field) {
		displayChange_field_fac_imagen(row, status);
	}
	if ("fac_id" == field) {
		displayChange_field_fac_id(row, status);
	}
	if ("fac_empresa" == field) {
		displayChange_field_fac_empresa(row, status);
	}
	if ("fac_descripcion" == field) {
		displayChange_field_fac_descripcion(row, status);
	}
	if ("fac_valor_fijo" == field) {
		displayChange_field_fac_valor_fijo(row, status);
	}
	if ("fac_estado" == field) {
		displayChange_field_fac_estado(row, status);
	}
	if ("fac_usuario" == field) {
		displayChange_field_fac_usuario(row, status);
	}
	if ("fac_subtotal_iva" == field) {
		displayChange_field_fac_subtotal_iva(row, status);
	}
	if ("fac_subtotal_cero" == field) {
		displayChange_field_fac_subtotal_cero(row, status);
	}
	if ("fac_subtotal_no_objeto" == field) {
		displayChange_field_fac_subtotal_no_objeto(row, status);
	}
	if ("fac_subtotal_excento" == field) {
		displayChange_field_fac_subtotal_excento(row, status);
	}
	if ("fac_subtotal" == field) {
		displayChange_field_fac_subtotal(row, status);
	}
	if ("fac_total_descuento" == field) {
		displayChange_field_fac_total_descuento(row, status);
	}
	if ("fac_valor_ice" == field) {
		displayChange_field_fac_valor_ice(row, status);
	}
	if ("fac_valor_iva" == field) {
		displayChange_field_fac_valor_iva(row, status);
	}
	if ("fac_valor_irbpnr" == field) {
		displayChange_field_fac_valor_irbpnr(row, status);
	}
	if ("fac_total" == field) {
		displayChange_field_fac_total(row, status);
	}
	if ("detalle" == field) {
		displayChange_field_detalle(row, status);
	}
}

function displayChange_field_fac_imagen(row, status) {
    var fieldId;
}

function displayChange_field_fac_id(row, status) {
    var fieldId;
}

function displayChange_field_fac_empresa(row, status) {
    var fieldId;
}

function displayChange_field_fac_descripcion(row, status) {
    var fieldId;
}

function displayChange_field_fac_valor_fijo(row, status) {
    var fieldId;
}

function displayChange_field_fac_estado(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fac_estado__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fac_estado" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fac_estado");
	}
}

function displayChange_field_fac_usuario(row, status) {
    var fieldId;
}

function displayChange_field_fac_subtotal_iva(row, status) {
    var fieldId;
}

function displayChange_field_fac_subtotal_cero(row, status) {
    var fieldId;
}

function displayChange_field_fac_subtotal_no_objeto(row, status) {
    var fieldId;
}

function displayChange_field_fac_subtotal_excento(row, status) {
    var fieldId;
}

function displayChange_field_fac_subtotal(row, status) {
    var fieldId;
}

function displayChange_field_fac_total_descuento(row, status) {
    var fieldId;
}

function displayChange_field_fac_valor_ice(row, status) {
    var fieldId;
}

function displayChange_field_fac_valor_iva(row, status) {
    var fieldId;
}

function displayChange_field_fac_valor_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_fac_total(row, status) {
    var fieldId;
}

function displayChange_field_detalle(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_del_detalle_facturacion_rapida_mob")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_del_detalle_facturacion_rapida_mob")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_fac_estado("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_facturacion_rapida_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(39);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_fac_imagen" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_del_facturacion_rapida_mob_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'fac_imagen'},
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
        $("#id_img_loader_fac_imagen" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fac_imagen" + iSeqRow).hide();
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
      $("#id_sc_field_fac_imagen" + iSeqRow).val("");
      $("#id_sc_field_fac_imagen_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fac_imagen_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fac_imagen = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fac_imagen) ? "none" : "";
      $("#id_ajax_img_fac_imagen" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fac_imagen" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fac_imagen) {
        document.F1.temp_out_fac_imagen.value = var_ajax_img_thumb;
        document.F1.temp_out1_fac_imagen.value = var_ajax_img_fac_imagen;
      }
      else if (document.F1.temp_out_fac_imagen) {
        document.F1.temp_out_fac_imagen.value = var_ajax_img_fac_imagen;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fac_imagen" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fac_imagen" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fac_imagen" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_fac_imagen" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_facturacion_rapida_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "fac_estado" == specificField) {
    scJQSelect2Add_fac_estado(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_fac_estado(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fac_estado_obj" : "#id_sc_field_fac_estado" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_fac_estado_obj',
      dropdownCssClass: 'css_fac_estado_obj',
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
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_fac_estado) { displayChange_field_fac_estado(iLine, "on"); } }, 150);
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


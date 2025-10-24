
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
  scEventControl_data["titulo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_establecimiento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["secuencial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_tipo_entrega" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_secuencial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_code_sale_invoice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_code_order" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_ruc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lugar_envio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["detalles" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_subtotal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_subtotal_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_subtotal_cero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_subtotal_no_objeto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_subtotal_excento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_total_descuento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_valor_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_valor_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_valor_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_propina" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["prof_usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_fecha" + iSeqRow] && scEventControl_data["prof_fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_fecha" + iSeqRow] && scEventControl_data["prof_fecha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_establecimiento" + iSeqRow] && scEventControl_data["prof_establecimiento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_establecimiento" + iSeqRow] && scEventControl_data["prof_establecimiento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["secuencial" + iSeqRow] && scEventControl_data["secuencial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["secuencial" + iSeqRow] && scEventControl_data["secuencial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_tipo_entrega" + iSeqRow] && scEventControl_data["prof_tipo_entrega" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_tipo_entrega" + iSeqRow] && scEventControl_data["prof_tipo_entrega" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_secuencial" + iSeqRow] && scEventControl_data["prof_secuencial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_secuencial" + iSeqRow] && scEventControl_data["prof_secuencial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_numero" + iSeqRow] && scEventControl_data["prof_numero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_numero" + iSeqRow] && scEventControl_data["prof_numero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_code_sale_invoice" + iSeqRow] && scEventControl_data["prof_code_sale_invoice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_code_sale_invoice" + iSeqRow] && scEventControl_data["prof_code_sale_invoice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_code_order" + iSeqRow] && scEventControl_data["prof_code_order" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_code_order" + iSeqRow] && scEventControl_data["prof_code_order" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_ruc" + iSeqRow] && scEventControl_data["prof_ruc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_ruc" + iSeqRow] && scEventControl_data["prof_ruc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_nombre" + iSeqRow] && scEventControl_data["prof_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_nombre" + iSeqRow] && scEventControl_data["prof_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_email" + iSeqRow] && scEventControl_data["prof_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_email" + iSeqRow] && scEventControl_data["prof_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_direccion" + iSeqRow] && scEventControl_data["prof_direccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_direccion" + iSeqRow] && scEventControl_data["prof_direccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_descripcion" + iSeqRow] && scEventControl_data["prof_descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_descripcion" + iSeqRow] && scEventControl_data["prof_descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_cliente" + iSeqRow] && scEventControl_data["prof_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_cliente" + iSeqRow] && scEventControl_data["prof_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lugar_envio" + iSeqRow] && scEventControl_data["lugar_envio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lugar_envio" + iSeqRow] && scEventControl_data["lugar_envio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["detalles" + iSeqRow] && scEventControl_data["detalles" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["detalles" + iSeqRow] && scEventControl_data["detalles" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_subtotal" + iSeqRow] && scEventControl_data["prof_subtotal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_subtotal" + iSeqRow] && scEventControl_data["prof_subtotal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_subtotal_iva" + iSeqRow] && scEventControl_data["prof_subtotal_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_subtotal_iva" + iSeqRow] && scEventControl_data["prof_subtotal_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_subtotal_cero" + iSeqRow] && scEventControl_data["prof_subtotal_cero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_subtotal_cero" + iSeqRow] && scEventControl_data["prof_subtotal_cero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_subtotal_no_objeto" + iSeqRow] && scEventControl_data["prof_subtotal_no_objeto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_subtotal_no_objeto" + iSeqRow] && scEventControl_data["prof_subtotal_no_objeto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_subtotal_excento" + iSeqRow] && scEventControl_data["prof_subtotal_excento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_subtotal_excento" + iSeqRow] && scEventControl_data["prof_subtotal_excento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_total_descuento" + iSeqRow] && scEventControl_data["prof_total_descuento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_total_descuento" + iSeqRow] && scEventControl_data["prof_total_descuento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_valor_ice" + iSeqRow] && scEventControl_data["prof_valor_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_valor_ice" + iSeqRow] && scEventControl_data["prof_valor_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_valor_iva" + iSeqRow] && scEventControl_data["prof_valor_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_valor_iva" + iSeqRow] && scEventControl_data["prof_valor_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_valor_irbpnr" + iSeqRow] && scEventControl_data["prof_valor_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_valor_irbpnr" + iSeqRow] && scEventControl_data["prof_valor_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_propina" + iSeqRow] && scEventControl_data["prof_propina" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_propina" + iSeqRow] && scEventControl_data["prof_propina" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_total" + iSeqRow] && scEventControl_data["prof_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_total" + iSeqRow] && scEventControl_data["prof_total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_estado" + iSeqRow] && scEventControl_data["prof_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_estado" + iSeqRow] && scEventControl_data["prof_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["prof_usuario" + iSeqRow] && scEventControl_data["prof_usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["prof_usuario" + iSeqRow] && scEventControl_data["prof_usuario" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("prof_establecimiento" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("prof_tipo_entrega" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("prof_cliente" + iSeq == fieldName) {
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
  $('#id_sc_field_prof_numero' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_numero_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_pedido_espera_pago_prof_numero_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_convenio' + iSeqRow).bind('change', function() { sc_form_del_pedido_espera_pago_prof_convenio_onchange(this, iSeqRow) });
  $('#id_sc_field_prof_code_order' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_code_order_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_pedido_espera_pago_prof_code_order_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_code_order_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_empresa' + iSeqRow).bind('change', function() { sc_form_del_pedido_espera_pago_prof_empresa_onchange(this, iSeqRow) });
  $('#id_sc_field_prof_establecimiento' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_establecimiento_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_pedido_espera_pago_prof_establecimiento_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_establecimiento_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_secuencial' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_secuencial_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_pedido_espera_pago_prof_secuencial_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_secuencial_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_fecha' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_fecha_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_pedido_espera_pago_prof_fecha_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_cliente' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_cliente_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_pedido_espera_pago_prof_cliente_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_descripcion' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_descripcion_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_pedido_espera_pago_prof_descripcion_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_subtotal_iva' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_subtotal_iva_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_pedido_espera_pago_prof_subtotal_iva_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_subtotal_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_subtotal_cero' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_subtotal_cero_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_del_pedido_espera_pago_prof_subtotal_cero_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_subtotal_cero_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_subtotal_no_objeto' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_subtotal_no_objeto_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_del_pedido_espera_pago_prof_subtotal_no_objeto_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_subtotal_no_objeto_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_subtotal_excento' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_subtotal_excento_onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_del_pedido_espera_pago_prof_subtotal_excento_onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_subtotal_excento_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_subtotal' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_subtotal_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_pedido_espera_pago_prof_subtotal_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_subtotal_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_total_descuento' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_total_descuento_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_pedido_espera_pago_prof_total_descuento_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_total_descuento_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_valor_ice' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_valor_ice_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_pedido_espera_pago_prof_valor_ice_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_valor_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_valor_iva' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_valor_iva_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_pedido_espera_pago_prof_valor_iva_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_valor_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_valor_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_valor_irbpnr_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_pedido_espera_pago_prof_valor_irbpnr_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_valor_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_propina' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_propina_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_pedido_espera_pago_prof_propina_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_propina_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_total' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_total_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_pedido_espera_pago_prof_total_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_estado' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_estado_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_pedido_espera_pago_prof_estado_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_usuario' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_usuario_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_pedido_espera_pago_prof_usuario_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_aplica_propina' + iSeqRow).bind('change', function() { sc_form_del_pedido_espera_pago_prof_aplica_propina_onchange(this, iSeqRow) });
  $('#id_sc_field_prof_tipo_entrega' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_tipo_entrega_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_pedido_espera_pago_prof_tipo_entrega_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_tipo_entrega_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_code_sale_invoice' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_code_sale_invoice_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_del_pedido_espera_pago_prof_code_sale_invoice_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_code_sale_invoice_onfocus(this, iSeqRow) });
  $('#id_sc_field_detalles' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_detalles_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_del_pedido_espera_pago_detalles_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_pedido_espera_pago_detalles_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_direccion' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_direccion_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_pedido_espera_pago_prof_direccion_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_email' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_email_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_pedido_espera_pago_prof_email_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_nombre' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_nombre_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_pedido_espera_pago_prof_nombre_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_prof_ruc' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_prof_ruc_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_del_pedido_espera_pago_prof_ruc_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_pedido_espera_pago_prof_ruc_onfocus(this, iSeqRow) });
  $('#id_sc_field_secuencial' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_secuencial_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_pedido_espera_pago_secuencial_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_pedido_espera_pago_secuencial_onfocus(this, iSeqRow) });
  $('#id_sc_field_titulo' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_titulo_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_del_pedido_espera_pago_titulo_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_del_pedido_espera_pago_titulo_onfocus(this, iSeqRow) });
  $('#id_sc_field_lugar_envio' + iSeqRow).bind('blur', function() { sc_form_del_pedido_espera_pago_lugar_envio_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_pedido_espera_pago_lugar_envio_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_pedido_espera_pago_lugar_envio_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_del_pedido_espera_pago_prof_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_numero();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_numero_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_convenio_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_code_order_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_code_order();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_code_order_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_code_order_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_establecimiento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_establecimiento();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_establecimiento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_establecimiento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_secuencial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_secuencial();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_secuencial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_secuencial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_fecha();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_fecha_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_cliente();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_cliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_pedido_espera_pago_event_prof_cliente_onchange();
}

function sc_form_del_pedido_espera_pago_prof_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_descripcion();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_descripcion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_subtotal_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_subtotal_iva();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_subtotal_iva_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_subtotal_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_subtotal_cero_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_subtotal_cero();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_subtotal_cero_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_subtotal_cero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_subtotal_no_objeto_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_subtotal_no_objeto();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_subtotal_no_objeto_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_subtotal_no_objeto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_subtotal_excento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_subtotal_excento();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_subtotal_excento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_subtotal_excento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_subtotal_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_subtotal();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_subtotal_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_subtotal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_total_descuento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_total_descuento();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_total_descuento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_total_descuento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_valor_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_valor_ice();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_valor_ice_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_valor_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_valor_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_valor_iva();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_valor_iva_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_valor_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_valor_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_valor_irbpnr();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_valor_irbpnr_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_valor_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_propina_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_propina();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_propina_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_propina_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_total_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_total();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_total_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_estado();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_usuario();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_usuario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_aplica_propina_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_tipo_entrega_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_tipo_entrega();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_tipo_entrega_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_tipo_entrega_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_code_sale_invoice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_code_sale_invoice();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_code_sale_invoice_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_code_sale_invoice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_detalles_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_detalles();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_detalles_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_detalles_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_direccion();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_direccion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_email_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_email();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_email_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_nombre();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_nombre_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_prof_ruc_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_prof_ruc();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_prof_ruc_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_prof_ruc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_secuencial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_secuencial();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_secuencial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_secuencial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_titulo_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_titulo();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_titulo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_titulo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_pedido_espera_pago_lugar_envio_onblur(oThis, iSeqRow) {
  do_ajax_form_del_pedido_espera_pago_validate_lugar_envio();
  scCssBlur(oThis);
}

function sc_form_del_pedido_espera_pago_lugar_envio_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_pedido_espera_pago_lugar_envio_onfocus(oThis, iSeqRow) {
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
}

function displayChange_block_0(status) {
	displayChange_field("titulo", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("prof_fecha", "", status);
	displayChange_field("prof_establecimiento", "", status);
	displayChange_field("secuencial", "", status);
	displayChange_field("prof_tipo_entrega", "", status);
	displayChange_field("prof_secuencial", "", status);
	displayChange_field("prof_numero", "", status);
	displayChange_field("prof_code_sale_invoice", "", status);
	displayChange_field("prof_code_order", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("prof_ruc", "", status);
	displayChange_field("prof_nombre", "", status);
	displayChange_field("prof_email", "", status);
	displayChange_field("prof_direccion", "", status);
	displayChange_field("prof_descripcion", "", status);
	displayChange_field("prof_cliente", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("lugar_envio", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("detalles", "", status);
}

function displayChange_block_5(status) {
	displayChange_field("prof_subtotal", "", status);
	displayChange_field("prof_subtotal_iva", "", status);
	displayChange_field("prof_subtotal_cero", "", status);
	displayChange_field("prof_subtotal_no_objeto", "", status);
	displayChange_field("prof_subtotal_excento", "", status);
	displayChange_field("prof_total_descuento", "", status);
	displayChange_field("prof_valor_ice", "", status);
	displayChange_field("prof_valor_iva", "", status);
	displayChange_field("prof_valor_irbpnr", "", status);
	displayChange_field("prof_propina", "", status);
	displayChange_field("prof_total", "", status);
	displayChange_field("prof_estado", "", status);
	displayChange_field("prof_usuario", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_titulo(row, status);
	displayChange_field_prof_fecha(row, status);
	displayChange_field_prof_establecimiento(row, status);
	displayChange_field_secuencial(row, status);
	displayChange_field_prof_tipo_entrega(row, status);
	displayChange_field_prof_secuencial(row, status);
	displayChange_field_prof_numero(row, status);
	displayChange_field_prof_code_sale_invoice(row, status);
	displayChange_field_prof_code_order(row, status);
	displayChange_field_prof_ruc(row, status);
	displayChange_field_prof_nombre(row, status);
	displayChange_field_prof_email(row, status);
	displayChange_field_prof_direccion(row, status);
	displayChange_field_prof_descripcion(row, status);
	displayChange_field_prof_cliente(row, status);
	displayChange_field_lugar_envio(row, status);
	displayChange_field_detalles(row, status);
	displayChange_field_prof_subtotal(row, status);
	displayChange_field_prof_subtotal_iva(row, status);
	displayChange_field_prof_subtotal_cero(row, status);
	displayChange_field_prof_subtotal_no_objeto(row, status);
	displayChange_field_prof_subtotal_excento(row, status);
	displayChange_field_prof_total_descuento(row, status);
	displayChange_field_prof_valor_ice(row, status);
	displayChange_field_prof_valor_iva(row, status);
	displayChange_field_prof_valor_irbpnr(row, status);
	displayChange_field_prof_propina(row, status);
	displayChange_field_prof_total(row, status);
	displayChange_field_prof_estado(row, status);
	displayChange_field_prof_usuario(row, status);
}

function displayChange_field(field, row, status) {
	if ("titulo" == field) {
		displayChange_field_titulo(row, status);
	}
	if ("prof_fecha" == field) {
		displayChange_field_prof_fecha(row, status);
	}
	if ("prof_establecimiento" == field) {
		displayChange_field_prof_establecimiento(row, status);
	}
	if ("secuencial" == field) {
		displayChange_field_secuencial(row, status);
	}
	if ("prof_tipo_entrega" == field) {
		displayChange_field_prof_tipo_entrega(row, status);
	}
	if ("prof_secuencial" == field) {
		displayChange_field_prof_secuencial(row, status);
	}
	if ("prof_numero" == field) {
		displayChange_field_prof_numero(row, status);
	}
	if ("prof_code_sale_invoice" == field) {
		displayChange_field_prof_code_sale_invoice(row, status);
	}
	if ("prof_code_order" == field) {
		displayChange_field_prof_code_order(row, status);
	}
	if ("prof_ruc" == field) {
		displayChange_field_prof_ruc(row, status);
	}
	if ("prof_nombre" == field) {
		displayChange_field_prof_nombre(row, status);
	}
	if ("prof_email" == field) {
		displayChange_field_prof_email(row, status);
	}
	if ("prof_direccion" == field) {
		displayChange_field_prof_direccion(row, status);
	}
	if ("prof_descripcion" == field) {
		displayChange_field_prof_descripcion(row, status);
	}
	if ("prof_cliente" == field) {
		displayChange_field_prof_cliente(row, status);
	}
	if ("lugar_envio" == field) {
		displayChange_field_lugar_envio(row, status);
	}
	if ("detalles" == field) {
		displayChange_field_detalles(row, status);
	}
	if ("prof_subtotal" == field) {
		displayChange_field_prof_subtotal(row, status);
	}
	if ("prof_subtotal_iva" == field) {
		displayChange_field_prof_subtotal_iva(row, status);
	}
	if ("prof_subtotal_cero" == field) {
		displayChange_field_prof_subtotal_cero(row, status);
	}
	if ("prof_subtotal_no_objeto" == field) {
		displayChange_field_prof_subtotal_no_objeto(row, status);
	}
	if ("prof_subtotal_excento" == field) {
		displayChange_field_prof_subtotal_excento(row, status);
	}
	if ("prof_total_descuento" == field) {
		displayChange_field_prof_total_descuento(row, status);
	}
	if ("prof_valor_ice" == field) {
		displayChange_field_prof_valor_ice(row, status);
	}
	if ("prof_valor_iva" == field) {
		displayChange_field_prof_valor_iva(row, status);
	}
	if ("prof_valor_irbpnr" == field) {
		displayChange_field_prof_valor_irbpnr(row, status);
	}
	if ("prof_propina" == field) {
		displayChange_field_prof_propina(row, status);
	}
	if ("prof_total" == field) {
		displayChange_field_prof_total(row, status);
	}
	if ("prof_estado" == field) {
		displayChange_field_prof_estado(row, status);
	}
	if ("prof_usuario" == field) {
		displayChange_field_prof_usuario(row, status);
	}
}

function displayChange_field_titulo(row, status) {
    var fieldId;
}

function displayChange_field_prof_fecha(row, status) {
    var fieldId;
}

function displayChange_field_prof_establecimiento(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_prof_establecimiento__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_prof_establecimiento" + row).select2("destroy");
		}
		scJQSelect2Add(row, "prof_establecimiento");
	}
}

function displayChange_field_secuencial(row, status) {
    var fieldId;
}

function displayChange_field_prof_tipo_entrega(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_prof_tipo_entrega__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_prof_tipo_entrega" + row).select2("destroy");
		}
		scJQSelect2Add(row, "prof_tipo_entrega");
	}
}

function displayChange_field_prof_secuencial(row, status) {
    var fieldId;
}

function displayChange_field_prof_numero(row, status) {
    var fieldId;
}

function displayChange_field_prof_code_sale_invoice(row, status) {
    var fieldId;
}

function displayChange_field_prof_code_order(row, status) {
    var fieldId;
}

function displayChange_field_prof_ruc(row, status) {
    var fieldId;
}

function displayChange_field_prof_nombre(row, status) {
    var fieldId;
}

function displayChange_field_prof_email(row, status) {
    var fieldId;
}

function displayChange_field_prof_direccion(row, status) {
    var fieldId;
}

function displayChange_field_prof_descripcion(row, status) {
    var fieldId;
}

function displayChange_field_prof_cliente(row, status) {
    var fieldId;
}

function displayChange_field_lugar_envio(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_del_direccion_entrega_pedido")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_del_direccion_entrega_pedido")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_detalles(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_del_detalle_pedido")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_del_detalle_pedido")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_prof_subtotal(row, status) {
    var fieldId;
}

function displayChange_field_prof_subtotal_iva(row, status) {
    var fieldId;
}

function displayChange_field_prof_subtotal_cero(row, status) {
    var fieldId;
}

function displayChange_field_prof_subtotal_no_objeto(row, status) {
    var fieldId;
}

function displayChange_field_prof_subtotal_excento(row, status) {
    var fieldId;
}

function displayChange_field_prof_total_descuento(row, status) {
    var fieldId;
}

function displayChange_field_prof_valor_ice(row, status) {
    var fieldId;
}

function displayChange_field_prof_valor_iva(row, status) {
    var fieldId;
}

function displayChange_field_prof_valor_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_prof_propina(row, status) {
    var fieldId;
}

function displayChange_field_prof_total(row, status) {
    var fieldId;
}

function displayChange_field_prof_estado(row, status) {
    var fieldId;
}

function displayChange_field_prof_usuario(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_prof_establecimiento("all", "on");
	displayChange_field_prof_tipo_entrega("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_pedido_espera_pago_form" + pageNo).hide();
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
  $("#id_sc_field_prof_fecha" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_prof_fecha" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_del_pedido_espera_pago_validate_prof_fecha(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['prof_fecha']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_pedido_espera_pago')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "prof_establecimiento" == specificField) {
    scJQSelect2Add_prof_establecimiento(seqRow);
  }
  if (null == specificField || "prof_tipo_entrega" == specificField) {
    scJQSelect2Add_prof_tipo_entrega(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_prof_establecimiento(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_prof_establecimiento_obj" : "#id_sc_field_prof_establecimiento" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_prof_establecimiento_obj',
      dropdownCssClass: 'css_prof_establecimiento_obj',
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

function scJQSelect2Add_prof_tipo_entrega(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_prof_tipo_entrega_obj" : "#id_sc_field_prof_tipo_entrega" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_prof_tipo_entrega_obj',
      dropdownCssClass: 'css_prof_tipo_entrega_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_prof_establecimiento) { displayChange_field_prof_establecimiento(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_prof_tipo_entrega) { displayChange_field_prof_tipo_entrega(iLine, "on"); } }, 150);
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


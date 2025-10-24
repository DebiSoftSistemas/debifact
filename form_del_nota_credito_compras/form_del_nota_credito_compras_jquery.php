
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
  scEventControl_data["nc_fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_serie" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_secuencial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_autorizacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_iddocmod" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo_doc_sustento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["serie_sustento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["secuencial_sustento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fecha_sustento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_cod_docmod" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_serie_docmod" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_secuencial_docmod" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_fecha_emison_docmod" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_proveedor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_ruc_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_nombre_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_direccion_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_email_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_motivo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["detalle" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_subtotal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_subtotal_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_subtotal_cero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_subtotal_no_objeto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_subtotal_excento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_total_descuento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_valor_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_valor_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_valor_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nc_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_fecha" + iSeqRow] && scEventControl_data["nc_fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_fecha" + iSeqRow] && scEventControl_data["nc_fecha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_serie" + iSeqRow] && scEventControl_data["nc_serie" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_serie" + iSeqRow] && scEventControl_data["nc_serie" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_secuencial" + iSeqRow] && scEventControl_data["nc_secuencial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_secuencial" + iSeqRow] && scEventControl_data["nc_secuencial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_autorizacion" + iSeqRow] && scEventControl_data["nc_autorizacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_autorizacion" + iSeqRow] && scEventControl_data["nc_autorizacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_iddocmod" + iSeqRow] && scEventControl_data["nc_iddocmod" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_iddocmod" + iSeqRow] && scEventControl_data["nc_iddocmod" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo_doc_sustento" + iSeqRow] && scEventControl_data["tipo_doc_sustento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo_doc_sustento" + iSeqRow] && scEventControl_data["tipo_doc_sustento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["serie_sustento" + iSeqRow] && scEventControl_data["serie_sustento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["serie_sustento" + iSeqRow] && scEventControl_data["serie_sustento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["secuencial_sustento" + iSeqRow] && scEventControl_data["secuencial_sustento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["secuencial_sustento" + iSeqRow] && scEventControl_data["secuencial_sustento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fecha_sustento" + iSeqRow] && scEventControl_data["fecha_sustento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fecha_sustento" + iSeqRow] && scEventControl_data["fecha_sustento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_cod_docmod" + iSeqRow] && scEventControl_data["nc_cod_docmod" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_cod_docmod" + iSeqRow] && scEventControl_data["nc_cod_docmod" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_serie_docmod" + iSeqRow] && scEventControl_data["nc_serie_docmod" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_serie_docmod" + iSeqRow] && scEventControl_data["nc_serie_docmod" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_secuencial_docmod" + iSeqRow] && scEventControl_data["nc_secuencial_docmod" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_secuencial_docmod" + iSeqRow] && scEventControl_data["nc_secuencial_docmod" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_fecha_emison_docmod" + iSeqRow] && scEventControl_data["nc_fecha_emison_docmod" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_fecha_emison_docmod" + iSeqRow] && scEventControl_data["nc_fecha_emison_docmod" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_proveedor" + iSeqRow] && scEventControl_data["nc_proveedor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_proveedor" + iSeqRow] && scEventControl_data["nc_proveedor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_ruc_cliente" + iSeqRow] && scEventControl_data["fac_ruc_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_ruc_cliente" + iSeqRow] && scEventControl_data["fac_ruc_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_nombre_cliente" + iSeqRow] && scEventControl_data["fac_nombre_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_nombre_cliente" + iSeqRow] && scEventControl_data["fac_nombre_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_direccion_cliente" + iSeqRow] && scEventControl_data["fac_direccion_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_direccion_cliente" + iSeqRow] && scEventControl_data["fac_direccion_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_email_cliente" + iSeqRow] && scEventControl_data["fac_email_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_email_cliente" + iSeqRow] && scEventControl_data["fac_email_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_motivo" + iSeqRow] && scEventControl_data["nc_motivo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_motivo" + iSeqRow] && scEventControl_data["nc_motivo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["detalle" + iSeqRow] && scEventControl_data["detalle" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["detalle" + iSeqRow] && scEventControl_data["detalle" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_subtotal" + iSeqRow] && scEventControl_data["nc_subtotal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_subtotal" + iSeqRow] && scEventControl_data["nc_subtotal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_subtotal_iva" + iSeqRow] && scEventControl_data["nc_subtotal_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_subtotal_iva" + iSeqRow] && scEventControl_data["nc_subtotal_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_subtotal_cero" + iSeqRow] && scEventControl_data["nc_subtotal_cero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_subtotal_cero" + iSeqRow] && scEventControl_data["nc_subtotal_cero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_subtotal_no_objeto" + iSeqRow] && scEventControl_data["nc_subtotal_no_objeto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_subtotal_no_objeto" + iSeqRow] && scEventControl_data["nc_subtotal_no_objeto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_subtotal_excento" + iSeqRow] && scEventControl_data["nc_subtotal_excento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_subtotal_excento" + iSeqRow] && scEventControl_data["nc_subtotal_excento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_total_descuento" + iSeqRow] && scEventControl_data["nc_total_descuento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_total_descuento" + iSeqRow] && scEventControl_data["nc_total_descuento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_valor_ice" + iSeqRow] && scEventControl_data["nc_valor_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_valor_ice" + iSeqRow] && scEventControl_data["nc_valor_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_valor_iva" + iSeqRow] && scEventControl_data["nc_valor_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_valor_iva" + iSeqRow] && scEventControl_data["nc_valor_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_valor_irbpnr" + iSeqRow] && scEventControl_data["nc_valor_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_valor_irbpnr" + iSeqRow] && scEventControl_data["nc_valor_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nc_total" + iSeqRow] && scEventControl_data["nc_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nc_total" + iSeqRow] && scEventControl_data["nc_total" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("nc_iddocmod" + iSeq == fieldName) {
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
  $('#id_sc_field_nc_numero' + iSeqRow).bind('change', function() { sc_form_del_nota_credito_compras_nc_numero_onchange(this, iSeqRow) });
  $('#id_sc_field_nc_tipo_comprobante' + iSeqRow).bind('change', function() { sc_form_del_nota_credito_compras_nc_tipo_comprobante_onchange(this, iSeqRow) });
  $('#id_sc_field_nc_empresa' + iSeqRow).bind('change', function() { sc_form_del_nota_credito_compras_nc_empresa_onchange(this, iSeqRow) });
  $('#id_sc_field_nc_proveedor' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_proveedor_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_nota_credito_compras_nc_proveedor_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_nota_credito_compras_nc_proveedor_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_iddocmod' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_iddocmod_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_nota_credito_compras_nc_iddocmod_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_nota_credito_compras_nc_iddocmod_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_cod_docmod' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_cod_docmod_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_nota_credito_compras_nc_cod_docmod_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_nota_credito_compras_nc_cod_docmod_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_serie_docmod' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_serie_docmod_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_nota_credito_compras_nc_serie_docmod_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_nota_credito_compras_nc_serie_docmod_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_secuencial_docmod' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_secuencial_docmod_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_nota_credito_compras_nc_secuencial_docmod_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_nota_credito_compras_nc_secuencial_docmod_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_fecha_emison_docmod' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_fecha_emison_docmod_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_del_nota_credito_compras_nc_fecha_emison_docmod_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_del_nota_credito_compras_nc_fecha_emison_docmod_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_serie' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_serie_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_del_nota_credito_compras_nc_serie_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_nota_credito_compras_nc_serie_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_secuencial' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_secuencial_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_nota_credito_compras_nc_secuencial_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_nota_credito_compras_nc_secuencial_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_fecha' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_fecha_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_del_nota_credito_compras_nc_fecha_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_nota_credito_compras_nc_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_motivo' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_motivo_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_del_nota_credito_compras_nc_motivo_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_nota_credito_compras_nc_motivo_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_subtotal' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_subtotal_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_nota_credito_compras_nc_subtotal_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_nota_credito_compras_nc_subtotal_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_subtotal_iva' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_subtotal_iva_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_nota_credito_compras_nc_subtotal_iva_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_nota_credito_compras_nc_subtotal_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_subtotal_cero' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_subtotal_cero_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_nota_credito_compras_nc_subtotal_cero_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_nota_credito_compras_nc_subtotal_cero_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_subtotal_no_objeto' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_subtotal_no_objeto_onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_del_nota_credito_compras_nc_subtotal_no_objeto_onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_del_nota_credito_compras_nc_subtotal_no_objeto_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_subtotal_excento' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_subtotal_excento_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_del_nota_credito_compras_nc_subtotal_excento_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_nota_credito_compras_nc_subtotal_excento_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_total_descuento' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_total_descuento_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_del_nota_credito_compras_nc_total_descuento_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_nota_credito_compras_nc_total_descuento_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_valor_ice' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_valor_ice_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_nota_credito_compras_nc_valor_ice_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_nota_credito_compras_nc_valor_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_valor_iva' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_valor_iva_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_nota_credito_compras_nc_valor_iva_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_nota_credito_compras_nc_valor_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_valor_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_valor_irbpnr_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_nota_credito_compras_nc_valor_irbpnr_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_nota_credito_compras_nc_valor_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_total' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_total_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_del_nota_credito_compras_nc_total_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_nota_credito_compras_nc_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_estado' + iSeqRow).bind('change', function() { sc_form_del_nota_credito_compras_nc_estado_onchange(this, iSeqRow) });
  $('#id_sc_field_nc_estado_sri' + iSeqRow).bind('change', function() { sc_form_del_nota_credito_compras_nc_estado_sri_onchange(this, iSeqRow) });
  $('#id_sc_field_nc_autorizacion' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_nc_autorizacion_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_nota_credito_compras_nc_autorizacion_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_nota_credito_compras_nc_autorizacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_nc_fecha_autorizacion' + iSeqRow).bind('change', function() { sc_form_del_nota_credito_compras_nc_fecha_autorizacion_onchange(this, iSeqRow) });
  $('#id_sc_field_nc_usuario' + iSeqRow).bind('change', function() { sc_form_del_nota_credito_compras_nc_usuario_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_ruc_cliente' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_fac_ruc_cliente_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_nota_credito_compras_fac_ruc_cliente_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_nota_credito_compras_fac_ruc_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_nombre_cliente' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_fac_nombre_cliente_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_del_nota_credito_compras_fac_nombre_cliente_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_nota_credito_compras_fac_nombre_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_email_cliente' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_fac_email_cliente_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_nota_credito_compras_fac_email_cliente_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_nota_credito_compras_fac_email_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_titulo' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_titulo_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_del_nota_credito_compras_titulo_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_del_nota_credito_compras_titulo_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_doc_sustento' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_tipo_doc_sustento_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_nota_credito_compras_tipo_doc_sustento_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_nota_credito_compras_tipo_doc_sustento_onfocus(this, iSeqRow) });
  $('#id_sc_field_serie_sustento' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_serie_sustento_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_nota_credito_compras_serie_sustento_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_nota_credito_compras_serie_sustento_onfocus(this, iSeqRow) });
  $('#id_sc_field_secuencial_sustento' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_secuencial_sustento_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_del_nota_credito_compras_secuencial_sustento_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_nota_credito_compras_secuencial_sustento_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha_sustento' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_fecha_sustento_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_nota_credito_compras_fecha_sustento_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_nota_credito_compras_fecha_sustento_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_direccion_cliente' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_fac_direccion_cliente_onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_del_nota_credito_compras_fac_direccion_cliente_onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_del_nota_credito_compras_fac_direccion_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_detalle' + iSeqRow).bind('blur', function() { sc_form_del_nota_credito_compras_detalle_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_nota_credito_compras_detalle_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_nota_credito_compras_detalle_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_del_nota_credito_compras_nc_numero_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_tipo_comprobante_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_proveedor_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_proveedor();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_proveedor_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_proveedor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_iddocmod_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_iddocmod();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_iddocmod_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_nota_credito_compras_event_nc_iddocmod_onchange();
}

function sc_form_del_nota_credito_compras_nc_iddocmod_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_cod_docmod_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_cod_docmod();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_cod_docmod_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_cod_docmod_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_serie_docmod_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_serie_docmod();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_serie_docmod_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_serie_docmod_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_secuencial_docmod_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_secuencial_docmod();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_secuencial_docmod_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_secuencial_docmod_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_fecha_emison_docmod_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_fecha_emison_docmod();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_fecha_emison_docmod_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_fecha_emison_docmod_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_serie_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_serie();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_serie_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_serie_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_secuencial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_secuencial();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_secuencial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_secuencial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_fecha();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_fecha_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_motivo_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_motivo();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_motivo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_motivo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_subtotal_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_subtotal();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_subtotal_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_subtotal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_subtotal_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_subtotal_iva();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_subtotal_iva_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_subtotal_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_subtotal_cero_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_subtotal_cero();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_subtotal_cero_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_subtotal_cero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_subtotal_no_objeto_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_subtotal_no_objeto();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_subtotal_no_objeto_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_subtotal_no_objeto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_subtotal_excento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_subtotal_excento();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_subtotal_excento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_subtotal_excento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_total_descuento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_total_descuento();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_total_descuento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_total_descuento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_valor_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_valor_ice();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_valor_ice_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_valor_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_valor_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_valor_iva();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_valor_iva_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_valor_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_valor_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_valor_irbpnr();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_valor_irbpnr_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_valor_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_total_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_total();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_total_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_estado_sri_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_autorizacion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_nc_autorizacion();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_nc_autorizacion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_autorizacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_nc_fecha_autorizacion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_nc_usuario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_fac_ruc_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_fac_ruc_cliente();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_fac_ruc_cliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_fac_ruc_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_fac_nombre_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_fac_nombre_cliente();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_fac_nombre_cliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_fac_nombre_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_fac_email_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_fac_email_cliente();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_fac_email_cliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_fac_email_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_titulo_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_titulo();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_titulo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_titulo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_tipo_doc_sustento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_tipo_doc_sustento();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_tipo_doc_sustento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_tipo_doc_sustento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_serie_sustento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_serie_sustento();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_serie_sustento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_serie_sustento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_secuencial_sustento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_secuencial_sustento();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_secuencial_sustento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_secuencial_sustento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_fecha_sustento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_fecha_sustento();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_fecha_sustento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_fecha_sustento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_fac_direccion_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_fac_direccion_cliente();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_fac_direccion_cliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_fac_direccion_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nota_credito_compras_detalle_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nota_credito_compras_validate_detalle();
  scCssBlur(oThis);
}

function sc_form_del_nota_credito_compras_detalle_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nota_credito_compras_detalle_onfocus(oThis, iSeqRow) {
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
	displayChange_field("nc_fecha", "", status);
	displayChange_field("nc_serie", "", status);
	displayChange_field("nc_secuencial", "", status);
	displayChange_field("nc_autorizacion", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("nc_iddocmod", "", status);
	displayChange_field("tipo_doc_sustento", "", status);
	displayChange_field("serie_sustento", "", status);
	displayChange_field("secuencial_sustento", "", status);
	displayChange_field("fecha_sustento", "", status);
	displayChange_field("nc_cod_docmod", "", status);
	displayChange_field("nc_serie_docmod", "", status);
	displayChange_field("nc_secuencial_docmod", "", status);
	displayChange_field("nc_fecha_emison_docmod", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("nc_proveedor", "", status);
	displayChange_field("fac_ruc_cliente", "", status);
	displayChange_field("fac_nombre_cliente", "", status);
	displayChange_field("fac_direccion_cliente", "", status);
	displayChange_field("fac_email_cliente", "", status);
	displayChange_field("nc_motivo", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("detalle", "", status);
}

function displayChange_block_5(status) {
	displayChange_field("nc_subtotal", "", status);
	displayChange_field("nc_subtotal_iva", "", status);
	displayChange_field("nc_subtotal_cero", "", status);
	displayChange_field("nc_subtotal_no_objeto", "", status);
	displayChange_field("nc_subtotal_excento", "", status);
	displayChange_field("nc_total_descuento", "", status);
	displayChange_field("nc_valor_ice", "", status);
	displayChange_field("nc_valor_iva", "", status);
	displayChange_field("nc_valor_irbpnr", "", status);
	displayChange_field("nc_total", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_titulo(row, status);
	displayChange_field_nc_fecha(row, status);
	displayChange_field_nc_serie(row, status);
	displayChange_field_nc_secuencial(row, status);
	displayChange_field_nc_autorizacion(row, status);
	displayChange_field_nc_iddocmod(row, status);
	displayChange_field_tipo_doc_sustento(row, status);
	displayChange_field_serie_sustento(row, status);
	displayChange_field_secuencial_sustento(row, status);
	displayChange_field_fecha_sustento(row, status);
	displayChange_field_nc_cod_docmod(row, status);
	displayChange_field_nc_serie_docmod(row, status);
	displayChange_field_nc_secuencial_docmod(row, status);
	displayChange_field_nc_fecha_emison_docmod(row, status);
	displayChange_field_nc_proveedor(row, status);
	displayChange_field_fac_ruc_cliente(row, status);
	displayChange_field_fac_nombre_cliente(row, status);
	displayChange_field_fac_direccion_cliente(row, status);
	displayChange_field_fac_email_cliente(row, status);
	displayChange_field_nc_motivo(row, status);
	displayChange_field_detalle(row, status);
	displayChange_field_nc_subtotal(row, status);
	displayChange_field_nc_subtotal_iva(row, status);
	displayChange_field_nc_subtotal_cero(row, status);
	displayChange_field_nc_subtotal_no_objeto(row, status);
	displayChange_field_nc_subtotal_excento(row, status);
	displayChange_field_nc_total_descuento(row, status);
	displayChange_field_nc_valor_ice(row, status);
	displayChange_field_nc_valor_iva(row, status);
	displayChange_field_nc_valor_irbpnr(row, status);
	displayChange_field_nc_total(row, status);
}

function displayChange_field(field, row, status) {
	if ("titulo" == field) {
		displayChange_field_titulo(row, status);
	}
	if ("nc_fecha" == field) {
		displayChange_field_nc_fecha(row, status);
	}
	if ("nc_serie" == field) {
		displayChange_field_nc_serie(row, status);
	}
	if ("nc_secuencial" == field) {
		displayChange_field_nc_secuencial(row, status);
	}
	if ("nc_autorizacion" == field) {
		displayChange_field_nc_autorizacion(row, status);
	}
	if ("nc_iddocmod" == field) {
		displayChange_field_nc_iddocmod(row, status);
	}
	if ("tipo_doc_sustento" == field) {
		displayChange_field_tipo_doc_sustento(row, status);
	}
	if ("serie_sustento" == field) {
		displayChange_field_serie_sustento(row, status);
	}
	if ("secuencial_sustento" == field) {
		displayChange_field_secuencial_sustento(row, status);
	}
	if ("fecha_sustento" == field) {
		displayChange_field_fecha_sustento(row, status);
	}
	if ("nc_cod_docmod" == field) {
		displayChange_field_nc_cod_docmod(row, status);
	}
	if ("nc_serie_docmod" == field) {
		displayChange_field_nc_serie_docmod(row, status);
	}
	if ("nc_secuencial_docmod" == field) {
		displayChange_field_nc_secuencial_docmod(row, status);
	}
	if ("nc_fecha_emison_docmod" == field) {
		displayChange_field_nc_fecha_emison_docmod(row, status);
	}
	if ("nc_proveedor" == field) {
		displayChange_field_nc_proveedor(row, status);
	}
	if ("fac_ruc_cliente" == field) {
		displayChange_field_fac_ruc_cliente(row, status);
	}
	if ("fac_nombre_cliente" == field) {
		displayChange_field_fac_nombre_cliente(row, status);
	}
	if ("fac_direccion_cliente" == field) {
		displayChange_field_fac_direccion_cliente(row, status);
	}
	if ("fac_email_cliente" == field) {
		displayChange_field_fac_email_cliente(row, status);
	}
	if ("nc_motivo" == field) {
		displayChange_field_nc_motivo(row, status);
	}
	if ("detalle" == field) {
		displayChange_field_detalle(row, status);
	}
	if ("nc_subtotal" == field) {
		displayChange_field_nc_subtotal(row, status);
	}
	if ("nc_subtotal_iva" == field) {
		displayChange_field_nc_subtotal_iva(row, status);
	}
	if ("nc_subtotal_cero" == field) {
		displayChange_field_nc_subtotal_cero(row, status);
	}
	if ("nc_subtotal_no_objeto" == field) {
		displayChange_field_nc_subtotal_no_objeto(row, status);
	}
	if ("nc_subtotal_excento" == field) {
		displayChange_field_nc_subtotal_excento(row, status);
	}
	if ("nc_total_descuento" == field) {
		displayChange_field_nc_total_descuento(row, status);
	}
	if ("nc_valor_ice" == field) {
		displayChange_field_nc_valor_ice(row, status);
	}
	if ("nc_valor_iva" == field) {
		displayChange_field_nc_valor_iva(row, status);
	}
	if ("nc_valor_irbpnr" == field) {
		displayChange_field_nc_valor_irbpnr(row, status);
	}
	if ("nc_total" == field) {
		displayChange_field_nc_total(row, status);
	}
}

function displayChange_field_titulo(row, status) {
    var fieldId;
}

function displayChange_field_nc_fecha(row, status) {
    var fieldId;
}

function displayChange_field_nc_serie(row, status) {
    var fieldId;
}

function displayChange_field_nc_secuencial(row, status) {
    var fieldId;
}

function displayChange_field_nc_autorizacion(row, status) {
    var fieldId;
}

function displayChange_field_nc_iddocmod(row, status) {
    var fieldId;
}

function displayChange_field_tipo_doc_sustento(row, status) {
    var fieldId;
}

function displayChange_field_serie_sustento(row, status) {
    var fieldId;
}

function displayChange_field_secuencial_sustento(row, status) {
    var fieldId;
}

function displayChange_field_fecha_sustento(row, status) {
    var fieldId;
}

function displayChange_field_nc_cod_docmod(row, status) {
    var fieldId;
}

function displayChange_field_nc_serie_docmod(row, status) {
    var fieldId;
}

function displayChange_field_nc_secuencial_docmod(row, status) {
    var fieldId;
}

function displayChange_field_nc_fecha_emison_docmod(row, status) {
    var fieldId;
}

function displayChange_field_nc_proveedor(row, status) {
    var fieldId;
}

function displayChange_field_fac_ruc_cliente(row, status) {
    var fieldId;
}

function displayChange_field_fac_nombre_cliente(row, status) {
    var fieldId;
}

function displayChange_field_fac_direccion_cliente(row, status) {
    var fieldId;
}

function displayChange_field_fac_email_cliente(row, status) {
    var fieldId;
}

function displayChange_field_nc_motivo(row, status) {
    var fieldId;
}

function displayChange_field_detalle(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_del_detalle_nota_credito_compras")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_del_detalle_nota_credito_compras")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_nc_subtotal(row, status) {
    var fieldId;
}

function displayChange_field_nc_subtotal_iva(row, status) {
    var fieldId;
}

function displayChange_field_nc_subtotal_cero(row, status) {
    var fieldId;
}

function displayChange_field_nc_subtotal_no_objeto(row, status) {
    var fieldId;
}

function displayChange_field_nc_subtotal_excento(row, status) {
    var fieldId;
}

function displayChange_field_nc_total_descuento(row, status) {
    var fieldId;
}

function displayChange_field_nc_valor_ice(row, status) {
    var fieldId;
}

function displayChange_field_nc_valor_iva(row, status) {
    var fieldId;
}

function displayChange_field_nc_valor_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_nc_total(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_nota_credito_compras_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(37);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_nc_fecha" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_nc_fecha" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_del_nota_credito_compras_validate_nc_fecha(iSeqRow); }, 200);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['nc_fecha']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_nc_fecha_autorizacion" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_nc_fecha_autorizacion" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_del_nota_credito_compras_validate_nc_fecha_autorizacion(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['nc_fecha_autorizacion']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_nota_credito_compras')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
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


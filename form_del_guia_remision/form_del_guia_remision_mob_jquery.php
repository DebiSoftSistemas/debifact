
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
  scEventControl_data["gr_libretin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["establecimiento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["punto_emision" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["secuencial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo_libretin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ambiente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_establecimiento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_punto_emision" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_secuencial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_ambiente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_tipo_libretin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_tipo_comprobante" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_estado_sri" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_error_sri" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_fecha_autorizacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_autorizacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_clave" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_transportista" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ruc_transportista" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nombre_transportista" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["placa_transportista" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_fecha_ini_transporte" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_fecha_fin_transporte" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["gr_direccion_partida" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["destinatario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_libretin" + iSeqRow] && scEventControl_data["gr_libretin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_libretin" + iSeqRow] && scEventControl_data["gr_libretin" + iSeqRow]["change"]) {
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
  if (scEventControl_data["secuencial" + iSeqRow] && scEventControl_data["secuencial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["secuencial" + iSeqRow] && scEventControl_data["secuencial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo_libretin" + iSeqRow] && scEventControl_data["tipo_libretin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo_libretin" + iSeqRow] && scEventControl_data["tipo_libretin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ambiente" + iSeqRow] && scEventControl_data["ambiente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ambiente" + iSeqRow] && scEventControl_data["ambiente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_establecimiento" + iSeqRow] && scEventControl_data["gr_establecimiento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_establecimiento" + iSeqRow] && scEventControl_data["gr_establecimiento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_punto_emision" + iSeqRow] && scEventControl_data["gr_punto_emision" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_punto_emision" + iSeqRow] && scEventControl_data["gr_punto_emision" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_secuencial" + iSeqRow] && scEventControl_data["gr_secuencial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_secuencial" + iSeqRow] && scEventControl_data["gr_secuencial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_ambiente" + iSeqRow] && scEventControl_data["gr_ambiente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_ambiente" + iSeqRow] && scEventControl_data["gr_ambiente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_tipo_libretin" + iSeqRow] && scEventControl_data["gr_tipo_libretin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_tipo_libretin" + iSeqRow] && scEventControl_data["gr_tipo_libretin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_numero" + iSeqRow] && scEventControl_data["gr_numero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_numero" + iSeqRow] && scEventControl_data["gr_numero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_tipo_comprobante" + iSeqRow] && scEventControl_data["gr_tipo_comprobante" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_tipo_comprobante" + iSeqRow] && scEventControl_data["gr_tipo_comprobante" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_empresa" + iSeqRow] && scEventControl_data["gr_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_empresa" + iSeqRow] && scEventControl_data["gr_empresa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_fecha" + iSeqRow] && scEventControl_data["gr_fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_fecha" + iSeqRow] && scEventControl_data["gr_fecha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_usuario" + iSeqRow] && scEventControl_data["gr_usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_usuario" + iSeqRow] && scEventControl_data["gr_usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_estado" + iSeqRow] && scEventControl_data["gr_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_estado" + iSeqRow] && scEventControl_data["gr_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_estado_sri" + iSeqRow] && scEventControl_data["gr_estado_sri" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_estado_sri" + iSeqRow] && scEventControl_data["gr_estado_sri" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_error_sri" + iSeqRow] && scEventControl_data["gr_error_sri" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_error_sri" + iSeqRow] && scEventControl_data["gr_error_sri" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_fecha_autorizacion" + iSeqRow] && scEventControl_data["gr_fecha_autorizacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_fecha_autorizacion" + iSeqRow] && scEventControl_data["gr_fecha_autorizacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_autorizacion" + iSeqRow] && scEventControl_data["gr_autorizacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_autorizacion" + iSeqRow] && scEventControl_data["gr_autorizacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_clave" + iSeqRow] && scEventControl_data["gr_clave" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_clave" + iSeqRow] && scEventControl_data["gr_clave" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_transportista" + iSeqRow] && scEventControl_data["gr_transportista" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_transportista" + iSeqRow] && scEventControl_data["gr_transportista" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ruc_transportista" + iSeqRow] && scEventControl_data["ruc_transportista" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ruc_transportista" + iSeqRow] && scEventControl_data["ruc_transportista" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombre_transportista" + iSeqRow] && scEventControl_data["nombre_transportista" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombre_transportista" + iSeqRow] && scEventControl_data["nombre_transportista" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["placa_transportista" + iSeqRow] && scEventControl_data["placa_transportista" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["placa_transportista" + iSeqRow] && scEventControl_data["placa_transportista" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_fecha_ini_transporte" + iSeqRow] && scEventControl_data["gr_fecha_ini_transporte" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_fecha_ini_transporte" + iSeqRow] && scEventControl_data["gr_fecha_ini_transporte" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_fecha_fin_transporte" + iSeqRow] && scEventControl_data["gr_fecha_fin_transporte" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_fecha_fin_transporte" + iSeqRow] && scEventControl_data["gr_fecha_fin_transporte" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["gr_direccion_partida" + iSeqRow] && scEventControl_data["gr_direccion_partida" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["gr_direccion_partida" + iSeqRow] && scEventControl_data["gr_direccion_partida" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["destinatario" + iSeqRow] && scEventControl_data["destinatario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["destinatario" + iSeqRow] && scEventControl_data["destinatario" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("gr_libretin" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("gr_fecha_ini_transporte" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("gr_fecha_fin_transporte" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("gr_direccion_partida" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("gr_libretin" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("gr_transportista" + iSeq == fieldName) {
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
  $('#id_sc_field_gr_numero' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_numero_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_guia_remision_gr_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_tipo_comprobante' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_tipo_comprobante_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_guia_remision_gr_tipo_comprobante_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_empresa' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_empresa_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_guia_remision_gr_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_establecimiento' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_establecimiento_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_guia_remision_gr_establecimiento_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_punto_emision' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_punto_emision_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_guia_remision_gr_punto_emision_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_secuencial' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_secuencial_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_guia_remision_gr_secuencial_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_transportista' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_transportista_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_guia_remision_gr_transportista_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_guia_remision_gr_transportista_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_fecha' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_fecha_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_guia_remision_gr_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_ambiente' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_ambiente_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_guia_remision_gr_ambiente_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_libretin' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_libretin_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_guia_remision_gr_libretin_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_guia_remision_gr_libretin_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_tipo_libretin' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_tipo_libretin_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_guia_remision_gr_tipo_libretin_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_fecha_ini_transporte' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_fecha_ini_transporte_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_del_guia_remision_gr_fecha_ini_transporte_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_del_guia_remision_gr_fecha_ini_transporte_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_fecha_fin_transporte' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_fecha_fin_transporte_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_del_guia_remision_gr_fecha_fin_transporte_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_del_guia_remision_gr_fecha_fin_transporte_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_direccion_partida' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_direccion_partida_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_guia_remision_gr_direccion_partida_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_guia_remision_gr_direccion_partida_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_usuario' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_usuario_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_guia_remision_gr_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_estado' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_estado_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_guia_remision_gr_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_estado_sri' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_estado_sri_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_guia_remision_gr_estado_sri_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_error_sri' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_error_sri_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_guia_remision_gr_error_sri_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_fecha_autorizacion' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_fecha_autorizacion_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_del_guia_remision_gr_fecha_autorizacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_autorizacion' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_autorizacion_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_guia_remision_gr_autorizacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_gr_clave' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_gr_clave_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_guia_remision_gr_clave_onfocus(this, iSeqRow) });
  $('#id_sc_field_destinatario' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_destinatario_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_guia_remision_destinatario_onfocus(this, iSeqRow) });
  $('#id_sc_field_titulo' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_titulo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_del_guia_remision_titulo_onfocus(this, iSeqRow) });
  $('#id_sc_field_ruc_transportista' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_ruc_transportista_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_guia_remision_ruc_transportista_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombre_transportista' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_nombre_transportista_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_guia_remision_nombre_transportista_onfocus(this, iSeqRow) });
  $('#id_sc_field_placa_transportista' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_placa_transportista_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_guia_remision_placa_transportista_onfocus(this, iSeqRow) });
  $('#id_sc_field_establecimiento' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_establecimiento_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_guia_remision_establecimiento_onfocus(this, iSeqRow) });
  $('#id_sc_field_punto_emision' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_punto_emision_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_guia_remision_punto_emision_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_libretin' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_tipo_libretin_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_guia_remision_tipo_libretin_onfocus(this, iSeqRow) });
  $('#id_sc_field_secuencial' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_secuencial_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_guia_remision_secuencial_onfocus(this, iSeqRow) });
  $('#id_sc_field_ambiente' + iSeqRow).bind('blur', function() { sc_form_del_guia_remision_ambiente_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_guia_remision_ambiente_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_del_guia_remision_gr_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_numero();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_tipo_comprobante_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_tipo_comprobante();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_tipo_comprobante_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_empresa();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_establecimiento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_establecimiento();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_establecimiento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_punto_emision_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_punto_emision();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_punto_emision_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_secuencial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_secuencial();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_secuencial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_transportista_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_transportista();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_transportista_onchange(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_event_gr_transportista_onchange();
}

function sc_form_del_guia_remision_gr_transportista_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_fecha();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_ambiente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_ambiente();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_ambiente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_libretin_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_libretin();
  scCssBlur(oThis);
  do_ajax_form_del_guia_remision_mob_event_gr_libretin_onblur();
}

function sc_form_del_guia_remision_gr_libretin_onchange(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_event_gr_libretin_onchange();
}

function sc_form_del_guia_remision_gr_libretin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_tipo_libretin_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_tipo_libretin();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_tipo_libretin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_fecha_ini_transporte_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_fecha_ini_transporte();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_fecha_ini_transporte_onchange(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_event_gr_fecha_ini_transporte_onchange();
}

function sc_form_del_guia_remision_gr_fecha_ini_transporte_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_fecha_fin_transporte_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_fecha_fin_transporte();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_fecha_fin_transporte_onchange(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_event_gr_fecha_fin_transporte_onchange();
}

function sc_form_del_guia_remision_gr_fecha_fin_transporte_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_direccion_partida_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_direccion_partida();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_direccion_partida_onchange(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_event_gr_direccion_partida_onchange();
}

function sc_form_del_guia_remision_gr_direccion_partida_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_usuario();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_estado();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_estado_sri_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_estado_sri();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_estado_sri_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_error_sri_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_error_sri();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_error_sri_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_fecha_autorizacion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_fecha_autorizacion();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_fecha_autorizacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_autorizacion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_autorizacion();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_autorizacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_gr_clave_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_gr_clave();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_gr_clave_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_destinatario_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_destinatario();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_destinatario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_titulo_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_titulo();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_titulo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_ruc_transportista_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_ruc_transportista();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_ruc_transportista_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_nombre_transportista_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_nombre_transportista();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_nombre_transportista_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_placa_transportista_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_placa_transportista();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_placa_transportista_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_establecimiento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_establecimiento();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_establecimiento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_punto_emision_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_punto_emision();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_punto_emision_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_tipo_libretin_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_tipo_libretin();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_tipo_libretin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_secuencial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_secuencial();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_secuencial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_guia_remision_ambiente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_guia_remision_mob_validate_ambiente();
  scCssBlur(oThis);
}

function sc_form_del_guia_remision_ambiente_onfocus(oThis, iSeqRow) {
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
	displayChange_field("titulo", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("gr_libretin", "", status);
	displayChange_field("establecimiento", "", status);
	displayChange_field("punto_emision", "", status);
	displayChange_field("secuencial", "", status);
	displayChange_field("tipo_libretin", "", status);
	displayChange_field("ambiente", "", status);
	displayChange_field("gr_establecimiento", "", status);
	displayChange_field("gr_punto_emision", "", status);
	displayChange_field("gr_secuencial", "", status);
	displayChange_field("gr_ambiente", "", status);
	displayChange_field("gr_tipo_libretin", "", status);
	displayChange_field("gr_numero", "", status);
	displayChange_field("gr_tipo_comprobante", "", status);
	displayChange_field("gr_empresa", "", status);
	displayChange_field("gr_fecha", "", status);
	displayChange_field("gr_usuario", "", status);
	displayChange_field("gr_estado", "", status);
	displayChange_field("gr_estado_sri", "", status);
	displayChange_field("gr_error_sri", "", status);
	displayChange_field("gr_fecha_autorizacion", "", status);
	displayChange_field("gr_autorizacion", "", status);
	displayChange_field("gr_clave", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("gr_transportista", "", status);
	displayChange_field("ruc_transportista", "", status);
	displayChange_field("nombre_transportista", "", status);
	displayChange_field("placa_transportista", "", status);
	displayChange_field("gr_fecha_ini_transporte", "", status);
	displayChange_field("gr_fecha_fin_transporte", "", status);
	displayChange_field("gr_direccion_partida", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("destinatario", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_titulo(row, status);
	displayChange_field_gr_libretin(row, status);
	displayChange_field_establecimiento(row, status);
	displayChange_field_punto_emision(row, status);
	displayChange_field_secuencial(row, status);
	displayChange_field_tipo_libretin(row, status);
	displayChange_field_ambiente(row, status);
	displayChange_field_gr_establecimiento(row, status);
	displayChange_field_gr_punto_emision(row, status);
	displayChange_field_gr_secuencial(row, status);
	displayChange_field_gr_ambiente(row, status);
	displayChange_field_gr_tipo_libretin(row, status);
	displayChange_field_gr_numero(row, status);
	displayChange_field_gr_tipo_comprobante(row, status);
	displayChange_field_gr_empresa(row, status);
	displayChange_field_gr_fecha(row, status);
	displayChange_field_gr_usuario(row, status);
	displayChange_field_gr_estado(row, status);
	displayChange_field_gr_estado_sri(row, status);
	displayChange_field_gr_error_sri(row, status);
	displayChange_field_gr_fecha_autorizacion(row, status);
	displayChange_field_gr_autorizacion(row, status);
	displayChange_field_gr_clave(row, status);
	displayChange_field_gr_transportista(row, status);
	displayChange_field_ruc_transportista(row, status);
	displayChange_field_nombre_transportista(row, status);
	displayChange_field_placa_transportista(row, status);
	displayChange_field_gr_fecha_ini_transporte(row, status);
	displayChange_field_gr_fecha_fin_transporte(row, status);
	displayChange_field_gr_direccion_partida(row, status);
	displayChange_field_destinatario(row, status);
}

function displayChange_field(field, row, status) {
	if ("titulo" == field) {
		displayChange_field_titulo(row, status);
	}
	if ("gr_libretin" == field) {
		displayChange_field_gr_libretin(row, status);
	}
	if ("establecimiento" == field) {
		displayChange_field_establecimiento(row, status);
	}
	if ("punto_emision" == field) {
		displayChange_field_punto_emision(row, status);
	}
	if ("secuencial" == field) {
		displayChange_field_secuencial(row, status);
	}
	if ("tipo_libretin" == field) {
		displayChange_field_tipo_libretin(row, status);
	}
	if ("ambiente" == field) {
		displayChange_field_ambiente(row, status);
	}
	if ("gr_establecimiento" == field) {
		displayChange_field_gr_establecimiento(row, status);
	}
	if ("gr_punto_emision" == field) {
		displayChange_field_gr_punto_emision(row, status);
	}
	if ("gr_secuencial" == field) {
		displayChange_field_gr_secuencial(row, status);
	}
	if ("gr_ambiente" == field) {
		displayChange_field_gr_ambiente(row, status);
	}
	if ("gr_tipo_libretin" == field) {
		displayChange_field_gr_tipo_libretin(row, status);
	}
	if ("gr_numero" == field) {
		displayChange_field_gr_numero(row, status);
	}
	if ("gr_tipo_comprobante" == field) {
		displayChange_field_gr_tipo_comprobante(row, status);
	}
	if ("gr_empresa" == field) {
		displayChange_field_gr_empresa(row, status);
	}
	if ("gr_fecha" == field) {
		displayChange_field_gr_fecha(row, status);
	}
	if ("gr_usuario" == field) {
		displayChange_field_gr_usuario(row, status);
	}
	if ("gr_estado" == field) {
		displayChange_field_gr_estado(row, status);
	}
	if ("gr_estado_sri" == field) {
		displayChange_field_gr_estado_sri(row, status);
	}
	if ("gr_error_sri" == field) {
		displayChange_field_gr_error_sri(row, status);
	}
	if ("gr_fecha_autorizacion" == field) {
		displayChange_field_gr_fecha_autorizacion(row, status);
	}
	if ("gr_autorizacion" == field) {
		displayChange_field_gr_autorizacion(row, status);
	}
	if ("gr_clave" == field) {
		displayChange_field_gr_clave(row, status);
	}
	if ("gr_transportista" == field) {
		displayChange_field_gr_transportista(row, status);
	}
	if ("ruc_transportista" == field) {
		displayChange_field_ruc_transportista(row, status);
	}
	if ("nombre_transportista" == field) {
		displayChange_field_nombre_transportista(row, status);
	}
	if ("placa_transportista" == field) {
		displayChange_field_placa_transportista(row, status);
	}
	if ("gr_fecha_ini_transporte" == field) {
		displayChange_field_gr_fecha_ini_transporte(row, status);
	}
	if ("gr_fecha_fin_transporte" == field) {
		displayChange_field_gr_fecha_fin_transporte(row, status);
	}
	if ("gr_direccion_partida" == field) {
		displayChange_field_gr_direccion_partida(row, status);
	}
	if ("destinatario" == field) {
		displayChange_field_destinatario(row, status);
	}
}

function displayChange_field_titulo(row, status) {
    var fieldId;
}

function displayChange_field_gr_libretin(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_gr_libretin__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_gr_libretin" + row).select2("destroy");
		}
		scJQSelect2Add(row, "gr_libretin");
	}
}

function displayChange_field_establecimiento(row, status) {
    var fieldId;
}

function displayChange_field_punto_emision(row, status) {
    var fieldId;
}

function displayChange_field_secuencial(row, status) {
    var fieldId;
}

function displayChange_field_tipo_libretin(row, status) {
    var fieldId;
}

function displayChange_field_ambiente(row, status) {
    var fieldId;
}

function displayChange_field_gr_establecimiento(row, status) {
    var fieldId;
}

function displayChange_field_gr_punto_emision(row, status) {
    var fieldId;
}

function displayChange_field_gr_secuencial(row, status) {
    var fieldId;
}

function displayChange_field_gr_ambiente(row, status) {
    var fieldId;
}

function displayChange_field_gr_tipo_libretin(row, status) {
    var fieldId;
}

function displayChange_field_gr_numero(row, status) {
    var fieldId;
}

function displayChange_field_gr_tipo_comprobante(row, status) {
    var fieldId;
}

function displayChange_field_gr_empresa(row, status) {
    var fieldId;
}

function displayChange_field_gr_fecha(row, status) {
    var fieldId;
}

function displayChange_field_gr_usuario(row, status) {
    var fieldId;
}

function displayChange_field_gr_estado(row, status) {
    var fieldId;
}

function displayChange_field_gr_estado_sri(row, status) {
    var fieldId;
}

function displayChange_field_gr_error_sri(row, status) {
    var fieldId;
}

function displayChange_field_gr_fecha_autorizacion(row, status) {
    var fieldId;
}

function displayChange_field_gr_autorizacion(row, status) {
    var fieldId;
}

function displayChange_field_gr_clave(row, status) {
    var fieldId;
}

function displayChange_field_gr_transportista(row, status) {
    var fieldId;
}

function displayChange_field_ruc_transportista(row, status) {
    var fieldId;
}

function displayChange_field_nombre_transportista(row, status) {
    var fieldId;
}

function displayChange_field_placa_transportista(row, status) {
    var fieldId;
}

function displayChange_field_gr_fecha_ini_transporte(row, status) {
    var fieldId;
}

function displayChange_field_gr_fecha_fin_transporte(row, status) {
    var fieldId;
}

function displayChange_field_gr_direccion_partida(row, status) {
    var fieldId;
}

function displayChange_field_destinatario(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_del_destinatario_guia")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_del_destinatario_guia")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_gr_libretin("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_guia_remision_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(34);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_gr_fecha" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_gr_fecha" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_del_guia_remision_mob_validate_gr_fecha(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['gr_fecha']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_gr_fecha_autorizacion" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_gr_fecha_autorizacion" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_del_guia_remision_mob_validate_gr_fecha_autorizacion(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['gr_fecha_autorizacion']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_gr_fecha_ini_transporte" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_gr_fecha_ini_transporte" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_del_guia_remision_mob_validate_gr_fecha_ini_transporte(iSeqRow); }, 200);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['gr_fecha_ini_transporte']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_gr_fecha_fin_transporte" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_gr_fecha_fin_transporte" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_del_guia_remision_mob_validate_gr_fecha_fin_transporte(iSeqRow); }, 200);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['gr_fecha_fin_transporte']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_guia_remision_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "gr_libretin" == specificField) {
    scJQSelect2Add_gr_libretin(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_gr_libretin(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_gr_libretin_obj" : "#id_sc_field_gr_libretin" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_gr_libretin_obj',
      dropdownCssClass: 'css_gr_libretin_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_gr_libretin) { displayChange_field_gr_libretin(iLine, "on"); } }, 150);
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

var scBtnGrpStatus = {};
function scBtnGrpShow(sGroup) {
  if (typeof(scBtnGrpShowMobile) === typeof(function(){})) { return scBtnGrpShowMobile(sGroup); };
  $('#sc_btgp_btn_' + sGroup).addClass('selected');
  var btnPos = $('#sc_btgp_btn_' + sGroup).offset();
  scBtnGrpStatus[sGroup] = 'open';
  $('#sc_btgp_btn_' + sGroup).mouseout(function() {
    scBtnGrpStatus[sGroup] = '';
    setTimeout(function() {
      scBtnGrpHide(sGroup, false);
    }, 1000);
  }).mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  });
  $('#sc_btgp_div_' + sGroup + ' span a').click(function() {
    scBtnGrpStatus[sGroup] = 'out';
    scBtnGrpHide(sGroup, false);
  });
  $('#sc_btgp_div_' + sGroup).css({
    'left': btnPos.left
  })
  .mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  })
  .mouseleave(function() {
    scBtnGrpStatus[sGroup] = 'out';
    setTimeout(function() {
      scBtnGrpHide(sGroup, false);
    }, 1000);
  })
  .show('fast');
}
function scBtnGrpHide(sGroup, bForce) {
  if (bForce || 'over' != scBtnGrpStatus[sGroup]) {
    $('#sc_btgp_div_' + sGroup).hide('fast');
    $('#sc_btgp_btn_' + sGroup).addClass('selected');
  }
}

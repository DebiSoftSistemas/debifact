
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

  scJQCheckboxControl_general('')
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
  scEventControl_data["pro_codigo_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_codigo_aux_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_descripcion_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_precio_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_por_iva_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_total_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_base_ice_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_por_ice_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_base_irbpnr_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_por_irbpnr_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_familia_producto_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_grupo_compras_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_grupo_ventas_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_categoria_producto_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["pro_codigo_" + iSeqRow] && scEventControl_data["pro_codigo_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_codigo_" + iSeqRow] && scEventControl_data["pro_codigo_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_codigo_aux_" + iSeqRow] && scEventControl_data["pro_codigo_aux_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_codigo_aux_" + iSeqRow] && scEventControl_data["pro_codigo_aux_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_descripcion_" + iSeqRow] && scEventControl_data["pro_descripcion_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_descripcion_" + iSeqRow] && scEventControl_data["pro_descripcion_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_precio_" + iSeqRow] && scEventControl_data["pro_precio_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_precio_" + iSeqRow] && scEventControl_data["pro_precio_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_por_iva_" + iSeqRow] && scEventControl_data["pro_por_iva_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_por_iva_" + iSeqRow] && scEventControl_data["pro_por_iva_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_total_" + iSeqRow] && scEventControl_data["pro_total_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_total_" + iSeqRow] && scEventControl_data["pro_total_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_base_ice_" + iSeqRow] && scEventControl_data["pro_base_ice_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_base_ice_" + iSeqRow] && scEventControl_data["pro_base_ice_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_por_ice_" + iSeqRow] && scEventControl_data["pro_por_ice_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_por_ice_" + iSeqRow] && scEventControl_data["pro_por_ice_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_base_irbpnr_" + iSeqRow] && scEventControl_data["pro_base_irbpnr_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_base_irbpnr_" + iSeqRow] && scEventControl_data["pro_base_irbpnr_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_por_irbpnr_" + iSeqRow] && scEventControl_data["pro_por_irbpnr_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_por_irbpnr_" + iSeqRow] && scEventControl_data["pro_por_irbpnr_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_familia_producto_" + iSeqRow] && scEventControl_data["pro_familia_producto_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_familia_producto_" + iSeqRow] && scEventControl_data["pro_familia_producto_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_grupo_compras_" + iSeqRow] && scEventControl_data["pro_grupo_compras_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_grupo_compras_" + iSeqRow] && scEventControl_data["pro_grupo_compras_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_grupo_ventas_" + iSeqRow] && scEventControl_data["pro_grupo_ventas_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_grupo_ventas_" + iSeqRow] && scEventControl_data["pro_grupo_ventas_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_categoria_producto_" + iSeqRow] && scEventControl_data["pro_categoria_producto_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_categoria_producto_" + iSeqRow] && scEventControl_data["pro_categoria_producto_" + iSeqRow]["change"]) {
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
  if ("pro_precio_" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  scEventControl_data[fieldName]["blur"] = true;
  if ("pro_por_iva_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_por_ice_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_por_irbpnr_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_familia_producto_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_grupo_compras_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_grupo_ventas_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_categoria_producto_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_base_ice_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_base_irbpnr_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_por_ice_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_por_irbpnr_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_por_iva_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_precio_" + iSeq == fieldName) {
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

function scEventControl_onCalculator_pro_precio_() {
  if (!_scCalculatorControl["id_sc_field_pro_precio_"]) {
    _scCalculatorBlurOk["id_sc_field_pro_precio_"] = true;
    do_ajax_form_del_actualizcion_producto_event_pro_precio__onblur();
  }
} // scEventControl_onCalculator_pro_precio_

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_pro_codigo_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_codigo__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_actualizcion_producto_pro_codigo__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_actualizcion_producto_pro_codigo__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_codigo_aux_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_codigo_aux__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_actualizcion_producto_pro_codigo_aux__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_actualizcion_producto_pro_codigo_aux__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_empresa_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_empresa__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_descripcion_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_descripcion__onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_actualizcion_producto_pro_descripcion__onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_actualizcion_producto_pro_descripcion__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_iva_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_iva__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_por_iva_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_por_iva__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_actualizcion_producto_pro_por_iva__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_actualizcion_producto_pro_por_iva__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_ice_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_ice__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_por_ice_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_por_ice__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_actualizcion_producto_pro_por_ice__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_actualizcion_producto_pro_por_ice__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_irbpnr_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_irbpnr__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_por_irbpnr_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_por_irbpnr__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_actualizcion_producto_pro_por_irbpnr__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_actualizcion_producto_pro_por_irbpnr__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_precio_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_precio__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_actualizcion_producto_pro_precio__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_actualizcion_producto_pro_precio__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_descuento_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_descuento__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_estado_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_estado__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_familia_producto_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_familia_producto__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_del_actualizcion_producto_pro_familia_producto__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_del_actualizcion_producto_pro_familia_producto__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_grupo_compras_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_grupo_compras__onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_del_actualizcion_producto_pro_grupo_compras__onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_actualizcion_producto_pro_grupo_compras__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_grupo_ventas_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_grupo_ventas__onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_actualizcion_producto_pro_grupo_ventas__onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_actualizcion_producto_pro_grupo_ventas__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_categoria_producto_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_categoria_producto__onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_del_actualizcion_producto_pro_categoria_producto__onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_del_actualizcion_producto_pro_categoria_producto__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_cantidad_inventario_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_cantidad_inventario__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_costo_promedio_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_costo_promedio__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_total_inventario_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_total_inventario__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_imagen_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_imagen__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_compra_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_compra__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_venta_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_venta__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_stock_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_stock__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_base_ice_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_base_ice__onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_actualizcion_producto_pro_base_ice__onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_actualizcion_producto_pro_base_ice__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_base_irbpnr_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_base_irbpnr__onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_actualizcion_producto_pro_base_irbpnr__onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_actualizcion_producto_pro_base_irbpnr__onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_aplica_subsidio_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_aplica_subsidio__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_precio_sin_subsidio_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_precio_sin_subsidio__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_cta_cartera_vencida_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_cta_cartera_vencida__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_cta_cobrar_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_cta_cobrar__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_cta_ingreso_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_cta_ingreso__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_cta_puente_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_cta_puente__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_producto_debi_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_producto_debi__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_unidad_' + iSeqRow).bind('change', function() { sc_form_del_actualizcion_producto_pro_unidad__onchange(this, iSeqRow) });
  $('#id_sc_field_pro_total_' + iSeqRow).bind('blur', function() { sc_form_del_actualizcion_producto_pro_total__onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_actualizcion_producto_pro_total__onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_actualizcion_producto_pro_total__onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-pro_aplica_subsidio_' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_del_actualizcion_producto_pro_codigo__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_codigo_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_codigo__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_codigo__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_codigo_aux__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_codigo_aux_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_codigo_aux__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_codigo_aux__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_empresa__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_descripcion__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_descripcion_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_descripcion__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_descripcion__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_iva__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_por_iva__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_por_iva_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_por_iva__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_actualizcion_producto_event_pro_por_iva__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_por_iva__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_ice__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_por_ice__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_por_ice_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_por_ice__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_actualizcion_producto_event_pro_por_ice__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_por_ice__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_irbpnr__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_por_irbpnr__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_por_irbpnr_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_por_irbpnr__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_actualizcion_producto_event_pro_por_irbpnr__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_por_irbpnr__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_precio__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_precio_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_precio__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_actualizcion_producto_event_pro_precio__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_precio__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_descuento__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_estado__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_familia_producto__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_familia_producto_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_familia_producto__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_familia_producto__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_grupo_compras__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_grupo_compras_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_grupo_compras__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_grupo_compras__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_grupo_ventas__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_grupo_ventas_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_grupo_ventas__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_grupo_ventas__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_categoria_producto__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_categoria_producto_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_categoria_producto__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_categoria_producto__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_cantidad_inventario__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_costo_promedio__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_total_inventario__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_imagen__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_compra__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_venta__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_stock__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_base_ice__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_base_ice_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_base_ice__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_actualizcion_producto_event_pro_base_ice__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_base_ice__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_base_irbpnr__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_base_irbpnr_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_base_irbpnr__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_actualizcion_producto_event_pro_base_irbpnr__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_base_irbpnr__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_aplica_subsidio__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_precio_sin_subsidio__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_cta_cartera_vencida__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_cta_cobrar__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_cta_ingreso__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_cta_puente__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_producto_debi__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_unidad__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_actualizcion_producto_pro_total__onblur(oThis, iSeqRow) {
  do_ajax_form_del_actualizcion_producto_validate_pro_total_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_total__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_del_actualizcion_producto_pro_total__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("pro_codigo_", "", status);
	displayChange_field("pro_codigo_aux_", "", status);
	displayChange_field("pro_descripcion_", "", status);
	displayChange_field("pro_precio_", "", status);
	displayChange_field("pro_por_iva_", "", status);
	displayChange_field("pro_total_", "", status);
	displayChange_field("pro_base_ice_", "", status);
	displayChange_field("pro_por_ice_", "", status);
	displayChange_field("pro_base_irbpnr_", "", status);
	displayChange_field("pro_por_irbpnr_", "", status);
	displayChange_field("pro_familia_producto_", "", status);
	displayChange_field("pro_grupo_compras_", "", status);
	displayChange_field("pro_grupo_ventas_", "", status);
	displayChange_field("pro_categoria_producto_", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_pro_codigo_(row, status);
	displayChange_field_pro_codigo_aux_(row, status);
	displayChange_field_pro_descripcion_(row, status);
	displayChange_field_pro_precio_(row, status);
	displayChange_field_pro_por_iva_(row, status);
	displayChange_field_pro_total_(row, status);
	displayChange_field_pro_base_ice_(row, status);
	displayChange_field_pro_por_ice_(row, status);
	displayChange_field_pro_base_irbpnr_(row, status);
	displayChange_field_pro_por_irbpnr_(row, status);
	displayChange_field_pro_familia_producto_(row, status);
	displayChange_field_pro_grupo_compras_(row, status);
	displayChange_field_pro_grupo_ventas_(row, status);
	displayChange_field_pro_categoria_producto_(row, status);
}

function displayChange_field(field, row, status) {
	if ("pro_codigo_" == field) {
		displayChange_field_pro_codigo_(row, status);
	}
	if ("pro_codigo_aux_" == field) {
		displayChange_field_pro_codigo_aux_(row, status);
	}
	if ("pro_descripcion_" == field) {
		displayChange_field_pro_descripcion_(row, status);
	}
	if ("pro_precio_" == field) {
		displayChange_field_pro_precio_(row, status);
	}
	if ("pro_por_iva_" == field) {
		displayChange_field_pro_por_iva_(row, status);
	}
	if ("pro_total_" == field) {
		displayChange_field_pro_total_(row, status);
	}
	if ("pro_base_ice_" == field) {
		displayChange_field_pro_base_ice_(row, status);
	}
	if ("pro_por_ice_" == field) {
		displayChange_field_pro_por_ice_(row, status);
	}
	if ("pro_base_irbpnr_" == field) {
		displayChange_field_pro_base_irbpnr_(row, status);
	}
	if ("pro_por_irbpnr_" == field) {
		displayChange_field_pro_por_irbpnr_(row, status);
	}
	if ("pro_familia_producto_" == field) {
		displayChange_field_pro_familia_producto_(row, status);
	}
	if ("pro_grupo_compras_" == field) {
		displayChange_field_pro_grupo_compras_(row, status);
	}
	if ("pro_grupo_ventas_" == field) {
		displayChange_field_pro_grupo_ventas_(row, status);
	}
	if ("pro_categoria_producto_" == field) {
		displayChange_field_pro_categoria_producto_(row, status);
	}
}

function displayChange_field_pro_codigo_(row, status) {
    var fieldId;
}

function displayChange_field_pro_codigo_aux_(row, status) {
    var fieldId;
}

function displayChange_field_pro_descripcion_(row, status) {
    var fieldId;
}

function displayChange_field_pro_precio_(row, status) {
    var fieldId;
}

function displayChange_field_pro_por_iva_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_por_iva___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_por_iva_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_por_iva_");
	}
}

function displayChange_field_pro_total_(row, status) {
    var fieldId;
}

function displayChange_field_pro_base_ice_(row, status) {
    var fieldId;
}

function displayChange_field_pro_por_ice_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_por_ice___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_por_ice_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_por_ice_");
	}
}

function displayChange_field_pro_base_irbpnr_(row, status) {
    var fieldId;
}

function displayChange_field_pro_por_irbpnr_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_por_irbpnr___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_por_irbpnr_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_por_irbpnr_");
	}
}

function displayChange_field_pro_familia_producto_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_familia_producto___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_familia_producto_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_familia_producto_");
	}
}

function displayChange_field_pro_grupo_compras_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_grupo_compras___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_grupo_compras_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_grupo_compras_");
	}
}

function displayChange_field_pro_grupo_ventas_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_grupo_ventas___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_grupo_ventas_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_grupo_ventas_");
	}
}

function displayChange_field_pro_categoria_producto_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_categoria_producto___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_categoria_producto_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_categoria_producto_");
	}
}

function scRecreateSelect2() {
	displayChange_field_pro_por_iva_("all", "on");
	displayChange_field_pro_por_ice_("all", "on");
	displayChange_field_pro_por_irbpnr_("all", "on");
	displayChange_field_pro_familia_producto_("all", "on");
	displayChange_field_pro_grupo_compras_("all", "on");
	displayChange_field_pro_grupo_ventas_("all", "on");
	displayChange_field_pro_categoria_producto_("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_actualizcion_producto_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(38);
		}
	}
}
<?php
if (!$this->Embutida_form) {
    $selectedFieldsDefault = '"0", "1"';
    $setControlStateLoop = '2';
} else {
    $selectedFieldsDefault = '"0"';
    $setControlStateLoop = '1';
}
?>
var scFixCol_left = 0, scFixCol_list = [], scFixCol_selectedFields = [];

function scFixCol()
{
    var i;

    scFixCol_left = 0;
    scFixCol_list = [];

    scFixCol_addFieldColumns();

    for (i = 0; i < scFixCol_list.length; i++) {
        scFixCol_fix(scFixCol_list[i].type, scFixCol_list[i].name);
    }
}

function scFixCol_clear()
{
    let colList;

    scFixCol_selectedFields = [<?php echo $selectedFieldsDefault ?>];

    colList = $(".sc-col-op,.sc-col-fld");

    colList.css({
        "position": "static",
        "left": "auto"
    }).removeClass("sc-col-is-fixed");

    colList.filter(".sc-header-fixed").css({
        "position": "sticky"
    });
}

function scFixCol_addFieldColumns()
{
    var i;

    for (i = 0; i < scFixCol_selectedFields.length; i++) {
        scFixCol_list.push({"type": "fld", "name": scFixCol_selectedFields[i]});
    }
}

function scFixCol_fix(type, columnName)
{
    var columnCells = $(".sc-col-" + type + "-" + columnName), thisWidth = 0;

    if (columnCells.length) {
        thisWidth = columnCells[0].offsetWidth;

        columnCells.css({
            'position': 'sticky',
            'left': scFixCol_left,
            'z-index': 3
        }).addClass("sc-col-is-fixed");
    }

    scFixCol_left += thisWidth;
}

function scFixCol_fixTop()
{
    var columnCells = $(".sc-col-title");

    columnCells.css({
        'position': 'sticky',
        'top': 0,
        'z-index': 4
    });

    columnCells.filter(".sc-col-is-fixed").css("z-index", 5);
    columnCells.filter(".sc-col-is-fixed").filter(".sc-col-actions").css("z-index", 6);
}

function scFixCol_clickColumn(columnId)
{
    var action;

    action = scFixCol_fixColumns(columnId, "click");

    scFixCol_saveConfig(columnId, action);
}

function scFixCol_fixColumns(columnId, fixAction)
{
    var action = "";

    if ("click" == fixAction) {
        action = scFixCol_setControlState(columnId);
    } else {
        scFixCol_resetControlState(columnId);
    }

    scFixCol_clear();
    scFixCol_addFixedCells();
    scFixCol();
    scFixCol_fixTop();

    return action;
}

function scFixCol_setControlState(columnId)
{
    let i, fixColLength, action;

    if ($("#sc-fld-fix-col-" + columnId).hasClass("sc-op-fix-col-notfixed")) {
        action = "on";

        for (i = <?php echo $setControlStateLoop ?>; i <= columnId; i++) {
            $(".sc-op-fix-col-" + i).removeClass("sc-op-fix-col-notfixed").addClass("sc-op-fix-col-fixed");
        }
    } else {
        action = "off";

        fixColLength = $(".sc-op-fix-col").length;

        for (i = columnId; i < fixColLength; i++) {
            $(".sc-op-fix-col-" + i).removeClass("sc-op-fix-col-fixed").addClass("sc-op-fix-col-notfixed");
        }
    }

    return action;
}

function scFixCol_resetControlState(columnId)
{
    let i;

    $(".sc-op-fix-col").addClass("sc-op-fix-col-notfixed").removeClass("sc-op-fix-col-fixed");

    if ("" == columnId) {
        return;
    }

    for (i = <?php echo $setControlStateLoop ?>; i <= columnId; i++) {
        $(".sc-op-fix-col-" + i).removeClass("sc-op-fix-col-notfixed").addClass("sc-op-fix-col-fixed");
    }
}

function scFixCol_addFixedCells()
{
    selectedFields = $(".sc-ui-header-row .sc-op-fix-col.sc-op-fix-col-fixed");

    for (i = 0; i < selectedFields.length; i++) {
        scFixCol_selectedFields.push($(selectedFields[i]).attr("id").substr(15));
    }
}

function scFixCol_saveConfig(index, action)
{
    $.ajax({
        url: "form_del_actualizcion_producto.php",
        dataType: "json",
        method: "POST",
        data: {
            script_case_init: "<?php echo $this->Ini->sc_page ?>",
            nmgp_opcao: "ajax_fixed_columns_form_save",
            fixed_index: index,
            fixed_action: action
        }
    }).done(function(data, textStatus, jqXHR) {
    });
}

function scFixCol_loadState()
{
    $.ajax({
        url: "form_del_actualizcion_producto.php",
        dataType: "json",
        method: "POST",
        data: {
            script_case_init: "<?php echo $this->Ini->sc_page ?>",
            nmgp_opcao: "ajax_fixed_columns_form_load"
        }
    }).done(function(data, textStatus, jqXHR) {
        if (typeof data.status !== undefined && "ok" == data.status) {
            scFixCol_fixColumns(data.last_index, "load");
        }
    });
}

function scFixCol_addClickControl()
{
    $(".sc-op-fix-col").on("click", function() {
        scFixCol_clickColumn($(this).attr("data-fixcolid"));
    });
}

$(function()
{
    scFixCol();
    scFixCol_addClickControl();
    scFixCol_loadState();
    $(window).on('resize', function() {
        scFixCol_loadState();
    });
});

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
        if (headerPlaceholder.filter(":visible").length) {
            scJQCheckboxControl_updateHide();
        }
		headerPlaceholder.hide();
	}
	else {
		if (scIsHeaderVisible(formHeaders)) {
            if (headerPlaceholder.filter(":visible").length) {
                scJQCheckboxControl_updateHide();
            }
			headerPlaceholder.hide();
		}
		else {
			if (!headerPlaceholder.filter(":visible").length || forceDisplay) {
				scSetFixedHeadersContents(formHeaders, headerPlaceholder);
				scSetFixedHeadersSize(formHeaders);
				scJQCheckboxControl_updateShow();
				headerPlaceholder.show();
			}
			scSetFixedHeadersPosition(formHeaders, headerPlaceholder);
			if (0 < rerunHeaderDisplay) {
				rerunHeaderDisplay--;
				setTimeout(function() {
					scSetFixedHeadersContents(formHeaders, headerPlaceholder);
					scSetFixedHeadersSize(formHeaders);
					scJQCheckboxControl_updateShow();
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
	scJQCheckboxControl_general("#sc-id-fixedheaders-placeholder ");
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
var jqCalcMonetPos = {};
var _scCalculatorBlurOk = {};

function scJQCalculatorAdd(iSeqRow) {
  _scCalculatorBlurOk["id_sc_field_pro_total_" + iSeqRow] = true;
  $("#id_sc_field_pro_precio_" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_pro_precio_" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_pro_precio_" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_pro_precio_" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['pro_precio_']['symbol_grp']); ?>', <?php echo $this->field_config['pro_precio_']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['pro_precio_']['symbol_dec']); ?>', '');
      $(this).val(value);
      _scCalculatorWidth = $(".calculator-popup").width();
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_pro_precio_" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_pro_precio_" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_pro_precio_" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['pro_precio_']['symbol_grp']); ?>', <?php echo $this->field_config['pro_precio_']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['pro_precio_']['symbol_dec']); ?>', 6, '');
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

var _scCalculatorWidth = 0;
$(function() {
    $(window).on("scroll", function() {
        for (let calcField in _scCalculatorControl) {
            if (_scCalculatorControl[calcField]) {
                $(".calculator-popup").offset({left: $("#" + calcField).offset().left}).width(_scCalculatorWidth);
            }
        }
    });
});
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_actualizcion_producto')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "pro_por_iva_" == specificField) {
    scJQSelect2Add_pro_por_iva_(seqRow);
  }
  if (null == specificField || "pro_por_ice_" == specificField) {
    scJQSelect2Add_pro_por_ice_(seqRow);
  }
  if (null == specificField || "pro_por_irbpnr_" == specificField) {
    scJQSelect2Add_pro_por_irbpnr_(seqRow);
  }
  if (null == specificField || "pro_familia_producto_" == specificField) {
    scJQSelect2Add_pro_familia_producto_(seqRow);
  }
  if (null == specificField || "pro_grupo_compras_" == specificField) {
    scJQSelect2Add_pro_grupo_compras_(seqRow);
  }
  if (null == specificField || "pro_grupo_ventas_" == specificField) {
    scJQSelect2Add_pro_grupo_ventas_(seqRow);
  }
  if (null == specificField || "pro_categoria_producto_" == specificField) {
    scJQSelect2Add_pro_categoria_producto_(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_pro_por_iva_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_por_iva__obj" : "#id_sc_field_pro_por_iva_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pro_por_iva__obj',
      dropdownCssClass: 'css_pro_por_iva__obj',
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

function scJQSelect2Add_pro_por_ice_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_por_ice__obj" : "#id_sc_field_pro_por_ice_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pro_por_ice__obj',
      dropdownCssClass: 'css_pro_por_ice__obj',
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

function scJQSelect2Add_pro_por_irbpnr_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_por_irbpnr__obj" : "#id_sc_field_pro_por_irbpnr_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pro_por_irbpnr__obj',
      dropdownCssClass: 'css_pro_por_irbpnr__obj',
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

function scJQSelect2Add_pro_familia_producto_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_familia_producto__obj" : "#id_sc_field_pro_familia_producto_" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pro_familia_producto__obj',
      dropdownCssClass: 'css_pro_familia_producto__obj',
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

function scJQSelect2Add_pro_grupo_compras_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_grupo_compras__obj" : "#id_sc_field_pro_grupo_compras_" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pro_grupo_compras__obj',
      dropdownCssClass: 'css_pro_grupo_compras__obj',
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

function scJQSelect2Add_pro_grupo_ventas_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_grupo_ventas__obj" : "#id_sc_field_pro_grupo_ventas_" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pro_grupo_ventas__obj',
      dropdownCssClass: 'css_pro_grupo_ventas__obj',
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

function scJQSelect2Add_pro_categoria_producto_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_categoria_producto__obj" : "#id_sc_field_pro_categoria_producto_" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pro_categoria_producto__obj',
      dropdownCssClass: 'css_pro_categoria_producto__obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_por_iva_) { displayChange_field_pro_por_iva_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_por_ice_) { displayChange_field_pro_por_ice_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_por_irbpnr_) { displayChange_field_pro_por_irbpnr_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_familia_producto_) { displayChange_field_pro_familia_producto_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_grupo_compras_) { displayChange_field_pro_grupo_compras_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_grupo_ventas_) { displayChange_field_pro_grupo_ventas_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_categoria_producto_) { displayChange_field_pro_categoria_producto_(iLine, "on"); } }, 150);
} // scJQElementsAdd

function scJQCheckboxControl_general(mainContainer) {
    $(mainContainer + '.sc-ui-checkbox-pro_aplica_subsidio_-control').click(function() { scJQCheckboxControl('pro_aplica_subsidio_', '__ALL__', this); });
}

function scJQCheckboxControl_updateShow() {
    $('#sc-id-fixedheaders-placeholder .sc-ui-checkbox-pro_aplica_subsidio_-control').prop("checked", $('#div_hidden_bloco_0 .sc-ui-checkbox-pro_aplica_subsidio_-control').prop("checked"));
}

function scJQCheckboxControl_updateHide() {
    $('#div_hidden_bloco_0 .sc-ui-checkbox-pro_aplica_subsidio_-control').prop("checked", $('#sc-id-fixedheaders-placeholder .sc-ui-checkbox-pro_aplica_subsidio_-control').prop("checked"));
}

function scJQCheckboxControl(sColumn, sSeqRow, oCheckbox) {
  var iSeqRow = '';

  if ('__ALL__' == sColumn || 'pro_aplica_subsidio_' == sColumn) {
    iSeqRow = ('__REC__' == sSeqRow) ? $(oCheckbox).attr('alt') : '';
    scJQCheckboxControl_pro_aplica_subsidio_(iSeqRow, oCheckbox.checked);
    if ('__REC__' == sSeqRow) {
      nm_check_insert(iSeqRow);
    }
    else {
      if ('__ALL__' == sColumn || 'pro_aplica_subsidio_' == sColumn) {
         for (var i = 1; i <= iAjaxNewLine; i++) {
           nm_check_insert(i);
         }
      }
    }
    if ('__ALL__' == sColumn && '__ALL__' == sSeqRow) {
      var $oCheckbox = $(".sc-ui-checkbox-record-all");
      for (var i = 0; i < $oCheckbox.length; i++) {
        if (oCheckbox.checked != $oCheckbox[i].checked) {
          $oCheckbox[i].checked = oCheckbox.checked;
        }
      }
    }
  }

} // scJQCheckboxControl

function scJQCheckboxControl_pro_aplica_subsidio_(iSeqRow, bChecked) {
  if ('__ALL__' == iSeqRow) {
    var $oCheckbox = $(".sc-ui-checkbox-pro_aplica_subsidio_");
  }
  else {
    var $oCheckbox = $(".sc-ui-checkbox-pro_aplica_subsidio_" + iSeqRow);
  }

  var bChanged = false, lcsObjects;
  for (var i = 0; i < $oCheckbox.length; i++) {
    if (bChecked != $oCheckbox[i].checked && !$oCheckbox[i].disabled) {
      $oCheckbox[i].checked = bChecked;
      nm_check_insert(iSeqRow);
      lcsObjects = $($oCheckbox[i]).parent().find(".lcs_switch");
      if (lcsObjects.length) {
        if (bChecked) {
          lcsObjects.lcs_on();
        }
        else {
          lcsObjects.lcs_off();
        }
      }
      bChanged = true;
    }
  }
} // scJQCheckboxControl_pro_aplica_subsidio_

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


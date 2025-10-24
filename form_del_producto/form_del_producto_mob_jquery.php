
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
  scEventControl_data["pro_imagen" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_codigo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_codigo_aux" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_categoria_producto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_familia_producto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_grupo_compras" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_grupo_ventas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_aplica_subsidio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_precio_sin_subsidio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_valor_subsidio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_precio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_por_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tarifa_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_base_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["total_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_por_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tarifa_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["base_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["total_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_por_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tarifa_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_base_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["total_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["precio_con_impuesto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_compra" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_venta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_stock" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_unidad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_cantidad_inventario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_costo_promedio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_total_inventario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["pro_empresa" + iSeqRow] && scEventControl_data["pro_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_empresa" + iSeqRow] && scEventControl_data["pro_empresa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_codigo" + iSeqRow] && scEventControl_data["pro_codigo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_codigo" + iSeqRow] && scEventControl_data["pro_codigo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_codigo_aux" + iSeqRow] && scEventControl_data["pro_codigo_aux" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_codigo_aux" + iSeqRow] && scEventControl_data["pro_codigo_aux" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_descripcion" + iSeqRow] && scEventControl_data["pro_descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_descripcion" + iSeqRow] && scEventControl_data["pro_descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_categoria_producto" + iSeqRow] && scEventControl_data["pro_categoria_producto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_categoria_producto" + iSeqRow] && scEventControl_data["pro_categoria_producto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_familia_producto" + iSeqRow] && scEventControl_data["pro_familia_producto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_familia_producto" + iSeqRow] && scEventControl_data["pro_familia_producto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_grupo_compras" + iSeqRow] && scEventControl_data["pro_grupo_compras" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_grupo_compras" + iSeqRow] && scEventControl_data["pro_grupo_compras" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_grupo_ventas" + iSeqRow] && scEventControl_data["pro_grupo_ventas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_grupo_ventas" + iSeqRow] && scEventControl_data["pro_grupo_ventas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_estado" + iSeqRow] && scEventControl_data["pro_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_estado" + iSeqRow] && scEventControl_data["pro_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_aplica_subsidio" + iSeqRow] && scEventControl_data["pro_aplica_subsidio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_aplica_subsidio" + iSeqRow] && scEventControl_data["pro_aplica_subsidio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_precio_sin_subsidio" + iSeqRow] && scEventControl_data["pro_precio_sin_subsidio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_precio_sin_subsidio" + iSeqRow] && scEventControl_data["pro_precio_sin_subsidio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_valor_subsidio" + iSeqRow] && scEventControl_data["pro_valor_subsidio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_valor_subsidio" + iSeqRow] && scEventControl_data["pro_valor_subsidio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_precio" + iSeqRow] && scEventControl_data["pro_precio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_precio" + iSeqRow] && scEventControl_data["pro_precio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_por_ice" + iSeqRow] && scEventControl_data["pro_por_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_por_ice" + iSeqRow] && scEventControl_data["pro_por_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tarifa_ice" + iSeqRow] && scEventControl_data["tarifa_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tarifa_ice" + iSeqRow] && scEventControl_data["tarifa_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_base_ice" + iSeqRow] && scEventControl_data["pro_base_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_base_ice" + iSeqRow] && scEventControl_data["pro_base_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["total_ice" + iSeqRow] && scEventControl_data["total_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["total_ice" + iSeqRow] && scEventControl_data["total_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_por_iva" + iSeqRow] && scEventControl_data["pro_por_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_por_iva" + iSeqRow] && scEventControl_data["pro_por_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tarifa_iva" + iSeqRow] && scEventControl_data["tarifa_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tarifa_iva" + iSeqRow] && scEventControl_data["tarifa_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["base_iva" + iSeqRow] && scEventControl_data["base_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["base_iva" + iSeqRow] && scEventControl_data["base_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["total_iva" + iSeqRow] && scEventControl_data["total_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["total_iva" + iSeqRow] && scEventControl_data["total_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_por_irbpnr" + iSeqRow] && scEventControl_data["pro_por_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_por_irbpnr" + iSeqRow] && scEventControl_data["pro_por_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tarifa_irbpnr" + iSeqRow] && scEventControl_data["tarifa_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tarifa_irbpnr" + iSeqRow] && scEventControl_data["tarifa_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_base_irbpnr" + iSeqRow] && scEventControl_data["pro_base_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_base_irbpnr" + iSeqRow] && scEventControl_data["pro_base_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["total_irbpnr" + iSeqRow] && scEventControl_data["total_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["total_irbpnr" + iSeqRow] && scEventControl_data["total_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_iva" + iSeqRow] && scEventControl_data["pro_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_iva" + iSeqRow] && scEventControl_data["pro_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["precio_con_impuesto" + iSeqRow] && scEventControl_data["precio_con_impuesto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["precio_con_impuesto" + iSeqRow] && scEventControl_data["precio_con_impuesto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_ice" + iSeqRow] && scEventControl_data["pro_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_ice" + iSeqRow] && scEventControl_data["pro_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_irbpnr" + iSeqRow] && scEventControl_data["pro_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_irbpnr" + iSeqRow] && scEventControl_data["pro_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_compra" + iSeqRow] && scEventControl_data["pro_compra" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_compra" + iSeqRow] && scEventControl_data["pro_compra" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_venta" + iSeqRow] && scEventControl_data["pro_venta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_venta" + iSeqRow] && scEventControl_data["pro_venta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_stock" + iSeqRow] && scEventControl_data["pro_stock" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_stock" + iSeqRow] && scEventControl_data["pro_stock" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_unidad" + iSeqRow] && scEventControl_data["pro_unidad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_unidad" + iSeqRow] && scEventControl_data["pro_unidad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_cantidad_inventario" + iSeqRow] && scEventControl_data["pro_cantidad_inventario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_cantidad_inventario" + iSeqRow] && scEventControl_data["pro_cantidad_inventario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_costo_promedio" + iSeqRow] && scEventControl_data["pro_costo_promedio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_costo_promedio" + iSeqRow] && scEventControl_data["pro_costo_promedio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_total_inventario" + iSeqRow] && scEventControl_data["pro_total_inventario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_total_inventario" + iSeqRow] && scEventControl_data["pro_total_inventario" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  if ("pro_precio" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  if ("pro_base_ice" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  scEventControl_data[fieldName]["blur"] = true;
  if ("pro_categoria_producto" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_familia_producto" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_grupo_compras" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_grupo_ventas" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_estado" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_por_ice" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_por_iva" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_por_irbpnr" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_unidad" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_por_iva" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_por_ice" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_por_irbpnr" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_familia_producto" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_costo_promedio" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_cantidad_inventario" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("pro_precio_sin_subsidio" + iSeq == fieldName) {
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

function scEventControl_onCalculator_pro_precio() {
  if (!_scCalculatorControl["id_sc_field_pro_precio"]) {
    _scCalculatorBlurOk["id_sc_field_pro_precio"] = true;
    do_ajax_form_del_producto_mob_event_pro_precio_onblur();
  }
} // scEventControl_onCalculator_pro_precio

function scEventControl_onCalculator_pro_base_ice() {
  if (!_scCalculatorControl["id_sc_field_pro_base_ice"]) {
    _scCalculatorBlurOk["id_sc_field_pro_base_ice"] = true;
    do_ajax_form_del_producto_mob_event_pro_base_ice_onblur();
  }
} // scEventControl_onCalculator_pro_base_ice

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_pro_codigo' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_codigo_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_producto_pro_codigo_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_codigo_aux' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_codigo_aux_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_producto_pro_codigo_aux_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_empresa' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_empresa_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_producto_pro_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_descripcion' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_descripcion_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_producto_pro_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_iva' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_iva_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_producto_pro_iva_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_producto_pro_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_por_iva' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_por_iva_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_producto_pro_por_iva_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_producto_pro_por_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_ice' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_ice_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_producto_pro_ice_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_producto_pro_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_por_ice' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_por_ice_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_producto_pro_por_ice_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_producto_pro_por_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_irbpnr_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_producto_pro_irbpnr_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_producto_pro_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_por_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_por_irbpnr_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_producto_pro_por_irbpnr_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_producto_pro_por_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_precio' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_precio_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_producto_pro_precio_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_estado' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_estado_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_producto_pro_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_familia_producto' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_familia_producto_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_producto_pro_familia_producto_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_producto_pro_familia_producto_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_grupo_compras' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_grupo_compras_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_producto_pro_grupo_compras_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_grupo_ventas' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_grupo_ventas_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_producto_pro_grupo_ventas_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_categoria_producto' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_categoria_producto_onblur(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_del_producto_pro_categoria_producto_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_cantidad_inventario' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_cantidad_inventario_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_del_producto_pro_cantidad_inventario_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_del_producto_pro_cantidad_inventario_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_costo_promedio' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_costo_promedio_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_del_producto_pro_costo_promedio_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_producto_pro_costo_promedio_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_total_inventario' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_total_inventario_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_producto_pro_total_inventario_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_imagen' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_imagen_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_producto_pro_imagen_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_compra' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_compra_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_producto_pro_compra_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_venta' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_venta_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_producto_pro_venta_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_stock' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_stock_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_producto_pro_stock_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_base_ice' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_base_ice_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_producto_pro_base_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_base_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_base_irbpnr_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_producto_pro_base_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_aplica_subsidio' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_aplica_subsidio_onblur(this, iSeqRow) })
                                                 .bind('click', function() { sc_form_del_producto_pro_aplica_subsidio_onclick(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_producto_pro_aplica_subsidio_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_precio_sin_subsidio' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_precio_sin_subsidio_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_del_producto_pro_precio_sin_subsidio_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_del_producto_pro_precio_sin_subsidio_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_unidad' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_unidad_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_producto_pro_unidad_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_valor_subsidio' + iSeqRow).bind('blur', function() { sc_form_del_producto_pro_valor_subsidio_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_producto_pro_valor_subsidio_onfocus(this, iSeqRow) });
  $('#id_sc_field_tarifa_ice' + iSeqRow).bind('blur', function() { sc_form_del_producto_tarifa_ice_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_producto_tarifa_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_tarifa_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_producto_tarifa_irbpnr_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_producto_tarifa_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_base_iva' + iSeqRow).bind('blur', function() { sc_form_del_producto_base_iva_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_producto_base_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_total_iva' + iSeqRow).bind('blur', function() { sc_form_del_producto_total_iva_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_producto_total_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_total_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_producto_total_irbpnr_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_producto_total_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_total_ice' + iSeqRow).bind('blur', function() { sc_form_del_producto_total_ice_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_producto_total_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_precio_con_impuesto' + iSeqRow).bind('blur', function() { sc_form_del_producto_precio_con_impuesto_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_producto_precio_con_impuesto_onfocus(this, iSeqRow) });
  $('#id_sc_field_tarifa_iva' + iSeqRow).bind('blur', function() { sc_form_del_producto_tarifa_iva_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_producto_tarifa_iva_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-pro_aplica_subsidio' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-pro_compra' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-pro_venta' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-pro_stock' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_del_producto_pro_codigo_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_codigo();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_codigo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_codigo_aux_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_codigo_aux();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_codigo_aux_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_empresa();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_descripcion();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_iva();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_iva_onchange(oThis, iSeqRow) {
  lookup_pro_iva();
}

function sc_form_del_producto_pro_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_por_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_por_iva();
  scCssBlur(oThis);
  do_ajax_form_del_producto_mob_event_pro_por_iva_onblur();
}

function sc_form_del_producto_pro_por_iva_onchange(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_event_pro_por_iva_onchange();
}

function sc_form_del_producto_pro_por_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_ice();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_ice_onchange(oThis, iSeqRow) {
  lookup_pro_ice();
}

function sc_form_del_producto_pro_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_por_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_por_ice();
  scCssBlur(oThis);
  do_ajax_form_del_producto_mob_event_pro_por_ice_onblur();
}

function sc_form_del_producto_pro_por_ice_onchange(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_event_pro_por_ice_onchange();
}

function sc_form_del_producto_pro_por_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_irbpnr();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_irbpnr_onchange(oThis, iSeqRow) {
  lookup_pro_irbpnr();
}

function sc_form_del_producto_pro_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_por_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_por_irbpnr();
  scCssBlur(oThis);
  do_ajax_form_del_producto_mob_event_pro_por_irbpnr_onblur();
}

function sc_form_del_producto_pro_por_irbpnr_onchange(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_event_pro_por_irbpnr_onchange();
}

function sc_form_del_producto_pro_por_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_precio_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_precio();
  scCssBlur(oThis);
  do_ajax_form_del_producto_mob_event_pro_precio_onblur();
}

function sc_form_del_producto_pro_precio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_estado();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_familia_producto_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_familia_producto();
  scCssBlur(oThis);
  do_ajax_form_del_producto_mob_event_pro_familia_producto_onblur();
}

function sc_form_del_producto_pro_familia_producto_onchange(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_event_pro_familia_producto_onchange();
}

function sc_form_del_producto_pro_familia_producto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_grupo_compras_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_grupo_compras();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_grupo_compras_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_grupo_ventas_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_grupo_ventas();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_grupo_ventas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_categoria_producto_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_categoria_producto();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_categoria_producto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_cantidad_inventario_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_cantidad_inventario();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_cantidad_inventario_onchange(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_event_pro_cantidad_inventario_onchange();
}

function sc_form_del_producto_pro_cantidad_inventario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_costo_promedio_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_costo_promedio();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_costo_promedio_onchange(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_event_pro_costo_promedio_onchange();
}

function sc_form_del_producto_pro_costo_promedio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_total_inventario_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_total_inventario();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_total_inventario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_imagen_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_imagen_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_compra_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_compra();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_compra_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_venta_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_venta();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_venta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_stock_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_stock();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_stock_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_base_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_base_ice();
  scCssBlur(oThis);
  do_ajax_form_del_producto_mob_event_pro_base_ice_onblur();
}

function sc_form_del_producto_pro_base_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_base_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_base_irbpnr();
  scCssBlur(oThis);
  do_ajax_form_del_producto_mob_event_pro_base_irbpnr_onblur();
}

function sc_form_del_producto_pro_base_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_aplica_subsidio_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_aplica_subsidio();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_aplica_subsidio_onclick(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_event_pro_aplica_subsidio_onclick();
}

function sc_form_del_producto_pro_aplica_subsidio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_precio_sin_subsidio_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_precio_sin_subsidio();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_precio_sin_subsidio_onchange(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_event_pro_precio_sin_subsidio_onchange();
}

function sc_form_del_producto_pro_precio_sin_subsidio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_unidad_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_unidad();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_unidad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_pro_valor_subsidio_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_pro_valor_subsidio();
  scCssBlur(oThis);
}

function sc_form_del_producto_pro_valor_subsidio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_tarifa_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_tarifa_ice();
  scCssBlur(oThis);
}

function sc_form_del_producto_tarifa_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_tarifa_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_tarifa_irbpnr();
  scCssBlur(oThis);
}

function sc_form_del_producto_tarifa_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_base_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_base_iva();
  scCssBlur(oThis);
}

function sc_form_del_producto_base_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_total_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_total_iva();
  scCssBlur(oThis);
}

function sc_form_del_producto_total_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_total_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_total_irbpnr();
  scCssBlur(oThis);
}

function sc_form_del_producto_total_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_total_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_total_ice();
  scCssBlur(oThis);
}

function sc_form_del_producto_total_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_precio_con_impuesto_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_precio_con_impuesto();
  scCssBlur(oThis);
}

function sc_form_del_producto_precio_con_impuesto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_tarifa_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_mob_validate_tarifa_iva();
  scCssBlur(oThis);
}

function sc_form_del_producto_tarifa_iva_onfocus(oThis, iSeqRow) {
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
}

function displayChange_block_0(status) {
	displayChange_field("pro_imagen", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("pro_empresa", "", status);
	displayChange_field("pro_codigo", "", status);
	displayChange_field("pro_codigo_aux", "", status);
	displayChange_field("pro_descripcion", "", status);
	displayChange_field("pro_categoria_producto", "", status);
	displayChange_field("pro_familia_producto", "", status);
	displayChange_field("pro_grupo_compras", "", status);
	displayChange_field("pro_grupo_ventas", "", status);
	displayChange_field("pro_estado", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("pro_aplica_subsidio", "", status);
	displayChange_field("pro_precio_sin_subsidio", "", status);
	displayChange_field("pro_valor_subsidio", "", status);
	displayChange_field("pro_precio", "", status);
	displayChange_field("pro_por_ice", "", status);
	displayChange_field("tarifa_ice", "", status);
	displayChange_field("pro_base_ice", "", status);
	displayChange_field("total_ice", "", status);
	displayChange_field("pro_por_iva", "", status);
	displayChange_field("tarifa_iva", "", status);
	displayChange_field("base_iva", "", status);
	displayChange_field("total_iva", "", status);
	displayChange_field("pro_por_irbpnr", "", status);
	displayChange_field("tarifa_irbpnr", "", status);
	displayChange_field("pro_base_irbpnr", "", status);
	displayChange_field("total_irbpnr", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("pro_iva", "", status);
	displayChange_field("precio_con_impuesto", "", status);
	displayChange_field("pro_ice", "", status);
	displayChange_field("pro_irbpnr", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("pro_compra", "", status);
	displayChange_field("pro_venta", "", status);
	displayChange_field("pro_stock", "", status);
	displayChange_field("pro_unidad", "", status);
	displayChange_field("pro_cantidad_inventario", "", status);
	displayChange_field("pro_costo_promedio", "", status);
	displayChange_field("pro_total_inventario", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_pro_imagen(row, status);
	displayChange_field_pro_empresa(row, status);
	displayChange_field_pro_codigo(row, status);
	displayChange_field_pro_codigo_aux(row, status);
	displayChange_field_pro_descripcion(row, status);
	displayChange_field_pro_categoria_producto(row, status);
	displayChange_field_pro_familia_producto(row, status);
	displayChange_field_pro_grupo_compras(row, status);
	displayChange_field_pro_grupo_ventas(row, status);
	displayChange_field_pro_estado(row, status);
	displayChange_field_pro_aplica_subsidio(row, status);
	displayChange_field_pro_precio_sin_subsidio(row, status);
	displayChange_field_pro_valor_subsidio(row, status);
	displayChange_field_pro_precio(row, status);
	displayChange_field_pro_por_ice(row, status);
	displayChange_field_tarifa_ice(row, status);
	displayChange_field_pro_base_ice(row, status);
	displayChange_field_total_ice(row, status);
	displayChange_field_pro_por_iva(row, status);
	displayChange_field_tarifa_iva(row, status);
	displayChange_field_base_iva(row, status);
	displayChange_field_total_iva(row, status);
	displayChange_field_pro_por_irbpnr(row, status);
	displayChange_field_tarifa_irbpnr(row, status);
	displayChange_field_pro_base_irbpnr(row, status);
	displayChange_field_total_irbpnr(row, status);
	displayChange_field_pro_iva(row, status);
	displayChange_field_precio_con_impuesto(row, status);
	displayChange_field_pro_ice(row, status);
	displayChange_field_pro_irbpnr(row, status);
	displayChange_field_pro_compra(row, status);
	displayChange_field_pro_venta(row, status);
	displayChange_field_pro_stock(row, status);
	displayChange_field_pro_unidad(row, status);
	displayChange_field_pro_cantidad_inventario(row, status);
	displayChange_field_pro_costo_promedio(row, status);
	displayChange_field_pro_total_inventario(row, status);
}

function displayChange_field(field, row, status) {
	if ("pro_imagen" == field) {
		displayChange_field_pro_imagen(row, status);
	}
	if ("pro_empresa" == field) {
		displayChange_field_pro_empresa(row, status);
	}
	if ("pro_codigo" == field) {
		displayChange_field_pro_codigo(row, status);
	}
	if ("pro_codigo_aux" == field) {
		displayChange_field_pro_codigo_aux(row, status);
	}
	if ("pro_descripcion" == field) {
		displayChange_field_pro_descripcion(row, status);
	}
	if ("pro_categoria_producto" == field) {
		displayChange_field_pro_categoria_producto(row, status);
	}
	if ("pro_familia_producto" == field) {
		displayChange_field_pro_familia_producto(row, status);
	}
	if ("pro_grupo_compras" == field) {
		displayChange_field_pro_grupo_compras(row, status);
	}
	if ("pro_grupo_ventas" == field) {
		displayChange_field_pro_grupo_ventas(row, status);
	}
	if ("pro_estado" == field) {
		displayChange_field_pro_estado(row, status);
	}
	if ("pro_aplica_subsidio" == field) {
		displayChange_field_pro_aplica_subsidio(row, status);
	}
	if ("pro_precio_sin_subsidio" == field) {
		displayChange_field_pro_precio_sin_subsidio(row, status);
	}
	if ("pro_valor_subsidio" == field) {
		displayChange_field_pro_valor_subsidio(row, status);
	}
	if ("pro_precio" == field) {
		displayChange_field_pro_precio(row, status);
	}
	if ("pro_por_ice" == field) {
		displayChange_field_pro_por_ice(row, status);
	}
	if ("tarifa_ice" == field) {
		displayChange_field_tarifa_ice(row, status);
	}
	if ("pro_base_ice" == field) {
		displayChange_field_pro_base_ice(row, status);
	}
	if ("total_ice" == field) {
		displayChange_field_total_ice(row, status);
	}
	if ("pro_por_iva" == field) {
		displayChange_field_pro_por_iva(row, status);
	}
	if ("tarifa_iva" == field) {
		displayChange_field_tarifa_iva(row, status);
	}
	if ("base_iva" == field) {
		displayChange_field_base_iva(row, status);
	}
	if ("total_iva" == field) {
		displayChange_field_total_iva(row, status);
	}
	if ("pro_por_irbpnr" == field) {
		displayChange_field_pro_por_irbpnr(row, status);
	}
	if ("tarifa_irbpnr" == field) {
		displayChange_field_tarifa_irbpnr(row, status);
	}
	if ("pro_base_irbpnr" == field) {
		displayChange_field_pro_base_irbpnr(row, status);
	}
	if ("total_irbpnr" == field) {
		displayChange_field_total_irbpnr(row, status);
	}
	if ("pro_iva" == field) {
		displayChange_field_pro_iva(row, status);
	}
	if ("precio_con_impuesto" == field) {
		displayChange_field_precio_con_impuesto(row, status);
	}
	if ("pro_ice" == field) {
		displayChange_field_pro_ice(row, status);
	}
	if ("pro_irbpnr" == field) {
		displayChange_field_pro_irbpnr(row, status);
	}
	if ("pro_compra" == field) {
		displayChange_field_pro_compra(row, status);
	}
	if ("pro_venta" == field) {
		displayChange_field_pro_venta(row, status);
	}
	if ("pro_stock" == field) {
		displayChange_field_pro_stock(row, status);
	}
	if ("pro_unidad" == field) {
		displayChange_field_pro_unidad(row, status);
	}
	if ("pro_cantidad_inventario" == field) {
		displayChange_field_pro_cantidad_inventario(row, status);
	}
	if ("pro_costo_promedio" == field) {
		displayChange_field_pro_costo_promedio(row, status);
	}
	if ("pro_total_inventario" == field) {
		displayChange_field_pro_total_inventario(row, status);
	}
}

function displayChange_field_pro_imagen(row, status) {
    var fieldId;
}

function displayChange_field_pro_empresa(row, status) {
    var fieldId;
}

function displayChange_field_pro_codigo(row, status) {
    var fieldId;
}

function displayChange_field_pro_codigo_aux(row, status) {
    var fieldId;
}

function displayChange_field_pro_descripcion(row, status) {
    var fieldId;
}

function displayChange_field_pro_categoria_producto(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_categoria_producto__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_categoria_producto" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_categoria_producto");
	}
}

function displayChange_field_pro_familia_producto(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_familia_producto__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_familia_producto" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_familia_producto");
	}
}

function displayChange_field_pro_grupo_compras(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_grupo_compras__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_grupo_compras" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_grupo_compras");
	}
}

function displayChange_field_pro_grupo_ventas(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_grupo_ventas__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_grupo_ventas" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_grupo_ventas");
	}
}

function displayChange_field_pro_estado(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_estado__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_estado" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_estado");
	}
}

function displayChange_field_pro_aplica_subsidio(row, status) {
    var fieldId;
}

function displayChange_field_pro_precio_sin_subsidio(row, status) {
    var fieldId;
}

function displayChange_field_pro_valor_subsidio(row, status) {
    var fieldId;
}

function displayChange_field_pro_precio(row, status) {
    var fieldId;
}

function displayChange_field_pro_por_ice(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_por_ice__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_por_ice" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_por_ice");
	}
}

function displayChange_field_tarifa_ice(row, status) {
    var fieldId;
}

function displayChange_field_pro_base_ice(row, status) {
    var fieldId;
}

function displayChange_field_total_ice(row, status) {
    var fieldId;
}

function displayChange_field_pro_por_iva(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_por_iva__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_por_iva" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_por_iva");
	}
}

function displayChange_field_tarifa_iva(row, status) {
    var fieldId;
}

function displayChange_field_base_iva(row, status) {
    var fieldId;
}

function displayChange_field_total_iva(row, status) {
    var fieldId;
}

function displayChange_field_pro_por_irbpnr(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_por_irbpnr__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_por_irbpnr" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_por_irbpnr");
	}
}

function displayChange_field_tarifa_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_pro_base_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_total_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_pro_iva(row, status) {
    var fieldId;
}

function displayChange_field_precio_con_impuesto(row, status) {
    var fieldId;
}

function displayChange_field_pro_ice(row, status) {
    var fieldId;
}

function displayChange_field_pro_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_pro_compra(row, status) {
    var fieldId;
}

function displayChange_field_pro_venta(row, status) {
    var fieldId;
}

function displayChange_field_pro_stock(row, status) {
    var fieldId;
}

function displayChange_field_pro_unidad(row, status) {
    var fieldId;
}

function displayChange_field_pro_cantidad_inventario(row, status) {
    var fieldId;
}

function displayChange_field_pro_costo_promedio(row, status) {
    var fieldId;
}

function displayChange_field_pro_total_inventario(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_pro_categoria_producto("all", "on");
	displayChange_field_pro_familia_producto("all", "on");
	displayChange_field_pro_grupo_compras("all", "on");
	displayChange_field_pro_grupo_ventas("all", "on");
	displayChange_field_pro_estado("all", "on");
	displayChange_field_pro_por_ice("all", "on");
	displayChange_field_pro_por_iva("all", "on");
	displayChange_field_pro_por_irbpnr("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_producto_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(29);
		}
	}
}
var jqCalcMonetPos = {};
var _scCalculatorBlurOk = {};

function scJQCalculatorAdd(iSeqRow) {
  _scCalculatorBlurOk["id_sc_field_tarifa_iva" + iSeqRow] = true;
  $("#id_sc_field_pro_precio" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_pro_precio" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_pro_precio" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_pro_precio" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['pro_precio']['symbol_grp']); ?>', <?php echo $this->field_config['pro_precio']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['pro_precio']['symbol_dec']); ?>', '');
      $(this).val(value);
      $(".calculator-popup").css("min-width", "200px");
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_pro_precio" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_pro_precio" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_pro_precio" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['pro_precio']['symbol_grp']); ?>', <?php echo $this->field_config['pro_precio']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['pro_precio']['symbol_dec']); ?>', 6, '');
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

  $("#id_sc_field_pro_base_ice" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_pro_base_ice" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_pro_base_ice" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_pro_base_ice" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['pro_base_ice']['symbol_grp']); ?>', <?php echo $this->field_config['pro_base_ice']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['pro_base_ice']['symbol_dec']); ?>', '');
      $(this).val(value);
      $(".calculator-popup").css("min-width", "200px");
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_pro_base_ice" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_pro_base_ice" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_pro_base_ice" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['pro_base_ice']['symbol_grp']); ?>', <?php echo $this->field_config['pro_base_ice']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['pro_base_ice']['symbol_dec']); ?>', 6, '');
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
  $("#id_sc_field_pro_imagen" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_del_producto_mob_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'pro_imagen'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    change: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_pro_imagen(data);
      if ('ok' != checkUploadSize) {
        e.preventDefault();
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
    },
    drop: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_pro_imagen(data);
      if ('ok' != checkUploadSize) {
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
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
        $("#id_img_loader_pro_imagen" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_pro_imagen" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : respMsg};
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
      $("#id_sc_field_pro_imagen" + iSeqRow).val("");
      $("#id_sc_field_pro_imagen_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_pro_imagen_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_pro_imagen = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_pro_imagen) ? "none" : "";
      $("#id_ajax_img_pro_imagen" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_pro_imagen" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_pro_imagen) {
        document.F1.temp_out_pro_imagen.value = var_ajax_img_thumb;
        document.F1.temp_out1_pro_imagen.value = var_ajax_img_pro_imagen;
      }
      else if (document.F1.temp_out_pro_imagen) {
        document.F1.temp_out_pro_imagen.value = var_ajax_img_pro_imagen;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_pro_imagen" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_pro_imagen" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_pro_imagen" + iSeqRow).css("display", "none");
      $("#id_ajax_link_pro_imagen" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_producto_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "pro_categoria_producto" == specificField) {
    scJQSelect2Add_pro_categoria_producto(seqRow);
  }
  if (null == specificField || "pro_familia_producto" == specificField) {
    scJQSelect2Add_pro_familia_producto(seqRow);
  }
  if (null == specificField || "pro_grupo_compras" == specificField) {
    scJQSelect2Add_pro_grupo_compras(seqRow);
  }
  if (null == specificField || "pro_grupo_ventas" == specificField) {
    scJQSelect2Add_pro_grupo_ventas(seqRow);
  }
  if (null == specificField || "pro_estado" == specificField) {
    scJQSelect2Add_pro_estado(seqRow);
  }
  if (null == specificField || "pro_por_ice" == specificField) {
    scJQSelect2Add_pro_por_ice(seqRow);
  }
  if (null == specificField || "pro_por_iva" == specificField) {
    scJQSelect2Add_pro_por_iva(seqRow);
  }
  if (null == specificField || "pro_por_irbpnr" == specificField) {
    scJQSelect2Add_pro_por_irbpnr(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_pro_categoria_producto(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_categoria_producto_obj" : "#id_sc_field_pro_categoria_producto" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pro_categoria_producto_obj',
      dropdownCssClass: 'css_pro_categoria_producto_obj',
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

function scJQSelect2Add_pro_familia_producto(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_familia_producto_obj" : "#id_sc_field_pro_familia_producto" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pro_familia_producto_obj',
      dropdownCssClass: 'css_pro_familia_producto_obj',
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

function scJQSelect2Add_pro_grupo_compras(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_grupo_compras_obj" : "#id_sc_field_pro_grupo_compras" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pro_grupo_compras_obj',
      dropdownCssClass: 'css_pro_grupo_compras_obj',
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

function scJQSelect2Add_pro_grupo_ventas(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_grupo_ventas_obj" : "#id_sc_field_pro_grupo_ventas" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pro_grupo_ventas_obj',
      dropdownCssClass: 'css_pro_grupo_ventas_obj',
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

function scJQSelect2Add_pro_estado(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_estado_obj" : "#id_sc_field_pro_estado" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pro_estado_obj',
      dropdownCssClass: 'css_pro_estado_obj',
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

function scJQSelect2Add_pro_por_ice(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_por_ice_obj" : "#id_sc_field_pro_por_ice" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pro_por_ice_obj',
      dropdownCssClass: 'css_pro_por_ice_obj',
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

function scJQSelect2Add_pro_por_iva(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_por_iva_obj" : "#id_sc_field_pro_por_iva" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pro_por_iva_obj',
      dropdownCssClass: 'css_pro_por_iva_obj',
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

function scJQSelect2Add_pro_por_irbpnr(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_por_irbpnr_obj" : "#id_sc_field_pro_por_irbpnr" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pro_por_irbpnr_obj',
      dropdownCssClass: 'css_pro_por_irbpnr_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_categoria_producto) { displayChange_field_pro_categoria_producto(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_familia_producto) { displayChange_field_pro_familia_producto(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_grupo_compras) { displayChange_field_pro_grupo_compras(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_grupo_ventas) { displayChange_field_pro_grupo_ventas(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_estado) { displayChange_field_pro_estado(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_por_ice) { displayChange_field_pro_por_ice(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_por_iva) { displayChange_field_pro_por_iva(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_por_irbpnr) { displayChange_field_pro_por_irbpnr(iLine, "on"); } }, 150);
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

function scCheckUploadExtensionSize_pro_imagen(thisField)
{
    if ("files" in thisField && thisField.files.length > 0) {
        thisFileExtension = scGetFileExtension(thisField.files[0].name);


        if (!["png", "jpeg", "jpg"].includes(thisFileExtension)) {
            return 'err_extension||' + thisFileExtension.toUpperCase();
        }
    }

    return 'ok';
}


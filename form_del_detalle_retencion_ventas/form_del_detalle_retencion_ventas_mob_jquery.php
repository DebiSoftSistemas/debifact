
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
  scEventControl_data["dr_cod_doc_sustento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_serie_doc_sustento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_secuencia_doc_sustento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_fecha_emision_doc_sustento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_id_factura_venta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_impuesto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_codigo_retencion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_base_imponible" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_porcentaje_retencion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_valor_retenido" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["dr_retencion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["dr_cod_doc_sustento" + iSeqRow] && scEventControl_data["dr_cod_doc_sustento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_cod_doc_sustento" + iSeqRow] && scEventControl_data["dr_cod_doc_sustento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_serie_doc_sustento" + iSeqRow] && scEventControl_data["dr_serie_doc_sustento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_serie_doc_sustento" + iSeqRow] && scEventControl_data["dr_serie_doc_sustento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_secuencia_doc_sustento" + iSeqRow] && scEventControl_data["dr_secuencia_doc_sustento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_secuencia_doc_sustento" + iSeqRow] && scEventControl_data["dr_secuencia_doc_sustento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_fecha_emision_doc_sustento" + iSeqRow] && scEventControl_data["dr_fecha_emision_doc_sustento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_fecha_emision_doc_sustento" + iSeqRow] && scEventControl_data["dr_fecha_emision_doc_sustento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_empresa" + iSeqRow] && scEventControl_data["dr_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_empresa" + iSeqRow] && scEventControl_data["dr_empresa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_id_factura_venta" + iSeqRow] && scEventControl_data["dr_id_factura_venta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_id_factura_venta" + iSeqRow] && scEventControl_data["dr_id_factura_venta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_impuesto" + iSeqRow] && scEventControl_data["dr_impuesto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_impuesto" + iSeqRow] && scEventControl_data["dr_impuesto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_codigo_retencion" + iSeqRow] && scEventControl_data["dr_codigo_retencion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_codigo_retencion" + iSeqRow] && scEventControl_data["dr_codigo_retencion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_base_imponible" + iSeqRow] && scEventControl_data["dr_base_imponible" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_base_imponible" + iSeqRow] && scEventControl_data["dr_base_imponible" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_porcentaje_retencion" + iSeqRow] && scEventControl_data["dr_porcentaje_retencion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_porcentaje_retencion" + iSeqRow] && scEventControl_data["dr_porcentaje_retencion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_valor_retenido" + iSeqRow] && scEventControl_data["dr_valor_retenido" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_valor_retenido" + iSeqRow] && scEventControl_data["dr_valor_retenido" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_id" + iSeqRow] && scEventControl_data["dr_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_id" + iSeqRow] && scEventControl_data["dr_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["dr_retencion" + iSeqRow] && scEventControl_data["dr_retencion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["dr_retencion" + iSeqRow] && scEventControl_data["dr_retencion" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("dr_cod_doc_sustento" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("dr_impuesto" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("dr_codigo_retencion" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("dr_base_imponible" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("dr_codigo_retencion" + iSeq == fieldName) {
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
  $('#id_sc_field_dr_id' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_id_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_retencion' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_retencion_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_retencion_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_empresa' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_empresa_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_id_factura_venta' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_id_factura_venta_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_id_factura_venta_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_cod_doc_sustento' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_cod_doc_sustento_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_cod_doc_sustento_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_serie_doc_sustento' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_serie_doc_sustento_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_serie_doc_sustento_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_secuencia_doc_sustento' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_secuencia_doc_sustento_onblur(this, iSeqRow) })
                                                       .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_secuencia_doc_sustento_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_fecha_emision_doc_sustento' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_fecha_emision_doc_sustento_onblur(this, iSeqRow) })
                                                           .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_fecha_emision_doc_sustento_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_impuesto' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_impuesto_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_detalle_retencion_ventas_dr_impuesto_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_impuesto_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_codigo_retencion' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_codigo_retencion_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_del_detalle_retencion_ventas_dr_codigo_retencion_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_codigo_retencion_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_base_imponible' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_base_imponible_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_detalle_retencion_ventas_dr_base_imponible_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_base_imponible_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_porcentaje_retencion' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_porcentaje_retencion_onblur(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_porcentaje_retencion_onfocus(this, iSeqRow) });
  $('#id_sc_field_dr_valor_retenido' + iSeqRow).bind('blur', function() { sc_form_del_detalle_retencion_ventas_dr_valor_retenido_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_detalle_retencion_ventas_dr_valor_retenido_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_del_detalle_retencion_ventas_dr_id_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_id();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_retencion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_retencion();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_retencion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_empresa();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_id_factura_venta_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_id_factura_venta();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_id_factura_venta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_cod_doc_sustento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_cod_doc_sustento();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_cod_doc_sustento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_serie_doc_sustento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_serie_doc_sustento();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_serie_doc_sustento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_secuencia_doc_sustento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_secuencia_doc_sustento();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_secuencia_doc_sustento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_fecha_emision_doc_sustento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_fecha_emision_doc_sustento();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_fecha_emision_doc_sustento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_impuesto_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_impuesto();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_impuesto_onchange(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_refresh_dr_impuesto();
}

function sc_form_del_detalle_retencion_ventas_dr_impuesto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_codigo_retencion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_codigo_retencion();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_codigo_retencion_onchange(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_event_dr_codigo_retencion_onchange();
}

function sc_form_del_detalle_retencion_ventas_dr_codigo_retencion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_base_imponible_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_base_imponible();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_base_imponible_onchange(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_event_dr_base_imponible_onchange();
}

function sc_form_del_detalle_retencion_ventas_dr_base_imponible_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_porcentaje_retencion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_porcentaje_retencion();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_porcentaje_retencion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_valor_retenido_onblur(oThis, iSeqRow) {
  do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_valor_retenido();
  scCssBlur(oThis);
}

function sc_form_del_detalle_retencion_ventas_dr_valor_retenido_onfocus(oThis, iSeqRow) {
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
}

function displayChange_block_0(status) {
	displayChange_field("dr_cod_doc_sustento", "", status);
	displayChange_field("dr_serie_doc_sustento", "", status);
	displayChange_field("dr_secuencia_doc_sustento", "", status);
	displayChange_field("dr_fecha_emision_doc_sustento", "", status);
	displayChange_field("dr_empresa", "", status);
	displayChange_field("dr_id_factura_venta", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("dr_impuesto", "", status);
	displayChange_field("dr_codigo_retencion", "", status);
	displayChange_field("dr_base_imponible", "", status);
	displayChange_field("dr_porcentaje_retencion", "", status);
	displayChange_field("dr_valor_retenido", "", status);
	displayChange_field("dr_id", "", status);
	displayChange_field("dr_retencion", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_dr_cod_doc_sustento(row, status);
	displayChange_field_dr_serie_doc_sustento(row, status);
	displayChange_field_dr_secuencia_doc_sustento(row, status);
	displayChange_field_dr_fecha_emision_doc_sustento(row, status);
	displayChange_field_dr_empresa(row, status);
	displayChange_field_dr_id_factura_venta(row, status);
	displayChange_field_dr_impuesto(row, status);
	displayChange_field_dr_codigo_retencion(row, status);
	displayChange_field_dr_base_imponible(row, status);
	displayChange_field_dr_porcentaje_retencion(row, status);
	displayChange_field_dr_valor_retenido(row, status);
	displayChange_field_dr_id(row, status);
	displayChange_field_dr_retencion(row, status);
}

function displayChange_field(field, row, status) {
	if ("dr_cod_doc_sustento" == field) {
		displayChange_field_dr_cod_doc_sustento(row, status);
	}
	if ("dr_serie_doc_sustento" == field) {
		displayChange_field_dr_serie_doc_sustento(row, status);
	}
	if ("dr_secuencia_doc_sustento" == field) {
		displayChange_field_dr_secuencia_doc_sustento(row, status);
	}
	if ("dr_fecha_emision_doc_sustento" == field) {
		displayChange_field_dr_fecha_emision_doc_sustento(row, status);
	}
	if ("dr_empresa" == field) {
		displayChange_field_dr_empresa(row, status);
	}
	if ("dr_id_factura_venta" == field) {
		displayChange_field_dr_id_factura_venta(row, status);
	}
	if ("dr_impuesto" == field) {
		displayChange_field_dr_impuesto(row, status);
	}
	if ("dr_codigo_retencion" == field) {
		displayChange_field_dr_codigo_retencion(row, status);
	}
	if ("dr_base_imponible" == field) {
		displayChange_field_dr_base_imponible(row, status);
	}
	if ("dr_porcentaje_retencion" == field) {
		displayChange_field_dr_porcentaje_retencion(row, status);
	}
	if ("dr_valor_retenido" == field) {
		displayChange_field_dr_valor_retenido(row, status);
	}
	if ("dr_id" == field) {
		displayChange_field_dr_id(row, status);
	}
	if ("dr_retencion" == field) {
		displayChange_field_dr_retencion(row, status);
	}
}

function displayChange_field_dr_cod_doc_sustento(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_dr_cod_doc_sustento__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_dr_cod_doc_sustento" + row).select2("destroy");
		}
		scJQSelect2Add(row, "dr_cod_doc_sustento");
	}
}

function displayChange_field_dr_serie_doc_sustento(row, status) {
    var fieldId;
}

function displayChange_field_dr_secuencia_doc_sustento(row, status) {
    var fieldId;
}

function displayChange_field_dr_fecha_emision_doc_sustento(row, status) {
    var fieldId;
}

function displayChange_field_dr_empresa(row, status) {
    var fieldId;
}

function displayChange_field_dr_id_factura_venta(row, status) {
    var fieldId;
}

function displayChange_field_dr_impuesto(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_dr_impuesto__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_dr_impuesto" + row).select2("destroy");
		}
		scJQSelect2Add(row, "dr_impuesto");
	}
}

function displayChange_field_dr_codigo_retencion(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_dr_codigo_retencion__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_dr_codigo_retencion" + row).select2("destroy");
		}
		scJQSelect2Add(row, "dr_codigo_retencion");
	}
}

function displayChange_field_dr_base_imponible(row, status) {
    var fieldId;
}

function displayChange_field_dr_porcentaje_retencion(row, status) {
    var fieldId;
}

function displayChange_field_dr_valor_retenido(row, status) {
    var fieldId;
}

function displayChange_field_dr_id(row, status) {
    var fieldId;
}

function displayChange_field_dr_retencion(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_dr_cod_doc_sustento("all", "on");
	displayChange_field_dr_impuesto("all", "on");
	displayChange_field_dr_codigo_retencion("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_detalle_retencion_ventas_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(45);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_dr_fecha_emision_doc_sustento" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_dr_fecha_emision_doc_sustento" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_del_detalle_retencion_ventas_mob_validate_dr_fecha_emision_doc_sustento(iSeqRow); }, 200);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['dr_fecha_emision_doc_sustento']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_detalle_retencion_ventas_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "dr_cod_doc_sustento" == specificField) {
    scJQSelect2Add_dr_cod_doc_sustento(seqRow);
  }
  if (null == specificField || "dr_impuesto" == specificField) {
    scJQSelect2Add_dr_impuesto(seqRow);
  }
  if (null == specificField || "dr_codigo_retencion" == specificField) {
    scJQSelect2Add_dr_codigo_retencion(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_dr_cod_doc_sustento(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_dr_cod_doc_sustento_obj" : "#id_sc_field_dr_cod_doc_sustento" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_dr_cod_doc_sustento_obj',
      dropdownCssClass: 'css_dr_cod_doc_sustento_obj',
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

function scJQSelect2Add_dr_impuesto(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_dr_impuesto_obj" : "#id_sc_field_dr_impuesto" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_dr_impuesto_obj',
      dropdownCssClass: 'css_dr_impuesto_obj',
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

function scJQSelect2Add_dr_codigo_retencion(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_dr_codigo_retencion_obj" : "#id_sc_field_dr_codigo_retencion" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_dr_codigo_retencion_obj',
      dropdownCssClass: 'css_dr_codigo_retencion_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_dr_cod_doc_sustento) { displayChange_field_dr_cod_doc_sustento(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_dr_impuesto) { displayChange_field_dr_impuesto(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_dr_codigo_retencion) { displayChange_field_dr_codigo_retencion(iLine, "on"); } }, 150);
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


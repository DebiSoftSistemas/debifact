
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
  scEventControl_data["est_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_logo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_codigo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_padronrimpe" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_leyenda_rimpe" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_iva_diferenciado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_pais" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_provincia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_canton" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["est_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["bodega" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["est_id" + iSeqRow] && scEventControl_data["est_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_id" + iSeqRow] && scEventControl_data["est_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_empresa" + iSeqRow] && scEventControl_data["est_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_empresa" + iSeqRow] && scEventControl_data["est_empresa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_nombre" + iSeqRow] && scEventControl_data["est_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_nombre" + iSeqRow] && scEventControl_data["est_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_codigo" + iSeqRow] && scEventControl_data["est_codigo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_codigo" + iSeqRow] && scEventControl_data["est_codigo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_padronrimpe" + iSeqRow] && scEventControl_data["est_padronrimpe" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_padronrimpe" + iSeqRow] && scEventControl_data["est_padronrimpe" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_leyenda_rimpe" + iSeqRow] && scEventControl_data["est_leyenda_rimpe" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_leyenda_rimpe" + iSeqRow] && scEventControl_data["est_leyenda_rimpe" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_iva_diferenciado" + iSeqRow] && scEventControl_data["est_iva_diferenciado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_iva_diferenciado" + iSeqRow] && scEventControl_data["est_iva_diferenciado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_pais" + iSeqRow] && scEventControl_data["est_pais" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_pais" + iSeqRow] && scEventControl_data["est_pais" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_provincia" + iSeqRow] && scEventControl_data["est_provincia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_provincia" + iSeqRow] && scEventControl_data["est_provincia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_canton" + iSeqRow] && scEventControl_data["est_canton" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_canton" + iSeqRow] && scEventControl_data["est_canton" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_direccion" + iSeqRow] && scEventControl_data["est_direccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_direccion" + iSeqRow] && scEventControl_data["est_direccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_telefono" + iSeqRow] && scEventControl_data["est_telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_telefono" + iSeqRow] && scEventControl_data["est_telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["est_estado" + iSeqRow] && scEventControl_data["est_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["est_estado" + iSeqRow] && scEventControl_data["est_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bodega" + iSeqRow] && scEventControl_data["bodega" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bodega" + iSeqRow] && scEventControl_data["bodega" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("est_leyenda_rimpe" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("est_pais" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("est_provincia" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("est_canton" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("est_estado" + iSeq == fieldName) {
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
  $('#id_sc_field_est_id' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_id_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_del_establecimiento_est_id_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_del_establecimiento_est_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_empresa' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_empresa_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_establecimiento_est_empresa_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_establecimiento_est_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_nombre' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_nombre_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_establecimiento_est_nombre_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_establecimiento_est_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_codigo' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_codigo_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_establecimiento_est_codigo_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_establecimiento_est_codigo_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_pais' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_pais_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_del_establecimiento_est_pais_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_establecimiento_est_pais_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_provincia' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_provincia_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_establecimiento_est_provincia_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_establecimiento_est_provincia_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_canton' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_canton_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_establecimiento_est_canton_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_establecimiento_est_canton_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_direccion' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_direccion_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_establecimiento_est_direccion_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_establecimiento_est_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_estado' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_estado_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_establecimiento_est_estado_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_establecimiento_est_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_logo' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_logo_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_del_establecimiento_est_logo_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_establecimiento_est_logo_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_telefono' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_telefono_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_establecimiento_est_telefono_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_establecimiento_est_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_padronrimpe' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_padronrimpe_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_establecimiento_est_padronrimpe_onchange(this, iSeqRow) })
                                             .bind('click', function() { sc_form_del_establecimiento_est_padronrimpe_onclick(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_establecimiento_est_padronrimpe_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_iva_diferenciado' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_iva_diferenciado_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_establecimiento_est_iva_diferenciado_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_establecimiento_est_iva_diferenciado_onfocus(this, iSeqRow) });
  $('#id_sc_field_est_leyenda_rimpe' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_est_leyenda_rimpe_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_establecimiento_est_leyenda_rimpe_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_establecimiento_est_leyenda_rimpe_onfocus(this, iSeqRow) });
  $('#id_sc_field_bodega' + iSeqRow).bind('blur', function() { sc_form_del_establecimiento_bodega_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_del_establecimiento_bodega_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_del_establecimiento_bodega_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-est_padronrimpe' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-est_iva_diferenciado' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-bodega' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_del_establecimiento_est_id_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_id();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_id_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_empresa();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_nombre();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_nombre_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_codigo_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_codigo();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_codigo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_codigo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_pais_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_pais();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_pais_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_establecimiento_refresh_est_pais();
}

function sc_form_del_establecimiento_est_pais_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_provincia_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_provincia();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_provincia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_establecimiento_refresh_est_provincia();
}

function sc_form_del_establecimiento_est_provincia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_canton_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_canton();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_canton_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_canton_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_direccion();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_direccion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_estado();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_logo_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_logo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_logo_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_telefono();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_telefono_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_padronrimpe_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_padronrimpe();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_padronrimpe_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_padronrimpe_onclick(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_event_est_padronrimpe_onclick();
}

function sc_form_del_establecimiento_est_padronrimpe_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_iva_diferenciado_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_iva_diferenciado();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_iva_diferenciado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_iva_diferenciado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_est_leyenda_rimpe_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_est_leyenda_rimpe();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_est_leyenda_rimpe_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_est_leyenda_rimpe_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_establecimiento_bodega_onblur(oThis, iSeqRow) {
  do_ajax_form_del_establecimiento_validate_bodega();
  scCssBlur(oThis);
}

function sc_form_del_establecimiento_bodega_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_establecimiento_bodega_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("est_id", "", status);
	displayChange_field("est_logo", "", status);
	displayChange_field("est_empresa", "", status);
	displayChange_field("est_nombre", "", status);
	displayChange_field("est_codigo", "", status);
	displayChange_field("est_padronrimpe", "", status);
	displayChange_field("est_leyenda_rimpe", "", status);
	displayChange_field("est_iva_diferenciado", "", status);
	displayChange_field("est_pais", "", status);
	displayChange_field("est_provincia", "", status);
	displayChange_field("est_canton", "", status);
	displayChange_field("est_direccion", "", status);
	displayChange_field("est_telefono", "", status);
	displayChange_field("est_estado", "", status);
	displayChange_field("bodega", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_est_id(row, status);
	displayChange_field_est_logo(row, status);
	displayChange_field_est_empresa(row, status);
	displayChange_field_est_nombre(row, status);
	displayChange_field_est_codigo(row, status);
	displayChange_field_est_padronrimpe(row, status);
	displayChange_field_est_leyenda_rimpe(row, status);
	displayChange_field_est_iva_diferenciado(row, status);
	displayChange_field_est_pais(row, status);
	displayChange_field_est_provincia(row, status);
	displayChange_field_est_canton(row, status);
	displayChange_field_est_direccion(row, status);
	displayChange_field_est_telefono(row, status);
	displayChange_field_est_estado(row, status);
	displayChange_field_bodega(row, status);
}

function displayChange_field(field, row, status) {
	if ("est_id" == field) {
		displayChange_field_est_id(row, status);
	}
	if ("est_logo" == field) {
		displayChange_field_est_logo(row, status);
	}
	if ("est_empresa" == field) {
		displayChange_field_est_empresa(row, status);
	}
	if ("est_nombre" == field) {
		displayChange_field_est_nombre(row, status);
	}
	if ("est_codigo" == field) {
		displayChange_field_est_codigo(row, status);
	}
	if ("est_padronrimpe" == field) {
		displayChange_field_est_padronrimpe(row, status);
	}
	if ("est_leyenda_rimpe" == field) {
		displayChange_field_est_leyenda_rimpe(row, status);
	}
	if ("est_iva_diferenciado" == field) {
		displayChange_field_est_iva_diferenciado(row, status);
	}
	if ("est_pais" == field) {
		displayChange_field_est_pais(row, status);
	}
	if ("est_provincia" == field) {
		displayChange_field_est_provincia(row, status);
	}
	if ("est_canton" == field) {
		displayChange_field_est_canton(row, status);
	}
	if ("est_direccion" == field) {
		displayChange_field_est_direccion(row, status);
	}
	if ("est_telefono" == field) {
		displayChange_field_est_telefono(row, status);
	}
	if ("est_estado" == field) {
		displayChange_field_est_estado(row, status);
	}
	if ("bodega" == field) {
		displayChange_field_bodega(row, status);
	}
}

function displayChange_field_est_id(row, status) {
    var fieldId;
}

function displayChange_field_est_logo(row, status) {
    var fieldId;
}

function displayChange_field_est_empresa(row, status) {
    var fieldId;
}

function displayChange_field_est_nombre(row, status) {
    var fieldId;
}

function displayChange_field_est_codigo(row, status) {
    var fieldId;
}

function displayChange_field_est_padronrimpe(row, status) {
    var fieldId;
}

function displayChange_field_est_leyenda_rimpe(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_est_leyenda_rimpe__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_est_leyenda_rimpe" + row).select2("destroy");
		}
		scJQSelect2Add(row, "est_leyenda_rimpe");
	}
}

function displayChange_field_est_iva_diferenciado(row, status) {
    var fieldId;
}

function displayChange_field_est_pais(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_est_pais__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_est_pais" + row).select2("destroy");
		}
		scJQSelect2Add(row, "est_pais");
	}
}

function displayChange_field_est_provincia(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_est_provincia__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_est_provincia" + row).select2("destroy");
		}
		scJQSelect2Add(row, "est_provincia");
	}
}

function displayChange_field_est_canton(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_est_canton__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_est_canton" + row).select2("destroy");
		}
		scJQSelect2Add(row, "est_canton");
	}
}

function displayChange_field_est_direccion(row, status) {
    var fieldId;
}

function displayChange_field_est_telefono(row, status) {
    var fieldId;
}

function displayChange_field_est_estado(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_est_estado__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_est_estado" + row).select2("destroy");
		}
		scJQSelect2Add(row, "est_estado");
	}
}

function displayChange_field_bodega(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_est_leyenda_rimpe("all", "on");
	displayChange_field_est_pais("all", "on");
	displayChange_field_est_provincia("all", "on");
	displayChange_field_est_canton("all", "on");
	displayChange_field_est_estado("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_establecimiento_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(32);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_est_logo" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_del_establecimiento_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'est_logo'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    change: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_est_logo(data);
      if ('ok' != checkUploadSize) {
        e.preventDefault();
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
    },
    drop: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_est_logo(data);
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
        $("#id_img_loader_est_logo" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_est_logo" + iSeqRow).hide();
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
      $("#id_sc_field_est_logo" + iSeqRow).val("");
      $("#id_sc_field_est_logo_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_est_logo_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_est_logo = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_est_logo) ? "none" : "";
      $("#id_ajax_img_est_logo" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_est_logo" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_est_logo) {
        document.F1.temp_out_est_logo.value = var_ajax_img_thumb;
        document.F1.temp_out1_est_logo.value = var_ajax_img_est_logo;
      }
      else if (document.F1.temp_out_est_logo) {
        document.F1.temp_out_est_logo.value = var_ajax_img_est_logo;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_est_logo" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_est_logo" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_est_logo" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_est_logo" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_establecimiento')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "est_leyenda_rimpe" == specificField) {
    scJQSelect2Add_est_leyenda_rimpe(seqRow);
  }
  if (null == specificField || "est_pais" == specificField) {
    scJQSelect2Add_est_pais(seqRow);
  }
  if (null == specificField || "est_provincia" == specificField) {
    scJQSelect2Add_est_provincia(seqRow);
  }
  if (null == specificField || "est_canton" == specificField) {
    scJQSelect2Add_est_canton(seqRow);
  }
  if (null == specificField || "est_estado" == specificField) {
    scJQSelect2Add_est_estado(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_est_leyenda_rimpe(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_est_leyenda_rimpe_obj" : "#id_sc_field_est_leyenda_rimpe" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_est_leyenda_rimpe_obj',
      dropdownCssClass: 'css_est_leyenda_rimpe_obj',
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

function scJQSelect2Add_est_pais(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_est_pais_obj" : "#id_sc_field_est_pais" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_est_pais_obj',
      dropdownCssClass: 'css_est_pais_obj',
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

function scJQSelect2Add_est_provincia(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_est_provincia_obj" : "#id_sc_field_est_provincia" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_est_provincia_obj',
      dropdownCssClass: 'css_est_provincia_obj',
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

function scJQSelect2Add_est_canton(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_est_canton_obj" : "#id_sc_field_est_canton" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_est_canton_obj',
      dropdownCssClass: 'css_est_canton_obj',
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

function scJQSelect2Add_est_estado(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_est_estado_obj" : "#id_sc_field_est_estado" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_est_estado_obj',
      dropdownCssClass: 'css_est_estado_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_est_leyenda_rimpe) { displayChange_field_est_leyenda_rimpe(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_est_pais) { displayChange_field_est_pais(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_est_provincia) { displayChange_field_est_provincia(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_est_canton) { displayChange_field_est_canton(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_est_estado) { displayChange_field_est_estado(iLine, "on"); } }, 150);
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

function scCheckUploadExtensionSize_est_logo(thisField)
{
    if ("files" in thisField && thisField.files.length > 0) {
        thisFileExtension = scGetFileExtension(thisField.files[0].name);


        if (!["jpg", "png"].includes(thisFileExtension)) {
            return 'err_extension||' + thisFileExtension.toUpperCase();
        }
    }

    return 'ok';
}


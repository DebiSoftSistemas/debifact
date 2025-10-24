
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
  scEventControl_data["pr_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_tipo_identificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_tipo_persona" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_identificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_parte_relacionada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_celular" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_pais" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_provincia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_ciudad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pr_retencion_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["pr_id" + iSeqRow] && scEventControl_data["pr_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_id" + iSeqRow] && scEventControl_data["pr_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_empresa" + iSeqRow] && scEventControl_data["pr_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_empresa" + iSeqRow] && scEventControl_data["pr_empresa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_tipo_identificacion" + iSeqRow] && scEventControl_data["pr_tipo_identificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_tipo_identificacion" + iSeqRow] && scEventControl_data["pr_tipo_identificacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_tipo_persona" + iSeqRow] && scEventControl_data["pr_tipo_persona" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_tipo_persona" + iSeqRow] && scEventControl_data["pr_tipo_persona" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_identificacion" + iSeqRow] && scEventControl_data["pr_identificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_identificacion" + iSeqRow] && scEventControl_data["pr_identificacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_nombre" + iSeqRow] && scEventControl_data["pr_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_nombre" + iSeqRow] && scEventControl_data["pr_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_parte_relacionada" + iSeqRow] && scEventControl_data["pr_parte_relacionada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_parte_relacionada" + iSeqRow] && scEventControl_data["pr_parte_relacionada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_email" + iSeqRow] && scEventControl_data["pr_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_email" + iSeqRow] && scEventControl_data["pr_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_telefono" + iSeqRow] && scEventControl_data["pr_telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_telefono" + iSeqRow] && scEventControl_data["pr_telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_celular" + iSeqRow] && scEventControl_data["pr_celular" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_celular" + iSeqRow] && scEventControl_data["pr_celular" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_pais" + iSeqRow] && scEventControl_data["pr_pais" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_pais" + iSeqRow] && scEventControl_data["pr_pais" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_provincia" + iSeqRow] && scEventControl_data["pr_provincia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_provincia" + iSeqRow] && scEventControl_data["pr_provincia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_ciudad" + iSeqRow] && scEventControl_data["pr_ciudad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_ciudad" + iSeqRow] && scEventControl_data["pr_ciudad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_direccion" + iSeqRow] && scEventControl_data["pr_direccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_direccion" + iSeqRow] && scEventControl_data["pr_direccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pr_retencion_iva" + iSeqRow] && scEventControl_data["pr_retencion_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pr_retencion_iva" + iSeqRow] && scEventControl_data["pr_retencion_iva" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("pr_tipo_identificacion" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pr_tipo_persona" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pr_pais" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pr_provincia" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pr_ciudad" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pr_retencion_iva" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pr_tipo_identificacion" + iSeq == fieldName) {
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
  $('#id_sc_field_pr_id' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_id_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_del_proveedor_pr_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_empresa' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_empresa_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_proveedor_pr_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_nombre' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_nombre_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_proveedor_pr_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_tipo_identificacion' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_tipo_identificacion_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_del_proveedor_pr_tipo_identificacion_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_del_proveedor_pr_tipo_identificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_identificacion' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_identificacion_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_proveedor_pr_identificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_pais' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_pais_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_proveedor_pr_pais_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_proveedor_pr_pais_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_provincia' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_provincia_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_proveedor_pr_provincia_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_proveedor_pr_provincia_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_ciudad' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_ciudad_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_proveedor_pr_ciudad_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_direccion' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_direccion_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_proveedor_pr_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_telefono' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_telefono_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_proveedor_pr_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_celular' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_celular_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_proveedor_pr_celular_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_email' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_email_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_proveedor_pr_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_retencion_iva' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_retencion_iva_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_proveedor_pr_retencion_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_parte_relacionada' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_parte_relacionada_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_proveedor_pr_parte_relacionada_onfocus(this, iSeqRow) });
  $('#id_sc_field_pr_tipo_persona' + iSeqRow).bind('blur', function() { sc_form_del_proveedor_pr_tipo_persona_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_proveedor_pr_tipo_persona_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-pr_parte_relacionada' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_del_proveedor_pr_id_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_id();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_empresa();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_nombre();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_tipo_identificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_tipo_identificacion();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_tipo_identificacion_onchange(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_event_pr_tipo_identificacion_onchange();
}

function sc_form_del_proveedor_pr_tipo_identificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_identificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_identificacion();
  scCssBlur(oThis);
  do_ajax_form_del_proveedor_mob_event_pr_identificacion_onblur();
}

function sc_form_del_proveedor_pr_identificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_pais_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_pais();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_pais_onchange(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_refresh_pr_pais();
}

function sc_form_del_proveedor_pr_pais_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_provincia_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_provincia();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_provincia_onchange(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_refresh_pr_provincia();
}

function sc_form_del_proveedor_pr_provincia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_ciudad_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_ciudad();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_ciudad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_direccion();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_telefono();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_celular_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_celular();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_celular_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_email_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_email();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_retencion_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_retencion_iva();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_retencion_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_parte_relacionada_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_parte_relacionada();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_parte_relacionada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_proveedor_pr_tipo_persona_onblur(oThis, iSeqRow) {
  do_ajax_form_del_proveedor_mob_validate_pr_tipo_persona();
  scCssBlur(oThis);
}

function sc_form_del_proveedor_pr_tipo_persona_onfocus(oThis, iSeqRow) {
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
}

function displayChange_block_0(status) {
	displayChange_field("pr_id", "", status);
	displayChange_field("pr_empresa", "", status);
	displayChange_field("pr_tipo_identificacion", "", status);
	displayChange_field("pr_tipo_persona", "", status);
	displayChange_field("pr_identificacion", "", status);
	displayChange_field("pr_nombre", "", status);
	displayChange_field("pr_parte_relacionada", "", status);
	displayChange_field("pr_email", "", status);
	displayChange_field("pr_telefono", "", status);
	displayChange_field("pr_celular", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("pr_pais", "", status);
	displayChange_field("pr_provincia", "", status);
	displayChange_field("pr_ciudad", "", status);
	displayChange_field("pr_direccion", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("pr_retencion_iva", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_pr_id(row, status);
	displayChange_field_pr_empresa(row, status);
	displayChange_field_pr_tipo_identificacion(row, status);
	displayChange_field_pr_tipo_persona(row, status);
	displayChange_field_pr_identificacion(row, status);
	displayChange_field_pr_nombre(row, status);
	displayChange_field_pr_parte_relacionada(row, status);
	displayChange_field_pr_email(row, status);
	displayChange_field_pr_telefono(row, status);
	displayChange_field_pr_celular(row, status);
	displayChange_field_pr_pais(row, status);
	displayChange_field_pr_provincia(row, status);
	displayChange_field_pr_ciudad(row, status);
	displayChange_field_pr_direccion(row, status);
	displayChange_field_pr_retencion_iva(row, status);
}

function displayChange_field(field, row, status) {
	if ("pr_id" == field) {
		displayChange_field_pr_id(row, status);
	}
	if ("pr_empresa" == field) {
		displayChange_field_pr_empresa(row, status);
	}
	if ("pr_tipo_identificacion" == field) {
		displayChange_field_pr_tipo_identificacion(row, status);
	}
	if ("pr_tipo_persona" == field) {
		displayChange_field_pr_tipo_persona(row, status);
	}
	if ("pr_identificacion" == field) {
		displayChange_field_pr_identificacion(row, status);
	}
	if ("pr_nombre" == field) {
		displayChange_field_pr_nombre(row, status);
	}
	if ("pr_parte_relacionada" == field) {
		displayChange_field_pr_parte_relacionada(row, status);
	}
	if ("pr_email" == field) {
		displayChange_field_pr_email(row, status);
	}
	if ("pr_telefono" == field) {
		displayChange_field_pr_telefono(row, status);
	}
	if ("pr_celular" == field) {
		displayChange_field_pr_celular(row, status);
	}
	if ("pr_pais" == field) {
		displayChange_field_pr_pais(row, status);
	}
	if ("pr_provincia" == field) {
		displayChange_field_pr_provincia(row, status);
	}
	if ("pr_ciudad" == field) {
		displayChange_field_pr_ciudad(row, status);
	}
	if ("pr_direccion" == field) {
		displayChange_field_pr_direccion(row, status);
	}
	if ("pr_retencion_iva" == field) {
		displayChange_field_pr_retencion_iva(row, status);
	}
}

function displayChange_field_pr_id(row, status) {
    var fieldId;
}

function displayChange_field_pr_empresa(row, status) {
    var fieldId;
}

function displayChange_field_pr_tipo_identificacion(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pr_tipo_identificacion__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pr_tipo_identificacion" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pr_tipo_identificacion");
	}
}

function displayChange_field_pr_tipo_persona(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pr_tipo_persona__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pr_tipo_persona" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pr_tipo_persona");
	}
}

function displayChange_field_pr_identificacion(row, status) {
    var fieldId;
}

function displayChange_field_pr_nombre(row, status) {
    var fieldId;
}

function displayChange_field_pr_parte_relacionada(row, status) {
    var fieldId;
}

function displayChange_field_pr_email(row, status) {
    var fieldId;
}

function displayChange_field_pr_telefono(row, status) {
    var fieldId;
}

function displayChange_field_pr_celular(row, status) {
    var fieldId;
}

function displayChange_field_pr_pais(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pr_pais__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pr_pais" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pr_pais");
	}
}

function displayChange_field_pr_provincia(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pr_provincia__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pr_provincia" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pr_provincia");
	}
}

function displayChange_field_pr_ciudad(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pr_ciudad__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pr_ciudad" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pr_ciudad");
	}
}

function displayChange_field_pr_direccion(row, status) {
    var fieldId;
}

function displayChange_field_pr_retencion_iva(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pr_retencion_iva__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pr_retencion_iva" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pr_retencion_iva");
	}
}

function scRecreateSelect2() {
	displayChange_field_pr_tipo_identificacion("all", "on");
	displayChange_field_pr_tipo_persona("all", "on");
	displayChange_field_pr_pais("all", "on");
	displayChange_field_pr_provincia("all", "on");
	displayChange_field_pr_ciudad("all", "on");
	displayChange_field_pr_retencion_iva("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_proveedor_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(30);
		}
	}
}
function scJQPopupAdd(iSeqRow) {
  $('.scFormPopupBubble' + iSeqRow).each(function() {
    var distance = 10;
    var time = 250;
    var hideDelay = 500;
    var hideDelayTimer = null;
    var beingShown = false;
    var shown = false;
    var trigger = $('.scFormPopupTrigger', this);
    var info = $('.scFormPopup', this).css('opacity', 0);
    $([trigger.get(0), info.get(0)]).mouseover(function() {
      if (hideDelayTimer) clearTimeout(hideDelayTimer);
      if (beingShown || shown) {
        // don't trigger the animation again
        return;
      } else {
        // reset position of info box
        beingShown = true;
        info.css({
          top: trigger.offset().top - (info.height() - trigger.height()),
          left: trigger.offset().left - ((info.width() - trigger.width()) / 2),
          display: 'block'
        }).animate({
          top: '-=' + distance + 'px',
          opacity: 1
        }, time, 'swing', function() {
          beingShown = false;
          shown = true;
        });
      }
      return false;
      }).mouseout(function() {
      if (hideDelayTimer) clearTimeout(hideDelayTimer);
      hideDelayTimer = setTimeout(function() {
        hideDelayTimer = null;
        info.animate({
          top: '-=' + distance + 'px',
          opacity: 0
        }, time, 'swing', function() {
          shown = false;
          info.css('display', 'none');
        });
      }, hideDelay);
      return false;
    });
  });
} // scJQPopupAdd

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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_proveedor_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "pr_tipo_identificacion" == specificField) {
    scJQSelect2Add_pr_tipo_identificacion(seqRow);
  }
  if (null == specificField || "pr_tipo_persona" == specificField) {
    scJQSelect2Add_pr_tipo_persona(seqRow);
  }
  if (null == specificField || "pr_pais" == specificField) {
    scJQSelect2Add_pr_pais(seqRow);
  }
  if (null == specificField || "pr_provincia" == specificField) {
    scJQSelect2Add_pr_provincia(seqRow);
  }
  if (null == specificField || "pr_ciudad" == specificField) {
    scJQSelect2Add_pr_ciudad(seqRow);
  }
  if (null == specificField || "pr_retencion_iva" == specificField) {
    scJQSelect2Add_pr_retencion_iva(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_pr_tipo_identificacion(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pr_tipo_identificacion_obj" : "#id_sc_field_pr_tipo_identificacion" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pr_tipo_identificacion_obj',
      dropdownCssClass: 'css_pr_tipo_identificacion_obj',
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

function scJQSelect2Add_pr_tipo_persona(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pr_tipo_persona_obj" : "#id_sc_field_pr_tipo_persona" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pr_tipo_persona_obj',
      dropdownCssClass: 'css_pr_tipo_persona_obj',
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

function scJQSelect2Add_pr_pais(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pr_pais_obj" : "#id_sc_field_pr_pais" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pr_pais_obj',
      dropdownCssClass: 'css_pr_pais_obj',
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

function scJQSelect2Add_pr_provincia(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pr_provincia_obj" : "#id_sc_field_pr_provincia" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pr_provincia_obj',
      dropdownCssClass: 'css_pr_provincia_obj',
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

function scJQSelect2Add_pr_ciudad(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pr_ciudad_obj" : "#id_sc_field_pr_ciudad" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pr_ciudad_obj',
      dropdownCssClass: 'css_pr_ciudad_obj',
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

function scJQSelect2Add_pr_retencion_iva(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pr_retencion_iva_obj" : "#id_sc_field_pr_retencion_iva" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pr_retencion_iva_obj',
      dropdownCssClass: 'css_pr_retencion_iva_obj',
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
  scJQPopupAdd(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_pr_tipo_identificacion) { displayChange_field_pr_tipo_identificacion(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pr_tipo_persona) { displayChange_field_pr_tipo_persona(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pr_pais) { displayChange_field_pr_pais(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pr_provincia) { displayChange_field_pr_provincia(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pr_ciudad) { displayChange_field_pr_ciudad(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pr_retencion_iva) { displayChange_field_pr_retencion_iva(iLine, "on"); } }, 150);
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


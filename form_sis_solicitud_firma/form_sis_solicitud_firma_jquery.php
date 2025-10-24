
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
  scEventControl_data["sf_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sf_comisionista" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sf_tipo_firma" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sf_duracion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sf_tipo_identificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sf_identificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sf_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sf_direcccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sf_telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sf_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sf_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["documentos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["sf_id" + iSeqRow] && scEventControl_data["sf_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_id" + iSeqRow] && scEventControl_data["sf_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sf_comisionista" + iSeqRow] && scEventControl_data["sf_comisionista" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_comisionista" + iSeqRow] && scEventControl_data["sf_comisionista" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sf_tipo_firma" + iSeqRow] && scEventControl_data["sf_tipo_firma" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_tipo_firma" + iSeqRow] && scEventControl_data["sf_tipo_firma" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sf_duracion" + iSeqRow] && scEventControl_data["sf_duracion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_duracion" + iSeqRow] && scEventControl_data["sf_duracion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sf_tipo_identificacion" + iSeqRow] && scEventControl_data["sf_tipo_identificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_tipo_identificacion" + iSeqRow] && scEventControl_data["sf_tipo_identificacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sf_identificacion" + iSeqRow] && scEventControl_data["sf_identificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_identificacion" + iSeqRow] && scEventControl_data["sf_identificacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sf_nombre" + iSeqRow] && scEventControl_data["sf_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_nombre" + iSeqRow] && scEventControl_data["sf_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sf_direcccion" + iSeqRow] && scEventControl_data["sf_direcccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_direcccion" + iSeqRow] && scEventControl_data["sf_direcccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sf_telefono" + iSeqRow] && scEventControl_data["sf_telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_telefono" + iSeqRow] && scEventControl_data["sf_telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sf_email" + iSeqRow] && scEventControl_data["sf_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_email" + iSeqRow] && scEventControl_data["sf_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sf_estado" + iSeqRow] && scEventControl_data["sf_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sf_estado" + iSeqRow] && scEventControl_data["sf_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["documentos" + iSeqRow] && scEventControl_data["documentos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["documentos" + iSeqRow] && scEventControl_data["documentos" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("sf_comisionista" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sf_tipo_firma" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sf_duracion" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sf_tipo_identificacion" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sf_estado" + iSeq == fieldName) {
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
  $('#id_sc_field_sf_id' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_id_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_sis_solicitud_firma_sf_id_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_sis_solicitud_firma_sf_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_sf_comisionista' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_comisionista_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_sis_solicitud_firma_sf_comisionista_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_sis_solicitud_firma_sf_comisionista_onfocus(this, iSeqRow) });
  $('#id_sc_field_sf_tipo_identificacion' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_tipo_identificacion_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_sis_solicitud_firma_sf_tipo_identificacion_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_sis_solicitud_firma_sf_tipo_identificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_sf_identificacion' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_identificacion_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_sis_solicitud_firma_sf_identificacion_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_sis_solicitud_firma_sf_identificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_sf_nombre' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_nombre_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_sis_solicitud_firma_sf_nombre_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_sis_solicitud_firma_sf_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_sf_direcccion' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_direcccion_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_sis_solicitud_firma_sf_direcccion_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_sis_solicitud_firma_sf_direcccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_sf_telefono' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_telefono_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_sis_solicitud_firma_sf_telefono_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_sis_solicitud_firma_sf_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_sf_email' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_email_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_sis_solicitud_firma_sf_email_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_sis_solicitud_firma_sf_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_sf_tipo_firma' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_tipo_firma_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_sis_solicitud_firma_sf_tipo_firma_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_sis_solicitud_firma_sf_tipo_firma_onfocus(this, iSeqRow) });
  $('#id_sc_field_sf_estado' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_estado_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_sis_solicitud_firma_sf_estado_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_sis_solicitud_firma_sf_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_sf_duracion' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_sf_duracion_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_sis_solicitud_firma_sf_duracion_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_sis_solicitud_firma_sf_duracion_onfocus(this, iSeqRow) });
  $('#id_sc_field_documentos' + iSeqRow).bind('blur', function() { sc_form_sis_solicitud_firma_documentos_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_sis_solicitud_firma_documentos_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sis_solicitud_firma_documentos_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_sis_solicitud_firma_sf_id_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_id();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_id_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_sf_comisionista_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_comisionista();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_comisionista_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_comisionista_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_sf_tipo_identificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_tipo_identificacion();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_tipo_identificacion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_tipo_identificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_sf_identificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_identificacion();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_identificacion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_identificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_sf_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_nombre();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_nombre_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_sf_direcccion_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_direcccion();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_direcccion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_direcccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_sf_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_telefono();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_telefono_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_sf_email_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_email();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_email_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_sf_tipo_firma_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_tipo_firma();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_tipo_firma_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_tipo_firma_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_sf_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_estado();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_sf_duracion_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_sf_duracion();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_sf_duracion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_sf_duracion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_solicitud_firma_documentos_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_solicitud_firma_validate_documentos();
  scCssBlur(oThis);
}

function sc_form_sis_solicitud_firma_documentos_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_solicitud_firma_documentos_onfocus(oThis, iSeqRow) {
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
	displayChange_field("sf_id", "", status);
	displayChange_field("sf_comisionista", "", status);
	displayChange_field("sf_tipo_firma", "", status);
	displayChange_field("sf_duracion", "", status);
	displayChange_field("sf_tipo_identificacion", "", status);
	displayChange_field("sf_identificacion", "", status);
	displayChange_field("sf_nombre", "", status);
	displayChange_field("sf_direcccion", "", status);
	displayChange_field("sf_telefono", "", status);
	displayChange_field("sf_email", "", status);
	displayChange_field("sf_estado", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("documentos", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_sf_id(row, status);
	displayChange_field_sf_comisionista(row, status);
	displayChange_field_sf_tipo_firma(row, status);
	displayChange_field_sf_duracion(row, status);
	displayChange_field_sf_tipo_identificacion(row, status);
	displayChange_field_sf_identificacion(row, status);
	displayChange_field_sf_nombre(row, status);
	displayChange_field_sf_direcccion(row, status);
	displayChange_field_sf_telefono(row, status);
	displayChange_field_sf_email(row, status);
	displayChange_field_sf_estado(row, status);
	displayChange_field_documentos(row, status);
}

function displayChange_field(field, row, status) {
	if ("sf_id" == field) {
		displayChange_field_sf_id(row, status);
	}
	if ("sf_comisionista" == field) {
		displayChange_field_sf_comisionista(row, status);
	}
	if ("sf_tipo_firma" == field) {
		displayChange_field_sf_tipo_firma(row, status);
	}
	if ("sf_duracion" == field) {
		displayChange_field_sf_duracion(row, status);
	}
	if ("sf_tipo_identificacion" == field) {
		displayChange_field_sf_tipo_identificacion(row, status);
	}
	if ("sf_identificacion" == field) {
		displayChange_field_sf_identificacion(row, status);
	}
	if ("sf_nombre" == field) {
		displayChange_field_sf_nombre(row, status);
	}
	if ("sf_direcccion" == field) {
		displayChange_field_sf_direcccion(row, status);
	}
	if ("sf_telefono" == field) {
		displayChange_field_sf_telefono(row, status);
	}
	if ("sf_email" == field) {
		displayChange_field_sf_email(row, status);
	}
	if ("sf_estado" == field) {
		displayChange_field_sf_estado(row, status);
	}
	if ("documentos" == field) {
		displayChange_field_documentos(row, status);
	}
}

function displayChange_field_sf_id(row, status) {
    var fieldId;
}

function displayChange_field_sf_comisionista(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_sf_comisionista__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_sf_comisionista" + row).select2("destroy");
		}
		scJQSelect2Add(row, "sf_comisionista");
	}
}

function displayChange_field_sf_tipo_firma(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_sf_tipo_firma__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_sf_tipo_firma" + row).select2("destroy");
		}
		scJQSelect2Add(row, "sf_tipo_firma");
	}
}

function displayChange_field_sf_duracion(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_sf_duracion__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_sf_duracion" + row).select2("destroy");
		}
		scJQSelect2Add(row, "sf_duracion");
	}
}

function displayChange_field_sf_tipo_identificacion(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_sf_tipo_identificacion__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_sf_tipo_identificacion" + row).select2("destroy");
		}
		scJQSelect2Add(row, "sf_tipo_identificacion");
	}
}

function displayChange_field_sf_identificacion(row, status) {
    var fieldId;
}

function displayChange_field_sf_nombre(row, status) {
    var fieldId;
}

function displayChange_field_sf_direcccion(row, status) {
    var fieldId;
}

function displayChange_field_sf_telefono(row, status) {
    var fieldId;
}

function displayChange_field_sf_email(row, status) {
    var fieldId;
}

function displayChange_field_sf_estado(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_sf_estado__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_sf_estado" + row).select2("destroy");
		}
		scJQSelect2Add(row, "sf_estado");
	}
}

function displayChange_field_documentos(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_sis_documentos_solicitud_firma")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_sis_documentos_solicitud_firma")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_sf_comisionista("all", "on");
	displayChange_field_sf_tipo_firma("all", "on");
	displayChange_field_sf_duracion("all", "on");
	displayChange_field_sf_tipo_identificacion("all", "on");
	displayChange_field_sf_estado("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_sis_solicitud_firma_form" + pageNo).hide();
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_sis_solicitud_firma')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "sf_comisionista" == specificField) {
    scJQSelect2Add_sf_comisionista(seqRow);
  }
  if (null == specificField || "sf_tipo_firma" == specificField) {
    scJQSelect2Add_sf_tipo_firma(seqRow);
  }
  if (null == specificField || "sf_duracion" == specificField) {
    scJQSelect2Add_sf_duracion(seqRow);
  }
  if (null == specificField || "sf_tipo_identificacion" == specificField) {
    scJQSelect2Add_sf_tipo_identificacion(seqRow);
  }
  if (null == specificField || "sf_estado" == specificField) {
    scJQSelect2Add_sf_estado(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_sf_comisionista(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_sf_comisionista_obj" : "#id_sc_field_sf_comisionista" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_sf_comisionista_obj',
      dropdownCssClass: 'css_sf_comisionista_obj',
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

function scJQSelect2Add_sf_tipo_firma(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_sf_tipo_firma_obj" : "#id_sc_field_sf_tipo_firma" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_sf_tipo_firma_obj',
      dropdownCssClass: 'css_sf_tipo_firma_obj',
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

function scJQSelect2Add_sf_duracion(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_sf_duracion_obj" : "#id_sc_field_sf_duracion" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_sf_duracion_obj',
      dropdownCssClass: 'css_sf_duracion_obj',
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

function scJQSelect2Add_sf_tipo_identificacion(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_sf_tipo_identificacion_obj" : "#id_sc_field_sf_tipo_identificacion" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_sf_tipo_identificacion_obj',
      dropdownCssClass: 'css_sf_tipo_identificacion_obj',
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

function scJQSelect2Add_sf_estado(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_sf_estado_obj" : "#id_sc_field_sf_estado" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_sf_estado_obj',
      dropdownCssClass: 'css_sf_estado_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_sf_comisionista) { displayChange_field_sf_comisionista(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_sf_tipo_firma) { displayChange_field_sf_tipo_firma(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_sf_duracion) { displayChange_field_sf_duracion(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_sf_tipo_identificacion) { displayChange_field_sf_tipo_identificacion(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_sf_estado) { displayChange_field_sf_estado(iLine, "on"); } }, 150);
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


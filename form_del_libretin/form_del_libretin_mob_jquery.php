
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
  scEventControl_data["lib_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_tipo_comprobante" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_punto_emision" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_tipo_libretin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_desde" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_hasta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_secuencial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_autorizacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_fecha_caducidad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_disponibles" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["lib_utilizados" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["lib_id" + iSeqRow] && scEventControl_data["lib_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_id" + iSeqRow] && scEventControl_data["lib_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_tipo_comprobante" + iSeqRow] && scEventControl_data["lib_tipo_comprobante" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_tipo_comprobante" + iSeqRow] && scEventControl_data["lib_tipo_comprobante" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_punto_emision" + iSeqRow] && scEventControl_data["lib_punto_emision" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_punto_emision" + iSeqRow] && scEventControl_data["lib_punto_emision" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_tipo_libretin" + iSeqRow] && scEventControl_data["lib_tipo_libretin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_tipo_libretin" + iSeqRow] && scEventControl_data["lib_tipo_libretin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_desde" + iSeqRow] && scEventControl_data["lib_desde" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_desde" + iSeqRow] && scEventControl_data["lib_desde" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_hasta" + iSeqRow] && scEventControl_data["lib_hasta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_hasta" + iSeqRow] && scEventControl_data["lib_hasta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_secuencial" + iSeqRow] && scEventControl_data["lib_secuencial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_secuencial" + iSeqRow] && scEventControl_data["lib_secuencial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_autorizacion" + iSeqRow] && scEventControl_data["lib_autorizacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_autorizacion" + iSeqRow] && scEventControl_data["lib_autorizacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_fecha_caducidad" + iSeqRow] && scEventControl_data["lib_fecha_caducidad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_fecha_caducidad" + iSeqRow] && scEventControl_data["lib_fecha_caducidad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_estado" + iSeqRow] && scEventControl_data["lib_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_estado" + iSeqRow] && scEventControl_data["lib_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_disponibles" + iSeqRow] && scEventControl_data["lib_disponibles" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_disponibles" + iSeqRow] && scEventControl_data["lib_disponibles" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lib_utilizados" + iSeqRow] && scEventControl_data["lib_utilizados" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lib_utilizados" + iSeqRow] && scEventControl_data["lib_utilizados" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("lib_tipo_comprobante" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("lib_punto_emision" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("lib_tipo_libretin" + iSeq == fieldName) {
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
  $('#id_sc_field_lib_id' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_id_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_del_libretin_lib_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_punto_emision' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_punto_emision_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_libretin_lib_punto_emision_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_tipo_comprobante' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_tipo_comprobante_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_libretin_lib_tipo_comprobante_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_secuencial' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_secuencial_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_libretin_lib_secuencial_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_disponibles' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_disponibles_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_libretin_lib_disponibles_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_estado' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_estado_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_libretin_lib_estado_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_libretin_lib_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_tipo_libretin' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_tipo_libretin_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_libretin_lib_tipo_libretin_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_libretin_lib_tipo_libretin_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_utilizados' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_utilizados_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_libretin_lib_utilizados_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_desde' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_desde_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_libretin_lib_desde_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_hasta' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_hasta_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_libretin_lib_hasta_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_autorizacion' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_autorizacion_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_libretin_lib_autorizacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_lib_fecha_caducidad' + iSeqRow).bind('blur', function() { sc_form_del_libretin_lib_fecha_caducidad_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_libretin_lib_fecha_caducidad_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_del_libretin_lib_id_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_id();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_punto_emision_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_punto_emision();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_punto_emision_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_tipo_comprobante_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_tipo_comprobante();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_tipo_comprobante_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_secuencial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_secuencial();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_secuencial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_disponibles_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_disponibles();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_disponibles_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_estado();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_estado_onchange(oThis, iSeqRow) {
  lookup_lib_estado();
}

function sc_form_del_libretin_lib_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_tipo_libretin_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_tipo_libretin();
  scCssBlur(oThis);
  do_ajax_form_del_libretin_mob_event_lib_tipo_libretin_onblur();
}

function sc_form_del_libretin_lib_tipo_libretin_onchange(oThis, iSeqRow) {
  lookup_lib_tipo_libretin();
  do_ajax_form_del_libretin_mob_event_lib_tipo_libretin_onchange();
}

function sc_form_del_libretin_lib_tipo_libretin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_utilizados_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_utilizados();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_utilizados_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_desde_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_desde();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_desde_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_hasta_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_hasta();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_hasta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_autorizacion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_autorizacion();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_autorizacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_libretin_lib_fecha_caducidad_onblur(oThis, iSeqRow) {
  do_ajax_form_del_libretin_mob_validate_lib_fecha_caducidad();
  scCssBlur(oThis);
}

function sc_form_del_libretin_lib_fecha_caducidad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("lib_id", "", status);
	displayChange_field("lib_tipo_comprobante", "", status);
	displayChange_field("lib_punto_emision", "", status);
	displayChange_field("lib_tipo_libretin", "", status);
	displayChange_field("lib_desde", "", status);
	displayChange_field("lib_hasta", "", status);
	displayChange_field("lib_secuencial", "", status);
	displayChange_field("lib_autorizacion", "", status);
	displayChange_field("lib_fecha_caducidad", "", status);
	displayChange_field("lib_estado", "", status);
	displayChange_field("lib_disponibles", "", status);
	displayChange_field("lib_utilizados", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_lib_id(row, status);
	displayChange_field_lib_tipo_comprobante(row, status);
	displayChange_field_lib_punto_emision(row, status);
	displayChange_field_lib_tipo_libretin(row, status);
	displayChange_field_lib_desde(row, status);
	displayChange_field_lib_hasta(row, status);
	displayChange_field_lib_secuencial(row, status);
	displayChange_field_lib_autorizacion(row, status);
	displayChange_field_lib_fecha_caducidad(row, status);
	displayChange_field_lib_estado(row, status);
	displayChange_field_lib_disponibles(row, status);
	displayChange_field_lib_utilizados(row, status);
}

function displayChange_field(field, row, status) {
	if ("lib_id" == field) {
		displayChange_field_lib_id(row, status);
	}
	if ("lib_tipo_comprobante" == field) {
		displayChange_field_lib_tipo_comprobante(row, status);
	}
	if ("lib_punto_emision" == field) {
		displayChange_field_lib_punto_emision(row, status);
	}
	if ("lib_tipo_libretin" == field) {
		displayChange_field_lib_tipo_libretin(row, status);
	}
	if ("lib_desde" == field) {
		displayChange_field_lib_desde(row, status);
	}
	if ("lib_hasta" == field) {
		displayChange_field_lib_hasta(row, status);
	}
	if ("lib_secuencial" == field) {
		displayChange_field_lib_secuencial(row, status);
	}
	if ("lib_autorizacion" == field) {
		displayChange_field_lib_autorizacion(row, status);
	}
	if ("lib_fecha_caducidad" == field) {
		displayChange_field_lib_fecha_caducidad(row, status);
	}
	if ("lib_estado" == field) {
		displayChange_field_lib_estado(row, status);
	}
	if ("lib_disponibles" == field) {
		displayChange_field_lib_disponibles(row, status);
	}
	if ("lib_utilizados" == field) {
		displayChange_field_lib_utilizados(row, status);
	}
}

function displayChange_field_lib_id(row, status) {
    var fieldId;
}

function displayChange_field_lib_tipo_comprobante(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_lib_tipo_comprobante__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_lib_tipo_comprobante" + row).select2("destroy");
		}
		scJQSelect2Add(row, "lib_tipo_comprobante");
	}
}

function displayChange_field_lib_punto_emision(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_lib_punto_emision__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_lib_punto_emision" + row).select2("destroy");
		}
		scJQSelect2Add(row, "lib_punto_emision");
	}
}

function displayChange_field_lib_tipo_libretin(row, status) {
    var fieldId;
}

function displayChange_field_lib_desde(row, status) {
    var fieldId;
}

function displayChange_field_lib_hasta(row, status) {
    var fieldId;
}

function displayChange_field_lib_secuencial(row, status) {
    var fieldId;
}

function displayChange_field_lib_autorizacion(row, status) {
    var fieldId;
}

function displayChange_field_lib_fecha_caducidad(row, status) {
    var fieldId;
}

function displayChange_field_lib_estado(row, status) {
    var fieldId;
}

function displayChange_field_lib_disponibles(row, status) {
    var fieldId;
}

function displayChange_field_lib_utilizados(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_lib_tipo_comprobante("all", "on");
	displayChange_field_lib_punto_emision("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_libretin_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(29);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_lib_fecha_caducidad" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_lib_fecha_caducidad" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_del_libretin_mob_validate_lib_fecha_caducidad(iSeqRow); }, 200);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['lib_fecha_caducidad']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_libretin_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "lib_tipo_comprobante" == specificField) {
    scJQSelect2Add_lib_tipo_comprobante(seqRow);
  }
  if (null == specificField || "lib_punto_emision" == specificField) {
    scJQSelect2Add_lib_punto_emision(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_lib_tipo_comprobante(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_lib_tipo_comprobante_obj" : "#id_sc_field_lib_tipo_comprobante" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_lib_tipo_comprobante_obj',
      dropdownCssClass: 'css_lib_tipo_comprobante_obj',
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

function scJQSelect2Add_lib_punto_emision(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_lib_punto_emision_obj" : "#id_sc_field_lib_punto_emision" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_lib_punto_emision_obj',
      dropdownCssClass: 'css_lib_punto_emision_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_lib_tipo_comprobante) { displayChange_field_lib_tipo_comprobante(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_lib_punto_emision) { displayChange_field_lib_punto_emision(iLine, "on"); } }, 150);
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


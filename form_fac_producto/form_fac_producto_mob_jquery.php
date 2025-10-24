
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
  scEventControl_data["pro_codigo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_codigo_secundario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_precio_uni" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_tipo_comprobante" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_por_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pro_por_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["pro_codigo" + iSeqRow] && scEventControl_data["pro_codigo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_codigo" + iSeqRow] && scEventControl_data["pro_codigo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_codigo_secundario" + iSeqRow] && scEventControl_data["pro_codigo_secundario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_codigo_secundario" + iSeqRow] && scEventControl_data["pro_codigo_secundario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_nombre" + iSeqRow] && scEventControl_data["pro_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_nombre" + iSeqRow] && scEventControl_data["pro_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_precio_uni" + iSeqRow] && scEventControl_data["pro_precio_uni" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_precio_uni" + iSeqRow] && scEventControl_data["pro_precio_uni" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_tipo_comprobante" + iSeqRow] && scEventControl_data["pro_tipo_comprobante" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_tipo_comprobante" + iSeqRow] && scEventControl_data["pro_tipo_comprobante" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_estado" + iSeqRow] && scEventControl_data["pro_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_estado" + iSeqRow] && scEventControl_data["pro_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_iva" + iSeqRow] && scEventControl_data["pro_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_iva" + iSeqRow] && scEventControl_data["pro_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_por_iva" + iSeqRow] && scEventControl_data["pro_por_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_por_iva" + iSeqRow] && scEventControl_data["pro_por_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_ice" + iSeqRow] && scEventControl_data["pro_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_ice" + iSeqRow] && scEventControl_data["pro_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pro_por_ice" + iSeqRow] && scEventControl_data["pro_por_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pro_por_ice" + iSeqRow] && scEventControl_data["pro_por_ice" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("pro_tipo_comprobante" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_estado" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_por_iva" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pro_por_ice" + iSeq == fieldName) {
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
  $('#id_sc_field_pro_codigo' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_codigo_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_fac_producto_pro_codigo_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_codigo_secundario' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_codigo_secundario_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_fac_producto_pro_codigo_secundario_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_imagen' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_imagen_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_fac_producto_pro_imagen_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_nombre' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_nombre_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_fac_producto_pro_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_precio_uni' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_precio_uni_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_fac_producto_pro_precio_uni_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_iva' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_iva_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_fac_producto_pro_iva_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_fac_producto_pro_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_por_iva' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_por_iva_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_fac_producto_pro_por_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_ice' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_ice_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_fac_producto_pro_ice_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_fac_producto_pro_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_por_ice' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_por_ice_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_fac_producto_pro_por_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_estado' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_estado_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_fac_producto_pro_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_pro_tipo_comprobante' + iSeqRow).bind('blur', function() { sc_form_fac_producto_pro_tipo_comprobante_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_fac_producto_pro_tipo_comprobante_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_fac_producto_pro_codigo_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_producto_mob_validate_pro_codigo();
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_codigo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_producto_pro_codigo_secundario_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_producto_mob_validate_pro_codigo_secundario();
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_codigo_secundario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_producto_pro_imagen_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_imagen_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_fac_producto_pro_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_producto_mob_validate_pro_nombre();
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_producto_pro_precio_uni_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_producto_mob_validate_pro_precio_uni();
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_precio_uni_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_producto_pro_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_producto_mob_validate_pro_iva();
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_iva_onchange(oThis, iSeqRow) {
  lookup_pro_iva();
}

function sc_form_fac_producto_pro_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_producto_pro_por_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_producto_mob_validate_pro_por_iva();
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_por_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_producto_pro_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_producto_mob_validate_pro_ice();
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_ice_onchange(oThis, iSeqRow) {
  lookup_pro_ice();
}

function sc_form_fac_producto_pro_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_producto_pro_por_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_producto_mob_validate_pro_por_ice();
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_por_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_producto_pro_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_producto_mob_validate_pro_estado();
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_producto_pro_tipo_comprobante_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_producto_mob_validate_pro_tipo_comprobante();
  scCssBlur(oThis);
}

function sc_form_fac_producto_pro_tipo_comprobante_onfocus(oThis, iSeqRow) {
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
	displayChange_field("pro_imagen", "", status);
	displayChange_field("pro_codigo", "", status);
	displayChange_field("pro_codigo_secundario", "", status);
	displayChange_field("pro_nombre", "", status);
	displayChange_field("pro_precio_uni", "", status);
	displayChange_field("pro_tipo_comprobante", "", status);
	displayChange_field("pro_estado", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("pro_iva", "", status);
	displayChange_field("pro_por_iva", "", status);
	displayChange_field("pro_ice", "", status);
	displayChange_field("pro_por_ice", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_pro_imagen(row, status);
	displayChange_field_pro_codigo(row, status);
	displayChange_field_pro_codigo_secundario(row, status);
	displayChange_field_pro_nombre(row, status);
	displayChange_field_pro_precio_uni(row, status);
	displayChange_field_pro_tipo_comprobante(row, status);
	displayChange_field_pro_estado(row, status);
	displayChange_field_pro_iva(row, status);
	displayChange_field_pro_por_iva(row, status);
	displayChange_field_pro_ice(row, status);
	displayChange_field_pro_por_ice(row, status);
}

function displayChange_field(field, row, status) {
	if ("pro_imagen" == field) {
		displayChange_field_pro_imagen(row, status);
	}
	if ("pro_codigo" == field) {
		displayChange_field_pro_codigo(row, status);
	}
	if ("pro_codigo_secundario" == field) {
		displayChange_field_pro_codigo_secundario(row, status);
	}
	if ("pro_nombre" == field) {
		displayChange_field_pro_nombre(row, status);
	}
	if ("pro_precio_uni" == field) {
		displayChange_field_pro_precio_uni(row, status);
	}
	if ("pro_tipo_comprobante" == field) {
		displayChange_field_pro_tipo_comprobante(row, status);
	}
	if ("pro_estado" == field) {
		displayChange_field_pro_estado(row, status);
	}
	if ("pro_iva" == field) {
		displayChange_field_pro_iva(row, status);
	}
	if ("pro_por_iva" == field) {
		displayChange_field_pro_por_iva(row, status);
	}
	if ("pro_ice" == field) {
		displayChange_field_pro_ice(row, status);
	}
	if ("pro_por_ice" == field) {
		displayChange_field_pro_por_ice(row, status);
	}
}

function displayChange_field_pro_imagen(row, status) {
    var fieldId;
}

function displayChange_field_pro_codigo(row, status) {
    var fieldId;
}

function displayChange_field_pro_codigo_secundario(row, status) {
    var fieldId;
}

function displayChange_field_pro_nombre(row, status) {
    var fieldId;
}

function displayChange_field_pro_precio_uni(row, status) {
    var fieldId;
}

function displayChange_field_pro_tipo_comprobante(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pro_tipo_comprobante__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pro_tipo_comprobante" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pro_tipo_comprobante");
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

function displayChange_field_pro_iva(row, status) {
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

function displayChange_field_pro_ice(row, status) {
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

function scRecreateSelect2() {
	displayChange_field_pro_tipo_comprobante("all", "on");
	displayChange_field_pro_estado("all", "on");
	displayChange_field_pro_por_iva("all", "on");
	displayChange_field_pro_por_ice("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_fac_producto_mob_form" + pageNo).hide();
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
  $("#id_sc_field_pro_fecha" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_pro_fecha" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_fac_producto_mob_validate_pro_fecha(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['pro_fecha']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_pro_imagen" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_fac_producto_mob_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'pro_imagen'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
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
      $("#txt_ajax_img_pro_imagen" + iSeqRow).css("display", checkDisplay);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_fac_producto_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "pro_tipo_comprobante" == specificField) {
    scJQSelect2Add_pro_tipo_comprobante(seqRow);
  }
  if (null == specificField || "pro_estado" == specificField) {
    scJQSelect2Add_pro_estado(seqRow);
  }
  if (null == specificField || "pro_por_iva" == specificField) {
    scJQSelect2Add_pro_por_iva(seqRow);
  }
  if (null == specificField || "pro_por_ice" == specificField) {
    scJQSelect2Add_pro_por_ice(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_pro_tipo_comprobante(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pro_tipo_comprobante_obj" : "#id_sc_field_pro_tipo_comprobante" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pro_tipo_comprobante_obj',
      dropdownCssClass: 'css_pro_tipo_comprobante_obj',
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


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_tipo_comprobante) { displayChange_field_pro_tipo_comprobante(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_estado) { displayChange_field_pro_estado(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_por_iva) { displayChange_field_pro_por_iva(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pro_por_ice) { displayChange_field_pro_por_ice(iLine, "on"); } }, 150);
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


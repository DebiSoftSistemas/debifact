
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
  scEventControl_data["suc_filial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["suc_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["suc_representante" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["suc_pais" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["suc_provincia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["suc_ciudad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["suc_sector" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["suc_calle_principal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["suc_numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["suc_calle_secundaria" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["suc_referencia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["suc_filial" + iSeqRow] && scEventControl_data["suc_filial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_filial" + iSeqRow] && scEventControl_data["suc_filial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["suc_nombre" + iSeqRow] && scEventControl_data["suc_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_nombre" + iSeqRow] && scEventControl_data["suc_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["suc_representante" + iSeqRow] && scEventControl_data["suc_representante" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_representante" + iSeqRow] && scEventControl_data["suc_representante" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["suc_pais" + iSeqRow] && scEventControl_data["suc_pais" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_pais" + iSeqRow] && scEventControl_data["suc_pais" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["suc_provincia" + iSeqRow] && scEventControl_data["suc_provincia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_provincia" + iSeqRow] && scEventControl_data["suc_provincia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["suc_ciudad" + iSeqRow] && scEventControl_data["suc_ciudad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_ciudad" + iSeqRow] && scEventControl_data["suc_ciudad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["suc_sector" + iSeqRow] && scEventControl_data["suc_sector" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_sector" + iSeqRow] && scEventControl_data["suc_sector" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["suc_calle_principal" + iSeqRow] && scEventControl_data["suc_calle_principal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_calle_principal" + iSeqRow] && scEventControl_data["suc_calle_principal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["suc_numero" + iSeqRow] && scEventControl_data["suc_numero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_numero" + iSeqRow] && scEventControl_data["suc_numero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["suc_calle_secundaria" + iSeqRow] && scEventControl_data["suc_calle_secundaria" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_calle_secundaria" + iSeqRow] && scEventControl_data["suc_calle_secundaria" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["suc_referencia" + iSeqRow] && scEventControl_data["suc_referencia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["suc_referencia" + iSeqRow] && scEventControl_data["suc_referencia" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("suc_filial" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("suc_pais" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("suc_provincia" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("suc_ciudad" + iSeq == fieldName) {
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
  $('#id_sc_field_suc_filial' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_filial_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sis_sucursal_suc_filial_onfocus(this, iSeqRow) });
  $('#id_sc_field_suc_nombre' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_nombre_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sis_sucursal_suc_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_suc_representante' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_representante_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_sis_sucursal_suc_representante_onfocus(this, iSeqRow) });
  $('#id_sc_field_suc_pais' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_pais_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_sis_sucursal_suc_pais_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_sis_sucursal_suc_pais_onfocus(this, iSeqRow) });
  $('#id_sc_field_suc_provincia' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_provincia_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_sis_sucursal_suc_provincia_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_sis_sucursal_suc_provincia_onfocus(this, iSeqRow) });
  $('#id_sc_field_suc_ciudad' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_ciudad_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sis_sucursal_suc_ciudad_onfocus(this, iSeqRow) });
  $('#id_sc_field_suc_sector' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_sector_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sis_sucursal_suc_sector_onfocus(this, iSeqRow) });
  $('#id_sc_field_suc_calle_principal' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_calle_principal_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_sis_sucursal_suc_calle_principal_onfocus(this, iSeqRow) });
  $('#id_sc_field_suc_numero' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_numero_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sis_sucursal_suc_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_suc_calle_secundaria' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_calle_secundaria_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_sis_sucursal_suc_calle_secundaria_onfocus(this, iSeqRow) });
  $('#id_sc_field_suc_referencia' + iSeqRow).bind('blur', function() { sc_form_sis_sucursal_suc_referencia_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_sis_sucursal_suc_referencia_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_sis_sucursal_suc_filial_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_filial();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_filial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_sucursal_suc_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_nombre();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_sucursal_suc_representante_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_representante();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_representante_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_sucursal_suc_pais_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_pais();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_pais_onchange(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_refresh_suc_pais();
}

function sc_form_sis_sucursal_suc_pais_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_sucursal_suc_provincia_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_provincia();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_provincia_onchange(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_refresh_suc_provincia();
}

function sc_form_sis_sucursal_suc_provincia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_sucursal_suc_ciudad_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_ciudad();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_ciudad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_sucursal_suc_sector_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_sector();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_sector_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_sucursal_suc_calle_principal_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_calle_principal();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_calle_principal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_sucursal_suc_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_numero();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_sucursal_suc_calle_secundaria_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_calle_secundaria();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_calle_secundaria_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_sucursal_suc_referencia_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_sucursal_mob_validate_suc_referencia();
  scCssBlur(oThis);
}

function sc_form_sis_sucursal_suc_referencia_onfocus(oThis, iSeqRow) {
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
	displayChange_field("suc_filial", "", status);
	displayChange_field("suc_nombre", "", status);
	displayChange_field("suc_representante", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("suc_pais", "", status);
	displayChange_field("suc_provincia", "", status);
	displayChange_field("suc_ciudad", "", status);
	displayChange_field("suc_sector", "", status);
	displayChange_field("suc_calle_principal", "", status);
	displayChange_field("suc_numero", "", status);
	displayChange_field("suc_calle_secundaria", "", status);
	displayChange_field("suc_referencia", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_suc_filial(row, status);
	displayChange_field_suc_nombre(row, status);
	displayChange_field_suc_representante(row, status);
	displayChange_field_suc_pais(row, status);
	displayChange_field_suc_provincia(row, status);
	displayChange_field_suc_ciudad(row, status);
	displayChange_field_suc_sector(row, status);
	displayChange_field_suc_calle_principal(row, status);
	displayChange_field_suc_numero(row, status);
	displayChange_field_suc_calle_secundaria(row, status);
	displayChange_field_suc_referencia(row, status);
}

function displayChange_field(field, row, status) {
	if ("suc_filial" == field) {
		displayChange_field_suc_filial(row, status);
	}
	if ("suc_nombre" == field) {
		displayChange_field_suc_nombre(row, status);
	}
	if ("suc_representante" == field) {
		displayChange_field_suc_representante(row, status);
	}
	if ("suc_pais" == field) {
		displayChange_field_suc_pais(row, status);
	}
	if ("suc_provincia" == field) {
		displayChange_field_suc_provincia(row, status);
	}
	if ("suc_ciudad" == field) {
		displayChange_field_suc_ciudad(row, status);
	}
	if ("suc_sector" == field) {
		displayChange_field_suc_sector(row, status);
	}
	if ("suc_calle_principal" == field) {
		displayChange_field_suc_calle_principal(row, status);
	}
	if ("suc_numero" == field) {
		displayChange_field_suc_numero(row, status);
	}
	if ("suc_calle_secundaria" == field) {
		displayChange_field_suc_calle_secundaria(row, status);
	}
	if ("suc_referencia" == field) {
		displayChange_field_suc_referencia(row, status);
	}
}

function displayChange_field_suc_filial(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_suc_filial__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_suc_filial" + row).select2("destroy");
		}
		scJQSelect2Add(row, "suc_filial");
	}
}

function displayChange_field_suc_nombre(row, status) {
    var fieldId;
}

function displayChange_field_suc_representante(row, status) {
    var fieldId;
}

function displayChange_field_suc_pais(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_suc_pais__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_suc_pais" + row).select2("destroy");
		}
		scJQSelect2Add(row, "suc_pais");
	}
}

function displayChange_field_suc_provincia(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_suc_provincia__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_suc_provincia" + row).select2("destroy");
		}
		scJQSelect2Add(row, "suc_provincia");
	}
}

function displayChange_field_suc_ciudad(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_suc_ciudad__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_suc_ciudad" + row).select2("destroy");
		}
		scJQSelect2Add(row, "suc_ciudad");
	}
}

function displayChange_field_suc_sector(row, status) {
    var fieldId;
}

function displayChange_field_suc_calle_principal(row, status) {
    var fieldId;
}

function displayChange_field_suc_numero(row, status) {
    var fieldId;
}

function displayChange_field_suc_calle_secundaria(row, status) {
    var fieldId;
}

function displayChange_field_suc_referencia(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_suc_filial("all", "on");
	displayChange_field_suc_pais("all", "on");
	displayChange_field_suc_provincia("all", "on");
	displayChange_field_suc_ciudad("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_sis_sucursal_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(29);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_sis_sucursal_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "suc_filial" == specificField) {
    scJQSelect2Add_suc_filial(seqRow);
  }
  if (null == specificField || "suc_pais" == specificField) {
    scJQSelect2Add_suc_pais(seqRow);
  }
  if (null == specificField || "suc_provincia" == specificField) {
    scJQSelect2Add_suc_provincia(seqRow);
  }
  if (null == specificField || "suc_ciudad" == specificField) {
    scJQSelect2Add_suc_ciudad(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_suc_filial(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_suc_filial_obj" : "#id_sc_field_suc_filial" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_suc_filial_obj',
      dropdownCssClass: 'css_suc_filial_obj',
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

function scJQSelect2Add_suc_pais(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_suc_pais_obj" : "#id_sc_field_suc_pais" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_suc_pais_obj',
      dropdownCssClass: 'css_suc_pais_obj',
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

function scJQSelect2Add_suc_provincia(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_suc_provincia_obj" : "#id_sc_field_suc_provincia" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_suc_provincia_obj',
      dropdownCssClass: 'css_suc_provincia_obj',
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

function scJQSelect2Add_suc_ciudad(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_suc_ciudad_obj" : "#id_sc_field_suc_ciudad" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_suc_ciudad_obj',
      dropdownCssClass: 'css_suc_ciudad_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_suc_filial) { displayChange_field_suc_filial(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_suc_pais) { displayChange_field_suc_pais(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_suc_provincia) { displayChange_field_suc_provincia(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_suc_ciudad) { displayChange_field_suc_ciudad(iLine, "on"); } }, 150);
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


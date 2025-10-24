
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
  scEventControl_data["cb_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cb_banco" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cb_tipo_cuenta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cb_numero_cuenta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cb_cuenta_contable" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cb_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["cb_id" + iSeqRow] && scEventControl_data["cb_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cb_id" + iSeqRow] && scEventControl_data["cb_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cb_banco" + iSeqRow] && scEventControl_data["cb_banco" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cb_banco" + iSeqRow] && scEventControl_data["cb_banco" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cb_tipo_cuenta" + iSeqRow] && scEventControl_data["cb_tipo_cuenta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cb_tipo_cuenta" + iSeqRow] && scEventControl_data["cb_tipo_cuenta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cb_numero_cuenta" + iSeqRow] && scEventControl_data["cb_numero_cuenta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cb_numero_cuenta" + iSeqRow] && scEventControl_data["cb_numero_cuenta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cb_cuenta_contable" + iSeqRow] && scEventControl_data["cb_cuenta_contable" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cb_cuenta_contable" + iSeqRow] && scEventControl_data["cb_cuenta_contable" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cb_estado" + iSeqRow] && scEventControl_data["cb_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cb_estado" + iSeqRow] && scEventControl_data["cb_estado" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("cb_banco" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cb_tipo_cuenta" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cb_estado" + iSeq == fieldName) {
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
  $('#id_sc_field_cb_id' + iSeqRow).bind('blur', function() { sc_form_fac_cuenta_bancaria_cb_id_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_fac_cuenta_bancaria_cb_id_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_fac_cuenta_bancaria_cb_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_cb_filial' + iSeqRow).bind('change', function() { sc_form_fac_cuenta_bancaria_cb_filial_onchange(this, iSeqRow) });
  $('#id_sc_field_cb_banco' + iSeqRow).bind('blur', function() { sc_form_fac_cuenta_bancaria_cb_banco_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_fac_cuenta_bancaria_cb_banco_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_fac_cuenta_bancaria_cb_banco_onfocus(this, iSeqRow) });
  $('#id_sc_field_cb_numero_cuenta' + iSeqRow).bind('blur', function() { sc_form_fac_cuenta_bancaria_cb_numero_cuenta_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_fac_cuenta_bancaria_cb_numero_cuenta_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_fac_cuenta_bancaria_cb_numero_cuenta_onfocus(this, iSeqRow) });
  $('#id_sc_field_cb_tipo_cuenta' + iSeqRow).bind('blur', function() { sc_form_fac_cuenta_bancaria_cb_tipo_cuenta_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_fac_cuenta_bancaria_cb_tipo_cuenta_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_fac_cuenta_bancaria_cb_tipo_cuenta_onfocus(this, iSeqRow) });
  $('#id_sc_field_cb_cuenta_contable' + iSeqRow).bind('blur', function() { sc_form_fac_cuenta_bancaria_cb_cuenta_contable_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_fac_cuenta_bancaria_cb_cuenta_contable_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_fac_cuenta_bancaria_cb_cuenta_contable_onfocus(this, iSeqRow) });
  $('#id_sc_field_cb_estado' + iSeqRow).bind('blur', function() { sc_form_fac_cuenta_bancaria_cb_estado_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_fac_cuenta_bancaria_cb_estado_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_fac_cuenta_bancaria_cb_estado_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_fac_cuenta_bancaria_cb_id_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_cuenta_bancaria_validate_cb_id();
  scCssBlur(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_id_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_cuenta_bancaria_cb_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_filial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_cuenta_bancaria_cb_banco_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_cuenta_bancaria_validate_cb_banco();
  scCssBlur(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_banco_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_cuenta_bancaria_cb_banco_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_numero_cuenta_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_cuenta_bancaria_validate_cb_numero_cuenta();
  scCssBlur(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_numero_cuenta_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_cuenta_bancaria_cb_numero_cuenta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_tipo_cuenta_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_cuenta_bancaria_validate_cb_tipo_cuenta();
  scCssBlur(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_tipo_cuenta_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_cuenta_bancaria_cb_tipo_cuenta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_cuenta_contable_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_cuenta_bancaria_validate_cb_cuenta_contable();
  scCssBlur(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_cuenta_contable_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_cuenta_bancaria_cb_cuenta_contable_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_cuenta_bancaria_validate_cb_estado();
  scCssBlur(oThis);
}

function sc_form_fac_cuenta_bancaria_cb_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_cuenta_bancaria_cb_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("cb_id", "", status);
	displayChange_field("cb_banco", "", status);
	displayChange_field("cb_tipo_cuenta", "", status);
	displayChange_field("cb_numero_cuenta", "", status);
	displayChange_field("cb_cuenta_contable", "", status);
	displayChange_field("cb_estado", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_cb_id(row, status);
	displayChange_field_cb_banco(row, status);
	displayChange_field_cb_tipo_cuenta(row, status);
	displayChange_field_cb_numero_cuenta(row, status);
	displayChange_field_cb_cuenta_contable(row, status);
	displayChange_field_cb_estado(row, status);
}

function displayChange_field(field, row, status) {
	if ("cb_id" == field) {
		displayChange_field_cb_id(row, status);
	}
	if ("cb_banco" == field) {
		displayChange_field_cb_banco(row, status);
	}
	if ("cb_tipo_cuenta" == field) {
		displayChange_field_cb_tipo_cuenta(row, status);
	}
	if ("cb_numero_cuenta" == field) {
		displayChange_field_cb_numero_cuenta(row, status);
	}
	if ("cb_cuenta_contable" == field) {
		displayChange_field_cb_cuenta_contable(row, status);
	}
	if ("cb_estado" == field) {
		displayChange_field_cb_estado(row, status);
	}
}

function displayChange_field_cb_id(row, status) {
    var fieldId;
}

function displayChange_field_cb_banco(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_cb_banco__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_cb_banco" + row).select2("destroy");
		}
		scJQSelect2Add(row, "cb_banco");
	}
}

function displayChange_field_cb_tipo_cuenta(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_cb_tipo_cuenta__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_cb_tipo_cuenta" + row).select2("destroy");
		}
		scJQSelect2Add(row, "cb_tipo_cuenta");
	}
}

function displayChange_field_cb_numero_cuenta(row, status) {
    var fieldId;
}

function displayChange_field_cb_cuenta_contable(row, status) {
    var fieldId;
}

function displayChange_field_cb_estado(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_cb_estado__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_cb_estado" + row).select2("destroy");
		}
		scJQSelect2Add(row, "cb_estado");
	}
}

function scRecreateSelect2() {
	displayChange_field_cb_banco("all", "on");
	displayChange_field_cb_tipo_cuenta("all", "on");
	displayChange_field_cb_estado("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_fac_cuenta_bancaria_form" + pageNo).hide();
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_fac_cuenta_bancaria')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "cb_banco" == specificField) {
    scJQSelect2Add_cb_banco(seqRow);
  }
  if (null == specificField || "cb_tipo_cuenta" == specificField) {
    scJQSelect2Add_cb_tipo_cuenta(seqRow);
  }
  if (null == specificField || "cb_estado" == specificField) {
    scJQSelect2Add_cb_estado(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_cb_banco(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cb_banco_obj" : "#id_sc_field_cb_banco" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_cb_banco_obj',
      dropdownCssClass: 'css_cb_banco_obj',
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

function scJQSelect2Add_cb_tipo_cuenta(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cb_tipo_cuenta_obj" : "#id_sc_field_cb_tipo_cuenta" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_cb_tipo_cuenta_obj',
      dropdownCssClass: 'css_cb_tipo_cuenta_obj',
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

function scJQSelect2Add_cb_estado(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cb_estado_obj" : "#id_sc_field_cb_estado" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_cb_estado_obj',
      dropdownCssClass: 'css_cb_estado_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_cb_banco) { displayChange_field_cb_banco(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_cb_tipo_cuenta) { displayChange_field_cb_tipo_cuenta(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_cb_estado) { displayChange_field_cb_estado(iLine, "on"); } }, 150);
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


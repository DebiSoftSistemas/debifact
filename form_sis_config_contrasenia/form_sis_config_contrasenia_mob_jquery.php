
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
  scEventControl_data["coc_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["coc_tiempo_validez" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["coc_minimo_carater" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["coc_mayusculas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["coc_especiales" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["coc_digitos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["coc_empresa" + iSeqRow] && scEventControl_data["coc_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["coc_empresa" + iSeqRow] && scEventControl_data["coc_empresa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["coc_tiempo_validez" + iSeqRow] && scEventControl_data["coc_tiempo_validez" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["coc_tiempo_validez" + iSeqRow] && scEventControl_data["coc_tiempo_validez" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["coc_minimo_carater" + iSeqRow] && scEventControl_data["coc_minimo_carater" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["coc_minimo_carater" + iSeqRow] && scEventControl_data["coc_minimo_carater" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["coc_mayusculas" + iSeqRow] && scEventControl_data["coc_mayusculas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["coc_mayusculas" + iSeqRow] && scEventControl_data["coc_mayusculas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["coc_especiales" + iSeqRow] && scEventControl_data["coc_especiales" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["coc_especiales" + iSeqRow] && scEventControl_data["coc_especiales" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["coc_digitos" + iSeqRow] && scEventControl_data["coc_digitos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["coc_digitos" + iSeqRow] && scEventControl_data["coc_digitos" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("coc_empresa" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("coc_mayusculas" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("coc_especiales" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("coc_digitos" + iSeq == fieldName) {
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
  $('#id_sc_field_coc_empresa' + iSeqRow).bind('blur', function() { sc_form_sis_config_contrasenia_coc_empresa_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_sis_config_contrasenia_coc_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_coc_tiempo_validez' + iSeqRow).bind('blur', function() { sc_form_sis_config_contrasenia_coc_tiempo_validez_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_sis_config_contrasenia_coc_tiempo_validez_onfocus(this, iSeqRow) });
  $('#id_sc_field_coc_minimo_carater' + iSeqRow).bind('blur', function() { sc_form_sis_config_contrasenia_coc_minimo_carater_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_sis_config_contrasenia_coc_minimo_carater_onfocus(this, iSeqRow) });
  $('#id_sc_field_coc_mayusculas' + iSeqRow).bind('blur', function() { sc_form_sis_config_contrasenia_coc_mayusculas_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_sis_config_contrasenia_coc_mayusculas_onfocus(this, iSeqRow) });
  $('#id_sc_field_coc_especiales' + iSeqRow).bind('blur', function() { sc_form_sis_config_contrasenia_coc_especiales_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_sis_config_contrasenia_coc_especiales_onfocus(this, iSeqRow) });
  $('#id_sc_field_coc_digitos' + iSeqRow).bind('blur', function() { sc_form_sis_config_contrasenia_coc_digitos_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_sis_config_contrasenia_coc_digitos_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_sis_config_contrasenia_coc_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_config_contrasenia_mob_validate_coc_empresa();
  scCssBlur(oThis);
}

function sc_form_sis_config_contrasenia_coc_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_config_contrasenia_coc_tiempo_validez_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_config_contrasenia_mob_validate_coc_tiempo_validez();
  scCssBlur(oThis);
}

function sc_form_sis_config_contrasenia_coc_tiempo_validez_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_config_contrasenia_coc_minimo_carater_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_config_contrasenia_mob_validate_coc_minimo_carater();
  scCssBlur(oThis);
}

function sc_form_sis_config_contrasenia_coc_minimo_carater_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_config_contrasenia_coc_mayusculas_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_config_contrasenia_mob_validate_coc_mayusculas();
  scCssBlur(oThis);
}

function sc_form_sis_config_contrasenia_coc_mayusculas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_config_contrasenia_coc_especiales_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_config_contrasenia_mob_validate_coc_especiales();
  scCssBlur(oThis);
}

function sc_form_sis_config_contrasenia_coc_especiales_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_config_contrasenia_coc_digitos_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_config_contrasenia_mob_validate_coc_digitos();
  scCssBlur(oThis);
}

function sc_form_sis_config_contrasenia_coc_digitos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("coc_empresa", "", status);
	displayChange_field("coc_tiempo_validez", "", status);
	displayChange_field("coc_minimo_carater", "", status);
	displayChange_field("coc_mayusculas", "", status);
	displayChange_field("coc_especiales", "", status);
	displayChange_field("coc_digitos", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_coc_empresa(row, status);
	displayChange_field_coc_tiempo_validez(row, status);
	displayChange_field_coc_minimo_carater(row, status);
	displayChange_field_coc_mayusculas(row, status);
	displayChange_field_coc_especiales(row, status);
	displayChange_field_coc_digitos(row, status);
}

function displayChange_field(field, row, status) {
	if ("coc_empresa" == field) {
		displayChange_field_coc_empresa(row, status);
	}
	if ("coc_tiempo_validez" == field) {
		displayChange_field_coc_tiempo_validez(row, status);
	}
	if ("coc_minimo_carater" == field) {
		displayChange_field_coc_minimo_carater(row, status);
	}
	if ("coc_mayusculas" == field) {
		displayChange_field_coc_mayusculas(row, status);
	}
	if ("coc_especiales" == field) {
		displayChange_field_coc_especiales(row, status);
	}
	if ("coc_digitos" == field) {
		displayChange_field_coc_digitos(row, status);
	}
}

function displayChange_field_coc_empresa(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_coc_empresa__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_coc_empresa" + row).select2("destroy");
		}
		scJQSelect2Add(row, "coc_empresa");
	}
}

function displayChange_field_coc_tiempo_validez(row, status) {
    var fieldId;
}

function displayChange_field_coc_minimo_carater(row, status) {
    var fieldId;
}

function displayChange_field_coc_mayusculas(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_coc_mayusculas__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_coc_mayusculas" + row).select2("destroy");
		}
		scJQSelect2Add(row, "coc_mayusculas");
	}
}

function displayChange_field_coc_especiales(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_coc_especiales__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_coc_especiales" + row).select2("destroy");
		}
		scJQSelect2Add(row, "coc_especiales");
	}
}

function displayChange_field_coc_digitos(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_coc_digitos__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_coc_digitos" + row).select2("destroy");
		}
		scJQSelect2Add(row, "coc_digitos");
	}
}

function scRecreateSelect2() {
	displayChange_field_coc_empresa("all", "on");
	displayChange_field_coc_mayusculas("all", "on");
	displayChange_field_coc_especiales("all", "on");
	displayChange_field_coc_digitos("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_sis_config_contrasenia_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(39);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_sis_config_contrasenia_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "coc_empresa" == specificField) {
    scJQSelect2Add_coc_empresa(seqRow);
  }
  if (null == specificField || "coc_mayusculas" == specificField) {
    scJQSelect2Add_coc_mayusculas(seqRow);
  }
  if (null == specificField || "coc_especiales" == specificField) {
    scJQSelect2Add_coc_especiales(seqRow);
  }
  if (null == specificField || "coc_digitos" == specificField) {
    scJQSelect2Add_coc_digitos(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_coc_empresa(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_coc_empresa_obj" : "#id_sc_field_coc_empresa" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_coc_empresa_obj',
      dropdownCssClass: 'css_coc_empresa_obj',
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

function scJQSelect2Add_coc_mayusculas(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_coc_mayusculas_obj" : "#id_sc_field_coc_mayusculas" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_coc_mayusculas_obj',
      dropdownCssClass: 'css_coc_mayusculas_obj',
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

function scJQSelect2Add_coc_especiales(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_coc_especiales_obj" : "#id_sc_field_coc_especiales" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_coc_especiales_obj',
      dropdownCssClass: 'css_coc_especiales_obj',
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

function scJQSelect2Add_coc_digitos(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_coc_digitos_obj" : "#id_sc_field_coc_digitos" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_coc_digitos_obj',
      dropdownCssClass: 'css_coc_digitos_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_coc_empresa) { displayChange_field_coc_empresa(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_coc_mayusculas) { displayChange_field_coc_mayusculas(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_coc_especiales) { displayChange_field_coc_especiales(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_coc_digitos) { displayChange_field_coc_digitos(iLine, "on"); } }, 150);
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


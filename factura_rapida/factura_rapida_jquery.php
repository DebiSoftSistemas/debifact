
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
  scEventControl_data["imagen" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["login" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["vacio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["password" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mostrar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idioma" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["imagen" + iSeqRow] && scEventControl_data["imagen" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["imagen" + iSeqRow] && scEventControl_data["imagen" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["login" + iSeqRow] && scEventControl_data["login" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["login" + iSeqRow] && scEventControl_data["login" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["vacio" + iSeqRow] && scEventControl_data["vacio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["vacio" + iSeqRow] && scEventControl_data["vacio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["password" + iSeqRow] && scEventControl_data["password" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["password" + iSeqRow] && scEventControl_data["password" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mostrar" + iSeqRow] && scEventControl_data["mostrar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mostrar" + iSeqRow] && scEventControl_data["mostrar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idioma" + iSeqRow] && scEventControl_data["idioma" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idioma" + iSeqRow] && scEventControl_data["idioma" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
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
  $('#id_sc_field_login' + iSeqRow).bind('blur', function() { sc_factura_rapida_login_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_factura_rapida_login_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_factura_rapida_login_onfocus(this, iSeqRow) });
  $('#id_sc_field_password' + iSeqRow).bind('blur', function() { sc_factura_rapida_password_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_factura_rapida_password_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_factura_rapida_password_onfocus(this, iSeqRow) });
  $('#id_sc_field_idioma' + iSeqRow).bind('blur', function() { sc_factura_rapida_idioma_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_factura_rapida_idioma_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_factura_rapida_idioma_onfocus(this, iSeqRow) });
  $('#id_sc_field_imagen' + iSeqRow).bind('blur', function() { sc_factura_rapida_imagen_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_factura_rapida_imagen_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_factura_rapida_imagen_onfocus(this, iSeqRow) });
  $('#id_sc_field_mostrar' + iSeqRow).bind('blur', function() { sc_factura_rapida_mostrar_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_factura_rapida_mostrar_onchange(this, iSeqRow) })
                                     .bind('click', function() { sc_factura_rapida_mostrar_onclick(this, iSeqRow) })
                                     .bind('focus', function() { sc_factura_rapida_mostrar_onfocus(this, iSeqRow) });
  $('#id_sc_field_vacio' + iSeqRow).bind('blur', function() { sc_factura_rapida_vacio_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_factura_rapida_vacio_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_factura_rapida_vacio_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-mostrar' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_factura_rapida_login_onblur(oThis, iSeqRow) {
  do_ajax_factura_rapida_validate_login();
  scCssBlur(oThis);
}

function sc_factura_rapida_login_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_factura_rapida_login_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_factura_rapida_password_onblur(oThis, iSeqRow) {
  do_ajax_factura_rapida_validate_password();
  scCssBlur(oThis);
}

function sc_factura_rapida_password_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_factura_rapida_password_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_factura_rapida_idioma_onblur(oThis, iSeqRow) {
  do_ajax_factura_rapida_validate_idioma();
  scCssBlur(oThis);
}

function sc_factura_rapida_idioma_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_factura_rapida_idioma_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_factura_rapida_imagen_onblur(oThis, iSeqRow) {
  do_ajax_factura_rapida_validate_imagen();
  scCssBlur(oThis);
}

function sc_factura_rapida_imagen_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_factura_rapida_imagen_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_factura_rapida_mostrar_onblur(oThis, iSeqRow) {
  do_ajax_factura_rapida_validate_mostrar();
  scCssBlur(oThis);
}

function sc_factura_rapida_mostrar_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_factura_rapida_mostrar_onclick(oThis, iSeqRow) {
  do_ajax_factura_rapida_event_mostrar_onclick();
}

function sc_factura_rapida_mostrar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_factura_rapida_vacio_onblur(oThis, iSeqRow) {
  do_ajax_factura_rapida_validate_vacio();
  scCssBlur(oThis);
}

function sc_factura_rapida_vacio_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_factura_rapida_vacio_onfocus(oThis, iSeqRow) {
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
	displayChange_field("imagen", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("login", "", status);
	displayChange_field("vacio", "", status);
	displayChange_field("password", "", status);
	displayChange_field("mostrar", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("idioma", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_imagen(row, status);
	displayChange_field_login(row, status);
	displayChange_field_vacio(row, status);
	displayChange_field_password(row, status);
	displayChange_field_mostrar(row, status);
	displayChange_field_idioma(row, status);
}

function displayChange_field(field, row, status) {
	if ("imagen" == field) {
		displayChange_field_imagen(row, status);
	}
	if ("login" == field) {
		displayChange_field_login(row, status);
	}
	if ("vacio" == field) {
		displayChange_field_vacio(row, status);
	}
	if ("password" == field) {
		displayChange_field_password(row, status);
	}
	if ("mostrar" == field) {
		displayChange_field_mostrar(row, status);
	}
	if ("idioma" == field) {
		displayChange_field_idioma(row, status);
	}
}

function displayChange_field_imagen(row, status) {
    var fieldId;
}

function displayChange_field_login(row, status) {
    var fieldId;
}

function displayChange_field_vacio(row, status) {
    var fieldId;
}

function displayChange_field_password(row, status) {
    var fieldId;
}

function displayChange_field_mostrar(row, status) {
    var fieldId;
}

function displayChange_field_idioma(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_factura_rapida_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(22);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'factura_rapida')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
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


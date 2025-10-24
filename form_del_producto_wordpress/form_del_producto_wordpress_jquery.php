
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
  scEventControl_data["pw_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_sku" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_producto_debi" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_tipo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_descripcion_corta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_precio_regular" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_estado_impuestos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_maneja_stock" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_cantidad_stock" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pw_categoria" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["pw_empresa" + iSeqRow] && scEventControl_data["pw_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_empresa" + iSeqRow] && scEventControl_data["pw_empresa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_id" + iSeqRow] && scEventControl_data["pw_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_id" + iSeqRow] && scEventControl_data["pw_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_sku" + iSeqRow] && scEventControl_data["pw_sku" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_sku" + iSeqRow] && scEventControl_data["pw_sku" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_producto_debi" + iSeqRow] && scEventControl_data["pw_producto_debi" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_producto_debi" + iSeqRow] && scEventControl_data["pw_producto_debi" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_tipo" + iSeqRow] && scEventControl_data["pw_tipo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_tipo" + iSeqRow] && scEventControl_data["pw_tipo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_descripcion" + iSeqRow] && scEventControl_data["pw_descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_descripcion" + iSeqRow] && scEventControl_data["pw_descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_descripcion_corta" + iSeqRow] && scEventControl_data["pw_descripcion_corta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_descripcion_corta" + iSeqRow] && scEventControl_data["pw_descripcion_corta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_precio_regular" + iSeqRow] && scEventControl_data["pw_precio_regular" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_precio_regular" + iSeqRow] && scEventControl_data["pw_precio_regular" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_estado_impuestos" + iSeqRow] && scEventControl_data["pw_estado_impuestos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_estado_impuestos" + iSeqRow] && scEventControl_data["pw_estado_impuestos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_maneja_stock" + iSeqRow] && scEventControl_data["pw_maneja_stock" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_maneja_stock" + iSeqRow] && scEventControl_data["pw_maneja_stock" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_cantidad_stock" + iSeqRow] && scEventControl_data["pw_cantidad_stock" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_cantidad_stock" + iSeqRow] && scEventControl_data["pw_cantidad_stock" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_estado" + iSeqRow] && scEventControl_data["pw_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_estado" + iSeqRow] && scEventControl_data["pw_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pw_categoria" + iSeqRow] && scEventControl_data["pw_categoria" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pw_categoria" + iSeqRow] && scEventControl_data["pw_categoria" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("pw_producto_debi" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pw_tipo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pw_estado_impuestos" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pw_estado" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pw_categoria" + iSeq == fieldName) {
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
  $('#id_sc_field_pw_empresa' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_empresa_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_producto_wordpress_pw_empresa_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_producto_wordpress_pw_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_id' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_id_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_del_producto_wordpress_pw_id_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_del_producto_wordpress_pw_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_sku' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_sku_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_del_producto_wordpress_pw_sku_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_del_producto_wordpress_pw_sku_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_producto_debi' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_producto_debi_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_producto_wordpress_pw_producto_debi_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_producto_wordpress_pw_producto_debi_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_tipo' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_tipo_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_producto_wordpress_pw_tipo_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_producto_wordpress_pw_tipo_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_descripcion' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_descripcion_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_producto_wordpress_pw_descripcion_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_producto_wordpress_pw_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_descripcion_corta' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_descripcion_corta_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_producto_wordpress_pw_descripcion_corta_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_producto_wordpress_pw_descripcion_corta_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_precio_regular' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_precio_regular_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_producto_wordpress_pw_precio_regular_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_producto_wordpress_pw_precio_regular_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_estado_impuestos' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_estado_impuestos_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_del_producto_wordpress_pw_estado_impuestos_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_producto_wordpress_pw_estado_impuestos_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_maneja_stock' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_maneja_stock_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_producto_wordpress_pw_maneja_stock_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_producto_wordpress_pw_maneja_stock_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_cantidad_stock' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_cantidad_stock_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_producto_wordpress_pw_cantidad_stock_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_producto_wordpress_pw_cantidad_stock_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_estado' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_estado_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_del_producto_wordpress_pw_estado_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_producto_wordpress_pw_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_pw_categoria' + iSeqRow).bind('blur', function() { sc_form_del_producto_wordpress_pw_categoria_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_producto_wordpress_pw_categoria_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_producto_wordpress_pw_categoria_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-pw_maneja_stock' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_del_producto_wordpress_pw_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_empresa();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_id_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_id();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_id_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_sku_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_sku();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_sku_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_sku_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_producto_debi_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_producto_debi();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_producto_debi_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_producto_debi_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_tipo_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_tipo();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_tipo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_tipo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_descripcion();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_descripcion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_descripcion_corta_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_descripcion_corta();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_descripcion_corta_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_descripcion_corta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_precio_regular_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_precio_regular();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_precio_regular_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_precio_regular_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_estado_impuestos_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_estado_impuestos();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_estado_impuestos_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_estado_impuestos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_maneja_stock_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_maneja_stock();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_maneja_stock_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_maneja_stock_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_cantidad_stock_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_cantidad_stock();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_cantidad_stock_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_cantidad_stock_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_estado();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_producto_wordpress_pw_categoria_onblur(oThis, iSeqRow) {
  do_ajax_form_del_producto_wordpress_validate_pw_categoria();
  scCssBlur(oThis);
}

function sc_form_del_producto_wordpress_pw_categoria_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_producto_wordpress_pw_categoria_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("pw_empresa", "", status);
	displayChange_field("pw_id", "", status);
	displayChange_field("pw_sku", "", status);
	displayChange_field("pw_producto_debi", "", status);
	displayChange_field("pw_tipo", "", status);
	displayChange_field("pw_descripcion", "", status);
	displayChange_field("pw_descripcion_corta", "", status);
	displayChange_field("pw_precio_regular", "", status);
	displayChange_field("pw_estado_impuestos", "", status);
	displayChange_field("pw_maneja_stock", "", status);
	displayChange_field("pw_cantidad_stock", "", status);
	displayChange_field("pw_estado", "", status);
	displayChange_field("pw_categoria", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_pw_empresa(row, status);
	displayChange_field_pw_id(row, status);
	displayChange_field_pw_sku(row, status);
	displayChange_field_pw_producto_debi(row, status);
	displayChange_field_pw_tipo(row, status);
	displayChange_field_pw_descripcion(row, status);
	displayChange_field_pw_descripcion_corta(row, status);
	displayChange_field_pw_precio_regular(row, status);
	displayChange_field_pw_estado_impuestos(row, status);
	displayChange_field_pw_maneja_stock(row, status);
	displayChange_field_pw_cantidad_stock(row, status);
	displayChange_field_pw_estado(row, status);
	displayChange_field_pw_categoria(row, status);
}

function displayChange_field(field, row, status) {
	if ("pw_empresa" == field) {
		displayChange_field_pw_empresa(row, status);
	}
	if ("pw_id" == field) {
		displayChange_field_pw_id(row, status);
	}
	if ("pw_sku" == field) {
		displayChange_field_pw_sku(row, status);
	}
	if ("pw_producto_debi" == field) {
		displayChange_field_pw_producto_debi(row, status);
	}
	if ("pw_tipo" == field) {
		displayChange_field_pw_tipo(row, status);
	}
	if ("pw_descripcion" == field) {
		displayChange_field_pw_descripcion(row, status);
	}
	if ("pw_descripcion_corta" == field) {
		displayChange_field_pw_descripcion_corta(row, status);
	}
	if ("pw_precio_regular" == field) {
		displayChange_field_pw_precio_regular(row, status);
	}
	if ("pw_estado_impuestos" == field) {
		displayChange_field_pw_estado_impuestos(row, status);
	}
	if ("pw_maneja_stock" == field) {
		displayChange_field_pw_maneja_stock(row, status);
	}
	if ("pw_cantidad_stock" == field) {
		displayChange_field_pw_cantidad_stock(row, status);
	}
	if ("pw_estado" == field) {
		displayChange_field_pw_estado(row, status);
	}
	if ("pw_categoria" == field) {
		displayChange_field_pw_categoria(row, status);
	}
}

function displayChange_field_pw_empresa(row, status) {
    var fieldId;
}

function displayChange_field_pw_id(row, status) {
    var fieldId;
}

function displayChange_field_pw_sku(row, status) {
    var fieldId;
}

function displayChange_field_pw_producto_debi(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pw_producto_debi__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pw_producto_debi" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pw_producto_debi");
	}
}

function displayChange_field_pw_tipo(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pw_tipo__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pw_tipo" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pw_tipo");
	}
}

function displayChange_field_pw_descripcion(row, status) {
    var fieldId;
}

function displayChange_field_pw_descripcion_corta(row, status) {
    var fieldId;
}

function displayChange_field_pw_precio_regular(row, status) {
    var fieldId;
}

function displayChange_field_pw_estado_impuestos(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pw_estado_impuestos__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pw_estado_impuestos" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pw_estado_impuestos");
	}
}

function displayChange_field_pw_maneja_stock(row, status) {
    var fieldId;
}

function displayChange_field_pw_cantidad_stock(row, status) {
    var fieldId;
}

function displayChange_field_pw_estado(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pw_estado__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pw_estado" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pw_estado");
	}
}

function displayChange_field_pw_categoria(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pw_categoria__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pw_categoria" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pw_categoria");
	}
}

function scRecreateSelect2() {
	displayChange_field_pw_producto_debi("all", "on");
	displayChange_field_pw_tipo("all", "on");
	displayChange_field_pw_estado_impuestos("all", "on");
	displayChange_field_pw_estado("all", "on");
	displayChange_field_pw_categoria("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_producto_wordpress_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(35);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_producto_wordpress')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "pw_producto_debi" == specificField) {
    scJQSelect2Add_pw_producto_debi(seqRow);
  }
  if (null == specificField || "pw_tipo" == specificField) {
    scJQSelect2Add_pw_tipo(seqRow);
  }
  if (null == specificField || "pw_estado_impuestos" == specificField) {
    scJQSelect2Add_pw_estado_impuestos(seqRow);
  }
  if (null == specificField || "pw_estado" == specificField) {
    scJQSelect2Add_pw_estado(seqRow);
  }
  if (null == specificField || "pw_categoria" == specificField) {
    scJQSelect2Add_pw_categoria(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_pw_producto_debi(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pw_producto_debi_obj" : "#id_sc_field_pw_producto_debi" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pw_producto_debi_obj',
      dropdownCssClass: 'css_pw_producto_debi_obj',
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

function scJQSelect2Add_pw_tipo(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pw_tipo_obj" : "#id_sc_field_pw_tipo" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pw_tipo_obj',
      dropdownCssClass: 'css_pw_tipo_obj',
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

function scJQSelect2Add_pw_estado_impuestos(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pw_estado_impuestos_obj" : "#id_sc_field_pw_estado_impuestos" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pw_estado_impuestos_obj',
      dropdownCssClass: 'css_pw_estado_impuestos_obj',
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

function scJQSelect2Add_pw_estado(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pw_estado_obj" : "#id_sc_field_pw_estado" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pw_estado_obj',
      dropdownCssClass: 'css_pw_estado_obj',
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

function scJQSelect2Add_pw_categoria(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pw_categoria_obj" : "#id_sc_field_pw_categoria" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pw_categoria_obj',
      dropdownCssClass: 'css_pw_categoria_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_pw_producto_debi) { displayChange_field_pw_producto_debi(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pw_tipo) { displayChange_field_pw_tipo(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pw_estado_impuestos) { displayChange_field_pw_estado_impuestos(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pw_estado) { displayChange_field_pw_estado(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pw_categoria) { displayChange_field_pw_categoria(iLine, "on"); } }, 150);
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


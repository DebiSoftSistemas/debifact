
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
  scEventControl_data["pag_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_mensaje" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_metodo_pago" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_banco_origen" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_cuenta_origen" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_monto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_cuenta_destino" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_documento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_usuario_paga" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pag_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["pag_id" + iSeqRow] && scEventControl_data["pag_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_id" + iSeqRow] && scEventControl_data["pag_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_empresa" + iSeqRow] && scEventControl_data["pag_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_empresa" + iSeqRow] && scEventControl_data["pag_empresa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_mensaje" + iSeqRow] && scEventControl_data["pag_mensaje" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_mensaje" + iSeqRow] && scEventControl_data["pag_mensaje" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_metodo_pago" + iSeqRow] && scEventControl_data["pag_metodo_pago" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_metodo_pago" + iSeqRow] && scEventControl_data["pag_metodo_pago" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_fecha" + iSeqRow] && scEventControl_data["pag_fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_fecha" + iSeqRow] && scEventControl_data["pag_fecha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_banco_origen" + iSeqRow] && scEventControl_data["pag_banco_origen" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_banco_origen" + iSeqRow] && scEventControl_data["pag_banco_origen" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_cuenta_origen" + iSeqRow] && scEventControl_data["pag_cuenta_origen" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_cuenta_origen" + iSeqRow] && scEventControl_data["pag_cuenta_origen" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_monto" + iSeqRow] && scEventControl_data["pag_monto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_monto" + iSeqRow] && scEventControl_data["pag_monto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_cuenta_destino" + iSeqRow] && scEventControl_data["pag_cuenta_destino" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_cuenta_destino" + iSeqRow] && scEventControl_data["pag_cuenta_destino" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_documento" + iSeqRow] && scEventControl_data["pag_documento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_documento" + iSeqRow] && scEventControl_data["pag_documento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_usuario_paga" + iSeqRow] && scEventControl_data["pag_usuario_paga" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_usuario_paga" + iSeqRow] && scEventControl_data["pag_usuario_paga" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pag_estado" + iSeqRow] && scEventControl_data["pag_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pag_estado" + iSeqRow] && scEventControl_data["pag_estado" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("pag_metodo_pago" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pag_cuenta_destino" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pag_metodo_pago" + iSeq == fieldName) {
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
  $('#id_sc_field_pag_id' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_id_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_fac_pagos_libretines_pag_id_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_fac_pagos_libretines_pag_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_empresa' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_empresa_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_fac_pagos_libretines_pag_empresa_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_fac_pagos_libretines_pag_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_fecha' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_fecha_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_fac_pagos_libretines_pag_fecha_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_fac_pagos_libretines_pag_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_metodo_pago' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_metodo_pago_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_fac_pagos_libretines_pag_metodo_pago_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_fac_pagos_libretines_pag_metodo_pago_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_monto' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_monto_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_fac_pagos_libretines_pag_monto_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_fac_pagos_libretines_pag_monto_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_documento' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_documento_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_fac_pagos_libretines_pag_documento_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_fac_pagos_libretines_pag_documento_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_estado' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_estado_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_fac_pagos_libretines_pag_estado_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_fac_pagos_libretines_pag_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_usuario_paga' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_usuario_paga_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_fac_pagos_libretines_pag_usuario_paga_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_fac_pagos_libretines_pag_usuario_paga_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_fecha_procesa' + iSeqRow).bind('change', function() { sc_form_fac_pagos_libretines_pag_fecha_procesa_onchange(this, iSeqRow) });
  $('#id_sc_field_pag_usuario_procesa' + iSeqRow).bind('change', function() { sc_form_fac_pagos_libretines_pag_usuario_procesa_onchange(this, iSeqRow) });
  $('#id_sc_field_pag_cuenta_origen' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_cuenta_origen_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_fac_pagos_libretines_pag_cuenta_origen_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_fac_pagos_libretines_pag_cuenta_origen_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_banco_origen' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_banco_origen_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_fac_pagos_libretines_pag_banco_origen_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_fac_pagos_libretines_pag_banco_origen_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_cuenta_destino' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_cuenta_destino_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_fac_pagos_libretines_pag_cuenta_destino_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_fac_pagos_libretines_pag_cuenta_destino_onfocus(this, iSeqRow) });
  $('#id_sc_field_pag_mensaje' + iSeqRow).bind('blur', function() { sc_form_fac_pagos_libretines_pag_mensaje_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_fac_pagos_libretines_pag_mensaje_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_fac_pagos_libretines_pag_mensaje_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_fac_pagos_libretines_pag_id_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_id();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_id_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_empresa();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_fecha();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_fecha_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_metodo_pago_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_metodo_pago();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_metodo_pago_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_fac_pagos_libretines_event_pag_metodo_pago_onchange();
}

function sc_form_fac_pagos_libretines_pag_metodo_pago_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_monto_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_monto();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_monto_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_monto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_documento_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_documento();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_documento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_documento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_estado();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_usuario_paga_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_usuario_paga();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_usuario_paga_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_usuario_paga_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_fecha_procesa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_usuario_procesa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_cuenta_origen_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_cuenta_origen();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_cuenta_origen_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_cuenta_origen_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_banco_origen_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_banco_origen();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_banco_origen_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_banco_origen_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_cuenta_destino_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_cuenta_destino();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_cuenta_destino_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_cuenta_destino_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_pagos_libretines_pag_mensaje_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_pagos_libretines_validate_pag_mensaje();
  scCssBlur(oThis);
}

function sc_form_fac_pagos_libretines_pag_mensaje_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_pagos_libretines_pag_mensaje_onfocus(oThis, iSeqRow) {
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
	displayChange_field("pag_id", "", status);
	displayChange_field("pag_empresa", "", status);
	displayChange_field("pag_mensaje", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("pag_metodo_pago", "", status);
	displayChange_field("pag_fecha", "", status);
	displayChange_field("pag_banco_origen", "", status);
	displayChange_field("pag_cuenta_origen", "", status);
	displayChange_field("pag_monto", "", status);
	displayChange_field("pag_cuenta_destino", "", status);
	displayChange_field("pag_documento", "", status);
	displayChange_field("pag_usuario_paga", "", status);
	displayChange_field("pag_estado", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_pag_id(row, status);
	displayChange_field_pag_empresa(row, status);
	displayChange_field_pag_mensaje(row, status);
	displayChange_field_pag_metodo_pago(row, status);
	displayChange_field_pag_fecha(row, status);
	displayChange_field_pag_banco_origen(row, status);
	displayChange_field_pag_cuenta_origen(row, status);
	displayChange_field_pag_monto(row, status);
	displayChange_field_pag_cuenta_destino(row, status);
	displayChange_field_pag_documento(row, status);
	displayChange_field_pag_usuario_paga(row, status);
	displayChange_field_pag_estado(row, status);
}

function displayChange_field(field, row, status) {
	if ("pag_id" == field) {
		displayChange_field_pag_id(row, status);
	}
	if ("pag_empresa" == field) {
		displayChange_field_pag_empresa(row, status);
	}
	if ("pag_mensaje" == field) {
		displayChange_field_pag_mensaje(row, status);
	}
	if ("pag_metodo_pago" == field) {
		displayChange_field_pag_metodo_pago(row, status);
	}
	if ("pag_fecha" == field) {
		displayChange_field_pag_fecha(row, status);
	}
	if ("pag_banco_origen" == field) {
		displayChange_field_pag_banco_origen(row, status);
	}
	if ("pag_cuenta_origen" == field) {
		displayChange_field_pag_cuenta_origen(row, status);
	}
	if ("pag_monto" == field) {
		displayChange_field_pag_monto(row, status);
	}
	if ("pag_cuenta_destino" == field) {
		displayChange_field_pag_cuenta_destino(row, status);
	}
	if ("pag_documento" == field) {
		displayChange_field_pag_documento(row, status);
	}
	if ("pag_usuario_paga" == field) {
		displayChange_field_pag_usuario_paga(row, status);
	}
	if ("pag_estado" == field) {
		displayChange_field_pag_estado(row, status);
	}
}

function displayChange_field_pag_id(row, status) {
    var fieldId;
}

function displayChange_field_pag_empresa(row, status) {
    var fieldId;
}

function displayChange_field_pag_mensaje(row, status) {
    var fieldId;
}

function displayChange_field_pag_metodo_pago(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pag_metodo_pago__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pag_metodo_pago" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pag_metodo_pago");
	}
}

function displayChange_field_pag_fecha(row, status) {
    var fieldId;
}

function displayChange_field_pag_banco_origen(row, status) {
    var fieldId;
}

function displayChange_field_pag_cuenta_origen(row, status) {
    var fieldId;
}

function displayChange_field_pag_monto(row, status) {
    var fieldId;
}

function displayChange_field_pag_cuenta_destino(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_pag_cuenta_destino__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_pag_cuenta_destino" + row).select2("destroy");
		}
		scJQSelect2Add(row, "pag_cuenta_destino");
	}
}

function displayChange_field_pag_documento(row, status) {
    var fieldId;
}

function displayChange_field_pag_usuario_paga(row, status) {
    var fieldId;
}

function displayChange_field_pag_estado(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_pag_metodo_pago("all", "on");
	displayChange_field_pag_cuenta_destino("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_fac_pagos_libretines_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(33);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_pag_fecha" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_pag_fecha" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_fac_pagos_libretines_validate_pag_fecha(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['pag_fecha']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_pag_fecha_procesa" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_pag_fecha_procesa" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_fac_pagos_libretines_validate_pag_fecha_procesa(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['pag_fecha_procesa']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_fac_pagos_libretines')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "pag_metodo_pago" == specificField) {
    scJQSelect2Add_pag_metodo_pago(seqRow);
  }
  if (null == specificField || "pag_cuenta_destino" == specificField) {
    scJQSelect2Add_pag_cuenta_destino(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_pag_metodo_pago(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pag_metodo_pago_obj" : "#id_sc_field_pag_metodo_pago" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_pag_metodo_pago_obj',
      dropdownCssClass: 'css_pag_metodo_pago_obj',
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

function scJQSelect2Add_pag_cuenta_destino(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_pag_cuenta_destino_obj" : "#id_sc_field_pag_cuenta_destino" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_pag_cuenta_destino_obj',
      dropdownCssClass: 'css_pag_cuenta_destino_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_pag_metodo_pago) { displayChange_field_pag_metodo_pago(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_pag_cuenta_destino) { displayChange_field_pag_cuenta_destino(iLine, "on"); } }, 150);
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


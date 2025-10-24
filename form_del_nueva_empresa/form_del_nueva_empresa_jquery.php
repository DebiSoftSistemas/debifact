
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
  scEventControl_data["emp_comisionista" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_ruc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_razon_social" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_nombre_comercial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_obligado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_contribuyente_especial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_ambiente_sri" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_clave" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["emp_clave_reingreso" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mensaje" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["emp_comisionista" + iSeqRow] && scEventControl_data["emp_comisionista" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_comisionista" + iSeqRow] && scEventControl_data["emp_comisionista" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_ruc" + iSeqRow] && scEventControl_data["emp_ruc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_ruc" + iSeqRow] && scEventControl_data["emp_ruc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_razon_social" + iSeqRow] && scEventControl_data["emp_razon_social" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_razon_social" + iSeqRow] && scEventControl_data["emp_razon_social" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_nombre_comercial" + iSeqRow] && scEventControl_data["emp_nombre_comercial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_nombre_comercial" + iSeqRow] && scEventControl_data["emp_nombre_comercial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_email" + iSeqRow] && scEventControl_data["emp_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_email" + iSeqRow] && scEventControl_data["emp_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_obligado" + iSeqRow] && scEventControl_data["emp_obligado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_obligado" + iSeqRow] && scEventControl_data["emp_obligado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_contribuyente_especial" + iSeqRow] && scEventControl_data["emp_contribuyente_especial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_contribuyente_especial" + iSeqRow] && scEventControl_data["emp_contribuyente_especial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_ambiente_sri" + iSeqRow] && scEventControl_data["emp_ambiente_sri" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_ambiente_sri" + iSeqRow] && scEventControl_data["emp_ambiente_sri" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_usuario" + iSeqRow] && scEventControl_data["emp_usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_usuario" + iSeqRow] && scEventControl_data["emp_usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_clave" + iSeqRow] && scEventControl_data["emp_clave" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_clave" + iSeqRow] && scEventControl_data["emp_clave" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["emp_clave_reingreso" + iSeqRow] && scEventControl_data["emp_clave_reingreso" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["emp_clave_reingreso" + iSeqRow] && scEventControl_data["emp_clave_reingreso" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mensaje" + iSeqRow] && scEventControl_data["mensaje" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mensaje" + iSeqRow] && scEventControl_data["mensaje" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("emp_comisionista" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("emp_obligado" + iSeq == fieldName) {
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
  $('#id_sc_field_emp_ruc' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_ruc_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_nueva_empresa_emp_ruc_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_nueva_empresa_emp_ruc_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_razon_social' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_razon_social_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_nueva_empresa_emp_razon_social_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_nueva_empresa_emp_razon_social_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_nombre_comercial' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_nombre_comercial_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_nueva_empresa_emp_nombre_comercial_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_nueva_empresa_emp_nombre_comercial_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_logo' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_logo_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_firma' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_firma_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_clave_firma' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_clave_firma_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_obligado' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_obligado_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_nueva_empresa_emp_obligado_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_nueva_empresa_emp_obligado_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_contribuyente_especial' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_contribuyente_especial_onblur(this, iSeqRow) })
                                                        .bind('change', function() { sc_form_del_nueva_empresa_emp_contribuyente_especial_onchange(this, iSeqRow) })
                                                        .bind('focus', function() { sc_form_del_nueva_empresa_emp_contribuyente_especial_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_estado' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_estado_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_email' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_email_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_del_nueva_empresa_emp_email_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_nueva_empresa_emp_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_ambiente_sri' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_ambiente_sri_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_nueva_empresa_emp_ambiente_sri_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_nueva_empresa_emp_ambiente_sri_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_direccion_matriz' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_direccion_matriz_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_autorizacion_inmediata' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_autorizacion_inmediata_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_es_op_transporte' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_es_op_transporte_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_representante_legal' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_representante_legal_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_regimen_especial' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_regimen_especial_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_telefono' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_telefono_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_agente_retencion' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_agente_retencion_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_calificacion_artesanal' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_calificacion_artesanal_onchange(this, iSeqRow) });
  $('#id_sc_field_escontribuyenteespecial' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_escontribuyenteespecial_onchange(this, iSeqRow) });
  $('#id_sc_field_esartesanocalificado' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_esartesanocalificado_onchange(this, iSeqRow) });
  $('#id_sc_field_es_profesionalsalud' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_es_profesionalsalud_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_primeracompra' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_primeracompra_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_tipo_empresa' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_tipo_empresa_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_comisionista' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_comisionista_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_nueva_empresa_emp_comisionista_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_nueva_empresa_emp_comisionista_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_tipo_suscripcion' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_tipo_suscripcion_onchange(this, iSeqRow) });
  $('#id_sc_field_usu_cedula' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_usu_cedula_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_clave_reingreso' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_clave_reingreso_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_del_nueva_empresa_emp_clave_reingreso_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_nueva_empresa_emp_clave_reingreso_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_nombre_usuario' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_emp_nombre_usuario_onchange(this, iSeqRow) });
  $('#id_sc_field_mensaje' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_mensaje_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_nueva_empresa_mensaje_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_nueva_empresa_mensaje_onfocus(this, iSeqRow) });
  $('#id_sc_field_usu_email' + iSeqRow).bind('change', function() { sc_form_del_nueva_empresa_usu_email_onchange(this, iSeqRow) });
  $('#id_sc_field_emp_clave' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_clave_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_del_nueva_empresa_emp_clave_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_nueva_empresa_emp_clave_onfocus(this, iSeqRow) });
  $('#id_sc_field_emp_usuario' + iSeqRow).bind('blur', function() { sc_form_del_nueva_empresa_emp_usuario_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_nueva_empresa_emp_usuario_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_nueva_empresa_emp_usuario_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-emp_obligado' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_del_nueva_empresa_emp_ruc_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_ruc();
  scCssBlur(oThis);
  do_ajax_form_del_nueva_empresa_event_emp_ruc_onblur();
}

function sc_form_del_nueva_empresa_emp_ruc_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_ruc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_emp_razon_social_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_razon_social();
  scCssBlur(oThis);
}

function sc_form_del_nueva_empresa_emp_razon_social_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_razon_social_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_emp_nombre_comercial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_nombre_comercial();
  scCssBlur(oThis);
}

function sc_form_del_nueva_empresa_emp_nombre_comercial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_nombre_comercial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_emp_logo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_firma_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_clave_firma_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_obligado_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_obligado();
  scCssBlur(oThis);
}

function sc_form_del_nueva_empresa_emp_obligado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_nueva_empresa_event_emp_obligado_onchange();
}

function sc_form_del_nueva_empresa_emp_obligado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_emp_contribuyente_especial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_contribuyente_especial();
  scCssBlur(oThis);
}

function sc_form_del_nueva_empresa_emp_contribuyente_especial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_contribuyente_especial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_emp_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_email_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_email();
  scCssBlur(oThis);
}

function sc_form_del_nueva_empresa_emp_email_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_emp_ambiente_sri_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_ambiente_sri();
  scCssBlur(oThis);
}

function sc_form_del_nueva_empresa_emp_ambiente_sri_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_ambiente_sri_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_emp_direccion_matriz_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_autorizacion_inmediata_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_es_op_transporte_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_representante_legal_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_regimen_especial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_telefono_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_agente_retencion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_calificacion_artesanal_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_escontribuyenteespecial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_esartesanocalificado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_es_profesionalsalud_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_primeracompra_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_tipo_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_comisionista_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_comisionista();
  scCssBlur(oThis);
}

function sc_form_del_nueva_empresa_emp_comisionista_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_comisionista_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_emp_tipo_suscripcion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_usu_cedula_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_clave_reingreso_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_clave_reingreso();
  scCssBlur(oThis);
  do_ajax_form_del_nueva_empresa_event_emp_clave_reingreso_onblur();
}

function sc_form_del_nueva_empresa_emp_clave_reingreso_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_clave_reingreso_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_emp_nombre_usuario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_mensaje_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_mensaje();
  scCssBlur(oThis);
}

function sc_form_del_nueva_empresa_mensaje_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_mensaje_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_usu_email_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_clave_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_clave();
  scCssBlur(oThis);
  do_ajax_form_del_nueva_empresa_event_emp_clave_onblur();
}

function sc_form_del_nueva_empresa_emp_clave_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_clave_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_nueva_empresa_emp_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_del_nueva_empresa_validate_emp_usuario();
  scCssBlur(oThis);
  do_ajax_form_del_nueva_empresa_event_emp_usuario_onblur();
}

function sc_form_del_nueva_empresa_emp_usuario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_nueva_empresa_emp_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("emp_comisionista", "", status);
	displayChange_field("emp_ruc", "", status);
	displayChange_field("emp_razon_social", "", status);
	displayChange_field("emp_nombre_comercial", "", status);
	displayChange_field("emp_email", "", status);
	displayChange_field("emp_obligado", "", status);
	displayChange_field("emp_contribuyente_especial", "", status);
	displayChange_field("emp_ambiente_sri", "", status);
	displayChange_field("emp_usuario", "", status);
	displayChange_field("emp_clave", "", status);
	displayChange_field("emp_clave_reingreso", "", status);
	displayChange_field("mensaje", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_emp_comisionista(row, status);
	displayChange_field_emp_ruc(row, status);
	displayChange_field_emp_razon_social(row, status);
	displayChange_field_emp_nombre_comercial(row, status);
	displayChange_field_emp_email(row, status);
	displayChange_field_emp_obligado(row, status);
	displayChange_field_emp_contribuyente_especial(row, status);
	displayChange_field_emp_ambiente_sri(row, status);
	displayChange_field_emp_usuario(row, status);
	displayChange_field_emp_clave(row, status);
	displayChange_field_emp_clave_reingreso(row, status);
	displayChange_field_mensaje(row, status);
}

function displayChange_field(field, row, status) {
	if ("emp_comisionista" == field) {
		displayChange_field_emp_comisionista(row, status);
	}
	if ("emp_ruc" == field) {
		displayChange_field_emp_ruc(row, status);
	}
	if ("emp_razon_social" == field) {
		displayChange_field_emp_razon_social(row, status);
	}
	if ("emp_nombre_comercial" == field) {
		displayChange_field_emp_nombre_comercial(row, status);
	}
	if ("emp_email" == field) {
		displayChange_field_emp_email(row, status);
	}
	if ("emp_obligado" == field) {
		displayChange_field_emp_obligado(row, status);
	}
	if ("emp_contribuyente_especial" == field) {
		displayChange_field_emp_contribuyente_especial(row, status);
	}
	if ("emp_ambiente_sri" == field) {
		displayChange_field_emp_ambiente_sri(row, status);
	}
	if ("emp_usuario" == field) {
		displayChange_field_emp_usuario(row, status);
	}
	if ("emp_clave" == field) {
		displayChange_field_emp_clave(row, status);
	}
	if ("emp_clave_reingreso" == field) {
		displayChange_field_emp_clave_reingreso(row, status);
	}
	if ("mensaje" == field) {
		displayChange_field_mensaje(row, status);
	}
}

function displayChange_field_emp_comisionista(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_emp_comisionista__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_emp_comisionista" + row).select2("destroy");
		}
		scJQSelect2Add(row, "emp_comisionista");
	}
}

function displayChange_field_emp_ruc(row, status) {
    var fieldId;
}

function displayChange_field_emp_razon_social(row, status) {
    var fieldId;
}

function displayChange_field_emp_nombre_comercial(row, status) {
    var fieldId;
}

function displayChange_field_emp_email(row, status) {
    var fieldId;
}

function displayChange_field_emp_obligado(row, status) {
    var fieldId;
}

function displayChange_field_emp_contribuyente_especial(row, status) {
    var fieldId;
}

function displayChange_field_emp_ambiente_sri(row, status) {
    var fieldId;
}

function displayChange_field_emp_usuario(row, status) {
    var fieldId;
}

function displayChange_field_emp_clave(row, status) {
    var fieldId;
}

function displayChange_field_emp_clave_reingreso(row, status) {
    var fieldId;
}

function displayChange_field_mensaje(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_emp_comisionista("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_nueva_empresa_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(30);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_emp_logo" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_del_nueva_empresa_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'emp_logo'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    change: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_emp_logo(data);
      if ('ok' != checkUploadSize) {
        e.preventDefault();
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
    },
    drop: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_emp_logo(data);
      if ('ok' != checkUploadSize) {
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
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
        $("#id_img_loader_emp_logo" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_emp_logo" + iSeqRow).hide();
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
      $("#id_sc_field_emp_logo" + iSeqRow).val("");
      $("#id_sc_field_emp_logo_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_emp_logo_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_emp_logo = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_emp_logo) ? "none" : "";
      $("#id_ajax_img_emp_logo" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_emp_logo" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_emp_logo) {
        document.F1.temp_out_emp_logo.value = var_ajax_img_thumb;
        document.F1.temp_out1_emp_logo.value = var_ajax_img_emp_logo;
      }
      else if (document.F1.temp_out_emp_logo) {
        document.F1.temp_out_emp_logo.value = var_ajax_img_emp_logo;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_emp_logo" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_emp_logo" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_emp_logo" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_emp_logo" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_emp_firma" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_del_nueva_empresa_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'emp_firma'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    change: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_emp_firma(data);
      if ('ok' != checkUploadSize) {
        e.preventDefault();
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
    },
    drop: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_emp_firma(data);
      if ('ok' != checkUploadSize) {
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
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
        $("#id_img_loader_emp_firma" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_emp_firma" + iSeqRow).hide();
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
      $("#id_sc_field_emp_firma" + iSeqRow).val("");
      $("#id_sc_field_emp_firma_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_emp_firma_ul_type" + iSeqRow).val(fileData[0].type);
      $("#id_ajax_doc_emp_firma" + iSeqRow).html(fileData[0].name);
      $("#id_ajax_doc_emp_firma" + iSeqRow).css("display", "");
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_emp_firma" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_emp_firma" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_nueva_empresa')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "emp_comisionista" == specificField) {
    scJQSelect2Add_emp_comisionista(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_emp_comisionista(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_emp_comisionista_obj" : "#id_sc_field_emp_comisionista" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_emp_comisionista_obj',
      dropdownCssClass: 'css_emp_comisionista_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_emp_comisionista) { displayChange_field_emp_comisionista(iLine, "on"); } }, 150);
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

function scCheckUploadExtensionSize_emp_logo(thisField)
{
    if ("files" in thisField && thisField.files.length > 0) {
        thisFileExtension = scGetFileExtension(thisField.files[0].name);


        if (!["jpg", "png", ""].includes(thisFileExtension)) {
            return 'err_extension||' + thisFileExtension.toUpperCase();
        }
    }

    return 'ok';
}

function scCheckUploadExtensionSize_emp_firma(thisField)
{
    if ("files" in thisField && thisField.files.length > 0) {
        thisFileExtension = scGetFileExtension(thisField.files[0].name);


        if (!["p12", ""].includes(thisFileExtension)) {
            return 'err_extension||' + thisFileExtension.toUpperCase();
        }
    }

    return 'ok';
}


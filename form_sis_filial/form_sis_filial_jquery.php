
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
  scEventControl_data["fil_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_razon_social" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_ruc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_representante" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_contador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_actividad_economica" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_obligado_contabilidad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_contribuyente_especial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_padronrimpe" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_ambiente_sri" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_pais" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_provincia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_ciudad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_parroquia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_barrio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fil_referencia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["fil_empresa" + iSeqRow] && scEventControl_data["fil_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_empresa" + iSeqRow] && scEventControl_data["fil_empresa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_razon_social" + iSeqRow] && scEventControl_data["fil_razon_social" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_razon_social" + iSeqRow] && scEventControl_data["fil_razon_social" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_nombre" + iSeqRow] && scEventControl_data["fil_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_nombre" + iSeqRow] && scEventControl_data["fil_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_ruc" + iSeqRow] && scEventControl_data["fil_ruc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_ruc" + iSeqRow] && scEventControl_data["fil_ruc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_telefono" + iSeqRow] && scEventControl_data["fil_telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_telefono" + iSeqRow] && scEventControl_data["fil_telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_email" + iSeqRow] && scEventControl_data["fil_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_email" + iSeqRow] && scEventControl_data["fil_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_representante" + iSeqRow] && scEventControl_data["fil_representante" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_representante" + iSeqRow] && scEventControl_data["fil_representante" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_contador" + iSeqRow] && scEventControl_data["fil_contador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_contador" + iSeqRow] && scEventControl_data["fil_contador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_actividad_economica" + iSeqRow] && scEventControl_data["fil_actividad_economica" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_actividad_economica" + iSeqRow] && scEventControl_data["fil_actividad_economica" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_obligado_contabilidad" + iSeqRow] && scEventControl_data["fil_obligado_contabilidad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_obligado_contabilidad" + iSeqRow] && scEventControl_data["fil_obligado_contabilidad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_contribuyente_especial" + iSeqRow] && scEventControl_data["fil_contribuyente_especial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_contribuyente_especial" + iSeqRow] && scEventControl_data["fil_contribuyente_especial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_padronrimpe" + iSeqRow] && scEventControl_data["fil_padronrimpe" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_padronrimpe" + iSeqRow] && scEventControl_data["fil_padronrimpe" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_ambiente_sri" + iSeqRow] && scEventControl_data["fil_ambiente_sri" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_ambiente_sri" + iSeqRow] && scEventControl_data["fil_ambiente_sri" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_estado" + iSeqRow] && scEventControl_data["fil_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_estado" + iSeqRow] && scEventControl_data["fil_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_pais" + iSeqRow] && scEventControl_data["fil_pais" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_pais" + iSeqRow] && scEventControl_data["fil_pais" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_provincia" + iSeqRow] && scEventControl_data["fil_provincia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_provincia" + iSeqRow] && scEventControl_data["fil_provincia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_ciudad" + iSeqRow] && scEventControl_data["fil_ciudad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_ciudad" + iSeqRow] && scEventControl_data["fil_ciudad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_parroquia" + iSeqRow] && scEventControl_data["fil_parroquia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_parroquia" + iSeqRow] && scEventControl_data["fil_parroquia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_barrio" + iSeqRow] && scEventControl_data["fil_barrio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_barrio" + iSeqRow] && scEventControl_data["fil_barrio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_direccion" + iSeqRow] && scEventControl_data["fil_direccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_direccion" + iSeqRow] && scEventControl_data["fil_direccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fil_referencia" + iSeqRow] && scEventControl_data["fil_referencia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fil_referencia" + iSeqRow] && scEventControl_data["fil_referencia" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("fil_empresa" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fil_actividad_economica" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fil_obligado_contabilidad" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fil_ambiente_sri" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fil_estado" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fil_pais" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fil_provincia" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fil_ciudad" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fil_parroquia" + iSeq == fieldName) {
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
  $('#id_sc_field_fil_id' + iSeqRow).bind('change', function() { sc_form_sis_filial_fil_id_onchange(this, iSeqRow) });
  $('#id_sc_field_fil_empresa' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_empresa_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_sis_filial_fil_empresa_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_sis_filial_fil_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_nombre' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_nombre_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_sis_filial_fil_nombre_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sis_filial_fil_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_ruc' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_ruc_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_sis_filial_fil_ruc_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_sis_filial_fil_ruc_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_email' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_email_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_sis_filial_fil_email_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_sis_filial_fil_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_representante' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_representante_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_sis_filial_fil_representante_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_sis_filial_fil_representante_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_contador' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_contador_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_sis_filial_fil_contador_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_sis_filial_fil_contador_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_actividad_economica' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_actividad_economica_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_sis_filial_fil_actividad_economica_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_sis_filial_fil_actividad_economica_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_estado' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_estado_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_sis_filial_fil_estado_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sis_filial_fil_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_pais' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_pais_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_sis_filial_fil_pais_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_sis_filial_fil_pais_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_provincia' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_provincia_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_sis_filial_fil_provincia_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_sis_filial_fil_provincia_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_ciudad' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_ciudad_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_sis_filial_fil_ciudad_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sis_filial_fil_ciudad_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_barrio' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_barrio_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_sis_filial_fil_barrio_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sis_filial_fil_barrio_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_direccion' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_direccion_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_sis_filial_fil_direccion_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_sis_filial_fil_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_referencia' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_referencia_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_sis_filial_fil_referencia_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_sis_filial_fil_referencia_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_parroquia' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_parroquia_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_sis_filial_fil_parroquia_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_sis_filial_fil_parroquia_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_telefono' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_telefono_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_sis_filial_fil_telefono_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_sis_filial_fil_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_razon_social' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_razon_social_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_sis_filial_fil_razon_social_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_sis_filial_fil_razon_social_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_obligado_contabilidad' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_obligado_contabilidad_onblur(this, iSeqRow) })
                                                       .bind('change', function() { sc_form_sis_filial_fil_obligado_contabilidad_onchange(this, iSeqRow) })
                                                       .bind('focus', function() { sc_form_sis_filial_fil_obligado_contabilidad_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_contribuyente_especial' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_contribuyente_especial_onblur(this, iSeqRow) })
                                                        .bind('change', function() { sc_form_sis_filial_fil_contribuyente_especial_onchange(this, iSeqRow) })
                                                        .bind('focus', function() { sc_form_sis_filial_fil_contribuyente_especial_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_ambiente_sri' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_ambiente_sri_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_sis_filial_fil_ambiente_sri_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_sis_filial_fil_ambiente_sri_onfocus(this, iSeqRow) });
  $('#id_sc_field_fil_padronrimpe' + iSeqRow).bind('blur', function() { sc_form_sis_filial_fil_padronrimpe_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_sis_filial_fil_padronrimpe_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_sis_filial_fil_padronrimpe_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-fil_padronrimpe' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_sis_filial_fil_id_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_empresa();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_nombre();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_nombre_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_ruc_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_ruc();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_ruc_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_ruc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_email_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_email();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_email_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_representante_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_representante();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_representante_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_representante_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_contador_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_contador();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_contador_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_contador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_actividad_economica_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_actividad_economica();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_actividad_economica_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_actividad_economica_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_estado();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_pais_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_pais();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_pais_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_sis_filial_refresh_fil_pais();
}

function sc_form_sis_filial_fil_pais_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_provincia_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_provincia();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_provincia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_sis_filial_refresh_fil_provincia();
}

function sc_form_sis_filial_fil_provincia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_ciudad_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_ciudad();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_ciudad_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_sis_filial_refresh_fil_ciudad();
}

function sc_form_sis_filial_fil_ciudad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_barrio_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_barrio();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_barrio_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_barrio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_direccion();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_direccion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_referencia_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_referencia();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_referencia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_referencia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_parroquia_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_parroquia();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_parroquia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_parroquia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_telefono();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_telefono_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_razon_social_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_razon_social();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_razon_social_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_razon_social_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_obligado_contabilidad_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_obligado_contabilidad();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_obligado_contabilidad_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_obligado_contabilidad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_contribuyente_especial_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_contribuyente_especial();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_contribuyente_especial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_contribuyente_especial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_ambiente_sri_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_ambiente_sri();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_ambiente_sri_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_ambiente_sri_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_sis_filial_fil_padronrimpe_onblur(oThis, iSeqRow) {
  do_ajax_form_sis_filial_validate_fil_padronrimpe();
  scCssBlur(oThis);
}

function sc_form_sis_filial_fil_padronrimpe_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_sis_filial_fil_padronrimpe_onfocus(oThis, iSeqRow) {
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
	displayChange_field("fil_empresa", "", status);
	displayChange_field("fil_razon_social", "", status);
	displayChange_field("fil_nombre", "", status);
	displayChange_field("fil_ruc", "", status);
	displayChange_field("fil_telefono", "", status);
	displayChange_field("fil_email", "", status);
	displayChange_field("fil_representante", "", status);
	displayChange_field("fil_contador", "", status);
	displayChange_field("fil_actividad_economica", "", status);
	displayChange_field("fil_obligado_contabilidad", "", status);
	displayChange_field("fil_contribuyente_especial", "", status);
	displayChange_field("fil_padronrimpe", "", status);
	displayChange_field("fil_ambiente_sri", "", status);
	displayChange_field("fil_estado", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("fil_pais", "", status);
	displayChange_field("fil_provincia", "", status);
	displayChange_field("fil_ciudad", "", status);
	displayChange_field("fil_parroquia", "", status);
	displayChange_field("fil_barrio", "", status);
	displayChange_field("fil_direccion", "", status);
	displayChange_field("fil_referencia", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_fil_empresa(row, status);
	displayChange_field_fil_razon_social(row, status);
	displayChange_field_fil_nombre(row, status);
	displayChange_field_fil_ruc(row, status);
	displayChange_field_fil_telefono(row, status);
	displayChange_field_fil_email(row, status);
	displayChange_field_fil_representante(row, status);
	displayChange_field_fil_contador(row, status);
	displayChange_field_fil_actividad_economica(row, status);
	displayChange_field_fil_obligado_contabilidad(row, status);
	displayChange_field_fil_contribuyente_especial(row, status);
	displayChange_field_fil_padronrimpe(row, status);
	displayChange_field_fil_ambiente_sri(row, status);
	displayChange_field_fil_estado(row, status);
	displayChange_field_fil_pais(row, status);
	displayChange_field_fil_provincia(row, status);
	displayChange_field_fil_ciudad(row, status);
	displayChange_field_fil_parroquia(row, status);
	displayChange_field_fil_barrio(row, status);
	displayChange_field_fil_direccion(row, status);
	displayChange_field_fil_referencia(row, status);
}

function displayChange_field(field, row, status) {
	if ("fil_empresa" == field) {
		displayChange_field_fil_empresa(row, status);
	}
	if ("fil_razon_social" == field) {
		displayChange_field_fil_razon_social(row, status);
	}
	if ("fil_nombre" == field) {
		displayChange_field_fil_nombre(row, status);
	}
	if ("fil_ruc" == field) {
		displayChange_field_fil_ruc(row, status);
	}
	if ("fil_telefono" == field) {
		displayChange_field_fil_telefono(row, status);
	}
	if ("fil_email" == field) {
		displayChange_field_fil_email(row, status);
	}
	if ("fil_representante" == field) {
		displayChange_field_fil_representante(row, status);
	}
	if ("fil_contador" == field) {
		displayChange_field_fil_contador(row, status);
	}
	if ("fil_actividad_economica" == field) {
		displayChange_field_fil_actividad_economica(row, status);
	}
	if ("fil_obligado_contabilidad" == field) {
		displayChange_field_fil_obligado_contabilidad(row, status);
	}
	if ("fil_contribuyente_especial" == field) {
		displayChange_field_fil_contribuyente_especial(row, status);
	}
	if ("fil_padronrimpe" == field) {
		displayChange_field_fil_padronrimpe(row, status);
	}
	if ("fil_ambiente_sri" == field) {
		displayChange_field_fil_ambiente_sri(row, status);
	}
	if ("fil_estado" == field) {
		displayChange_field_fil_estado(row, status);
	}
	if ("fil_pais" == field) {
		displayChange_field_fil_pais(row, status);
	}
	if ("fil_provincia" == field) {
		displayChange_field_fil_provincia(row, status);
	}
	if ("fil_ciudad" == field) {
		displayChange_field_fil_ciudad(row, status);
	}
	if ("fil_parroquia" == field) {
		displayChange_field_fil_parroquia(row, status);
	}
	if ("fil_barrio" == field) {
		displayChange_field_fil_barrio(row, status);
	}
	if ("fil_direccion" == field) {
		displayChange_field_fil_direccion(row, status);
	}
	if ("fil_referencia" == field) {
		displayChange_field_fil_referencia(row, status);
	}
}

function displayChange_field_fil_empresa(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fil_empresa__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fil_empresa" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fil_empresa");
	}
}

function displayChange_field_fil_razon_social(row, status) {
    var fieldId;
}

function displayChange_field_fil_nombre(row, status) {
    var fieldId;
}

function displayChange_field_fil_ruc(row, status) {
    var fieldId;
}

function displayChange_field_fil_telefono(row, status) {
    var fieldId;
}

function displayChange_field_fil_email(row, status) {
    var fieldId;
}

function displayChange_field_fil_representante(row, status) {
    var fieldId;
}

function displayChange_field_fil_contador(row, status) {
    var fieldId;
}

function displayChange_field_fil_actividad_economica(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fil_actividad_economica__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fil_actividad_economica" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fil_actividad_economica");
	}
}

function displayChange_field_fil_obligado_contabilidad(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fil_obligado_contabilidad__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fil_obligado_contabilidad" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fil_obligado_contabilidad");
	}
}

function displayChange_field_fil_contribuyente_especial(row, status) {
    var fieldId;
}

function displayChange_field_fil_padronrimpe(row, status) {
    var fieldId;
}

function displayChange_field_fil_ambiente_sri(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fil_ambiente_sri__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fil_ambiente_sri" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fil_ambiente_sri");
	}
}

function displayChange_field_fil_estado(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fil_estado__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fil_estado" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fil_estado");
	}
}

function displayChange_field_fil_pais(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fil_pais__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fil_pais" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fil_pais");
	}
}

function displayChange_field_fil_provincia(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fil_provincia__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fil_provincia" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fil_provincia");
	}
}

function displayChange_field_fil_ciudad(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fil_ciudad__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fil_ciudad" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fil_ciudad");
	}
}

function displayChange_field_fil_parroquia(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fil_parroquia__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fil_parroquia" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fil_parroquia");
	}
}

function displayChange_field_fil_barrio(row, status) {
    var fieldId;
}

function displayChange_field_fil_direccion(row, status) {
    var fieldId;
}

function displayChange_field_fil_referencia(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_fil_empresa("all", "on");
	displayChange_field_fil_actividad_economica("all", "on");
	displayChange_field_fil_obligado_contabilidad("all", "on");
	displayChange_field_fil_ambiente_sri("all", "on");
	displayChange_field_fil_estado("all", "on");
	displayChange_field_fil_pais("all", "on");
	displayChange_field_fil_provincia("all", "on");
	displayChange_field_fil_ciudad("all", "on");
	displayChange_field_fil_parroquia("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_sis_filial_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(23);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_sis_filial')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "fil_empresa" == specificField) {
    scJQSelect2Add_fil_empresa(seqRow);
  }
  if (null == specificField || "fil_actividad_economica" == specificField) {
    scJQSelect2Add_fil_actividad_economica(seqRow);
  }
  if (null == specificField || "fil_obligado_contabilidad" == specificField) {
    scJQSelect2Add_fil_obligado_contabilidad(seqRow);
  }
  if (null == specificField || "fil_ambiente_sri" == specificField) {
    scJQSelect2Add_fil_ambiente_sri(seqRow);
  }
  if (null == specificField || "fil_estado" == specificField) {
    scJQSelect2Add_fil_estado(seqRow);
  }
  if (null == specificField || "fil_pais" == specificField) {
    scJQSelect2Add_fil_pais(seqRow);
  }
  if (null == specificField || "fil_provincia" == specificField) {
    scJQSelect2Add_fil_provincia(seqRow);
  }
  if (null == specificField || "fil_ciudad" == specificField) {
    scJQSelect2Add_fil_ciudad(seqRow);
  }
  if (null == specificField || "fil_parroquia" == specificField) {
    scJQSelect2Add_fil_parroquia(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_fil_empresa(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fil_empresa_obj" : "#id_sc_field_fil_empresa" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fil_empresa_obj',
      dropdownCssClass: 'css_fil_empresa_obj',
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

function scJQSelect2Add_fil_actividad_economica(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fil_actividad_economica_obj" : "#id_sc_field_fil_actividad_economica" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fil_actividad_economica_obj',
      dropdownCssClass: 'css_fil_actividad_economica_obj',
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

function scJQSelect2Add_fil_obligado_contabilidad(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fil_obligado_contabilidad_obj" : "#id_sc_field_fil_obligado_contabilidad" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fil_obligado_contabilidad_obj',
      dropdownCssClass: 'css_fil_obligado_contabilidad_obj',
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

function scJQSelect2Add_fil_ambiente_sri(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fil_ambiente_sri_obj" : "#id_sc_field_fil_ambiente_sri" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_fil_ambiente_sri_obj',
      dropdownCssClass: 'css_fil_ambiente_sri_obj',
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

function scJQSelect2Add_fil_estado(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fil_estado_obj" : "#id_sc_field_fil_estado" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fil_estado_obj',
      dropdownCssClass: 'css_fil_estado_obj',
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

function scJQSelect2Add_fil_pais(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fil_pais_obj" : "#id_sc_field_fil_pais" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fil_pais_obj',
      dropdownCssClass: 'css_fil_pais_obj',
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

function scJQSelect2Add_fil_provincia(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fil_provincia_obj" : "#id_sc_field_fil_provincia" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fil_provincia_obj',
      dropdownCssClass: 'css_fil_provincia_obj',
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

function scJQSelect2Add_fil_ciudad(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fil_ciudad_obj" : "#id_sc_field_fil_ciudad" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fil_ciudad_obj',
      dropdownCssClass: 'css_fil_ciudad_obj',
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

function scJQSelect2Add_fil_parroquia(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fil_parroquia_obj" : "#id_sc_field_fil_parroquia" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fil_parroquia_obj',
      dropdownCssClass: 'css_fil_parroquia_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_fil_empresa) { displayChange_field_fil_empresa(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fil_actividad_economica) { displayChange_field_fil_actividad_economica(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fil_obligado_contabilidad) { displayChange_field_fil_obligado_contabilidad(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fil_ambiente_sri) { displayChange_field_fil_ambiente_sri(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fil_estado) { displayChange_field_fil_estado(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fil_pais) { displayChange_field_fil_pais(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fil_provincia) { displayChange_field_fil_provincia(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fil_ciudad) { displayChange_field_fil_ciudad(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fil_parroquia) { displayChange_field_fil_parroquia(iLine, "on"); } }, 150);
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


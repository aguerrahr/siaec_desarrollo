﻿<?php
//------------------------------------------------------------------------------
//*** Català (ca)
//------------------------------------------------------------------------------
function setLanguageCa(){
    $lang['='] = "=";  // "equal";
    $lang['!='] = "!="; // "not equal"; 
    $lang['>'] = ">";  // "bigger";
    $lang['>='] = ">=";  // "bigger or equal"; 
    $lang['<'] = "<";  // "smaller";
    $lang['<='] = "<=";  // "smaller or equal";            
    $lang['add'] = "Afegir";
    $lang['add_new'] = "+ Afegir Nou";
    $lang['add_new_record'] = "Afegir nou registre";
    $lang['add_new_record_blocked'] = "Comprovació de seguretat: intent d'afegir un nou registre. Comproveu la configuració, l'operació no està permesa!";
    $lang['adding_operation_completed'] = "La operació d'afegit s'ha completat correctament.";
    $lang['adding_operation_uncompleted'] = "La operació d'afegit NO s'ha pogut completar!";
    $lang['alert_perform_operation'] = "Estàs segur que vols realitzar aquesta operació?";
    $lang['alert_select_row'] = "Cal seleccionar una o més files per dur a terme aquesta operació!";
	$lang['alert_field_cannot_be_empty'] = 'Field {title} cannot be empty! Please re-enter.';
	$lang['alert_field_must_be_alphabetic'] = 'Field {title} must have alphabetic value! Please re-enter.';
	$lang['alert_field_must_be_float'] = 'Field {title} must be a float value! Please re-enter.';
	$lang['alert_field_must_be_integer'] = 'Field {title} must be an integer value! Please re-enter.';
    $lang['and'] = "i";
    $lang['any'] = "qualsevol";
    $lang['ascending'] = "Ascendent";
    $lang['back'] = "Tornar";
    $lang['cancel'] = "Cancel·lar";
    $lang['cancel_creating_new_record'] = "Estàs segur que voleu cancel·lar la creació de nou registre?";
    $lang['check_all'] = "Marcar tots";
    $lang['clear'] = "Netejar";
    $lang['click_to_download'] = "Feu clic per descarregar";
    $lang['clone_selected'] = "Clon seleccionat";
    $lang['cloning_record_blocked'] = "Control de seguretat: l'intent de clonar un disc! Comproveu la configuració, l'operació no està permès!";
    $lang['cloning_operation_completed'] = "L'operació de clonació completat amb èxit!";
    $lang['cloning_operation_uncompleted'] = "L'operació de recuperació incompleta!";   
    $lang['create'] = "Crear";
    $lang['create_new_record'] = "Crear nou registre";
    $lang['current'] = "actual";
    $lang['delete'] = "Esborrar";
    $lang['delete_record'] = "Esborrar registre";
    $lang['delete_record_blocked'] = "Comprovació de seguretat: intent d'eliminar un registre. Comproveu la configuració, l'operació no està permesa!";
    $lang['delete_selected'] = "Esborrar seleccionat";
    $lang['delete_selected_records'] = "Estàs segur d'eliminar els registres seleccionats?";
    $lang['delete_this_record'] = "Estàs segur d'eliminar el aquest registre";
    $lang['deleting_operation_completed'] = "L'operació d'esborrat s'ha completat correctament.";
    $lang['deleting_operation_uncompleted'] = "Operación d'esborrat NO completada!";
    $lang['descending'] = "Descendent";
    $lang['details'] = "Veure";
    $lang['details_selected'] = "Veure seleccionats";
    $lang['download'] = "Descarregar";    
    $lang['edit'] = "Editar";
    $lang['edit_selected'] = "Editar seleccionat";
    $lang['edit_record'] = "Editar registre";
    $lang['edit_selected_records'] = "Estàs segur que vols editar els registres seleccionats?";
    $lang['errors'] = "Errors";
    $lang['export_to_excel'] = "Exportar a Excel";
    $lang['export_to_pdf'] = "Exportar a PDF";
    $lang['export_to_word'] = "Exportar a Word";
    $lang['export_to_xml'] = "Exportar a XML";
    $lang['export_message'] = "<label class=\"default_dg_label\">L\'arxiu _FILE_ està llest. Després que acabi de descarregar,</label> <a class=\"default_dg_error_message\" href=\"javascript: window.close();\">tanca aquesta finestra</a>.";
    $lang['field'] = "Camp";
    $lang['field_value'] = "Valor del camp";
    $lang['file_find_error'] = "No es pot trobar l'arxiu: <b>_FILE_</b>. <br>Comprova que existeix l'arxiu i utilitza la ruta correcta!";
    $lang['file_opening_error'] = "No es pot obrir l'arxiu. Comprova els permisos.";
    $lang['file_extension_error'] = "Càrrega de fitxers d'error: extensió d'arxiu no permès per pujar. Si us plau un altre arxiu.";
    $lang['file_writing_error'] = "No es pot escriure l'arxiu. Comprova els permisos.";
    $lang['file_invalid_file_size'] = "Tamany d'arxiu invàlid";
    $lang['file_uploading_error'] = "Hi ha hagut un error mentre es carregava l'arxiu, si us plau torna-ho a intentar.";
    $lang['file_deleting_error'] = "Hi ha hagut un error mentre s'esborrava!";
    $lang['first'] = "primer";
    $lang['format'] = "Format";
    $lang['generate'] = "Generar";
    $lang['handle_selected_records'] = "Estàs segur que voleu controlar els registres seleccionats?";
    $lang['hide_search'] = "Oculta la cerca";
    $lang['item'] = "tema";
    $lang['items'] = "articles";
    $lang['last'] = "últim";
    $lang['like'] = "com";
    $lang['like%'] = "com%";  // "begins with";
    $lang['%like'] = "%com";  // "ends with";
    $lang['%like%'] = "%com%";
    $lang['loading_data'] = "carregant dades...";
    $lang['max'] = "max";
    $lang['max_number_of_records'] = "Heu superat el nombre màxim de registres permesos!";
    $lang['move_down'] = "Baixar";
    $lang['move_up'] = "Pujar";    
    $lang['move_operation_completed'] = "The moving row operation completed successfully!";
    $lang['move_operation_uncompleted'] = "The moving row operation uncompleted!";
    $lang['next'] = "següent";
    $lang['no'] = "No";
    $lang['no_data_found'] = "No s'han trobat dades.";
    $lang['no_data_found_error'] = "No s'han trobat dades! Si us plau, comprova atentament la sintaxi del teu codi!<br />Pot ser degut a l'ús erroni de majúscules/minúscules o a símbols inesperats.";
    $lang['no_image'] = "Cap imatge";
    $lang['not_like'] = "diferent";
    $lang['of'] = "de";
    $lang['operation_was_already_done'] = "L'operació ja ha estat realitzada! No es pot tornar a intentar novament.";
    $lang['or'] = "o";
    $lang['pages'] = "Pàgines";
    $lang['page_size'] = "Registres per pàgina";
    $lang['previous'] = "Anterior";
    $lang['printable_view'] = "Vista imprimible";
    $lang['print_now'] = "Imprimir ara";
    $lang['print_now_title'] = "Fes click aquí per imprimir aquesta pàgina";
    $lang['record_n'] = "Registre #";
    $lang['refresh_page'] = "Actualitzar pàgina";
    $lang['results'] = "Resultats";
    $lang['remove'] = "Esborrar";
    $lang['reset'] = "Netejar";
    $lang['required_fields_msg'] = "<span style='color:#cd0000'>*</span> Els elements marcat amb asterisc (*) són obligatoris.";
    $lang['search'] = "Cercar";
    $lang['search_d'] = "Cercar"; // (description)
    $lang['search_type'] = "Tipus de cerca";
    $lang['select'] = "seleccionar";
    $lang['set_date'] = "Establir data";
    $lang['sort'] = "Ordenar";
    $lang['test'] = "Provar";
    $lang['total'] = "Total";
    $lang['turn_on_debug_mode'] = "Per més informació activa el mode 'debug'.";
    $lang['uncheck_all'] = "Desmarcar tot";
    $lang['update'] = "Actualitzar";
    $lang['unhide_search'] = "Mostrar la cerca";
    $lang['unique_field_error'] = "La casella _FIELD_ permet només valors únics, reentra les dades.";
    $lang['update_record'] = "Actualitzar registre";
    $lang['update_record_blocked'] = "Comprovació de seguretat: intent d'actualitzar un registre. Comproveu la configuració, l'operació no està permesa!";
    $lang['updating_operation_completed'] = "L'operació d'actualització s'ha completat correctament.";
    $lang['updating_operation_uncompleted'] = "L'operació d'actualització NO s'ha completat!";
    $lang['upload'] = "Carregar";
    $lang['uploaded_file_not_image'] = "El fitxer carregat no sembla ser una imatge.";    
    $lang['view'] = "Vista";
    $lang['view_details'] = "Detalls de la vista";
    $lang['warnings'] = "Alertes";
    $lang['with_selected'] = "Amb els seleccionats";
    $lang['wrong_field_name'] = "Nom de casella incorrecte";
    $lang['wrong_parameter_error'] = "Paràmetre incorrecte a [<b>_FIELD_</b>]: _VALUE_";
    $lang['yes'] = "Si;";
  
    // date-time
    $lang['day']    = "dia";
    $lang['month']  = "mes";
    $lang['year']   = "any";
    $lang['hour']   = "hora";
    $lang['min']    = "min";
    $lang['sec']    = "seg";
    $lang['months'][1] = "Gener";
    $lang['months'][2] = "Febrer";
    $lang['months'][3] = "Març";
    $lang['months'][4] = "Abril";
    $lang['months'][5] = "Maig";
    $lang['months'][6] = "Juny";
    $lang['months'][7] = "Juliol";
    $lang['months'][8] = "Agost";
    $lang['months'][9] = "Septembre";
    $lang['months'][10] = "Octubre";
    $lang['months'][11] = "Novembre";
    $lang['months'][12] = "Decembre";
    
    return $lang; 
}

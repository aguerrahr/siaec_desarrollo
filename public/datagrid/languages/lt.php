﻿<?php
//------------------------------------------------------------------------------             
//*** Lithuanian (lt)
//------------------------------------------------------------------------------
function setLanguageLt(){ 
    $lang['='] = "=";  // "equal";
    $lang['!='] = "!="; // "not equal"; 
    $lang['>'] = ">";  // "bigger";
    $lang['>='] = ">=";  // "bigger or equal";
    $lang['<'] = "<";  // "smaller";
    $lang['<='] = "<=";  // "smaller or equal";            
    $lang['add'] = "Pridėti"; 
    $lang['add_new'] = "+ Pridėti"; 
    $lang['add_new_record'] = "Pridėti naują įrašą";
    $lang['add_new_record_blocked'] = "Klaida įvedant naują įrašą! Patikrinkite nuostatas, operacija neleidžiama!";    
    $lang['adding_operation_completed'] = "Duomenys įkelti sėkmingai!";
    $lang['adding_operation_uncompleted'] = "Duomenys neįsikėlė!";
    $lang['alert_perform_operation'] = "Ar tikrai norite atlikti šį veiksmą?";
    $lang['alert_select_row'] = "Jūs turite pasirinkti vieną ar daugiau eilučių norint užbaigti operaciją!";    
	$lang['alert_field_cannot_be_empty'] = 'Field {title} cannot be empty! Please re-enter.';
	$lang['alert_field_must_be_alphabetic'] = 'Field {title} must have alphabetic value! Please re-enter.';
	$lang['alert_field_must_be_float'] = 'Field {title} must be a float value! Please re-enter.';
	$lang['alert_field_must_be_integer'] = 'Field {title} must be an integer value! Please re-enter.';
    $lang['and'] = "ir";
    $lang['any'] = "visi";                                                 
    $lang['ascending'] = "Didėjimo tvarka"; 
    $lang['back'] = "Atgal"; 
    $lang['cancel'] = "Nutraukti";
    $lang['cancel_creating_new_record'] = "Ar tikrai norite atšaukti naujo įrašo sukūrimą?";
    $lang['check_all'] = "Pažymėti visus";    
    $lang['clear'] = "Išvalyti";
    $lang['click_to_download'] = "Spustelėkite norėdami parsisiųsti";
    $lang['clone_selected'] = "Klonas pasirinktas";
    $lang['cloning_record_blocked'] = "Apsaugos patikrinti: bandymas klonavimo įrašų! Patikrinti savo parametrus, operacija nėra leidžiama!";
    $lang['cloning_operation_completed'] = "Klonavimo operacija sėkmingai baigta!";
    $lang['cloning_operation_uncompleted'] = "Klonavimo operaciją nebaigtas!";
    $lang['create'] = "Sukurti"; 
    $lang['create_new_record'] = "Sukurti naują įrašą"; 
    $lang['current'] = "dabartinis"; 
    $lang['delete'] = "Ištrinti"; 
    $lang['delete_record'] = "Ištrinti įrašą";
    $lang['delete_record_blocked'] = "Saugumo patikrinimas: bandymas ištrinti įrašą! Patikrinkite savo nustatymus, operacija nėra leidžiama!";    
    $lang['delete_selected'] = "Ištrinti pažymėtus";
    $lang['delete_selected_records'] = "Ar tikrai norite ištrinti pažymėtus įrašus?";
    $lang['delete_this_record'] = "Ar tikrai norite ištrinti šį įrašą?";                                 
    $lang['deleting_operation_completed'] = "Jūs ištrynėte įrašus sėkmingai!";
    $lang['deleting_operation_uncompleted'] = "Trynimo operacija nebaigta!";                                    
    $lang['descending'] = "Mažėjimo tvarka";
    $lang['details'] = "Detaliau";
    $lang['details_selected'] = "Peržiūrėti pasirinktus";
    $lang['download'] = "Parsisiųsti";
    $lang['edit'] = "Redaguoti";
    $lang['edit_selected'] = "Redaguoti pažymėtus";
    $lang['edit_record'] = "Redaguoti įrašą"; 
    $lang['edit_selected_records'] = "Ar tikrai norite redaguoti pasirinktus įrašus?";               
    $lang['errors'] = "Klaida";            
    $lang['export_to_excel'] = "Eksportuoti į Excel";
    $lang['export_to_pdf'] = "Eksportuoti į PDF";
    $lang['export_to_word'] = "Eksportuoti į Word";
    $lang['export_to_xml'] = "Eksportuoti į XML";
    $lang['export_message'] = "<label class=\"default_dg_label\">Failas _FILE_ jau paruoštas. Po siuntimo</label> <a class=\"default_dg_error_message\" href=\"javascript: window.close();\">uždarykite langą</a>.";
    $lang['field'] = "Laukas"; 
    $lang['field_value'] = "Lauko reikšmė";
    $lang['file_find_error'] = "Nepavyko rasti failo: <b>_FILE_</b>. <br>Patikrinkite, ar šis failas egzistuoja ir naudojate teisingą kelią!";                                    
    $lang['file_opening_error'] = "Nepavyko atidaryti failo. Patikrinkite teises.";
    $lang['file_extension_error'] = "Failo įkėlimo klaida: negalima įkelti failo plėtinys. Prašome pasirinkti kitą failą.";
    $lang['file_writing_error'] = "Nepavyko įrašyti į failą. Patikrinkite rašymo teises!";
    $lang['file_invalid_file_size'] = "Netinkamas failo dydis";
    $lang['file_uploading_error'] = "Įvyko klaida įkeliant, bandykite dar kartą!";
    $lang['file_deleting_error'] = "Trynimo metu įvyko klaida!";
    $lang['first'] = "pirmas";
    $lang['format'] = "Formatas";
    $lang['generate'] = "generuoti";
    $lang['handle_selected_records'] = "Ar tikrai norite tvarkyti pasirinktus įrašus?";
    $lang['hide_search'] = "Paslėpti paiešką";
    $lang['item'] = "punktas";
    $lang['items'] = "elementų";
    $lang['last'] = "paskutinis";
    $lang['like'] = "kaip";
    $lang['like%'] = "prasideda%";  // "begins with"; 
    $lang['%like'] = "%baigiasi";  // "ends with";
    $lang['%like%'] = "%kaip%";  
    $lang['loading_data'] = "kraunasi duomenys...";
    $lang['max'] = "maksimaliai";                
    $lang['max_number_of_records'] = "Jūs viršijote didžiausią leidžiamų įrašų!";
    $lang['move_down'] = "Nuleisti";
    $lang['move_up'] = "Perkelti aukštyn";
    $lang['move_operation_completed'] = "Juda eilės operacija sėkmingai baigta!";
    $lang['move_operation_uncompleted'] = "Juda eilės operacijos nebaigtas!";    
    $lang['next'] = "sekantis";
    $lang['no'] = "Ne";                                
    $lang['no_data_found'] = "Nerasta duomenų"; 
    $lang['no_data_found_error'] = "Nerasta duomenų! Patikrinkite kodo sintaksę!<br>Gali būti netinkamų simbolių.";                                
    $lang['no_image'] = "Nėra paveiksliukų";
    $lang['not_like'] = "ėra lygu";
    $lang['of'] = "iš";
    $lang['operation_was_already_done'] = "Operacija baigta! Jūs negalite pakartoti";            
    $lang['or'] = "arba";                
    $lang['pages'] = "Puslapiai";                    
    $lang['page_size'] = "Puslapio dydis"; 
    $lang['previous'] = "ankstesnis";                
    $lang['printable_view'] = "Spausdinimo režimas";
    $lang['print_now'] = "Spausdinti dabar";
    $lang['print_now_title'] = "Spauskite čia norint spausdinti";
    $lang['record_n'] = "Įrašas #";
    $lang['refresh_page'] = "Perkrauti puslapį";
    $lang['remove'] = "Ištrinti";
    $lang['reset'] = "Atkurti";                        
    $lang['results'] = "Rezultatai";
    $lang['required_fields_msg'] = "<span style='color:#cd0000'>*</span> Pažymėti laukai privalomi";
    $lang['search'] = "Paieška"; 
    $lang['search_d'] = "Paieška"; // (description) 
    $lang['search_type'] = "Paieškos tipas"; 
    $lang['select'] = "pažymėti";
    $lang['set_date'] = "Nustatyti datą";
    $lang['sort'] = "Rūšiuoti";        
    $lang['test'] = "Testas";
    $lang['total'] = "Viso";
    $lang['turn_on_debug_mode'] = "Norėdami gauti daugiau informacijos, įjunkite redagavimo režimą.";
    $lang['uncheck_all'] = "Atžymėti visus";
    $lang['unhide_search'] = "Rodyti paiešką";
    $lang['unique_field_error'] = "Laukas _FIELD_ leidžia tik unikalias reikšmes - pakartokite!";            
    $lang['update'] = "Atnaujinti"; 
    $lang['update_record'] = "Atnaujinti įrašą";
    $lang['update_record_blocked'] = "Saugumo patikrinimas: bandymas atnaujinti įrašą! Patikrinkite savo nustatymus, operacija nėra leidžiama!";    
    $lang['updating_operation_completed'] = "Atnaujinimo operacija baigta sėkmingai!";
    $lang['updating_operation_uncompleted'] = "Atnaujinimo operacija nebaigta!";                        
    $lang['upload'] = "Įkelti";
    $lang['uploaded_file_not_image'] = "Įkeltas failas neatrodo vaizdas.";
    $lang['view'] = "Peržiūrėti"; 
    $lang['view_details'] = "Peržiūrėti detaliau";
    $lang['warnings'] = "Įspėjimas";            
    $lang['with_selected'] = "Kartu su pažymėtais";
    $lang['wrong_field_name'] = "Neteisingas lauko vardas";
    $lang['wrong_parameter_error'] = "Neteisingas lauko [<b>_FIELD_</b>] parametras: _VALUE_";
    $lang['yes'] = "Taip";                

    // date-time
    $lang['day']    = "diena";
    $lang['month']  = "mėnuo";
    $lang['year']   = "metai";
    $lang['hour']   = "val.";
    $lang['min']    = "min.";
    $lang['sec']    = "sek.";
    $lang['months'][1] = "Sausis";
    $lang['months'][2] = "Vasaris";
    $lang['months'][3] = "Kovas";
    $lang['months'][4] = "Balandis";
    $lang['months'][5] = "Gegužė";
    $lang['months'][6] = "Birželis";
    $lang['months'][7] = "Liepa";
    $lang['months'][8] = "Rugpjūtis";
    $lang['months'][9] = "Rugsėjis";
    $lang['months'][10] = "Spalis";
    $lang['months'][11] = "Lapkritis";
    $lang['months'][12] = "Gruodis";
    
    return $lang;
}

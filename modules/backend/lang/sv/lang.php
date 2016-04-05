<?php

return [
    'auth' => [
        'title' => 'Administrationsområde'
    ],
    'field' => [
        'invalid_type' => 'Felaktig fälttyp använd :type.',
        'options_method_not_exists' => 'Modelklassen :model måste definera en metod :method() som returnerar villkor för formfältet ":field"',
    ],
    'widget' => [
        'not_registered' => "En widget med klassnamnet ':name' har ej blivit registrerad",
        'not_bound' => "En widget med klassnamnet ':name' saknas i controllern",
    ],
    'page' => [
        'untitled' => "Ej namngiven",
        'access_denied' => [
            'label' => "Nekat tillträde",
            'help' => "Du har inte behörighet att visa den här sidan.",
            'cms_link' => "Gå till CMS backend",
        ],
        'invalid_token' => [
            'label' => 'Ogiltig säkerhetstoken'
        ],
    ],
    'partial' => [
        'not_found_name' => "En partial med namn ':name' kunde ej hittas",
    ],
    'account' => [
        'sign_out' => 'Logga ut',
        'login' => 'Logga in',
        'reset' => 'Nollställ',
        'restore' => 'Återställ',
        'login_placeholder' => 'användarnamn',
        'password_placeholder' => 'lösenord',
        'forgot_password' => "Glömt ditt lösenord?",
        'enter_email' => "Ange din e-postadress",
        'enter_login' => "Ange ditt användarnamn",
        'email_placeholder' => "e-post",
        'enter_new_password' => "Välj ett nytt lösenord",
        'password_reset' => "Återställ lösenord",
        'restore_success' => "Ett meddelande har sänts till din e-postadress med instruktioner om hur du återställer ditt lösenord",
        'restore_error' => "En användare med användarnamnet ':login' kunde ej hittas",
        'reset_success' => "Ditt lösenord har blivit återställt. Du kan nu logga in",
        'reset_error' => "Felaktig data för lösenordsåterställning. Var vänlig prova igen",
        'reset_fail' => "Det gick tyvärr inte att nollställa ditt lösenord",
        'apply' => 'Spara',
        'cancel' => 'Avbryt',
        'delete' => 'Radera',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Kontrollpanelen',
        'widget_label' => 'Widget',
        'widget_width' => 'Bredd',
        'full_width' => 'max bredd',
        'add_widget' => 'Lägg till widget',
        'widget_inspector_title' => 'Widget inställningar',
        'widget_inspector_description' => 'Widget informations inställningar',
        'widget_columns_label' => 'Bredd :columns',
        'widget_columns_description' => 'Bredden på widgeten ska vara ett nummer mellan 1 och 10.',
        'widget_columns_error' => 'Vänligen ange widgetens bredden som ett nummer mellan 1 och 10.',
        'columns' => '{1} column|[2,Inf] kolonner',
        'widget_new_row_label' => 'Forcera en ny rad',
        'widget_new_row_description' => 'Lägg widgeten på en ny rad.',
        'widget_title_label' => 'Widget-titel',
        'widget_title_error' => 'En widgets titel är tvingande.',
        'status' => [
            'widget_title_default' => 'Systemstatus',
            'online' => 'online',
            'maintenance' => 'i underhåll',
            'update_available' => '{0} uppdateringar tillgängliga!|{1} uppdatering tillgänglig!|[2,Inf] uppdateringar tillgängliga!'
        ]
    ],
    'user' => [
        'name' => 'Administratör',
        'menu_label' => 'Administratörer',
        'menu_description' => 'Hantera administratörs användare, grupper och behörigheter.',
        'list_title' => 'Hantera administratörer',
        'new' => 'Ny Administratör',
        'login' => "Användarnamn",
        'first_name' => "Förnamn",
        'last_name' => "Efternamn",
        'full_name' => "Fullständigt namn",
        'email' => "E-post",
        'groups' => "Grupper",
        'groups_comment' => "Välj vilken grupp denna person hör till",
        'avatar' => "Avatar",
        'password' => "Lösenord",
        'password_confirmation' => "Bekräfta lösenord",
        'permissions' => 'Rättigheter',
        'account' => 'Konto',
        'superuser' => "Superanvändare",
        'superuser_comment' => "Markera denna checkbox för att ge denna person tillgång till alla områden",
        'send_invite' => 'Inbjudan är sänd via e-post',
        'send_invite_comment' => 'Markera denna checkbox för att skicka en inbjudan till användaren via e-post',
        'delete_confirm' => 'Vill du verkligen radera denna administratör?',
        'return' => 'Återgå till administratörlistan',
        'allow' => 'Tillåt',
        'inherit' => 'Ärv',
        'deny' => 'Förbjud',
        'group' => [
            'name' => 'Grupp',
            'name_field' => 'Namn',
            'description_field' => 'Beskriving',
            'is_new_user_default_field' => 'Lägg till nya administratörer till gruppen som standard',
            'code_field' => 'Kod',
            'code_comment' => 'Ange en unik kod om du vill komma åt det med API.',
            'menu_label' => 'Grupper',
            'list_title' => 'Hantera grupper',
            'new' => 'Ny administratörsgrupp',
            'delete_confirm' => 'Vill du verkligen radera denna administratörgrupp?',
            'return' => 'Återgå till grupplistan',
            'users_count' => 'Användare'
        ],
        'preferences' => [
            'not_authenticated' => 'Det finns ingen autentiserad användare att ladda eller spara inställningar för',
        ]
    ],
    'list' => [
        'default_title' => 'Lista',
        'search_prompt' => 'Sök...',
        'no_records' => 'Det finns inga träffar för denna vy',
        'missing_model' => 'List-egenskapen i :class har ingen modell definerad',
        'missing_column' => 'Det finns inga kolumndefinitioner för :columns',
        'missing_columns' => 'Listan som används i :class har inga listkolumner definerade',
        'missing_definition' => "Listegenskapen saknar en kolumn för ':field'",
        'behavior_not_ready' => 'Listegenskapen har inte blivit initierad, kontrollera att du har anropat makeLists() i din controller',
        'invalid_column_datetime' => "Kolumns värde ':column' är inte ett DateTime objekt, saknar du en \$dates referens i Model?",
        'pagination' => 'Visade poster: :from-:to av :total',
        'prev_page' => 'Föregående sida',
        'next_page' => 'Nästa sida',
        'loading' => 'Laddar...',
        'setup_title' => 'List inställningar',
        'setup_help' => 'Använd kryssrutorna för att välja kolumner du vill se i listan. Du kan ändra positionen på kolumnerna genom att dra dem upp eller ner.',
        'records_per_page' => 'Poster per sida',
        'records_per_page_help' => 'Välj antalet poster som ska visas per sida. Observera att högt antal poster per sida kan påverka prestandan.',
        'delete_selected' => 'Radera utvald',
        'delete_selected_empty' => 'Det finns inga markerad post att radera.',
        'delete_selected_confirm' => 'Ta bort de markerade posterna?',
        'delete_selected_success' => 'De markerade posterna är raderade.',
    ],
    'fileupload' => [
        'attachment' => 'Bilaga',
        'help' => 'Lägg till en och beskriving för denna bilagan.',
        'title_label' => 'Titel',
        'description_label' => 'Beskriving',
        'default_prompt' => 'Klicka på %s eller dra en fil hit för att ladda upp',
        'attachment_url' => 'Bilage-URL',
        'upload_file' => 'Ladda upp fil',
        'upload_error' => 'Fel vid uppladdning',
        'remove_confirm' => 'Är du säker?',
        'remove_file' => 'Radera fil'
    ],
    'form' => [
        'create_title' => "Ny :name",
        'update_title' => "Redigera :name",
        'preview_title' => "Förhandsgranska :name",
        'create_success' => ':name är nu skapad',
        'update_success' => ':name har blivit uppdaterad',
        'delete_success' => ':name kunde ej raderas',
        'missing_id' => "Rad-ID för formuläret har ej blivit specificerat",
        'missing_model' => 'Formuläregenskapen som används i :class har ingen modell definierad',
        'missing_definition' => "Formuläregenskapen saknar ett fält för ':field'",
        'not_found' => 'Rad-ID :id för formuläret kunde ej hittas',
        'action_confirm' => 'Är du säker?',
        'create' => 'Skapa',
        'create_and_close' => 'Skapa och stäng',
        'creating' => 'Skapar...',
        'creating_name' => 'Skapar :name...',
        'save' => 'Spara',
        'save_and_close' => 'Spara och stäng',
        'saving' => 'Sparar...',
        'saving_name' => 'Sparar :name...',
        'delete' => 'Radera',
        'deleting' => 'Raderar...',
        'deleting_name' => 'Raderar :name...',
        'reset_default' => 'Äterställ till utgångsläge',
        'resetting' => 'Återställer',
        'resetting_name' => 'Återställer :name',
        'undefined_tab' => 'Övrigt',
        'field_off' => 'Av',
        'field_on' => 'På',
        'add' => 'Lägg till',
        'apply' => 'Spara',
        'cancel' => 'Avbryt',
        'close' => 'Stäng',
        'confirm' => 'Bekräfta',
        'reload' => 'Ladda om',
        'complete' => 'Slutför',
        'ok' => 'OK',
        'or' => 'eller',
        'confirm_tab_close' => 'Vill du verkligen stänga fliken? Ej sparade ändringar kommer gå förlorade',
        'behavior_not_ready' => 'Formuläregenskap har ej blivit initierad, kontrollera att du anropat initForm() i din controller',
        'preview_no_files_message' => 'Filen är inte uppladdad',
        'preview_no_record_message' => 'Ingen rad är vald.',
        'select' => 'Välj',
        'select_all' => 'alla',
        'select_none' => 'ingen',
        'select_placeholder' => 'Vänligen välj',
        'insert_row' => 'Lägg till rad',
        'delete_row' => 'Radera rad',
        'concurrency_file_changed_title' => 'Filen var ändrad',
        'concurrency_file_changed_description' => "Filen du redigerar har ändrats av en annan användare. Du kan antingen ladda om sidan och förlora dina ändringar eller skriva över filen med dina ändringar."
    ],
    'relation' => [
        'missing_config' => "Relations beteendet har ingen konfiguration för ': config '.",
        'missing_definition' => "Relationen saknar en definintion för ':field'",
        'missing_model' => "Relationen som används i :class har ingen modell definierad",
        'invalid_action_single' => "Den här åtgärden kan inte appliceras på en enskild relation",
        'invalid_action_multi' => "Denna åtgärd kan inte appliceras på flera relationer",
        'help' => "Klicka på en post för att lägga till",
        'related_data' => "Relaterad :name data",
        'add' => "Lägg till",
        'add_selected' => "Lägg till vald",
        'add_a_new' => "Lägg till en ny :name",
        'link_selected' => "Länka vald",
        'link_a_new' => "Länka en ny :name",
        'cancel' => "Avbryt",
        'close' => "Stäng",
        'add_name' => "Lägg till :name",
        'create' => "Skapa",
        'create_name' => "Skapa :name",
        'update' => "Uppdatera",
        'update_name' => "Uppdatera :name",
        'preview' => "Förhandsgranska",
        'preview_name' => "Förhandsgranska :name",
        'remove' => "Ta bort",
        'remove_name' => "Ta bort :name",
        'delete' => "Radera",
        'delete_name' => "Radera :name",
        'delete_confirm' => "Är du säker?",
        'link' => "Länka",
        'link_name' => "Länka :name",
        'unlink' => "Avlänka",
        'unlink_name' => "Avlänka :name",
        'unlink_confirm' => "Är du säker?",
    ],
    'reorder' => [
        'default_title' => 'Ordna om rader',
        'no_records' => 'Det finns inga rader att sortera.',
    ],
    'model' => [
        'name' => "Modell",
        'not_found' => "Modellen ':class' med ID :id kunde ej hittas",
        'missing_id' => "Det finns inget ID anviget för modellen",
        'missing_relation' => "Modellen ':class' saknar en definition för ':relation'",
        'missing_method' => "Modellen ':class' innehåller inte metoden ':method'.",
        'invalid_class' => "Modellen :model i klass :class är ej giltig. Den måste ärva från \Model-klassen",
        'mass_assignment_failed' => "Mass uppdraget misslyckades för Modell-attributet ':attribute'.",
    ],
    'warnings' => [
        'tips' => 'Systemkonfigurationstips',
        'tips_description' => 'Det finns problem som du behöver åtgärda för att konfigurera systemet ordentligt.',
        'permissions'  => 'Katalogen :name eller dess underkataloger är inte skrivbara av PHP. Väligen ändra dess motsvarande behörigheter för web-servern i denna katalogen.',
        'extension' => 'PHP-tillägget: Namnet är inte installerat. Vänligen installera och aktivera det biblioteket.'
    ],
    'editor' => [
        'menu_label' => 'Kodnings preferenser',
        'menu_description' => 'Anpassa dina preferenser för kodredigering, så som typsnitt och färgschema.',
        'font_size' => 'Teckenstorlek',
        'tab_size' => 'Tab längd',
        'use_hard_tabs' => 'Indentera med tab',
        'code_folding' => 'Dölj kod',
        'word_wrap' => 'Radbryting',
        'highlight_active_line' => 'Markera aktiv rad',
        'auto_closing' => 'Stäng taggar och specialtecken automatiskt',
        'show_invisibles' => 'Visa dolda tecken',
        'show_gutter' => 'Visa ränna',
        'theme' => 'Färgschema'
    ],
    'tooltips' => [
        'preview_website' => 'Förhandsgranska websidan'
    ],
    'mysettings' => [
        'menu_label' => 'Mina inställningar',
        'menu_description' => 'Inställningar rörande ditt administrationskonto'
    ],
    'myaccount' => [
        'menu_label' => 'Mitt konto',
        'menu_description' => 'Uppdatera dina kontouppgifter såsom namn, e-postadress och lösenord.',
        'menu_keywords' => 'säkerhets inloggning'
    ],
    'branding' => [
        'menu_label' => 'Anpassa back-end',
        'menu_description' => 'Anpassa administrations området såsom namn, färger och logotyp.',
        'brand' => 'Varumärke',
        'logo' => 'Logga',
        'logo_description' => 'Ladda upp en egen logotyp för att använda i back-end.',
        'app_name' => 'Applikationsnamn',
        'app_name_description' => 'Detta namn visas i titelområdet back-end.',
        'app_tagline' => 'Applikationstaggning',
        'app_tagline_description' => 'Detta namn visas på inloggningsskärmen för back-end.',
        'colors' => 'Färger',
        'primary_color' => 'Primär color',
        'secondary_color' => 'Sekundär color',
        'accent_color' => 'Accent color',
        'styles' => 'Formatmallar',
        'custom_stylesheet' => 'Anpassad formatmall'
    ],
    'backend_preferences' => [
        'menu_label' => 'Back-end preferenser',
        'menu_description' => 'Hantera dina kontoinställningar såsom önskat språk.',
        'locale' => 'Språk',
        'locale_comment' => 'Välj önskat språk.'
    ],
    'access_log' => [
        'hint' => 'Denna logg visar en lista över lyckade inloggningsförsök till administratrationen. Registret behålls i :days dagar.',
        'menu_label' => 'Åtkomstlogg',
        'menu_description' => 'Visa en lista över framgångsrika inloggningar av back-end användare.',
        'created_at' => 'Dataum och tid',
        'login' => 'Inloggning',
        'ip_address' => 'IP adress',
        'first_name' => 'Förnamn',
        'last_name' => 'Efternamn',
        'email' => 'E-post'
    ],
    'filter' => [
      'all' => 'alla'
    ]
];

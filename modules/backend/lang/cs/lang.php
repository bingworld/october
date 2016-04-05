<?php

return [
    'auth' => [
        'title' => 'Administrace'
    ],
    'field' => [
        'invalid_type' => 'Byl použitý špatný typ :type.',
        'options_method_not_exists' => "Modelová třída :model musí implementovat metodu :method(), která vrací volby pro formulářové pole ':field'"
    ],
    'widget' => [
        'not_registered' => "Třída widgetu se jménem ':name' není zaregistrovaná.",
        'not_bound' => "Widget s názvem třídy ':name' není navázaná na kontroler."
    ],
    'page' => [
        'untitled' => 'Bez názvu',
        'access_denied' => [
            'label' => 'Přístup odmítnut',
            'help' => 'Nemáte potřebná oprávnění k prohlížení této stránky.',
            'cms_link' => 'Zpět do administrace'
        ],
        'invalid_token' => [
            'label' => 'Neplatný bezpečnostní token',
        ]
    ],
    'partial' => [
        'not_found_name' => "Dílčí šablona ':name' nebyla nalezena."
    ],
    'account' => [
        'sign_out' => 'Odhlásit',
        'login' => 'Přihlásit se',
        'reset' => 'Resetovat',
        'restore' => 'Obnovit',
        'login_placeholder' => 'login',
        'password_placeholder' => 'heslo',
        'forgot_password' => 'Zapomněli jste heslo?',
        'enter_email' => 'Zadejte váš e-mail',
        'enter_login' => 'Zadejte váš login',
        'email_placeholder' => 'e-mail',
        'enter_new_password' => 'Zadejte nové heslo',
        'password_reset' => 'Obnova hesla',
        'restore_success' => 'E-mail byl zaslán na vaší e-mailovou adresu s heslem a instrukcemi k obnově.',
        'restore_error' => "Uživatel s přihlašovacím jménem ':login' nebyl nalezen",
        'reset_success' => 'Vaše heslo bylo úspěšně obnoveno. Nyní se můžete přihlásit.',
        'reset_error' => 'Data pro obnovu hesla nejsou správná. Prosím zkuste to znovu!',
        'reset_fail' => 'Obnova hesla selhala!',
        'apply' => 'Použít',
        'cancel' => 'Zrušit',
        'delete' => 'Smazat',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Plocha',
        'widget_label' => 'Widget',
        'widget_width' => 'Šířka',
        'full_width' => 'plná šířka',
        'add_widget' => 'Přidat widget',
        'widget_inspector_title' => 'Nastavení widgetu',
        'widget_inspector_description' => 'Zde si upravte všechna nastavení widgetu',
        'widget_columns_label' => 'Šířka :columns',
        'widget_columns_description' => 'Šířka widgetu, zadejte číslo mezi 1 a 10.',
        'widget_columns_error' => 'Zadejte prosím šířku widgetu jako číslo mezi 1 a 10.',
        'columns' => '{1} sloupec|[2,Inf] sloupce',
        'widget_new_row_label' => 'Vždy na novém řádku',
        'widget_new_row_description' => 'Vloží widget do nového řádku.',
        'widget_title_label' => 'Název widgetu',
        'widget_title_error' => 'Musíte zadat název widgetu',
        'status' => [
            'widget_title_default' => 'Status systému',
            'online' => 'online',
            'maintenance' => 'v údržbě',
            'update_available' => '{0} dostupných aktualizací!|{1} dostupná aktualizace!|[2,Inf] dostupných aktualizací!'
        ]
    ],
    'user' => [
        'name' => 'Administrátor',
        'menu_label' => 'Administrátoři',
        'menu_description' => 'Správa uživatelů administrace, jejich skupin a opravnění.',
        'list_title' => 'Správa administrátorů',
        'new' => 'Nový administrátor',
        'login' => 'Přihlašovací jméno',
        'first_name' => 'Křestní jméno',
        'last_name' => 'Příjmení',
        'full_name' => 'Celé jméno',
        'email' => 'E-mail',
        'groups' => 'Skupiny',
        'groups_comment' => 'Vyberte do jakých skupin uživatel patří.',
        'avatar' => 'Avatar',
        'password' => 'Heslo',
        'password_confirmation' => 'Potvrzení hesla',
        'permissions' => 'Oprávnění',
        'account' => 'Účet',
        'superuser' => 'Super uživatel',
        'superuser_comment' => 'Má neomezený přístup do všech stránek administrace.',
        'send_invite' => 'Zaslat pozvánku e-mailem',
        'send_invite_comment' => 'Odešle uvítací e-mail s údaji pro přihlášení.',
        'delete_confirm' => 'Opravdu chcete smazat tohoto administrátora?',
        'return' => 'Návrat na seznam administrátorů',
        'allow' => 'Povolit',
        'inherit' => 'Podědit',
        'deny' => 'Odmítnout',
        'group' => [
            'name' => 'Skupina',
            'name_field' => 'Jméno',
            'description_field' => 'Popis',
            'is_new_user_default_field' => 'Zařadit nové administrátory automaticky do této skupiny.',
            'code_field' => 'Kód',
            'code_comment' => 'Zadejte unikátní kód pro přístup přes API.',
            'menu_label' => 'Skupiny',
            'list_title' => 'Správa skupin',
            'new' => 'Nová skupina',
            'delete_confirm' => 'Opravdu chcete smazat tuto skupinu administrátorů?',
            'return' => 'Návrat na seznam skupin',
            'users_count' => 'Uživatelů'
        ],
        'preferences' => [
            'not_authenticated' => 'Nebyl nalezen žádný přihlášený uživatel pro načtení, nebo uložení nastavení.'
        ]
    ],
    'list' => [
        'default_title' => 'Seznam',
        'search_prompt' => 'Hledat...',
        'no_records' => 'Žádné záznamy v tomto pohledu.',
        'missing_model' => 'List behavior used in :class does not have a model defined.',
        'missing_column' => 'There are no column definitions for :columns.',
        'missing_columns' => 'List used in :class has no list columns defined.',
        'missing_definition' => "List behavior does not contain a column for ':field'.",
        'behavior_not_ready' => 'List behavior has not been initialized, check that you have called makeLists() in your controller.',
        'invalid_column_datetime' => "Column value ':column' is not a DateTime object, are you missing a \$dates reference in the Model?",
        'pagination' => 'Zobrazuji záznamy: :from-:to z :total',
        'prev_page' => 'Předchozí stránka',
        'next_page' => 'Další stránka',
        'loading' => 'Načítám...',
        'setup_title' => 'Nastavení výpisu',
        'setup_help' => 'Pomocí checkboxů si vyberte, které sloupce chcete ve výpisu vidět. Pozici změníte chytnutím a posunem nahorů, nebo dolů.',
        'records_per_page' => 'Záznamů na stránku',
        'records_per_page_help' => 'Vyberte kolik chcete vidět záznamů na jedné stránce. Vysoký počet záznamů může negativně ovlivnit rychlost stránek.',
        'delete_selected' => 'Smazat vybrané',
        'delete_selected_empty' => 'Nebyl vybrán žádný záznam ke smazání.',
        'delete_selected_confirm' => 'Smazat vybrané záznamy?',
        'delete_selected_success' => 'Vybrané záznamy byly úspěšně smazány.'
    ],
    'fileupload' => [
        'attachment' => 'Příloha',
        'help' => 'Přidat název a popisek k příloze.',
        'title_label' => 'Název',
        'description_label' => 'Popis',
        'default_prompt' => 'Click the %s or drag a file here to upload',
        'attachment_url' => 'URL přílohy',
        'upload_file' => 'Nahrát soubor',
        'upload_error' => 'Chyba nahrávání',
        'remove_confirm' => 'Jste si jistí?',
        'remove_file' => 'Odstranit soubor'
    ],
    'form' => [
        'create_title' => 'Nový :name',
        'update_title' => 'Upravit :name',
        'preview_title' => 'Náhled :name',
        'create_success' => ':name byl úspěšně vytvořen',
        'update_success' => ':name byl úspěšně upraven',
        'delete_success' => ':name byl úspěšně smazán',
        'missing_id' => 'Musíte uvést ID záznamu.',
        'missing_model' => 'Form behavior used in :class does not have a model defined.',
        'missing_definition' => "Form behavior does not contain a field for ':field'.",
        'not_found' => 'Form record with an ID of :id could not be found.',
        'action_confirm' => 'Jste si jistí?',
        'create' => 'Vytvořit',
        'create_and_close' => 'Vytvořit a zavřít',
        'creating' => 'Vytváření...',
        'creating_name' => 'Vytváření :name...',
        'save' => 'Uložit',
        'save_and_close' => 'Uložit a zavřít',
        'saving' => 'Ukládání...',
        'saving_name' => 'Ukládání :name...',
        'delete' => 'Smazat',
        'deleting' => 'Mazání...',
        'deleting_name' => 'Mazání :name...',
        'reset_default' => 'Obnovit výchozí',
        'resetting' => 'Obnovování',
        'resetting_name' => 'Obnovování :name',
        'undefined_tab' => 'Ostatní',
        'field_off' => 'Off',
        'field_on' => 'On',
        'add' => 'Přidat',
        'apply' => 'Použít',
        'cancel' => 'Zrušit',
        'close' => 'Zavřít',
        'confirm' => 'Potvrdit',
        'reload' => 'Znovu načíst',
        'complete' => 'Kompletní',
        'ok' => 'OK',
        'or' => 'nebo',
        'confirm_tab_close' => 'Opravdu chcete zavřít záložku? Neuložené změny budou ztraceny.',
        'behavior_not_ready' => 'Chování formuláře není inicializováno, zkontrolujte jestli voláte metodu initForm() ve vašem kontroléru.',
        'preview_no_files_message' => 'Žádný soubor nebyl nahrán.',
        'preview_no_record_message' => 'Žádný záznam není vybraný.',
        'select' => 'Vybrat',
        'select_all' => 'vše',
        'select_none' => 'nic',
        'select_placeholder' => 'prosím vyberte',
        'insert_row' => 'Vložit řádek',
        'delete_row' => 'Smazat řádek',
        'concurrency_file_changed_title' => 'Soubor byl změněn',
        'concurrency_file_changed_description' => 'Soubor který upravujete byl na disku změněn jiným uživatelem. Můžete buď obnovit soubor a ztratit svoje změny, nebo přepsat soubor na disku.'
    ],
    'relation' => [
        'missing_config' => "Relation behavior does not have any configuration for ':config'.",
        'missing_definition' => "Relation behavior does not contain a definition for ':field'.",
        'missing_model' => 'Relation behavior used in :class does not have a model defined.',
        'invalid_action_single' => 'This action cannot be performed on a singular relationship.',
        'invalid_action_multi' => 'This action cannot be performed on a multiple relationship.',
        'help' => 'Pro přidání klikněte na položku',
        'related_data' => 'Related :name data',
        'add' => 'Přidat',
        'add_selected' => 'Přidat vybrané',
        'add_a_new' => 'Přidat nový :name',
        'link_selected' => 'Link selected',
        'link_a_new' => 'Link a new :name',
        'cancel' => 'Zrušit',
        'close' => 'Zavřít',
        'add_name' => 'Přidat :name',
        'create' => 'Vytvořit',
        'create_name' => 'Vytvořit :name',
        'update' => 'Upravit',
        'update_name' => 'Upravit :name',
        'preview' => 'Náhled',
        'preview_name' => 'Náhled :name',
        'remove' => 'Odstranit',
        'remove_name' => 'Odstranit :name',
        'delete' => 'Smazat',
        'delete_name' => 'Smazat :name',
        'delete_confirm' => 'Jste si jistí?',
        'link' => 'Link',
        'link_name' => 'Link :name',
        'unlink' => 'Unlink',
        'unlink_name' => 'Unlink :name',
        'unlink_confirm' => 'Jste si jistí?'
    ],
    'reorder' => [
        'default_title' => 'Seřadit záznamy',
        'no_records' => 'Nenašli jsme žádné záznamy k seřazení.',
    ],
    'model' => [
        'name' => 'Model',
        'not_found' => "Model ':class' s ID :id nebyl nalezen",
        'missing_id' => 'Není specifikované ID pro hledání záznamu v modelu.',
        'missing_relation' => "Model ':class' neobsahuje definici pro ':relation'.",
        'missing_method' => "Model ':class' nemá implementovanou metodu ':method'.",
        'invalid_class' => "Model :model použitý ve třídě :class není validní, musí dědit ze třídy Model.",
        'mass_assignment_failed' => "Mass assignment failed for Model attribute ':attribute'."
    ],
    'warnings' => [
        'tips' => 'Tipy pro konfiguraci systému',
        'tips_description' => 'Některé problémy s nastavením systému si vyžadují vaší pozornost.',
        'permissions'  => 'Složka :name nebo její podsložky nejsou pro PHP zapisovatelné. Nastavte prosím odpovídající oprávnění webového serveru pro tuto složku.',
        'extension' => 'PHP rozšíření :name není nainstalované. Nainstalujte prosím knihovnu a aktivujte rozšíření.'
    ],
    'editor' => [
        'menu_label' => 'Nastavení editoru kódu',
        'menu_description' => 'Nastavení editoru kódu, velikosti písma a barevného schématu.',
        'font_size' => 'Velikost písma',
        'tab_size' => 'Počet znaků odsazení',
        'use_hard_tabs' => 'Odsazení tabulátory',
        'code_folding' => 'Skládání kódu',
        'word_wrap' => 'Zalamování řádek',
        'highlight_active_line' => 'Zvýraznění aktivního řádku',
        'auto_closing' => 'Automatické doplňování tagů a speciálních znaků',
        'show_invisibles' => 'Zobrazit neviditelné znaky',
        'show_gutter' => 'Zobrazit číslování řádků',
        'theme' => 'Barevné schéma'
    ],
    'tooltips' => [
        'preview_website' => 'Náhled stránek'
    ],
    'mysettings' => [
        'menu_label' => 'Moje nastavení',
        'menu_description' => 'Nastavení vašeho administrátorského účtu'
    ],
    'myaccount' => [
        'menu_label' => 'Můj účet',
        'menu_description' => 'Nastavte si svoje jméno, e-mailovou adresu a heslo.',
        'menu_keywords' => 'bezpečnost login'
    ],
    'branding' => [
        'menu_label' => 'Nastavení administrace',
        'menu_description' => 'Nastavte si název, logo a barvy použité v administraci.',
        'brand' => 'Značka',
        'logo' => 'Logo',
        'logo_description' => 'Nahrajte vlastní logo, které bude použité v administraci.',
        'app_name' => 'Jméno aplikace',
        'app_name_description' => 'Toto jméno se zobrazí v titulní liště stránek.',
        'app_tagline' => 'Motto aplikace',
        'app_tagline_description' => 'Toto motto se zobrazí na přihlašovací stránce administrace.',
        'colors' => 'Barvy',
        'primary_color' => 'Primární color',
        'secondary_color' => 'Sekundární color',
        'accent_color' => 'Accent color',
        'styles' => 'Styly',
        'custom_stylesheet' => 'Vlastní kaskádové styly'
    ],
    'backend_preferences' => [
        'menu_label' => 'Nastavení administrace',
        'menu_description' => 'Nastavte si svůj účet, jako třeba jazyk.',
        'locale' => 'Jazyk',
        'locale_comment' => 'Vyberte si jazyk administrace, který chcete používat.'
    ],
    'access_log' => [
        'hint' => 'Tento záznam zobrazuje seznam úspěšných přihlášení do administrace. Záznamy jsou uchovávány :days dní.',
        'menu_label' => 'Log přístupů',
        'menu_description' => 'Zobrazit seznam úspěšných přihlášení do administrace.',
        'created_at' => 'Datum & čas',
        'login' => 'Login',
        'ip_address' => 'IP adresa',
        'first_name' => 'Jméno',
        'last_name' => 'Příjmení',
        'email' => 'E-mail'
    ],
    'filter' => [
        'all' => 'vše'
    ]
];

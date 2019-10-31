<?php
return [
    'user' => [
        'add_admin' => 'Administrator hinzufügen',
        'edit_admin' => 'Administrator bearbeiten',        
        'saved' => 'Benutzer erfolgreich gespeichert.',
        'deleted' => 'Benutzer erfolgreich gelöscht.',
        'not_found' => 'Benutzer nicht gefunden.',
        'profile_image' => 'Profil-Bild',
        'profile_text' => 'Profil-Text',        
        'logo' => 'Firmenlogo',
        'circle_logo' => 'Rundes Logo',
        'favicon_icon' => 'Favicon-Symbol',
        'resident_logo' => 'Bewohner-Portal Logo',                
        'notification_saved' => 'Benachrichtigungseinstellung gespeichert',        
        'request_category_saved' => 'Anfrage-Kategorie gespeichert',
        'request_category_deleted' => 'Anfrage-Kategorie gelöscht',                
        'errors' => [
            'not_found' => "Benutzer nicht gefunden",            
            'image_upload' => "Fehler beim Hochladen des Profilbildes: ",
            'incorrect_password' => "Passwort falsch",
            'email_missing' => "E-Mail fehlt",
            'email_already_exists' => "Die E-Mail [:email] existiert bereits. Bitte bestehenden Eintrag verwenden oder eine andere E-Mail eingeben",
            'email_not_exists' => "Die E-Mail [:email] existiert nicht in unserer Datenbank.",            
            'deleted' => "Fehler beim Löschen durch den Benutzer: ",
        ],        
    ],
    'resident' => [
        'view' => 'Öffnen',
        'name' => 'Bewohner',
        'view_title' => 'Bewohner Details',
        'edit_title' => 'Bewohner bearbeiten',
        'download_credentials' => 'Zugangsdaten (pdf)',
        'send_credentials' => 'Zugangsdaten (email)',
        'credentials_sent' => 'Zugangsdaten wurden erfolgreich gesendet.',
        'credentials_send_fail' => 'Anmeldedaten-Datei nicht gefunden. Versuchen Sie, das Passwort des Bewohners zu aktualisieren, um es neu zu generieren',
        'credentials_download_failed' => 'Anmeldedaten-Datei nicht gefunden. Versuchen Sie, das Passwort des Bewohners zu aktualisieren, um es neu zu generieren',
        'add' => 'Bewohner hinzufügen',
        'saved' => 'Bewohner wurde gespeichert',
        'deleted' => 'Bewohner wurde gelöscht',
        'status_changed' => 'Status wurde geändert',
        'password_reset' => 'Passwort wurde erfolgreich zurückgesetzt',
        'update' => 'Update',
        'birth_date' => 'Geburtsdatum',
        'nation' => 'Nationalität',
        'mobile_phone' => 'Mobil',
        'work_phone' => 'Geschäft',
        'private_phone' => 'Telefon privat',
        'created_date' => 'Erstelldatum',
        'pinboard' => 'Beiträge',
        'listings' => 'Marktplatz',
        'company' => 'Firmenname',        
        'building' => [
            'name' => 'Objekt',
        ],
        'unit' => [
            'name' => 'Einheit',
        ],
        'search_building' => 'Objekt suchen',
        'search_unit' => 'Einheit suchen',        
        'errors' => [
            'not_found' => "Bewohner nicht gefunden",
            'incorrect_email' => "Falsche E-Mail Adresse",
            'create' => "Fehler beim Erstellen des Bewohners: ",
            'update' => "Fehler bei der Aktualisierung des Bewohners: ",
            'deleted' => "Bewohner Löschfehler: ",
            'not_allowed_change_status' => 'Sie können den Status nicht ändern.',
            'not_allowed_change_type_has_request_contract' => 'Sie können den Typ nicht ändern, da dieser Bewohner :contracts_count Verträge und :requests_count requests hat.',
            'not_allowed_change_type_has_contract' => 'Du kannst den Typ nicht ändern, da dieser Bewohner :contracts_count Verträge hat.',
            'not_allowed_change_type_has_request' => 'Du kannst den Typ nicht ändern, da dieser Bewohner :requests_count requests hat.',
        ],        
        'personal_details_card' => 'Persönliche Angaben',
        'account_info_card' => 'Benutzer-Login',
        'contact_info_card' => 'Kontaktdaten',
        'contract' => [
            'title' => 'Mietvertrag',
            'rent_end' => 'Mietende',
            'rent_start' => 'Mietbeginn',
            'rent_type' => 'Objekttyp',            
            'rent_duration' => 'Vertragslaufzeit',
            'rent_durations' => [
                'unlimited' => 'Unbefristet',
                'limited' => 'Befristet',
            ],
            'contract_pdf' => 'Vertrag PDF',
            'filename' => 'Name',
            'deposit_amount' => 'Kautionsbetrag',
            'type_of_deposit' => 'Art der Sicherheitsleistung',
            'deposit_types' => [
                'bank_deposit' => 'Bankdsperrkonto',
                'bank_guarantee' => 'Bankgarantie',
                'insurance' => 'Kautionsversicherung',
                'other' => 'Sonstiges',
            ],
            'deposit_status' => [
                'label' => 'Mietkaution abgesichert',
                'yes' => 'Ja',
                'no' => 'Nein',
            ],
            'contract_id' => 'Vertrags-ID',
            'rent_status' => [
                'active' => 'Aktiv',
                'inactive' => 'Inaktiv',
            ],
            'add' => 'Vertrag erstellen',            
            'pdf_only_desc' => 'Bitte beachten Sie, dass nur PDF-Dateien hochgeladen werden können.',
            'saved' => 'Vertrag gespeichert',
            'status_count' => [
                'total' => 'Gesamtzahl der Verträge',
                'active' => 'Aktive Verträge',
                'inactive' => 'Inaktive Verträge',
            ],
        ],
        'status' => [
            'label' => 'Status',
            'active' => 'Aktiv',
            'not_active' => 'Inaktiv',
            'total' => 'Gesamt',
        ],
        'credentials_pdf' => [
            "resident_credentials" => "Anmeldedaten für Bewohner",
            'code' => 'Persönlicher Freischaltcode',
            'telephone' => 'Telefon',
            'your_email' => 'Ihre E-Mail Adresse',
            'email' => 'E-Mail',            
            'welcome' => 'Willkommen auf dem Bewohner-Portal von',
            'content_1' => 'Wir freuen uns, Ihnen mitteilen zu können, dass für Sie ein Konto in der Summe der Bewohner eingerichtet wurde. und senden Ihnen den Aktivierungscode zu.',
            'offer' => 'Was bietet die Applikation',
            'offers' => '
                <li>Mit dem digitalen Bewohnerdossier haben Sie Zugriff auf alle relevanten Dokumente wie Mietvertrag, Hausordnung oder andere Dokumente rund um die Immobilie.</li>
                <li>Über das Ticketing-System wickeln Sie Ihre Anfragen einfach und unkompliziert ab – Anliegen zeit- und ortsungebunden an die Verwaltung mitteilen</li>
                <li>Auf dem Markt- und Leihplatz können Sie Gegenstände an Ihre Nachbarschaft verkaufen oder verleihen.</li>
                <li>Teilen Sie Neuigkeiten mit Ihren Nachbarn indem Sie einen Beitrag publizieren. Die Pinnwand wird ebenfalls durch die Verwaltung für die Kommunikation genutzt, so sind alle stets auf dem Laufenden.</li>
                <li>Weitere Micro-Apps innerhalb der Applikation setzen neue Standards in der Wohnqualität wobei bequem diverse Dienstleistungen in Anspruch genommen werden können</li>
            ',
            'register' => 'Erste Anmeldung und Aktivierung Ihres Accounts',
            'content_2' => 'Um sich anzumelden, klicken Sie auf den untenstehenden Link und loggen Sie sich mit Ihrer E-Mail-Adresse und dem persönlichen Freischaltcode ein. Einmal eingeloggt können Sie Ihr eigenes Passwort definieren und dieses fortan für die Anmeldung nutzen.',
            'link_application' => 'Link zur Applikation',
            'content_3' => 'Wir freuen uns, Sie an Board begrüssen zu dürfen!',
            'content_4' => 'Sollten Sie Hilfe bei der Anmeldung benötigen, so stehen wir Ihnen gerne zur Verfügung.',
            'your_sincerely' => 'Mit freundlichen Grüssen',
            'your_administration' => 'Ihre Verwaltung'
        ],
        'type' => [
            'label' => 'Geschäftsbeziehung',
            'tenant' => 'Mieter',
            'owner' => 'Eigentümer',
        ],
    ],
    'building' => [
        'title' => 'Objekte',
        'edit_title' => 'Objekt bearbeiten',
        'add' => 'Objekt hinzufügen',
        'cancel' => 'Schliessen',
        'deleted' => 'Objekt wurde gelöscht.',
        'units' => 'Einheiten',
        'saved' => 'Objekt wurde gespeichert.',
        'floors' => 'Etagen',
        'under_floor' => 'Untergeschoss',
        'ground_floor' => 'Erdgeschoss',
        'basement' => 'Erdgeschoss',
        'attic' => 'Attikageschoss',
        'floor_nr' => 'Anzahl Etagen',
        'internal_building_id' => "Interne Objekt-ID",        
        'address_search' => 'Bitte Adresse eingeben.',
        'not_found' => 'Objekt nicht gefunden.',
        'media_category' => [
            'house_rules' => 'Hausordnung',
            'operating_instructions' => 'Benutzungsanleitungen',
            'care_instructions' => 'Pflegehinweise',
            'other' => 'Sonstiges',
        ],    
        'files' => 'Dokumente',
        'add_files' => 'Dokumente hinzufügen',
        'providers' => 'Dienstleister',        
        'select_media_category' => 'Kategorie der Mediendatei wählen',
        'quarter' => 'Projekt',
        'managers' => 'Bewirtschafter',
        'house_num' => 'Hausnummer',
        'assign_managers' => 'Bewirtschafter zuweisen',
        'unassign_manager' => 'Entfernen',
        'managers_assigned' => 'Bewirtschafter zugewiesen',
        'occupied_units' => 'Vermietete Einheiten',
        'free_units' => 'Freie Einheiten',        
        'document' => [
            'uploaded' => 'Mediendatei hinaufgeladen',
            'deleted' => 'Mediendatei gelöscht',
        ],
        'service' => [
            'deleted' => 'Dienstleister entfernt',
        ],
        'errors' => [
            'not_found' => "Objekt nicht gefunden.",
            'manager_not_found' => "Bewirtschafter nicht gefunden",
            'deleted' => "Fehler beim Löschen von Mediendateien: ",
            'manager_assigned' => "Fehler beim Zuweisung des Bewirtschafters: ",
            'provider_deleted' => "Fehler beim Entfernen des Diestleisters: ",
        ],
        'delete_building_modal' => [
            'title' => 'Objekt(e) löschen – Warnung!',
            'description_unit' => 'Dem ausgewählten Objekt sind Einheiten zugewiesen. Wenn diese ebenfalls gelöscht werden sollen, dann aktivieren Sie die unten stehende Option.',
            'description_request' => 'Dem ausgewählten Objekt sind Anfragen zugewiesen. Wenn diese ebenfalls gelöscht werden sollen, dann aktivieren Sie die unten stehende Option.',
            'description_both' => 'Dem ausgewählten Objekt sind Einheiten und Anfragen zugewiesen. Wenn diese ebenfalls gelöscht werden sollen, dann aktivieren Sie die unten stehende Optionen.',
            'delete_units' => ' Löschen',
            'dont_delete_units' => 'Nicht löschen',
            'delete_requests' => 'Löschen',
            'dont_delete_requests' => 'Nicht löschen',
        ],
        'assigned_buildings' => 'Zugewiesene Objekte',
        'warning_bar' => [
            'title' => 'Problem beheben',
            'message' => "Es wurden keine Empfänger für Anfragen in diesem Objekt oder dem dazugehörigen Projekt eingerichtet."
        ]
    ],
    'unit' => [
        'title' => 'Einheiten',
        'not_found' => 'Einheit nicht gefunden.',
        'add' => 'Einheit hinzufügen',
        'edit' => 'Einheit bearbeiten',
        'name' => 'Einheit-ID',
        'auto_create_question' => 'Möchten Sie eine Einheit automatisch erstellen?',
        'auto_create_description' => 'Mit dieser Option können Sie die Anzahl der Einheiten im Stockwerk eingeben und diese Einheiten werden automatisch beim Speichern des Gebäudes erstellt.',
        'deleted' => 'Einheit gelöscht',
        'saved' => 'Einheit gespeichert',
        'floor' => 'Etage',
        'floor_title' => [
            'under_ground_floor' => "UG",
            'ground_floor' => "EG",
            'upper_ground_floor' => "OG",
            'top_floor' => "Attika",
        ],
        'rooms' => 'Räume',
        'sq_meter' => 'Fläche',
        'room_no' => 'Anzahl Zimmer',
        'building' => 'Objekt',
        'basement' => 'Untergeschoss',
        'attic' => 'Attikageschoss',        
        'assigned_resident' => 'Zugewiesener Bewohner',
        'assigned_residents' => 'Zugewiesene Bewohner',
        'resident_assigned' => 'Bewohner wurde zugewiesen',
        'resident_unassigned' => 'Bewohner wurde entfernt',
        'assignment' => 'Zugewiesene Bewohner',
        'type' => [
            'label' => 'Typ',
            'apartment' => 'Wohnung',
            'business' => 'Gewerbe',
            'hobby_room' => 'Hobbyraum',
            'storeroom' => 'Abstellraum',
            'underground_parking_space' => 'Tiefgaragenplatz',
            'outdoor_parking' => 'Aussenparkplatz',
            'motorbike_pitch' => 'Motorradplatz'
        ],
        'errors' => [
            'not_found' => "Einheit nicht gefunden",
            'create' => "Fehler beim Erstellen der Einheit: ",
            'update' => "Fehler beim Aktualisieren der Einheit: ",
            'resident_assign' => "Fehler bei der Zuweisung des Bewohners: ",
            'resident_not_assign' => "Bewohner konnte der Einheit nicht zugewiesen werden.",
            'resident_not_found' => "Bewohner nicht gefunden",
            'deleted' => "Fehler beim Löschen der Einheit: ",
        ],
    ],   
    'pinboard' => [
        'title' => 'Pinnwand',
        'title_label' => 'Betreff',
        'content' => 'Inhalt',
        'preview' => 'Vorschau',
        'add' => 'Beitrag hinzufügen',        
        'saved' => 'Beitrag wurde gespeichert',
        'view_incresead' => "Aufrufe erfolgreich gesteigert",        
        'deleted' => 'Beitrag wurde gelöscht',
        'edit_title' => 'Beitrag bearbeiten',
        'likes' => 'Likes',
        'views' => 'Aufrufe',
        'published_at' => 'Veröffentlichung',
        'publish' => 'Veröffentlicht',
        'unpublish' => 'Unpublish',
        'buildings' => 'Objekte',
        'announcement' => 'Ankündigung an',
        'notify_email' => 'Mieter benachrichtigen',
        'notify_email_description' => "Mit dieser Option können Sie die E-Mail-Benachrichtigung aktivieren.",
        'announcement_to' => 'Ankündigung',
        'comments' => 'Kommentare',
        'images' => 'Fotos und Dokumente',
        'attachments' => 'Anhänge',
        'category_default_image_label' => 'Möchten Sie dieses Bild verwenden?',
        'placeholders' => [            
            'search_provider' => 'Dienstleister suchen',
        ],
        'type' => [
            'label' => 'Typ',
            'post' => 'Post',
            'article' => 'Artikel',
            'new_neighbour' => 'Neuer Nachbar',
            'announcement' => 'Ankündigung',
        ],
        'sub_type' => [
            'label' => 'Subtyp',
            'important' => 'Wichtig',
            'critical' => 'Kritisch',
            'maintenance' => 'Wartung',
        ],
        'errors' => [
            'not_found' => "Beitrag nicht gefunden",
            'quarter_not_found' => "Projekt nicht gefunden",
            'building_not_found' => "Projekt nicht gefunden",
            'provider_not_found' => "Dienstanbieter nicht gefunden",
            'deleted' => "Gelöschten Fehler buchen: ",
        ],
        'status' => [
            'label' => 'Status',
            'new' => 'Neu',
            'published' => 'Veröffentlicht',
            'unpublished' => 'Unveröffentlicht',
            'not_approved' => 'Nicht genehmigt',
        ],
        'visibility' => [
            'label' => 'Sichtbarkeit',
            'address' => 'Liegenschaft',
            'quarter' => 'Überbauung',
            'all' => 'Alle App-Nutzer',
        ],
        'assign_type' => 'Typ',        
        'execution_period' => [
            'label' => 'Ein Tag oder mehrere Tage',
            'single_day' => 'Ein Tag',
            'many_day' => 'Mehrtägig',
        ],
        'specify_time_question' => 'Möchten Sie die Zeit angeben?',
        'specify_time_description' => "Mit dieser Option können Sie die Ankündigungszeit festlegen.",
        'execution_interval' => [
            'label' => 'Datum der Durchführung',
            'date' => 'Datum',
            'end' => 'Ende',
            'start' => 'Start',
            'from' => 'Von',
            'separator' => 'Bis',
        ],
        'category' => [
            'label' => 'Kategorie',
            'general' => 'Generell',
            'maintenance' => 'Unterhalt',
            'electricity' => 'Elektro',
            'heating' => 'Heizung',
            'sanitary' => 'Sanitär',
        ],
    ],
    'service' => [
        'title' => 'Dienstleister und Hauswartung',
        'view' => 'Öffnen',
        'view_title' => 'Service anzeigen',
        'add_title' => 'Firma hinzufügen',
        'edit_title' => 'Firma bearbeiten',
        'saved' => 'Dienstleister gespeichert',
        'deleted' => 'Dienstleister gelöscht',
        'category' => [
            'label' => 'Gewerke',
            'electrician' => 'Elektro',
            'heating_company' => 'Heizung',
            'lift' => 'Lift',
            'sanitary' => 'Sanitär',
            'key_service' => 'Schlüsseldienst',
            'caretaker' => 'Hauswart',
            'real_estate_service' => 'Liegenschaftsdienst',
        ],
        'contact_details' => 'Kontaktdaten',
        'user_credentials' => 'Logindaten',
        'company_details' => 'Firmendaten',
        'assign_type' => 'Typ',        
        'placeholders' => [
            'category' => 'Gewerk wählen',
        ],
        'errors' => [
            'not_found' => "Dienstleister nicht gefunden",
            'create' => "Fehler beim Erstellen des Dienstleisters: ",
            'update' => "Fehler beim Aktualisieren des Dienstleisters: ",
            'deleted' => "Fehler beim Löschen des Dienstleisters: ",
            'quarter_not_found' => "Projekt nicht gefunden",
            'building_not_found' => "Objekt nicht gefunden",
            'building_already_assign' => "Diese Liegschaft ist bereits einem Projekt zugewiesen."
        ],
    ],
    'quarter' => [
        'title' => 'Projekte',
        'add' => 'Projekt hinzufügen',
        "edit" => "Projekt bearbeiten",
        'saved' => 'Projekt wurde gespeichert!',
        'deleted' => 'Projekt wurde gelöscht',        
        'required' => 'Projekt ist ein Pflichfeld!',
        'buildings' => 'Objekte',
        'count_of_buildings' => 'Anzahl Objekte',
        'buildings_count' => 'Anzahl Objekte',
        'total_units_count' => 'Anzahl Einheiten',
        'occupied_units_count' => 'Belegte Einheiten',
        'active_residents_count' => 'Aktive Bewohner',
        'assignment' => 'Zuständigkeit',
        'errors' => [
            'not_found' => "Projekt nicht gefunden.",
            'deleted' => "Fehler beim Löschen des Projekts: ",
        ],
    ],
    'request' => [        
        'deleted' => 'Anfrage gelöscht',
        'title' => 'Anfragen Management',
        'created' => 'Erstellt',
        'saved' => 'Anfrage gespeichert',
        'prop_title' => 'Titel',
        'category' => 'Anfrage-Typ',
        'edit_title' => 'Anfrage bearbeiten',
        'add_title' => 'Anfrage hinzufügen',
        'mass_edit' => [
            'label' => 'Massenbearbeitung',
            'options' => [
                'service_provider' => 'Dienstleister',
                'property_manager' => 'Bewirtschafter',
                'change_status' => 'Status ändern'
            ],
            'service_provider' => [
                'modal' => [
                    'heading_title' => 'Dienstleisterüberschrift zuordnen',
                    'content_label' => 'Sie können hier Dienstleister auswählen',
                    'footer_button' => 'Dienstleister zuordnen',
                    'switcher_label' => 'Benachrichtigung von Dienstleistern',
                    'switcher_desc' => 'Sie können die betroffenen Dienstleister informieren',
                ]
            ],
            'property_manager' => [
                'modal' => [
                    'heading_title' => 'Zuweisung der Überschrift der Hausverwalter',
                    'content_label' => 'Sie können hier den/die Hausverwalter auswählen.',
                    'footer_button' => 'Hausverwalter zuordnen',
                ]
            ],
            'change_status' => [
                'modal' => [
                    'heading_title' => 'Statusüberschrift ändern',
                    'content_label' => 'Sie können den Status hier ändern.',
                    'footer_button' => 'Status ändern',
                ]
            ],
        ],
        'due_date' => 'Zu erledigen bis',
        'solved_date' => 'Erledigt Datum',
        'closed_date' => 'Erledigt am',
        'service' => 'Dienstleister',
        'created_by' => 'Erstellt durch',
        'is_public' => 'Öffentlich machen',
        'public_title' => 'Anfrage öffentlich machen',
        'public_desc' => 'Sie können diese Anfrage als öffentlich markieren und für weitere Personen in der Liegenschaft oder innerhalb des Projekts sichtbar machen.',
        'visibility_title' => 'Für wen sichtbar machen?',
        'visibility_desc' => 'Geben Sie an, ob es die Bewohner innerhalb eines Gebäudes oder der Überbauung sehen können.',
        'send_notification_title' => 'Benachrichtigung der Bewohner',
        'send_notification_desc' => 'Sie können die betroffenen Bewohner per E-Mail über diese öffentliche Anfrage informieren.',
        'comments' => 'Mieter-Chat',
        'assigned_to' => 'Zuständig',
        'assign_providers' => 'Zuweisen',
        'assign_managers' => 'Zuweisen',
        'assigned_service_providers' => 'Dienstleister',
        'assigned_property_managers' => 'Verantwortlich',
        'notify' => 'Kommunikation',
        'public_legend' => 'Setzen Sie diese Option, um die Anfrage für alle ansässigen Nachbarn sichtbar zu machen.',
        'conversation' => 'Chat-Mitteilungen',
        'conversation_created' => "Nachricht wurde übermittelt.",
        'internal_notice_saved' => "Interne Notiz wurde gespeichert.",
        'internal_notice_updated' => "Interne Notiz wurde aktualisiert.",
        'internal_notice_deleted' => "Interne Notiz wurde gelöscht.",
        'open_conversation' => 'Offen',
        'other_recipients' => 'Weitere Empfänger',
        'recipients' => 'Empfänger',
        'images' => 'Fotos und Dokumente',
        'no_images_message' => 'Bislang keine Dateien hochgeladen',
        'request_details' => 'Beschreibung',
        'internal_notices' => 'Interne Notizen',
        'status_changed' => 'Status wurde geändert',
        'priority_changed' => 'Priorität wurde geändert',
        'assignment' => 'Zuständigkeit',        
        'active_reminder_switcher' => 'Erinnerung',
        'days_left' => 'Wie viele Tage vorher?',
        'send_person' => 'Wer soll benachrichtigt werden?',
        'sort' => 'Sortierung',
        'reset_sort' => 'Sortierung zurücksetzen',
        'creation_date' => 'Erstellungsdatum',
        'category_list' => [
            'general' => ' Allg. Anliegen',
            'malfunction' => 'Fehlfunktion',
            'deficiency' => 'Mangel'
        ],
        'sub_category' => [
            'surrounding' => 'Umgebung',
            'real_estate' => 'Liegenschaft',
            'flat' => 'Wohnung',
        ],
        'media' => [
            'added' => 'Mediendatei hinzugefügt',
            'removed' => 'Mediendatei entfernt.',
            'deleted' => 'Mediendatei gelöscht',
            'delete' => 'Löschen',
        ],
        'priority' => [
            'label' => 'Priorität',
            'urgent' => 'Dringend',
            'low' => 'Niedrig',
            'normal' => 'Normal',
        ],
        'internal_priority' => [
            'label' => 'Interne Priorität',
            'urgent' => 'Dringend',
            'low' => 'Niedrig',
            'normal' => 'Normal',
        ],
        'defect_location' => [
            'label' => 'Örtlichkeit',
            'apartment' => 'Wohnung',
            'building' => 'Haus',
            'environment' => 'Ungebung',
        ],
        'qualification' => [
            'label' => 'Qualifikation',
            'none' => 'Keine',
            'optical' => 'Optisch',
            'sia' => 'SIA',
            '2_year_warranty' => '2-Jahresgarantie',
            'cost_consequences' => 'Kostenfolge',
        ],
        'location' => [
            'house_entrance' => 'Hauseingang',
            'staircase' => 'Treppenhaus',
            'elevator' => 'Lift',
            'car_park' => 'Tiefgarage',
            'washing' => 'Waschen/Trocknen',
            'heating' => 'Technik/Heizung',
            'electro' => 'Technik/Elektro',
            'facade' => 'Fassade',
            'roof' => 'Dach',
            'other' => 'Anderes'
        ],
        'room' => [
            'bath' => 'Bad/WC',
            'shower' => 'Du/WC',
            'entrance' => 'Entrée',
            'passage' => 'Gang',
            'basement' => 'Keller',
            'kitchen' => 'Küche',
            'storeroom' => 'Reduit',
            'habitation' => 'Wohnen',
            'room1' => 'Zimmer 1',
            'room2' => 'Zimmer 2',
            'room3' => 'Zimmer 3',
            'room4' => 'Zimmer 4',
            'all' => 'Alle',
            'other' => 'Anderes'
        ],
        'capture_phase' => [
            'other' => 'Andere',
            'construction' => 'Bauphase (BP)',
            'shell' => 'Rohbauabnahme (RA)',
            'preliminary' => 'Vorabnahme (VA)',
            'work' => 'Bauabnahme (BA)',
            'surrender' => 'Übergabe (UEB)',
            'inspection' => 'Abnahme (AB)'
        ],
        'payer' => [
            'landlord' => 'Vermieter',
            'resident' => 'Bewohner',
            'resident/landlord' => 'Bewohner u. Vermieter'
        ],
        'status' => [
            'label' => 'Status',
            'received' => 'Erhalten',
            'assigned' => 'Avisiert',
            'in_processing' => 'In Bearbeitung',
            'reactivated' => 'Reaktiviert',
            'done' => 'Erledigt',
            'archived' => 'Archiviert',
            'solved' => "Erledigt",
            'pending' => "Pendent"
        ],
        'category_options' => [
            'disturbance' => 'Störung',
            'defect' => 'Defekt/Mangel',
            'other' => 'Sonstiges',
            'room' => 'Raum',
            'range' => 'Bereich',
            'component' => 'Bauteil',
            'capture_phase' => 'Erfassungsphase',
            'cost' => 'Zu Lasten von',
            'keywords' => 'Tags',
        ],
        'placeholders' => [
            'category' => 'Kategorie wählen',
            'qualification' => 'Qualifikation wählen',
            'status' => 'Status wählen',
            'due_date' => 'Zu erledigen bis',
            'resident' => 'Suche nach einem Bewohner',
            'visibility' => 'Sichtbarkeit',
            'person' => 'Nach einer Person suchen',
        ],
        'mail' => [
            'body' => 'Inhalt',
            'subject' => 'Betreff',
            'to' => 'An',            
            'notify' => 'E-Mail senden',            
            'provider' => 'Dienstleister',
            'manager' => 'Bewirtschafter',
            'cancel' => 'Schliessen',
            'send' => 'Senden',
            'cc' => 'CC',
            'bcc' => 'BCC',
            'success' => 'E-Mail wurde erfolgreich gesendet',                        
        ],
        'user_type' => [
            'label' => 'Typ',
            'provider' => 'Dienstleister',
            'manager' => 'Bewirtschafter',
            'user' => 'Administrator',
        ],
        'visibility' => [
            'label' => 'Sichtbarkeit',
            'resident' => 'Nur ich',
            'quarter' => 'Überbauung',
            'building' => 'Liegenschaft',
        ],
        'errors' => [
            'not_found' => 'Anfrage nicht gefunden',
            'not_allowed_change_status' => 'Sie dürfen den Status nicht ändern.',
            'provider_not_found' => 'Dienstleister nicht gefunden',
            'tag_not_found' => 'Tag nicht gefunden',
            'user_not_found' => 'Benutzer nicht gefunden',
            'conversation_not_found' => "Mitteilung(en) nicht gefunden",
            'statistics_error' => "Statistik-Fehler: ",
            'internal_notice_not_found' => "Interne Notiz nicht gefunden",
            'deleted' => "Service Request gelöschter Fehler: ",
        ],                
        'actions' => 'Aktionen',
        'download_pdf' => [
            'title' => 'PDF herunterladen',
            'entrepreneur_signature'=> 'Entrepreneur unterschreiben',
            'customer_signature'=> 'Kundenunterschrift',
            'service_request' => 'Serviceanfrage',
            'contact_details' => 'Kontaktdaten',
            'contact_text' => 'Dies sind die Kontaktdaten des aktuellen Bewohners/Besitzers der Wohneinheit.',
        ],
        'go_to_building' => 'Zum Objekt gehen'

    ],
    'request_category' => [
        'title' => 'Anfrage Kategorien',
        'add' => 'Kategorie hinzufügen',
        'cancel' => 'Schliessen',
        'required' => 'Dies ist ein Pflichtfeld',
        'parent' => 'Hauptkategorie',
        'errors' => [
            'not_found' => "Anfrage-Kategorie nicht gefunden",
            'parent_not_found' => "Die übergeordnete Anfrage-Kategorie wurde nicht gefunden",
            'multiple_level_not_found' => "Mehrstufig verschachtelte Kategorien sind nicht erlaubt.",
            'used_by_request' => "Diese Kategorie wird in Anfragen verwendet",
        ]
    ],
    'property_manager' => [
        'title' => 'Bewirtschafter',
        'add' => 'Bewischafter hinzufügen',
        'saved' => 'Bewirtschafter wurde gespeichert',
        'deleted' => 'Bewirtschafter wurde gelöscht',
        'edit_title' => 'Bewirtschafter bearbeiten',
        'profession' => 'Position',
        'slogan' => 'Slogan',
        'linkedin_url' => 'Linkedin',
        'xing_url' => 'Xing',      
        'details_card' => 'Details & Konto',        
        'delete_with_reassign_modal' => [
            'title' => 'Andere Person zuweisen und dann Benutzer löschen',
            'description' => 'Der gewählte Bewirtschafter ist mit Objekten verbunden. Sie können die Objekte an eine anderen Person zuweisen. Wählen Sie hierzu einen Bewirtschafter aus der Liste aus.',
            'search_title' => 'Bewirtschafter suchen',
        ],
        'delete_without_reassign' => 'Löschen',
        'profile_card' => 'User Profile',
        'social_card' => 'Social Media',
        'assign_type' => 'Typ',        
        'errors' => [
            'not_found' => "Bewirtschafter nicht gefunden",
            'create' => "Fehler beim Erstellen des Bewirtschafters: ",
            'update' => "Fehler beim Aktualisieren des Bewirtschafters:",
            'quarter_not_found' => "Projekt nicht gefunden",
            'building_not_found' => "Objekt nicht gefunden",
            'building_already_assign' => "Edificio già assegnato per tutto il trimestre",
            'building_assign_deleted_property_manager' => "Sie können einem gelöschten Bewirtschafter keine Objekte zuordnen.",
            'deleted' => "Bewirtschafter löschte Fehler: ",
        ],
    ],
    'house_owner' => [
        'title' => 'Hausbesitzer',
        'add' => 'Hausbesitzer hinzufügen',
        'saved' => 'Hausbesitzer wurde gespeichert',
        'deleted' => 'Hausbesitzer wurde gelöscht',
        'edit_title' => 'Hausbesitzer bearbeiten',
        'first_name' => 'Vorname',
        'last_name' => 'Name',
        'profession' => 'Position',
        'slogan' => 'Slogan',
        'linkedin_url' => 'Linkedin',
        'xing_url' => 'Xing',
        'password' => 'Passwort',
        'confirm_password' => 'Passwort bestätigen',
        'building_card' => 'Objekt zuweisen',
        'details_card' => 'Details & Konto',
        'no_buildings' => 'Keine Objekte zugewiesen',
        'add_buildings' => 'Objekt hinzufügen',
        'buildings_search' => 'Objekt suchen',
        'quarters' => 'Projekte',
        'delete_with_reassign_modal' => [
            'title' => 'Andere Person zuweisen und dann Benutzer löschen',
            'description' => 'Der ausgewählte Hausbesitzer ist mit Immobilien verknüpft. Sie können die Eigenschaften einer anderen Person zuordnen. Wählen Sie dazu einen Hausbesitzer aus der Liste aus.',
            'search_title' => 'Suche Hausbesitzer',
        ],
        'delete_without_reassign' => 'Löschen',
        'profile_card' => 'User Profile',
        'social_card' => 'Social Media',
        'assign_type' => 'Typ',
        'building_already_assigned' => 'Das Gebäude ist bereits innen auf einem Viertel.',
        'errors' => [
            'not_found' => "Hausbesitzer nicht gefunden",
            'create' => "Hausbesitzer erstellen Fehler: ",
            'update' => "Hausbesitzer aktualisierter Fehler: ",
            'quarter_not_found' => "Projekt nicht gefunden",
            'building_not_found' => "Objekt nicht gefunden",
            'building_already_assign' => "Edificio già assegnato per tutto il trimestre",
            'building_assign_deleted_house_owner' => "Sie können einem gelöschten Hausbesitzer keine Gebäude zuordnen.",
            'deleted' => "Hausbesitzer hat den Fehler gelöscht: ",
        ],
    ],
    'listing' => [
        'title' => 'Marktplatz',
        'add' => 'Inserat hinzufügen',
        'edit_title' => 'Inserat bearbeiten',                
        'listing_title' => 'Titel',
        'published_at' => 'Hinzugefügt am',
        'publish' => 'Veröffentlicht',
        'unpublish' => 'Unveröffentlicht',
        'likes' => 'Likes',
        'saved' => 'Inserat gespeichert',
        'deleted' => 'Inserat gelöscht',
        'comments' => 'Kommentare',
        'contact' => 'Kontaktdaten',
        'price' => 'Preis',
        'comment_created' => "Kommentar erfolgreich erstellt",
        'errors' => [
            'not_found' => "Produkt nicht gefunden",
            'deleted' => "Fehler beim Löschen des Produkts: ",
        ],
        'type' => [
            'label' => 'Typ',
            'sell' => 'Verkaufen',
            'lend' => 'Verleihen',
            'service' => 'Dienstleistung',
            'giveaway' => 'Verschenken',
        ],
        'status' => [
            'label' => 'Status',
            'published' => 'Veröffentlicht',
            'unpublished' => 'Unveröffentlicht',
        ],
        'visibility' => [
            'label' => 'Sichtbarkeit',
            'address' => 'Meine Nachbarn',
            'quarter' => 'Überbauung',
            'all' => 'Alle App-Nutzer',
        ],
    ],
    'template' => [
        'saved' => 'Vorlage gespeichert',
        'deleted' => 'Vorlage gelöscht',
        'add' => 'Hinzufügen',
        'title' => 'Vorlagen',
        'subject' => 'Betreff',
        'body' => 'Inhalt',
        'category' => 'Kategorie',
        'tags' => 'Tags',
        'placeholders' => [
            'category' => 'Kategorie wählen',
        ],
        'errors' => [
            'not_found' => "Vorlage nicht gefunden",
        ]
    ],
    'cleanify' => [
        'page_title' => 'Cleanify request',        
        'address' => 'Strasse + Nr',
        'save' => 'Anfragen einsenden',
        'success' => 'Ihr Anfrage wurde erfolgreich an Cleanify übertragen.',
        'terms_and_conditions' => 'Accept Terms & Conditions',
        'terms_text' => 'Terms text here, long text',
    ],
    'editor' => [
        'bold' => 'Fett',
        'underline' => 'Unterstreichen',
        'italic' => 'Kursiv',
        'forecolor' => 'Farbe',
        'bgcolor' => 'Hintergrundfarbe',
        'strikethrough' => 'Durchstreichen',
        'eraser' => 'Radiergummi',
        'source' => 'Codeview',
        'quote' => 'Zitat',
        'fontfamily' => 'Schriftfamilie',
        'fontsize' => 'Schriftgröße',
        'head' => 'Kopf',
        'orderlist' => 'Geordnete Liste',
        'unorderlist' => 'Ungeordnete Liste',
        'alignleft' => 'Links ausrichten',
        'aligncenter' => 'Mitte ausrichten',
        'alignright' => 'Rechtsbündig ausrichten',
        'link' => 'Link einfügen',
        'link_target' => 'Öffnungsmodus',
        'text' => 'Text',
        'submit' => 'Absenden',
        'cancel' => 'Abbrechen',
        'unlink' => 'Link aufheben',
        'table' => 'Tabelle',
        'emotion' => 'Emotionen',
        'img' => 'Bild',
        'upload_img' => 'Hochladen',
        'link_img' => 'Link',
        'video' => 'Video',
        'width' => 'Breite',
        'height' => 'Höhe',
        'location' => 'Ort',
        'loading' => 'Laden',
        'searchlocation' => 'Suche',
        'dynamic_map' => 'Dynamisch',
        'clear_location' => 'Löschen',
        'lang_dynamic_one_location' => 'Nur ein Standort in der dynamischen Karte',
        'insertcode' => 'Code einfügen',
        'undo' => 'Rückgängig',
        'redo' => 'Wiederholen',
        'fullscreen' => 'Vollständige Sichtung',
        'open_link' => 'Link öffnen',
        'upload_place_txt' => 'hochladen__',
        'upload_timeout_place_txt' => 'upload_timeout__',
        'upload_error_place_txt' => 'upload_error__',
        'title' => 'Titel',
        'in_format' => 'Im Format',
        'rows' => 'Zeilen',
        'cols' => 'Spalten',
        'color' => [
            'dark_red' => 'Dunkelrot',
            'violet' => 'Violett',
            'red' => 'Rot',
            'fresh_pink' => 'Frisches Rosa',
            'navy_blue' => 'Marineblau',
            'blue' => 'Blau',
            'blue_lake' => 'Blauer See',
            'blue_green' => 'Blaugrün',
            'green' => 'Grün',
            'olive' => 'Olive',
            'light_green' => 'Hellgrün',
            'orange' => 'Orange',
            'gray' => 'Grau',
            'silver' => 'Silber',
            'black' => 'Schwarz',
            'white' => 'Weiss',
        ]
    ],
];
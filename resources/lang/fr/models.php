<?php
return [
    'user' => 
    [
      'administrator' => 'Administrateurs',
      'super_admin' => 'Super admins',
      'add_admin' => 'Ajouter un administrateur',
      'edit_admin' => 'Modifier l\'administrateur',
      'add_super_admin' => 'Ajouter Super admin',
      'edit_super_admin' => 'Editer Super admin',      
      "date" => "Date",            
      "add" => "Ajouter un utilisateur",
      "saved" => "Utilisateur enregistré avec succès",
      "deleted" => "Utilisateur supprimé",
      "not_found" => "Utilisateur non trouvé",
      "profile_image" => "Image du profil",
      "profile_text" => "Texte du profil",
      "avatar_uploaded" => "Avatar téléchargé",
      "logo_uploaded" => "Logo téléchargé",
      "logo" => "Logo",
      "blank_pdf" => "PDF vierge",
      "notificationSaved" => "Réglage de la notification sauvegardé",
      "realEstateSaved" => "Options des biens immobiliers sauvegardées",
      "serviceRequestCategorySaved" => "Catégorie de demande de service sauvegardée",
      "serviceRequestCategoryDeleted" => "Catégorie de demande de service supprimée",
      'setting_saved' => "réglage utilisateur sauvegardé",
      'setting_deleted' => "Suppression du réglage utilisateur",      
      'password_reset_request_sent' => "Nous vous avons envoyé un e-mail avec d'autres instructions. Veuillez vérifier votre boîte de réception.", 
      'errors' => [
        'not_found' => "Utilisateur introuvable",
        'setting_not_found' => "réglage utilisateur introuvable",        
        'image_upload' => "Erreur de téléchargement de l'image de l'utilisateur :",
        'incorrect_password' => "Mot de passe utilisateur incorrect",
        'email_missing' => "email est manquant",
        'email_already_exists' => "Ce [:email] email existe déjà, Sélectionner un autre email",
        'email_not_exists' => "Ce [:email] email n'existe pas",
        'password_reset_token_invalid' => "Ce jeton de réinitialisation de mot de passe n'est pas valide.",
        'deleted' => "Erreur de suppression par l'utilisateur : ",
      ],
      'validation' => 
      [
        'name' => 
        [
          'required' => 'Nom est obligatoire',
        ],
        'role' => 
        [
          'required' => 'Le rôle est requis',
        ],
      ],
    ],
    'tenant' => 
    [
      "view" => "Vue",
      "view_title" => "Afficher locataire",
      "edit_title" => "Traiter locataire",
      "download_credentials" => "Télécharger les informations d'identification",
      "send_credentials" => "Envoyez les papiers d'identité",
      "credentials_sent" => "Lettres de créance envoyées",
      "credentials_send_fail" => "Fichier d'authentification introuvable. Essayez de mettre à jour le mot de passe du locataire pour le régénérer",
      "credentials_download_failed" => "Fichier d'authentification introuvable. Essayez de mettre à jour le mot de passe du locataire pour le régénérer",
      "add" => "Ajouter un locataire",
      "saved" => "Locataire sauvé",
      "deleted" => "Locataire supprimé",
      "status_changed" => "Le statut a changé",
      "password_reset" => "Le mot de passe du locataire a été réinitialisé avec succès",
      "update" => "Mise à jour",      
      "first_name" => "Prénom",
      "last_name" => "Nom de famille",
      "birth_date" => "Date de naissance",
      'nation' => 'Nation',
      "mobile_phone" => "Téléphone portable",
      "work_phone" => "Téléphone au travail",
      "personal_phone" => "Téléphone personnel",
      "private_phone" => "Téléphone personnel",
      "created_date" => "Date de création",
      "contract" => "Contrat",
      "posts" => "Poteaux",
      "products" => "Produits",
      "company" => "Nom de l'entreprise",
      "no_building" => "Pas de bâtiment",
      'building' => 
      [
        'name' => 'Edificio',
      ],
      'unit' => 
      [
        'name' => 'Unité',
      ],
      'search_building' => 'Rechercher un bâtiment',
      'search_unit' => 'Unité de recherche',
      'validation' => 
      [
        'first_name' => 
        [
          'required' => "Prénom est obligatoire",
        ],
        'last_name' => 
        [
          'required' => "Nom de famille est obligatoire",
        ],
        'birth_date' => 
        [
          'required' => "La date de naissance est requise",
        ],
        'building' => 
        [
          'required' => "Un bâtiment est nécessaire",
        ],
        'unit' => 
        [
          'required' => "L'unité est nécessaire",
        ],
        'title' => 
        [
          'required' => "Le titre est requis",
        ],
        'language' => 
        [
          'required' => "La langue est obligatoire",
        ]
      ],
      'errors' => [
        'not_found' => "Locataire introuvable",
        'incorrect_email' => "Adresse e-mail incorrecte",
        'create' => "Le locataire crée l'erreur : ",
        'update' => "Erreur de mise à jour locataire : ",	
        'deleted' => "Erreur de suppression du locataire : ",
        'not_allowed_change_status' => "Vous n'êtes pas autorisé à changer de statut.",        
      ],      
      "building_card" => "Affecter unité",
      "personal_details_card" => "Données personnelles",
      "account_info_card" => "Connexion de l'utilisateur",
      "contact_info_card" => "Coordonnées de contact",
      "personal_data" => "Données personnelles",
      "my_documents" => "Mes documents",
      "my_contract" => "Mon contrat",
      "contact_persons" => "Mes contacts",
      "no_contacts" => "Aucun contact disponible",
      "rent_end" => "Fin du loyer",
      "rent_start" => "Début du loyer",
      "rent_contract" => "Contrat de location",
      'contact' => 
      [
        "category" => "Catégorie",        
      ],
      'status' => 
      [
        "label" => "Statut",
        "active" => "Actif",
        "not_active" => "Non actif",
      ],
    ],
    'building' => 
    [
      "title" => "Bâtiments",
      "edit_title" => "Éditer le bâtiment",
      "add" => "Ajouter un bâtiment",      
      "cancel" => "Annuler",
      "deleted" => "Bâtiment supprimé avec succès",
      "units" => "Unités",
      "saved" => "Bâtiment sauvé",
      "floors" => "Planchers",
      "basement" => "Sous-sol",
      "attic" => "Grenier aménageable",
      "floor_nr" => "Nombre d'étages",
      "label" => "Étiquette",
      "address_search" => "Veuillez entrer l'adresse",
      "not_found" => "Bâtiment non trouvé",
      "house_rules" => "Règlement intérieur",
      "operating_instructions" => "Notice d'utilisation",
      'care_instructions' => 'Conseils d\'entretien',
      "other" => "Autre",
      "files" => "Fichiers",
      "add_files" => "Ajouter des fichiers",
      "add_companies" => "Ajouter des entreprises",
      "companies" => "Sociétés de services",
      "no_services" => "Aucun service ajouté",
      "select_media_category" => "Sélectionner une catégorie de médias",
      "quarter" => "Trimestre",
      "district" => "Trimestre",
      "managers" => "Gestionnaires",
      "house_nr" => "Maison Nr.",      
      "assign_managers" => "Affecter des gestionnaires",
      "unassign_manager" => "Désassigner",
      "managers_assigned" => "Gestionnaires affectés",
      "occupied_units" => "Unités Ocuppied",
      "free_units" => "Unités libres",
      'manager' => 
      [
        "unassigned" => "Gestionnaire non affecté",
      ],
      'document' => 
      [
        "uploaded" => "Document téléchargé",
        "deleted" => "Document supprimé",
      ],
      'service' => 
      [
        "deleted" => "Service enlevé de ce bâtiment",
      ],
      'validation' => 
      [
        'name' => 
        [
          "required" => "Le nom est obligatoire",
        ],
        'floor_nr' => 
        [
          "required" => "Le numéro d'étage est requis",
        ],
        'description' => 
        [
          "required" => "Une description est requise",
        ],
        'label' => 
        [
          "required" => "Une étiquette est requise",
        ],
        'address_id' => 
        [
          "required" => "L'adresse est requise",
        ],
      ],
      'errors' => [
        'not_found' => "Bâtiment non trouvé",
        'manager_not_found' => "Gestionnaire immobilier introuvable",
        'deleted' => "Erreur de suppression du bâtiment : ",
        'manager_assigned' => "Les gestionnaires immobiliers attribuent à l'erreur de construction : ",
        'provider_deleted' => "Erreur supprimée par le fournisseur de services : ",
      ],      
      'delete_building_modal' => 
      [
        "title" => "Supprimer le(s) bâtiment(s)",
        "description_unit" => "Les unités sont affectées à la propriété sélectionnée. Si vous souhaitez également supprimer les unités, veuillez activer l'option ci-dessous..",
        "description_request" => "Les demandes sont affectées à la propriété sélectionnée. Si vous souhaitez également supprimer une demande, veuillez activer l'option ci-dessous..",
        "description_both" => "Les unités et les requêtes sont affectées à la propriété sélectionnée. Si vous souhaitez également les supprimer, veuillez activer les options ci-dessous..",
        "delete_units" => "Supprimer unité(s)",
        "dont_delete_units" => "Ne supprimez pas d'unité(s)",
        "delete_requests" => "Supprimer demande(s)",
        "dont_delete_requests" => "Ne supprimez pas de demande(s)",
      ],
      'assigned_buildings' => "Bâtiments affectés",
    ],
    'unit' => 
    [
      "title" => "Unités",
      "not_found" => "Unité non trouvée",
      "add" => "Ajouter une unité",
      "name" => "Numéro d'unité",
      "deleted" => "Unité supprimée",      
      "saved" => "Unité sauvegardée",
      "floor" => "L'étage",
      "sq_meter" => "Mètre carré",
      "room_no" => "Nombre de pièces",
      "monthly_rent" => "Loyer mensuel",
      "building_search" => "Veuillez entrer le nom d'un bâtiment et le sélectionner",
      "building" => "Bâtiment",
      "basement" => "Sous-sol",
      "attic" => "Grenier aménageable",
      "empty_requests" => "Aucune demande",
      "assigned_tenant" => "Locataire affecté",      
      "tenant_assigned" => "Locataire affecté",
      "tenant_unassigned" => "Locataire non affecté",
      'assignment' => 'Locataires affectés',
      'type' => 
      [
        "label" => "Type",
        "apartment" => "Appartement",
        "business" => "Les affaires",
      ],
      'validation' => 
      [
        'name' => 
        [
          "required" => "Le nom est obligatoire",
        ],
        'building' => 
        [
          "required" => "Un bâtiment est nécessaire",
        ],
        'monthly_rent' => 
        [
          "required" => "Un loyer mensuel est exigé",
        ],
        'floor' => 
        [
          "required" => "Un plancher est requis",
        ],
        'room_no' => 
        [
          "required" => "Le numéro de chambre est requis",
        ],
        'description' => 
        [
          "required" => "Une description est requise",
        ],
        'tenant' =>
        [
          "required" => "Un locataire est requis",
        ]
      ],
      'errors' => [
        'not_found' => "Unité non trouvée",
        'create' => "L'unité crée l'erreur : ",
        'update' => "Erreur de mise à jour de l'unité : ",
        'tenant_assign' => "Erreur d'affectation locataire : ",
        'tenant_not_assign' => "Locataire non affecté à cette unité",
        'tenant_not_found' => "Locataire introuvable",
        'deleted' => "Erreur d'effacement de l'unité : ",
      ],
    ],
    'address' => 
    [
      "add" => "Ajouter une adresse",
      "name" => "Adresse",
      "country" => "Pays",
      "street" => "Rue",
      "street_nr" => "Rue Nr..",
      "not_found" => "Adresse non trouvée",
      "saved" => "Adresse enregistrée",
      'state' => 
      [
        "label" => "État",
      ],
      'validation' => 
      [
        'state' => 
        [
          "required" => "L'État est requis",
        ],
        'city' => 
        [
          "required" => "Ville est obligatoire",
        ],
        'street' => 
        [
          "required" => "La rue est obligatoire",
        ],
        'street_nr' => 
        [
          "required" => "Le numéro de rue est requis",
        ],
        'zip' => 
        [
          "required" => "Zip est obligatoire",
        ],
      ],
    ],
    'post' => 
    [
      "title" => "Nouvelles",
      "title_label" => "Titre",
      "content" => "Contenu",
      "preview" => "Aperçu",
      "add" => "Ajouter un message",
      "add_pinned" => "Ajouter un poteau épinglé",
      "saved" => "Notizie salvate",
      'view_incresead' => "Le nombre de points de vue a augmenté avec succès",
      "updated" => "Notizie aggiornate",
      "deleted" => "Notizie cancellate",
      "edit_title" => "Modifier un message",
      "likes" => "Aime",
      "views" => "Vues",      
      "published_at" => "Publié",
      "publish" => "Publier",
      "unpublish" => "Non publié",
      "buildings" => "Bâtiments",
      "pinned" => "Épinglé",
      "notify_email" => "Prévenez par courriel",
      "pinned_to" => "Épinglé sur",
      "comments" => "Commentaires",
      "images" => "Images",
      'category_default_image_label' => 'Voulez-vous utiliser cette image?',      
      'placeholders' => 
      [
        "buildings" => "Choisir des bâtiments",
        "search_provider" => "Fournisseur de recherche",
      ],
      'type' => 
      [
        "label" => "Type",
        "article" => "Article",
        "post" => "Poster",
        "new_neighbour" => "Nouveau voisin",
        "pinned" => "Épinglé",
      ],
      'errors' => [
        'not_found' => "Message non trouvé",
        'quarter_not_found' => "Trimestre non trouvé",
        'district_not_found' => "Trimestre non trouvé",
        'building_not_found' => "Bâtiment non trouvé",
        'provider_not_found' => "Fournisseur de services introuvable",
        'deleted' => "Enregistrer l'erreur supprimée : ",
      ],
      'status' => 
      [
        "label" => "Statut",
        "new" => "Nouveau",
        "published" => "Publié",
        "unpublished" => "Non publié",
        "not_approved" => "Non approuvé",
      ],
      'visibility' => 
      [
        "label" => "Visibilité",
        "address" => "Adresse",
        "quarter" => "Trimestre",
        "district" => "Trimestre",
        "all" => "Tous",
      ],
      "assignType" => "Type",
      "buildingAlreadyAssigned" => "Le bâtiment est déjà à l'intérieur sur un quart",
      'execution_interval' => 
      [
        "label" => "Intervalle d'exécution",
        "end" => "Fin de l'exécution",
        "start" => "Début d'exécution",
        "separator" => "A",
      ],
      'category' => 
      [
        "label" => "Catégorie",
        "general" => "Général",
        "maintenance" => "Maintenance",
        "electricity" => "Électricité",
        "heating" => "Chauffage",
        "sanitary" => "Sanitaire",
      ],
    ],
    'service' => 
    [
      "title" => "Services",
      "add_title" => "Ajouter un service",
      "edit_title" => "Modifier le service",
      "saved" => "Servizio salvato",
      "deleted" => "Servizio cancellato",
      "category" => "Catégorie",
      "electrician" => "Électricien",
      "heating_company" => "Société de chauffage",
      "lift" => "Ascenseur",
      "sanitary" => "Sanitaire",
      "key_service" => "Service clé",
      "caretaker" => "Concierge",
      "real_estate_service" => "Service immobilier",      
      "contact_details" => "Coordonnées de contact",
      "user_credentials" => "Informations d'identification de l'utilisateur",
      "company_details" => "Coordonnées de l'entreprise",
      "assignType" => "Type",
      "buildingAlreadyAssigned" => "Le bâtiment est déjà à l'intérieur sur un quart",
      'placeholders' => 
      [
        "category" => "Sélectionnez une catégorie",
      ],
      'errors' => [
        'not_found' => "Fournisseur de services introuvable",
        'create' => "Le fournisseur de services crée l'erreur : ",
        'update' => "Erreur de mise à jour du fournisseur de services : ",	
        'deleted' => "Erreur supprimée par le fournisseur de services : ",
        'quarter_not_found' => "Trimestre non trouvé",
        'district_not_found' => "Trimestre non trouvé",
        'building_not_found' => "Bâtiment non trouvé",
        'building_already_assign' => "Immeuble déjà assigné jusqu'au quart",
      ],
    ],
    'quarter' =>
    [
      "title" => "Trimestres",
      "add" => "Ajouter un trimestre",
      "edit" => "Modifier le trimestre",
      "saved" => "Trimestre économisé",
      "deleted" => "Trimestre supprimé",
      "cancel" => "Annuler",
      "required" => "Ce champ est obligatoire",
      "buildings" => "Bâtiments",
      'count_of_buildings' => 'Nombre de bâtiments',
      'errors' => [
        'not_found' => "Trimestre non trouvé",
        'deleted' => "Erreur d'effacement trimestriel : ",
      ],
    ],
    'realEstate' => 
    [
      "title" => "Réglages de l'immobilier",
      "settings" => "Réglages",
      'iframe' => 'Iframe',
      'theme' => 'Thème',
      'login_variation' => 'Modification de l\'ouverture de session',
      'login_variation_slider' => 'Voulez-vous montrer le slider ?',
      "quarter_enable" => "Trimestre",
      "district_enable" => "Trimestre",
      "marketplace_approval_enable" => "Activer le marché",
      "news_approval_enable" => "Approbation des nouvelles",
      "comment_update_timeout" => "Délai de mise à jour des commentaires",
      "closed" => "Fermé",
      "saved" => "Immobilier épargné",
      "schedule" => "Calendrier",
      "endTime" => "Heure de la fin",
      "startTime" => "Heure de début",
      "to" => "A",
      "categories" => "Catégories",
      "templates" => "Modèles",
      "contact_enable" => "Activez'Mes contacts'",
      "cleanify_email" => "Nettoyer les e-mails",
      "mail_encryption" => "Cryptage",
      'primary_color' => 'Couleur primaire',
      'accent_color' => 'Couleur d\'accent',
      'iframe_enable' => 'Activation de l\'iframe',
      'iframe_url' => 
      [
        "label" => "URL de l'iframe",
        "validation" => "L'URL de l'iframe doit être une URL valide",
      ],
      "mail_from_name" =>
      [
        "label" => "Du nom",
        "validation" => "Entrer à partir du nom",
      ],
      "mail_from_address" => [
        "label" => "De l'adresse",
        "required" => "Entrer à partir de l'adresse e-mail",
        "email" => "Veuillez saisir un Email valide",
      ],
      "mail_host" => [
        "label" => "Hôte",
        "validation" => "L'hôte doit être une URL valide",
      ],
      "mail_port" => [
        "label" => "Port",
        "validation" => "Entrez le port de messagerie",
      ],
      "mail_username" => [
        "label" => "Nom d'utilisateur",
        "validation" => "Entrez votre nom d'utilisateur e-mail",
      ],
      "mail_password" => [
        "label" => "Mot de passe",
        "validation" => "Entrer le mot de passe de l'email"
      ],
      'errors' => [
        'not_found' => "Biens immobiliers non trouvés",
        'update' => "Erreur de mise à jour des biens immobiliers : ",
      ],
    ],
    'request' => 
    [
      "audits" => "Audits",
      "deleted" => "Richiesta supprimée",
      "title" => "Demandes",
      "created" => "Créé",
      "saved" => "Requête sauvegardée",
      "prop_title" => "Titre",
      "category" => "Catégorie",
      "edit_title" => "Demande de modification",
      "add_title" => "Ajouter une demande",
      "due_date" => "Date d'échéance",
      "closed_date" => "Date de fermeture",
      "service" => "Service",
      "created_by" => "Créé par",
      "is_public" => "Public",
      "comments" => "Commentaires",
      "assigned_to" => "Affecté à",
      "assign_providers" => "Affecter fournisseurs",
      "assign_managers" => "Affectez des gestionnaires",
      "notify" => "Avertissez",
      "public_legend" => "Définissez cette option pour rendre la demande visible à tous les voisins locataires",
      "conversation" => "Conversation",
      'conversation_created' => "Création d'un commentaire de conversation",
      'internal_notice_saved' => "Avis interne sauvegardé",
      'internal_notice_updated' => "Avis interne mis à jour",
      'internal_notice_deleted' => "Avis interne supprimé",
      "open_conversation" => "Ouvrez",
      "other_recipients" => "Autres bénéficiaires",
      "recipients" => "Destinataires",
      "images" => "Images",
      "no_images_message" => "Aucun fichier téléchargé",
      "request_details" => "Demande de détails",
      "internal_notices" => "Avis internes",
      "status_changed" => "Le statut a changé",
      "priority_changed" => "Priorité modifiée",
      'assignment'=> 'Affectation de gestionnaires/fournisseurs de services',
      'last_updated' => 'Last updated',
      'due_in' => 'Due in',
      'was_due_on' => 'Was due on',
      'due_on' => 'Due on',
      'media' => 
      [
        "added" => "Document ajouté",
        "removed" => "Suppression du support",
        "deleted" => "Médias supprimés",
        "delete" => "Supprimer",
      ],
      'priority' => 
      [
        "label" => "Priorité",
        "urgent" => "Urgent",
        "low" => "Faible",
        "normal" => "Normal",
      ],
      'internal_priority' => 
      [
        "label" => "Priorité interne",
        "urgent" => "Urgent",
        "low" => "Faible",
        "normal" => "Normal",
      ],      
      'defect_location' => 
      [
        "label" => "Localisation des défauts",
        "apartment" => "Appartement",
        "building" => "Bâtiment",
        "environment" => "Environnement",
      ],
      'qualification' => 
      [
        "label" => "Qualification",
        "none" => "Aucune",
        "optical" => "Optique",
        "sia" => "Sia",
        "2_year_warranty" => "Garantie de 2 ans",
        "cost_consequences" => "Conséquences financières",
      ],
      'status' => 
      [
        "label" => "Statut",
        "received" => "Reçu",
        "assigned" => "Affecté",
        "in_processing" => "En cours de traitement",        
        "reactivated" => "Réactivé",
        "done" => "C'est fait",        
        "archived" => "Archivé",
        "solved" => "Résolues",
        "pending" => "En attente"
      ],
      'category_options' => 
      [
        "disturbance" => "Perturbation",
        "defect" => "Défaut",
        "other" => "Autre",  
        'room' => 'Chambre',
        'range' => 'Gamme',
        'component' => 'Composante',
        'acquisition' => 'Phase d\'acquisition',
        'cost' => 'Incidence sur les coûts',
        'keywords' => 'Mots-clés',
        'building_locations' => [
          'house_entrance' => 'Entrée de maison',
          'staircase' => 'Escalier',
          'elevator' => 'Ascenseur',
          'car_park' => 'Parking souterrain',
          'washing' => 'Lavage/séchage',
          'heating' => 'Technologie/Chauffage',
          'electro' => 'Technologie/Électrotechnique',
          'facade' => 'Façade',
          'roof' => 'Toit',
          'other' => 'Autre'
        ],
        'apartment_rooms' => [
          'bath' => 'Salle de bains/WC',
          'shower' => 'Douche/WC',
          'entrance' => 'L\'entrée',
          'passage' => 'Passage',
          'basement' => 'Sous-sol',
          'kitchen' => 'Cuisine',
          'reduite' => 'Reduite',
          'habitation' => 'Habitation',
          'room1' => 'Chambre 1',
          'room2' => 'Chambre 2',
          'room3' => 'Chambre 3',
          'room4' => 'Chambre 4',
          'all' => 'Tous',
          'other' => 'Autre'
        ],
        'acquisitions' => [
          'other' => 'Autre',
          'construction' => 'Phase de construction',
          'shell' => 'Acceptation de la coquille',
          'preliminary' => 'Acceptation préliminaire',
          'work' => 'Acceptation des travaux',
          'surrender' => 'Rendez-vous',
          'inspection' => 'Acceptation'
        ],
        'costs' => [
          'landlord' => 'Propriétaire',
          'tenant' => 'Locataire'
        ]
      ],
      'placeholders' => 
      [
        "category" => "Sélectionnez une catégorie",
        "priority" => "Sélectionnez la priorité",
        "defect_location" => "Sélectionnez la localisation du défaut",
        "qualification" => "Sélectionnez Compétence",
        "status" => "Sélectionnez le statut",
        "due_date" => "Choisir la date d'échéance",
        "tenant" => "Recherche d'un locataire",
        "service" => "Rechercher un service",
        "propertyManagers" => "Recherche de cadres",
        "visibility" => "Sélectionner la visibilité",
      ],
      'mail' => 
      [
        "body" => "Corps",
        "subject" => "Sujet",
        "to" => "A",
        "title" => "Prévenez le service",
        "notify" => "Envoyer un courriel",
        "bodyPlaceholder" => "Veuillez écrire votre message ici",
        "provider" => "Prestataire",
        "manager" => "Directeur",
        "cancel" => "Annuler",
        "send" => "Envoyer",
        "cc" => "CC",
        "bcc" => "BCC",
        "success" => "Envoi réussi du mail de notification",
        'validation' => 
        [
          "required" => "Ce champ est obligatoire",
          "email" => "Ce champ doit être un email valide",
        ],
        "fail_cc" => "Les champs CC/BCC/TO doivent être des e-mails valides",
      ],     
      'userType' => 
      [
        "label" => "Type",
        "provider" => "Service",
        "manager" => "Directeur",
        'admin' => 'Administrator',
      ],
      'visibility' => 
      [
        "label" => "Visibilité",
        "tenant" => "Soldat",
        "quarter" => "Trimestre",
        "district" => "Trimestre",
        "building" => "Bâtiment",
      ],
      'errors' => [
        'not_found' => 'Demande de service introuvable',
        'not_allowed_change_status' => "Vous n'êtes pas autorisé à changer de statut.",
        'provider_not_found' => 'Fournisseur de services introuvable',
        'tag_not_found' => 'Étiquette non trouvée',
        'user_not_found' => 'Utilisateur introuvable',
        'conversation_not_found' => "Conversation non trouvée",
        'statistics_error' => "demander des statistiques d'erreur : ",
        'internal_notice_not_found' => "Avis interne non trouvé",
        'deleted' => "Erreur de demande de service supprimée : ",
      ],
      "requestID" => "Demande ID",
      "requestCategory" => "Catégorie de demande",
      'actions' => 'Actions',
    ],
    'requestCategory' => 
    [
      "title" => "Catégories de demandes",
      "add" => "Ajouter catégorie",
      "cancel" => "Annuler",
      "required" => "Ce champ est obligatoire",
      "parent" => "Catégorie de parents",
      'errors' => [
        'not_found' => "Catégorie de demande de service introuvable",
        'parent_not_found' => "Catégorie de demande de service parent non trouvée",
        'multiple_level_not_found' => "Les catégories imbriquées à plusieurs niveaux ne sont pas autorisées",
        'used_by_request' => "Catégorie de demande de service utilisée par une demande de service",
      ]
    ],
    'propertyManager' => 
    [
      "title" => "Gestionnaires immobiliers",
      "add" => "Ajouter un gestionnaire immobilier",
      "saved" => "Gestionnaire immobilier sauvé",
      "deleted" => "Gestionnaire immobilier supprimé",
      "edit_title" => "Modifier le gestionnaire immobilier",      
      "firstName" => "Prénom",
      "lastName" => "Nom de famille",      
      "profession" => "Profession",
      "slogan" => "Slogan",
      "linkedin_url" => "URL Linkedin",
      "xing_url" => "Xing URL",
      "password" => "Mot de passe",
      "confirm_password" => "Confirmez le mot de passe",
      "building_card" => "Affecter des bâtiments",
      "details_card" => "Détails",
      "no_buildings" => "Il n'y a pas de bâtiments assignés",
      "add_buildings" => "Ajouter des bâtiments",
      "buildings_search" => "Recherche de bâtiments",
      "quarters" => "Trimestres",
      "districts" => "Trimestres",
      'delete_with_reassign_modal' =>
      [
        "title" => "Supprimer et réaffecter des bâtiments",
        "description" => "Le gestionnaire immobilier sélectionné est lié aux biens immobiliers. Vous pouvez affecter les propriétés à une autre personne. Pour ce faire, sélectionnez un gestionnaire immobilier dans la liste..",
        "search_title" => "Rechercher un gestionnaire immobilier",
      ],
      "delete_without_reassign" => "Supprimer",
      "profile_card" => "Profil de l'utilisateur",
      "social_card" => "Médias sociaux",
      "assignType" => "Type",
      "buildingAlreadyAssigned" => "Le bâtiment est déjà à l'intérieur sur un quart",
      'errors' => [
        'not_found' => "Gestionnaire immobilier introuvable",
        'create' => "Le gestionnaire immobilier crée l'erreur : ",
        'update' => "Erreur de mise à jour du gestionnaire immobilier : ",
        'quarter_not_found' => "Trimestre non trouvé",
        'district_not_found' => "Trimestre non trouvé",
        'building_not_found' => "Bâtiment non trouvé",
        'building_already_assign' => "Immeuble déjà assigné jusqu'au quart",
        'building_assign_deleted_property_manager' => "Vous ne pouvez pas affecter de bâtiments à un gestionnaire immobilier supprimé.",
        'deleted' => "Le gestionnaire immobilier a supprimé l'erreur : ",
      ],
    ],
    'product' => 
    [
      "title" => "Produits",
      "add" => "Ajouter un produit",
      "edit_title" => "Modifier le produit",
      "delete_action" => "Supprimer",
      "content" => "Contenu",
      "product_title" => "Titre",
      "published_at" => "Publié",
      "publish" => "Publier",
      "unpublish" => "Non publié",
      "likes" => "Aime",
      "saved" => "Prodotto salvato",
      "deleted" => "Prodotto cancellato",
      "comments" => "Commentaires",
      "contact" => "Contact",
      "price" => "Prix",
      'comment_created' => "Commentaire créé avec succès",
      'errors' => [
        'not_found' => "Produit non trouvé",
      ],
      'type' => 
      [
        'label' => 'Type',
        'sell' => 'Vendre',
        'lend' => 'Prêter',
        'service' => 'Service après-vente',
        'giveaway' => 'Donner',
      ],
      'status' => 
      [
        'label' => 'Statut',
        'published' => 'Publié',
        'unpublished' => 'Non publié',
      ],
      'visibility' => 
      [
        'label' => 'Visibilité',
        'address' => 'Adresse',
        'quarter' => 'Trimestre',
        'district' => 'Trimestre',
        'all' => 'Tous',
      ],
    ],
    'template' => 
    [      
      'saved' => 'Ajouter',
      'deleted' => 'Gabarit supprimé',
      'add' => 'Ajouter',
      'title' => 'Modèles',
      'subject' => 'Sujet',
      'body' => 'Corps',
      'category' => 'Catégorie',
      'tags' => 'Étiquettes',
      'placeholders' => 
      [
        'category' => 'Choisir une catégorie',
      ],
      'errors' => [
        'not_found' => "Modèle non trouvé",
        'deleted' => "Erreur de suppression de produit : ",
      ]
    ],
    'cleanify' => 
    [
      "pageTitle" => "Nettoyer la demande",
      "title" => "Titre",
      "lastName" => "Nom de famille",
      "firstName" => "Prénom",
      "address" => "Adresse",
      "save" => "Envoyer demande",
      "success" => "Nettoyer la demande envoyée avec succès",
      "terms_and_conditions" => "Accepter les conditions générales de vente",
      "terms_text" => "Texte des termes ici, texte descriptif"
    ],
];
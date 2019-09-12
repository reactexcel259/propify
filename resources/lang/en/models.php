<?php
return [
    'user' => 
    [ 
      'administrator' => 'Administrators',
      'super_admin' => 'Super admins',
      'add_admin' => 'Add Administrator',
      'edit_admin' => 'Edit Administrator',
      'add_super_admin' => 'Add Super admin',
      'edit_super_admin' => 'Edit Super admin',      
      'date' => 'Date',
      'add' => 'Add User',
      'saved' => 'User saved successfully',
      'deleted' => 'User deleted',      
      'not_found' => 'User not found',
      'profile_image' => 'Profile image',
      'profile_text' => 'Profile text',
      'avatar_uploaded' => 'Avatar uploaded',
      'logo_uploaded' => 'Logo uploaded',
      'logo' => 'Logo',
      'circle_logo' => 'Circle Logo',
      'favicon_icon' => 'Favicon Icon',
      'tenant_logo' => 'Tenant Logo',
      'blank_pdf' => 'Blank pdf',
      'blank_pdf_desc' => 'Generate PDF files without letterhead so that they can be printed on your own stationery.',
      'font_family' => 'Font family',
      'notificationSaved' => 'Notificatin setting saved',
      'realEstateSaved' => 'Real Estate settings saved',
      'serviceRequestCategorySaved' => 'Service request category saved',
      'serviceRequestCategoryDeleted' => 'Service request category deleted',
      'setting_saved' => "user setting saved",
      'setting_deleted' => "user setting deleted",
      'password_reset_request_sent' => "We have sent you an e-mail with further instructions. Please check your inbox.", 
      'errors' => [
        'not_found' => "User not found",
        'setting_not_found' => "user setting not found",
        'image_upload' => "User image upload error :",
        'incorrect_password' => "User password incorrect",
        'email_missing' => "email is missing",
        'email_already_exists' => "This [:email] email already exist, Select other email",
        'email_not_exists' => "This [:email] email not exist",
        'password_reset_token_invalid' => "This password reset token is invalid.",
        'deleted' => "User deleted error: ",
      ],
      'validation' => 
      [
        'name' => 
        [
          'required' => 'Name is required',
        ],
        'role' => 
        [
          'required' => 'Role is required',
        ],
      ],
    ],
    'tenant' => 
    [
      'view' => 'View',
      'view_title' => 'View tenant',
      'edit_title' => 'Edit Tenant',
      'download_credentials' => 'Download credentials',
      'send_credentials' => 'Send credentials',
      'credentials_sent' => 'Credentials sent',
      'credentials_send_fail' => 'Credentials file not found. Try updating the tenant password to regenerate it',
      'credentials_download_failed' => 'Credentials file not found. Try updating the tenant password to regenerate it',
      'add' => 'Add Tenant',
      'saved' => 'Tenant saved',
      'deleted' => 'Tenant deleted',
      'status_changed' => 'Status changed',
      'password_reset' => 'Tenant password reset successfully',
      'update' => 'Update',      
      'first_name' => 'First name',
      'last_name' => 'Last name',
      'birth_date' => 'Birth date',
      'nation' => 'Nation',
      'mobile_phone' => 'Mobile phone',
      'work_phone' => 'Work phone',
      'personal_phone' => 'Personal phone',
      'private_phone' => 'Personal phone',
      'created_date' => 'Created Date',      
      'contract' => 'Contract',
      'posts' => 'Posts',
      'products' => 'Products',
      'company' => 'Company name',
      'no_building' => 'No building',
      'building' => 
      [
        'name' => 'Building',
      ],
      'unit' => 
      [
        'name' => 'Unit',
      ],
      'search_building' => 'Search building',
      'search_unit' => 'Search unit',      
      'validation' => 
      [
        'first_name' => 
        [
          'required' => 'First name is required',
        ],
        'last_name' => 
        [
          'required' => 'Last name is required',
        ],
        'birth_date' => 
        [
          'required' => 'Birth date is required',
        ],
        'building' => 
        [
          'required' => 'Building is required',
        ],
        'unit' => 
        [
          'required' => 'Unit is required',
        ],
        'title' => 
        [
          'required' => 'Title is required',
        ],
        'language' => 
        [
          'required' => 'Language is required',
        ]
      ],
      'errors' => [
        'not_found' => "Tenant not found",
        'incorrect_email' => "Incorrect email address",
        'create' => "Tenant create error: ",
        'update' => "Tenant update error: ",	
        'deleted' => "Tenant Delete error: ",
        'not_allowed_change_status' => 'You are not allowed to change status.',
      ],      
      'building_card' => 'Assign unit',
      'personal_details_card' => 'Personal details',
      'account_info_card' => 'User login',
      'contact_info_card' => 'Contact details',
      'personal_data' => 'Personal data',
      'my_documents' => 'My documents',
      'my_contract' => 'My contract',
      'contact_persons' => 'My contacts',
      'no_contacts' => 'No contacts available',
      'rent_end' => 'Rent end',
      'rent_start' => 'Rent start',
      'rent_contract' => 'Rent contract',
      'contact' => 
      [
        'category' => 'Category',        
      ],
      'status' => 
      [
        'label' => 'Status',
        'active' => 'Active',
        'not_active' => 'Not active',
      ],
      'credentials_pdf' => [
        'tenant_credentials' => 'Tenant credentials',
        'username' => 'Username',
        'url' => 'URL',
        'code' => 'Personal unlock code',
        'telephone' => 'Telephone',
        'your_email' => 'Your e-mail address',
        'email' => 'E-Mail:',
        'born' => 'Bern',
        'welcome' => 'Welcome to the tenant portal of the',
        'content_1' => 'We are pleased to inform you that an account has been set up for you in the tenant\'s total. and send you the activation code.',
        'offer' => 'What does the application offer?',
        'offers' => '
          <li>With the digital tenant dossier you have access to all relevant documents, such as Tenancy agreement, house rules or other documents relating to the property</li>
          <li>The ticketing system enables you to process your enquiries simply and uncomplicatedly - with the following features Communicate your concerns to the administration at any time and from any place.</li>
          <li>On the market and lending place you can send objects to your neighbourhood. sell or lend.</li>
          <li>Share news with your neighbours by publishing a contribution. The pinboard is also used by the administration for the communication, so all are always on the Running.</li>
          <li>Further micro apps within the application set new standards in living quality where various services can be conveniently used.</li>
        ',
        'register' => 'First registration and activation of your account',
        'content_2' => 'To register, please click on the link below and log in with your e-mail address and the personal unlock code. Once you have logged in, you can Define your own password and use it from now on for the login.',
        'link_application' => 'Link to the application',
        'content_3' => 'We look forward to welcoming you on board!',
        'content_4' => 'If you should need assistance with the registration, then we are gladly at your disposal.',
        'your_sincerely' => 'Yours sincerely',
        'your_administration' => 'your administration'
      ],
    ],
    'building' => 
    [
      'title' => 'Buildings',
      'edit_title' => 'Edit Building',
      'add' => 'Add Building',      
      'cancel' => 'Cancel',
      'deleted' => 'Building deleted successfully',
      'units' => 'Units',
      'saved' => 'Building saved',
      'floors' => 'Floors',
      'basement' => 'Basement',
      'attic' => 'Attic',
      'floor_nr' => 'Number of floors',
      'internal_building_id' => 'Internal Building Id',
      'label' => 'Label',
      'address_search' => 'Please enter address',
      'not_found' => 'Building not found',
      'house_rules' => 'House rules',
      'operating_instructions' => 'Operating instructions',
      'care_instructions' => 'Care instructions',
      'other' =>  'Other',
      'files' => 'Files',
      'add_files' => 'Add files',
      'add_companies' => 'Add companies',
      'companies' => 'Services companies',
      'no_services' => 'No services added',
      'select_media_category' => 'Selected media category',
      'quarter' => 'Quarter',
      'managers' => 'Managers',
      'house_nr' => 'House Nr.',      
      'assign_managers' => 'Assign managers',
      'unassign_manager' => 'Unassign',
      'managers_assigned' => 'Managers assigned',
      'occupied_units' => 'Ocuppied units',
      'free_units' => 'Free units',
      'manager' => 
      [
        'unassigned' => 'Manager unassigned',
      ],
      'document' => 
      [
        'uploaded' => 'Document uploaded',
        'deleted' => 'Document deleted',
      ],
      'service' => 
      [
        'deleted' => 'Service removed from this building',
      ],
      'validation' => 
      [
        'name' => 
        [
          'required' => 'Name is required',
        ],
        'floor_nr' => 
        [
          'required' => 'Floor number is required',
        ],
        'description' => 
        [
          'required' => 'Description is required',
        ],
        'label' => 
        [
          'required' => 'Label is required',
        ],
        'address_id' => 
        [
          'required' => 'Address is required',
        ],
      ],
      'errors' => [
        'not_found' => "Building not found",
        'manager_not_found' => "Property manager not found",
        'deleted' => "Building deleted error: ",
        'manager_assigned' => "Property Managers assign to Building error: ",
        'provider_deleted' => "Service Provider deleted error: ",
      ],
      'delete_building_modal' => 
      [
        'title' => 'Delete Building(s)',
        'description_unit' => 'Units are assigned to the selected property. If you want to delete the units as well, please activate the option below.',
        'description_request' => 'Requests are assigned to the selected property. If you also want to delete request as well, please activate the option below.',
        'description_both' => 'Units and requests are assigned to the selected property. If you also want to delete them, please activate the options below.',
        'delete_units' => 'Delete Unit(s)',
        'dont_delete_units' => 'Don\'t Delete Unit(s)',
        'delete_requests' => 'Delete Request(s)',
        'dont_delete_requests' => 'Don\'t Delete Request(s)',
      ],
      'assigned_buildings' => 'Assigned buildings'
    ],
    'unit' => 
    [
      'title' => 'Units',
      'not_found' => 'Unit not found',
      'add' => 'Add Unit',
      'name' => 'Unit number',
      'deleted' => 'Unit deleted',      
      'saved' => 'Unit saved',
      'floor' => 'Floor',
      'sq_meter' => 'Sq Meter',
      'room_no' => 'Number of rooms',
      'monthly_rent' => 'Monthly rent',
      'building_search' => 'Please enter a building name and select it',
      'building' => 'Building',
      'basement' => 'Basement',
      'attic' => 'Attic',
      'empty_requests' => 'No requests',
      'assigned_tenant' => 'Assigned tenant',      
      'tenant_assigned' => 'Tenant assigned',
      'tenant_unassigned' => 'Tenant unassigned',
      'assignment' => 'Assigned tenants',
      'type' => 
      [
        'label' => 'Type',
        'apartment' => 'Apartment',
        'business' => 'Commercial space',
        'hobby_room' => 'Hobby room',
        'storeroom' => 'Storeroom',
        'underground_parking_space' => 'Underground parking space',
        'outdoor_parking' => 'Outdoor parking',
        'motorbike_pitch' => 'Motorbike pitch'
      ],
      'validation' => 
      [
        'name' => 
        [
          'required' => 'Name is required',
        ],
        'building' => 
        [
          'required' => 'Building is required',
        ],
        'monthly_rent' => 
        [
          'required' => 'Monthly rent is required',
        ],
        'floor' => 
        [
          'required' => 'Floor is required',
        ],
        'room_no' => 
        [
          'required' => 'Room number is required',
        ],
        'description' => 
        [
          'required' => 'Description is required',
        ],
        'tenant' => 
        [
          'required' => 'Tenant is required',
        ]
      ],
      'errors' => [
        'not_found' => "Unit not found",        
        'create' => "Unit create error: ",
        'update' => "Unit update error: ",
        'tenant_assign' => "Tenant assign error: ",
        'tenant_not_assign' => "Tenant not assigned to this unit",
        'tenant_not_found' => "Tenant not found",
        'deleted' => "Unit deleted error: ",
      ],
    ],
    'address' => 
    [
      'add' => 'Add address',
      'name' => 'Address',      
      'country' => 'Country',
      'street' => 'Street',
      'street_nr' => 'Street Nr.',
      'not_found' => 'Address not found',
      'saved' => 'Address saved',
      'state' => 
      [
        'label' => 'State',
      ],
      'validation' => 
      [
        'state' => 
        [
          'required' => 'State is required',
        ],
        'city' => 
        [
          'required' => 'City is required',
        ],
        'street' => 
        [
          'required' => 'Street is required',
        ],
        'street_nr' => 
        [
          'required' => 'Street number is required',
        ],
        'zip' => 
        [
          'required' => 'Zip is required',
        ],
      ],
    ],
    'post' => 
    [
      'title' => 'News',
      'title_label' => 'Title',
      'content' => 'Content',
      'preview' => 'Preview',
      'add' => 'Add Post',
      'add_pinned' => 'Add pinned post',
      'saved' => 'News saved',
      'view_incresead' => "Views increased successfully",
      'updated' => 'News updated',
      'deleted' => 'News deleted',
      'edit_title' => 'Edit Post',      
      'likes' => 'Likes',
      'views' => 'Views',
      'published_at' => 'Published',
      'publish' => 'Publish',
      'unpublish' => 'Unpublish',
      'buildings' => 'Buildings',
      'pinned' => 'Pinned',
      'notify_email' => 'Notify email',
      'pinned_to' => 'Pinned to',
      'comments' => 'Comments',
      'images' => 'Images',
      'category_default_image_label' => 'Do want to use this image?',
      'placeholders' => 
      [
        'buildings' => 'Choose buildings',        
        'search_provider' => 'Search provider',
      ],
      'type' => 
      [
        'label' => 'Type',
        'post' => 'Post',
        'article' => 'Article',
        'new_neighbour' => 'New neighbour',
        'pinned' => 'Pinned',
      ],
      'errors' => [
        'not_found' => "Post not found",        
        'quarter_not_found' => "Quarter not found",
        'building_not_found' => "Building not found",
        'provider_not_found' => "Service provider not found",
        'deleted' => "Post deleted error: ",
      ],      
      'status' => 
      [
        'label' => 'Status',
        'new' => 'New',
        'published' => 'Published',
        'unpublished' => 'Unpublished',
        'not_approved' => 'Not approved',
      ],
      'visibility' => 
      [
        'label' => 'Visibility',
        'address' => 'Address',
        'quarter' => 'Quarter',
        'all' => 'All',
      ],
      'assignType' => 'Type',
      'buildingAlreadyAssigned' => 'Building is already inside on a quarter',
      'execution_interval' => 
      [
        'label' => 'Execution interval',
        'end' => 'Execution End',
        'start' => 'Execution Start',
        'separator' => 'To',
      ],
      'category' => 
      [
        'label' => 'Category',
        'general' => 'General',
        'maintenance' => 'Maintenance',
        'electricity' => 'Electricity',
        'heating' => 'Heating',
        'sanitary' => 'Sanitary',
      ],
    ],
    'service' => 
    [
      'title' => 'Services',
      'add_title' => 'Add Service',
      'edit_title' => 'Edit Service',
      'saved' => 'Service saved',
      'deleted' => 'Service deleted',
      'category' => 'Category',
      'electrician' => 'Electrician',
      'heating_company' => 'Heating company',
      'lift' => 'Lift',
      'sanitary' => 'Sanitary',
      'key_service' => 'Key service',
      'caretaker' => 'Caretaker',
      'real_estate_service' => 'Real estate service',      
      'contact_details' => 'Contact details',
      'user_credentials' => 'User credentials',
      'company_details' => 'Company details',
      'assignType' => 'Type',      
      'buildingAlreadyAssigned' => 'Building is already inside on a quarter',
      'placeholders' => 
      [
        'category' => 'Select category',
      ],
      'errors' => [
        'not_found' => "Service Provider not found",
        'create' => "Service Provider create error: ",
        'update' => "Service Provider updated error: ",	
        'deleted' => "Service Provider deleted error: ",
        'quarter_not_found' => "Quarter not found",
        'building_not_found' => "Building not found",
        'building_already_assign' => "Building already assigned through quarter",
      ],
    ],
    'quarter' =>
    [
      'title' => 'Quarters',
      'add' => 'Add Quarter',
      "edit" => "Edit Quarter",
      'saved' => 'Quarter saved',
      'deleted' => 'Quarter deleted',
      'cancel' => 'Cancel',
      'required' => 'This field is required',      
      'buildings' => 'Buildings',
      'count_of_buildings' => 'Count of buildings',
      'errors' => [
        'not_found' => "Quarter not found",
        'deleted' => "Quarter deleted error: ",
      ],
    ],
    'realEstate' => 
    [
      'title' => 'Settings real estate',
      'settings' => 'Settings',
      'tenants_portal' => 'Tenants portal',
      'iframe' => 'Iframe',
      'micro_apps' => 'Micro-Apps',
      'theme' => 'Theme',
      'smtp' => 'SMTP',
      'pdf' => 'PDF',
      'login_variations' => 'Login variations',
      'login_variation' => 'Login variation',
      'login_variation_slider' => 'Do you want to show slider?',
      'quarter_enable' => 'Quarter',
      'marketplace_approval_enable' => 'Enable Market',
      'gocaution' => 'Gocaution',
      'blank_pdf' => 'Blank pdf',
      'blank_pdf_desc' => 'Generate PDF files without letterhead so that they can be printed on your own stationery.',
      'font_family' => 'Font family',
      'news_approval_enable' => 'News approval',
      'news_approval_enable_desc' => 'News posts are first checked by the admin and then activated.',
      'comment_update_timeout' => 'Comment update timeout',
      'closed' => 'Closed',
      'saved' => 'Real estate saved',
      'schedule' => 'Schedule',
      'endTime' => 'End time',
      'startTime' => 'Start time',
      'to' => 'To',
      'categories' => 'Categories',
      'templates' => 'Templates',
      'contact_enable' => 'Enable \'My contacts\'',
      'contact_enable_desc' => 'Tenants can see the contact data of the service partners involved in the tenant portal.',
      'cleanify_email' => 'Cleanify email',
      'mail_encryption' => 'Encryption',
      'primary_color' => 'Primary color',
      'accent_color' => 'Accent color',
      'iframe_enable' => 'Iframe enable',
      'iframe_enable_desc' => 'In the tenant portal a page with your free renting objects is indicated.',
      'iframe_url' =>
      [
        'label' => 'Iframe URL',
        'validation' => 'Iframe URL should be a valid URL',
      ],
      "mail_from_name" =>
      [
        "label" => "From Name",
        "validation" => "Enter from Name"
      ],
      "mail_from_address" => [
        "label" => "From address",
        "required" => "Enter from email address",
        "email" => "Please enter a valid Email"
      ],
      "mail_host" => [
        "label" => "Host",
        "validation" => "Enter email host"
      ],
      "mail_port" => [
        "label" => "Port",
        "validation" => "Enter email port"
      ],
      "mail_username" => [
        "label" => "Username",
        "validation" => "Enter email username"
      ],
      "mail_password" => [
        "label" => "Password",
        "validation" => "Enter email password"
      ],
      'errors' => [
        'not_found' => "Real Estate not found",
        'update' => "Real Estate update error: ",
      ],
    ],
    'request' => 
    [
      'audits' => 'Audits',
      'deleted' => 'Request deleted',      
      'title' => 'Requests',
      'created' => 'Created',
      'saved' => 'Request saved',
      'prop_title' => 'Title',
      'category' => 'Category',
      'edit_title' => 'Edit Request',
      'add_title' => 'Add Request',
      'due_date' => 'Due date',
      'closed_date' => 'Closed date',
      'service' => 'Service',
      'created_by' => 'Created by',
      'is_public' => 'Public',
      'comments' => 'Comments',
      'assigned_to' => 'Assigned to',
      'assign_providers' => 'Assign providers',
      'assign_managers' => 'Assign managers',
      'notify' => 'Notify',
      'public_legend' => 'Set this option to make the request visible to all tenant neighbours',
      'conversation' => 'Conversation',
      'conversation_created' => "Conversation comment created",
      'internal_notice_saved' => "Internal Notice saved",
      'internal_notice_updated' => "Internal Notice updated",
      'internal_notice_deleted' => "Internal Notice deleted",
      'open_conversation' => 'Open',
      'other_recipients' => 'Other recipients',
      'recipients' => 'Recipients',      
      'images' => 'Images',
      'no_images_message' => 'No files uploaded',
      'request_details' => 'Request details',
      'internal_notices' => 'Internal notices',
      'status_changed' => 'Status changed',
      'priority_changed' => 'Priority changed',
      'assignment'=> 'Assignment of managers/services providers',
      'last_updated' => 'Last updated',
      'due_in' => 'Due in',
      'was_due_on' => 'Was due on',
      'due_on' => 'Due on',      
      'media' => 
      [
        'added' => 'Document added',
        'removed' => 'Document removed',
        'deleted' => 'Document deleted',
        'delete' => 'Delete',
      ],
      'priority' => 
      [
        'label' => 'Priority',
        'urgent' => 'Urgent',
        'low' => 'Low',
        'normal' => 'Normal',
      ],
      'internal_priority' => 
      [
        'label' => 'Internal priority',
        'urgent' => 'Urgent',
        'low' => 'Low',
        'normal' => 'Normal',
      ],      
      'defect_location' => 
      [
        'label' => 'Defect location',
        'apartment' => 'Apartment',
        'building' => 'Building',
        'environment' => 'Environment',
      ],
      'qualification' => 
      [
        'label' => 'Qualification',
        'none' => 'None',
        'optical' => 'Optical',
        'sia' => 'Sia',
        '2_year_warranty' => '2 Year Warranty',
        'cost_consequences' => 'Cost consequences',
      ],
      'status' => 
      [
        'label' => 'Status',
        'received' => 'Received',
        'assigned' => 'Assigned',
        'in_processing' => 'In processing',
        'reactivated' => 'Reactivated',
        'done' => 'Done',        
        'archived' => 'Archived',
        'solved' => 'Solved',
        'pending' => 'Pending'
      ],
      'category_options' => 
      [
          'disturbance' => 'Disturbance',
          'defect' => 'Defect',
          'other' => 'Other',
          'room' => 'Room',
          'range' => 'Range',
          'component' => 'Component',
          'acquisition' => 'Acquisition Phase',
          'keywords' => 'Keywords',
          'cost' => 'Cost Impact',
          'building_locations' => [
						'house_entrance' => 'House Entrance',
						'staircase' => 'Staircase',
						'elevator' => 'Elevator',
						'car_park' => 'Underground Car park',
						'washing' => 'Washing/Drying',
						'heating' => 'Technology/Heating',
						'electro' => 'Technology/Electro',
						'facade' => 'Facade',
						'roof' => 'Roof',
						'other' => 'Other'
          ],
          'apartment_rooms' => [
						'bath' => 'Bathroom/WC',
						'shower' => 'Shower/WC',
						'entrance' => 'Entrance',
						'passage' => 'Passage',
						'basement' => 'Basement',
						'kitchen' => 'Kitchen',
						'storeroom' => 'Reduite',
						'habitation' => 'Habitation',
						'room1' => 'Room 1',
						'room2' => 'Room 2',
						'room3' => 'Room 3',
						'room4' => 'Room 4',
						'all' => 'All',
						'other' => 'Other'
          ],
          'acquisitions' => [
						'other' => 'Other',
						'construction' => 'Construction phase',
						'shell' => 'Shell Acceptance',
						'preliminary' => 'Preliminary Acceptance',
						'work' => 'Acceptance of Work',
						'surrender' => 'Surrender',
						'inspection' => 'Acceptance'
          ],
          'costs' => [
						'landlord' => 'Landlord',
            'tenant' => 'Tenant',
            'tenant/landlord' => 'Tenant/Landlord'
					]
      ],
      'placeholders' => 
      [
        'category' => 'Select category',
        'priority' => 'Select priority',
        'defect_location' => 'Select defect location',
        'qualification' => 'Select qualification',
        'status' => 'Select status',
        'due_date' => 'Pick due date',
        'tenant' => 'Search for a tenant',
        'service' => 'Search for a service',
        'propertyManagers' => 'Search for managers',
        'visibility' => 'Select visibility',
      ],
      'mail' => 
      [
        'body' => 'Body',
        'subject' => 'Subject',
        'to' => 'To',
        'title' => 'Notify service',
        'notify' => 'Send Email',
        'bodyPlaceholder' => 'Please write your message here',
        'provider' => 'Provider',
        'manager' => 'Manager',
        'cancel' => 'Cancel',
        'send' => 'Send',
        'cc' => 'CC',
        'bcc' => 'BCC',
        'success' => 'Notification mail sent successfully',
        'validation' => 
        [
          'required' => 'This field is required',
          'email' => 'This field should be a valid email',
        ],
        'fail_cc' => 'CC/BCC/TO fields must be valid emails',
      ],      
      'userType' => 
      [
        'label' => 'Type',
        'provider' => 'Service',
        'manager' => 'Manager',
        'user' => 'Administrator',
      ],
      'visibility' => 
      [
        'label' => 'Visibility',
        'tenant' => 'Private',
        'quarter' => 'Quarter',
        'building' => 'Building',
      ],
      'errors' => [
        'not_found' => 'Service Request not found',
        'not_allowed_change_status' => 'You are not allowed to change status.',
        'provider_not_found' => 'Service Provider not found',
        'tag_not_found' => 'Tag not found',
        'user_not_found' => 'User not found',
        'conversation_not_found' => "Conversation not found",
        'statistics_error' => "Request statistics error: ",
        'internal_notice_not_found' => "Internal Notice not found",        
        'deleted' => "Service Request deleted error: ",
      ],
      'requestID' => 'Request ID',
      'requestCategory' => 'Request Category',
      'actions' => 'Actions',
    ],
    'requestCategory' => 
    [
      'title' => 'Request categories',
      'add' => 'Add category',
      'cancel' => 'Cancel',
      'required' => 'This field is required',
      'parent' => 'Parent category',
      'errors' => [
        'not_found' => "Service Request Category not found",
        'parent_not_found' => "Parent Service Request Category not found",
        'multiple_level_not_found' => "Multiple level nested categories are not allowed",
        'used_by_request' => "Service Request Category it is used by a Service Request"
      ]
    ],
    'propertyManager' => 
    [
      'title' => 'Property managers',
      'add' => 'Add Property Manager',
      'saved' => 'Property manager saved',
      'deleted' => 'Property manager deleted',
      'edit_title' => 'Edit Property Manager',      
      'firstName' => 'First name',
      'lastName' => 'Last name',      
      'profession' => 'Profession',
      'slogan' => 'Slogan',
      'linkedin_url' => 'Linkedin URL',
      'xing_url' => 'Xing URL',
      'password' => 'Password',
      'confirm_password' => 'Confirm password',
      'building_card' => 'Assign buildings',
      'details_card' => 'Details',
      'no_buildings' => 'There are no buildings assigned',
      'add_buildings' => 'Add buildings',
      'buildings_search' => 'Search for buildings',
      'quarters' => 'Quarters',
      'delete_with_reassign_modal' =>
      [
        'title' => 'Delete & reassign buildings',
        'description' => 'The selected property manager is linked to properties. You can assign the properties to another person. To do this, select a property manager from the list.',
        'search_title' => 'Search Property Manager',
      ],
      'delete_without_reassign' => 'Delete',
      'profile_card' => 'User Profile',
      'social_card' => 'Social Media',
      'assignType' => 'Type',      
      'buildingAlreadyAssigned' => 'Building is already inside on a quarter',
      'errors' => [
        'not_found' => "Property Manager not found",
        'create' => "Property Manager create error: ",
        'update' => "Property Manager updated error: ",	        
        'quarter_not_found' => "Quarter not found",
        'building_not_found' => "Building not found",
        'building_already_assign' => "Building already assigned through quarter",
        'building_assign_deleted_property_manager' => "You cannot assign buildings to an deleted Property Manager",
        'deleted' => "Property Manager deleted error: ",
      ],
    ],
    'product' => 
    [
      'title' => 'Products',
      'add' => 'Add Product',
      'edit_title' => 'Edit Product',
      'delete_action' => 'Delete',
      'content' => 'Content',
      'product_title' => 'Title',
      'published_at' => 'Published',
      'publish' => 'Publish',
      'unpublish' => 'Unpublish',
      'likes' => 'Likes',
      'saved' => 'Product saved',
      'deleted' => 'Product deleted',
      'comments' => 'Comments',
      'contact' => 'Contact',
      'price' => 'Price',
      'comment_created' => "Comment successfully created",
      'errors' => [
        'not_found' => "Product not found",        
        'deleted' => "Product deleted error: ",
      ],
      'type' => 
      [
        'label' => 'Type',
        'sell' => 'Sell',
        'lend' => 'Lend',
        'service' => 'Service',
        'giveaway' => 'Give away',
      ],
      'status' => 
      [
        'label' => 'Status',
        'published' => 'Published',
        'unpublished' => 'Unpublished',
      ],
      'visibility' => 
      [
        'label' => 'Visibility',
        'address' => 'Address',
        'quarter' => 'Quarter',
        'all' => 'All',
      ],
    ],
    'template' => 
    [      
      'saved' => 'Template saved',
      'deleted' => 'Template deleted',
      'add' => 'Add',
      'title' => 'Templates',
      'subject' => 'Subject',
      'body' => 'Body',
      'category' => 'Category',
      'tags' => 'Tags',
      'placeholders' => 
      [
        'category' => 'Choose category',
      ],
      'errors' => [
        'not_found' => "Template not found",
      ]
    ],
    'cleanify' => 
    [
      'pageTitle' => 'Cleanify request',
      'title' => 'Title',
      'lastName' => 'Last name',
      'firstName' => 'First name',
      'address' => 'Address', 
      'save' => 'Send request',
      'success' => 'Cleanify request sent successfully',
      'terms_and_conditions' => 'Accept Terms & Conditions',
      'terms_text' => 'Terms text here, long text',
    ],
];
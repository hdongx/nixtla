<?phpreturn [		'user-management' => [		'title' => 'User Management',		'created_at' => 'Time',		'fields' => [		],	],		'abilities' => [		'title' => 'Abilities',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',		],	],		'roles' => [		'title' => 'Roles',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'abilities' => 'Abilities',		],	],		'users' => [		'title' => 'Users',		'created_at' => 'Time',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'roles' => 'Roles',			'remember-token' => 'Remember token',		],	],	'device-management' => [		'title' => 'Device Management',		'created_at' => 'Time',		'fields' => [		],	],		'personnel-management' => [		'title' => 'Personnel Management',		'created_at' => 'Time',		'fields' => [		],	],	'transaction-management' => [		'title' => 'Transaction Management',		'created_at' => 'Time',		'fields' => [		],	],	'change-password' => [		'title' => 'Change password',		'created_at' => 'Fecha',		'fields' => [			'current-password' => 'Current password',			'new-password' => 'New password',			'new-password-confirmation' => 'New password confirmation',		],	],	'app_create' => 'Create',	'app_save' => 'Save',	'app_edit' => 'Edit',	'app_view' => 'View',	'app_update' => 'Update',	'app_list' => 'List',	'app_no_entries_in_table' => 'No entries in table',	'custom_controller_index' => 'Custom controller index.',	'app_logout' => 'Logout',	'app_add_new' => 'Add new',	'app_are_you_sure' => 'Are you sure?',	'app_back_to_list' => 'Back to list',	'app_dashboard' => 'Dashboard',	'app_delete' => 'Delete',	'global_title' => 'Roles-Permissions Manager',];
<?php

return [
	
	'user-management' => [
		'title' => 'Gestor de Usuarios',
		'created_at' => 'Fecha',
		'fields' => [
		],
	],
	
	'abilities' => [
		'title' => 'Habilidades',
		'created_at' => 'Fecha',
		'fields' => [
			'name' => 'Nombre',
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'created_at' => 'Fecha',
		'fields' => [
			'name' => 'Nombre',
			'abilities' => 'Habilidades',
		],
	],
	
	'users' => [
		'title' => 'Usuarios',
		'created_at' => 'Fecha',
		'fields' => [
			'name' => 'Nombre',
			'email' => 'Email',
			'password' => 'Contraseña',
			'roles' => 'Roles',
			'remember-token' => 'Recordar token',
		],
	],

	'device-management' => [
		'title' => 'Gestor de Dispositivos',
		'created_at' => 'Fecha',
		'fields' => [
		],
	],
	
	'personnel-management' => [
		'title' => 'Gestor de Personal',
		'created_at' => 'Fecha',
		'fields' => [
		],
	],

	'transaction-management' => [
		'title' => 'Gestor de Transacciones',
		'created_at' => 'Fecha',
		'fields' => [
		],
	],

	'change-password' => [
		'title' => 'Cambiar contraseña',
		'created_at' => 'Fecha',
		'fields' => [
			'current-password' => 'Contraseña actual',
			'new-password' => 'Nueva contraseña',
			'new-password-confirmation' => 'Confirmar nueva contraseña',
		],
	],
	'app_create' => 'Crear',
	'app_save' => 'Guardar',
	'app_edit' => 'Editar',
	'app_view' => 'Ver',
	'app_update' => 'Actualizar',
	'app_list' => 'Lista',
	'app_no_entries_in_table' => 'Sin registros en tabla',
	'custom_controller_index' => 'Índice de controlador personalizado.',
	'app_logout' => 'Cerrar sesión',
	'app_add_new' => 'Agregar nuevo',
	'app_are_you_sure' => '¿Estás seguro?',
	'app_back_to_list' => 'Regresar a lista',
	'app_dashboard' => 'Tablero',
	'app_delete' => 'Borrar',
	'global_title' => 'Administrador SBlink',
];
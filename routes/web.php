<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ChangePassword;

Auth::routes();
//Change Password
Route::get('/changePassword', 'App\Http\Controllers\Auth\ChangePasswordController@index')->name('changePassword');
Route::get('/mot-de-passe-oublié', 'App\Http\Controllers\Auth\ForgotPasswordController@index')->name('forgotPassword');
Route::post('/mot-de-passe-envoyé', 'App\Http\Controllers\Auth\ForgotPasswordController@send')->name('sendPassword');
Route::put('/changePassword', 'App\Http\Controllers\Auth\ChangePasswordController@change')->name('changePassword.change');

Route::middleware([ChangePassword::class])->group(function () {
	Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
	Route::get('/config', 'App\Http\Controllers\ConfigController@index')->name('config');
	Route::put('/config/update/{id}', 'App\Http\Controllers\ConfigController@update')->name('config.update');
	Route::get('/notification', 'App\Http\Controllers\Notification@index')->name('notification');

	Route::group(['namespace' => 'App\Http\Controllers\Profile'], function (){ 
		Route::get('/profile', 'ProfileController@index')->name('profile');
		Route::put('/profile/update/profile/{id}', 'ProfileController@updateProfile')->name('profile.update.profile');
		Route::put('/profile/update/avatar/{id}', 'ProfileController@updateAvatar')->name('profile.update.avatar');
	});

	Route::group(['namespace' => 'App\Http\Controllers\Error'], function (){ 
		Route::get('/unauthorized', 'ErrorController@unauthorized')->name('unauthorized');
	});

	Route::group(['namespace' => 'App\Http\Controllers\User'], function (){ 
		//Users
		Route::get('/user', 'UserController@index')->name('user');
		Route::get('/user/create', 'UserController@create')->name('user.create');
		Route::post('/user/store', 'UserController@store')->name('user.store');
		Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
		Route::put('/user/update/{id}', 'UserController@update')->name('user.update');
		Route::get('/user/edit/password/{id}', 'UserController@editPassword')->name('user.edit.password');
		Route::put('/user/update/password/{id}', 'UserController@updatePassword')->name('user.update.password');
		Route::get('/user/show/{id}', 'UserController@show')->name('user.show');
		Route::get('/user/destroy/{id}', 'UserController@destroy')->name('user.destroy');
		// Roles
		Route::get('/role', 'RoleController@index')->name('role');
		Route::get('/role/create', 'RoleController@create')->name('role.create');
		Route::post('/role/store', 'RoleController@store')->name('role.store');
		Route::get('/role/edit/{id}', 'RoleController@edit')->name('role.edit');
		Route::put('/role/update/{id}', 'RoleController@update')->name('role.update');
		Route::get('/role/show/{id}', 'RoleController@show')->name('role.show');
		Route::get('/role/destroy/{id}', 'RoleController@destroy')->name('role.destroy');
	});

	Route::group(['namespace' => 'App\Http\Controllers\GestionCandidature'], function (){ 
		// Departements
		Route::get('/departement', 'DepartementController@index')->name('departement');
		Route::get('/departement/create', 'DepartementController@create')->name('departement.create');
		Route::post('/departement/store', 'DepartementController@store')->name('departement.store');
		Route::get('/departement/edit/{id}', 'DepartementController@edit')->name('departement.edit');
		Route::put('/departement/update/{id}', 'DepartementController@update')->name('departement.update');
		Route::get('/departement/show/{id}', 'DepartementController@show')->name('departement.show');
		Route::get('/departement/destroy/{id}', 'DepartementController@destroy')->name('departement.destroy');
	});

	Route::group(['namespace' => 'App\Http\Controllers\GestionCandidature'], function (){ 
		// Recrutements
		Route::get('/recrutement', 'RecrutementController@index')->name('recrutement');
		Route::get('/recrutement/create', 'RecrutementController@create')->name('recrutement.create');
		Route::post('/recrutement/store', 'RecrutementController@store')->name('recrutement.store');
		Route::get('/recrutement/edit/{id}', 'RecrutementController@edit')->name('recrutement.edit');
		Route::put('/recrutement/update/{id}', 'RecrutementController@update')->name('recrutement.update');
		Route::get('/recrutement/show/{id}', 'RecrutementController@show')->name('recrutement.show');
		Route::get('/recrutement/destroy/{id}', 'RecrutementController@destroy')->name('recrutement.destroy');
	});

	Route::group(['namespace' => 'App\Http\Controllers\Candidat'], function (){ 
		// Candidats
		Route::get('{id}/candidats', 'CandidatController@index')->name('candidat');
		Route::get('/candidats/show/{id}', 'CandidatController@show')->name('candidat.show');
		Route::get('/candidat/{id}/planifier', 'CandidatController@planifier')->name('candidat.planifier');
		Route::post('/candidat/inviter', 'CandidatController@inviter')->name('candidat.inviter');
	});

	Route::group(['namespace' => 'App\Http\Controllers\GestionCandidature'], function (){ 
		// Mails
		Route::get('/mail', 'MailController@index')->name('mail');
		Route::get('/mail/create', 'MailController@create')->name('mail.create');
		Route::post('/mail/store', 'MailController@store')->name('mail.store');
		Route::get('/mail/edit/{id}', 'MailController@edit')->name('mail.edit');
		Route::put('/mail/update/{id}', 'MailController@update')->name('mail.update');
		Route::get('/mail/show/{id}', 'MailController@show')->name('mail.show');
		Route::get('/mail/destroy/{id}', 'MailController@destroy')->name('mail.destroy');
	});

	Route::group(['namespace' => 'App\Http\Controllers\GestionCandidature'], function (){ 
		// Entretien
		Route::get('/entretien', 'EntretienController@index')->name('entretien');
		Route::get('/entretien/create', 'EntretienController@create')->name('entretien.create');
		Route::post('/entretien/store', 'EntretienController@store')->name('entretien.store');
		Route::get('/entretien/edit/{id}', 'EntretienController@edit')->name('entretien.edit');
		Route::put('/entretien/update/{id}', 'EntretienController@update')->name('entretien.update');
		Route::get('/entretien/show/{id}', 'EntretienController@show')->name('entretien.show');
		Route::get('/entretien/destroy/{id}', 'EntretienController@destroy')->name('entretien.destroy');
	});

	Route::group(['namespace' => 'App\Http\Controllers\GestionCandidature'], function (){ 
		// Rapport
		Route::get('/rapport', 'RapportController@index')->name('rapport');
	});

	Route::group(['namespace' => 'App\Http\Controllers\GestionCandidature'], function (){ 
		// Calendrier
		Route::get('/calendrier', 'CalendarController@index')->name('calendrier');
	});
});

Route::group(['namespace' => 'App\Http\Controllers\InterfaceVisiteur'], function (){ 
	// Career
	Route::get('/', 'OffreController@index');
	Route::get('/career', 'OffreController@index')->name('career');
	Route::get('/offre/show/{id}', 'OffreController@show')->name('offre.show');
	Route::get('/offre/candidature/{id}', 'OffreController@candidature')->name('offre.candidature');
	Route::post('/offre/postuler', 'OffreController@postuler')->name('recrutement.postuler');
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\RoleController;

//use App\Http\Controllers\api\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class,'index']);
        Route::get('/create', [UserController::class,'create']);
        Route::post('/store', [UserController::class,'store']);
        Route::get('/edit/{id}', [UserController::class,'edit']);
        Route::put('/update/{id}', [UserController::class,'update']);
        Route::get('/edit/password/{id}', [UserController::class,'editPassword']);
        Route::put('/update/password/{id}', [UserController::class,'updatePassword']);
        Route::get('/show/{id}', [UserController::class,'show']);
        Route::get('/destroy/{id}', [UserController::class,'destroy']);
    });
        // Roles
    Route::prefix('role')->group(function () {
        Route::get('/', [RoleController::class,'index']);
        Route::get('/create', [RoleController::class,'create']);
        Route::post('/store', [RoleController::class,'store']);
        Route::get('/edit/{id}', [RoleController::class,'edit']);
        Route::put('/update/{id}', [RoleController::class,'update']);
        Route::get('/show/{id}', [RoleController::class,'show']);
        Route::get('/destroy/{id}', [RoleController::class,'destroy']);
    });
    // Profil
    Route::prefix('role')->group(function () {
        Route::get('/profil', [App\Http\Controllers\User\ProfilController::class,'index']);
        Route::put('/profil/update/{id}', [App\Http\Controllers\User\ProfilController::class,'update']);
    });
    // Candidat
    Route::prefix('candidat')->group(function () {
        Route::get('/', [App\Http\Controllers\Candidat\CandidatController::class,'index']);
        Route::get('/create', [App\Http\Controllers\Candidat\CandidatController::class,'create']);
        Route::post('/store', [App\Http\Controllers\Candidat\CandidatController::class,'store']);
        Route::get('/edit/{id}', [App\Http\Controllers\Candidat\CandidatController::class,'edit']);
        Route::put('/update/{id}', [App\Http\Controllers\Candidat\CandidatController::class,'update']);
        Route::get('/show/{id}', [App\Http\Controllers\Candidat\CandidatController::class,'show']);
        Route::get('/destroy/{id}', [App\Http\Controllers\Candidat\CandidatController::class,'destroy']);
    });
    // Competance
    Route::prefix('competance')->group(function () {
        Route::get('/', [App\Http\Controllers\Candidat\CompetanceController::class,'index']);
        Route::get('/create', [App\Http\Controllers\Candidat\CompetanceController::class,'create']);
        Route::post('/store', [App\Http\Controllers\Candidat\CompetanceController::class,'store']);
        Route::get('/edit/{id}', [App\Http\Controllers\Candidat\CompetanceController::class,'edit']);
        Route::put('/update/{id}', [App\Http\Controllers\Candidat\CompetanceController::class,'update']);
        Route::get('/show/{id}', [App\Http\Controllers\Candidat\CompetanceController::class,'show']);
        Route::get('/destroy/{id}', [App\Http\Controllers\Candidat\CompetanceController::class,'destroy']);
    });
    // Cv
    Route::prefix('cv')->group(function () {
        Route::get('/', [App\Http\Controllers\Candidat\CvController::class,'index']);
        Route::get('/create', [App\Http\Controllers\Candidat\CvController::class,'create']);
        Route::post('/store', [App\Http\Controllers\Candidat\CvController::class,'store']);
        Route::get('/edit/{id}', [App\Http\Controllers\Candidat\CvController::class,'edit']);
        Route::put('/update/{id}', [App\Http\Controllers\Candidat\CvController::class,'update']);
        Route::get('/show/{id}', [App\Http\Controllers\Candidat\CvController::class,'show']);
        Route::get('/destroy/{id}', [App\Http\Controllers\Candidat\CvController::class,'destroy']);
    });
    // EtatCandidat
    Route::prefix('etat')->group(function () {
        Route::get('/', [App\Http\Controllers\Candidat\EtatCandidatController::class,'index']);
        Route::get('/create', [App\Http\Controllers\Candidat\EtatCandidatController::class,'create']);
        Route::post('/store', [App\Http\Controllers\Candidat\EtatCandidatController::class,'store']);
        Route::get('/edit/{id}', [App\Http\Controllers\Candidat\EtatCandidatController::class,'edit']);
        Route::put('/update/{id}', [App\Http\Controllers\Candidat\EtatCandidatController::class,'update']);
        Route::get('/show/{id}', [App\Http\Controllers\Candidat\EtatCandidatController::class,'show']);
        Route::get('/destroy/{id}', [App\Http\Controllers\Candidat\EtatCandidatController::class,'destroy']);
    });
    // Experience
    Route::prefix('experience')->group(function () {
        Route::get('/', [App\Http\Controllers\Candidat\ExperienceController::class,'index']);
        Route::get('/create', [App\Http\Controllers\Candidat\ExperienceController::class,'create']);
        Route::post('/store', [App\Http\Controllers\Candidat\ExperienceController::class,'store']);
        Route::get('/edit/{id}', [App\Http\Controllers\Candidat\ExperienceController::class,'edit']);
        Route::put('/update/{id}', [App\Http\Controllers\Candidat\ExperienceController::class,'update']);
        Route::get('/show/{id}', [App\Http\Controllers\Candidat\ExperienceController::class,'show']);
        Route::get('/destroy/{id}', [App\Http\Controllers\Candidat\ExperienceController::class,'destroy']);
    });

    // Formation
    Route::prefix('formation')->group(function () {
        Route::get('/', [App\Http\Controllers\Candidat\FormationController::class,'index']);
        Route::get('/create', [App\Http\Controllers\Candidat\FormationController::class,'create']);
        Route::post('/store', [App\Http\Controllers\Candidat\FormationController::class,'store']);
        Route::get('/edit/{id}', [App\Http\Controllers\Candidat\FormationController::class,'edit']);
        Route::put('/update/{id}', [App\Http\Controllers\Candidat\FormationController::class,'update']);
        Route::get('/show/{id}', [App\Http\Controllers\Candidat\FormationController::class,'show']);
        Route::get('/destroy/{id}', [App\Http\Controllers\Candidat\FormationController::class,'destroy']);
    });
});

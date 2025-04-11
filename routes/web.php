<?php

use App\Livewire\CreateServer;
use App\Http\Controllers\HomeController;
use App\Livewire\AllAdmins;
use App\Livewire\AllPlans;
use App\Livewire\AllPurchases;
use App\Livewire\AllServers;
use App\Livewire\AllUsers;
use App\Livewire\AllVpsManager;
use App\Livewire\CreatePlan;
use App\Livewire\CreateUsers;
use App\Livewire\CreateVpsServer;
use App\Livewire\Feedbacks;
use App\Livewire\Smpt;
use App\Livewire\VpsServers;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/createServer',CreateServer::class)->name('create-server');
Route::get('/AllServers',AllServers::class)->name('all-servers');
Route::get('/vps-servers',VpsServers::class)->name('vps-servers');
Route::get('/create-vps-servers',CreateVpsServer::class)->name('create-vps-servers');
Route::get('/all-plans',AllPlans::class)->name('all-plans');
Route::get('/create-plan',CreatePlan::class)->name('create-plan');
Route::get('/all-purchases',AllPurchases::class)->name('all-purchases');
Route::get('/feedbacks',Feedbacks::class)->name('feedbacks');
Route::get('/all-users',AllUsers::class)->name('all-users');
Route::get('/create-user',CreateUsers::class)->name('create-user');
Route::get('/all-admin',AllAdmins::class)->name('all-admin');
Route::get('/create-admin',CreateUsers::class)->name('create-admin');
Route::get('/smpt',Smpt::class)->name('smpt');
Route::get('/all-vps-manager',AllVpsManager::class)->name('all-vps-manager');

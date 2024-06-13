<?php

use App\Http\Controllers\Add_Event;
use App\Http\Controllers\Add_ticket;
use App\Http\Controllers\basic_ticket;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Events;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Gallery;
use App\Http\Controllers\home_interface;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Profil;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\standart_ticket;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\vip_ticket;
use App\Models\Comment;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard')->middleware('auth');

Route::get('/feedback',[FeedbackController::class,'index']);
Route::get('/payment',[PaymentController::class,'index']);
Route::get('/ticket',[TicketController::class,'index']);


Route::get('/events_types',[EventController::class,'types'])->name('events_types');
Route::get('/add_events_Type',[EventController::class,'createEvent'])->name('add.eventtype');
Route::post('/add_events_Type/store',[EventController::class,'storeEvent'])->name('store.eventtype');
Route::delete('/events_types/{id}',[EventController::class,'delete'])->name('delete.evenntstype');



//Client 
Route::get('/client',[ClientController::class,'index'])->name('client');
Route::get('/login',[ClientController::class,'create'])->name('create');
Route::post('/store',[ClientController::class,'store'])->name('store');
Route::get('client{id}',[ClientController::class,'show'])->name('show.client');
Route::delete('/client/{id}',[ClientController::class,'destroy'])->name('client.destroy');

//login
Route::get('/',[LoginController::class,'show'])->name('show.login');
Route::post('/',[LoginController::class,'login'])->name('login');


//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//event
Route::get('/event',[EventController::class,'index'])->name('event');
Route::delete('/event/{id}',[EventController::class,'destroy'])->name('event.destroy');

//Comments
Route::get('/comment',[CommentController::class,'index'])->name('comment');
Route::delete('/comment/{id}',[CommentController::class,'destroy'])->name('comment.destroy');
Route::get('/comment{id}',[CommentController::class,'show'])->name('show.comment');

//interface

Route::get('/event',[EventController::class,'index'])->name('event');

//AddEvent
Route::get('/AddEvent', [Add_Event::class, 'index'])->name('Add_Event')->middleware('auth');
Route::post('/AddEvent/store', [Add_Event::class, 'store'])->name('AddEvent_store');

//Add_Ticket_basic
Route::get('/add_ticket_basic', [basic_ticket::class, 'index'])->name('Add_Ticket_Basic');
Route::post('/add_ticket_basic', [basic_ticket::class, 'store'])->name('basic_tickets.store');

//buy_Ticket_basic
Route::get('/basic{id}',[basic_ticket::class,'show'] )->name('show.basic');


//Add_Ticket_standart
Route::get('/add_ticket_standart', [standart_ticket::class, 'index'])->name('Add_Ticket_standart');
Route::post('/add_ticket_standart', [standart_ticket::class, 'store'])->name('standart_tickets.store');

//buy_Ticket_standart
Route::get('/standart{id}',[standart_ticket::class,'show'] )->name('show.standart');


//Add_Ticket_vip
Route::get('/add_ticket_vip', [vip_ticket::class, 'index'])->name('Add_Ticket_vip');
Route::post('/add_ticket_vip', [vip_ticket::class, 'store'])->name('vip_tickets.store');

//buy_Ticket_vip
Route::get('/vip{id}',[vip_ticket::class,'show'] )->name('show.vip');


//Events
Route::get('/Events',[Events::class,'index'])->name('Events')->middleware('auth');
Route::get('/Events/{id}',[Events::class,'show'])->name('show.events');

//Home interface
Route::get('/home',[home_interface::class,'index'])->name('home')->middleware('auth');
Route::get('/Gallery',[Gallery::class,'index'])->name('Gallery')->middleware('auth');

//Comments 
Route::post('/store-feedback', [FeedbackController::class, 'store'])->name('store.feedback');


//profil
Route::get('/profil',[Profil::class,'index'])->name('profil')->middleware('auth');

//edite profil
Route::get('/profil/edit', [Profil::class, 'edit'])->name('profil.edit')->middleware('auth');
Route::post('/profil/update', [Profil::class, 'update'])->name('profil.update');


Route::get('/comments', [CommentController::class, 'comment'])->name('comments');
Route::get('/edit',[Profil::class,'editee'])->name('edite');












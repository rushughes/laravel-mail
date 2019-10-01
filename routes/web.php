<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendmail', function () {
  $data = [
    'title' => 'Hi this is an email subject not a title',
    'content' => 'I guess this is the email body',
  ];

  Mail::send('emails.test', $data, function ($message) {
    $message->to('rus@gmail.com', 'Rus Hughes')->subject('I owe Edwin a sorry!');
  });
});

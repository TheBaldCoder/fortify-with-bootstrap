<?php

use Illuminate\Support\Facades\Route;


// After you are logged in. You get redirected to the websites homepage.
Route::redirect('/home', '/');

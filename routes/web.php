<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

// Route::get('/announcement', function () {
//     return view('announcement');
// })->name('announcement');

// Route::get('/forum', function () {
//     return view('forum');
// })->name('forum');

// Route::get('/sop', function () {
//     return view('sop');
// })->name('sop');

// Route::get('/shelter', function () {
//     return view('shelter');
// })->name('shelter');

// Route::get('/contactlist', function () {
//     return view('contactlist');
// })->name('contactlist');

Route::get('/viewprofile', function () {
    return view('profile');
})->name('viewprofile');


Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
Route::get('/createpost', function () {
    return view('newpostsite');
})->name('createpost')->middleware('auth');
Route::get('/createcontact', function () {
    return view('newcontact');
})->name('createcontact');
Route::get('/createshelter', function () {
    return view('newshelter');
})->name('createshelter');

Route::get('/createsop', function () {
    return view('newsop');
})->name('createsop');
// Route::get('/news', function () {
//     return view('news');
// })->name('news');

Auth::routes();
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/warning', [App\Http\Controllers\warningcontroller::class, 'index'])->name('warning');
// Route::get('/announcement', [App\Http\Controllers\announcementcontroller::class, 'index'])->name('announcement');
Route::get('/sop', [App\Http\Controllers\sopcontroller::class, 'index'])->name('sop');
Route::post('/addsop', [App\Http\Controllers\sopcontroller::class, 'addsop'])->name('addsop');
Route::get('/deletesop/{id}', [App\Http\Controllers\sopcontroller::class, 'deletesop'])->name('deletesop');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/shelter', [App\Http\Controllers\sheltercontroller::class, 'index'])->name('shelter');
Route::post('/addshelter', [App\Http\Controllers\sheltercontroller::class, 'addshelter'])->name('addshelter');
Route::get('/deleteshelter/{id}', [App\Http\Controllers\sheltercontroller::class, 'deleteshelter'])->name('deleteshelter');
Route::get('/shelter/Johor', [App\Http\Controllers\sheltercontroller::class, 'Johor'])->name('sJohor');
Route::get('/shelter/Kedah', [App\Http\Controllers\sheltercontroller::class, 'Kedah'])->name('sKedah');
Route::get('/shelter/Kelantan', [App\Http\Controllers\sheltercontroller::class, 'Kelantan'])->name('sKelantan');
Route::get('/shelter/Malacca', [App\Http\Controllers\sheltercontroller::class, 'Malacca'])->name('sMalacca');
Route::get('/shelter/NegeriSembilan', [App\Http\Controllers\sheltercontroller::class, 'NegeriSembilan'])->name('sNegeriSembilan');
Route::get('/shelter/Pahang', [App\Http\Controllers\sheltercontroller::class, 'Pahang'])->name('sPahang');
Route::get('/shelter/Penang', [App\Http\Controllers\sheltercontroller::class, 'Penang'])->name('sPenang');
Route::get('/shelter/Perak', [App\Http\Controllers\sheltercontroller::class, 'Perak'])->name('sPerak');
Route::get('/shelter/Perlis', [App\Http\Controllers\sheltercontroller::class, 'Perlis'])->name('sPerlis');
Route::get('/shelter/Sabah', [App\Http\Controllers\sheltercontroller::class, 'Sabah'])->name('sSabah');
Route::get('/shelter/Sarawak', [App\Http\Controllers\sheltercontroller::class, 'Sarawak'])->name('sSarawak');
Route::get('/shelter/Selangor', [App\Http\Controllers\sheltercontroller::class, 'Selangor'])->name('sSelangor');
Route::get('/shelter/Terengganu', [App\Http\Controllers\sheltercontroller::class, 'Terengganu'])->name('sTerengganu');


Route::get('/news2', [App\Http\Controllers\newscontroller::class, 'index'])->name('news2');



Route::get('/deletecomment/{id}', [App\Http\Controllers\commentscontroller::class, 'deletecomment'])->name('deletecomment');
Route::post('/addcomment', [App\Http\Controllers\commentscontroller::class, 'addcomment'])->name('addcomment');




Route::post('/addcontact', [App\Http\Controllers\contactcontroller::class, 'addcontact'])->name('addcontact');
Route::get('/deletecontact/{id}', [App\Http\Controllers\contactcontroller::class, 'deletecontact'])->name('deletecontact');
Route::get('/contactlist', [App\Http\Controllers\contactcontroller::class, 'index'])->name('contactlist');
Route::get('/contact/Johor', [App\Http\Controllers\contactcontroller::class, 'Johor'])->name('cJohor');
Route::get('/contact/Kedah', [App\Http\Controllers\contactcontroller::class, 'Kedah'])->name('cKedah');
Route::get('/contact/Kelantan', [App\Http\Controllers\contactcontroller::class, 'Kelantan'])->name('cKelantan');
Route::get('/contact/Malacca', [App\Http\Controllers\contactcontroller::class, 'Malacca'])->name('cMalacca');
Route::get('/contact/NegeriSembilan', [App\Http\Controllers\contactcontroller::class, 'NegeriSembilan'])->name('cNegeriSembilan');
Route::get('/contact/Pahang', [App\Http\Controllers\contactcontroller::class, 'Pahang'])->name('cPahang');
Route::get('/contact/Penang', [App\Http\Controllers\contactcontroller::class, 'Penang'])->name('cPenang');
Route::get('/contact/Perak', [App\Http\Controllers\contactcontroller::class, 'Perak'])->name('cPerak');
Route::get('/contact/Perlis', [App\Http\Controllers\contactcontroller::class, 'Perlis'])->name('cPerlis');
Route::get('/contact/Sabah', [App\Http\Controllers\contactcontroller::class, 'Sabah'])->name('cSabah');
Route::get('/contact/Sarawak', [App\Http\Controllers\contactcontroller::class, 'Sarawak'])->name('cSarawak');
Route::get('/contact/Selangor', [App\Http\Controllers\contactcontroller::class, 'Selangor'])->name('cSelangor');
Route::get('/contact/Terengganu', [App\Http\Controllers\contactcontroller::class, 'Terengganu'])->name('cTerengganu');


Route::get('/post/response/{id}', [App\Http\Controllers\postscontroller::class, 'getpostforcomment'])->name('response')->middleware('auth');
Route::get('/forum/general', [App\Http\Controllers\postscontroller::class, 'general'])->name('general');
Route::get('/forum/donation', [App\Http\Controllers\postscontroller::class, 'donation'])->name('donation');
Route::get('/forum/recuitment', [App\Http\Controllers\postscontroller::class, 'recuitment'])->name('recuitment');
Route::get('/forum/lostfound', [App\Http\Controllers\postscontroller::class, 'lostfound'])->name('lostfound');
Route::get('/forum/urgent', [App\Http\Controllers\postscontroller::class, 'urgent'])->name('urgent');
Route::post('/updatepost', [App\Http\Controllers\postscontroller::class, 'updatepost'])->name('updatepost');
Route::get('/post/{id}', [App\Http\Controllers\postscontroller::class, 'getpost'])->name('post');
Route::post('/addpost', [App\Http\Controllers\postscontroller::class, 'addpost'])->name('addpost');
Route::get('/editpost/{id}', [App\Http\Controllers\postscontroller::class, 'editpost'])->name('editpost');
Route::get('/deletepost/{id}', [App\Http\Controllers\postscontroller::class, 'deletepost'])->name('deletepost');
Route::get('/forum', [App\Http\Controllers\postscontroller::class, 'index'])->name('forum');

use Laravel\Socialite\Facades\Socialite;
 
Route::get('/auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();
 
    // $user->token
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

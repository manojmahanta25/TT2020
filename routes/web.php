<?php
use App\Registration;
use App\ParentEvent;
use App\Event;

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
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/adalogani', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('/adalogani', [
    'as' => 'loginDb',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('/logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
//Route::post('/password/email', [
//    'as' => 'password.email',
//    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
//]);
//Route::get('/password/reset', [
//    'as' => 'password.request',
//    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
//]);
//Route::post('/password/reset', [
//    'as' => 'password.update',
//    'uses' => 'Auth\ResetPasswordController@reset'
//]);
//Route::get('/password/reset/{token}', [
//    'as' => 'password.reset',
//    'uses' => 'Auth\ResetPasswordController@showResetForm'
//]);
//
//// Registration Routes...
//Route::get('/register', [
//    'as' => 'register',
//    'uses' => 'Auth\RegisterController@showRegistrationForm'
//]);
//Route::post('/register', [
//    'as' => 'registerDb',
//    'uses' => 'Auth\RegisterController@register'
//]);

Route::get('/home', 'HomeController@index')->name('home');




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
Route::get('/',['as'=>'tt.home','uses'=>'pageController@home']);
Route::get('/competitions', ['as'=>'tt.event','uses'=>'pageController@competitions']);
Route::get('/competitions/{id}',['as'=>'tt.eventdet','uses'=>'pageController@eventFetch']);
Route::get('/registration', ['as'=>'tt.register','uses'=>'registrationController@index']);
Route::get('/registration/{id}', ['as'=>'tt.registersingle','uses'=>'registrationController@show']);

Route::get('/sponsor', ['as'=>'tt.sponsor','uses'=>'pageController@sponsor']);

Route::get('/contact', ['as'=>'tt.contact','uses'=>'pageController@contact']);
Route::get('/comingsoon', ['as'=>'tt.comingsoon','uses'=>'pageController@comingsoon']);
Route::get('/faq', ['as'=>'tt.faq','uses'=>'pageController@faq']);
Route::get('/accommodation', ['as'=>'tt.accommodation','uses'=>'pageController@accommodation']);
Route::get('/pronites', ['as'=>'tt.pronites','uses'=>'pageController@pronites']);
Route::get('/pass', ['as'=>'tt.pass','uses'=>'pageController@pass']);
Route::get('/rulesandregulations', ['as'=>'tt.rnr','uses'=>'pageController@rnr']);
Route::get('/termsofuse', ['as'=>'tt.termsofuse','uses'=>'pageController@tou']);

//Route::get('/thankyou', ['as'=>'tt.thankyou','uses'=>'pageController@thankYou']);

Route::get('/privacypolicy', ['as'=>'tt.privacypolicy','uses'=>'pageController@privacypolicy']);
Route::get('/buytickets',['as' => 'tt.ticket', 'uses' => 'ticketController@index']);
Route::get('/buytickets/{ptype}',['as' => 'tt.ticketId', 'uses' => 'ticketController@show']);

//Route::get('/success/{rid}', ['as' => 'tt.ticketsucc', 'uses' => 'ticketController@mailSuccess']);

Route::group(['middleware'=>'web'], function(){
//    Route::resource('post','registrationController');
    Route::post('/registration', ['as'=>'tt.registerdb','uses'=>'registrationController@store']);

    Route::post('/buytickets', ['as'=>'tt.buyticketsdb','uses'=> 'ticketController@store']);

	Route::post('/payonline', ['as'=>'tt.buyticketspy','uses'=> 'ticketController@payForm']);

	Route::post('/paymentverification', ['as' => 'tt.ticketpaid', 'uses' => 'ticketController@upRID']);

	Route::get('/success',['as' => 'tt.ticketmail', 'uses' => 'ticketController@html_email']);

	Route::get('/thankyou', ['as'=>'tt.registermail','uses'=>'registrationController@html_email']);

    Route::get('/getevtprc/{id}', ['as'=>'tt.registerfetch','uses'=>'registrationController@showPrice']);
});
Route::group(['middleware'=>'web'], function() {
    Route::get('/viewregistration', ['as' => 'tt.registrationview', 'uses' => 'detailsController@index']);
//    Route::post('/viewregistrationd', ['as' => 'tt.registrationviewd', 'uses' => 'detailsController@showAll']);
    Route::get('/viewregistrationd', ['as' => 'tt.registrationviewd', 'uses' => 'detailsController@showAll']);

});



/*
|--------------------------------------------------------------------------
| Database Test Without Model
|--------------------------------------------------------------------------
*/
//Route::get('/insert', function(){
//
//    DB::insert('insert into registrations(team_name, team_leader, event_name, total_member, email, phone, address, pincode, district, institute_name, accommodations) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', ['Hera Itna', 'Hero Alom', 'Destroix', '4', 'example@example.com', '76356793','text address at text road', '785001', 'Jorhat','KU Zindabad', '1']);
//
//        });
//Route::get('/read', function (){
//    $result = DB::select('select * from registrations');
//    return $result;
//});
//Route::get('/update', function (){
//    $result = DB::update('update registrations set team_name = "Mera Babu ne Thana thaya" where id = ?',[1]);
//    return redirect('/read');
//});
//Route::get('/delete', function (){
//    $result = DB::delete('delete from registrations  where id = ?',[2]);
//    return redirect('/read');
//});

/*
|--------------------------------------------------------------------------
| Database Test With Model || ELOQUENT
|--------------------------------------------------------------------------
*/
//Route::get('/find', function (){
//   $post = Registration::all();
//   return $post;
//});
//Route::get('/findsingle', function (){
//    $post = Registration::find(2);
//    return $post;
//});
//Route::get('/findwhere', function (){
//    $post = Registration::where('id', 1)->orderBy('id','desc')->take(2)->get();
//    return $post;
//});
//Route::get('/findmore', function (){
////    $post = Registration::where('users_count', '<', 50)->firstOrFail();
//    $post = Registration::findOrFail(2);
//    return $post;
//});
//Route::get('/basicinsert', function (){
//    $post = new Registration;
//    $post->team_name = 'Jibon Zaji Noi';
//    $post->team_leader = 'Mithun Da';
//    $post->event_name = 'Burn It On';
//    $post->total_member= 5;
//    $post->email= 'mithunda@raku.com';
//    $post->phone= 567810;
//    $post->address= 'Kio Kom Tuk';
//    $post->pincode= 78754;
//    $post->district= 'Najnu';
//    $post->institute_name= 'Banglash';
//    $post->accommodations= 1;
//    $post->save();
////    $post->saveOrFail();
//    return redirect('/find');
//});
//Route::get('/basicinsert2', function (){
//    $post =Registration::find(1);
//    $post->team_name = 'Jibon Zaji Noi1';
//    $post->team_leader = 'Mithun Da';
//    $post->event_name = 'Burn It On';
//    $post->total_member= 5;
//    $post->email= 'mithunda@raku.com';
//    $post->phone= 567810;
//    $post->address= 'Kio Kom Tuk';
//    $post->pincode= 78754;
//    $post->district= 'Najnu';
//    $post->institute_name= 'Banglash';
//    $post->accommodations= 1;
//    $post->save();
////    $post->saveOrFail();
//    return redirect('/find');
//});
//Route::get('/create', function (){
//    Registration::create(['team_name'=>'Title Here',
//                        'team_leader'=>'Leader Here',
//                        'event_name'=>'event Here',
//                        'total_member'=>6,
//                        'email'=>'mithunda@raku.com',
//                        'phone'=>123123,
//                        'address'=>'Kio Kom Tuk',
//                        'pincode'=>78754,
//                        'district'=>'Himasd',
//                        'institute_name'=>'Banglash',
//                        'accommodations'=>0
//
//        ]);
//    return redirect('/find');
//});
//Route::get('/update', function (){
//
////    Registration::where('id',2)->where('is_admin','0')->update(['title'=>'some','content'=>'somae']);
//    Registration::where('id',2)->update(['team_leader'=>'some','team_name'=>'somae']);
//    return redirect('/findsingle');
//});
//Route::get('/delete', function(){
//
//   $post = Registration::find(2);
//   $post->delete();
//    return redirect('/find');
//});
//Route::get('/delete2', function(){
//
//    Registration::destroy(3);
////    Registration::where('id',2)->delete();
////    Registration::destroy([4,5]);
//
//    return redirect('/find');
//});
//Route::get('/softdelete', function(){
//
//    Registration::find(5)->delete();
//
//
//    return redirect('/find');
//});
//
//Route::get('/readsoftdelete', function(){
//
//    $post = Registration::withTrashed()->get();
//
//    return $post;
//});
//Route::get('/eventfind/{id}', function ($id){
//    return ParentEvent::find($id)->subEvent;
//});



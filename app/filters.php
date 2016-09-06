<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

Route::filter('french', function($route)
{
	$loc = 'fr';
	if (in_array($loc, Config::get('app.alt_langs'))) {
		App::setLocale($loc);
	}
});
Route::filter('german', function($route)
{
	$loc = 'de';
	if (in_array($loc, Config::get('app.alt_langs'))) {
		App::setLocale($loc);
	}
});
Route::filter('italian', function($route)
{
	$loc = 'it';
	if (in_array($loc, Config::get('app.alt_langs'))) {
		App::setLocale($loc);
	}
});
Route::filter('spanish', function($route)
{
	$loc = 'es';
	if (in_array($loc, Config::get('app.alt_langs'))) {
		App::setLocale($loc);
	}
});

Route::filter('local', function($route)
{
	$loc = $route->getParameter('loc');
	if (in_array($loc, Config::get('app.alt_langs'))) {
		App::setLocale($loc);
	}
});

Route::filter('reload', function()
{
	Session::flush();
	$currentLocal = App::getLocale();
	$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
    $questions = Config::get($localQuestions.'questions');
    Session::put('questions', $questions);
    reset($questions);
    Session::put('startSection', key($questions));
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/



/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

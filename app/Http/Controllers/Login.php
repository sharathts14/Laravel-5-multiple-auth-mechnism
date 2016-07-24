<?php
/**
 * Created by PhpStorm.
 * User: Sharath TS
 * Date: 23-07-2016
 * Time: 12:52
 */

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Support\Facades\View;

class Login extends Controller
{

    public function view()
    {
        return View::make('laravel_auth/v_login',
            [

            ]);
    }
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        //return $user->getEmail();

        // $user->token;
    }
}
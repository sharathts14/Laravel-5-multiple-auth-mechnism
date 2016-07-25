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
use Illuminate\Http\Request;

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
    public function redirectToProvider($auth_provider)
    {
        //echo $auth_provider;
        return Socialite::driver($auth_provider)->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return Response
     */
    public function handleProviderCallback( $auth_provider)
    {
        $user = Socialite::driver($auth_provider)->user();

        /*******************Validate or create users here with help of Database********************

        { code }


        ****************/

        return View::make('laravel_auth/v_home',
            [
                'username' => $user->getName(),
            ]);

        // $user->token;
    }
}
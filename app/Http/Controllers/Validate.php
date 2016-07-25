<?php
/**
 * Created by PhpStorm.
 * User: Sharath TS
 * Date: 25-07-2016
 * Time: 19:46
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Libraries\adLDAP\adLDAP;
use App\Http\Libraries\LdapClass;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Validate extends BaseController {


    public function login_auth_ldap()
    {

        try
        {
            $auth = new adLDAP();

        }
        catch (adLDAPException $e)
        {
            echo $e;
            exit();
        }
        if ($auth->authenticate($_POST['username'], $_POST['password']))
        {

            /*initialize LDAP library to get username and email id*/
            $ldap = new LdapClass();

            //set session data
            request()->session()->put('userid',$_POST['username']);

            request()->session()->put('username',$_POST['username']);

            request()->session()->put('login_state',true);

            /*after successful auth, redirect to requested url which is set in Login controller*/
            return Redirect::to('Home');


        }
        else
        {

            /*
             * if not successful auth, set flashdata('auth_status') of session as fail
             *
             * session flash data can be set in two methods, 1) bellow commented line and 2) return line
             * request()->session()->flash('auth_status','fail');
             */

            return redirect()->action('Login@view')->with('auth_status','fail');
        }
    }
}
?>
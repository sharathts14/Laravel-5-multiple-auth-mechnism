<?php
/**
 * Created by PhpStorm.
 * User: Sharath TS
 * Date: 25-07-2016
 * Time: 20:03
 */

class Home extends MY_Controllers
{
    public function view()
    {
        return View::make('laravel_auth/v_home',[]);
    }
}
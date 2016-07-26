# Laravel-5-multiple-auth-mechnism
Authentication in Laravel 5 with - Google Oauth, FaceBook Oauth and adLDAP

This project contains code to use Google Oauth, Facebook Oauth and adLDAP(Enterprise) level authentication mechanism.

->checkout the code and deploy on web server.
->update ".env" file with your Apps(Google/facebook) ID and secret key
->Type in "localhost/laravel_auth/server.php/Login" on URL
->For adLDAP
  ->go to "app/Http/Libraries/adLDAP/adLDAP.php"
  ->make required changes on line 107,116 and 131
  ->adLDAP validation is implemented in "app/Http/Controller/Validate.php"
-> Registration is not implemented.
-> database is not used as it's can be implemented using ORM

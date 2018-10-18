# PHP Laravel Coach Session (4 Hours)

## Manual login and authentication

1. Use different table - set *protected $table = 'other_user_table';`
2. Different field name - overwrite `LoginController` `username` method - [documentation](https://laravel.com/docs/5.7/authentication#included-views)
3. [Custom Login dengan Memodifikasi Auth Laravel](https://www.laravel.web.id/2017/12/11/custom-login-dengan-memodifikasi-auth-laravel/)

## Form validation

Can use `make:request`, or validation in controller.

## Parameter passing between webpages

### Basic Approach

```php
Session::flash(); //or Session::put

Session::flash('values', $passvalues);     
Redirect::to('/add1');

$oldinput = Session::get('values');
```

In your controller you can use something like

```php
session()->put('your_session_variable','some value');
```

In your view then you can display that session variable

```php
@if(session()->has('your_session_variable'))  
	{{Session::get('your_session_varible',"session_not_set(default value)") }}
@endif
```

### Intermediate Approach

Refer [Sharing Data Between Views](https://scotch.io/tutorials/sharing-data-between-views-using-laravel-view-composers)

## Create Code 

```php 
$isiRumah = new IsiRumah();
$isiRumah->code = str_pad(IsiRumah::where('user_id', $user)->count() + 1, 3, '0', STR_PAD_LEFT); // 001
$isiRumah->save();
```

## Page routing

*Refer documentation*

## Dynamic query 

*Need to clarify*

## Stored Procedure

[Store Procedure in Laravel] (https://medium.com/@smayzes/stored-procedures-in-laravel-60e7cb255fc9)
[Reddit](https://www.reddit.com/r/laravel/comments/3shaic/laravel_and_stored_procedures/)

## Report with dynamic table

[Chart](https://github.com/ConsoleTVs/Charts)
[Laravel Report Generator](https://github.com/Jimmy-JS/laravel-report-generator)


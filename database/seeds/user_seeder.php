<?php

require_once __DIR__ . '/../../models/User.php';

$user = new User;
$user->username = "wyattb";
$user->email = 'wyattb413@gmail.com';
$user->password = $_ENV['USER_PASS'];
$user->date_joined = 10/6/2016;  
$user->image = '../../public/img/default_profile_img.jpg';
$user->save();

$user = new User;
$user->username = "justinr";
$user->email = 'justinreich.dev@gmail.com';
$user->password = $_ENV['USER_PASS'];
$user->date_joined = 10/6/2016;  
$user->image = '../../public/img/default_profile_img.jpg';
$user->save();

$user = new User;
$user->username = "mittsyt";
$user->email = 'mtidwell506@gmail.com';
$user->password = $_ENV['USER_PASS'];
$user->date_joined = 10/6/2016;  
$user->image = '../../public/img/default_profile_img.jpg';
$user->save();

$user = new User;
$user->username = "guestSeller";
$user->email = 'guestSeller@me.com';
$user->password = $_ENV['USER_PASS'];
$user->date_joined = 10/6/2016;  
$user->image = '../../public/img/default_profile_img.jpg';
$user->save();

$user = new User;
$user->username = "guestBuyer";
$user->email = 'guestBuyer@me.com';
$user->password = $_ENV['USER_PASS'];
$user->date_joined = 10/6/2016;  
$user->image = '../../public/img/default_profile_img.jpg';
$user->save();








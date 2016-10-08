<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    $data['itemUpdateMessage'] = '';

    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');

    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {
        if (isset($_REQUEST['itemId'])) {
          $itemId = $_REQUEST['itemId'];
        }
        if (isset($_REQUEST['userId'])) {
          $userId = $_REQUEST['userId'];
        }
        if (isset($_REQUEST['search'])) {
          $search = $_REQUEST['search'];
        }
        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {

        $request = $_SERVER['REQUEST_URI'];
    }

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case '/' :
            $main_view = '../views/home.php';
            break;
        case '/create' :
            if($_POST) {
                itemsSave();
            }
            $main_view = '../views/ads/create.php';
            break;
        case '/edit' :
            $data['items'] = Item::find($itemId);
            if($_POST) {
                itemsUpdate($data['items']);
            }
            $main_view = '../views/ads/edit.php';
            break;
        case '/ads' :
            if(isset($search)) {
                $data['search'] = Item::searchItems($search);
                $data['items'] = $data['search'];
            } else {
                $data['items'] = Item::all();
            }
            $main_view = '../views/ads/index.php';
        case '/index' :
            $main_view = '../views/ads/index.php';
            break;
        case '/show' :
            $data['items'] = Item::find($itemId);
            $data['user'] = User::find($data['items']->user_id);
            $main_view = '../views/ads/show.php';
            break;
        case '/account' :
            $data['items'] = Item::findByUserId($userId);
            $data['user'] = User::find($userId);
            $main_view = '../views/users/account.php';
            break;
        case '/editUser' :
            $data['user'] = User::find($userId);
            if($_POST) {
                userUpdate($data['user']);
            }
            // $data['items'] = User::find($itemId);
            $main_view = '../views/users/edit.php';
            break;
        case '/login' :
            if($_POST) {
                var_dump($_POST['email']);
                var_dump($_POST['password']);
                Auth::attempt($_POST['email'], $_POST['password']);
            }
            $main_view = '../views/users/login.php';
            break;
        case '/signup' :
            if ($_POST) {
                userSave();
            }
            $main_view = '../views/users/signup.php';
            break;
        case '/logout' :
            $main_view = '../views/users/logout.php';
            break;

        default:    // displays 404 if route not specified above
            $data['black_background'] = true;
            $main_view = '../views/404.php';
            break;
        }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());

<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

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
        $main_view = '../views/ads/edit.php';
        break;
      case '/ads' :
        $data['items'] = Item::all();
        $main_view = '../views/ads/index.php';
      case '/index' :
        $main_view = '../views/ads/index.php';
        break;
      case '/show' :
        $data['items'] = Item::find($itemId);
        $data['user'] = User::find($data['items']->user_id);
        $data['item_types'] = Item_Type::find($data['items']->attributes['item_type']);
        $main_view = '../views/ads/show.php';
        break;
      case '/account' :
        $data['items'] = Item::findByUserId($userId);
        $data['user'] = User::find($userId);
        $main_view = '../views/users/account.php';
        break;
      case '/editUser' :
        $main_view = '../views/users/edit.php';
        break;
      case '/login' :
        $main_view = '../views/users/login.php';
        break;
      case '/signup' :
        $main_view = '../views/users/signup.php';
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

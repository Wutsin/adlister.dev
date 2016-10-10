<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.


// takes image from form submission and moves it into the uploads directory
function saveUploadedImage($input_name)
{
    $valid = true;
    // checks if $input_name is in the files super global
    if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
    {
        // checks if there are any errors on the upload from the submission
        if(!$_FILES[$input_name]['error'])
        {
            $tempFile = $_FILES[$input_name]['tmp_name'];
            $positionOfLastSlash = strrpos($tempFile, '/');
            $newName = substr($tempFile, $positionOfLastSlash);
            $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
            // Validate Size and Extension
            if( $_FILES[$input_name]['size'] > (1024000000))
            {
                $valid = false;
            }
            // only allows certain file extensions
            if( $extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif')
            {
                $valid  = false;
            }
            // If Image file makes it to this point, send file to this directory
            if($valid)
            {
                $image_url = '/img/uploads' . $newName . '.' . $extension;
                move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
                return $image_url;
            }
            else
            {
                return null;
            }
        }
    } else {
        return null;
    }
}

function itemsSave()
{
    $item = new Item();
    $item->item_type = Input::get('item_type');
    $item->headline = Input::get('headline');
    $item->price = Input::get('price');
    $item->date_listed = date('Y-m-d');
    $item->state = Input::get('state');
    $item->county = Input::get('county');
    $item->image_url = saveUploadedImage('image_url');
    $item->description = Input::get('description');
    $item->user_id = Auth::id();
    $item->save();
}


function itemsUpdate($items)
{
    $item = new Item();
    $item->id = $items->attributes['id'];
    $item->item_type = Input::get('item_type');
    $item->headline = Input::get('headline');
    $item->price = Input::get('price');
    $item->state = Input::get('state');
    $item->county = Input::get('county');
    $item->image_url = saveUploadedImage('image_url');
    $item->description = Input::get('description');
    $data['itemUpdateMessage'] = "Item was updated";
    $item->user_id = Auth::id();
    $item->save();
}

function userSave()
{
    $user = new User();
    $user->image_url = saveUploadedImage('image_url');
    $user->username = Input::get('username');
    $user->email = Input::get('email');
    $user->password = Input::get('password');
    $user->date_joined = date('Y-m-d');
    $user->save();
}

function userUpdate($users)
{
    $user = new User();
    $user->id = $users->attributes['id'];
    $user->image_url = saveUploadedImage('image_url');
    $user->username = Input::get('username');
    $user->email = Input::get('email');
    $user->password = Input::get('password');
    $user->save();
}

<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $TOUR_PACKAGE = new TourPackage(NULL);
    $VALID = new Validator();

    $TOUR_PACKAGE->title = mysql_real_escape_string($_POST['title']);
    $TOUR_PACKAGE->price = mysql_real_escape_string($_POST['price']);
    $TOUR_PACKAGE->short_description = mysql_real_escape_string($_POST['short_description']);
    $TOUR_PACKAGE->description = mysql_real_escape_string($_POST['description']);

    $dir_dest = '../../upload/tour-package/';
    $dir_dest_thumb = '../../upload/tour-package/thumb/';
    $dir_dest_thumb1 = '../../upload/tour-package/thumb1/';
    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 577;
        $handle->image_y = 545;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 65;
        $handle->image_y = 65;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 190;
        $handle->image_y = 111;

        $handle->Process($dir_dest_thumb1);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $TOUR_PACKAGE->image_name = $imgName;

    $VALID->check($TOUR_PACKAGE, [
        'title' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
    ]);


    if ($VALID->passed()) {
        $TOUR_PACKAGE->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header("location: ../view-tour-date.php?id=" . $TOUR_PACKAGE->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
//    $result = $TOUR_PACKAGE->create();
//    if ($result) {
//        header("location: ../create-tour-package.php?id=" . $TOUR_PACKAGE->id . "&&message=10");
//    } else {
//        
//    }
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/tour-package/';
    $dir_dest_thumb = '../../upload/tour-package/thumb/';
    $dir_dest_thumb1 = '../../upload/tour-package/thumb1/';
    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 577;
        $handle->image_y = 545;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 65;
        $handle->image_y = 65;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 190;
        $handle->image_y = 111;

        $handle->Process($dir_dest_thumb1);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        
    }

    $TOUR_PACKAGE = new TourPackage($_POST['id']);

    $TOUR_PACKAGE->image_name = $_POST['oldImageName'];
    $TOUR_PACKAGE->title = mysql_real_escape_string($_POST['title']);
    $TOUR_PACKAGE->price = mysql_real_escape_string($_POST['price']);
    $TOUR_PACKAGE->short_description = mysql_real_escape_string($_POST['short_description']);
    $TOUR_PACKAGE->description = mysql_real_escape_string($_POST['description']);


    $VALID = new Validator();

    $VALID->check($TOUR_PACKAGE, [
        'title' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
    ]);


    if ($VALID->passed()) {
        $TOUR_PACKAGE->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $TOUR_PACKAGE = TourPackage::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
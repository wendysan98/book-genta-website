<?php

    $id = $_POST['id'];
    $image = $_POST['img_url'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $qty = $_POST['qty'];

    $response = '';

    if (isset($id) && isset($image) && isset($name) && isset($title) && isset($qty)) {
        
        $response .= '<div class="card text-center">';
        $response .= '<img src="' . $image . '" class="card-img-top" alt="' . $name . '">';
        $response .= '<div class="card-body">';
        $response .= '<h5 class="card-title">' . $name . '</h5>';
        $response .= '<p class="card-text">' . $title . '</p>';
        $response .= '<div class="add-item">';

        if ($qty == 2) {
            // $response .= '<input type="text" value="0" min="0" max="0" disabled>';
            $response .= '<a class="btn disabled-link" data-id="' . $id . '" style="background-color: #ff2c74;" disabled>MAX ORDER LIMIT</a>';
        } 
        else if ($qty == 1) {
            $response .= '<input type="number" value="1" min="1" max="1" disabled>';
            $response .= '<a class="btn" data-role="add-to-cart" data-id="' . $id . '">ADD TO CART</a>';
        } 
        else if ($qty == 0) {
            $response .= '<input type="number" value="1" min="1" max="2" disabled>';
            $response .= '<a class="btn" data-role="add-to-cart" data-id="' . $id . '">ADD TO CART</a>';
        }

        $response .= '</div></div></div>';
    }

    echo $response;
?>
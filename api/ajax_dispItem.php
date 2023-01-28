<?php
    $items = json_decode($_POST['list_item']);

    $response = '';

    if (isset($items)){
        $number = 1;

        // print all item in items
        foreach($items as $item){
            $response .= '<tr id="' . $item->id . '">';
            $response .= '<td>' . $number . '</td>';
            $response .= '<td><img src="' . $item->img_url . '" class="img-fluid" alt="' . $item->name . '"></td>';
            $response .= '<td>' . $item->name . '</td>';
            $response .= '<td><input type="number" value="' . $item->qty . '" min="1" max="2" data-role="qty-cart-item" data-id="' . $item->id . '" disabled></td>';
            $response .= '<td><a class="btn" data-role="delete-cart-item" data-id="' . $item->id . '">Delete</a></td>';
            $response .= '</tr>';

            $number += 1;
        }
    }

    echo $response;
?>
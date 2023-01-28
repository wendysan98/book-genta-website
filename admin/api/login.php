<?php
    include "../../connect.php";

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $result = "";

    if(isset($username) && isset($pass)){
        $result_admin = mysqli_query($conn, "SELECT * FROM bookgenta_admin WHERE username = '$username'");

        if (mysqli_num_rows($result_admin) === 1){
            $result_pass = mysqli_query($conn, "SELECT `password` FROM bookgenta_admin WHERE username = '$username'");

            while($data = mysqli_fetch_array($result_pass)){
                $check_pass = $data['password'];
            }

            if ($pass == $check_pass) {
                $result .= "1";
            } else {
                $result .= "2";
            }
        } else {
            $result .= "3";
        }
    } else {
        $result .= "4";
    }

    return $result;
?>
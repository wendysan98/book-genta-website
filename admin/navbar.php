<?php
    include "../connect.php";
?>

<style>
    .navbar {
        background-color: #586dc4;
        width: 100vw;
    }

    .nav-link {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: #EDE7DB !important;
        margin-left: 1.2rem;
        font-size: 1.3rem !important;
    }

    #logout {
        background-color: #ff2c74;
        color: #fff;
        padding: 0.5rem;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        border: none;
        border-radius: 1.25rem;
        box-shadow: 
            2.5px 2.5px 7px rgba(0, 0, 0, 0.25),
            inset 2px 2px 5px rgba(255, 255, 255, 0.25),
            inset -3px -3px 5px rgba(0, 0, 0, 0.5);
    }

    .nav-link:hover {
        transform: translateY(-2px);
    }

    .swal2-popup {
        font-family: 'Poppins', sans-serif;
    }

    .swal2-confirm {
        background-color: #1f83f2 !important;
    }

    .swal2-deny {
        background-color: #ff2c74 !important;
    }

    .swal2-confirm, .swal2-deny {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 1.25rem;
        color: #fff;
        border-radius: 2rem !important;
        box-shadow: 
            2.5px 2.5px 7px rgba(0, 0, 0, 0.25),
            inset 2px 2px 5px rgba(255, 255, 255, 0.25),
            inset -3px -3px 5px rgba(0, 0, 0, 0.5);

        -webkit-transition: all .4s ease-out 0s;
        -o-transition: all .4s ease-out 0s;
        -moz-transition: all .4s ease-out 0s;
        transition: all .4s ease-out 0s;
    }

    .swal2-confirm:active, .swal2-deny:active,
    .swal2-confirm:focus, .swal2-deny:focus {
        outline: none;
        box-shadow: 
            2.5px 2.5px 7px rgba(0, 0, 0, 0.25),
            inset 2px 2px 5px rgba(255, 255, 255, 0.25),
            inset -3px -3px 5px rgba(0, 0, 0, 0.5);
    }

    .swal2-confirm:hover, .swal2-deny:hover {
        letter-spacing: 0.156rem;
    }
</style>

<nav class="navbar fixed-top navbar-expand-xl navbar-light px-3" style="width: 100%;">
    <!-- Logo -->
    <a class="navbar-brand" href="home.php">
        <img src="../assets/image/uc.png" alt="Logo Genta" class="img-fluid" width="50" class="d-inline-block align-top">
    </a>

    <!-- Toggle Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation Menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item mt-1">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li> 
            <li class="nav-item mt-1">
                <a class="nav-link active" aria-current="page" href="item.php">Item</a>
            </li> 
            <li class="nav-item mt-1">
                <a class="nav-link active" aria-current="page" href="order.php">Order</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link active">
                    <button id="logout" class="px-3 logout">LOG OUT</button>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function(){
        $("#logout").click(function(){
            Swal.fire({
                icon: 'warning', 
                title: 'Are you sure you want to log out?',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'No',
                denyButtonText: `Log Out`,
            }).then((result) => {
                if (result.isConfirmed) {
                } else if (result.isDenied) {
                    window.location.href = 'api/logout.php';
                }
            })
        });
    });
</script>
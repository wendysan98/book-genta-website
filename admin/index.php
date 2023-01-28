<?php
    include "../connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GENTA Petra | Pers Mahasiswa</title>
    <?php include 'links.php' ?>
</head>
<body>

    <!-- ===== MAIN ===== -->
    <section class="main container">
        <div class="row" id="icon">
            <img src="../assets/image/uc.png" alt="icon genta">
        </div>
        <div class="row title">
            <h1>Login Admin<br><span>GET YOUR GENTA</span></h1>
        </div>
        <div class="row content">
            <div class="col-10 col-md-6">
                <form method="post">
                    <input type="text" name="username" id="username" class="form-control login mx-auto" placeholder="Username" required>
                    <input type="password" name="pass" id="pass" class="form-control login mt-3 mx-auto" placeholder="Password" required>
                    <div class="col-12 row justify-content-center mx-auto mt-3">
                        <button type="button" name="btnSubmit" class="btn mt-3" id="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                $("#submit").html("Logging In...");
                $("#submit").css("background-color", "#1f83f2");
            
                var username = $("#username").val();
                var pass = $("#pass").val();

                if(username === "" || pass === "") {
                    Swal.fire({
                        title: "Login Failed!",
                        text: "Silhakan mengisi Username dan Password.",
                        icon: "error", 
                        timer: 3000,
                        allowOutsideClick: false,
                        confirmButtonText:'OK'
                    });
                } else {
                    $.ajax({
                        url: 'api/login.php',
                        type: 'POST',
                        data: {
                            username: username,
                            pass: pass
                        },
                        success: function(res) {
                            if (res == '1') {
                                Swal.fire({
                                    title: "Welcome!",
                                    icon: "success", 
                                    timer: 3000,
                                    allowOutsideClick: false,
                                    confirmButtonText:'OK'
                                });
                                window.setTimeout(function(){ 
                                    window.location.href = 'http://localhost/Persma/Book-Genta-Website/';
                                } ,3000);
                            } else if (res == '2') {
                                Swal.fire({
                                    title: "Login Failed!",
                                    text: "Password Anda salah. Silahkan cek kembali password Anda.",
                                    icon: "error", 
                                    timer: 3000,
                                    allowOutsideClick: false,
                                    confirmButtonText:'OK'
                                });
                                window.setTimeout(function(){ 
                                    location.reload();
                                } ,3000);
                            } else if (res == '3') {
                                Swal.fire({
                                    title: "Login Failed!",
                                    text: "Username Anda tidak terdaftar. Silahkan menghubungi Admin untuk didaftarkan.",
                                    icon: "error", 
                                    timer: 3000,
                                    allowOutsideClick: false,
                                    confirmButtonText:'OK'
                                });
                                window.setTimeout(function(){ 
                                    location.reload();
                                } ,3000);
                            } else if (res == '4') {
                                Swal.fire({
                                    title: "Error!",
                                    text: "Login Error",
                                    icon: "error", 
                                    timer: 3000,
                                    allowOutsideClick: false,
                                    confirmButtonText:'OK'
                                });
                                window.setTimeout(function(){ 
                                    location.reload();
                                } ,3000);
                            } 
                        },
                        error: function(res) {
                            alert('error');
                        }
                    });
                }

                $("#submit").html("Log In");
                $("#submit").css("background-color", "#4357AD");
            });
        });
    </script>

</body>
</html>
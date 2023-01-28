<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GENTA Petra | Pers Mahasiswa</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Persma Universitas Kristen Petra" name="author"/>
    <meta content="Photostory Pers Mahasiswa Universitas Kristen Petra" name="description">
    <meta content="Persma, Pers Mahasiswa, Genta, Majalah Genta, UK Petra, Universitas Kristen Petra" name="keywords">

    <!-- Icon -->
    <link href="assets/image/uc.png" rel="icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="assets/css/fonts.css" rel="stylesheet">
    <link href="assets/css/style-main.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- jQuery Spinner -->
    <link href="assets/css/jquery.nice-number.css" rel="stylesheet">
    <script src="assets/js/jquery.nice-number.js"></script>
</head>
<body>

    <!-- ===== TITLE ===== -->
    <section class="title">
        <div class="container">
            <h1>GET YOUR <br> <span>GENTA</span></h1>
        </div>
    </section>
 
    <!-- ===== MAIN ===== -->
    <section class="main">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 px-5">
            <div id="item-5" class="card-col col">
                <div class="card text-center">
                    <img src="assets/image/cover-genta-184.jpg" class="card-img-top" alt="Genta 184">
                    <div class="card-body">
                        <h5 data-target="title" class="card-title">GENTA 184</h5>
                        <p class="card-text">Through the Telescope</p>
                        <div class="add-item">
                            <input type="number" value="1" min="1" max="2" disabled>
                            <a class="btn" data-role="add-to-cart" data-id="5">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="item-4" class="card-col col">
                <div class="card text-center">
                    <img src="assets/image/cover-genta-183.jpg" class="card-img-top" alt="Genta 183">
                    <div class="card-body">
                        <h5 class="card-title">GENTA 183</h5>
                        <p class="card-text">Pijar Lentera</p>
                        <div class="add-item">
                            <input type="number" value="1" min="1" max="2" disabled>
                            <a class="btn" data-role="add-to-cart" data-id="4">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="item-3" class="card-col col">
                <div class="card text-center">
                    <img src="assets/image/cover-genta-182.jpg" class="card-img-top" alt="Genta 182">
                    <div class="card-body">
                        <h5 class="card-title">GENTA 182</h5>
                        <p class="card-text">enLIGHTen</p>
                        <div class="add-item">
                            <input type="number" value="1" min="1" max="2" disabled>
                            <a class="btn" data-role="add-to-cart" data-id="3">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="item-2" class="card-col col">
                <div class="card text-center">
                    <img src="assets/image/cover-genta-181.jpg" class="card-img-top" alt="Genta 181">
                    <div class="card-body">
                        <h5 class="card-title">GENTA 181</h5>
                        <p class="card-text">Fireflies</p>
                        <div class="add-item">
                            <input type="number" value="1" min="1" max="2" disabled>
                            <a class="btn" data-role="add-to-cart" data-id="2">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="item-1" class="card-col col">
                <div class="card text-center">
                    <img src="assets/image/cover-genta-180.jpg" class="card-img-top" alt="Genta 180">
                    <div class="card-body">
                        <h5 class="card-title">GENTA 180</h5>
                        <p class="card-text">Merajut Diri</p>
                        <div class="add-item">
                            <input type="number" value="1" min="1" max="2" disabled>
                            <a class="btn" data-role="add-to-cart" data-id="1">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <!-- Info Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="border: none !important;">
                    <h5 class="modal-title">PANDUAN PENGGUNAAN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4">
                    <div class="row">
                        <ol>
                            <li>Pilih majalah yang mau Anda pesan. Satu majalah GENTA hanya bisa dipesan paling banyak <b>2 buku</b>. Anda bisa mengubah-ubah jumlah buku yang mau dipesan dengan menekan tombol "-" atau "+".</li>
                            <li>Setelah menentukan jumlah majalah, Anda bisa menekan tombol <b>ADD TO CART</b> untuk ditambahkan ke keranjang Anda.</li>
                            <li>Untuk melihat isi keranjang Anda bisa menekan ikon tas belanja yang terletak di pojok kanan bawah layar <em>device</em> Anda.</li>
                            <li>Di halaman keranjang, akan ditampilkan majalah yang sudah Anda tambahkan sebelumnya. Anda bisa mengubah-ubah jumlah majalah dan menghapusnya apabila tidak jadi dipesan.</li>
                            <li>Setelah memastikan majalah yang Anda pesan, Anda bisa <b>mengisi data-data di bagian <em>Checkout</em></b> agar pesanan Anda bisa segera diproses.</li>
                            <li>Apabila sudah mengisi semua data pada <em>Checkout</em>, silakan menekan tombol <b>SUBMIT</b> agar pesanan Anda tersimpan.</li>
                        </ol>
                    </div>
                    <div class="row">
                        <p class="text-center">
                            <b>Jangan lupa untuk mengambil pesanan Anda sesuai dengan lokasi dan waktu pengambilan yaa..<br>Terima kasih 🙏</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="border: none !important;">
                    <h5 class="modal-title">CART</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-striped bg-white m-0 p-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>GAMBAR</th>
                                        <th>NAMA</th>
                                        <th>JUMLAH</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody id="cart">
                                    <tr>
                                        <td colspan=5>Cart is empty.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-data row row-cols-1 row-cols-md-2 d-none">
                        <div class="col-12">
                            <h5><span>CHECKOUT</span></h5>
                        </div>
                        <div class="col-12">
                            <p class="text-center">Silahkan mengisi <em>form</em> berikut agar orderan Anda bisa diproses.</p>
                        </div>
                        <div class="col">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="col">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="col">
                            <label for="date-pickup" class="form-label">Tanggal Pickup</label>
                            <input type="date" class="form-control" id="date-pickup" required>
                        </div>
                        <div class="col">
                            <label for="time-pickup" class="form-label">Waktu Pickup</label>
                            <select id="time-pickup" class="form-select" required>
                                <option value="">-- Pilih Waktu Pickup --</option>
                                <option value="1">09:30:00</option>
                                <option value="2">10:30:00</option>
                                <option value="3">11:30:00</option>
                                <option value="4">12:30:00</option>
                                <option value="5">13:30:00</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="location-pickup" class="form-label">Tempat Pickup</label>
                            <select id="location-pickup" class="form-select" required>
                                <option value="">-- Pilih Tempat Pickup --</option>
                                <option value="1">Kantin Gedung P</option>
                                <option value="2">Kolam Jodoh</option>
                                <option value="3">Kantin Gedung Q</option>
                                <option value="4">Perpustakaan</option>
                                <option value="5">Landmark I'M PETRANESIAN</option>
                            </select>
                        </div>
                        <div class="btn-submit col-12">
                            <div class="container">
                                <a id="submit" class="btn">SUBMIT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Exit Button -->
    <a href="https://genta.petra.ac.id/" class="main-button d-flex align-items-center justify-content-center" style="left: 15px;"><i class="fas fa-arrow-left"></i></a>

    <!-- Info Button -->
    <a href="#" class="main-button d-flex align-items-center justify-content-center" style="left: 70px;" data-bs-toggle="modal" data-bs-target="#infoModal"><i class="fas fa-info"></i></a>

    <!-- Cart Button -->
    <a href="#" class="main-button d-flex align-items-center justify-content-center" style="right: 15px;" data-bs-toggle="modal" data-bs-target="#cartModal"><i class="fas fa-shopping-bag"></i></a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        class Item {
            constructor(id, img_url, name, title, qty) {
                this.id = id;
                this.img_url = img_url;
                this.name = name;
                this.title = title;
                this.qty = qty;
            }
            update_qty(qty, x){
                // update qty whenever item added from main
                if (x == "0"){
                    this.qty = parseInt(this.qty) + parseInt(qty);
                }

                // update qty when item qty is changed on cart
                if (x == "1"){
                    this.qty = parseInt(qty);
                }
            }
        }

        $(document).ready(function(){
            // activate jquery spinner
            $('input[type="number"]').niceNumber({
                type: 'main'
            });

            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if(month < 10){
                month = '0' + month.toString();
            }
            if(day < 10){
                day = '0' + day.toString();
            }
            
            var maxDate = year + '-' + month + '-' + day;
            $('#date-pickup').attr('min', maxDate); // restrict past dates

            const list_item = []; // contain all item in cart

            // add item to cart
            $(document).on("click", "a[data-role=add-to-cart]", function(e){
                e.preventDefault();

                // get values
                var id = $(this).data('id');
                var img_url = $('#item-'+id).children().children('img').attr("src");
                var name = $('#item-'+id).children().children('div[class=card-body]').children('h5').text();
                var title = $('#item-'+id).children().children('div[class=card-body]').children('p').text();
                var qty = $('#item-'+id).children().children('div[class=card-body]').children('div[class=add-item]').children('div[class=nice-number]').children('input').val();

                var index = 0;
                var is_found = 0;

                // search item in list_item
                for (let i = 0; (i < list_item.length) && (is_found != 1); i++){
                    // if item is already in list save the index
                    if (list_item[i].id == id){
                        index = i;
                        is_found = 1;
                    }
                }

                // if new item then create item and add to list_item
                if (is_found == 0){
                    let new_item = new Item(id, img_url, name, title, qty);
                    list_item.push(new_item);

                    // refresh item
                    $.ajax({
                        type: 'POST',
                        data: {
                            id : id,
                            img_url : img_url,
                            name : name,
                            title : title,
                            qty : qty
                        },
                        url: 'api/ajax_refreshItem.php',
                        success: function(res) {
                            // display result
                            $('#item-'+id).html(res);
                        }
                    });
                } else {
                    list_item[index].update_qty(qty, "0"); // update item quantity

                    // refresh item
                    $.ajax({
                        type: 'POST',
                        data: {
                            id : id,
                            img_url : img_url,
                            name : name,
                            title : title,
                            qty : list_item[index].qty
                        },
                        url: 'api/ajax_refreshItem.php',
                        success: function(res) {
                            // display result
                            $('#item-'+id).html(res);
                        }
                    });
                }

                // activate jquery spinner
                $('input[type="number"]').niceNumber({
                    type: 'main'
                });

                // display item in cart using ajax
                if (list_item.length > 0) {
                    var json_listItem = JSON.stringify(list_item);

                    $.ajax({
                        type: 'POST',
                        data: {
                            list_item : json_listItem
                        },
                        url: 'api/ajax_dispItem.php',
                        success: function(res) {
                            // display result
                            $('#cart').html(res);

                            // activate jquery spinner
                            $('input[type="number"]').niceNumber({
                                type: 'cart'
                            });

                            // reveal checkout form
                            $('.form-data').removeClass('d-none');

                            // return input to its initial value
                            $('#item-'+id).children().children('div[class=card-body]').children('div[class=add-item]').children('div[class=nice-number]').children('input').val('1');

                            // success notification
                            sm = 'Majalah ' + name + ' berhasil ditambahkan ke dalam cart Anda.';
                            Swal.fire({
                                title: 'Successfully Added', 
                                icon: 'success', 
                                text: sm, 
                                allowOutsideClick: false,
                                confirmButtonText:'OK'
                            });
                        }
                    });
                }
            });

            // delete item in cart
            $(document).on("click", "a[data-role=delete-cart-item]", function(){
                // get item id
                var id = $(this).data('id');

                var index = 0;
                var is_found = 0;

                // search item in list_item
                for (let i = 0; (i < list_item.length) && (is_found != 1); i++){
                    // if item is found in list save the index
                    if (list_item[i].id == id){
                        index = i;
                        is_found = 1;
                    }
                }

                // refresh item in homepage
                $.ajax({
                    type: 'POST',
                    data: {
                        id : list_item[index].id,
                        img_url : list_item[index].img_url,
                        name : list_item[index].name,
                        title : list_item[index].title,
                        qty : 0
                    },
                    url: 'api/ajax_refreshItem.php',
                    success: function(res) {
                        // display result
                        $('#item-'+id).html(res);

                        // activate jquery spinner
                        $('input[type="number"]').niceNumber({
                            type: 'main'
                        });
                    }
                });

                // delete item from array
                list_item.splice(index, 1);

                // display item using ajax
                if (list_item.length > 0) {
                    var json_listItem = JSON.stringify(list_item);

                    $.ajax({
                        type: 'POST',
                        data: {
                            list_item : json_listItem
                        },
                        url: 'api/ajax_dispItem.php',
                        success: function(res) {
                            // display result
                            $('#cart').html(res);

                            // activate jquery spinner
                            $('input[type="number"]').niceNumber();
                        }
                    });
                } else {
                    $('#cart').html('<tr><td colspan=5>Cart is empty.</td></tr>');

                    // hide checkout form
                    if (!($('.form-data').hasClass('d-none'))){
                        $('.form-data').addClass('d-none');
                    }
                }
            });

            // change item qty directly on input box (cart)
            $(document).on('change', 'input[data-role=qty-cart-item]', function(){
                // get item id
                var id = $(this).data('id');
                var new_qty = $(this).val();

                var index = 0;
                var is_found = 0;

                // search item in list_item
                for (let i = 0; (i < list_item.length) && (is_found != 1); i++){
                    // if item is found in list save the index
                    if (list_item[i].id == id){
                        index = i;
                        is_found = 1;
                    }
                }
                list_item[index].update_qty(new_qty, "1");  // update item qty
            });

            // change item qty using plus/minus button (cart)
            $(document).on('click', 'button[data-btn-loc=cart]', function(){
                var icon = $(this).text();
                
                // initialize
                var id = 0;
                var new_qty = 0;
                
                // if minus button is pressed
                if (icon == "-") {
                    new_qty = $(this).next().val();
                    id = $(this).next().attr("data-id");
                }

                // if plus button is pressed
                if (icon == "+") {
                    new_qty = $(this).prev().val();
                    id = $(this).prev().attr("data-id");
                }

                var index = 0;
                var is_found = 0;

                // search item in list_item
                for (let i = 0; (i < list_item.length) && (is_found != 1); i++){
                    // if item is found in list save the index
                    if (list_item[i].id == id){
                        index = i;
                        is_found = 1;
                    }
                }
                list_item[index].update_qty(new_qty, "1");  // update item qty

                // refresh item in homepage
                $.ajax({
                    type: 'POST',
                    data: {
                        id : list_item[index].id,
                        img_url : list_item[index].img_url,
                        name : list_item[index].name,
                        title : list_item[index].title,
                        qty : list_item[index].qty
                    },
                    url: 'api/ajax_refreshItem.php',
                    success: function(res) {
                        // display result
                        $('#item-'+id).html(res);

                        // activate jquery spinner
                        $('input[type="number"]').niceNumber({
                            type: 'main'
                        });
                    }
                });
            });

            // submit
            $('#submit').on('click', function(e){
                e.preventDefault();

                var error_messages = [];

                // if cart is not empty
                if (list_item.length > 0){
                    // name
                    var name = $("#name").val();
                    if (name == '' || name == null) {
                        error_messages.push("Nama Lengkap");
                    }

                    // email
                    var email = $("#email").val();
                    if (email == '' || email == null) {
                        error_messages.push("Email");
                    }

                    // date pickup
                    var date_pickup = $('#date-pickup').val();
                    if (date_pickup == '' || date_pickup == null) {
                        error_messages.push("Tanggal Pickup");
                    }

                    // time pickup
                    var time_pickup = $('#time-pickup option:selected').text();
                    var time_pickup_val = $("#time-pickup").val();
                    if (time_pickup_val == '') {
                        error_messages.push("Waktu Pickup");
                    }

                    // location pickup
                    var location_pickup = $('#location-pickup option:selected').text();
                    var location_pickup_val = $("#location-pickup").val();
                    if (location_pickup_val == '') {
                        error_messages.push("Tempat Pickup");
                    }

                    // if user didn't fill all the input form, then diplay error message
                    if (error_messages.length > 0) {
                        var message_text = "Silahkan lengkapi data: ";

                        // generate error messages
                        if (error_messages.length > 2){
                            for (let i = 0; i < error_messages.length; i++){
                                if (i != error_messages.length - 1){
                                    message_text += (error_messages.at(i) + ", ");
                                } else {
                                    message_text += ("dan " + error_messages.at(i) + ".");
                                }
                            }
                        } else if (error_messages.length == 2) {
                            message_text += (error_messages.at(0) + " dan " + error_messages.at(1) + ".");
                        } else if (error_messages.length == 1) {
                            message_text += (error_messages.at(0) + ".");
                        } 

                        Swal.fire({
                            title:'Data not Complete!',
                            text: message_text,
                            icon:'error',
                            allowOutsideClick: false,
                            confirmButtonText:'Close'
                        });
                    } else {
                        Swal.fire({
                            title: 'Order Saved Successfully', 
                            icon: 'success', 
                            text: 'Order berhasil disimpan. Jangan lupa untuk mengambil orderan Anda sesuai dengan waktu dan tempat yang sudah diinputkan!', 
                            allowOutsideClick: false,
                            confirmButtonText:'OK', 
                            willClose:() => {
                                window.location='index.php';
                            }
                        });
                    }
                } else {
                    Swal.fire({
                        title:'Cart is Empty!',
                        text: 'Pastikan Anda sudah memilih majalah sebelum melakukan submit.',
                        icon:'error',
                        allowOutsideClick: false,
                        confirmButtonText:'Close'
                    });
                }
            });
        });
    </script>

</body>
</html>
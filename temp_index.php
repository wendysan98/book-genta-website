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
    <link href="assets/css/style.css" rel="stylesheet">

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
                            <input type="number" value="1" min="1">
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
                            <input type="number" value="1" min="1">
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
                            <input type="number" value="1" min="1">
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
                            <input type="number" value="1" min="1">
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
                            <input type="number" value="1" min="1">
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
                    <!-- <div class="row">
                        <h1 class="text-center py-3">PANDUAN PENGGUNAAN</h1>
                    </div> -->
                    <div class="row">
                        <ol>
                            <li>Cras ac diam ornare, suscipit ex vel, ultricies neque. Curabitur pellentesque vehicula ligula eget ultricies. Etiam tempus arcu suscipit justo auctor, a vehicula dui elementum.</li>
                            <li>Proin eget tellus porta, viverra nisi in, pellentesque orci. Vestibulum neque orci, convallis sit amet bibendum ac, scelerisque id eros.</li>
                            <li>Praesent sagittis, odio non condimentum laoreet, diam lacus iaculis purus, quis placerat urna augue vitae turpis. Morbi sollicitudin urna nec sagittis pellentesque.</li>
                            <li>Curabitur eu eleifend leo. Sed ut tortor ac mauris laoreet faucibus. Quisque eget molestie orci. Nunc eget ligula luctus, porttitor purus nec, pretium nisl. Sed pulvinar lectus nisl, in semper orci tempus nec. Aliquam erat volutpat. </li>
                        </ol>
                    </div>
                    <div class="row">
                        <p class="text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra enim sapien, eu lacinia purus malesuada id.
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
                                    <!-- <tr>
                                        <td colspan=5>Cart is empty.</td>
                                    </tr> -->
                                    <tr>
                                        <td>1</td>
                                        <td><img src="assets/image/cover-genta-184.jpg" class="img-fluid" alt="Genta 184"></td>
                                        <td>GENTA 184</td>
                                        <td><input type="number" value="1" min="1"></td>
                                        <td><a class="btn" data-role="delete-cart-item">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="assets/image/cover-genta-183.jpg" class="img-fluid" alt="Genta 183"></td>
                                        <td>GENTA 183</td>
                                        <td><input type="number" value="1" min="1"></td>
                                        <td><a class="btn" data-role="delete-cart-item">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="assets/image/cover-genta-182.jpg" class="img-fluid" alt="Genta 182"></td>
                                        <td>GENTA 182</td>
                                        <td><input type="number" value="1" min="1"></td>
                                        <td><a class="btn" data-role="delete-cart-item">Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-data row row-cols-1 row-cols-md-2">
                        <div class="col-12">
                            <p><span>CHECKOUT</span></p>
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
                                <option value="0">-- Pilih Waktu Pickup --</option>
                                <option value="1">09:30:00</option>
                                <option value="2">10:30:00</option>
                                <option value="3">11:30:00</option>
                                <option value="4">12:30:00</option>
                                <option value="5">13:30:00</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="place-pickup" class="form-label">Tempat Pickup</label>
                            <select id="place-pickup" class="form-select" required>
                                <option value="0">-- Pilih Tempat Pickup --</option>
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
            constructor(id, img_url, name, qty) {
                this.id = id;
                this.img_url = img_url;
                this.name = name;
                this.qty = qty;
            }
            update_qty(qty){
                this.qty = parseInt(this.qty) + parseInt(qty);
            }
        }

        $(document).ready(function(){
            // activate jquery spinner
            $('input[type="number"]').niceNumber();

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

            const list_item = [];

            // add to cart
            $(document).on("click", "a[data-role=add-to-cart]", function(){
                // get values
                var id = $(this).data('id');
                var img_url = $('#item-'+id).children().children('img').attr("src");
                var name = $('#item-'+id).children().children('div[class=card-body]').children('h5').text();
                var qty = $('#item-'+id).children().children('div[class=card-body]').children('div[class=add-item]').children('div[class=nice-number]').children('input').val();

                var index = 0;
                var is_found = 0;

                // search item on list_item
                for (let i = 0; (i < list_item.length) && (is_found != 1); i++){
                    // if item is already in list save the index
                    if (list_item[i].id == id){
                        index = i;
                        is_found = 1;
                    }
                }

                // if new item then create item and add to list_item
                if (is_found == 0){
                    let new_item = new Item(id, img_url, name, qty);
                    list_item.push(new_item);
                } else {
                    list_item[index].update_qty(qty); // update item quantity
                }

                // ada item to cart with ajax
                if (list_item.length > 0) {
                    var json_listItem = JSON.stringify(list_item);

                    $.ajax({
                        type: 'POST',
                        data: {
                            list_item : json_listItem
                        },
                        url: 'api/ajax_addToCart.php',
                        success: function(res) {
                            $('#cart').html(res);

                            // activate jquery spinner
                            $('input[type="number"]').niceNumber();
                        }
                    });
                }
            });
        });
    </script>

</body>
</html>
<?php
    include "../connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GENTA Petra | Pers Mahasiswa</title>
    <?php include 'links.php'; include 'navbar.php'; ?>
</head>
<body>

    <!-- ===== MAIN ===== -->
    <section class="d-flex align-items-center justify-content-center flex-column">
        <!-- Title -->
        <div class="container row title">
            <h1>List Order</h1>
        </div>

        <!-- Table List Order -->
        <div class="container row my-5">
            <div class="table-responsive">
                <table id="data-table-item" class="table text-center table-striped bg-white m-0 p-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Tempat</th>
                            <th>Order</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="list-item">
                        <tr id="order-1">
                            <td>1</td>
                            <td data-target="nama">Wendy Santoso</td>
                            <td data-target="email">c14200036@john.petra.ac.id</td>
                            <td data-target="tanggal">20-07-2022</td>
                            <td data-target="waktu">12:30:00</td>
                            <td data-target="tempat">Kolam Jodoh</td>
                            <td data-target="order">2x GENTA 184, 1x GENTA 182</td>
                            <td data-target="total">3</td>
                            <td data-target="status">Sudah Terima</td>
                        </tr>
                        <tr id="order-2">
                            <td>2</td>
                            <td data-target="nama">Juan Christopher Ryan Tjamalla</td>
                            <td data-target="email">c14200009@john.petra.ac.id</td>
                            <td data-target="tanggal">29-07-2022</td>
                            <td data-target="waktu">10:30:00</td>
                            <td data-target="tempat">Kantin Gedung P</td>
                            <td data-target="order">1x GENTA 184, 1x GENTA 183, 1x GENTA 182, 1x GENTA 181</td>
                            <td data-target="total">4</td>
                            <td data-target="status"><a class="btn" data-role="confirm-order" data-id="2">Confirm</a></td>
                        </tr>
                        <tr id="order-3">
                            <td>3</td>
                            <td data-target="nama">Clarissa Angelia</td>
                            <td data-target="email">c14200047@john.petra.ac.id</td>
                            <td data-target="tanggal">01-08-2022</td>
                            <td data-target="waktu">11:00:00</td>
                            <td data-target="tempat">Kantin Gedung Q</td>
                            <td data-target="order">1x GENTA 184</td>
                            <td data-target="total">1</td>
                            <td data-target="status"><a class="btn" data-role="confirm-order" data-id="3">Confirm</a></td>
                        </tr>
                        <tr id="order-4">
                            <td>4</td>
                            <td data-target="nama">Alvin Adhitya Arta Raharja</td>
                            <td data-target="email">c14200033@john.petra.ac.id</td>
                            <td data-target="tanggal">10-08-2022</td>
                            <td data-target="waktu">13:30:00</td>
                            <td data-target="tempat">Perpustakaan</td>
                            <td data-target="order">1x GENTA 183, 1x GENTA 182</td>
                            <td data-target="total">2</td>
                            <td data-target="status"><a class="btn" data-role="confirm-order" data-id="4">Confirm</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('#data-table-item').DataTable();
        });

        // confirm order
        $(document).on("click", "a[data-role=confirm-order]", function(){
            var id = $(this).data('id');

            Swal.fire({
                title: 'Data Updated Successfully', 
                icon: 'success', 
                text: 'Perubahan data berhasil disimpan!', 
                timer: 3000,
                confirmButtonText:'OK',
            });
        });
    </script>

</body>
</html>
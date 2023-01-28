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
            <h1>List Item</h1>
        </div>

        <!-- Add Button -->
        <div class="container row title">
            <div class="col-12 row justify-content-center mx-auto">
                <button type="button" name="btnAddNewItem" class="btn" id="add-item" style="background: #7FD1AE; color: #384B42;" data-bs-toggle="modal" data-bs-target="#addModal">Add New Item</button>
            </div>
        </div>

        <!-- Table List Item -->
        <div class="container row my-5">
            <div class="table-responsive">
                <table id="data-table-item" class="table text-center table-striped bg-white m-0 p-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Edisi</th>
                            <th>Tema</th>
                            <th>Jumlah</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="list-item">
                        <tr id="5">
                            <td>1</td>
                            <td data-target="gambar"><img src="uploads/cover-genta-184.jpg" class="img-fluid" alt="Genta 184"></td>
                            <td data-target="edisi">GENTA 184</td>
                            <td data-target="tema">Through the Telescope</td>
                            <td data-target="jumlah">50</td>
                            <td><a class="btn" data-role="edit-item" data-id="5" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a></td>
                            <td><a class="btn" data-role="delete-item" data-id="5">Delete</a></td>
                        </tr>
                        <tr id="4">
                            <td>2</td>
                            <td data-target="gambar"><img src="uploads/cover-genta-183.jpg" class="img-fluid" alt="Genta 183"></td>
                            <td data-target="edisi">GENTA 183</td>
                            <td data-target="tema">Pijar Lentera</td>
                            <td data-target="jumlah">32</td>
                            <td><a class="btn" data-role="edit-item" data-id="4" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a></td>
                            <td><a class="btn" data-role="delete-item" data-id="4">Delete</a></td>
                        </tr>
                        <tr id="3">
                            <td>3</td>
                            <td data-target="gambar"><img src="uploads/cover-genta-182.jpg" class="img-fluid" alt="Genta 182"></td>
                            <td data-target="edisi">GENTA 182</td>
                            <td data-target="tema">enLIGHTen</td>
                            <td data-target="jumlah">15</td>
                            <td><a class="btn" data-role="edit-item" data-id="3" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a></td>
                            <td><a class="btn" data-role="delete-item" data-id="3">Delete</a></td>
                        </tr>
                        <tr id="2">
                            <td>4</td>
                            <td data-target="gambar"><img src="uploads/cover-genta-181.jpg" class="img-fluid" alt="Genta 181"></td>
                            <td data-target="edisi">GENTA 181</td>
                            <td data-target="tema">Fireflies</td>
                            <td data-target="jumlah">20</td>
                            <td><a class="btn" data-role="edit-item" data-id="2" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a></td>
                            <td><a class="btn" data-role="delete-item" data-id="2">Delete</a></td>
                        </tr>
                        <tr id="1">
                            <td>5</td>
                            <td data-target="gambar"><img src="uploads/cover-genta-180.jpg" class="img-fluid" alt="Genta 180"></td>
                            <td data-target="edisi">GENTA 180</td>
                            <td data-target="tema">Merajut Diri</td>
                            <td data-target="jumlah">10</td>
                            <td><a class="btn" data-role="edit-item" data-id="1" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a></td>
                            <td><a class="btn" data-role="delete-item" data-id="1">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="border: none !important;">
                    <h5 class="modal-title">EDIT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4">
                    <div class="form-data row row-cols-1">
                        <div class="col d-flex justify-content-center" style="margin-top: 0;">
                            <img src="" alt="cover majalah" id="cover">
                        </div>
                        <div id="edit-gambar" class="col">
                            <div class="container">
                                <a id="btn-edit-gambar" class="btn" style="background-color: #00C9AF; color: #384B42; margin: 0;">Edit Picture</a>
                            </div>
                        </div>
                        <div id="cancel-edit" class="col d-none">
                            <div class="container">
                                <a id="btn-cancel-edit" class="btn" style="background-color: #C25450; margin: 0;">Cancel</a>
                            </div>
                        </div>
                        <div id="input-gambar" class="col d-none">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" style="padding: 0.3rem 0.75rem;" required>
                        </div>
                        <div class="col">
                            <label for="edisi" class="form-label">Edisi</label>
                            <input type="number" class="form-control" id="edisi" required>
                        </div>
                        <div class="col">
                            <label for="tema" class="form-label">Tema</label>
                            <input type="text" class="form-control" id="tema" required>
                        </div>
                        <div class="col">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" required>
                        </div>
                        <div class="btn-submit col">
                            <div class="container">
                                <a id="save" class="btn" data-id="">SAVE CHANGES</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="border: none !important;">
                    <h5 class="modal-title">ADD NEW ITEM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4">
                    <div class="form-data row row-cols-1">
                        <div class="col" style="margin-top: 0;">
                            <label for="add-gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="add-gambar" style="padding: 0.3rem 0.75rem;" required>
                        </div>
                        <div class="col">
                            <label for="add-edisi" class="form-label">Edisi</label>
                            <input type="number" class="form-control" id="add-edisi" required>
                        </div>
                        <div class="col">
                            <label for="add-tema" class="form-label">Tema</label>
                            <input type="text" class="form-control" id="add-tema" required>
                        </div>
                        <div class="col">
                            <label for="add-jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="add-jumlah" required>
                        </div>
                        <div class="btn-submit col">
                            <div class="container">
                                <a id="submit-item" class="btn">SUBMIT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('#data-table-item').DataTable();
        });

        // edit item
        $(document).on("click", "a[data-role=edit-item]", function(){
            // get values
            var id = $(this).data('id');
            var gambar = $('#'+id).children('td[data-target=gambar]').children().attr('src');
            var edisi = $('#'+id).children('td[data-target=edisi]').text();
            var tema = $('#'+id).children('td[data-target=tema]').text();
            var jumlah = $('#'+id).children('td[data-target=jumlah]').text();

            // append value to input field
            $('#cover').attr('src', gambar);
            $('#edisi').val(edisi.substr(6));
            $('#tema').val(tema);
            $('#jumlah').val(jumlah);
            $('#save').attr('data-id', id);
        });

        // edit picture
        $("#btn-edit-gambar").on("click", function(){
            // hide button edit picture
            if (!($('#edit-gambar').hasClass('d-none'))){
                $('#edit-gambar').addClass('d-none');
            }

            // reveal button cancel and input picture file
            if (($('#cancel-edit').hasClass('d-none'))){
                $('#cancel-edit').removeClass('d-none');
            }
            if (($('#input-gambar').hasClass('d-none'))){
                $('#input-gambar').removeClass('d-none');
            }
        });

        // cancel edit picture
        $("#btn-cancel-edit").on("click", function(){
            // reveal edit picture
            if (($('#edit-gambar').hasClass('d-none'))){
                $('#edit-gambar').removeClass('d-none');
            }

            // hide cancel and input picture file
            if (!($('#cancel-edit').hasClass('d-none'))){
                $('#cancel-edit').addClass('d-none');
            }
            if (!($('#input-gambar').hasClass('d-none'))){
                $('#input-gambar').addClass('d-none');
            }

            // reset input file value
            $('#gambar').val('');
        });

        // save changes after edit
        $("#save").on("click", function(e){
            e.preventDefault();

            // get values
            var id = $(this).data('id');
            var edisi = $('#edisi').val();
            var tema = $('#tema').val();
            var jumlah = $('#jumlah').val();

            // get picture file name
            var gambar_path = $('#cover').attr('src');
            var gambar_file = gambar_path.substr(8);  // remove path 'uploads/' 

            // if user edit picture
            if ($('#gambar')[0].files.length != 0) {
                gambar_file = $('#gambar')[0].files;
            }

            var error_messages = [];

            if (edisi == '') {
                error_messages.push("Edisi");
            }

            if (tema == '') {
                error_messages.push("Tema");
            }

            if (jumlah == '') {
                error_messages.push("Jumlah");
            }

            // if user didn't fill all the input form, then diplay error message
            if (error_messages.length > 0) {
                var message_text = "Anda belum menginputkan data ";

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
                    title: 'Data Updated Successfully', 
                    icon: 'success', 
                    text: 'Perubahan data berhasil disimpan!', 
                    timer: 3000,
                    confirmButtonText:'OK',
                });

                // close modal
                $('#editModal').modal('toggle');
            }
        });

         // add new item
         $("#submit-item").on("click", function(e){
            e.preventDefault();

            var error_messages = [];

            // get values
            var gambar = $('#add-gambar')[0].files;
            if (gambar.length == 0) {
                error_messages.push("Gambar");
            }

            var edisi = $('#add-edisi').val();
            if (edisi == '') {
                error_messages.push("Edisi");
            }

            var tema = $('#add-tema').val();
            if (tema == '') {
                error_messages.push("Tema");
            }

            var jumlah = $('#add-jumlah').val();
            if (jumlah == '') {
                error_messages.push("Jumlah");
            }

            // if user didn't fill all the input form, then diplay error message
            if (error_messages.length > 0) {
                var message_text = "Anda belum menginputkan data ";

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
                    title: 'Data Added Successfully', 
                    icon: 'success', 
                    text: 'Item baru berhasil ditambahkan!', 
                    timer: 3000,
                    confirmButtonText:'OK',
                });

                // close modal
                $('#addModal').modal('toggle');
            }
        });
    </script>

</body>
</html>
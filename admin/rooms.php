<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel | Pokoje</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    
    <?php require('inc/header.php');?>
   
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">POKOJE</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <div class="text-end mb-4">
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
                                <i class="bi bi-plus-square"></i> Přidat
                            </button>
                        </div>

                        <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border text-center">
                                <thead>
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Jméno</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">Počet lidí</th>
                                        <th scope="col">Cena</th>
                                        <th scope="col">Počet</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Akce</th>
                                    </tr>
                                </thead>
                                <tbody id="room-data">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add room modal -->
    <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="add_room_form" autocomplete = "off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Přidat pokoj</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Jméno</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Area</label>
                                <input type="number" min="1" name="area" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Cena</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Počet</label>
                                <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Dospělý (Max.)</label>
                                <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Dítě (Max.)</label>
                                <input type="number" min="1" name="children" class="form-control shadow-none" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Popis</label>
                                <div class="row">
                                    <?php
                                        $res = selectAll('features');
                                        while($opt = mysqli_fetch_assoc($res))
                                        {
                                            echo"
                                                <div class='col-md-3 mb-1'>
                                                    <label>
                                                        <input type = 'checkbox' name='features' value='$opt[id]' class='form-check-input shadow-none'>
                                                        $opt[name]
                                                    </label>
                                                </div>
                                            ";
                                        }
                                    ?>
                                </div>

                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Vybavení</label>
                                <div class="row">
                                    <?php
                                        $res = selectAll('facilities');
                                        while($opt = mysqli_fetch_assoc($res))
                                        {
                                            echo"
                                                <div class='col-md-3 mb-1'>
                                                    <label>
                                                        <input type = 'checkbox' name='facilities' value='$opt[id]' class='form-check-input shadow-none'>
                                                        $opt[name]
                                                    </label>
                                                </div>
                                            ";
                                        }
                                    ?>
                                </div>

                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Popis</label>
                                <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Zavřit</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">Potvrdit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit room modal -->
    <div class="modal fade" id="edit-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="edit_room_form" autocomplete = "off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Upravit pokoj</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Jméno</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Area</label>
                                <input type="number" min="1" name="area" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Cena</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Počet</label>
                                <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Dospělý (Max.)</label>
                                <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Dítě (Max.)</label>
                                <input type="number" min="1" name="children" class="form-control shadow-none" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Popis</label>
                                <div class="row">
                                    <?php
                                        $res = selectAll('features');
                                        while($opt = mysqli_fetch_assoc($res))
                                        {
                                            echo"
                                                <div class='col-md-3 mb-1'>
                                                    <label>
                                                        <input type = 'checkbox' name='features' value='$opt[id]' class='form-check-input shadow-none'>
                                                        $opt[name]
                                                    </label>
                                                </div>
                                            ";
                                        }
                                    ?>
                                </div>

                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Vybavení</label>
                                <div class="row">
                                    <?php
                                        $res = selectAll('facilities');
                                        while($opt = mysqli_fetch_assoc($res))
                                        {
                                            echo"
                                                <div class='col-md-3 mb-1'>
                                                    <label>
                                                        <input type = 'checkbox' name='facilities' value='$opt[id]' class='form-check-input shadow-none'>
                                                        $opt[name]
                                                    </label>
                                                </div>
                                            ";
                                        }
                                    ?>
                                </div>

                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Popis</label>
                                <textarea name="desc" rows="4" class="form-control shadow-none" required></textarea>
                            </div>
                            <input type="hidden" name="room_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Zavřit</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">Potvrdit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Manage room images modal -->
    <div class="modal fade" id="room-images" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Název pokoje</h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="image-alert"></div>
                    <div class="border-bottom border-3 pb-3 mb-3">
                        <form id="add_image_form">
                            <label class="form-label fw-bold">Přidat obrázek</label>
                            <input type="file" name="image" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none mb-3" required>
                            <button class="btn custom-bg text-white shadow-none">PŘIDAT</button>
                            <input type="hidden" name="room_id">
                        </form>
                    </div>
                    <div class="table-responsive-lg" style="height: 350px; overflow-y: scroll;">
                        <table class="table table-hover border text-center">
                            <thead>
                                <tr class="bg-dark text-light sticky-top">
                                    <th scope="col" width="60%">Obrázek</th>
                                    <th scope="col">Thumb</th>
                                    <th scope="col">Smazat</th>
                                </tr>
                            </thead>
                            <tbody id="room-image-data">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php');?>
    
    <script>
        let add_room_form = document.getElementById('add_room_form');

        add_room_form.addEventListener('submit', function(e)
        {
            e.preventDefault();
            add_room();
        });

        function add_room()
        {
            let data = new FormData();
            data.append('add_room', '');
            data.append('name', add_room_form.elements['name'].value);
            data.append('area', add_room_form.elements['area'].value);
            data.append('price', add_room_form.elements['price'].value);
            data.append('quantity', add_room_form.elements['quantity'].value);
            data.append('adult', add_room_form.elements['adult'].value);
            data.append('children', add_room_form.elements['children'].value);
            data.append('desc', add_room_form.elements['desc'].value);

            let features = [];
            document.querySelectorAll('#add_room_form input[name="features"]:checked').forEach(el => {
                features.push(el.value);
            });

            let facilities = [];
            document.querySelectorAll('#add_room_form input[name="facilities"]:checked').forEach(el => {
                facilities.push(el.value);
            });

            data.append('features', JSON.stringify(features));
            data.append('facilities', JSON.stringify(facilities));

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);

            xhr.onload = function()
            {
                var myModal = document.getElementById('add-room');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 1)
                {
                    alert('success', 'Nový pokoj přidán');
                    add_room_form.reset();
                    get_all_rooms();
                }
                else
                {
                    alert('error', 'Výpadek serveru');
                }

            }
            xhr.send(data);
        }

        function get_all_rooms()
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                document.getElementById('room-data').innerHTML = this.responseText;

            }
            xhr.send('get_all_rooms');
        }

        let edit_room_form = document.getElementById('edit_room_form');

        function edit_details(id)
        {
            
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {   
                let data = JSON.parse(this.responseText);

                edit_room_form.elements['name'].value = data.roomdata.name;
                edit_room_form.elements['area'].value = data.roomdata.area;
                edit_room_form.elements['price'].value = data.roomdata.price;
                edit_room_form.elements['quantity'].value = data.roomdata.quantity;
                edit_room_form.elements['adult'].value = data.roomdata.adult;
                edit_room_form.elements['children'].value = data.roomdata.children;
                edit_room_form.elements['desc'].value = data.roomdata.description;
                edit_room_form.elements['room_id'].value = data.roomdata.id;
                
               document.querySelectorAll('#edit_room_form input[name="features"]').forEach(el => 
               {
                    if(data.features.includes(Number(el.value))){
                        el.checked = true;
                    }
                });

                document.querySelectorAll('#edit_room_form input[name="facilities"]').forEach(el => 
                {
                    if(data.facilities.includes(Number(el.value))){
                        el.checked = true;
                    }
                });
            }
            xhr.send('get_room='+id);
        }

        edit_room_form.addEventListener('submit', function(e)
        {
            e.preventDefault();
            submit_edit_room();
        });

        function submit_edit_room()
        {
            let data = new FormData();
            data.append('edit_room', '');
            data.append('room_id',edit_room_form.elements['room_id'].value);
            data.append('name', edit_room_form.elements['name'].value);
            data.append('area', edit_room_form.elements['area'].value);
            data.append('price', edit_room_form.elements['price'].value);
            data.append('quantity', edit_room_form.elements['quantity'].value);
            data.append('adult', edit_room_form.elements['adult'].value);
            data.append('children', edit_room_form.elements['children'].value);
            data.append('desc', edit_room_form.elements['desc'].value);

            let features = [];
            document.querySelectorAll('#edit_room_form input[name="features"]:checked').forEach(el => {
                features.push(el.value);
            });

            let facilities = [];
            document.querySelectorAll('#edit_room_form input[name="facilities"]:checked').forEach(el => {
                facilities.push(el.value);
            });

            data.append('features', JSON.stringify(features));
            data.append('facilities', JSON.stringify(facilities));

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);

            xhr.onload = function()
            {
                var myModal = document.getElementById('edit-room');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 1)
                {
                    alert('success', 'Informace změněny');
                    edit_room_form.reset();
                    get_all_rooms();
                }
                else
                {
                    alert('error', 'Výpadek serveru');
                }

            }
            xhr.send(data);
        }

        function toggle_status(id, val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                if(this.responseText == 1)
                {
                    alert('success', 'Status nastaven');
                    get_all_rooms();
                }
                else
                {
                    alert('error', 'Server selhal');
                }
            }
            xhr.send('toggle_status='+id+'&value='+val);
        }

        let add_image_form = document.getElementById('add_image_form');
        add_image_form.addEventListener('submit', function(e)
        {
            e.preventDefault();
            add_image();
        });

        function add_image()
        {
            let data = new FormData();
            data.append('image', add_image_form.elements['image'].files[0]);
            data.append('room_id', add_image_form.elements['room_id'].value);
            data.append('add_image', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);

            xhr.onload = function()
            {
                if(this.responseText == 'inv_img')
                {
                    alert('error', 'Pouze JPG, WEBP a PNG obrázky jsou povoleny', 'image-alert');
                }
                else if(this.responseText == 'inv_size')
                {
                    alert('error', 'Obrázek musí mít méně než 2 Mb', 'image-alert');
                }
                else if(this.responseText == 'upd_failed')
                {
                    alert('error', 'Nahrání obrázku selhalo. Server selhal!', 'image-alert');
                }
                else
                {
                    alert('success', 'Nový obrázek přidán', 'image-alert');
                    room_images(add_image_form.elements['room_id'].value, document.querySelector("#room-images .modal-title").innerText);
                    add_image_form.reset();
                }

            }
            xhr.send(data);
        }

        function room_images(id, rname)
        {
            document.querySelector("#room-images .modal-title").innerText = rname;
            add_image_form.elements['room_id'].value = id;
            add_image_form.elements['image'].value = '';

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                document.getElementById('room-image-data').innerHTML = this.responseText;
            }
            xhr.send('get_room_images='+id);
        }

        function rem_image(img_id, room_id)
        {
            let data = new FormData();
            data.append('image_id', img_id);
            data.append('room_id', room_id);
            data.append('rem_image', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);

            xhr.onload = function()
            {
                if(this.responseText == 1)
                {
                    alert('success', 'Obrázek vymazán', 'image-alert');
                    room_images(room_id, document.querySelector("#room-images .modal-title").innerText);
                }
                else
                {
                    alert('error', 'Vymazání obrázku selhalo', 'image-alert');
                }

            }
            xhr.send(data);
        }

        window.onload = function()
        {
            get_all_rooms();
        }
    </script>
</body>
</html>
<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();

    if(isset($_GET['seen']))
    {
        $frm_data = filteration($_GET);

        if($frm_data['seen']=='all')
        {
            $q = "UPDATE `user_queries` SET `seen`=?";
            $values = [1];
            if(update($q, $values, 'i'))
            {
                alert('success', 'Označeno vše jako přečtené');
            }
            else
            {
                alert('error', 'Operace selhala');
            }
        }
        else
        {
            $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
            $values = [1, $frm_data['seen']];
            if(update($q, $values, 'ii'))
            {
                alert('success', 'Označeno jako přečtené');
            }
            else
            {
                alert('error', 'Operace selhala');
            }
        }
    }

    if(isset($_GET['del']))
    {
        $frm_data = filteration($_GET);

        if($frm_data['del']=='all')
        {
            $q = "DELETE FROM `user_queries`";
            if(mysqli_query($con, $q))
            {
                alert('success', 'Všechny dotazy smazány');
            }
            else
            {
                alert('error', 'Operace selhala');
            }
        }
        else
        {
            $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
            $values = [$frm_data['del']];
            if(delete($q, $values, 'i'))
            {
                alert('success', 'Dotaz smazán');
            }
            else
            {
                alert('error', 'Operace selhala');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel | Popis a vybavení</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    
    <?php require('inc/header.php');?>
   
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">POPIS A VYBAVENÍ</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Vybavení</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                                <i class="bi bi-plus-square"></i> Přidat
                            </button>
                        </div>

                        <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Jméno</th>
                                    <th scope="col">Akce</th>
                                    </tr>
                                </thead>
                                <tbody id="features-data">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Popis</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-s">
                                <i class="bi bi-plus-square"></i> Přidat
                            </button>
                        </div>

                        <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Ikona</th>
                                    <th scope="col">Jméno</th>
                                    <th scope="col">Popis</th>
                                    <th scope="col">Akce</th>
                                    </tr>
                                </thead>
                                <tbody id="facilities-data">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features modal -->
    <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="feature_s_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Přidat popis</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Jméno</label>
                            <input type="text" name="feature_name" class="form-control shadow-none" required>
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

    <?php require('inc/scripts.php');?>
    <script>
        let feature_s_form =document.getElementById('feature_s_form');

        feature_s_form.addEventListener('submit', function(e)
        {
            e.preventDefault();
            add_feature();
        });

        function add_feature()
        {
            let data = new FormData();
            data.append('name', feature_s_form.elements['feature_name'].value);
            data.append('add_feature', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities.php", true);

            xhr.onload = function()
            {
                var myModal = document.getElementById('feature-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 1)
                {
                    alert('success', 'Nové vybavení přidáno');
                    feature_s_form.elements['feature_name'].value = '';
                    get_features();
                }
                else
                {
                    alert('error', 'Výpadek serveru');
                }

            }
            xhr.send(data);
        }

        function get_features()
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                document.getElementById('features-data').innerHTML = this.responseText;
            }
            xhr.send('get_features');
        }

        function rem_feature(val)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/features_facilities.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function()
            {
                if(this.responseText==1)
                {
                    alert('success', 'Vybavení vymazáno');
                    get_features();
                }

                else if(this.responseText== 'room_added')
                {
                    alert('error', 'Vybavení je přídáno do popisu!');
                }

                else
                {
                    alert('error', 'Server selhal');
                }
            }
            xhr.send('rem_feature='+val);
        }

        window.onload = function()
        {
            get_features();
        }
    </script>

</body>
</html>
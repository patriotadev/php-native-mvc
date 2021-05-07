<?php

require_once('../controllers/Users.php');

$user = new Users();

if (isset($_POST['simpan']) > 0) {
    $user->tambah($_POST);
}

?>


<?php include "navbar.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="form-data">
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama..">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat..">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="hp" placeholder="Handphone..">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="keluhan" placeholder="Keluhan..">
                    </div>
                    <button name="simpan" type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<style scoped>
    .container {
        margin-top: 100px;
    }

    .form-data {
        margin-left: 200px;
        box-shadow: 2px 2px 2px lightgray;
        padding: 40px;
        border-radius: 5px;
    }

    .form-group {
        margin-bottom: 10px;
    }
</style>
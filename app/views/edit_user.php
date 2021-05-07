<?php

require_once('../controllers/Users.php');

$user = new Users();

if (isset($_POST['update']) > 0) {
    $user->edit($_POST);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("Location: '/daftar_antrian.php'");
}

?>


<?php include "navbar.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="form-data">
                <?php foreach ($user->detail($id) as $edit) : ?>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $edit['id']; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama.." value="<?= $edit['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat.." value="<?= $edit['alamat']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="hp" placeholder="Handphone.." value="<?= $edit['hp']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="keluhan" placeholder="Keluhan.." value="<?= $edit['keluhan']; ?>">
                        </div>
                        <button name="update" type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                <?php endforeach; ?>
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
<?php

require_once('../controllers/Users.php');
$user = new Users();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("Location: '/daftar_antrian.php'");
}

?>

<?php include "navbar.php"; ?>

<?php foreach ($user->detail($id) as $user_detail) : ?>
    <div class="container">
        <div class="row card-identity">
            <h1 style="text-align: center;"><?= $user_detail['nama']; ?></h1>
            <ul style="text-align: center;">
                <li style="list-style: none;">
                    Alamat : <?= $user_detail['alamat']; ?>
                </li>
                <li style="list-style: none;">
                    HP : <?= $user_detail['hp']; ?>
                </li>
                <li style="list-style: none;">
                    Keluhan : <?= $user_detail['keluhan']; ?>
                </li>
            </ul>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'footer.php'; ?>

<style scoped>
    .container {
        margin-top: 100px;
    }

    .card-identity {
        background-color: antiquewhite;
        border-radius: 5px;
    }
</style>
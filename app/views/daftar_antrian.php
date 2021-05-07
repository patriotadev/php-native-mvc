<?php

require_once('../controllers/Users.php');
$users = new Users();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $users->hapus($id);
}


?>

<?php include 'navbar.php' ?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;  ?>
            <?php foreach ($users->index() as $user) : ?>
                <tr>
                    <th><?= $no++; ?></th>
                    <td><?= $user['nama']; ?></td>
                    <td><?= $user['alamat']; ?></td>
                    <td>
                        <a href="detail_user.php?id=<?= $user['id']; ?>">
                            <button type="button" class="btn btn-primary">Lihat Detail</button>
                        </a>
                        <a href="edit_user.php?id=<?= $user['id']; ?>">
                            <button type="button" class="btn btn-success">Edit</button>
                        </a>
                        <a href="daftar_antrian.php?id=<?= $user['id']; ?>">
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>


<style scoped>
    .container {
        margin-top: 100px;
    }
</style>
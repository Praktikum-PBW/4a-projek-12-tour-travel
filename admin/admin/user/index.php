<div class="col-md-12 w-75 py-3 ms-5">
    <h4 class="mt-2 ms-2">Data User</h4>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th hidden>#</th>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                    <th>Akun dibuat</th>
                    <th>Diedit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_user");
                $no = 1;
                foreach ($query as $data){
                ?>
                <tr>
                    <td hidden><?= $no++ ?></td>
                    <td><?= $data['id_cust']?></td>
                    <td><?= $data['username']?></td>
                    <td><?= $data['nama_cust']?></td>
                    <td><?= $data['alamat']?></td>
                    <td><?= $data['no_telp']?></td>
                    <td><?= $data['status']?></td>
                    <td><?= $data['dibuat']?></td>
                    <td><?= $data['diedit']?></td>
                    <td>
                        <div class="btn-group">
                            <a href="index.php?page=user_details&id_cust=<?= $data['id_cust']?>"
                                class="btn btn-sm btn-warning">Details</a>
                            <a href="index.php?page=user_delete&id_cust=<?= $data['id_cust']?>"
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                        </div>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
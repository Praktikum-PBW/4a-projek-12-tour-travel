<div class="col-md-12 w-75 py-3 ms-5">
    <h4 class="mt-2 ms-2">Data Item</h4>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th hidden>#</th>
                    <th>Transaksi</th>
                    <th>Tujuan Wisata</th>
                    <th>User</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Transaksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_transaksi JOIN tb_user ON tb_transaksi.user_id = tb_user.id_cust JOIN tb_items ON tb_transaksi.no_items = tb_items.no_items");
                $no = 1;
                foreach ($query as $data){
                ?>
                <tr>
                    <td hidden><?= $no++ ?></td>
                    <td><?= $data['kd_transaksi']?></td>
                    <td><?= $data['tujuan_wisata']?></td>
                    <td><?= $data['nama_cust']?></td>
                    <td><?= $data['waktu_pesan']?></td>
                    <td>Rp. <?= number_format($data['total']) ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
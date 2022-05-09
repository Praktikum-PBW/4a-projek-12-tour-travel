<div class="col-md-12 w-75 py-3 ms-5">
    <h4 class="mt-2 ms-2">Data Item</h4>
    <a href="index.php?page=item_create" class="btn btn-primary">Tambah</a>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th hidden>#</th>
                    <th>Nomor Items</th>
                    <th>Tujuan Wisata</th>
                    <th>Jumlah Hari</th>
                    <th>Jam Keberangkatan</th>
                    <th>Jam Tiba</th>
                    <th>Transportasi</th>
                    <th>Penginapan</th>
                    <th>Restoran</th>
                    <th>Harga</th>
                    <th>Thumbnail</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_items");
                $no = 1;
                foreach ($query as $data){
                ?>
                <tr>
                    <td hidden><?= $no++ ?></td>
                    <td><?= $data['no_items']?></td>
                    <td><?= $data['tujuan_wisata']?></td>
                    <td><?= $data['jmlh_hari']?></td>
                    <td><?= $data['jam_berangkat']?></td>
                    <td><?= $data['jam_tiba']?></td>
                    <td><?= $data['transportasi']?></td>
                    <td><?= $data['penginapan']?></td>
                    <td><?= $data['restoran']?></td>
                    <td>Rp.<?= number_format($data['harga'])?></td>
                    <td>
                        <img src="../../assets/images/<?= $data['thumbnail'] ?>" class="img-fluid img-thumbs"
                            width="100" height="100" alt="">
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="index.php?page=item_edit&no_items=<?= $data['no_items']?>"
                                class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?page=item_delete&no_items=<?= $data['no_items']?>"
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

 <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <h3>Data Pembayaran</h3>
                <tr>
                  <th>No</th>
                  <th>Nama Konsumen</th>
                  <th>No Invoice</th>
                  <th>Jumlah Transfer</th>
                  <th>BuktiTransfer</th>
                  <th>Tanggal Transfer</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php foreach($databayar as $row) { ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?php echo $row["customer_username"]; ?></td>
                  <td width=""><?= $row["no_invoice"]; ?></td>
                  <td width=""><?= $row["jumlah_trf"]; ?></td>
                  <td>
                    <img src="<?php echo base_url(); ?>asset/images/<?php echo $row["gambar_trf"]; ?>" width="70" height="70" />
                  </td>
                  <td>
                    <?= $row["tanggal_trf"]; ?>
                  </td>
                  <td>
                    <a href="<?php echo base_url(); ?>AdminMain/editmakanan" class="btn btn-primary btn-xs" title="Edit">Edit</a>
                
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url();?>AdminMain/hapus/" class="btn btn-primary btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') ">Hapus</a>
                  </td>
                </tr>
                <?php $no++ ?>
                <?php } ?>
              </table>



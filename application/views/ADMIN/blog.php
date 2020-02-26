
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <h3>Blog</h3>
                  <a href="<?= base_url(); ?>AdminMain/addblog" class="btn btn-primary" style="margin-bottom: 20px;">Create Date</a>
                  <h3>Blog</h3>
                <tr>
                  <th>No</th>
                  <th>Nama Blog</th>
                  <th>Keterangan Blog</th>
                  <th>Create Date</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                <?php foreach($blogss as $data) { ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $data["id"] ?></td>
                  <td><?= $data["nama blog"] ?></td>
                  <td width=""><?= $data["keterangan_blog"]; ?></td>
                  <td width=""><?= $row["create_date"]; ?></td>
                    <a href="<?php echo base_url(); ?>AdminMain/editmakanan/<?php echo $row["id"]; ?>" class="btn btn-primary btn-xs" title="Edit">Edit</a>
                
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url();?>AdminMain/hapus/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') ">Hapus</a>
                  </td>
                </tr>
                <?php $no++ ?>
                <?php } ?>
              </table>



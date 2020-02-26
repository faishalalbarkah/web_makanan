<div class="box-header with-border">
              <h3 class="box-title">Tambah Data Makanan</h3>
            </div>
            <form action="<?php echo base_url(); ?>AdminMain/updatedata/<?php echo $data_makanan["id"]; ?>" method="post" enctype="multipart/form-data" role="form">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $data_makanan["id"]; ?>">
                  <label for="exampleInputEmail1">Nama Makanan</label>
                  <input type="text" class="form-control" name="nama_makanan" id="exampleInputtext1" placeholder="Nama Produk"  value="<?php echo $data_makanan["nama_makanan"]; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Makanan</label>
                  <input type="text" class="form-control" name="harga_makanan" id="exampleInputtext1" placeholder="Harga makanan"  value="<?php echo $data_makanan["harga_makanan"]; ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Makanan</label>
                    <select class="form-control" name="makanan_id">
                       <option value=''>- Pilih -</option>
                      <?php foreach ($cetakmakanan as $data) { ?>
                        <?php if($data_makanan['menu_makanan']==$data["menu_makanan"]) { ?>
                          <option value="<?php echo $data["makanan_id"] ?>" selected> <?php echo $data["menu_makanan"]; ?></option>
                        <?php }else { ?>

                           <option value="<?php echo $data["makanan_id"] ?>"> <?php echo $data["menu_makanan"]; ?></option>
                       <?php } } ?>

                   
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi Makanan</label>
                  <textarea name="deskripsi_makanan" class="form-control ckeditor" id="exampleFormControlTextarea1" rows="3"><?php echo $data_makanan["deskripsi_makanan"]; ?></textarea>
                </div>
                <div class="form-group">
                  <img src="<?php echo base_url(); ?>asset/images/<?php echo $data_makanan["image_makanan"]; ?>" width="200" height="200">
                  <input type="hidden" name="gambar_old" value="<?php echo $data_makanan["image_makanan"]; ?>">
                  <input class="form-control" type="file" name="image_makanan" id="exampleInputFile" >
                  <p class="help-block">SILAHKAN UPLOAD GAMBAR MAKANAN </p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Are you sure to add?
                  </label>
                </div>
              </div>
              
              <div class="box-footer">
                <input type="submit" class="btn btn-primary nilai"  name="submit" value="simpan">
              </div>
            </form>
            
<?php
include "koneksi.php";
$id_kembali= $_GET['id_kembali'];
$sql = mysqli_query($koneksi,"SELECT * FROM kembali WHERE id_kembali='$id_kembali'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">edit data kembali</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="db/db_kembali.php?proses=update" method="POST">
                <input type="hidden" value="<?= $data['id_kembali']?>" name="id_kembali" id="id_kembali">
                <div class="card-body">
                  <div class="form-group">
                    <label for="tanggal_kembali">tanggal kembali</label>
                    <input type="text" class="form-control" id="tanggal_kembali" name= "tanggal_kembali"
                     placeholder="tanggal kembali anda" value="<?=$data['tanggal_kembali']?>" required>
                  </div>
                  <div class="form-group">
                    <label for="denda">denda</label>
                    <input type="text" class="form-control" id="denda" name= "denda"
                     placeholder="denda anda" value="<?=$data['denda']?>" required>
                  </div>
                
                 
                 
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning float-right ml-3"><i class="fa fa-save"></i> simpan</button>
                  <button type="reset" class="btn btn-primary float-right ml-3"><i class="fa fa-retweet"></i> reset</button>
                </div>
              </form>
            </div>
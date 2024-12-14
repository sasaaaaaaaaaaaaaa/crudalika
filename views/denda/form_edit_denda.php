<?php
include "koneksi.php";
$id_denda = $_GET['id_denda'];
$sql = mysqli_query($koneksi,"SELECT * FROM denda WHERE id_denda='$id_denda'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">edit data denda</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="db/db_denda.php?proses=update" method="POST">
                <input type="hidden" value="<?= $data['id_denda']?>" name="id_denda" id_denda="id_denda">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="keterangan">keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name= "keterangan"
                     placeholder="keterangan anda" value="<?=$data['keterangan']?>" required>
                  </div>
                  <div class="form-group">
                    <label for="nominal">nominal</label>
                    <input type="text" class="form-control" id="nominal" name= "nominal"
                     placeholder="nominal anda" value="<?=$data['nominal']?>" required>
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
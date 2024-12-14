<?php
include "koneksi.php";
$id_kategori = $_GET['id_kategori'];
$sql = mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_kategori='$id_kategori'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">edit data kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="db/db_kategori.php?proses=update" method="POST">
                <input type="hidden" value="<?= $data['id_kategori']?>" name="id_kategori" id_kategori="id_kategori">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_kategori">nama kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" name= "nama_kategori"
                     placeholder="kategori anda" value="<?=$data['nama_kategori']?>" required>
                     <div class="col mb-3"></div>
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
<?php
include "koneksi.php";
$id_petugas =$_GET['id_petugas'];
$sql = mysqli_query($koneksi,"SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">edit data petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="db/db_petugas.php?proses=update" method="POST">
                <input type="hidden" value="<?= $data['id_petugas']?>" name="id_petugas" id="id_petugas">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="nama" name= "nama" 
                    placeholder="nama anda" value="<?= $data['nama']?>"required>
                    <div class="col mb-3">
                  </div>
                  
                  <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" id="username" name= "username"
                    placeholder="username anda" value="<?=$data['username']?>" required>
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
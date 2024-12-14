<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM buku WHERE id='$id'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">edit data buku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="db/db_buku.php?proses=update" method="POST">
                <input type="hidden" value="<?= $data['id']?>" name="id" id="id">
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
                
                 
                  <div class="form-group">
                        <label>select</label>
                        <select class="form-control"name="level">
                          <option value="admin"<?php if(['level']=='admin')echo
                          "selected";?>>admin</option>
                          <option value="user"<?php if(['level']=='user')echo
                          "selected";?>>user</option>
                        </select>
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
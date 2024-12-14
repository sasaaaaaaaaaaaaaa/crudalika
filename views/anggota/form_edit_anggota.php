<?php
include "koneksi.php";
$id_anggota = $_GET['id_anggota'];
$sql = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota='$id_anggota'");
$data = mysqli_fetch_array($sql);

?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">edit data anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="db/db_anggota.php?proses=update" method="POST">
                <input type="hidden" value="<?= $data['id_anggota']?>" name="id_anggota" id_anggota="id_anggota">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id_anggota="nama" name= "nama" 
                    placeholder="nama anda" value="<?= $data['nama']?>"required>
                    <div class="col mb-3">
                  </div>
                  <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id_anggota="alamat" name= "alamat"
                     placeholder="alamat anda" value="<?=$data['alamat']?>" required>
                  </div>
                  <div class="form-group">
                    <label for="telepon">telepon</label>
                    <input type="text" class="form-control" id_anggota="telepon" name= "telepon"
                     placeholder="telepon anda" value="<?=$data['telepon']?>" required>
                  </div>
                  <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" id_anggota="username" name= "username"
                     placeholder="username anda" value="<?=$data['username']?>" required>
                  </div>
                  <div class="form-group">
                    <label for="password">password</label>
                    <input type="text" class="form-control" id_anggota="password" name= "password"
                     placeholder="password anda" value="<?=$data['password']?>" required>
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
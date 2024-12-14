<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">tambah petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="db/db_petugas.php?proses=insert" method="POST"enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control" id="nama" name= "nama" 
                    placeholder="nama anda"required>
                    <div class="col mb-3">
                  </div>
                  <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" id="username" name= "username"
                     placeholder="username anda"required>
                  </div>
                  <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" class="form-control" id="password" name= "password" 
                    placeholder="password anda"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleinputfile1">upload</label>
                    <input type="file" name="foto" id="exampleinputfile" class="form-control" placeholder="foto">
                  </div>
                  <div class="card-footer float-right">
                  <div class="col-sm-12">
                    <img src="foto/<?= $data['foto'];?>"width="100px" class="rounded float-right">
                  </div>
                  
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning float-right ml-3"><i class="fa fa-save"></i> simpan</button>
                  <button type="reset" class="btn btn-primary float-right ml-3"><i class="fa fa-retweet"></i> reset</button>
                </div>
              </form>
            </div>
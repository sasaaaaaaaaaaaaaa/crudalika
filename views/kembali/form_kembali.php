<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">tambah kembali</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="db/db_kembali.php?proses=insert" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="tanggal_kembali">tanggal kembali</label>
                    <input type="text" class="form-control" id="tanggal_kembali" name= "tanggal_kembali"
                     placeholder="tanggal kembali anda"required>
                  </div>
                  <div class="form-group">
                    <label for="denda">denda</label>
                    <input type="text" class="form-control" id="denda" name= "denda" 
                    placeholder="denda anda"required>
                  </div>
                 
                 
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning float-right ml-3"><i class="fa fa-save"></i> simpan</button>
                  <button type="reset" class="btn btn-primary float-right ml-3"><i class="fa fa-retweet"></i> reset</button>
                </div>
              </form>
            </div>
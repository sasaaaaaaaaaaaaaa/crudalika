<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">tambah kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="db/db_kategori.php?proses=insert" method="POST">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="nama_kategori">nama kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" name= "nama_kategori"
                     placeholder="kategori anda" required>
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
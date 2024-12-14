 <!-- Default box -->
 <div class="card">
        <div class="btn btn-success">

          <h3 class="card-title">petugas</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col mb-4">
                <a href="index.php?halaman=tambah_petugas" class="btn btn-primary float-right"> 
                    <i class="fa fa-user-plus"></i>tambah petugas </a>
</div>
          </div>
          <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>username</th>
                    <th>password</th>
                    <th>foto</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include "koneksi.php";
                    $no=1;
                    $sql=mysqli_query($koneksi,"SELECT * FROM petugas");
                    while($data=mysqli_fetch_array($sql)){
                    echo "
                    <tr>
                    <td>$no</td>
                    <td>$data[nama]</td>
                    <td>$data[username]</td> 
                    <td>$data[password]</td>
                    <td><img src='foto/fotouser/$data[foto]'width='40px' class='rounded'></td>
                    <td> <div class='btn-groub'>
                    <a href='index.php?halaman=edit_petugas&id_petugas=$data[id_petugas]' 
                    class='btn btn-sm btn-success'title='ubah data'>
                        <i class='fa fa-pencil-alt'></i></a>
                    <a href='db/db_petugas.php?proses=hapus&id_petugas=$data[id_petugas]' class='btn btn-sm btn-danger'title='hapus data'>
                        <i class='fa fa-trash-alt'></i></a>
                        </div>
                 </td>
                  </tr>";
                  $no++;
                    }
                ?>
                 
       
        </tbody>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
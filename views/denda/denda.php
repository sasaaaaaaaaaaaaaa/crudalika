 <!-- Default box -->
 <div class="card">
        <div class="btn btn-primary">

          <h3 class="card-title">denda</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col mb-4">
            <a href="index.php?halaman=tambah_denda" class="btn btn-primary float-right"> 
            <i class="fa fa-user-plus"></i>tambah denda </a>
</div>

          </div>
          <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>no</th>
                    <th>keterangan</th>
                    <th>nominal</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    include "koneksi.php";
                    $no=1;
                    $sql=mysqli_query($koneksi,"SELECT * FROM denda");
                    while($data=mysqli_fetch_array($sql)){
                    echo "
                    <tr>
                    <td>$no</td>
                    <td>$data[keterangan]</td>
                    <td>$data[nominal]</td> 
                    <td> <div class='btn-groub'>
                    <a href='index.php?halaman=edit_denda&id_denda=$data[id_denda]' 
                    class='btn btn-sm btn-success'title='ubah data'>
                        <i class='fa fa-pencil-alt'></i></a>
                    <a href='db/db_denda.php?proses=hapus&id_denda=$data[id_denda]' class='btn btn-sm btn-danger'title='hapus data'>
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
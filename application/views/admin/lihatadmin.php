<div class="right_col" role="main">
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_title">
            <h2>Data Admin</h2>
          <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                  <?php 
                    foreach ($admin as $data) {
                      echo '                   

                  <tr>
                    <td>'.$data->NAMA_ADMIN.'</td>
                    <td>'.$data->NIP.'</td>
                    <td>'.$data->EMAIL_ADMIN.'</td>
                    <td>'.$data->JK_ADMIN.'</td>
                    <td>
                      <a href="'.base_url().'index.php/admin/kelolaadmin/'.$data->IDADMIN.'/" class="btn btn-primary btn-xs">KELOLA</a>
                      <a href="'.base_url().'index.php/admin/deleteadmin/'.$data->IDADMIN.'" class="btn btn-danger btn-xs">HAPUS</a>
                    </td>
                  </tr>

                  
                    ';
                    }
                  ?>
                 

                      </div>
                    </div>
                  </div>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>

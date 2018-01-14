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
                    <th>Name</th>
                    <th>NIP</th>
                    <th>Email</th>
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
                    <td>
                      <button type="button" class="btn btn-info btn-xs">Detail</button> 
                      <button type="button" class="btn btn-success btn-xs">Edit</button>
                      <button type="button" class="btn btn-danger btn-xs">Delete</button>
                    </td>
                  </tr>
                    ';
                    }
                  ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>

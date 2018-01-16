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
                      <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">Detail</button> 
                      <button type="button" class="btn btn-success btn-xs">Edit</button>
                      <button type="button" class="btn btn-danger btn-xs">Delete</button>
                    </td>
                  </tr>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Text in a modal</h4>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>
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

<div class="right_col" role="main">
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_title">
            <h2>Data Jenis Pelanggaran</h2>
          <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID </th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Point</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                  <?php 
                    foreach ($pelanggaran as $data) {
                      echo '                   

                  <tr>
                    <td>'.$data->IDPELANGGARAN.'</td>
                    <td>'.$data->NAMA_PELANGGARAN.'</td>
                    <td>'.$data->KATEGORI_PELANGGARAN.'</td>
                    <td>'.$data->POINT_PELANGGARAN.'</td>
                    <td>
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

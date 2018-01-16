<div class="right_col" role="main">
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_title">
            <h2>Tambah Pelanggaran</h2>
          <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                   <?php 
                    foreach ($siswa as $data) {
                      echo '                   

                  <tr>
                    <td>'.$data->NIS.'</td>
                    <td>'.$data->NAMA_SISWA.'</td>
                    <td>'.$data->NAMA_KELAS.'</td>
                    <td>
                      
                      <a href="'.base_url().'index.php/petugas/tambahpelanggaran/'.$data->IDSISWA.'/" class="btn btn-primary btn">Tambah Pelanggaran</a>
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
              </div>

  </div>
</div>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="x_title">
        <h2>Data Catatan Pelanggaran Siswa</small></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Siswa</th>
            <th>Nama Pelanggaran</th>
            <th>Kategori Pelanggaran</th>
            <th>Point Pelanggaran</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>                  
          <?php 
            $no =1;
            foreach ($allcapelsis as $data){
            echo '
              <tr>
                <td>'.$no.'</td>
                <td>'.$data->NAMA_SISWA.'</td>
                <td>'.$data->NAMA_PELANGGARAN.'</td>
                <td>'.$data->KATEGORI_PELANGGARAN.'</td>
                <td>'.$data->POINT_PELANGGARAN.'</td>
                <td>
                  <a href="'.base_url().'index.php/admin/deletecapelsis/'.$data->IDCAPELSIS.'" class="btn btn-danger btn-xs">HAPUS</a>
                </td>
            </tr>
          '; $no++; }  ?>
        </tbody>
      </table>
      
    </div>

    

  </div>
                </div>
              </div>
            </div></div>
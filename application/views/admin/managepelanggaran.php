<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="x_title">
        <h2>Data Pelanggaran <small><?php echo $siswa->NAMA_SISWA; ?></small></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">

    <div class="alert alert-<?php 
                        if($total_po >= 0 && $total_po <= 25){echo "success";} 
                        if($total_po >= 26 && $total_po <= 50){echo "warning";} 
                        if($total_po >= 51 && $total_po <= 100){echo "danger";} 
                        ?> alert" role="alert">
    <strong><i class="fa fa-warning"></i> Peringatan !</strong> 
    <marquee>
      <p>
      <?php 
        if($total_po >= 0 && $total_po <= 25){echo "Status masih aman, dilarang mengulangi pelanggaran";} 
        if($total_po >= 26 && $total_po <= 50){echo "Silakan menemui pihak kesiswaan";} 
        if($total_po >= 51 && $total_po <= 100){echo "Pemanggilan orang tua";} 
      ?>
      </p>
    </marquee>
    </div>
    <p>Total Point : <?php echo $total_po; ?></p>    
                      <div class="progress">
                        <div class="progress-bar progress-bar-<?php 
                        if($total_po >= 0 && $total_po <= 25){echo "success";} 
                        if($total_po >= 26 && $total_po <= 50){echo "warning";} 
                        if($total_po >= 51 && $total_po <= 100){echo "danger";} 
                        ?>" data-transitiongoal="<?php echo $total_po; ?>"></div>
                      </div>
    
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Pelanggaran</th>
            <th>Kategori Pelanggaran</th>
            <th>Point Pelanggaran</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>                  
          <?php 
            $no =1;
            foreach ($capelsis as $data){
            echo '
              <tr>
                <td>'.$no.'</td>
                <td>'.$data->NAMA_PELANGGARAN.'</td>
                <td>'.$data->NAMA_KATEGORI.'</td>
                <td>'.$data->POINT.'</td>
                <td>'.$data->TGL_CAPELSIS.'</td>
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
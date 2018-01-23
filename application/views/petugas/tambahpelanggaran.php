<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_title">
          <h2>Tambah Data Pelanggaran<small>Siswa</small></h2>
        <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <br />
        <form action="<?php echo base_url(); ?>index.php/petugas/insertpelanggaran" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                     
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="IDSISWA">ID SISWA <span class="required">*</span>
          </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="IDSISWA" required="required" value="<?php echo $this->uri->segment(3); ?>" name="IDSISWA" class="form-control col-md-7 col-xs-12" readonly="true">
        </div>
        </div>
                     
        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NAMA_SISWA">Nama <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="NAMA_SISWA" name="NAMA_SISWA" value="<?php echo $siswa->NAMA_SISWA; ?>" required="required" class="form-control col-md-7 col-xs-12" disabled>
        </div>
        </div>
                                      
        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="KELAS" name="KELAS" value="<?php echo $siswa->KELAS; ?>" required="required" class="form-control col-md-7 col-xs-12" disabled>
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="KATEGORI_PELANGGARAN">KATEGORI PELANGGARAN <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="KATEGORI_PELANGGARAN" id="kapel" class="select2_group form-control" required="required">
          <option selected disabled hidden>KATEGORI PELANGGARAN</option>
            <?php
              foreach ($kapel as $katpel) {
                echo '
                  <option value="'.$katpel->IDKATEGORI.'">'.$katpel->NAMA_KATEGORI.'</option>
                    ';
              }
            ?>                           
        </select>
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NAMA_PELANGGARAN">NAMA PELANGGARAN <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="NAMA_PELANGGARAN" id="napel" class="select2_group form-control" required="required">
          <option selected disabled hidden>NAMA PELANGGARAN</option>
            <?php
              foreach ($pel as $pela) {
                echo '
                  <option class="'.$pela->IDKATEGORI.'" value="'.$pela->IDPELANGGARAN.'">'.$pela->NAMA_PELANGGARAN.'</option>
                    ';
              }
            ?>                           
        </select>
        </div>
        </div>


        <!-- Memanggil file jquer -->
<script src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery.chained.min.js"></script>
    
  <!-- Fungsi javascript untuk onchange -->
  <script type="text/javascript">
     
    $("#napel").chained("#kapel"); <!-- parameter yang digunakan mesti sama dengan id select list-->
   
   /* Arti dari script diatas yaitu select list kota akan menampilkan data yang mempunyai id_provinsi
      yang sama pada table kota dengan table provinsi
   */   
      
  </script>

        <div class="ln_solid"></div>
        <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <button class="btn btn-primary" type="reset">Reset</button>
        <input type="submit" value="Submit" class="btn btn-success">
        </div>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>




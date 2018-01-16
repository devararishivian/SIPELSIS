<div class="right_col" role="main">
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_title">
            <h2>Lihat Siswa</h2>
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
                    <td>'.$data->KELAS.'</td>
                    <td>
                      <a href="'.base_url().'index.php/admin/managesiswa/'.$data->IDSISWA.'/" class="btn btn-primary btn-xs">Kelola</a>
                      <a href="'.base_url().'index.php/admin/deletesiswa/'.$data->IDSISWA.'" class="btn btn-danger btn-xs">Delete</a>
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

    <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <h2>Tambah Data <small>Siswa</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                     <?php

                      if(!empty($notif))
                      {
                        ?>
                            <script>
                              alert('<?php echo $notif ?>') ;
                            </script>
                          <?php
                      }

                          ?>
                    
                    <br />
                    <form action="<?php echo base_url(); ?>index.php/admin/insertsiswa" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="IDSISWA">ID Siswa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="IDSISWA" required="required" name="IDSISWA" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NIS">NIS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="NIS" required="required" name="NIS" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NAMA_SISWA">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="NAMA_SISWA" name="NAMA_SISWA" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="EMAIL_SISWA">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="EMAIL_SISWA" name="EMAIL_SISWA" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</span></label>
                      <p>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        Male :
                        <input type="radio" class="flat" name="JK_SISWA" id="genderM" value="male" required /> Female :
                        <input type="radio" class="flat" name="JK_SISWA" id="genderF" value="female" />
                      </div>
                      </p>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan <span class="required">*</span></label>
                      <p>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        RPL :
                        <input type="radio" class="flat" name="JURUSAN" id="genderM" value="RPL" required /> 
                        TKJ :
                        <input type="radio" class="flat" name="JURUSAN" id="genderF" value="TKJ" />
                      </div>
                      </p>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ANGKATAN">ANGKATAN <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="ANGKATAN" required="required" name="ANGKATAN" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="KELAS" class="select2_group form-control" required="required">
                            
                              <option selected disabled hidden>Pilih Kelas</option>
                            <?php 
                              foreach ($kelas as $data) {
                               echo '
                              
                              <option value="'.$data->IDKELAS.'">'.$data->KELAS.'</option>
                              ';
                            } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NOABSEN">Nomor Absen <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="NOABSEN" class="select2_group form-control" required="required">
                            
                              <option selected disabled hidden>Nomor Absen</option>
                            <?php 
                              foreach ($noabsen as $data) {
                               echo '                              
                              <option value="'.$data->IDABSEN.'">'.$data->NOABSEN.'</option>
                              ';
                            } ?>
                          </select></div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="URL_FOTO_SISWA">URL Foto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="URL_FOTO_SISWA" name="URL_FOTO_SISWA" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UNAME_SISWA">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="UNAME_SISWA" name="UNAME_SISWA" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="PASS_SISWA">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="PASS_SISWA" name="PASS_SISWA" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

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


                  </div>
                </div>
              </div>

  </div>
</div>


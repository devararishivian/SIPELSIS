<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <h2>Kelola Data</h2>
                    <div class="clearfix"></div>
                  </div>
                 
                  <div class="x_content">
                    <br />
                    <form action="<?php echo base_url(); ?>index.php/admin/updatesiswa/<?php echo $siswa->IDSISWA; ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="IDSISWA">ID Siswa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="IDSISWA" required="required" value="<?php echo $siswa->IDSISWA; ?>" name="IDSISWA" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NIS">NIS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="NIS" required="required" value="<?php echo $siswa->NIS; ?>" name="NIS" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NAMA_SISWA">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="NAMA_SISWA" name="NAMA_SISWA" value="<?php echo $siswa->NAMA_SISWA; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="EMAIL_SISWA">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="EMAIL_SISWA" name="EMAIL_SISWA" value="<?php echo $siswa->EMAIL_SISWA; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</span></label>
                      <p>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        Laki - laki:
                        <input type="radio" class="flat"  name="JK_SISWA" id="genderM" required="required" value="Laki - Laki" <?php echo ($siswa->JK_SISWA == 'male')?'checked':'' ?> /> 
                        Perempuan:
                        <input type="radio" class="flat"  name="JK_SISWA" id="genderF" required="required" value="Laki - Laki" <?php echo ($siswa->JK_SISWA == 'female')?'checked':'' ?> />
                      </div>
                      </p>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan <span class="required">*</span></label>
                      <p>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        RPL
                        <input type="radio" class="flat"  name="RPL" id="RPL" required="required" value="RPL" <?php echo ($siswa->JURUSAN == 'RPL')?'checked':'' ?> /> 
                        TKJ:
                        <input type="radio" class="flat"  name="TKJ" id="TKJ"  value="TKJ" <?php echo ($siswa->JURUSAN == 'TKJ')?'checked':'' ?> />
                      </div>
                      </p>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ANGKATAN">Angkatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ANGKATAN" name="ANGKATAN" value="<?php echo $siswa->ANGKATAN; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="IDKELAS" class="select2_group form-control" required="required">
                            
                            <?php 
                              foreach ($kelas as $data) {
                               echo '
                              <option value="'.$siswa->IDKELAS.'?>">'.$data->NAMA_KELAS.'</option>
                              <option value="'.$data->IDKELAS.'">'.$data->NAMA_KELAS.'</option>
                              ';
                            } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="IDABSEN">Nomor Absen <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="IDABSEN" class="select2_group form-control" required="required">
                            
                            <?php 
                              foreach ($noabsen as $data) {
                               echo '
                              <option value="'.$siswa->IDABSEN.'?>">'.$data->NOMOR_ABSEN.'</option>
                              <option value="'.$data->IDABSEN.'">'.$data->NOMOR_ABSEN.'</option>
                              ';
                            } ?>
                          </select></div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="URL_FOTO_SISWA">URL Foto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="URL_FOTO_SISWA" value="<?php echo $siswa->URL_FOTO_SISWA; ?>" name="URL_FOTO_SISWA" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UNAME_SISWA">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="UNAME_SISWA" name="UNAME_SISWA" value="<?php echo $siswa->UNAME_SISWA; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="PASS_SISWA">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="PASS_SISWA" value="<?php echo $siswa->PASS_SISWA; ?>" name="PASS_SISWA" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" value="update" class="btn btn-success">
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div></div>
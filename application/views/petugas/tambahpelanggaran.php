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
                    <form action="<?php echo base_url(); ?>index.php/admin/insertsiswa" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="IDSISWA">ID SISWA <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="IDSISWA" required="required" value="<?php echo $this->uri->segment(3); ?>" name="IDSISWA" class="form-control col-md-7 col-xs-12" disabled>
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
                          <input type="text" id="KELAS_SISWA" name="NAMA_KELAS" value="<?php echo $siswa->NAMA_KELAS; ?>" required="required" class="form-control col-md-7 col-xs-12" disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NOABSEN_SISWA">Nomor Absen <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="NOABSEN_SISWA" required="required" value="<?php echo $siswa->NOMOR_ABSEN; ?>" name="NOABSEN_SISWA" class="form-control col-md-7 col-xs-12" disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="JENIS_PELANGGARAN">NAMA PELANGGARAN <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="JENIS_PELANGGARAN" name="JENIS_PELANGGARAN" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">KATEGORI PELANGGARAN<span class="required"> *</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="KATEGORI_PELANGGARAN" class="select2_group form-control" required="required">
                            
                              <option selected disabled hidden>KATEGORI PELANGGARAN</option>
                              <option>RINGAN</option>
                              <option>SEDANG</option>
                              <OPTION>BERAT</OPTION>
                            
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="POINT">POINT<span class="required"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="POINT" name="POINT" required="required" class="form-control col-md-7 col-xs-12">
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


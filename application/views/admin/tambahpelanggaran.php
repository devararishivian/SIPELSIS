<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Pelanggaran</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
                      <label for="NAMA_PELANGGARAN">Nama * :</label>
                      <input type="text" id="NAMA_PELANGGARAN" class="form-control" name="NAMA_PELANGGARAN" required />

                      <label for="KATEGORI_PELANGGARAN">Kategori * :</label>
                      <div class="form-group">
                        <div>
                          <select id="KATEGORI_PELANGGARAN" name="KATEGORI_PELANGGARAN" class="form-control">
                            <option selected disabled hidden>Pilih Kategori</option>
                            <option value="Ringan">Ringan</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Berat">Berat</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label">Point Pelanggaran</label>
                        <div>
                          <select class="select2_group form-control">
                            <option selected disabled hidden>Pilih Point Pelanggaran</option>
                            <optgroup label="Ringan">
                              <option value="10">10</option>
                            </optgroup>
                            <optgroup label="Sedang">
                              <option value="20">20</option>
                            </optgroup>
                            <optgroup label="Berat">
                              <option value="45">45</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      
                      
                      <br /> 
                                         
                      <div class="form-group">
                        <div>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button id="submit" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                    <!-- end form for validations -->

                  </div>
                </div>


              </div>

                </div>
              </div>
          </div>
        </div>
        <!-- /page content -->
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <h2>Tambah Data <small>Pelanggaran</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idpelanggaran">ID Pelanggaran <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="idpelanggaran" name="idpelanggaran" required="required" class="form-control col-md-7 col-xs-12" disabled>
                        </div>
                      </div> 
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_pelanggaran">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_pelanggaran" class="form-control col-md-7 col-xs-12" name="nama_pelanggaran" required="required" type="text">
                        </div>
                      </div>                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Pelanggaran <span class="required">*</span></label>
                        <div class="ccol-md-6 col-sm-6 col-xs-12">
                          <select name="kategori_pelanggaran" class="form-control">
                            <option>Ringan</option>
                            <option>Berat</option>
                            <option>Sedang</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Point Pelanggaran <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="point_pelanggaran" id="point_pelanggaran" class="select2_group form-control">
                            <optgroup label="Kategori Ringan">
                              <option value="1">1 (Satu)</option>
                            </optgroup>
                            <optgroup label="Kategori Sedang">
                              <option value="10">10 (Sepuluh)</option>
                            </optgroup>
                            <optgroup label="Kategori Berat">
                              <option value="45">45 (Empat Puluh Lima)</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      </div>                     
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="submit" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
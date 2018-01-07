<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <h2>Tambah Data <small>Petugas</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" novalidate>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_petugas">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_petugas" class="form-control col-md-7 col-xs-12" name="nama_petugas" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_petugas">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email_petugas" id="email_petugas" name="email_petugas" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idpetugas">ID Petugas <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="idpetugas" name="idpetugas" required="required" class="form-control col-md-7 col-xs-12" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uname_petugas">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="uname_petugas" class="form-control col-md-7 col-xs-12" name="uname_petugas" placeholder="qaisha_rishivian_24rpl" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="pass_petugas" class="control-label col-md-3">Password <span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pass_petugas" type="password" name="pass_petugas" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto_petugas">Foto</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <form action="#" method="post" enctype="multipart/form-data">
                          <input type="file" name="foto_petugas">
                        </form>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
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
        <!-- /page content -->
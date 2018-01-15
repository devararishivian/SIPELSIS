<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Admin</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
                      <label for="NAMA_ADMIN">Nama * :</label>
                      <input type="text" id="NAMA_ADMIN" class="form-control" name="NAMA_ADMIN" required />

                      <label for="EMAIL_ADMIN">Email * :</label>
                      <input type="email" id="EMAIL_ADMIN" class="form-control" name="EMAIL_ADMIN" data-parsley-trigger="change" required />

                      <label for="NIP">NIP * :</label>
                      <input type="number" id="NIP" class="form-control" name="NIP" required="required"/>

                      <label>Jenis Kelamin * :</label>
                      <p>
                        Laki - laki:
                        <input type="radio" class="flat" name="JK_ADMIN" id="genderM" value="Laki - laki" required="required" /> Perempuan:
                        <input type="radio" class="flat" name="JK_ADMIN" id="genderF" value="Perempuan" />
                      </p>

                      <label for="UNAME_ADMIN">Username * :</label>
                      <input type="text" id="UNAME_ADMIN" class="form-control" name="UNAME_ADMIN" required />

                      <label for="PASS_ADMIN">Password * :</label>
                      <input type="password" id="PASS_ADMIN" class="form-control" name="PASS_ADMIN" required />

                      <label for="ROLE">ROLE * :</label>
                      <div class="radio">
                        <label>
                          <input type="radio" class="flat" name="ROLE" disabled="disabled" checked> Admin
                        </label>
                      </div>

                      <div> 
                        <form action="#" method="post" enctype="multipart/form-data"> 
                          <input type="file" name="FOTO_ADMIN"> 
                      </form> 
                      </div><br /> 
                                         
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
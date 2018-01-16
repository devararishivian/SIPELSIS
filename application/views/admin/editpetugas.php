<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Petugas</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                  $failed = $this->session->flashdata('failed');
                    if(!empty($failed)){
                      echo '<div class="alert alert-danger alert-dismissable" style="margin-top: 10px">';
                      echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                      echo '<i class="icon fa fa-warning"></i>';
                      echo $failed;
                      echo '</div>';
                    }

                  $success = $this->session->flashdata('success');
                  if(!empty($success)){
                      echo '<div class="alert alert-success alert-dismissable" style="margin-top: 10px">';
                      echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                      echo '<i class="icon fa fa-check"></i>';
                      echo $success;
                      echo '</div>';
                  }
                ?>

                    <!-- start form for validation -->
                    <form action="<?php echo base_url(); ?>index.php/admin/insertpetugas" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> 
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NAMA_ADMIN">Nama * :</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="NAMA_ADMIN" class="form-control" name="NAMA_ADMIN" required />
                      </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="EMAIL_ADMIN">Email * :</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="email" id="EMAIL_ADMIN" class="form-control" name="EMAIL_ADMIN" data-parsley-trigger="change" required />
                      </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NIP">NIP * :</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="number" id="NIP" class="form-control" name="NIP" required="required"/>
                      </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin * :</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <p>
                        Laki - laki:
                        <input type="radio" class="flat" name="JK_ADMIN" id="genderM" value="Laki - laki" required="required" /> Perempuan:
                        <input type="radio" class="flat" name="JK_ADMIN" id="genderF" value="Perempuan" />
                      </p>
                      </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UNAME_ADMIN">Username * :
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="UNAME_ADMIN" class="form-control" name="UNAME_ADMIN" required />
                      </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="PASS_ADMIN">Password * :</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="password" id="PASS_ADMIN" class="form-control" name="PASS_ADMIN" required />
                      </div>
                      </div>
                      
                      


                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Foto * :</label>
                      <div class="col-md-6 col-sm-6 col-xs-12"> 
                      <input type="file" name="FOTO_ADMIN" />
                      </div>
                      </div>
                      <br />  
                                         
                        <div>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <input type="submit" value="Submit" class="btn btn-success">
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
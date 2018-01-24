        <!-- page content -->
        <div class="right_col" role="main">
          <div class=""> 
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <h2>Profil Siswa <small>
                      <?php 
                      echo $this->session->userdata('loggedSiswaName');
                       
                      ?>
                        
                      </small></h2>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo $siswa->URL_FOTO_SISWA; ?>" alt="TIDAK ADA FOTO">
                        </div>
                      </div>
                      <h3><?php 
                        //foreach ($admin as $data){
                          //echo $admin->NAMA_ADMIN;
                      echo $this->session->userdata('loggedSiswaName');
                        //} 
                      ?></h3>

                      <ul class="list-unstyled user_data">

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Pelajar SMK Telkom
                        </li>
                      </ul>
                      <br />

                      <p>Total Point : <?php echo $total_po; ?></p>    
                      <div class="progress">
                        <div class="progress-bar progress-bar-primary" data-transitiongoal="<?php echo $total_po; ?>"></div>
                      </div>

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">

                          <li role="presentation" class="active"><a href="#tab_content1" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profil</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Daftar Pelanggaran</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade " id="tab_content2" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <div class="x_title">
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                            <table class="table">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Nama Pelanggaran</th>
                                  <th>Kategori Pelanggaran</th>
                                  <th>Point Pelanggaran</th>
                                  <th>Tanggal</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                $no =1;
                                foreach ($allcapelsis as $data){
                                  echo '
                                
                                <tr>
                                  <td>'.$no.'</td>
                                  <td>'.$data->NAMA_PELANGGARAN.'</td>
                                  <td>'.$data->NAMA_KATEGORI.'</td>
                                  <td>'.$data->POINT.'</td>
                                  <td>'.$data->TGL_CAPELSIS.'</td>
                                </tr>


                                '; $no++; }  ?>
                              </tbody>
                            </table>

                          </div>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                         <div class="clearfix"></div>
                    <div class="row">
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nis">NIS</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nis" name="nis" value="<?php echo $siswa->NIS; ?>" disabled class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_siswa">Nama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_siswa" class="form-control col-md-7 col-xs-12" value="<?php echo $siswa->NAMA_SISWA; ?>" name="nama_siswa" disabled type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kelas_siswa">Kelas
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="kelas_siswa" class="form-control col-md-7 col-xs-12" value="<?php echo $siswa->KELAS; ?>" name="kelas_siswa" disabled type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noabsen_siswa">Nomer Absen
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="noabsen_siswa" class="form-control col-md-7 col-xs-12" value="<?php echo $siswa->NOABSEN; ?>" name="noabsen_siswa" disabled type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idsiswa">ID Siswa</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="idsiswa" name="idsiswa" value="<?php echo $siswa->IDSISWA; ?>" required="required" class="form-control col-md-7 col-xs-12" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uname_siswa">Username</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="uname_siswa" class="form-control col-md-7 col-xs-12" name="uname_siswa" value="<?php echo $siswa->UNAME_SISWA; ?>" placeholder="qaisha_rishivian_24rpl" disabled type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="pass_admin" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pass_siswa" type="password" value="<?php echo $siswa->PASS_SISWA; ?>" name="pass_siswa" class="form-control col-md-7 col-xs-12" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_siswa">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email_siswa" id="email_siswa" value="<?php echo $siswa->EMAIL_SISWA; ?>" name="email_siswa" disabled class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      

                      </form>

                     
                      
                            <!-- end user projects -->

                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
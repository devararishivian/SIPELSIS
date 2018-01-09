        <!-- page content -->
        <div class="right_col" role="main">
          <div class=""> 
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <h2>Profil Siswa <small>Raden Mas Vian Direwanginotobotolimo</small></h2>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo base_url(); ?>assets/gentelella/production/images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Raden Mas Vian Direwanginotobotolimo</h3>

                      <ul class="list-unstyled user_data">

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Pelajar SMK Telkom
                        </li>
                      </ul>
                      <br />

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
                            <ul class="messages">
                              <li>
                                <img src="<?php echo base_url(); ?>assets/gentelella/production/images/img.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-info">24</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Desmond Davison</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <i class="fa fa-paperclip"></i> Pelanggaran Ringan
                                    <i class="fa fa-paperclip"></i> Point : 10
                                  </p>
                                </div>
                              </li>
                              <li>
                                <img src="<?php echo base_url(); ?>assets/gentelella/production/images/img.jpg" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  <h3 class="date text-error">21</h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">Brian Michaels</h4>
                                  <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <i class="fa fa-paperclip"></i> Pelanggaran Ringan
                                    <i class="fa fa-paperclip"></i> Point : 10
                                  </p>
                                </div>
                              </li>

                            </ul>
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
                          <input type="text" id="nis" name="nis" disabled class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_siswa">Nama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_siswa" class="form-control col-md-7 col-xs-12" name="nama_siswa" disabled type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="kelas_siswa" id="kelas_siswa" class="select2_group form-control">
                            <optgroup label="Kelas X">
                              <option value="X">X RPL 1</option>
                            </optgroup>
                            <optgroup label="Kelas XI">
                              <option value="XI">XI RPL 1</option>
                            </optgroup>
                            <optgroup label="Kelas XII">
                              <option value="XII">XII RPL 1</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Absen</label>
                        <div class="ccol-md-6 col-sm-6 col-xs-12">
                          <select name="noabsen_siswa" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idsiswa">ID Siswa</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="idsiswa" name="idsiswa" required="required" class="form-control col-md-7 col-xs-12" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uname_siswa">Username</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="uname_siswa" class="form-control col-md-7 col-xs-12" name="uname_siswa" placeholder="qaisha_rishivian_24rpl" disabled type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="pass_admin" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pass_siswa" type="password" name="pass_siswa" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_siswa">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email_siswa" id="email_siswa" name="email_siswa" disabled class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto_siswa">Foto</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <form action="#" method="post" enctype="multipart/form-data">
                          <input type="file" name="foto_siswa">
                        </form>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="submit" type="submit" class="btn btn-success">Perbarui Profil</button>
                        </div>
                      </div>
                    </form>
                  </div>
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
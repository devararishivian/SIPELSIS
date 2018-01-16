        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><?php echo $total_s; ?></div>
                  <h3>Siswa SMK Telkom</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count"><?php echo $total_a; ?></div>
                  <h3>Admin</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count"><?php echo $total_p; ?></div>
                  <h3>Petugas</h3>
                </div>
              </div>
              <!--
              <div class="x_panel">
                  <div class="x_title">
                    <h2>Verifikasi Pelanggaran Baru</h2>                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Absen</th>
                          <th>Jenis Pelanggaran</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Den Mas Ganteng Notobotolimo Ndekmejo Karosilo</td>
                          <td>12T1</td>
                          <td>69</td>
                          <td>Kedisiplinan</td>
                          <td> 
                            <button type="button" class="btn btn-success btn-xs">Konfirmasi</button> 
                            <button type="button" class="btn btn-danger btn-xs">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>emil</td>
                          <td>12R1</td>
                          <td>63</td>
                          <td>Kerapian</td>
                          <td> 
                            <button type="button" class="btn btn-success btn-xs">Konfirmasi</button> 
                            <button type="button" class="btn btn-danger btn-xs">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>yoyok</td>
                          <td>12R6</td>
                          <td>62</td>
                          <td>Kerajinan</td>
                          <td> 
                            <button type="button" class="btn btn-success btn-xs">Konfirmasi</button> 
                            <button type="button" class="btn btn-danger btn-xs">Hapus</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              -->

               <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Selamat Datang<small><?php echo $this->session->userdata('loggedRole'); ?> !</small></h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
                      <h1>Selamat Datang, <?php echo $this->session->userdata('loggedAdminName'); ?> !</h1>
                    </div>
                  </div>

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


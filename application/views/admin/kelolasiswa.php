<div class="right_col" role="main">
  <div class="">
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_title">
            <h2>Lihat Siswa</h2>
          <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                  <tr>
                    <td>48041523070</td>
                    <td>Den Mas Ganteng Notobotolimo Ndekmejo Karosilo Mangantelo</td>
                    <td>XII RPL 1</td>
                    <td>
                      <button type="button" class="btn btn-info btn-xs">Detail</button> 
                      <button type="button" class="btn btn-success btn-xs">Edit</button>
                      <button type="button" class="btn btn-danger btn-xs">Delete</button>
                    </td>
                  </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_title">
                    <h2>Tambah Data <small>Admin</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" novalidate>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nis">NIS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nis" name="nis" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_siswa">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_siswa" class="form-control col-md-7 col-xs-12" name="nama_siswa" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas <span class="required">*</span></label>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Absen <span class="required">*</span></label>
                        <div class="ccol-md-6 col-sm-6 col-xs-12">
                          <select name="noabsen_siswa" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idsiswa">ID Siswa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="idsiswa" name="idsiswa" required="required" class="form-control col-md-7 col-xs-12" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uname_siswa">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="uname_siswa" class="form-control col-md-7 col-xs-12" name="uname_siswa" placeholder="qaisha_rishivian_24rpl" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="pass_admin" class="control-label col-md-3">Password <span class="required">*</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pass_siswa" type="password" name="pass_siswa" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_siswa">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email_siswa" id="email_siswa" name="email_siswa" required="required" class="form-control col-md-7 col-xs-12">
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


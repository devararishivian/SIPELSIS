    <Style>
.ui-datepicker-calendar {
display: none;
}

.ui-datepicker-next,.ui-datepicker-prev {
display:none;
}

    </Style>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA INITIATION</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT
                                <small>LOPITA</small>
                            </h2>
                        </div>
                        <div class="body">
                        <?php
                        if(!empty($notif))
                        {
                            echo '<div class="alert alert-danger">';
                            echo $notif;
                            echo '</div>';
                        }
                        ?>
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/user/input">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">FiberZone</h2>
                                    <select id="Select" class="form-control show-tick" name="teritori">
                                                    <option value="<?php 
                                                    $nama_witel = $this->session->userdata('witel');
                                                    if($this->session->userdata('witel') != ''){
                                                    echo $this->db->query("SELECT * FROM tb_witel A LEFT JOIN tb_teritori B ON A.teritori = B.nama_teritori WHERE A.id_witel='$nama_witel'")->row()->id_teritori;}
                                                    ?>  ">
                                                    <?php 
                                                    $nama_witel = $this->session->userdata('witel');
                                                    if($this->session->userdata('witel') != ''){
                                                    echo $this->db->query("SELECT * FROM tb_witel A LEFT JOIN tb_teritori B ON A.teritori = B.nama_teritori WHERE A.id_witel='$nama_witel'")->row()->nama_teritori;}
                                                    ?>                                                       
                                                    </option>
                                                    
                                                    <?php
                                                    if($this->session->userdata('status') != 'USER')
                                                    {
                                                    foreach ($teritori as $data)
                                                        {
                                                            echo '<option value="'.$data->id_teritori.'">'.$data->nama_teritori.'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                </div>
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Witel</h2>
                                    <select id="Select" class="form-control show-tick" name="witel">
                                                    <option value="<?php if($this->session->userdata('witel') != '0'){echo $this->session->userdata('witel');}?>">
                                                    <?php 
                                                    $nama_witel = $this->session->userdata('witel');
                                                    if($this->session->userdata('witel') != ''){
                                                    echo $this->db->query("SELECT * FROM tb_witel WHERE id_witel='$nama_witel'")->row()->nama_witel;}
                                                    ?>                                                       
                                                    </option>
                                                    
                                                    <?php
                                                    if($this->session->userdata('status') != 'USER')
                                                    {
                                                    foreach ($witel as $data)
                                                        {
                                                            echo '<option value="'.$data->id_witel.'">'.$data->nama_witel.'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">ID Project</h2>                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="ID PROJECT.." name="id_project"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Program</h2>
                                    <select id="Select" class="form-control show-tick" name="program">
                                                    <option></option>
                                                    <?php
                                                    foreach ($program as $data)
                                                        {
                                                            echo '<option value="'.$data->id_program.'">'.$data->nama_program.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Jenis Pekerjaan</h2>
                                    <select id="Select" class="form-control show-tick" name="jenis_pekerjaan">
                                                    <option></option>
                                                    <?php
                                                    foreach ($pekerjaan as $data)
                                                        {
                                                            echo '<option value="'.$data->id_pekerjaan.'">'.$data->nama_pekerjaan.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <h2 class="card-inside-title">Rincian Pekerjaan</h2>
                                            <input type="text" class="form-control" placeholder="PEKERJAAN.." name="pekerjaan"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">ID Deployer</h2>                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="ID DEPLOYER.." name="id_deployer" id="id_deployer" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <h2 class="card-inside-title">Nilai</h2>
                                            <input type="text" class="form-control" placeholder="..NILAI REKON" name="nilai_rekon" id="nilai_rekon" data-inputmask-removemaskonsubmit="true"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">Periode Pekerjaan</h2>                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="bulan_tahun" placeholder="Bulan Tahun.." name="bulan_tahun"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Status Pekerjaan</h2>
                                    <select id="Select" class="form-control show-tick" name="status_pekerjaan">
                                                    <option></option>
                                                    <option>Persiapan</option>
                                                    <option>OGP</option>
                                                    <option>Selesai</option>
                                                </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Vestyna</h2>
                                    <input name="input_vestyna" type="radio" class="with-gap" id="vestyna" value="OK">
                                    <label for="vestyna">OK</label>
                                    <input name="input_vestyna" type="radio" id="vestyna2" class="with-gap" value="NOK"/>
                                    <label for="vestyna2">NOK</label>
                                    <input name="input_vestyna" type="radio" id="vestyna3" class="with-gap" value="NON"/>
                                    <label for="vestyna3">NON</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title">No Vestyna</h2>                                    
                                        <div class="form-line">
                                            <input type="text" id="no_vestyna" class="form-control" placeholder="NO DURK VESTYNA.." name="no_vestyna" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">BA Rekon</h2>
                                    <input name="ba_rekon" type="radio" class="with-gap" id="ba_rekon" value="OK"/>
                                    <label for="ba_rekon">OK</label>
                                    <input name="ba_rekon" type="radio" id="ba_rekon2" class="with-gap" value="NOK" enable/>
                                    <label for="ba_rekon2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title" style="color:white;">| </h2>                                    
                                        <div class="form">
                                            <input type="text" class="form-control" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">PR</h2>
                                    <input name="pr" type="radio" class="with-gap" id="pr" value="OK"/>
                                    <label for="pr">OK</label>
                                    <input name="pr" type="radio" id="pr2" class="with-gap" value="NOK"/>
                                    <label for="pr2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title" style="color:white;">| </h2>                                    
                                        <div class="form">
                                            <input type="text" class="form-control" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                <h2 class="card-inside-title">PO</h2>
                                    <input name="po" type="radio" class="with-gap" id="po" value="OK"/>
                                    <label for="po">OK</label>
                                    <input name="po" type="radio" id="po2" class="with-gap" value="NOK"/>
                                    <label for="po2">NOK</label>
                                </div>
                                <div class="col-sm-4">
                                <div class="form-group">
                                    <h2 class="card-inside-title">No PO</h2>                                    
                                        <div class="form-line">
                                            <input type="text" id="no_po" class="form-control" placeholder="NO PO.." name="no_po" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                <h2 class="card-inside-title">TANGGAL PO</h2>
                                    <input type="date" id="tanggal_po" class="form-control" name="tanggal_po" disabled/>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                <h2 class="card-inside-title">SP</h2>
                                    <input name="sp" type="radio" class="with-gap" id="sp" value="OK"/>
                                    <label for="sp">OK</label>
                                    <input name="sp" type="radio" id="sp2" class="with-gap" value="NOK"/>
                                    <label for="sp2">NOK</label>
                                </div>
                                <div class="col-sm-4">
                                <div class="form-group">
                                    <h2 class="card-inside-title">No SP</h2>                                    
                                        <div class="form-line">
                                            <input type="text" id="no_sp" class="form-control" placeholder="NO SP.." name="no_sp" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                <h2 class="card-inside-title">TANGGAL SP</h2>
                                    <input type="date" id="tanggal_sp" class="form-control" name="tanggal_sp" disabled/>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">BAST</h2>
                                    <input name="bast" type="radio" class="with-gap" id="bast" value="OK"/>
                                    <label for="bast">OK</label>
                                    <input name="bast" type="radio" id="bast2" class="with-gap" value="NOK"/>
                                    <label for="bast2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title">TANGGAL BAST</h2>                                    
                                        <div class="form-line">
                                            <input type="date" id="bulan_bast" class="form-control" name="bulan_bast" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">INV</h2>
                                    <input name="inv" type="radio" class="with-gap" id="inv" value="OK"/>
                                    <label for="inv">OK</label>
                                    <input name="inv" type="radio" id="inv2" class="with-gap" value="NOK"/>
                                    <label for="inv2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title">No INV</h2>                                    
                                        <div class="form-line">
                                            <input type="text" id="no_inv" class="form-control" placeholder="NO INV.." name="no_inv" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">FP</h2>
                                    <input name="fp" type="radio" class="with-gap" id="fp" value="OK"/>
                                    <label for="fp">OK</label>
                                    <input name="fp" type="radio" id="fp2" class="with-gap" value="NOK"/>
                                    <label for="fp2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title">No FP</h2>                                    
                                        <div class="form-line">
                                            <input type="text" id="no_fp" class="form-control" placeholder="NO FP.." name="no_fp" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">Anggaran</h2>
                                    <select id="Select" class="form-control show-tick" name="anggaran">
                                                    <option></option>
                                                    <option>CAPEX</option>
                                                </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">GM / PM</h2>
                                    <select id="Select" class="form-control show-tick" name="gmpm">
                                                    <option></option>
                                                    <?php
                                                    foreach ($gmpm as $data)
                                                        {
                                                            echo '<option value="'.$data->id_gmpm.'">'.$data->nama_gmpm.'</option>';
                                                        }
                                                    ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-4" style="display: none">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">Status</h2>
                                    <select id="Select" class="form-control show-tick" name="status">
                                                    <option></option>
                                                    <?php
                                                    foreach ($status as $data)
                                                        {
                                                            echo '<option value="'.$data->id_status.'">'.$data->nama_status.'</option>';
                                                        }
                                                    ?>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            


                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <input class="btn btn-block bg-blue waves-effect" type="submit" name="submit">
                                </div>
                                <div class="col-sm-6">
                                    <button type="reset" class="btn btn-block bg-red waves-effect" ">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
            <!-- Textarea -->
            <!-- #END# Textarea -->
            <!-- Select -->
            <!-- #END# Select -->
            <!-- Checkbox -->
            <!-- #END# Checkbox -->
            <!-- Radio -->
            <!-- #END# Radio -->
            <!-- Switch Button -->
            <!--#END# Switch Button -->
            <!--DateTime Picker -->
            <!--#END# DateTime Picker -->
        </div>
    </section>
<script type="text/javascript">
    $(function() {
    $('#bulan_tahun').datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'mm-yy',
        onClose: function(dateText, inst) { 
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
    });

});
</script>
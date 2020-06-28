<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form <?php echo $title?></h4>
                                <form method="post"action="<?php echo base_url()?>departement/update_departement/<?php echo $editdata->id_departement?>">
                    
                                    
                                    <div class="form-group">
                                        <label for="example-email">Id departement</label>
                                        <input type="text" class="form-control form-control-line" name="nama_departement" value="<?php echo $editdata->id_departement ?>" id="nama_departement" placeholder="" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">id supir</label>
                                        <input type="text" class="form-control form-control-line" name="supir" value="<?php echo $editdata->id_supir ?> "id="id_supir" placeholder="" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">id rute</label>
                                        <input type="text" class="form-control form-control-line" name="id_rute" value="<?php echo $editdata->id_rute ?> "id="id_rute" placeholder="" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">tanggal</label>
                                        <input type="date" class="form-control form-control-line" name="tanggal" value="<?php echo $editdata->tanggal ?> "id="tanggal" placeholder="" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">jumlah penumpang</label>
                                        <input type="text" class="form-control form-control-line" name="jumlah_penumpang" value="<?php echo $editdata->jumlah_penumpang ?> "id="jumlah_penumpang" placeholder="" required> 
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="<?php echo base_url()?>departement" class="btn btn-secondary">Back</a>
                                    </div>
                                <?php echo form_close();?>
                            </div>
                        </div>
                    </div>
                </div>
                
    <script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url()?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jasny-bootstrap.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script src="<?php echo base_url()?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script>
        // For select 2
        $(".select2").select2();
    </script>
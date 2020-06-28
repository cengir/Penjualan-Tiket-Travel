<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form <?php echo $title?></h4>
                                <form method="post" action="<?php echo base_url()?>departement/save_departement" class="form-material m-t-40">

                                <div class="form-group">
                                        <label for="example-email">ID departement</label>
                                        <input type="text" readonly class="form-control form-control-line" name="id_departement" value="<?php echo $id_departement?>" > 
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="example-email">id supir</label>
                                        <input type="text" class="form-control form-control-line" name="id_supir" placeholder="" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">id rute</label>
                                        <input type="number" class="form-control form-control-line" name="id_rute" placeholder="" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">tanggal</label>
                                        <input type="number" class="form-control form-control-line" name="tanggal" placeholder="" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">jumlah penumpang</label>
                                        <input type="number" class="form-control form-control-line" name="jumlah_penumpang" placeholder="" required> 
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="<?php echo base_url()?>departement" class="btn btn-secondary">Back</a>
                                    </div>
                                </form>
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
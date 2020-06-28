
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data <?php echo $title?>
                                <div class="float-right">                                
                                    <a href="<?php echo base_url()?>rute/add_rute" class="btn btn-circle btn-primary"><i class="mdi mdi-plus"></i></a>                                
                                </div>
                                </h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id rute</th>
                                                <th>Tujuan </th>
                                                <th>Harga</th>
                                                <th>Stock Tiket</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $no = 1;
                                                foreach($query->result() as $row){
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row->id_rute?></td>
                                                <td><?php echo $row->tujuan?></td>
                                                <td><?php echo $row->harga ?></td>
                                                <td><?php echo $row->stock_tiket?></td>
                                               
                                                <td>
                                                    <a href="<?php echo base_url()?>rute/edit_rute/<?php echo $row->id_rute?>" class="btn btn-circle btn-warning"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="<?php echo base_url()?>rute/delete_rute/<?php echo $row->id_rute?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-circle btn-danger"><i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            <?php 
                                            $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
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
    <!-- This is data table -->
    <script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>

       <!-- Sweet-Alert  -->
    <script src="<?php echo base_url()?>assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    <!-- ============================================================== -->
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
   Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
    <script src="<?php echo base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
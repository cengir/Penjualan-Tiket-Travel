<div class="row">
	<div class="col-lg-12">
		<div class="card card-outline-info">
			<div class="card-header">
				<h4 class="m-b-0 text-white">Pesan Tiket</h4>
			</div>
			<div class="card-body">
				<?php
				$created_at= date("Y-m-d");
				?>
				<form action="<?php echo base_url('home')?>/save_tiket" method="post">
					<div class="form-body">
						<h3 class="card-title">Person Info</h3>
						<hr>
						<div class="col-md-6">
							<table>
								<tr>
									<td width="40%">Perusahaan</td>
									<td>:</td>
									<td><b>New Mutiara Travel</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td><b>Jl Patimura 39 Buntu - Kroya - Cilacap</td>
								</tr>
								<tr>
									<td>No Telp</td>
									<td>:</td>
									<td><b>081327015333</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td><b>newmutiaratravel@gmail.com</td>
								</tr>
							</table>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Name</label>
									<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">ID Ktp</label>
									<input type="number" id="id_ktp" name="id_ktp" class="form-control" placeholder="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Kode Tiket</label>
									<input type="text" readonly id="id_tiket" name="id_tiket"
										value="<?php echo $id_tiket?>" class="form-control " placeholder="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">No Telepon</label>
									<input type="text" id="no_tlp" name="no_tlp" class="form-control " placeholder="">
								</div>
							</div>
						</div>
						<div class="row">

							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">Rute</label>
									<select name="id_rute" class="form-control">
										<option value="id_rute">Pilih Tujuan</option>
										<?php 
											$q = $this->db->get('rute')->result();
											foreach($q as $row){
												echo '<option value="'.$row->id_rute.'">'.$row->tujuan.'</option>';
											}
										?>
									</select>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6 ">
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="alamat" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Tgl Keberangkatan</label>
									<input type="date" name="tgl_brngkt" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
						<button type="button" class="btn btn-inverse">Cancel</button>
					</div>
					</br>
					*harap transfer ke rek BCA 422178914 atas nama David Yuan Setya Aji
					</br>
					*dan kirimkan bukti transfer ke nomer yang tertera di atas
					</br>

			</div>
			</form>
		</div>

		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Daftar Penumpang</h4>
					<div class="table-responsive">
						<table class="table table-hover table-bordered-5">
							<thead>
								<tr>
									<td>No.</td>
									<td>Nama</td>
									<td>Alamat</td>
									<td>Tgl Berangkat</td>
									<td>Tgl Pemesanan</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								<?php
								$no=1;
								
								?>
								<?php
			
								foreach($query as $row):
									
								?>
								<tr>
									<td><?php echo $no;?></td>
									<td><?php echo $row['nama'];?></td>
									<td><?php echo $row['alamat'];?></td>
									<td><?php echo $row['tgl_brngkt'];?></td>
									<td><?php echo $row['created_at'];?></td>
									<td>
										<a href="<?php echo base_url().'home/cetak_id/'.$row['transaction_id'];?>"
											class="btn btn-circle btn-info"><i class="fa fa-print"></i></a>

									</td>
								</tr>
								
								<?php
									$no++
								?>
								<?php
									endforeach
								?>
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
	<!-- ============================================================== -->
	<!-- Style switcher -->
	<!-- ============================================================== -->
	<script src="<?php echo base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

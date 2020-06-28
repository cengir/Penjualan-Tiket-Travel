<div class="row">
	<div class="col-lg-12">
		<div class="card card-outline-info">
			<div class="card-header">
				<h4 class="m-b-0 text-white">Pemesanan Tiket</h4>
			</div>



			<div class="box box-default color-palette-box">
				<section class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="text-center">
								<img src="{{ asset('laravel.png') }}" alt="" width="350px" height="150px">
							</div>
						</div>

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
						<div class="col-md-12 mt-3">
							<form action="<?= base_url('home');?>/save_pesan" method="post">
								<table class="table table-hover table-bordered-5">
									<thead>
										<tr>
											<td>#</td>
											<td>Id Ktp</td>
											<td>Nama</td>
											<td>Tujuan</td>
											<td>No Telp</td>
											<td>Alamat</td>
											<td>Harga</td>
											<td>Subtotal</td>
											<td>Deskripsi</td>
											<th>Action</th>
										</tr>
									</thead>

									<!-- MENAMPILKAN PRODUK YANG TELAH DITAMBAHKAN -->
									<tbody>
										<?php 
																$no = 1;
																foreach($query->result() as $row){
															?>
										<tr>
											<td><?php echo $no;?></td>
											<td><?php echo $row->id_ktp?></td>
											<td><?php echo $row->nama?></td>
											<td><?php echo $row->id_rute?></td>
											<td><?php echo $row->no_tlp ?></td>
											<td><?php echo $row->alamat?></td>
											<td><?php echo $row->jumlah_tiket?></td>
											<td><?php echo $row->total?></td>
											<td><?php echo $row->deskripsi?></td>
											<td>
												<form
													action="<?= base_url('home');?>/delete_pesan"
													method="post">
													<input type="hidden" name="_method" value="DELETE"
														class="form-control">
													<button class="btn btn-danger btn-sm">Hapus</button>
												</form>
											</td>
										</tr>
										<?php 
												$no++;
												} ?>
									</tbody>
									<!-- MENAMPILKAN PRODUK YANG TELAH DITAMBAHKAN -->

									<!-- FORM UNTUK MEMILIH PRODUK YANG AKAN DITAMBAHKAN -->
									<tfoot>
										<tr>
											<td></td>
											<td>
												<input type="text" name="id_ktp" placeholder="ID KTP" class="form-control"
													required>
											</td>
											<td>
												<input type="text" name="nama" placeholder="Nama" class="form-control"
													required>
											</td>
											<td>
												<input type="hidden" name="_method" value="PUT" class="form-control">
												<select name="product_id" class="form-control">
													<option value="">Pilih Tujuan</option>
													<?php 
                                                                $q = $this->db->get('rute')->result();
                                                                foreach($q as $row){
                                                                    echo '<option value="'.$row->id_rute.'|'.$row->harga.'">'.$row->tujuan.'  Rp.'.$row->harga.'</option>';
                                                                }
                                                          ?>
												</select>
											</td>
											<td>
												<input type="number" min="1" value="1" name="qty" class="form-control"
													required>
											</td>
											<td colspan="3">
												<button class="btn btn-primary btn-sm">Tambahkan</button>
											</td>
										</tr>
									</tfoot>
									<!-- FORM UNTUK MEMILIH PRODUK YANG AKAN DITAMBAHKAN -->
								</table>
							</form>
						</div>

						<!-- MENAMPILKAN TOTAL & TAX -->
						<div class="col-md-4 offset-md-8">
							<table class="table table-hover table-bordered">
								<tr>
									<td>Sub Total</td>
									<td>:</td>
									<td>Rp {{ number_format($invoice->total) }}</td>
								</tr>
								<tr>
									<td>Pajak</td>
									<td>:</td>
									<td>2% (Rp {{ number_format($invoice->tax) }})</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>:</td>
									<td>Rp {{ number_format($invoice->total_price) }}</td>
								</tr>
							</table>
						</div>
						<!-- MENAMPILKAN TOTAL & TAX -->
					</div>
				</section>
			</div>

		</div>
	</div>
</div>
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url('assets')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('assets')?>/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url('assets')?>/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url('assets')?>/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('assets')?>/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('assets')?>/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?php echo base_url('assets')?>/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?php echo base_url('assets')?>/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('assets')?>/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="<?php echo base_url('assets')?>/plugins/styleswitcher/jQuery.style.switcher.js"></script>
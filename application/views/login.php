
<div class="row">

	<div class="login-box card">
		<div class="card-body">
			<form class="form-horizontal form-material" method="post" action="<?php echo base_url('login')?>/proses_login">
				<h3 class="box-title m-b-20">Sign In</h3>
				<div class="form-group ">
					<div class="col-xs-12">
						<input class="form-control" type="text" name="user_name" required="" placeholder="Username"> </div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<input class="form-control" type="password" name="user_password" required="" placeholder="Password"> </div>
				</div>
				<div class="form-group text-center m-t-20">
					<div class="col-xs-12">
						<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
							type="submit">Log In</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
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
</body>

</html>
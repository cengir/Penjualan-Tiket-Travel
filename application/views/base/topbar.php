<header class="topbar">
	<nav class="navbar top-navbar navbar-expand-md navbar-light">
		<!-- ============================================================== -->
		<!-- Logo -->
		<!-- ============================================================== -->
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url('home')?>">
				<!-- Logo icon -->

				<!--End Logo icon -->
				<!-- Logo text -->
				<span>
					<!-- dark Logo text -->
					<img src="<?php echo base_url('assets')?>/images/logo-muta.png" alt="homepage" class="dark-logo" />
					<!-- Light Logo text -->
					<img src="<?php echo base_url('assets')?>/images/logo-muta.png" class="light-logo"
						alt="homepage" /></span> </a>
		</div>
		<div class="form-group text-right m-t-20">
		</div>
		<!-- ============================================================== -->
		<!-- End Logo -->
		<!-- ============================================================== -->
		<div class="navbar-collapse">
			<!-- ============================================================== -->
			<!-- toggle and nav items -->
			<!-- ============================================================== -->
			<ul class="navbar-nav mr-auto mt-md-0">
				<!-- This is  -->
				<li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
						href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
			</ul>
			<!-- ============================================================== -->
			<!-- User profile and search -->
			<!-- ============================================================== -->
			<ul class="navbar-nav my-lg-0">
				<!-- ============================================================== -->
				<!-- End Messages -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- Profile -->
				<!-- ============================================================== -->
				<li class="nav-item dropdown">
					<div class="form-group text-center m-t-20">

						<div class="col-xs-12">
							<button class="btn btn-rounded btn-danger" type="submit"><a
									href="<?php echo base_url('login')?>"> Log In</button></a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>
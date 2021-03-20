<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/reg.css" rel="stylesheet">

<body class="body-custom">
	<div class="container-contact100">
		<div class="wrap-contact100" style="overflow: hidden;position: relative; background: transparent;">
			<center>
				<div class="jm-logo">
					
						<img src="<?php echo base_url();?>assets/gambar/JAS.png" alt="Logo" style="width: 200px; height: 200px">		
					</a>
				</div>
			</center>
			
			<div style="background: #fff; border-radius: 15px">
				<div class="w3-container w3-center" style="margin-bottom: 0px">
					<h2 style="margin-top: 30px">Registration</h2>
				</div>
				<form class="contact100-form validate-form" action="<?php echo base_url('pelanggan/tambah_user')?>" method="post">
					<div class="wrap-input100 validate-input" data-validate="Nem is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="nama" placeholder="Input Full Name">
						<span class="focus-input100">

						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required:">
						<span class="label-input100">Email Address</span>
						<input class="input100" type="email" name="email" placeholder="Input email address">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Alamat is required">
						<span class="label-input100">Alamat</span>
						<input class="input100" type="text" name="alamat" id="alamat" placeholder="Input alamat">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Notepl is required">
						<span class="label-input100">No.Telepon</span>
						<input class="input100" type="text" name="no_telpon" id="no_telpon" placeholder="Input No.Telepon">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Input Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Input password">
						<span class="focus-input100"></span>
					</div>

					<center style="padding-bottom: 30px;">Have an account?
						<a href="<?php echo base_url('pelanggan/index_login')?>" class="login-register"><b> Sign In</b></a>.
					</center>
					<div class="container-contact100-form-btn btn-submit" style="padding-left:0px;margin: auto;margin-right: 0px;margin-top: 10px;">
						<button type="submit" class="contact100-form-btn" name="tambah_user">
							<span>
							Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				

				</form>
			</div>
		</div>
	</div>
</body>
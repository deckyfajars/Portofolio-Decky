<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet">


<body class="body-custom">
	<div class="logincard">
		<div class="pmd-card card-default pmd-z-depth">
        <div class="login-card">
			<div class="login-card">
				<form action="<?php echo base_url('login/login')?>" method="post" >
					<div class="pmd-card-tittle card-header-border text-center">	
						<div class="loginlogo">
							<a href="">
								<img src="<?php echo base_url();?>assets/gambar/JAS.png" alt="Logo" style="width:150px; height: 140px;">

							</a>
						</div>
						<h3>
							Sign In
							<span>
								to
								<strong>Jasa Titip</strong>
							</span>

						</h3>
						
					</div>	
					<h5 class="text-center"><?php echo $this->session->flashdata('message');?></h5>


					<div class="pmd-card-body">
						<div class="form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-active pmd-textfield-floating-label-completed">
						
							<label for="inputError1" class="control-label pmd-input-group-label">Username</label>
							<div class="input-group">
									<div class="input-group-addon">
										<img class="logo" src="<?php echo base_url();?>assets/gambar/user.png" style="width:20px; height: 20px;">
									</div>
									<input type="text" name="username" class="form-control" value="" placeholder=""  required id="username">
									<span class="pmd-textfield-focused"></span>
								</div>
							</div>

						
						<div class="form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-completed">
						
							<label class="control-label pmd-input-group-label">Password</label>
							<div class="input-group">
									<div class="input-group-addon">
										<img class="logo" src="<?php echo base_url();?>assets/gambar/lock.png" style="width:20px; height: 20px;">
									</div>
									<input type="password" name="password" class="form-control" value="" placeholder="" required>
									<span class="pmd-textfield-focused"></span>
								</div>
							</div>
						</div>

						<div class="form-group">
						<label class="forget">Account type:</label>
						<select name="account_type" class="form-control">
							<option value="member">Member</option>
							<option value="admin">Admin</option>
						</select>
					</div>

					<button class="btn pmd-ripple-effect btn-primary btn-block">Login</button>
					<?php if($this->session->flashdata()){ ?>
					<div class="alert alert-danger">
						<strong> <?php echo $this->session->flashdata('login'); ?></strong>
					</div>
					<?php } ?>
						<center>
						<p class="redirection-link">
							Don't have an account?
							<a href="<?php echo base_url('pelanggan/index_register')?>" class="login-register">Sign-Up</a>
						</p>
						</center>
					</div>
					
				</form>
				
			</div>	
		</div>

	</div>
</body>
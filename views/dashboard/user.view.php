<?php require base_path('Core/UserAuthentication.php') ?>
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>

<div class="page-wrapper">


			<div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12 mt-5">
							<h3 class="page-title mt-3">Good Day, <?= $_SESSION['first_name'] ?></h3>
							
						</div>
					</div>
					<?php if (isset($_SESSION['message']) ) : ?>
						<br>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
									<strong><?= $_SESSION['message'] ?></strong>
										<?php unset($_SESSION['message']) ?>
						</div>
					<?php endif; ?>

				<br>
					<div class="row">
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill" style="background-color:#f2f5fa; -webkit-text-fill-color:white">
							<div class="card-body">
								<div class="dash-widget-header">
								<button class="btn btn-rounded btn-info btn-lg col-12" onclick="location.href='/reports'">
									REQUEST FOR ASSISTANCE
								</button>
								
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill" style="background-color:#f2f5fa; -webkit-text-fill-color:white"">
							<div class="card-body">
								<div class="dash-widget-header">
								<button class="btn btn-rounded btn-danger btn-lg col-12" onclick="location.href='tel:12121'">
									DIAL HOTLINE NUMBER
								</button>	
								</div>
							</div>
						</div>
					</div> -->
					
					
				</div>
				<br>
				<br/>
				<div class="row">
                     <div class="col-md-4 d-flex">
                        <div class="card flex-fill">
                           <div class="card-header" style="background-color: #fece2e;">
                              <h2 class="card-title" style="font-size:19px"><b>BAYAWAN EMERGENCY LINES</b></h2>
                           </div>
                           <div class="card-body">
						   <?php foreach ($hotlines as $hotline) : ?>
								<ul class="list-group list-group-flush">
									<li class="list-group-item"><u style="text-decoration-color: #fece2e;font-size:17px;font-weight:bold"><?= strtoupper($hotline['name']) ?></u>
										<span class="float-right" >
											<a href="tel:<?= $hotline['number'] ?>" style="color:black">
												<u style="text-decoration-color: #fece2e;font-size:17px;font-weight:bold">
													<?= $hotline['number'] ?>
												</u>
											</a>
										</span>
									</li>
								</ul>
							<?php endforeach; ?>
							</div>
                        </div>
                     </div>
                     
                     
                  </div>
				</div>
			</div>
</div>

<!-- <div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Respondent Types</h4> <a href="add-staff.html" class="btn btn-primary float-right veiwbutton">Add Respondent Types</a> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
                                                
												<th>Name</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
                                                
                                               
												<td>Fire Fighter</td>
												<td class="text-center">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-staff.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
                                            
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

<?php require base_path('views/partials/footer.php') ?>





<?php require base_path('Core/AdminAuthentication.php') ?>
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>

<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2"><?= $heading ?></h4> <a href="/hotlines/create" class="btn btn-primary float-right veiwbutton">Add Hotline</a> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- <div class="col-lg-12">
						<form>
							<div class="row formtype">
								<div class="col-md-3">
									<div class="form-group">
										<label>Staff ID</label>
										<input class="form-control" type="text" value="BKG-0001"> </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Staff Name</label>
										<input class="form-control" type="text" value="BKG-0001"> </div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Role</label>
										<select class="form-control" id="sel1" name="sellist1">
											<option>Select</option>
											<option>Staff</option>
											<option>Manager</option>
											<option>Receptionalist</option>
											<option>Accountant</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Search</label> <a href="#" class="btn btn-success btn-block mt-0 search_button"> Search </a> </div>
								</div>
							</div>
						</form>
					</div> -->
				</div>
				<?php if (isset($_SESSION['message']) ) : ?>
                    
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong><?= $_SESSION['message'] ?></strong>
											<?php unset($_SESSION['message']) ?>
                            </div>
                <?php endif; ?>
				<div class="row">
					<div class="col-sm-12">
					
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>

                                                <th>#</th>
												<th>Name</th>
												<th>Tel/Mobile No.</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php $i=1; ?>
											<?php foreach ($hotlines as $hotline) : ?>
											<tr>
												<td><?=  $i++ ?></td>
												<td><?= $hotline['name'] ?></td>
												<td><?= $hotline['number'] ?></td>
												<td class="text-center">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> 
															<a class="dropdown-item" href="/hotline?id=<?= $hotline['id'] ?>"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> 
														</div>
													</div>
												</td>
											</tr>
											<?php endforeach; ?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>

<?php require base_path('views/partials/footer.php') ?>
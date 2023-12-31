<?php require base_path('Core/UserAuthentication.php') ?>
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>

<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2"><?= $heading ?></h4>
								<i style="font-size:26px;cursor: pointer" class="fa float-right mt-1" onClick="window.location.href=window.location.href">&#xf021;</i>

								<!-- <a href="#" class="btn btn-primary float-right veiwbutton">Add Incident</a>  -->

							</div>
	
							</div>

					</div>
				</div>

				<div class="row">
					<div class="col">
					</div>
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
				<div class="row">

					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="reports table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th width="10%">Reported Date</th>   
												<th width="10%">Incident</th>
                        <th width="5%">Status</th>
												<th>Message from Respondent</th>
											</tr>
										</thead>
										<tbody>

											<?php foreach ($reports as $report) : ?>
											<tr>
												<td><?= date('F j, Y, g:i a',strtotime($report['created_at'])) ?></td>
												<td><?= $report['name'] ?></td>
												<td>
													<?php if ($report['status'] == '1' ) :?>
														    <div class="actions"> <a class="btn btn-sm bg-success-light mr-2" style="pointer-events: none">Done</a> </div>
                          <?php elseif($report['status'] == '2'): ?>
                                <div class="actions"> <a class="btn btn-sm bg-success-light mr-2" style="pointer-events: none">Ongoing</a> </div>    
                          <?php else: ?>
                                <div class="actions"> <a class="btn btn-sm bg-warning-light mr-2" style="pointer-events: none">Pending</a> </div>
                          <?php endif; ?>
												</td>
                        <td><?= $report['message'] ?: 'No message yet.' ?></td>

												
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
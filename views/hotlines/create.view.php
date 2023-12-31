<?php require base_path('Core/AdminAuthentication.php') ?>
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/sidebar.php') ?>

<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5"><?= $heading ?></h3> </div>
					</div>
				</div>

                <?php if (isset($errors['name']) ) : ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><?= $errors['name'] ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if (isset($errors['description']) ) : ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><?= $errors['number'] ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                        </div>
                        
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-4">
                        <form method="POST" action="/hotlines">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="Enter Name Here" class="form-control" name="name" required>
                            </div>

                            <div class="form-group">
                                <label>Tel/Mobile No.</label>
                                <input type="text" placeholder="Enter Tel/Mobile No. Here" class="form-control" name="number" required>
                            </div>
                            <!-- <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                       <option>-- Select --</option>
                                       <option value="1">Active</option>
                                       <option value="0">Inactive</option>
                                    </select>
                            </div> -->
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>

<?php require base_path('views/partials/footer.php') ?>
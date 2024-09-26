<div class="content">
	<div class="row">	   
		<div class="col-lg-12">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">Rating Master </h6>
					</div>
					<div class="pull-right">
						<a href="<?php echo BASE_URL;?>/admin/rating_master" class="btn btn-primary btn-sm">&nbsp <i class="fa fa-plus-circle"></i> Create Rating Master &nbsp </a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-body">
					<form action="" id="loginForm" class="searchForm" method="get">
						<div class="row">
							<div class="col-md-3">						
								<div class="form-group col-lg-12">
									<label class="control-label mb-10 text-left">Rating Name</label>
									<input value="<?php echo @$rating_name; ?>" id="rating_name" class="form-control" name="rating_name" type="text">
								</div>
							</div>
							<div class="form-group col-md-1">
								<div class="text-left">
									<label>&nbsp;</label>
									<button class="btn btn-primary btn-sm">Search</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="hpanel">
					<div class="panel-body">
						<div class="table-wrap">
							<div class="table-responsive">
								<div id="edit_datable_2_wrapper" class="dataTables_wrapper">
									<table cellpadding="1" cellspacing="1" id="edit_datable_2" class="table table-hover table-bordered mb-0">
										<thead>
											<tr>
												<th class="col-sm-6">Rating Name</th>
												<th class="col-sm-2">Rating Scale</th>
												<th class="col-sm-2">Status</th>
												<th class="col-sm-2">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($searchresults as $val){ ?>
											<tr class="tooltip-demo" id="leveldel_<?php echo $val['rating_id']; ?>" >
												<td><?php echo @$val['rating_name']; ?></td>
												<td><?php echo @$val['rating_scale']; ?></td>
												<td><?php echo @$val['rating_status']; ?></td>
												<td>
													<a class="mr-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"  href="<?php echo BASE_URL;?>/admin/rating_view?rating_id=<?php echo @$val['rating_id'];?>&hash=<?php echo md5(SECRET.$val['rating_id']);?>"><i class="fa fa-eye text-success"></i> </a>
													<a class="mr-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Update"  href="<?php echo BASE_URL;?>/admin/rating_master?rating_id=<?php echo @$val['rating_id'];?>&hash=<?php echo md5(SECRET.$val['rating_id']);?>"><i class="fa fa-pencil text-primary"></i> </a>
													<a class="mr-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" id="<?php echo $val['rating_id']; ?>" name="deleterating" rel="leveldel_<?php echo $val['rating_id']; ?>" onclick="deletefunction(this)"><i class="fa fa-trash text-danger"></i> </a>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
									<?php echo $pagination; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
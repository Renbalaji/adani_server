<div class="content">
	<div class="row">	   
		<div class="col-lg-12">
			<div class="panel panel-inverse card-view">
				<div class="panel-heading">
					<font color="#FF0000">* Indicated are Mandatory <br></font>
				</div>
				<div class="panel-body">
					<form class='form-horizontal' name="migrate_data" id="migrate_data" action="<?php echo BASE_URL;?>/admin/org_data_migrate" method="post">
						<div class="form-group">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right">Parent Organization<sup><font color="#FF0000">*</font></sup>:</label>
							<div class="col-xs-12 col-sm-9">
								<div class="clearfix" style='width: 31%;'>
									<select name='parent_org' id='parent_org' class='validate[required] chosen-select form-control'>
										<option value=''>Select</option>
									<?php foreach($po_orgs as $query_data){
											echo "<option value=".$query_data->orgid.">".$query_data->orgname."</option>";
										}
									?>
									</select>
								</div>
							</div>
						</div>
						<div class="space-2"></div>
						<div class="form-group">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right">Choose File<sup><font color="#FF0000">*</font></sup>:</label>
							<div class="col-xs-12 col-sm-3">
								<div class="clearfix">
									<input type="file" name="empdata" id="empdata" value="" class='validate[required,custom[uploadcsv]]'>
								</div>
								<a style="color:blue;cursor:pointer;text-decoration: underline;" href="<?php echo BASE_URL;?>/public/uploads/sample_csv/emp_personaldata/sample.csv">Sample File</a>
							</div>
						</div>
						<div class="space-2"></div>
						<div class="form-group">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right"></label>
							<div class="col-xs-12 col-sm-9">
								<div class="clearfix">
									<input type="button" name="migrate" id="migrate" value="Upload" class="btn btn-sm btn-success">
								</div>
							</div>
						</div>
						<div class="space-2"></div>

						<div id="emppersonal_migrate_data"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
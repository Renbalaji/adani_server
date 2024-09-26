<div class="content">
<div class="row">	   
    <div class="col-lg-12">
        <div class="panel panel-default card-view hblue">
            <div class="panel-heading hbuilt">
				Notification				
			</div>			
			<div class="panel-heading hbuilt hblue">
               Search
            </div>
			<!--<div class="panel-body">
				<form action="#" id="loginForm">
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group col-lg-6">
							<label>Master Code</label>
							<input type="text" name="master_code" id="master_code" value="<?php echo isset($master_code)? $master_code:""; ?>" class="form-control" >
						</div>
					</div>
					<div class="form-group col-md-1">
						<div class="text-left">
							<label>&nbsp;</label>
							<button type="submit" class="btn btn-primary btn-sm form-control" id="submit" >Search</button>
						</div>

					</div>
				</div>
				
					
					
				</form>
			</div>-->
			<div class="panel panel-inverse card-view">
				<div class="panel-heading hbuilt">
					Search Results
				</div>
				<div class="panel-body">
				<?php echo $pagination; ?> 
					<div class="table-responsive">
					
                <table cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
						<th>Notification Name</th>
						<th>Notification Status</th>
						<th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					if(count($notificdetails)){
						foreach($notificdetails as $key=>$notificdetail){
							$key1=$key+1;
							$nid=$notificdetail['notification_typeid'];
							$hash=md5(SECRET.$nid);
							if($nid<6){?>
							<tr id="row<?php echo $key1;  ?>">
								<td><?php echo $notificdetail['notification_name']; ?></td>
								<td><?php echo $notificdetail['status']=='A'?"Active":"InActive"; ?></td>
								<td>
									<a class="btn btn-info btn-xs" href="<?php echo BASE_URL."/admin/notification?id=".$nid."&hash=".$hash;?>"><i class="fa fa-paste"></i> Update</a>
								</td>
							</tr>
							<?php   
							} 
						}
					}
					else {  echo "<td colspan='4' class='nodata'>No Data Found</td>"; } ?>
					</tbody>
                </table>
				 
                </div>
				<?php echo $pagination; ?> 
				</div>
			</div>
            
        </div>
    </div>
</div>

</div>
<div id="dialog-confirm" class="hide">
	<div class="alert alert-info bigger-110">
		Do you want to Delete this 
Notification ?.
	</div>

	<div class="space-6"></div>

	<p class="bigger-110 bolder center grey">
		<i class="ace-icon fa fa-hand-o-right blue bigger-120"></i>
		Are you sure?
	</p>
</div>

<div id="dialog-confirm-delete" class="hide">
	<div class="alert alert-info bigger-110">
		
	</div>

	<div class="space-6"></div>
	
</div>
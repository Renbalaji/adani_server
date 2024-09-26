<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-inverse card-view">
				
                <div class="panel-body">					
					<table class="table table-bordered table-striped" cellspacing="1" cellpadding="1">
						<thead>
							<tr>
								<th style=" background-color: #edf3f4;width:20%">Criticality Name</th>
								<th><?php  echo $criticalitydetails['comp_cri_name'];?>&nbsp;</th>
							</tr>
							<tr>
								<th style=" background-color: #edf3f4;width:20%">Status</th>
								<th><?php echo $criticalitydetails['val_status'];?>&nbsp;</th>
							</tr>
						</thead>
					</table>
					<div class="hr-line-dashed"></div>
					<div class="form-group">
						<div class="col-sm-offset-4">
							<button class="btn btn-success" type="button" onClick="create_link('criticality_master?id=<?php echo $criticalitydetails['comp_cri_id']."&hash=".md5(SECRET.$criticalitydetails['comp_cri_id']);?>')">Update</button>
							<button class="btn btn-info" type="button" onClick="create_link('criticality_master')">Create</button>
							<button class="btn btn-danger" type="button" onClick="create_link('criticality_master_search')">Cancel</button>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
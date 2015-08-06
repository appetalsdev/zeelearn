<div class="row">
	<div class="col-md-12">
		<div class="portlet light">
			<div class="portlet-title tabbable-line">
				<div class="caption caption-md">
					<i class="icon-globe theme-font hide"></i>
					<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
				</div>
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#" data-target="#tab_1_1" data-toggle="tab">Personal Info</a>
					</li>
					<li>
						<a href="#" data-target="#tab_1_2" data-toggle="tab">Change Avatar</a>
					</li>
					<li>
						<a href="#" data-target="#tab_1_3" data-toggle="tab">Change Password</a>
					</li>
				</ul>
			</div>
			<div class="portlet-body">
				<div class="tab-content">
					<!-- PERSONAL INFO TAB -->
					<div class="tab-pane active" id="tab_1_1">
						<form role="form" name="frmuser" novalidate>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">First Name</label>
										<input type="text" ng-model="frm.firstname" class="form-control"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Last Name</label>
										<input type="text" ng-model="frm.lastname" class="form-control"/>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">Gender</label>
										<div class="col-md-8">
											<div class="radio-list">
												<label class="radio-inline">
												<div class="radio-sp"><input type="radio" value="male" ng-model="frm.gender" name="gender" ng-required="!gender"></div>
												Male </label>
												<label class="radio-inline">
												<div class="radio-sp"><input type="radio" value="female" ng-model="frm.gender" name="gender" ng-required="!gender"></div>
												Female </label>
											</div>
											<div style="color:#f3565d;" ng-messages="frmuser.gender.$error" ng-if="frmuser.$submitted">
												<p ng-message="required">Gender is required.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">DOB</label>
										<div class="col-md-8">
											<input type="text" class="form-control input-inline input_full" ui-mask="99/99/9999" ng-model="frm.dob" name="dob" required id="dob" >
											<div style="color:#f3565d;" ng-messages="frmuser.dob.$error" ng-if="frmuser.$submitted">
												<p ng-message="required">DOB is required.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Contact Number</label>
										<input type="text" ng-model="frm.contact_no" class="form-control"/>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Alt. Contact Number</label>
										<input type="text" ng-model="frm.alt_contact_no" class="form-control"/>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Email</label>
										<input type="text" ng-model="frm.email" class="form-control"/>
									</div>
								</div>
							</div>
							
							<div class="margiv-top-10">
								<a href="#" class="btn green-haze">
								Save Changes </a>
								<a href="#" class="btn default">
								Cancel </a>
							</div>
						</form>
					</div>
					<!-- END PERSONAL INFO TAB -->
					<!-- CHANGE AVATAR TAB -->
					<div class="tab-pane" id="tab_1_2">
						<p>
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
						</p>
						<form action="#" role="form">
							<div class="form-group">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
										<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
									</div>
									<div>
										<span class="btn default btn-file">
										<span class="fileinput-new">
										Select image </span>
										<span class="fileinput-exists">
										Change </span>
										<input type="file" name="...">
										</span>
										<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
										Remove </a>
									</div>
								</div>
								<div class="clearfix margin-top-10">
									<span class="label label-danger">NOTE! </span>
									<span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
								</div>
							</div>
							<div class="margin-top-10">
								<a href="#" class="btn green-haze">
								Submit </a>
								<a href="#" class="btn default">
								Cancel </a>
							</div>
						</form>
					</div>
					<!-- END CHANGE AVATAR TAB -->
					<!-- CHANGE PASSWORD TAB -->
					<div class="tab-pane" id="tab_1_3">
						<form action="#">
							<div class="form-group">
								<label class="control-label">Current Password</label>
								<input type="password" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">New Password</label>
								<input type="password" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">Re-type New Password</label>
								<input type="password" class="form-control"/>
							</div>
							<div class="margin-top-10">
								<a href="#" class="btn green-haze">
								Change Password </a>
								<a href="#" class="btn default">
								Cancel </a>
							</div>
						</form>
					</div>
					<!-- END CHANGE PASSWORD TAB -->
					
				</div>
			</div>
		</div>
	</div>
</div>
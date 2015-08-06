<!-- BEGIN SAMPLE FORM PORTLET-->
<div class="row">
    <!--<div class="col-sm-12">
        <div class="sub_row">
            <a class="pull-right close_right remove" ng-click="$modalCancel()"></a>
            <h3 class="comn_mainhead">Add School</h3><br/>
        </div>
    </div>-->
    
        <div class="col-md-12">  
            <div class="portlet box blue">
				<div class="portlet-body form">
					<form class="form-horizontal" valid-submit="processadd()" name="frmschool" novalidate>
				
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-3 control-label">Name</label>
							<div class="col-md-9">
								<input type="text" class="form-control input-inline input_full" placeholder="Name*" ng-model="frm.name" name="name" ng-model-options="{ debounce: 100 }" required unique-value id="name" mod-type="schools-school" >
								<div style="color:#f3565d;" ng-messages="frmschool.name.$error" ng-if="frmschool.name.$touched || frmschool.$submitted">
									<p ng-message="required">School name is required.</p>
									<p ng-message="unique">School name already used.</p>
								</div>
								<!--<p style="color:#f3565d;" ng-show="frmschool.name.$error.unique">School name already used.</p>-->
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">Address</label>
							<div class="col-md-9">
								<input type="text" class="form-control input-inline input_full" placeholder="Address*" ng-model="frm.address" name="address" required id="address">
								<div style="color:#f3565d;" ng-messages="frmschool.address.$error" ng-if="frmschool.$submitted">
									<p ng-message="required">School Address is required.</p>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">City</label>
							<div class="col-md-9">
								<input type="text" class="form-control input-inline input_full" placeholder="City*" ng-model="frm.city" name="city" required id="city">
								<div style="color:#f3565d;" ng-messages="frmschool.city.$error" ng-if="frmschool.$submitted">
									<p ng-message="required">City is required.</p>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">State</label>
							<div class="col-md-9">
								<input type="text" class="form-control input-inline input_full" placeholder="State*" ng-model="frm.state" name="state" required id="state">
								<div style="color:#f3565d;" ng-messages="frmschool.state.$error" ng-if="frmschool.$submitted">
									<p ng-message="required">State is required.</p>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">Contact Number</label>
							<div class="col-md-9">
								<input type="text" class="form-control input-inline input_full" placeholder="Contact Number" ng-model="frm.contact" name="contact" id="contact" ng-minlength="10" ng-maxlength="10" ng-pattern="phoneNumbr">
								<div style="color:#f3565d;" ng-messages="frmschool.contact.$error" ng-if="frmschool.$submitted">
									<p ng-message="pattern">Contact no. is invalid.</p>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">Email</label>
							<div class="col-md-9">
								<input type="email" class="form-control input-inline input_full" placeholder="Email" ng-model="frm.email" name="email" id="email" ng-pattern="/^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/">
								<div style="color:#f3565d;" ng-messages="frmschool.email.$error" ng-if="frmschool.$submitted">
									<p ng-message="pattern">Email is invalid.</p>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">Website</label>
							<div class="col-md-9">
								<input type="text" class="form-control input-inline input_full" placeholder="Website" ng-model="frm.website" name="website" id="website">
							</div>
						</div>
						
						
					</div>
					<div class="form-actions">
						<button class="btn blue" type="submit">Submit</button>
						<button class="btn default" type="button" ng-click="$modalCancel()">Cancel</button>
					</div>
					
					</form>
				</div>
			</div>
        </div>
    </form>
</div>
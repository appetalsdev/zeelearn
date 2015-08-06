<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
	School Management
</h3>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="#/dashboard">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#/school_management">School Management</a>
		</li>
	</ul>
	<div class="page-toolbar">
		<ul class="nav nav-pills tools"> 
			<li><a style="height:33px; line-height:25px;" class="btn grey-cascade" ng-click="addSchoolView();">Add School</a></li>
		</ul>
	</div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN MAIN CONTENT -->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue-hoki">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-globe"></i>Schools
				</div>
				<div class="tools">
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover" id="sample_1">
					<thead>
						<tr>
							<th>
								<input type="checkbox" id="deleteschools" class="regular-checkbox" ng-model="selectedAll" ng-change="checkAll()" /><label for="deleteschools"></label>
							</th>
							<th>
								Name
							</th>
							<th>
								Address
							</th>
							<th>
								City
							</th>
							<th>
								State
							</th>
							<th>
								Contact
							</th>
							<th>
								Email
							</th>
							<th>
								Website
							</th>
						</tr>
					</thead>
					<tbody>{{totalItems}}
						<tr ng-repeat="school in schools">
							<td>
								<input type="checkbox" id="{{ school.school_id}}" class="regular-checkbox" ng-model="school.checked" ng-click="checkedvalues(school.id)" /><label for="{{ school.id}}">
							</td>
							<td>
							{{school.name}}
							</td>
							<td>
							{{school.address}}
							</td>
							<td>
							{{school.city}}
							</td>
							<td>
							{{school.state}}
							</td>
							<td>
							{{school.contact}}
							</td>
							<td>
							{{school.email}}
							</td>
							<td>
							{{school.website}}
							</td>
						</tr>
					</tbody>
				</table>
				<div class="pagi_wrap" ng-if="totalItems > itemsPerPage" ng-show="schools[0] !== 'E'">
					<div class="dataTables_paginate paging_simple_numbers" style="float:right;">                                                                              
					<pagination total-items="totalItems" items-per-page="itemsPerPage" ng-model="currentPage" page="$parent.currentPage" boundary-links="true" max-size="3"></pagination>    
			Total items: {{totalItems}}<br />
         Items per page: {{itemsPerPage}}<br />
         Current Page: {{currentPage}}					
					</div>
				 </div>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
		
	</div>
</div>
<!-- END MAIN CONTENT -->
<!-- BEGIN MAIN JS -->
<script>
	TableAdvanced.init();
</script>
<!-- END MAIN JS -->
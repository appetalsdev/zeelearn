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
		<button class="btn grey-cascade btn-fit-height" type="button" ng-click="addSchoolView();">Add School</button>
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
					<i class="fa fa-institution"></i>Schools
				</div>
				<div class="tools">
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="dataTables_filter">
							<label>Search:<input type="search" class="form-control input-small input-inline" placeholder="" ng-model="search.name" ng-change="filter()"></label>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<label style="float:right;">Limit:
						<select ng-model="itemsPerPage" class="form-control input-xsmall input-inline" name="itemsPerPage" ng-options="toInt(key) as value for (key,value) in limitOptions"></select>
						</label>
					</div>
				</div>
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<!--<th>
								<input type="checkbox" id="deleteschools" class="regular-checkbox" ng-model="selectedAll" ng-change="checkAll()" /><label for="deleteschools"></label>
							</th>-->
							<th ng-click="sort_by('name');">
								Name <span class="glyphicon sort-icon" ng-show="predicate=='name'" ng-class="{'glyphicon-chevron-down':reverse,'glyphicon-chevron-up':!reverse}"></span>
							</th>
							<th>
								Address
							</th>
							<th ng-click="sort_by('city');">
								City <span class="glyphicon sort-icon" ng-show="predicate=='city'" ng-class="{'glyphicon-chevron-down':reverse,'glyphicon-chevron-up':!reverse}"></span>
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
							<th>
								Actions
							</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" ng-show="filtered.length ==0">
							<td class="dataTables_empty" colspan="8">No schools found</td>
						</tr>
						<tr ng-repeat="school in filtered = (schools | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*itemsPerPage | limitTo:itemsPerPage">
							<!--<td>
								<input type="checkbox" id="{{ school.school_id}}" class="regular-checkbox" ng-model="school.checked" ng-click="checkedvalues(school.id)" /><label for="{{school.id}}">
							</td>-->
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
							<td>
								<a tooltip="Edit School" tooltip-placement="bottom"  class="fa fa-edit" ng-click="editSchoolView(school.id)"></a> / <a tooltip="Delete School" tooltip-placement="bottom"  class="fa fa-trash-o" ng-click="deleteSchoolView(school.id, school.name)"></a>
							</td>
						</tr>
					</tbody>
				</table>
				
				<div class="pagi_wrap" ng-show="filteredItems > itemsPerPage">
					<div class="dataTables_paginate paging_simple_numbers" style="float:right;">                                                                              
					<pagination on-select-page="setPage(page)" total-items="filteredItems" items-per-page="itemsPerPage" ng-model="currentPage" boundary-links="true" max-size="3"></pagination>
					<!--<div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="itemsPerPage" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>-->
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
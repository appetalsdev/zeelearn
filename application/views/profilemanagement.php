<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
		<?php 
			include ("head.php"); 
		?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-md page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
		<!-- BEGIN HEADER -->
		<?php include ("header.php"); ?>
		<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="container">
	<div class="page-container">
	
		<!-- Begin Include Page Sidebar -->
		<?php include ("page_sidebar.php"); ?>
		<!-- End Include Page Sidebar -->	

		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">

				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Profile Management <small>Admin Profile Management for Organization, Franchisee & School </small>
				</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="profilemanagement.html">Profile Management</a>
						</li>
					</ul>

				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->

				
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-edit"></i>Editable Table
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<div class="btn-group">
												<button id="sample_editable_1_new" class="btn green">
												Add New <i class="fa fa-plus"></i>
												</button>
											</div>
										</div>
										<div class="col-md-6">
											<div class="btn-group pull-right">
												<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
														Print </a>
													</li>
													<li>
														<a href="javascript:;">
														Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
														Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_orignal_new">
								<thead>
								<tr>
									<th>
										 Username
									</th>
									<th>
										 Full Name
									</th>
									<th>
										 Points
									</th>
									<th>
										 Notes
									</th>
									<th>
										 Edit
									</th>
									<th>
										 Delete
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 alex
									</td>
									<td>
										 Alex Nilson
									</td>
									<td>
										 1234
									</td>
									<td class="center">
										 power user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 lisa
									</td>
									<td>
										 Lisa Wong
									</td>
									<td>
										 434
									</td>
									<td class="center">
										 new user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 nick12
									</td>
									<td>
										 Nick Roberts
									</td>
									<td>
										 232
									</td>
									<td class="center">
										 power user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 goldweb
									</td>
									<td>
										 Sergio Jackson
									</td>
									<td>
										 132
									</td>
									<td class="center">
										 elite user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 webriver
									</td>
									<td>
										 Antonio Sanches
									</td>
									<td>
										 462
									</td>
									<td class="center">
										 new user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 gist124
									</td>
									<td>
										 Nick Roberts
									</td>
									<td>
										 62
									</td>
									<td class="center">
										 new user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET--> 								
					</div>				
				</div>				

				

					<div class="row">
					<div class="col-md-12">																	
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-edit"></i>Subjects Weightage
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
						<p><i>Note: "Weightage percentage" of all subjects should add/sum/total to 100% </i></p>
						<table>
								<tr>
									<td>
										<b>School: Billabong</b>
									</td>
								</tr>
								<tr>								
									<td>			
										<b>Grade: 1st STD</b>
									</td>
								
								</tr>

						</table></br>
						
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<div class="btn-group">
												<button id="sample_editable_sub_weight" class="btn green">
												Add New <i class="fa fa-plus"></i>
												</button>
											</div>
										</div>
										<div class="col-md-6">
											<div class="btn-group pull-right">
												<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
														Print </a>
													</li>
													<li>
														<a href="javascript:;">
														Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
														Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_sub_weight">
								<thead>
								<tr>
									<th>
										Subjects
									</th>
									<th>
										 Course
									</th>
									<th>
										 Weightage (%)
									</th>
									<th>
										 Edit
									</th>
									<th>
										 Delete
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 English
									</td>
									<td>
										 General
									</td>
									<td class="center">
										 25 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										Science
									</td>
									<td>
										 General
									</td>
									<td class="center">
										 25 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>								
								<tr>
									<td>
										Maths
									</td>
									<td>
										 Geometry
									</td>
									<td class="center">
										 25 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>	
																<tr>
									<td>
										Maths
									</td>
									<td>
										General
									</td>
									<td class="center">
										 25 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>	
								</tbody>
							
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET--> 								
					</div>				
				</div>				


				
				<div class="row">
					<div class="col-md-12">																	
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-edit"></i>Subjects Grade
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<p><i>Note: "Weightage percentage" of all subjects should add/sum/total to 100% </i></p>
						
								<table>
										<tr>
											<td>
												<b>School:</b> Billabong
											</td>
											<td>
												<b>Student ID:</b> XYZZZ1234
											</td>									
										</tr>
										<tr>								
											<td>			
												<b>Grade:</b> 1st STD
											</td>	
											<td>
												<b>Student Name:</b> Alex Ducati
											</td>									
										</tr>
										<tr>
											<td>
												
											</td>
											<td>
												<b>Exam:</b> First Semester Exam
											</td>									
										</tr>
										<tr>								
											<td>			
												
											</td>								
										</tr>								

								</table></br>
						
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<p> 
												<font size="4">
													<b>Percentage / Grade: </b> 										
													<span class="label label-sm label-warning">
													Pending </span> 
												</font>
											
											</p>  
										</div>
										<div class="col-md-6">
											<div class="btn-group pull-right">
												<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
														Print </a>
													</li>
													<li>
														<a href="javascript:;">
														Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
														Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_sub_grad">
								<thead>
								<tr>
									<th>
										Subjects
									</th>
									<th>
										 Course
									</th>
									<th>
										 Percentage (%)
									</th>									
									<th>
										 Weightage (%)
									</th>
									<th>
										 Status
									</th>									
									<th>
										 Edit
									</th>
									<th>
										 Delete
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 English
									</td>
									<td>
										 General
									</td>
									<td>
										 92 %
									</td>						
									<td class="center">
										 25 %
									</td>
									<td>
										 <span class="label label-sm label-success">
										Completed </span>
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										Science
									</td>
									<td>
										 General
									</td>
									<td>
										 56 %
									</td>										
									<td class="center">
										 25 %
									</td>
									<td>
										 <span class="label label-sm label-success">
										Completed </span>
									</td>									
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>								
								<tr>
									<td>
										Maths
									</td>
									<td>
										 Geometry
									</td>
									<td>
										 96 %
									</td>										
									<td class="center">
										 25 %
									</td>
									<td>
										 <span class="label label-sm label-success">
										Completed </span>
									</td>									
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>	
																<tr>
									<td>
										Maths
									</td>
									<td>
										General
									</td>
									<td>
										<span class="label label-sm label-warning">
										Pending </span>
									</td>										
									<td class="center">
										 25 %
									</td>
									<td>
										<span class="label label-sm label-warning">
										Pending </span>
									</td>									
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>	
								</tbody>
							
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET--> 								
					</div>				
				</div>								
								
				
				


					<div class="row">
					<div class="col-md-12">																	
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-edit"></i>Subjects Test Grade
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
						<p><i>Note: "Weightage percentage" of all evaluation types should add/sum/total to 100% </i></p>
						<table>
								<tr>
									<td>
										<b>School:</b> Billabong
									</td>
									<td>
										<b>Student ID:</b> XYZZZ1234
									</td>									
								</tr>
								<tr>								
									<td>			
										<b>Grade:</b> 1st STD
									</td>	
									<td>
										<b>Student Name:</b> Alex Ducati
									</td>									
								</tr>
								<tr>
									<td>
										<b>Subject:</b> Maths
									</td>
									<td>
										<b>Exam:</b> First Semester Exam
									</td>									
								</tr>
								<tr>								
									<td>			
										<b>Course:</b> Geometry
									</td>								
								</tr>								

						</table></br>
						
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<p> 
												<font size="4">
													<b>Subject Grade: </b> 95 % 
												</font>
											
											</p>  
										</div>
										<div class="col-md-6">
											<div class="btn-group pull-right">
												<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
														Print </a>
													</li>
													<li>
														<a href="javascript:;">
														Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
														Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_sub_test_grad">
								<thead>
								<tr>
									<th>
										Evaluation Type
									</th>
									<th>
										 Marks Obtained
									</th>									
									<th>
										 Total Marks
									</th>	
									<th>
										 Weightage (%)
									</th>						
									<th>
										 Edit
									</th>
									<th>
										 Delete
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 Written Exams
									</td>
									<td>
										 100
									</td>									
									<td>
										 100
									</td>									
									<td class="center">
										 50 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										Quiz
									</td>
									<td>
										 10
									</td>									
									<td>
										 10
									</td>										
									<td class="center">
										 10 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										Test
									</td>
									<td>
										 45
									</td>									
									<td>
										 50
									</td>										
									<td class="center">
										 10 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										Oral Exams
									</td>
									<td>
										 18
									</td>									
									<td>
										 20
									</td>	
									<td class="center">
										 10 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										Test 1
									</td>
									<td>
										 15
									</td>									
									<td>
										 20
									</td>										
									<td class="center">
										 10 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>	
								<tr>
									<td>
										Test 2
									</td>
									<td>
										 13
									</td>									
									<td>
										 20
									</td>										
									<td class="center">
										 10 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>								
								</tbody>
							
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET--> 								
					</div>				
				</div>
				
				
				
					<div class="row">
					<div class="col-md-12">																	
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-edit"></i>Subjects Test Weightage
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
						<p><i>Note: "Weightage percentage" of all evaluation types should add/sum/total to 100% </i></p>
						<table>
								<tr>
									<td>
										<b>School: Billabong</b>
									</td>
								</tr>
								<tr>								
									<td>			
										<b>Grade: 1st STD</b>
									</td>								
								</tr>
								<tr>
									<td>
										<b>Subject: Maths</b>
									</td>
								</tr>
								<tr>								
									<td>			
										<b>Course: Geometry</b>
									</td>								
								</tr>								

						</table></br>
						
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<div class="btn-group">
												<button id="sample_editable_sub_test_weight" class="btn green">
												Add New <i class="fa fa-plus"></i>
												</button>
											</div>
										</div>
										<div class="col-md-6">
											<div class="btn-group pull-right">
												<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
														Print </a>
													</li>
													<li>
														<a href="javascript:;">
														Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
														Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_sub_test_weight">
								<thead>
								<tr>
									<th>
										Evaluation Type
									</th>
									<th>
										 Total Marks
									</th>	
									<th>
										 Weightage (%)
									</th>						
									<th>
										 Edit
									</th>
									<th>
										 Delete
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 Written Exams
									</td>
									<td>
										 100
									</td>									
									<td class="center">
										 50 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										Quiz
									</td>
									<td>
										 10
									</td>										
									<td class="center">
										 10 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										Test
									</td>
									<td>
										 50
									</td>										
									<td class="center">
										 10 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										Oral Exams
									</td>
									<td>
										 20
									</td>	
									<td class="center">
										 10 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										Test 1
									</td>
									<td>
										 20
									</td>										
									<td class="center">
										 10 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>	
								<tr>
									<td>
										Test 2
									</td>
									<td>
										 20
									</td>										
									<td class="center">
										 10 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>								
								</tbody>
							
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET--> 								
					</div>				
				</div>
				
				
				
				
					<div class="row">
					<div class="col-md-12">																	
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-edit"></i>Exam Weightage
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
						<p><i>Note: For final results, "Weightage percentage" of all exams should add/sum/total to 100% </i></p>
						<table>
								<tr>
									<td>
										<select class="form-control input-small">
											<option>School</option>
										</select>
									</td>
									
									<td>			
										<select class="form-control input-small">
											<option>Class: KG</option>
										</select>
									</td>
								</tr>

						</table></br>
						
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<div class="btn-group">
												<button id="sample_editable_exam_weight" class="btn green">
												Add New <i class="fa fa-plus"></i>
												</button>
											</div>
										</div>
										<div class="col-md-6">
											<div class="btn-group pull-right">
												<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
														Print </a>
													</li>
													<li>
														<a href="javascript:;">
														Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
														Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_exam_weight">
								<thead>
								<tr>
									<th>
										 Exam Name
									</th>
									<th>
										 Grade Level 
									</th>
									<th>
										 Marking Period
									</th>
									<th>
										 Weightage (%)
									</th>
									<th>
										 Edit
									</th>
									<th>
										 Delete
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 First Semester Exams
									</td>
									<td>
										 Kindergarten
									</td>
									<td>
										<select class="form-control input-small">
											<option>Semester 1</option>
										</select>
									</td>
									<td class="center">
										 50 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 Second Semester Exams
									</td>
									<td>
										 Kindergarten
									</td>
									<td>
										<select class="form-control input-small">
											<option>Semester 2</option>
										</select>
									</td>
									<td class="center">
										 50 %
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>							
								</tbody>						
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET--> 								
					</div>				
				</div>				
				
				
				
				
					<div class="row">
					<div class="col-md-12">																	
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-edit"></i>Final Exam Grades
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<table>
										<tr>
											<td>
												<b>School:</b> Billabong
											</td>
											<td>
												<b>Student ID:</b> XYZZZ1234
											</td>									
										</tr>
										<tr>								
											<td>			
												<b>Grade:</b> 1st STD
											</td>	
											<td>
												<b>Student Name:</b> Alex Ducati
											</td>									
										</tr>
								</table></br>
						
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<p> 
												<font size="4">
													<b>Percentage / Grade: </b> 										
													<span class="label label-sm label-warning">
													Pending </span> 
												</font>
											
											</p>  
										</div>
										<div class="col-md-6">
											<div class="btn-group pull-right">
												<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
														Print </a>
													</li>
													<li>
														<a href="javascript:;">
														Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
														Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_final_exam_grad">
								<thead>
								<tr>
									<th>
										 Exam Name
									</th>
									<th>
										 Marking Period
									</th>									
									<th>
										 Percentage / Grade
									</th>
									<th>
										 Weightage (%)
									</th>
									<th>
										 Status
									</th>									
									<th>
										 Edit
									</th>
									<th>
										 Delete
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 First Semester Exams
									</td>
									<td>
										Semester 1
									</td>
									<td>
										96 %
									</td>									
									<td class="center">
										 50 %
									</td>
									<td>
										<span class="label label-sm label-success">
										Completed </span>
									</td>									
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 Second Semester Exams
									</td>
									<td>
										Semester 2
									</td>	
									<td>
										<span class="label label-sm label-warning">
										Pending </span>
									</td>										
									<td class="center">
										 50 %
									</td>
									<td>
										<span class="label label-sm label-warning">
										Pending </span>
									</td>									
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>							
								</tbody>						
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET--> 								
					</div>				
				</div>							




				

					<div class="row">
					<div class="col-md-12">																	
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-edit"></i>Student Grades
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">

						
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<table>
													<tr>
														<td>
															<select class="form-control input-small">
																<option>School</option>
															</select>
														</td>
														
														<td>			
															<select class="form-control input-small">
																<option>Class: KG</option>
															</select>
														</td>
													</tr>

											</table>
										</div>
										<div class="col-md-6">
											<div class="btn-group">
												<button id="sample_editable_student_grad" class="btn green">
												Publish / Post Class Results 
												</button>
											</div>
											<div class="btn-group pull-right">
												<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
														Print </a>
													</li>
													<li>
														<a href="javascript:;">
														Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
														Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_student_grad">
								<thead>
								<tr>
									<th>
										 Student ID
									</th>
									<th>
										 Student Name
									</th>
									<th>
										 Final Grade
									</th>
									<th>
										 Status
									</th>
									<th>
										 Edit
									</th>
									<th>
										 Delete
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 Afghf231123
									</td>
									<td>
										 Ian Hall
									</td>
									<td>
										 50 %
									</td>
									<td>
										<span class="label label-sm label-success">
										Completed </span>
									</td>									
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 ertere31123
									</td>
									<td>
										 Alexander Dumad
									</td>
									<td>
										 55 %
									</td>
									<td>
										<span class="label label-sm label-success">
										Completed </span>
									</td>									
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 hgfhgfe31123
									</td>
									<td>
										 Julia Verns
									</td>
									<td>
										 85 %
									</td>
									<td>
										<span class="label label-sm label-success">
										Completed </span>
									</td>									
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>	
								<tr>
									<td>
										 asmmme31123
									</td>
									<td>
										 Tina Sharma
									</td>
									<td>
										 <span class="label label-sm label-warning">
										Pending </span>
									</td>
									<td>
										<span class="label label-sm label-warning">
										Pending </span>
									</td>									
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>								
								<tr>
									<td>
										 xxxxxcvcb1123
									</td>
									<td>
										 Rakesh Mehra
									</td>
									<td>
										 <span class="label label-sm label-warning">
										Pending </span>
									</td>
									<td>
										<span class="label label-sm label-warning">
										Pending </span>
									</td>									
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>								
								</tbody>						
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET--> 								
					</div>				
				</div>				
								
				

				<!-- END PAGE CONTENT -->
			</div>
		</div>
		<!-- END CONTENT -->
			<!-- BEGIN QUICK SIDEBAR -->
					<?php include ("quick_sidebar.php"); ?>
			<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
		<?php include ("footer.php"); ?>
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		<?php include ("javascript_page.php"); ?>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
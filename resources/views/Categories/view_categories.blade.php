@extends('admin_layout')
@section('admin_content')

<div id="content" class="span10">
			          

			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>  
							      <th>id </th>
								  <th>category Name</th>
								  <th>Category descreption</th>
								  <th> CategoryStatus</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  @foreach($categories as $category)
							<tr> 
							<td>{{$category->categorie_id}}</td>

								<td>{{$category->categorie_name}}</td>
								<td class="center">{{$category->categorie_description}}</td>
					          	 @if($category->categorie_status === 1)
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
							  @else
							  <td class="center">
									<span class="label label-secondary">unactive</span>
								</td>
                           @endif
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
								
	        								 	
									</a>
								</td>
							</tr>
							@endforeach
						  </tbody>
					  </table>            
					</div>
				</div> <!--/span-->
			
			</div> <!--/row-->
@endsection




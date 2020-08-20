@extends('admin_layout')
@section('admin_content')
    

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add  Categries</h2>
					
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="POST" action="{{route('catigori_store')}}">
						@csrf
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">categorie Name </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name ="categorie_name"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block">Start typing to activate auto complete!</p>
							  </div>
							</div>
						

							<div class="control-group">
						        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">catigories description </label>
							  <div class="controls">
								<textarea class="cleditor"  name="categorie_description" id="textarea2" rows="3"></textarea>
							  </div>
							
							</div>
							<label class="control-label" for="typeahead"> publication status </label>
							  <div class="controls">
								<input type="checkbox"  name="categorie_status" class="span6 typeahead" name ="publication_status" value="1" >
								
							  </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add catigories</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

@endsection
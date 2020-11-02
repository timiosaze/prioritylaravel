@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>Edit Priority</h3>
				<form action="">
					<div class="form-group">
						<textarea name="body" id="" cols="20" rows="3" class="form-control" placeholder="Priority"></textarea>
					</div>
					<hr>
					<div class="form-group">
						<div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text">Priority Level</div>
					        </div>
					        <select class="form-control" name="priority_level" id="exampleFormControlSelect1">
					          <option value="" disabled selected>Choose</option>
						      <option value="Highest">Highest</option>
						      <option value="High">High</option>
						      <option value="Medium">Medium</option>
						      <option value="Low">Low</option>
						      <option value="Lowest">Lowest</option>
						    </select>
					    </div>
					</div>
					<button class="btn-primary btn float-right">Create</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection

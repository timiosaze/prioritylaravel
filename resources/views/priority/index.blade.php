@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>New Priority</h3>
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

		<section class="section">
			<div class="data">
				<h5>Priority</h5>
				<ul>
					<li class="no-data text-center">
						No priority yet.
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">Escape the wrath of God by all means</p>
							<h6>Highest</h6>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">Escape the wrath of God by all means</p>
							<h6>Highest</h6>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li class="data-list">
						<div class="data-text">
							<p class="text-class">Escape the wrath of God by all means</p>
							<h6>Highest</h6>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="#" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<form action="">
										<a href="#" class="delete">Delete</a>
									</form>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</section>
		<section class="section">
			<div class="paginate">
				<a href="#" class="btn btn-outline-primary">Prev</a>
				<a href="#" class="btn btn-outline-primary">Next</a>
			</div>
		</section>
	
@endsection

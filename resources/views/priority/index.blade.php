@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				<h3>New Priority</h3>
				<form action="{{route('priority.store')}}" method="POST">
					@csrf
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
					@forelse ($priorities as $priority)

					<li class="data-list">
						<div class="data-text">
							<p class="text-class">{{$priority->body}}</p>
							<h6>{{$priority->priority_level}}</h6>
						</div>
						<div class="actions">
							<div class="row">
								<div class="col text-center">
									<a href="{{route('priority.edit', $priority->id)}}" class="edit">Edit</a>
								</div>
								<div class="col text-center">
									<a href="#" class="delete" data-toggle="modal" data-target="#exampleModal{{$priority->id}}">Delete</a>
								</div>
							</div>
						</div>
					</li>	

					<!-- Modal -->
					<div class="modal fade" id="exampleModal{{$priority->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Delete Priority</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
							{{Str::limit($priority->body, 15)}}
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<form action="{{route('priority.destroy', $priority->id)}}" method="POST">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger">Delete</button>
								</form>
							</div>
						</div>
						</div>
					</div>

					@empty

					<li class="no-data text-center">
						No priority yet.
					</li>	

					@endforelse
					
				</ul>
			</div>
		</section>
		<section class="section">
			{{$priorities->links()}}
		</section>
	
@endsection

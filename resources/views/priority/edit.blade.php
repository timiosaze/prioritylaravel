@extends('layouts.app')

@section('content')
	
		<section class="section">
			<div class="create-form">
				@include('inc.validation')
				<h3>Edit Priority</h3>
				<form action="{{route('priority.update', $priority->id)}}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<textarea name="body" id="" cols="20" rows="3" class="form-control" placeholder="Priority">{{$priority->body}}</textarea>
					</div>
					<hr>
					<div class="form-group">
						<div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text">Priority Level</div>
					        </div>
					        <select class="form-control" name="priority_level" id="exampleFormControlSelect1">
						      <option value="Highest" @if (old('priority_level', $priority->priority_level) === "Highest") selected @endif >Highest</option>
						      <option value="High"    @if (old('priority_level', $priority->priority_level) === "High") selected @endif >High</option>
						      <option value="Medium"  @if (old('priority_level', $priority->priority_level) === "Medium") selected @endif >Medium</option>
						      <option value="Low"     @if (old('priority_level', $priority->priority_level) === "Low") selected @endif >Low</option>
						      <option value="Lowest"  @if (old('priority_level', $priority->priority_level) === "Lowest") selected @endif >Lowest</option>
						    </select>
					    </div>
					</div>
					<button class="btn-primary btn float-right">Update</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</section>

@endsection

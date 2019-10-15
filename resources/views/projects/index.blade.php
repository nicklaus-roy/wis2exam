@extends('layouts.master')
@section('content')
	<div class="container">
		<br>
		<h4>{{ $project->name }}</h4>
		<br>
		<br>
		<div class="row">
			<div class="col-sm-4">
				<div class="card" style="width: 18rem;">
					<div class="card-header">To Do</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Sample Item 1
							<a href="#"><span class="oi oi-pencil"></span></a>
						</li>
						<li class="list-group-item">Sample Item 2
							<a href="#"><span class="oi oi-pencil"></span></a>
						</li>
						<li class="list-group-item">Sample Item 3
							<a href="#"><span class="oi oi-pencil"></span></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card" style="width: 18rem;">
					<div class="card-header">Doing</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Sample Item 1
							<a href="#"><span class="oi oi-pencil"></span></a>
						</li>
						<li class="list-group-item">Sample Item 2
							<a href="#"><span class="oi oi-pencil"></span></a>
						</li>
						<li class="list-group-item">Sample Item 3
							<a href="#"><span class="oi oi-pencil"></span></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card" style="width: 18rem;">
					<div class="card-header">Done</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Sample Item 1
							<a href="#"><span class="oi oi-pencil"></span></a>
						</li>
						<li class="list-group-item">Sample Item 2
							<a href="#"><span class="oi oi-pencil"></span></a>
						</li>
						<li class="list-group-item">Sample Item 3
							<a href="#"><span class="oi oi-pencil"></span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
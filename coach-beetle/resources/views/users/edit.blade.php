@extends('layouts.app')

@section('content')
	<form method="POST" action="/update/user/1">
		@csrf
		@method('PUT')
		<div class="container">
			<div class="row">
				<div class="col-3">
					@include('users.forms.profile')
				</div>
				<div class="col-9">
					@include('users.forms.address')
					@include('users.forms.job')
				</div>
			</div>
		</div>
	</form>
@endsection
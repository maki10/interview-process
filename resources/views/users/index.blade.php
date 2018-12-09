@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
		@if (session('success'))
		    <div class="alert alert-success no-hide col-sm-8">
			    <span class="help-block">
			    	<span class="icon mdi mdi-badge-check"></span>
		            <strong>{{ session('success') }}</strong>
		        </span>
		    </div>
		@endif

		@if (session('error'))
		    <div class="alert alert-danger no-hide col-sm-8">
			    <span class="help-block">
			    	<span class="icon mdi mdi-badge-check"></span>
		            <strong>{{ session('error') }}</strong>
		        </span>
		    </div>
		@endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users
                	<a class="float-right" href="{{ route('users.create') }}">Create user</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group">
                    	@foreach ($users as $user)
                    	<li class="list-group-item {{ $user->trashed() ? 'disabled' : '' }}">
                    		<a style="{{ $user->trashed() ? 'color:red' : '' }}" href="edit/{{ $user->id }}">{{ $user->fname }} {{ $user->lname }}</a>
                    	</li>
                    	@endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

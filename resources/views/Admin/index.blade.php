@extends('layout.app')
@section('title','admin')
@section('content')
@php
	$id=12;
@endphp
	<div>
		<a href="{{ route('admin.users.create') }}">user create</a>
	</div>
	<div>
		<form method="POST" action="{{ route('admin.users.store') }}">
			@csrf
				<button>user store</button>
		</form>
	</div>
	<div>
		<a href="{{ route('admin.users.edit',['user'=>$id]) }}">user edit</a>
	</div>
	<div>
		<form method="POST" action="{{ route('admin.users.update',$id) }}">
			@csrf
			@method('PUT')
				<button>user update</button>
		</form>
	</div>
	<div>
		<form method="POST" action="{{ route('admin.users.destroy',$id) }}">
			@csrf
			@method('DELETE')
				<button>user delete</button>
		</form>
	</div>

@endsection
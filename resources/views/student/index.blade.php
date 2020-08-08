@extends('layout.app')
@section('title','Student')
@section('content')
<h1>Data Siswa</h1>
<a href="/students/create">Tambah Data</a>
	<table border="1" style="width:100%">
		<thead>
			<tr>
				<th>guardian id</th>
				<th>name</th>
				<th>nis</th>
				<th>gender</th>
				<th>birth date</th>
				<th>address</th>
				<th>class</th>
				<th>major</th>
				<th>height</th>
				<th>weight</th>
				<th>action</th>
			</tr>		
		</thead>
		<tbody>
			@foreach($students as $student)
				<tr>
					<td>{{ $student->Guardian['name']}}</td>
					<td>{{ $student->name}}</td>
					<td>{{ $student->nis}}</td>
					<td>{{ $student->gender}}</td>
					<td>{{ $student->birth_date}}</td>
					<td>{{ $student->address}}</td>
					<td>{{ $student->class}}</td>
					<td>{{ $student->major}}</td>
					<td>{{ $student->height}}</td>
					<td>{{ $student->weight}}</td>
					<td>
						<a href="/students/edit/{{$student->id}}">Edit</a>
						<form action="/students/delete/{{$student->id}}" method="POST">
							@csrf
							@method('DELETE')
							<button>Hapus</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
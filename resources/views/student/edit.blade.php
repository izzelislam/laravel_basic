@extends('layout.app')
@section('title','Student')
@section('content')
	<h1>Insert data SIswa</h1>
	<form method="POST" action="/students/update/{{$student->id}}">
		@csrf
		@method('PUT')
		<label>
			guardian id
			<input type="text" name="guardian_id" value="{{$student->guardian_id}}">
		</label>
		<br><br>

		<label>
			name
			<input type="text" name="name" value="{{$student->name}}">
		</label>
		<br><br>

		<label>
			nis
			<input type="text" name="nis" value="{{$student->nis}}">
		</label>
		<br><br>

		<label>
			gender
			<label>
				<input type="radio" name="gender" {{$student->gender == 'l'? 'checked' :null}} value="l">
				laki-laki
			</label>

			<label>
				<input type="radio" name="gender" {{$student->gender == 'p'? 'checked' :null}} value="p">
				perempuan
			</label>
		</label>
		<br><br>

		<label>
			birth date
			<input type="date" name="birth_date" value="{{$student->birth_date}}">
		</label>
		<br><br>

		<label>
			address
			<textarea type="text" name="address">
				{{$student->address}}
			</textarea>
		</label>
		<br><br>

		<label>
			kelas
			<select name="class">
				<option {{$student->class == '10' ? 'selected' : ''}} value="10">class 10</option>
				<option {{$student->class == '11' ? 'selected' : ''}} value="11">class 11</option>
				<option {{$student->class == '12' ? 'selected' : ''}} value="12">class 12</option>
			</select>
		</label>
		<br><br>

		<label>
			jurusan
			<select name="major">
				<option value="IPA" {{$student->major == 'IPA' ? 'selected' : ''}} >IPA</option>
				<option value="IPS" {{$student->major == 'IPS' ? 'selected' : ''}}>IPS</option>
				<option value="BAHASA" {{$student->major == 'BAHASA' ? 'selected' : ''}} >BAHASA</option>
				<option value="AGAMA" {{$student->major == 'AGAMA' ? 'selected' : ''}}>AGAMA</option>
			</select>
		</label>
		<br><br>

		<label>
			tinggi
			<input type="number" name="height" value="{{$student->height}}">
		</label>
		<br><br>

		<label>
			berat
			<input type="number" name="weight" value="{{$student->weight}}">
		</label>
		<br><br>
		<input type="submit" value="submit">
	</form>
@endsection
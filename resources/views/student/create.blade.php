@extends('layout.app')
@section('title','Student')
@section('content')
	<h1>Insert data SIswa</h1>
	<form method="POST" action="/students/store">
		@csrf
		<label>
			guardian 
			<select name="guardian_id">
				@foreach($guardians as $guardian)
					<option value="{{$guardian->id}}">
						{{$guardian->name}}
					</option>
				@endforeach
			</select>
		</label>
		<br><br>

		<label>
			name
			<input type="text" name="name">
		</label>
		<br><br>

		<label>
			nis
			<input type="text" name="nis">
		</label>
		<br><br>

		<label>
			gender
			<label>
				<input type="radio" name="gender" value="l">
				laki-laki
			</label>

			<label>
				<input type="radio" name="gender" value="p">
				perempuan
			</label>
		</label>
		<br><br>

		<label>
			birth date
			<input type="date" name="birth_date">
		</label>
		<br><br>

		<label>
			address
			<textarea type="text" name="address">
				
			</textarea>
		</label>
		<br><br>

		<label>
			kelas
			<select name="class">
				<option value="10">kelas 10</option>
				<option value="11">kelas 11</option>
				<option value="12">kelas 12</option>
			</select>
		</label>
		<br><br>

		<label>
			jurusan
			<select name="major">
				<option value="IPA">IPA</option>
				<option value="IPS">IPS</option>
				<option value="BAHASA" selected>BAHASA</option>
				<option value="AGAMA">AGAMA</option>
			</select>
		</label>
		<br><br>

		<label>
			tinggi
			<input type="number" name="height">
		</label>
		<br><br>

		<label>
			berat
			<input type="number" name="weight">
		</label>
		<br><br>
		<input type="submit" value="submit">
	</form>
@endsection
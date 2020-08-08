@extends('layout.app')
@section('title','Guardian')
@section('content')
	<h1>insert data</h1>
	@if ($errors->any())
		<hr>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
	<form method="POST" action="/guardians/store">
		@csrf
		<table>
			<tr>
				<td>nama :</td>
				<td> <input type="text" name="name" placeholder="nama" value="{{ old ('name') }}"></td>
			</tr>
			<tr>
				<td>nik :</td>
				<td> <input type="number" name="nik" placeholder="nik" value="{{ old('nik') }}"></td>
			</tr>
			<tr>
				<td>gender :</td>
				<td> laki-laki <input type="radio" name="gender" value="l" {{ old('gender') == 'l' ? 'checked' :'null' }}> perempuan <input type="radio" name="gender" value="p" {{ old('gender') == 'p' ? 'checked' :'null' }}></td>
			</tr>
			<tr>
				<td>phone :</td>
				<td> <input type="number" name="phone" placeholder="phone" value="{{ old('phone') }}"></td>
			</tr>
			<tr>
				<td>Tanngal Lahir :</td>
				<td> <input type="date" name="birth_date" placeholder="Tanngal Lahir" value="{{ old('birth_date') }}"></td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><textarea name="address">{{ old('address') }}</textarea></td>
			</tr>
			<tr>
				<td>anak kandung :</td>
				<td>ya <input type="radio" name="is_parent" value="1" {{ old('is_parent') === '1' ? 'checked' : null  }}>tidak <input type="radio" name="is_parent" value="0" {{ !old('is_parent') === '1' ? 'checked' : null  }}></td>
			</tr>
			<tr>
				<td> <input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
@endsection
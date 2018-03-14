@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Siswa 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nim</label>
						<input type="text" name="nim" class="form-control" value="{{ $a->nim }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Kelas</label>
						<input type="text" name="kelas" class="form-control" value="{{ $a->kelas }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">alamat</label>
						<input type="text" name="alamat" class="form-control" value="{{ $a->alamat }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Guru</label>
						<input type="text" name="guru" class="form-control" value="{{ $a->Guru->nama }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection
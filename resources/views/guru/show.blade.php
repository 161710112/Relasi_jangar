@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Guru 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">NIPD</label>	
			  			<input type="text" name="nipd" class="form-control" value="{{ $a->nipd }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $a->alamat }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Mata Pelajaran</label>	
			  			<input type="text" name="mata_pelajaran" class="form-control" value="{{ $a->mata_pelajaran }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection
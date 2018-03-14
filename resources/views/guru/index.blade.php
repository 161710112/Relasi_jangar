@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-2">
 @include('layouts.navbar')
</div>
	<div class="container">
		<div class="col-md-10">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data guru
			  	<div class="panel-title pull-right"><a href="{{ route('guru.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>NIPD</th>
					  <th>Alamat</th>
					  <th>Mata Pelajaran</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td><p>{{ $data->nipd }}</p></td>
				    	<td><p>{{ $data->alamat }}</p></td>
				    	<td><p>{{ $data->mata_pelajaran }}</p></td>
<td>
							<a class="btn btn-warning" href="{{ route('guru.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('guru.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('guru.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
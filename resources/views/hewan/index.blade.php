@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Hewan</div>

                <div class="panel-body">
                	<a href="{{ route('hewan.create') }}">
                		<button class="btn btn-primary btn-md">Tambah Hewan</button></a>
	                <table class="table">
	                	<thead>
	                		<tr>
	                			<th>Id</th>
	                			<th>Jenis Hewan</th>
	                			<th>Kategori</th>
	                			<th>Bobot</th>
	                			<th>Umur</th>
	                			<th>Jenis Kelamin</th>
	                			<th>Harga</th>
	                			<th>&nbsp;</th>
	                		</tr>
	                		@foreach($hewan as $value)
	                			<tr>
	                				<td>{{ $value->id }}</td>
	                				<td>{{ $value->ras->nama_ras }}</td>
	                				<td>
	                					<ul>
	                					@foreach($value->kategori as $kategori)
	                						<li>{{ $kategori->nama_kategori }} </li> 
	                					@endforeach
	                					</ul>
	                				</td>
	                				<td>{{ $value->bobot }}</td>
	                				<td>{{ $value->umur }}</td>
	                				<td>{{ $value->jenis_kelamin == 'L' ? 'Jantan' : 'Betina' }}</td>
	                				<td>{{ $value->harga }}</td>
	                				<td>
	                					<a href="{{ route('hewan.edit',$value) }}">Edit</a> |
	                					<a href="{{ route('hewan.destroy',$value) }}" onclick="event.preventDefault();
                                                     document.getElementById('destroy-form').submit();">Hapus</a>
	                					
                                        <form id="destroy-form" action="{{ route('hewan.destroy',$value) }}" method="post" style="display: none;">

                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
	                				</td>
	                			</tr>
	                		@endforeach
	                	</thead>	
	                </table>
                </div>

            </div>
        </div>
    </div>
</div>    
@endsection            
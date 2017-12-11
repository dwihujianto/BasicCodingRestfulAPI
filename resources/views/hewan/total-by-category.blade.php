@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Hewan</div>

                <div class="panel-body">
	                <table class="table">
	                	<thead>
	                		<tr>
	                			<th>Id</th>
	                			<th>Kategori</th>
	                			<th>Jumlah</th>
	                		</tr>
	                		@foreach($categories as $value)
	                			<tr>
	                				<td>{{ $value->id }}</td>
	                				<td>{{ $value->nama_kategori }}</td>
	                				<td>{{ $value->hewan->count() }}</td>
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
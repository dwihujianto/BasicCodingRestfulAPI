@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Hewan</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('hewan.update',$hewan) }}">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <div class="form-group{{ $errors->has('ras_id') ? 'has-error' : '' }}">
                        	<label for="ras_id" class="col-md-4 control-label">Ras Hewan</label>

                            <div class="col-md-6">

                            	<select class="form-control" name="ras_id">
                            		@foreach($types as $type)
                            		<option value="{{ $type->id }}" {{ $hewan->ras_id == $type->id ? 'selected' : ''}}>{{ $type->nama_ras }}</option>
                            		@endforeach
                            	</select>

                                @if ($errors->has('ras_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ras_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div style="margin-left: 165px;" class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
	                        <label >Kategori</label>
	                        <div style="margin-left: 100px;" class="checkbox-group">
	                          @foreach($categories as $category)
	                            <div class="checkbox">
	                              <input type="checkbox" name="kategori[]" value="{{ $category->id }}" {{ in_array($category->nama_kategori, $currentCategory) ? 'checked' : '' }}>
	                              <label>{{ $category->nama_kategori }}</label>
	                            </div>
	                          @endforeach
	                        </div>

	                        @if ($errors->has('kategori'))
	                          <span class="help-block">
	                            <strong>{{ $errors->first('kategori') }}</strong>
	                          </span>
	                        @endif
	                    </div>

                        <div class="form-group{{ $errors->has('bobot') ? ' has-error' : '' }}">
                            <label for="bobot" class="col-md-4 control-label">Bobot</label>

                            <div class="col-md-6">
                                <input id="bobot" type="text" class="form-control" name="bobot" value="{{ $hewan->bobot }}" required autofocus>

                                @if ($errors->has('bobot'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bobot') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('umur') ? ' has-error' : '' }}">
                            <label for="umur" class="col-md-4 control-label">Umur</label>

                            <div class="col-md-6">
                                <input id="umur" type="text" class="form-control" name="umur" value="{{ $hewan->umur }}" required autofocus>

                                @if ($errors->has('umur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('umur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                    	<label class="col-md-4 control-label">Jenis Kelamin</label>
                    	<div class="form-check form-check-inline">
						  <label class="form-check-label">
						    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="L"
                            {{ $hewan->jenis_kelamin === 'L' ? 'checked' : '' }}>Jantan
						  </label>
						</div>
						<div class="form-check form-check-inline">
						  <label class="form-check-label">
						    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="P"
                            {{ $hewan->jenis_kelamin === 'P' ? 'checked' : '' }}>Betina
						  </label>
						</div>
							


                        <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                            <label for="harga" class="col-md-4 control-label">Harga</label>

                            <div class="col-md-6">
                                <input id="harga" type="text" class="form-control" name="harga" value="{{ $hewan->harga }}" required autofocus>

                                @if ($errors->has('harga'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

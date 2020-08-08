@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-3"> 
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan {{$tanya->id}}</h3>
              </div>
              <form role="form" action="/pertanyaan/{{$tanya->id}}" method="POST">
              @csrf
              @method ('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul Pertanyaan</label>
                     <input type="text" class="form-control" id="judulpertanyaan" name="judulpertanyaan" value="{{ old('judulpertanyaan', $tanya->judulpertanyaan) }}" placeholder="Enter Judul" required>
                    @error('judulpertanyaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                    <!-- <input type="text" class="form-control" id="judulpertanyaan" name="judulpertanyaan" placeholder="Enter Judul"> -->
              <!-- form start -->
                </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isipertanyaan" name="isipertanyaan" value="{{ old('isipertanyaan', $tanya->isipertanyaan) }}" placeholder="Enter Isi" required>
                    @error('isipertanyaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!--<input type="text" class="form-control" id="isipertanyaan" name="isipertanyaan"  placeholder="Enter Isi">-->
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
</div>
@endsection
@extends('template/main')

@section('title', 'Edit Jadwal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2 class="text-center pt-4">Edit Jadwal</h2>
            <form action="/jadwal/store" method="post" > 
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="kelas">Kelas</label> <br>
                    <select class="form-control" name="kelas" id="kelas" aria-label="Default select example" value="{{old('kelas')}}">
                        <option disabled selected>Pilih Kelas</option>
                        <option value="TI A">TI A</option>
                        <option value="TI B">TI B</option>
                        <option value="TI C">TI C</option>
                        <option value="TI D">TI D</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Konselor</label>
                    <input type="text" class="form-control @error('konselor') is-invalid @enderror" id="konselor" placeholder="Masukkan Nama Konselor" name="konselor" value="{{ old('konselor') }}">
                    @error('konselor')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                <label for="ttl">Tanggal:</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="tanggal" placeholder=" " name="tanggal" value="{{ old('tanggal')}}">
                </div>
            </div>
            <div class="form-group">
                    <label for="nama">Materi</label>
                    <input type="text" class="form-control @error('materi') is-invalid @enderror" id="materi" placeholder="Masukkan Judul" name="materi" value="{{ old('materi') }}">
                    @error('materi')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
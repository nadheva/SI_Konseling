@extends('template/main')

@section('title', 'Edit Jadwal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2 class="text-center pt-4">Edit Jadwal</h2>
            @foreach($jadwal as $j)
            <form action="/jadwal/update/{$jadwal->id}" method="post" >
            @method('put')    
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $j->id }}"> 
            <br/>
                <div class="form-group">
                    <label for="kelas">Kelas</label> <br>
                    <select class="form-control" name="kelas" id="kelas" aria-label="Default select example">
                        <option selected>{{$j->kelas}}</option>
                        <option value="TI A">TI A</option>
                        <option value="TI B">TI B</option>
                        <option value="TI C">TI C</option>
                        <option value="TI D">TI D</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Konselor</label>
                    <input type="text" class="form-control @error('konselor') is-invalid @enderror" id="konselor" placeholder="Masukkan Nama Konselor" name="konselor" value="{{ $j->konselor }}">
                    @error('konselor')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                <label for="ttl">Tanggal:</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="tanggal" placeholder=" " name="tanggal" value="{{ $j->tanggal}}">
                </div>
            </div>
            <div class="form-group">
                    <label for="nama">Materi</label>
                    <input type="text" class="form-control @error('materi') is-invalid @enderror" id="materi" placeholder="Masukkan Judul" name="materi" value="{{ $j->materi }}">
                    @error('materi')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
@endforeach
        </div>
    </div>
</div>
@endsection
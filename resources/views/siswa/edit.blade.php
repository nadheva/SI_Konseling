@extends('template/main')

@section('title', 'Edit Siswa')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2 class="text-center pt-4">Edit Siswa</h2>
            @foreach($siswa as $s)
            <form action="/siswa/update/{$siswa->id}" method="post" >
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ $s->id }}"> 
                <br/>
                <div class="form-group">
                    <label for="nama">Nama lengkap</label>
                    <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" placeholder="Masukkan Nama Siswa" name="nama_siswa" value="{{$s->nama_siswa}}">
                    @error('nama_siswa')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nomor Induk</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukkan NIS" name="nis" value="{{$s->nis}}">
                    @error('nis')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-check">
                <label for="jk">Jenis kelamin</label>
                <br>
                    <input type="radio" name="jk" value="laki-laki">
                    <label class="form-check-label">Laki-laki</label>
                    <input type="radio" name="jk" value="perempuan">
                    <label class="form-check-label">Perempuan</label>
                </div>
                <br>
                <div class="form-group">
                    <label for="kelas">Kelas</label> <br>
                    <select class="form-control" name="kelas" id="kelas" aria-label="Default select example" value="{{old('kelas')}}">
                        <option selected>{{$s->kelas}}</option>
                        <option value="TI A">TI A</option>
                        <option value="TI B">TI B</option>
                        <option value="TI C">TI C</option>
                        <option value="TI D">TI D</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="ttl">Tanggal Lahir:</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="ttl" placeholder=" " name="ttl" value="{{ $s->ttl}}">
                </div>
            </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        @endforeach
        </div>
    </div>
</div>
@endsection
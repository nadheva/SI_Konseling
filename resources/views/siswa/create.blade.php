@extends('template/main')

@section('title', 'Tambah Siswa')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2 class="text-center pt-4">Tambah Siswa</h2>
            <form class="form-horizontal" method="post" action="/siswa/store">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama lengkap</label>
                    <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" placeholder="Masukkan Nama Siswa" name="nama_siswa" value="{{old('nama_siswa')}}">
                    @error('nama_siswa')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nomor Induk</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukkan NIS" name="nis" value="{{old('nis')}}">
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
                        <option disabled selected>Pilih Kelas</option>
                        <option value="TI A">TI A</option>
                        <option value="TI B">TI B</option>
                        <option value="TI C">TI C</option>
                        <option value="TI D">TI D</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="ttl">Tanggal Lahir:</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="ttl" placeholder=" " name="ttl">
                </div>
            </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('template/') }}/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('template/') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('template/') }}/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="{{ asset('template/') }}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{ asset('template/') }}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="{{ asset('template/') }}/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="{{ asset('template/') }}/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="{{ asset('template/') }}/assets/js/argon.js?v=1.2.0"></script>
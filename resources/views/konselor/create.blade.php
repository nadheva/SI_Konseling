@extends('template/main')

@section('title', 'Tambah Konselor')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <h2 class="text-center pt-4">Tambah Konselor</h2>
            <form class="form-horizontal" method="post" action="/konselor/store">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama lengkap</label>
                    <input type="text" class="form-control @error('nama_konselor') is-invalid @enderror" id="nama_siswa" placeholder="Masukkan Nama Konselor" name="nama_konselor" value="{{old('nama_konselor')}}">
                    @error('nama_konseleor')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="Masukkan NIP" name="nip" value="{{old('nip')}}">
                    @error('nip')
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
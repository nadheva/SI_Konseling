@extends('template/main')

@section('title', 'List Konselor')

@section('content')
    <!-- Header -->
    <div class="header bg-success pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-da">
                  <li class="breadcrumb-item"><a href="#">Konselor</a></li>
                  <li class="breadcrumb-item active" aria-current="page">List Konselor</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a class="btn btn-neutral" href="{{ url('/konselor/create') }}">Tambah</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
<div class="container-fluid mt--6">
	<div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">List Konselor</h3>
			  <br>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
				  	      <th width="5%">No</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Gender</th>
                  <th>Tanggal Lahir</th>
                  <th></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
      
				  @foreach ($konselor as $row)
					<tr  class="text-light">
							<td width="5%">{{$loop->iteration}}</td>
                            <td>{{$row->nama_konselor}}</td>
                            <td>{{$row->nip}}</td>
                            <td>{{$row->jk}}</td>
                            <td>{{$row->ttl}}</td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="konselor/edit/{{$row->id}}">Edit</a>
                                <a class="dropdown-item" onclick="return confirm('Anda yakin menghapus ')" href="konselor/delete/{{$row -> id}}">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection

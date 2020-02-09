@extends('layouts.superadmin')
@section('content')

<!-- DataTales Example -->

<div id="wrapper">
  <div class="main-content">
    <div class="row small-spacing">



<div class="box-content" style="width:100%;">
                <div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"></h1>
  <a target="_blank"></a>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header-index" style="display: flex; justify-content: space-between; align-items: center;">
      <h3 class="m-0 font-weight-bold"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Data Pengguna</strong></h3>
        <a href="/pengguna/tambah" data-toggle="modal">
      <button h class="btn btn-primary">
          Tambah Pengguna
      </button>&nbsp;&nbsp;&nbsp;&nbsp;
        </a>
    </div><br>
    <div class="card-body">
      <div class="body table-responsive">
        <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Hak Akses</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($pengguna as $penggunas)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{$penggunas->name}}</td>
              <td>{{$penggunas->email}}</td>
              @if($penggunas->role == '0')
               <td>Kasir</td>
               @elseif($penggunas->role == '1')
               <td>Admin</td>
               @else
               <td>Super Admin</td>
               @endif
               <td><a href="{{route('pengguna_hapus', $penggunas->id)}}" class="hapus"><i class="fa fa-trash-o" aria-hidden="true" title="Hapus"></i>Hapus</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection
@extends('layouts.superadmin')
@section('content')

<!-- DataTales Example -->

  <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA BARANG
                                <small>Different sizes and widths</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <br>	
                            <br>	
                            <form method="POST" action="{{route('pengguna_proses_tambah')}}" enctype="multipart/form-data" >
                            	@csrf
		          <input type="text" name="name" class="form-control" placeholder="Nama" required><br>
		          <input type="email" name="email" class="form-control" placeholder="Email" required><br>
		          <input type="password" name="password" class="form-control" placeholder="Password" required><br>
		           <div class="col-sm-6">
                                    
                                    <select class="form-control show-tick" name="role" required="">
                                       <option value="">Hak Akses</option>
			                		<option value="2">Super Admin</option>
			                		<option value="1">Admin</option>
			                		<option value="0">Kasir</option>

                                    </select>
                                </div>
         		<button type="submit" class="btn btn-primary add" style="float: right;">Tambah</button>
		    </div><br>
		    </form>

                        </div>


@endsection
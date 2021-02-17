@extends('layout.home')
@section('title', 'Dashboard Super Admin')
@section('content')
    <!-- Start div layoutSidenav_content-->
    <div id="layoutSidenav_content">
        <!-- Start main content -->
        <main>
            <div class="container-fluid">
                <div class="row" style="margin-top:10px;">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pd-0 bg-white">
                                <li class="breadcrumb-item"><a href="/superadmin">Dashboard</a></li>
                                <li class="breadcrumb-item" active aria-current="page"><a href="#">Data Staff</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="col-md-4 float-right pd-0">
                            <input type="text" name="search_text" class="form-control" placeholder="Cari nama staff" id="search_text" autocomplete="off" autofocus>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary" id="btn-add-staff" onclick="addStaff()"><i class="fas fa-user-plus"></i> Tambah Staff</button>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="menu-icon fa fa-user"></i>
                            Daftar Staff
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered text-center" id="tableStaff">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Photo</th>
                                        <th>Nama</th>
                                        <th>Divisi</th>
                                        <th>Department</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="rowData">
                                    <tr>
                                        <th>1</th>
                                        <th>12345</th>
                                        <th>Image</th>
                                        <th>Test Nama </th>
                                        <th>ABC</th>
                                        <th>ABC</th>
                                        <th>ABC</th>
                                        <th>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalPensiunStaff">
                                            Pensiun
                                            </button>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalSettingStaff">
                                                Setting
                                            </button>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- end main content -->
    @include('superadmin.pensiun_staff')
    @include('superadmin.setting_staff')
@endsection
@section('pagespecificscripts')
    <script type="text/javascript" src="{{ asset('js/superadmin/staff/staff.js') }}" defer></script>
@stop

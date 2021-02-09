@extends('layout.home')
@section('title', 'Dashboard Super Admin')
@section('content')
    <!-- Start div layoutSidenav_content-->
    <div id="layoutSidenav_content">
        <!-- Start main content -->
        <main>
            <div class="container-fluid">
                <div class="row" style="margin-top:10px;">
                    <div class="col-md-4">
                        <a href="/staff/"><i class="fas fa-chevron-circle-left fa-lg"  style="margin-top:15px;"></i> Kembali</a>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb float-right pd-0 bg-white">
                                <li class="breadcrumb-item"><a href="/staff">Data Staff</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Detail Staff</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fa fa-info-circle"></i>
                            Detail Staff
                    </div>
                    <div class="card-body">
                        <!-- List tab -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#profile" class="nav-link active" data-toggle="tab">
                                    <i class="fa fa-user"></i>
                                    Profil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#document" class="nav-link" data-toggle="tab">
                                    <i class="fa fa-folder"></i>
                                     Dokumen
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contract" class="nav-link" data-toggle="tab">
                                    <i class="fa fa-file"></i>
                                     Kontrak
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#promotion" class="nav-link" data-toggle="tab"> <i class="fa fa-bullhorn"></i> Promosi</a>
                            </li>
                            <li class="nav-item">
                                <a href="#demotion" class="nav-link" data-toggle="tab"> <i class="fa fa-print"></i> Demosi</a>
                            </li>
                            <li class="nav-item">
                                <a href="#mutation" class="nav-link" data-toggle="tab"> <i class="fa fa-briefcase"></i> Mutasi</a>
                            </li>
                            <li class="nav-item">
                                <a href="#warning" class="nav-link" data-toggle="tab"><i class="fa fa-exclamation-triangle"></i> Peringatan</a>
                            </li>
                            <li class="nav-item">
                                <a href="#absence" class="nav-link" data-toggle="tab">
                                    <i class="fa fa-hourglass"></i> Absensi</a>
                            </li>
                            <li class="nav-item">
                                <a href="#ijin" class="nav-link" data-toggle="tab"> <i class="fa fa-phone-square "></i> Ijin</a>
                            </li>
                            <li class="nav-item">
                                <a href="#cuti" class="nav-link" data-toggle="tab"> <i class="fa fa-calendar"></i> Cuti</a>
                            </li>
                        </ul>

                        <!-- Tab content -->
                        <div class="tab-content" style="margin-top:10px;">
                            <div class="tab-pane fade show active" id="profile">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4 text-center">
                                        <div class="col-md-12 ">
                                            <img src="..." alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="col-md-12 p-0 t-10">
                                            <label for="nik">NIK Test</label> 
                                            - 
                                            <label for="name">Name Test</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                               <div class="row"> 
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nik">No KTP : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="nik" placeholder="" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nik">Tempat Lahir: </label>
                                            </div>
                                            <div class="col-md-8 mt-row-profile">
                                                <input type="text" class="form-control" id="nik" placeholder="" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nik">Tanggal Lahir:</label>        
                                            </div>
                                            <div class="col-md-8 mt-row-profile">
                                                <input type="text" class="form-control" id="nik" placeholder="" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Alamat KTP : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="form-control" id="address_ktp" readonly></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nama">Alamat Sekarang : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="form-control" id="current_address" readonly></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Email : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="email" class="form-control" id="email" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">No Telepon : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="phone" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nama">Jenis Kelamin : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="gender" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Agama : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="religion" readonly>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Divisi : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="division" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Cabang : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="branch" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Department : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="deparment" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Bagian : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="bagian" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Golongan : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="golongan" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Jabatan : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="jabatan" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nama">Atasan Langsung : </label>
                                            </div>
                                            <div class="col-md-8 mt-row-profile">
                                                <input type="text" class="form-control" id="jabatan" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nama">Atasan Tidak Langsung : </label>
                                            </div>
                                            <div class="col-md-8 mt-row-profile">
                                                <input type="text" class="form-control" id="jabatan" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nama">Status Menikah : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="status" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nama">Status Pegawai : </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="status" readonly>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Payroll : </label>
                                            </div>
                                            <div class="col-md-8 ">
                                                <input type="text" class="form-control" id="status" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 mt-row-profile">
                                                <label for="nama">Data Keluarga : </label>
                                            </div>
                                            <div class="col-md-8 mt-row-profile">
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDataKeluarga">
                                                    Lihat Data Keluarga
                                                  </button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                        <div class="col-md-4 mt-row-profile">
                                            <label for="nama">Skill dan Edukasi : </label>
                                        </div>
                                        <div class="col-md-8 mt-row-profile">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalSkillEducation">
                                                Lihat Skill & Edukasi
                                              </button>
                                        </div>
                                    </div>
                                    </div> 
                               </div>
                            </div>
                            <div class="tab-pane fade" id="document">
                                <p>Profile tab document ...</p>
                            </div>
                            <div class="tab-pane fade" id="contract">
                                <p>Messages tab contract ...</p>
                            </div>
                            <div class="tab-pane fade" id="promotion">
                                <p>Messages tab promotion ...</p>
                            </div>
                            <div class="tab-pane fade" id="demotion">
                                <p>Messages tab demotion ...</p>
                            </div>
                            <div class="tab-pane fade" id="mutation">
                                <p>Messages tab demotion ...</p>
                            </div>
                            <div class="tab-pane fade" id="warning">
                                <p>Messages tab warning ...</p>
                            </div>
                            <div class="tab-pane fade" id="absence">
                                <p>Messages tab absence ...</p>
                            </div>
                            <div class="tab-pane fade" id="ijin">
                                <p>Messages tab ijin ...</p>
                            </div>
                            <div class="tab-pane fade" id="cuti">
                                <p>Messages tab cuti ...</p>
                            </div>
                        </div>
                        
                          
                    </div>
                </div>
            </div>
        </main>
        <!-- end main content -->

        <!-- Modal Family Data -->
        <div class="modal fade" id="modalDataKeluarga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Keluarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="ace-icon fa fa-male"></i>
                            Ayah
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="tableUser" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Pendidikan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="rowData">
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="ace-icon fa fa-female"></i>
                            Ibu
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="tableUser" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Pendidikan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="rowData">
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="ace-icon fa fa-female"></i>
                            <i class="ace-icon fa fa-female"></i>
                            Suami / Istri
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="tableUser" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Pendidikan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="rowData">
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="ace-icon fa fa-child"></i>
                           Anak
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="tableUser" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Pendidikan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="rowData">
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                
                </div>
            </div>
            </div>
        </div>

         <!-- Modal Skill dan Edukasi -->
         <div class="modal fade" id="modalSkillEducation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Skill dan Edukasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="ace-icon fa fa-folder-open-o"></i>
                            Pendidikan
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="tableUser" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tingkat</th>
                                            <th>Jurusan</th>
                                            <th>Nama Sekolah</th>
                                            <th>Lokasi</th>
                                            <th>Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody class="rowData">
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="ace-icon fa fa-pencil-square-o"></i>
                            Pengalaman
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="tableUser" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Perusahaan</th>
                                            <th>Jenis</th>
                                            <th>Lokasi</th>
                                            <th>Dept</th>
                                            <th>Jabatan</th>
                                            <th>Periode</th>
                                        </tr>
                                    </thead>
                                    <tbody class="rowData">
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="ace-icon fa fa-book"></i>
                            Pelatihan
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="tableUser" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Pelatihan</th>
                                            <th>Tempat</th>
                                            <th>Penyelenggara</th>
                                            <th>Priode</th>
                                            <th>Sertifikat</th>
                                        </tr>
                                    </thead>
                                    <tbody class="rowData">
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                
                </div>
            </div>
            </div>
        </div>
@endsection
@section('pagespecificscripts')
<!-- 
    <script type="text/javascript" src="{{ asset('js/superadmin/staff/add.js') }}" defer></script>
-->
@stop

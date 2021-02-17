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
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Tambah Staff</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-user-plus"></i>
                            Tambah Staff
                    </div>
                    <div class="card-body">
                        <form>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-2">
                                            <label for="nik">NIK : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="nik" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">Nama Lengkap : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">Alamat KTP : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="address_ktp"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">Alamat Sekarang : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="current_address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">Email : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">No Telp : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="phone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="place_birth">Tempat Lahir : </label>
                                        </div>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="date_birth" placeholder="">
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="place_birth">Tanggal Lahir : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="date_birth" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="jk"> Jenis Kelamin : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row" style="margin-left:3px;">
                                                <div class="col-md-5">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                                                    <label class="form-check-label" for="">
                                                        Laki-laki
                                                    </label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                                                    <label class="form-check-label" for="">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">Agama : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="religion" name="religion">
                                                <option value="0"> -- Pilih Agama -- </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="photo">Upload Photo : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card">
                                                <img id="image-preview" class="prev-img" src="..." alt="Preview photo">
                                                <div class="card-body text-center">
                                                    <input type="file" class="form-control-file" id="photo" title="Pilih file" onchange="previewImage();">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">Divisi : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="division" name="division">
                                                <option value="0"> -- Pilih Divisi -- </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">Cabang : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="branch" name="branch">
                                                <option value="0"> -- Pilih Cabang -- </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">Department : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="department" name="department">
                                                <option value="0"> -- Pilih Department -- </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">Bagian : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="section" name="section">
                                                <option value="0"> -- Pilih Bagian -- </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label for="nama">Jabatan : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="position" name="position">
                                                <option value="0"> -- Pilih Jabatan -- </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label>Cab. Atasan Langsung : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="position" name="position">
                                                <option value="0"> -- Pilih -- </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label> Atasan Langsung : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="position" name="position">
                                                <option value="0"> -- Pilih  -- </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label>Cab. Atasan Tidak Langusng : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="position" name="position">
                                                <option value="0"> -- Pilih -- </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label> Atasan Tidak Langsung : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="position" name="position">
                                                <option value="0"> -- Pilih  -- </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-5">
                                            <label for="nama">Golongan Pegawai : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="division" name="division">
                                                <option value="0"> -- Pilih Golongan -- </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-5">
                                            <label for="nama">Status Pernikahan : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="division" name="division">
                                                <option value="0"> -- Pilih Status Pernikahan -- </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-5">
                                            <label for="nama">Pendidikan Terakhir : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control default custom-field" id="division" name="division">
                                                <option value="0"> -- Pilih Pendidikan -- </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary btn-md">
                                        <i class="far fa-save"></i> Simpan
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-md"><i class="fas fa-window-close"></i> Batal</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- end main content -->
@endsection
@section('pagespecificscripts')
    <script type="text/javascript" src="{{ asset('js/superadmin/staff/add.js') }}" defer></script>
@stop

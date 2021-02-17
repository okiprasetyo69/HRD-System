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
                                <li class="breadcrumb-item"><a href="/superadmin">Dashboard</a></li>
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
                            @include("superadmin.partials.profile_staff")
                            @include("superadmin.partials.document_staff")
                            @include("superadmin.partials.contract_staff")
                            @include("superadmin.partials.promotion_staff")
                            @include("superadmin.partials.demotion_staff")
                            @include("superadmin.partials.mutation_staff")
                            @include("superadmin.partials.warning_staff")
                            @include("superadmin.partials.absence_staff")
                            @include("superadmin.partials.ijin_staff")
                            @include("superadmin.partials.cuti_staff")
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- end main content -->

        <!-- Modal Family Data -->
        @include("superadmin.partials.modal_family_staff")
        <!-- Modal Skill dan Edukasi -->
        @include("superadmin.partials.modal_skill_education_staff")

@endsection
@section('pagespecificscripts')
<!--
    <script type="text/javascript" src="{{ asset('js/superadmin/staff/add.js') }}" defer></script>
-->
@stop

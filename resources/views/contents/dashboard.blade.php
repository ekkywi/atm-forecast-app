@extends("layouts.app")

@section("title", "ATM Forecast - Dashboard")
@section("content")
    <div class="container-fluid">

        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Dashboard</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                        <li class="breadcrumb-item">Menu Utama</li>
                        <li aria-current="page" class="breadcrumb-item active"><a href="{{ route("dashboard") }}">Dashboard</a></li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
@endsection

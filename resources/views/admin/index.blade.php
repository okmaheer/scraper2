@extends('layouts.app')

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb fw-bold text-gray-600 fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-500">
                    <svg width="24" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z"
                            fill="#7e8299" />
                    </svg>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="javascript:void(0)" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-500">Dashboard</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-2 py-md-1">
            <!--begin::Button-->
            <a href="{{ route('admin.manhwa.index') }}" class="btn btn-sm btn-dark btn-icon-white fw-bolder me-1">
                Add New Manhwa
            </a>
            <!--end::Button-->

            <!--begin::Button-->
            <a href="{{ route('admin.manhwa.index') }}" class="btn btn-sm btn-dark btn-icon-white fw-bolder">
                All Manhwa
            </a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar-->



  
@endsection
@section('script')
    <script>
   
    </script>
@endsection

@extends('layouts.master')
    @section('content')
        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        {{-- <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Product List</li> --}}
                                    </ol>
                                </div>
                                <h4 class="page-title">{{ $title }}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Drugs Available</h4>
                                    @include('layouts.flash')
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Drug Name</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        @foreach($drugs as $drug)
                                        <tr>
                                            <td>
                                                <img class="drug-icon" src="{{ asset('assets/drugs/'.$drug->drug_img) }}" alt="" height="52">
                                                <p class="d-inline-block align-middle mb-0">
                                                    <a href="" class="d-inline-block align-middle mb-0 product-name">
                                                        {{ $drug->name }}</a> 
                                                    <br>
                                                    {{-- <span class="text-muted font-13">Size-05 (Model 2019)</span>  --}}
                                                </p>
                                            </td>
                                            <td>    &#8358;{{ number_format($drug->price) }}</td>
                                            <td><span class="badge badge-md badge-soft-warning">Stock</span></td>
                                            <td>
                                                <a href="{{ route('edit-drug', $drug->id) }}" data-toggle="tooltip" title="Edit {{ $drug->name }}">
                                                    <i class="far fa-edit text-info mr-1"></i></a>
                                                <a href="" id="del-drug-btn" data-id="{{ $drug->id }}">
                                                    <i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>        
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->  

                </div><!-- container -->

    @endsection
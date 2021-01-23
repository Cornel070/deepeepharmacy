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
                                    <div class="emails-actions">
                                        <h4 class="mt-0 header-title">Subscribed Emails</h4>
                                        <button class="btn btn-md btn-primary btn-dwld" onclick="window.location.href='{{ route('export') }}'">Download as CSV</button>
                                    </div>
                                    @include('layouts.flash')
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap  {{ $i = 1 }}" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Email</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        @foreach($emails as $email)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $email->email }}</td>
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
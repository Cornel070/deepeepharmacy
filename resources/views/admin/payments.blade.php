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
    
                                    <h4 class="mt-0 header-title">Order Payments</h4>
                                    @include('layouts.flash')
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Paid For</th>
                                            <th>Paid By</th>
                                            <th>Exp Amount</th>
                                            <th>Paid Amount</th>
                                            <th>Ref</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        @foreach($payments as $pay)
                                        <tr>
                                            <td>
                                               Order-{{ $pay->order->id }}
                                            </td>
                                            <td>{{ $pay->paid_by }}</td>
                                            <td>&#8358;{{ number_format($pay->order->amount) }}</td>
                                            <td>&#8358;{{ number_format($pay->amount/100) }}</td>
                                            <td>{{ $pay->ref_no }}</td>
                                            <td>{{ \Carbon\Carbon::parse($pay->created_at)->toFormattedDateString() }} </td>
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
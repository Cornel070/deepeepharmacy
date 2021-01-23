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
    
                                    <h4 class="mt-0 header-title">Appointments</h4>
                                    @include('layouts.flash')
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        @foreach($appts as $appt)
                                        <tr>
                                            <td>
                                               {{ $appt->name }}
                                            </td>
                                            <td>{{ $appt->phone }}</td>
                                            <td>{{ $appt->email??'None provided' }}</td>
                                            <td>{{ \Carbon\Carbon::parse($appt->appt_date)->toFormattedDateString() }} </td>
                                            <td>{{ \Carbon\Carbon::parse($appt->appt_time)->format('Y h:i:s A') }}</td>
                                            <td>{{ $appt->reason }}</td>
                                            <td>
                                                @if($appt->status === 'Approved')
                                                    <i class="far fas fa-handshake text-success mr-1"></i> {{ $appt->status }}
                                                @else
                                                    {{ $appt->status }}
                                                @endif
                                                </td>
                                            <td>
                                                @if($appt->status === 'Approved')
                                                    <a href="{{ route('unapprove',$appt->id) }}" data-toggle="tooltip" title="Unapprove">
                                                    <i class="far fas fa-times-circle text-danger"></i></a>
                                                @else
                                                    <a href="{{ route('approve',$appt->id) }}" data-toggle="tooltip" title="Approve">
                                                    <i class="far fas fa-handshake text-success mr-1"></i></a>
                                                @endif
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
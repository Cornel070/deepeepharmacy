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
    
                                    <h4 class="mt-0 header-title">All Prescriptions</h4>
                                    @include('layouts.flash')
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        @foreach($prescs as $presc)
                                        <tr>
                                            <td>
                                                {{ $presc->id }}
                                            </td>
                                            <td>{{ $presc->title }}</td>
                                            <td>
                                                <span data-toggle="tooltip" title="View details">
                                                    <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#presc{{ $presc->id }}" style="text-align: center; margin: 5px">
                                                        <i class="fa fa-eye p-1"></i></a>
                                                </span>
                                                <a href="{{ route('download', $presc->id) }}" data-toggle="tooltip" title="Download this prescription" class="btn btn-sm btn-success" style="text-align: center; margin: 5px;">
                                                    <i class="far fas fa-download p-1"></i></a>
                                                <a href="{{ route('edit-presc', $presc->id) }}" data-toggle="tooltip" title="Edit this prescription" class="btn btn-sm btn-primary" style="text-align: center; margin: 5px;">
                                                    <i class="far fa-edit p-1"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete this prescription" class="btn btn-sm btn-danger" style="text-align: center; margin: 5px;" id="del_presc" data-id="{{ $presc->id }}">
                                                    <i class="far fa-trash-alt p-1"></i></a>
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
@foreach($prescs as $presc)
<div class="modal fade" id="presc{{ $presc->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $presc->title }}</h5>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body scroll-bar">
        <table class="table table-bordered table-striped item-tab">
            <thead>
                <tr>
                    <th>Drug</th>
                    <th>Dosage</th>
                </tr>
            </thead>
            <tbody>
                @foreach($presc->items as $item)
                    <tr>
                        <td>{{$item->drug->name }}</td>
                        <td>{{$item->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <button class="btn btn-lg btn-primary total-btn">&#8358;{{ $order->amount }}</button> --}}
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
        {{-- <button type="button" class="btn btn-primary btn-lg"> &#8358;{{ number_format($order->amount) }}</button> --}}
      </div>
    </div>
  </div>
</div>
@endforeach
    @endsection
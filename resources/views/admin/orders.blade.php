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
    
                                    <h4 class="mt-0 header-title">Clients drug orders</h4>
                                    @include('layouts.flash')
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Order by</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>
                                               {{ $order->buyer->name }}
                                            </td>
                                            <td>{{ $order->buyer->phone }}</td>
                                            <td>{{ $order->buyer->email??'None provided' }}</td>
                                            <td>{{ \Carbon\Carbon::parse($order->created_at)->toFormattedDateString() }} </td>
                                            <td>{{ $order->status }}</td>
                                            {{-- <td>
                                                @if($appt->status === 'Approved')
                                                    <i class="far fas fa-handshake text-success mr-1"></i> {{ $appt->status }}
                                                @else
                                                    {{ $appt->status }}
                                                @endif
                                                </td>
                                            <td> --}}
                                                <td>
                                                    <a href="{{ route('confirm',$order->id) }}" data-toggle="tooltip" class="btn btn-sm btn-success mr-2" title="Confirm order">
                                                    <i class="fa fas fa-check-circle mr-1"></i></a>

                                                    <span data-toggle="tooltip" title="View details">
                                                        <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#order{{ $order->id }}">
                                                        <i class="fa fa-eye mr-1"></i></a>
                                                    </span>
                                                </td>
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

@foreach($orders as $order)
<div class="modal fade" id="order{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BY: {{ $order->buyer->name }}</h5>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body scroll-bar">
        @foreach($order->items as $drug)
        <table class="table table-bordered table-striped item-tab">
                <tr>
                <th>Drug:</th>
                    <td>{{ $drug->item_name }}</td>
                </tr>
                <tr>
                <th>Quantity:</th>
                    <td>{{ $drug->item_qty }}</td>
                </tr>
                <tr>
                <th>Unit Price</th>
                    <td>&#8358;{{ number_format($drug->item_price) }}</td>
                </tr>
                <tr>
                <th>Total Price:</th>
                    <td>&#8358;{{ number_format( $drug->item_price * $drug->item_qty) }}</td>
                </tr>
        </table>
        @endforeach
        {{-- <button class="btn btn-lg btn-primary total-btn">&#8358;{{ $order->amount }}</button> --}}
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
        <button type="button" class="btn btn-primary btn-lg"> &#8358;{{ number_format($order->amount) }}</button>
      </div>
    </div>
  </div>
</div>
@endforeach

    @endsection
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
                                        <li class="breadcrumb-item active">New Project</li> --}}
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
                                    <h4 class="mt-0 header-title">Edit Prescription Details Below:</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group col-md-9">
                                                        <label for="projectName">Title:<br>
                                                            <small class="req"><i>Required</i></small></label>
                                                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" aria-describedby="emailHelp" value="{{$presc->title}}" placeholder="Enter a title" id="presc-title">
                                                        @if ($errors->has('title'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('title') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group col-md-9">
                                                        <label for="projectName">Drug:<br>
                                                            <small class="req"><i>Required</i></small></label>
                                                        <select class="form-control{{ $errors->has('drug_id') ? ' is-invalid' : '' }}" name="drug_id" id="presc-drug">
                                                                <option selected="">Select Drug</option>
                                                                @foreach($drugs as $drug)
                                                                    <option value="{{ $drug->id }}">{{ $drug->name }}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-9">
                                                        <label for="pro-message">Dosage details:<br>
                                                            <small class="req"><i>Required</i></small></label>
                                                        <textarea class="form-control{{ $errors->has('dosage_details') ? ' is-invalid' : '' }}" name="dosage_details" rows="5"  placeholder="writing here.." id="presc-dosage">{{old('dosage_details')}}</textarea>
                                                        @if ($errors->has('dosage_details'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('dosage_details') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>  
                                                </div>

                                                <div class="col-md-5 scroll-bar">
                                                    <div class="col-md-12 col-lg-12">
                                                        <div class="card card-border">
                                                            <img class="card-img-top prsc-img img-fluid" src="{{ asset('assets/images/logo-sm.png') }}" alt="Card image cap">
                                                            <div class="card-body">
                                                                <h4 class="card-title mt-0" id="p_card_title">
                                                                    <i>{{ $presc->title }}</i></h4>
                                                                    <hr>
                                                                <p class="card-text text-muted" id="p_card_dosage">
                                                                    <form id="presc-add-frm" action="{{route('update_presc')}}" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="title" id="presc-title-f">
                                                                        <input type="hidden" name="presc_id" value="{{ $presc->id }}">
                                                                        @foreach($presc->items as $item)
                                                                            <div class="form-group" style="margin-bottom: 50px;">
                                                                                <label for="projectName" style="font-weight: bold; color: black;">Drug:</label>
                                                                                <select class="form-control" name="drug_id[]">
                                                                                    @foreach($drugs as $drug)
                                                                                        <option value="{{ $drug->id }}" {{ $drug->id === $item->drug_id?'selected':'' }}>{{ $drug->name }}</option>
                                                                                    @endforeach 
                                                                                </select>
                                                                                <label for="projectName" style="font-weight: bold; color: black">Dosage:</label>
                                                                                <textarea rows="5" class="form-control" name="drug_dosage[]">{{ $item->description }}</textarea><br/>
                                                                                <a href="javascript:void(0)" id="rem-presc" data-id="{{ $item->id }}" style="color: red; float: right;" class="fa fa-times-circle" data-toggle="tooltip" title="Remove this drug?"></a>
                                                                            </div>
                                                                        @endforeach
                                                                    </form>
                                                                </p>
                                                                {{-- <a href="#" class="btn btn-gradient-primary">Go somewhere</a>    --}}
                                                            </div><!--end card -body-->
                                                        </div><!--end card-->
                                                    </div><!--end col-->

                                                </div>

                                                <div class="form-group col-md-12">
                                                    <button class="btn btn-gradient-primary save-drug-btn fa fa-plus-circle" id="add-presc-upd">
                                                    Add</button>

                                                    <button class="btn btn-gradient-success save-drug-btn" id="save-presc">
                                                    Update</button>
                                                </div>
                                               </div>
                                              <!--end form-->
                                        </div><!--end col-->
                                        
                                    </div><!--end row-->                                                                              
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2020 Deepee Pharmacy & Store <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by wingPhix D.C</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        {{-- <form id="presc-add-frm" action="{{ route('update_presc') }}" method="post">
            @csrf
            <input type="hidden" name="title" id="presc-title-f">
        </form> --}}
        <!-- end page-wrapper -->
        <script type="text/javascript">
            var prescriptions = [];
        </script>
    @endsection
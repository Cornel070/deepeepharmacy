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
                                    <h4 class="mt-0 header-title">Enter Drug Information Below:</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="row" id="add-drug-frm" method="post" action="" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group col-md-4">
                                                    <label for="projectName">Drug Name:<br>
                                                        <small class="req"><i>Required</i></small></label>
                                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" aria-describedby="emailHelp" value="{{old('name')}}" placeholder="Enter drug name">
                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif

                                                    {{-- Drug Price --}}
                                                    <label class="price-area" for="projectName">Drug Price:<br>
                                                        <small class="req"><i>Required</i></small></label>
                                                    <input type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" aria-describedby="emailHelp" value="{{old('price')}}" placeholder="Enter drug price">
                                                    @if ($errors->has('price'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('price') }}</strong>
                                                        </span>
                                                    @endif

                                                </div><!--end form-group-->
                                                <div class="form-group col-md-4">
                                                    <label for="pro-message">Drug Description:<br>
                                                        <small class="req"><i>Required</i></small></label>
                                                    <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="5" id="pro-message"  placeholder="writing here..">{{old('description')}}</textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div><!--end form-group-->

                                                <div class="form-group col-md-4">
                                                    <label for="projectName">How should it be taken?<br>
                                                        <small><i>Optional</i></small></label>
                                                    <textarea class="form-control{{ $errors->has('how_to_take') ? ' is-invalid' : '' }}" name="how_to_take" rows="5" id="pro-message"  placeholder="writing here..">{{old('how_to_take')}}</textarea>
                                                    @if ($errors->has('how_to_take'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('how_to_take') }}</strong>
                                                        </span>
                                                    @endif
                                                </div><!--end form-group-->

                                                <div class="form-group col-md-4">
                                                    <label for="pro-message">
                                                    What should be avoided when taking this drug?
                                                        <small><i>Optional</i></small></label>
                                                    <textarea class="form-control{{ $errors->has('avoided') ? ' is-invalid' : '' }}" name="avoided" rows="5" id="pro-message"  placeholder="writing here..">{{old('avoided')}}</textarea>
                                                    @if ($errors->has('avoided'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('avoided') }}</strong>
                                                        </span>
                                                    @endif
                                                </div><!--end form-group-->

                                                <div class="form-group col-md-4">
                                                    <label for="pro-message">
                                                    What are the side effects?<br>
                                                        <small><i>Optional</i></small></label>
                                                    <textarea class="form-control{{ $errors->has('side_effects') ? ' is-invalid' : '' }}" name="side_effects" rows="5" id="pro-message"  placeholder="writing here..">{{old('side_effects')}}</textarea>
                                                    @if ($errors->has('side_effects'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('side_effects') }}</strong>
                                                        </span>
                                                    @endif
                                                </div><!--end form-group-->

                                                 <div class="form-group col-md-4">
                                                    <label for="pro-message">
                                                    What's the dosage?<br>
                                                        <small><i>Optional</i></small></label>
                                                    <textarea class="form-control{{ $errors->has('dosage') ? ' is-invalid' : '' }}" name="dosage" rows="5" id="pro-message"  placeholder="writing here..">{{old('dosage')}}</textarea>
                                                    @if ($errors->has('dosage'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('dosage') }}</strong>
                                                        </span>
                                                    @endif
                                                </div><!--end form-group-->
                                                
                                               <div class="action-btns">
                                                 <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="horizontalCheckbox" name="in_stock" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                        <label class="custom-control-label" for="horizontalCheckbox">In Stock?</label>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="pro-avatar">Drug Image:</label>
                                                        <input class="btn btn-gradient-info drug-img form-control{{ $errors->has('dosage') ? ' is-invalid' : '' }}" type="file" name="drug_img" style=''>
                                                        @if ($errors->has('drug_img'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('drug_img') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <button type="submit" class="btn btn-gradient-primary save-drug-btn">Add Drug</button>
                                               </div>
                                            </form>  <!--end form-->
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
        <!-- end page-wrapper -->
    @endsection
@extends('layouts.base')

@section('content')
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>

            <li>
                <a href="#">Customer</a>
            </li>
            <li class="active">Create</li>
        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input"
                                           id="nav-search-input" autocomplete="off">
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
            </form>
        </div><!-- /.nav-search -->
    </div>
    <div class="page-header">
        <h1>
            Customer
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Create new Customer
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <form method="post" action="{{route('customer.store')}}" class="form-horizontal" role="form">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

                    <div class="col-sm-9">
                        <input value="{{old('name')}}" name="name" type="text" id="form-field-1" placeholder="Enter Name"
                               class="col-xs-10 col-sm-5">
                        @error('name')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Email </label>

                    <div class="col-sm-9">
                        <input value="{{old('email')}}" name="email" type="text" id="form-field-2"
                               placeholder="Enter Email"
                               class="col-xs-10 col-sm-5"/>
                        @error('email')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Phone </label>

                    <div class="col-sm-9">
                        <input value="{{old('phone')}}" name="phone" type="text" id="form-field-3"
                               placeholder="Enter Phone"
                               class="col-xs-10 col-sm-5">
                        @error('phone')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> Address </label>

                    <div class="col-sm-9">
                        <textarea name="address" id="form-field-4" class="col-xs-10 col-sm-5"
                                  placeholder="Enter address">{{old('address')}}</textarea>
                        @error('address')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-5"> Select Product </label>

                    <div class="col-sm-9">
                        <select name="purchase_info" id="form-field-5" class="col-xs-10 col-sm-5">
                            <option>Cotton Casual T-shirt for Men - Multicolor</option>
                            <option>D115 PLUS Bluetooth Bracelet Smart Watch for Android and IOS - Black</option>
                            <option>Fingerless Gloves for women High Quality Half-Finger hand gloves for women Black
                                Skin
                            </option>
                            <option>Awei TC1 Type-C Jack In Ear Headphones, Earbuds, Full Metal</option>
                        </select>
                        @error('purchase_info')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-6"> Price </label>

                    <div class="col-sm-9">
                        <input value="{{old('price')}}" name="price" type="number" id="form-field-6" step="0.01"
                               placeholder="Enter Price"
                               class="col-xs-10 col-sm-5 ">
                        @error('price')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>


                <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                        <button class="btn btn-info" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Submit
                        </button>

                        &nbsp; &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection

@extends('layouts.base')

@section('content')
    <div class="page-header">
        <h1>
            Tables
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Static &amp; Dynamic Tables
            </small>
        </h1>
    </div>

    <div class="container-fluid">

        @if(session()->has('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif

        <div class="row">
            <div class="col-xs-12">
                <table id="simple-table" class="table  table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace">
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th class="hidden-480">Email</th>

                        <th>
                            Address
                        </th>
                        <th class="hidden-480">Product</th>

                        <th>Price</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace">
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td class="center">
                                {{$customer->name}}
                            </td>

                            <td>
                                {{$customer->phone}}
                            </td>
                            <td>{{$customer->email}}</td>
                            <td class="hidden-480">{{$customer->adddress}}</td>
                            <td>{{$customer->purchase_info}}</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-warning">{{$customer->price}}</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs" style="display:flex;">
                                    <a href="{{route('customer.edit',['customer'=>$customer->id])}}"
                                       class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-edit bigger-120"></i>
                                    </a>
                                    <form method="post" class="d-inline"
                                          action="{{route('customer.destroy',['customer'=>$customer->id])}}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-xs btn-danger" type="submit"
                                                onclick="return confirm('Are you sure?')">
                                            <i class="ace-icon fa fa-trash bigger-120"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- /.span -->
        </div>
    </div>
@endsection

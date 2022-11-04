@extends('layouts.admin')
@section('content')

<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Stock Nutty-Tone</h3>
                            <p class="text-subtitle text-muted">Nutty-tone product list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/admin/home')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Striped rows start -->
                <section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nutty Tone</h4>
                                </div>
                                <a href="{{url('/admin/stock/nutty-tone/add')}}" class="btn btn-primary rounded-pill" style="width: 10%; margin: 10px;">Add</a>

                                <div class="card-content">
                                    <div class="card-body">
                                    </div>
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Detail</th>
                                                    <th>Price</th>
                                                    <th>Image</th>
                                                    <th>Amount</th>
                                                    <th>Type Product</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ( !$nutty->isEmpty() )
                                                    @foreach($nutty as $nuttyt)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $nuttyt->id }}</td>
                                                            <td class="text-bold-500">{{ $nuttyt->name }}</td>
                                                            <td class="text-bold-500">{{ $nuttyt->detail }}</td>
                                                            <td class="text-bold-500">{{ $nuttyt->price }}</td>
                                                            <td class="text-bold-500">
                                                                <img src="{{ asset('admin/upload/nuttyproduct/'. $nuttyt->image) }}" width="100px" height="80px">
                                                            </td>
                                                            <td class="text-bold-500">{{ $nuttyt->Amount }}</td>
                                                            <td class="text-bold-500">{{ $nuttyt->type->name }}</td>
                                                            <td> <a href="{{url('/admin/stock/nutty-tone/edit/'. $nuttyt->id)}}" class="btn btn-warning rounded-pill">Edit</a> </td>
                                                            <td> <a href="{{url('/admin/nuttyproduct/delete/'. $nuttyt->id)}}"  class="btn btn-danger rounded-pill">Delete</a> </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="9" class="text-center">ไม่มีข้อมูล</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Striped rows end -->

            </div>

@stop

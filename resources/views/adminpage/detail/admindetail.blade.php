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
                            <h3>Promote Page Details</h3>
                            <p class="text-subtitle text-muted">Detail for promote products</p>
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
                                    <h4 class="card-title">Promote</h4>
                                </div>
                                <a href="{{url('/admin/detail/add')}}" class="btn btn-primary rounded-pill" style="width: 10%; margin: 10px;">Add</a>

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
                                                    <th>Image</th>
                                                    <th>Type Product</th> 
                                                    <th>Edit</th> 
                                                    <th>Delete</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($detail as $detailp)
                                                <tr>
                                                    <td class="text-bold-500">{{ $detailp->id }}</td>
                                                    <td class="text-bold-500">{{ $detailp->name }}</td>
                                                    <td class="text-bold-500">{{ $detailp->detail }}</td>
                                                    <td class="text-bold-500">
                                                        <img src="{{ asset('admin/upload/promote/'. $detailp->image) }}" width="100px" height="80px">
                                                    </td>
                                                    <td class="text-bold-500">{{ $detailp->id_type_product }}</td>
                                                    <td> <a href="{{url('/admin/detail/edit/'. $detailp->id)}}" class="btn btn-warning rounded-pill">Edit</a> </td>
                                                    <td> <a href="{{url('/admin/detail/delete/'. $detailp->id)}}"  class="btn btn-danger rounded-pill">Delete</a> </td>
                                                </tr>
                                                @endforeach
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
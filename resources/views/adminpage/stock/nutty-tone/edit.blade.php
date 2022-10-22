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
                            <h3>Nutty-Tone [Edit]</h3>
                            <p class="text-subtitle text-muted">For edit nutty-tone product list</p>
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

                <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nutty-Tone</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <form action="{{ url('/admin/stock/nutty-tone/update/'.$nutty->id) }}" method="POST" class="form form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" class="form-control" name="name" value="{{ $nutty->name }}" placeholder="Product Name">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Detail</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" class="form-control" name="detail" value="{{ $nutty->detail }}" placeholder="Product Detail">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Price</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" class="form-control" name="price" value="{{ $nutty->price }}" placeholder="Product Price">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Image</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="file" class="form-control" name="image"  placeholder="Product Image">
                                                        <img src="{{ asset('admin/upload/nuttyproduct/'. $nutty->image) }}" width="100px" height="80px">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Amount</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" class="form-control" name="amount" value="{{ $nutty->Amount }}" placeholder="Product Amount">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Type Product</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" class="form-control" name="type_product" value="{{ $nutty->id_type_product }}" placeholder="Type Product">
                                                    </div>

                                                    <div class="col-12 col-md-8 offset-md-4 form-group">
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <a href="{{ route('adminpage.stock.nutty-tone.adminnuttytone') }}" class="btn btn-primary me-1 mb-1">Back</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>

@stop
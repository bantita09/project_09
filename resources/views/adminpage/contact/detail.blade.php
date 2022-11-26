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
                            <h3>Contact [Detail]</h3>
                            <p class="text-subtitle text-muted">For see other details</p>
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
                                    <h4 class="card-title">Contact</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <form action="{{ url('/admin/contact/detail/'.$detail->id) }}" method="POST" class="form form-horizontal">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="" class="form-control" name="name" value="{{ $detail->name }}">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="email" class="form-control" name="email" value="{{ $detail->email }}" placeholder="Email">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Phone</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" class="form-control" name="phone" value="{{ $detail->phone }}" placeholder="Phone Number">
                                                    </div>

                                                    <div class="col-12 col-md-8 offset-md-4 form-group">
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <a href="{{ route('adminpage.contact.admincontact') }}" class="btn btn-primary me-1 mb-1">Back</a>
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

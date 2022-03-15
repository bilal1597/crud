@extends('post\layout')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('post.index') }}">Books </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('R.thesis') }}">Thesis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cust.customers') }}">Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cust.customers') }}">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cust.customers') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cust.customers') }}">Contact Us</a>
            </li>


    </div>
    </li>

    </ul>

    </div>
</nav>

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Add Thesis</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('R.thesis')}}" class="btn btn-primary float-end">All Thesis</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('R.store_t') }}"method="POST">
                    @csrf
                    <div class="form-group">
                        <strong>Thesis Name</strong>
                        <input type="text" name="thesis_name" placeholder="Name" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Thesis Details</strong>
                        <textarea name="thesis_details"  rows="2" class="form-control" placeholder="Details"></textarea>
                        <div class="form-group">
                            <strong>Thesis Year</strong>
                            <input type="text" name="thesis_year" placeholder="year" class="form-control" autofocus>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Save</button>
                    </form>

            </div>
        </div>
    </div>
@endsection

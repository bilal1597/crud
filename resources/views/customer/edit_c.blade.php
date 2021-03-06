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
                <a class="nav-link" href="{{ route('b.booking') }}">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('signup') }}">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
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
                        <h3>Edit customer</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('cust.customers') }}" class="btn btn-primary float-end">All Customers</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('cust.update_c') }}" method="POST">
                    @csrf
                    <input type="hidden" name="customer_id" value='{{ $customers->customer_id }}' class="form-control">
                    <div class="form-group">
                        <strong>Customer Name</strong>
                        <input type="text" name="cust_name" value='{{ $customers->cust_name }}' placeholder="Edit Name"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <strong>Book Details</strong>
                        <textarea name="book_details" rows="2" class="form-control"
                            placeholder="Edit Details">{{ $customers->book_details }}</textarea>
                    </div>
                    <div class="form-group">
                        <strong>Contact</strong>
                        <input type="text" name="contact" value='{{ $customers->contact }}' placeholder="Edit contact"
                            class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Update</button>
                </form>

            </div>
        </div>
    </div>
@endsection

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
                        <h3>Add Book</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('post.index')}}" class="btn btn-primary float-end">All Book</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('post.store') }}"method="POST">
                @csrf
                <div class="form-group">
                    <strong>Author</strong>
                    <input type="text" name="title" placeholder="Post Title" class="form-control" autofocus>
                </div>
                <div class="form-group">
                    <strong>Book Details</strong>
                    <textarea name="description"  rows="6" class="form-control" placeholder="Description"></textarea>
                    <div class="form-group">
                        <strong>Price Per Day</strong>
                        <input type="text" name="price" placeholder="Set price" class="form-control" autofocus>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Save</button>
                </form>

            </div>
        </div>
    </div>
@endsection

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
                <a class="nav-link" href="{{ route('signup') }}">Sign Up</a>
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
                        <h3>Edit Thesis</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('R.thesis') }}" class="btn btn-primary float-end">All Thesis</a>
                    </div>
                </div>
            </div>
            <div class="card-body">1
                <form action="{{ route('R.update_t') }}" method="POST">
                    @csrf
                    <input type="hidden" name="t_id" value='{{ $thesiss->t_id }}' class="form-control">
                    <div class="form-group">
                        <strong>Thesis Name</strong>
                        <input type="text" name="thesis_name" value='{{ $thesiss->thesis_name }}' placeholder="Edit Name"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <strong>Thesis Details</strong>
                        <textarea name="thesis_details" rows="2" class="form-control"
                            placeholder="Edit Details">{{ $thesiss->thesis_details }}</textarea>
                            {{--  wohi variable use hoga jis mn array save krwaya tha like ($thesiss) --}}
                    </div>
                    <div class="form-group">
                        <strong>Thesis Year</strong>
                        <input type="text" name="Thesis year" value='{{ $thesiss->thesis_year }}' placeholder="Edit contact"
                            class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mt-2" >Update</button>
                </form>

            </div>
        </div>
    </div>
@endsection

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
                        <h3>Bookings</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('b.create_b') }}" class="btn btn-primary float-end">Add booking</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('message'))
                    <div class="alert alert-succes">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Booking By Name</th>
                            <th>Booking Details</th>
                            <th>price</th>
                            <th>Fine</th>
                            <th>No. of days</th>
                            <th>Booking Date</th>
                            <th>Return Date</th>
                            <th>Total Price</th>
                            <th>Booked / Returned</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($booking as $book)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $book->cust_name }}</td>
                                <td>{{ $book->description }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->fine }}</td>
                                <td>{{ $book->days_No }}</td>
                                <td>{{ $book->booking_date }} </td>
                                <td>{{ $book->return_date }}</td>
                                <td>{{ $book->total_price }}</td>
                                <td>{{ $book->book_return }}</td>
                                <td>
                                    @if($book->book_return !== 'Returned')
                                        <a href="{{ route('return',$book->Id) }}"   class="btn btn-info" id="return_btn">Return</a>
                                    @endif
                                    {{-- <a href="{{ route('b.destroy_b', $book->Id) }}" class="btn btn-danger">Delete</a> --}}
                                </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

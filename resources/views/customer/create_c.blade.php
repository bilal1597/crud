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
                        <h3>Add customer</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('cust.customers')}}" class="btn btn-primary float-end">All Customers</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form name="Regform" action="{{ route('cust.store_c') }}"method="POST" onclick="validate()">
                    @csrf

                        <strong>Customer Name</strong>
                        <input type="text" name="cust_name" placeholder="Name" class="form-control" autofocus>


                        <strong>Book Details</strong>
                        <textarea name="book_details"  rows="1" class="form-control" placeholder="Details"></textarea>

                            <strong>Contact</strong>
                            <input type="number" name="conatct" size="65" placeholder="Contact No:" class="form-control" autofocus>

                            
                            {{-- @if( book_return !== 'Returned')
                            <a href="{{ route('return',$book->Id) }}"   class="btn btn-info" id="return_btn">Return</a>
                        @endif --}}
                            {{-- <p>Contact <input type="number"
                                size="65" name="contact" /></p> --}}


                    <button type="submit" class="btn btn-success mt-2"  >Save</button>
                    </form>

                    <script>

                        function validate(){
                        var contacts  = document.forms["Regform"]["contact"];

                        if(contacts.value.length > 11){
                            window.alert('Invalid contact No.  it must be in 11 number ')
                            contacts.focus();
                            return false;

                        }
                        return true;
                    }

                    </script>

            </div>
        </div>
    </div>
@endsection

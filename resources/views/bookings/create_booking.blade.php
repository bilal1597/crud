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

            <li class="nav-item">
                <a class="nav-link" href="{{ route('signup') }}">Sign Up</a>
            </li>
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
                        <h3>Add New Booking</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('b.booking')}}" class="btn btn-primary float-end">All Bookings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('b.store_b') }}"method="POST">
                @csrf
                <div class="form-group">
                    <strong>Customer Name</strong>
                    {{-- <input type="text" name="b_Customer_name" placeholder="Post Customer Name" class="form-control" autofocus> --}}
                    <div class="dropdown">
                        <select class="form-control" name="cust_name" id='customer_id'>
                          <option value=" ">--select customer--</option>
                          @foreach ($customerr as $cust)
                            <option  customer_id=<?php echo $cust->contact; ?> value="{{ $cust->customer_id }}"> {{ $cust->cust_name }} </option>


                            @endforeach

                      </select>
                        </div>
                <div class="form-group">
                    <strong>Book Details</strong>
                    <div class="dropdown">
                          <select class="form-control" name="title" id='book_price' >
                            <option>--select Book--</option>
                            @foreach ($booked as $bk)
                              <option book_price=<?php echo $bk->price; ?> value="{{ $bk->id }}"> {{ $bk->description }} </option>

                              @endforeach


                        </select>
                          </div>

                          <div class="dropdown">
                            <strong>Price Per Day</strong>

                          <input class="form-control" name="bk_price" id="bk_price" type="number" readonly value='0'
                            onchange="Calc()"/>

                            <div class="dropdown">
                                <strong>Fine</strong>

                              <input class="form-control" name="fine" id="fine"  readonly value='Fine will charge after Due date'/>


                            <div class="dropdown">
                            <strong>From</strong>
                            </div>
                            <div class="datepicker">
                                <input placeholder="Select date" type="date" name="from" id="from" class="form-control"onchange="getDays()">

                              </div>

                              <div class="dropdown">
                                <strong>To</strong>
                                </div>
                                <div class="datepicker">
                                    <input placeholder="Select date"  type="date" name="deadline" id="deadline" class="form-control" onchange="getDays()">

                                  </div>


                    <div class="dropdown">
                        <strong>No. of Days</strong>
                        <input class="form-control" name="days" id="days" type="number" readonly value='0'
                        onchange="Calc()"/>
                        {{-- <select class="form-control" name="days" id='days' onchange="Calc()">
                            <option book_price='0' value="0">--select No. of Days--</option>
                        <option value="1" >1</option>
                        <option value="2" >2</option>
                        </select> --}}
                    </div>
                    <div class="form-group">
                        <strong>Total Price</strong>
                        <input class="form-control" name="t_price" id="t_price" value='0' readonly />
                    </div>

                    <div class="form-group">
                        <strong>Book Return</strong>
                        {{-- <input class="form-control" name="return" id="return" value='booked' readonly /> --}}

                        <input class="form-control" name="return" id='return' value="Taken" readonly>


                    </div>

                </div>
                <button type="submit" class="btn btn-success mt-2">Save</button>
                </form>
                {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}


<script>
                        //     function calc(){
                        //     var days = document.getElementById('days').value;
                        //     var bk_price = document.getElementById('bk_price').value;


                        let link = document.getElementById('book_price').onchange = function () {
                        document.getElementById('bk_price').value=this.options[this.selectedIndex].getAttribute("book_price");
                            var num1 = parseInt(document.getElementById("days").value);
                            var num2 = parseInt(document.getElementById("bk_price").value);
                            document.getElementById("t_price").value = num1 * num2;

                            };
                        function Calc() {

                            // document.getElementById('days').value=document.getElementById('days').options[document.getElementById('bk_price').selectedIndex].getAttribute("bk_price");

                            // let link = document.getElementById('days').onchange = function () {
                            //     // console.log(this.options[this.selectedIndex].getAttribute("days"))
                            //     document.getElementById('bk_price').value=this.options[this.selectedIndex].getAttribute("days");
                            // };

                            var num1 = parseInt(document.getElementById("days").value);
                            var num2 = parseInt(document.getElementById("bk_price").value);
                            document.getElementById("t_price").value = num1 * num2;
                        }



                        function getDays(){

                        var from_date = new Date(document.getElementById('from').value);
                        var to_date = new Date(document.getElementById('deadline').value);
 //Here we will use getTime() function to get the time difference
                        var time_difference = to_date.getTime() - from_date.getTime();
 //Here we will divide the above time difference by the no of miliseconds in a day
                          var days_difference = time_difference / (1000*3600*24);
 //alert(days);
                           document.getElementById('days').value = days_difference;

                           var num1 = parseInt(document.getElementById("days").value);
                            var num2 = parseInt(document.getElementById("bk_price").value);
                            document.getElementById("t_price").value = num1 * num2;
                            }


</script>

            </div>
        </div>
    </div>
@endsection

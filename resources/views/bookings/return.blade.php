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
                        <h3>Booking Information</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('b.booking') }}" class="btn btn-primary float-end">All Bookings</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('b.update_b') }}" method="POST">
                    @csrf
                    <input type="hidden" name="booking_id" value='{{ $booking->Id }}' class="form-control">
                    <div class="form-group">
                        <strong>Booking By Name <br></strong>
                        <input type="text" name="cust_name" rows="6" placeholder="Post Author"
                            class="form-control" value=  "{{ $booking->cust_name }}"  readonly>
                    </div>
                    <div class="form-group">
                        <strong><br>Book Details <br></strong>
                        <input type='text' name="description" rows="6" class="form-control"
                             value={{ $booking->description }} readonly>
                    </div>


                    <div class="dropdown">
                        <strong>Price Per Day</strong>

                      <input class="form-control" name="bk_price" id="bk_price" type="number" readonly value={{ $booking->price }}>

                    <div class="form-group">
                        <strong><br>Booking Date</strong>
                        {{-- <form type="date" name="from" id="from"
                            class="form-control" > {{ $booking->booking_date }}  </form> --}}
                            <div>
                                <input   type="date" readonly name="from" id="from" class="form-control" value={{ $booking->booking_date }} readonly >
                            </div>

                        <div class="form-group">
                            <strong><br>Return Date</strong>
                            <div class="datepicker">
                            <input   type="date" name="current_date" id="current_date" class="form-control" value={{ $booking->return_date }} onchange="returnDays()">
                         </div>


                        <div class="dropdown">
                            <strong>Return Days</strong>
                            <input class="form-control" name="returndays" id="returndays" type="number" readonly value='0' onchange="returndays()">
                        </div>

                         <div class="form-group">
                            <strong><br>No. of Days for Booking</strong>
                            <input type="text" name="days_no" id='days_no'
                                class="form-control" value={{ $booking->days_No }} readonly>
                        </div>

                        <div class="form-group">
                                    <strong>Fine</strong>
                                    <input type="text" name="fine" id="fine"
                                        class="form-control" value="0" readonly >


                    <div class="form-group">
                        <strong><br>Total Price</strong>
                        <input type="text" name="t_price" id="t_price"  placeholder="Set price"
                            class="form-control" value={{ $booking->total_price }} readonly  >
                    </div>

                    <div class="form-group">
                        <strong><br>Book Return</strong>
                        <select type="text" name="return" id="return"
                            class="form-control" value={{ $booking->book_return }} >
                            <option value="Returned">Returned</option>
                            <option value="Taken">Taken</option>
                    </select>
                    </div>

                    <button type="submit" id='submit' class="btn btn-success mt-2"  >Return</button>

                </form>

                <script>


                        // var today = new Date();
                        // var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                        // document.getElementById("c_date").innerHTML = date;




                    function returnDays(){

                    var deadline_date = new Date(document.getElementById('from').value);
                    var current_date = new Date(document.getElementById('current_date').value);
                    //Here we will use getTime() function to get the time difference
                    var time_difference = current_date.getTime() - deadline_date.getTime() ;
                    //Here we will divide the above time difference by the no of miliseconds in a day
                    var days_difference = time_difference / (1000*3600*24);
                    //alert(days);
                      document.getElementById('returndays').value = days_difference;

                      // for fine calculation

                      var booking_date =parseInt(document.getElementById('returndays').value);
                        var return_date =parseInt(document.getElementById('days_no').value);
                        console.log(return_date);
                        var price_perday=parseInt(document.getElementById('bk_price').value);

                            if (booking_date>return_date) {

                        var difference = booking_date - return_date;
                        var num = price_perday * difference ;
                           }

                        document.getElementById('fine').value = num * 0.5 ;

                        var total_price=parseInt(document.getElementById('t_price').value);
                        var Fine=parseInt(document.getElementById('fine').value);

                        var final_price= total_price + Fine;

                        document.getElementById('t_price').value = final_price ;

                    }


                    // function Fine(){
                    //     var booking_date =parseInt(document.getElementById('returndays').value);
                    //     var return_date =parseInt(document.getElementById('days_no').value);

                    //     document.getElementById('fine').value = booking_date - return_date;

                    //     // var num1 = parseInt(document.getElementById("days").value);
                    //     //     var num2 = parseInt(document.getElementById("bk_price").value);
                    //     //     document.getElementById("t_price").value = num1 * num2;
                    // }
//                     function disable() {
//   var x = document.getElementById("return_btn").disabled;
//   document.getElementById("return_id").innerHTML = x;
// }



                </script>

            </div>
        </div>
    </div>
@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Attribute;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(6);
        return view('post\index', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function customers()
    {

        $bilal_customer = DB::table('customer')
        ->get()->toArray();


        return view('customer\customers', compact('bilal_customer'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function thesis()
    {
        $thesiss = DB::table('thesis')   // is ($thesiss) variable mn data save krwa diya
        ->get()->toArray();

        return view('Research\thesis', compact('thesiss'))->with('i',(request()->input('page',1)-1)* 5);
    }

    public function booking()
    {
        // $book_price =DB::table('posts')->get('price')->toArray();
        // echo '<pre>';
        // print_r($book_price);
        // exit;
        // $booked= DB::table('posts')->get()->toArray() ;
        // $customerr = DB::table('customer')->get()->toArray() ;

        // return view('bookings\create_booking',compact('booked','customerr'));


        // $booking = DB::table('booking')->get()->toArray() ;
        $booking=DB::table('booking')
        ->join('posts','booking.booking_details',"=",'posts.id')
        ->join('customer','booking.booking_cust',"=",'customer.customer_id')
        ->get();

        return view('bookings\bookings', compact('booking'))->with('i',(request()->input('page',1)-1)* 5);
    }


    public function about()
    {
        return view('post\about');
    }
    public function contactus()
    {
        return view('post\contactus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post\create');
    }

    public function create_c()
    {
        return view('customer\create_c');
    }

    public function create_t()
    {
        return view('Research\create_t');
    }
    public function create_b()
    {
        // $booked= DB::table('posts')->list('booked') ;
        // return view('bookings.create_booking',['booked'=> $booked]);

        // $booking = DB::table('booking')->get()->toArray() ;

        // return view('bookings\bookings', compact('booking'))->with('i',(request()->input('page',1)-1)* 5);
        $booked= DB::table('posts')->get()->toArray() ;
        $customerr = DB::table('customer')->get()->toArray() ;


        return view('bookings\create_booking',compact('booked','customerr'));
       // return view('booking\create_b');//
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->title;
        // exit;

        DB::table('posts')->insert(
            [
                'title' => $request->title,
                'description' =>  $request->description,
                'price' =>  $request->price,
                'created_at' => now()
            ]
        );
        // DB::table('post')->insert($request->all());
        return redirect()->route('post.index')->with('message', 'Post has been created');
    }

    public function store_c(Request $request)
    {
        // return $request->all();
        // exit;

        DB::table('customer')->insert(
            [
                'cust_name' =>  $request->cust_name,
                'book_details' =>  $request->book_details,
                'contact' =>  $request->conatct
            ]
        );
        // DB::table('post')->insert($request->all());
        return redirect()->route('cust.customers')->with('message', 'customer has been created');
    }

    public function store_t(Request $request)
    {


        DB::table('thesis')->insert(
            [
                'thesis_name' =>  $request->thesis_name,
                'thesis_details' =>  $request->thesis_details,
                'thesis_year' =>  $request->thesis_year
            ]
        );

        return redirect()->route('R.thesis')->with('message', 'New Thesis has been created');
    }

    public function store_b(Request $request)
    {
        DB::table('booking')
        ->join('posts','booking.id',"=",'posts.id')->get();


        DB::table('booking')->insert(
            [
                'booking_cust' =>  $request->cust_name,
                'booking_details' =>  $request->title,
                'price' =>  $request->bk_price,
                'fine' =>  $request->fine,
                'days_No' =>  $request->days,
                'booking_date' => $request->from ,
                'return_date' =>  $request->deadline,
                'total_price' => $request->t_price,
                'book_return' => $request->return,
            ]
        );

        return redirect()->route('b.booking')->with('message', 'New Booking has been created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        // $edit =
        $post = DB::table('posts')
            ->where('id', '=', $id)->get()->first();


        return view('post\edit', compact('post'));
    }


    public function edit_c(Post $customers, $id)
    {
        // $edit =
        $customers = DB::table('customer')
            ->where('customer_id', '=', $id)->get()->first();


        return view('customer\edit_c', compact('customers'));
    }

    public function edit_t(Post $thesiss, $id)
    {
        $thesiss = DB::table('thesis')->where('t_id','=',$id)->get()->first();
        return view('Research\edit_t',compact('thesiss'));
    }

    // public function return($booking_id)
    // {
    //     // $returnn = DB::table('booking')->where('Id','=',$id)->get()->first();


    //     $booking_id = DB::table('booking')->where('Id','=',$booking_id)->get();

    //     // $booking = DB::table('booking')->where('Id','=',$id)->get()->first();
    //     return view('bookings\return',compact('booking_id'));
    //     // echo '<pre>';
    //     // print_r($booking);
    //     // exit;
    // }

    public function return(Post $booking,$id)
    {
        $booking = DB::table('booking')
        ->join('posts','booking.booking_details',"=",'posts.id')
        ->join('customer','booking.booking_cust',"=",'customer.customer_id')
        ->where('booking.Id','=',$id)->get()->first();



        return view('bookings\return',compact('booking'));

        // echo '<pre>';
        //  print_r($booking);
        //  exit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('posts')->where('id', $request->id)->update($request->except('_method', '_token'));

        return redirect()->route('post.index')->with('message', 'Post has been Updated');
    }

    public function update_c(Request $request)
    {
        DB::table('customer')->where('customer_id', $request->customer_id)->update($request->except( '_token'));

        return redirect()->route('cust.customers')->with('message', 'customer has been Updated');
    }

    public function update_t(Request $request)
    {
        DB::table('thesis')->where('t_id', $request->t_id)->update($request->except( '_token'));

        return redirect()->route('R.thesis')->with('message', 'Thesis has been Updated');
    }

    public function update_b(Request $request)
    {
        DB::table('booking')->where('Id', $request->booking_id)->update([
            'fine'=>$request->fine,  // column name se return page ki class ki id
            'return_date'=>$request->current_date,
            'total_price'=>$request->t_price,
            'book_return'=>$request->return,
        ]);

        return redirect()->route('b.booking')->with('message', 'booking has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {

        DB::table('posts')->where('id', '=', $id)->delete();
        return redirect()->route('post.index')->with('message', 'Post has been deleted');
    }

    public function destroy_c(Post $post, $id)
    {

        DB::table('customer')->where('customer_id', '=', $id)->delete();
        return redirect()->route('cust.customers')->with('message', 'customer has been deleted');
    }

    public function destroy_t(Post $post, $id)
    {

        DB::table('thesis')->where('t_id', '=', $id)->delete();
        return redirect()->route('R.thesis')->with('message', 'thesis has been deleted');
    }

    public function destroy_b(Post $post, $id)
    {

        DB::table('booking')->where('id', '=', $id)->delete();
        return redirect()->route('b.booking')->with('message', 'Booking has been deleted');
    }

}

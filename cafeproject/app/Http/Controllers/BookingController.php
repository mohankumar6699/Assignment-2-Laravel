<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cafereservations = Booking::all();
        $countBookings = Booking::count();
        $countMenus = Menu::count();
        $countContacts = Contact::count();
        return view('adminpanel', compact('cafereservations','countBookings','countMenus','countContacts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('reservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());
        //return "Saved";
        //return $request->all();
        $booking = new Booking;
        $booking->customer_name = request('customer_name');
        $booking->customer_email = request('customer_email');
        $booking->customer_phone = request('customer_phone');
        $booking->visit_date = request('visit_date');
        $booking->visit_time = request('visit_time');
        $booking->no_of_people = request('no_of_people');
        $booking->customer_message = request('customer_message');
        $booking->save();
        return "Your reservation request was sent. We will call back or send an Email to confirm your reservation. Thank you!";

        }

    public function updateStatus(Request $request)
    {

        $booking = Booking::where('id',$request->id)->first();
        $booking -> status = "Booking Confirmed";
        Mail::to($booking -> customer_email)->send(new WelcomeMail());
        $booking->save();
        $message = "Booking Confirmed!!";
        return view('updateview', compact('message'));
        //return $request->all();



    }








}

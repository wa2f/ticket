<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicTicketcontroller extends Controller
{
 //
 public function TicketSelection(){
    return view('components.ticketselection.index');
}
 public function attendeedetails(){
    return view('components.attendee.index');
}
 public function checkoutdetails(){
    return view('components.checkout.index');
}




}

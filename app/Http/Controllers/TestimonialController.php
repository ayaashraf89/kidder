<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{

    public function index()
{
$testimonials = Testimonial::all();
return view("index", compact("testimonials"));
}

public function create()
{
    return view('addTestimonial');
}

    public function store(Request $request)
{
    $testimonial = new Testimonial();
    $testimonial->name = $request->name;
    $testimonial->profession = $request->profession;
    $testimonial->message = $request->message;
    $testimonial->image = $request->image;
    $testimonial->save();
return 'Added Successfully';
}
}
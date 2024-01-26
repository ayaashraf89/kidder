<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;

class TestimonialController extends Controller
{
    use Common;

    public function index()
{
$testimonials = Testimonial::all();
return view("testimonial", compact("testimonials"));
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

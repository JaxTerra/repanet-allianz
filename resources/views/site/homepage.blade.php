@extends('layouts.master')

@section('seo')

@endsection

@section('content')

    <section class="cover height-80 imagebg text-center parallax" data-overlay="3">
        <div class="background-image-holder"> <img alt="background" src="{{asset('images/repa2.jpeg')}}"> </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-md-12">
                    <h1> REPANET</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row text-center mt--1">
            <div class="col"></div>
            <div class="col-10">
                <h3 class="">A company specialising in storm and catastrophe response management property damage and renovation.</h3>
                <blockquote> “Our business is all about people and providing solutions”</blockquote>
            </div>
            <div class="col"></div>
        </div>

        <div class="row text-center mx-md-0 mx-1 mt--1 mb--1">
            <div class="col-md-4 offset-md-2 ">
                <div class="feature feature--featured feature-2 boxed boxed--border bg--white text-left">
                    <a href="tel:1300503391">
                        <i class="fas fa-phone-alt fa-2x icon-width-13"></i>1300 50 33 91
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature feature--featured feature-2 boxed boxed--border bg--white text-left">
                    <a href="mailto:admin@repanet.com.au">
                        <i class="far fa-envelope fa-2x icon-width-13"></i>admin@repanet.com.au
                    </a>
                </div>
            </div>
        </div>

        <div class="row text-center mt--1 mb--1">
            <div class="col"></div>
            <div class="col-10">
                <p class="lead">REPANET is just that, a repair network of licensed trades all committed to providing solutions,
                    managed under one company. Specialists in storm response management and repairs from years of
                    experience of working with clients and insurance companies alike.
                </p>
                <p class="lead">Our background is in the insurance storm response and triage, with over 20 years in the building
                    industry and our family business is Queensland owned and operated
                </p >
                <p class="lead">From the moment you make contact, or until you sign off on the repairs, our team behind the scenes
                    will keep you informed.
                </p>
                <p class="lead">Our goal is to make insurance claims stress free by understanding your situation, delivering quality
                    workmanship and getting you back to normal living as quickly as possible.
                </p>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <section class="text-center bg--dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2> Our Services</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="feature feature-3 boxed boxed--lg boxed--border">
                        <img alt="roofing image" src="{{asset('images/roofing.jpeg')}}">
                        <h4>Roofing</h4>
                        <p class="mw-100">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                        <a href="#">
                            Learn More
                        </a>
                    </div>
                    <!--end feature-->
                </div>
                <div class="col-md-4">
                    <div class="feature feature-3 boxed boxed--lg boxed--border">
                        <img alt="Cabinet Making" src="{{asset('images/cabinetmaking.jpeg')}}">
                        <h4>Cabinet making</h4>
                        <p class="mw-100">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                        <a href="#">
                            Learn More
                        </a>
                    </div>
                    <!--end feature-->
                </div>
                <div class="col-md-4">
                    <div class="feature feature-3 boxed boxed--lg boxed--border">
                        <img alt="Cabinet Making" src="{{asset('images/building.jpeg')}}">
                        <h4>Building</h4>
                        <p class="mw-100">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                        <a href="#">
                            Learn More
                        </a>
                    </div>
                    <!--end feature-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature feature-3 boxed boxed--lg boxed--border">
                        <img alt="plumbing" src="{{asset('images/plumbing.jpeg')}}">
                        <h4>Plumbing</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                        <a href="#">
                            Learn More
                        </a>
                    </div>
                    <!--end feature-->
                </div>
                <div class="col-md-4">
                    <div class="feature feature-3 boxed boxed--lg boxed--border">
                        <img alt="electrical" src="{{asset('images/electrical.jpeg')}}">
                        <h4>Electrical</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                        <a href="#">
                            Learn More
                        </a>
                    </div>
                    <!--end feature-->
                </div>
                <div class="col-md-4">
                    <div class="feature feature-3 boxed boxed--lg boxed--border">
                        <img alt="painting" src="{{asset('images/painting.jpeg')}}">
                        <h4>Painting</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                        <a href="#">
                            Learn More
                        </a>
                    </div>
                    <!--end feature-->
                </div>
            </div>
        </div>
    </section>

    <section class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7 boxed boxed--border">
                    <h3 class="mb-0">Contact Us</h3>
                    <form class="text-left form-email row mx-0"
                          data-success="Thanks for your enquiry, we'll be in touch shortly."
                          data-error="Please fill in all fields correctly."
                          method="POST"
                          action="{{url('contact-send')}}">
                        @csrf
                        <div class="col-md-6">
                            <label class="type--bold">Your Name:</label>
                            <input type="text" name="name" class="validate-required">
                        </div>
                        <div class="col-md-6">
                            <label class=" type--bold">Email Address:</label>
                            <input type="email" name="email" class="validate-required validate-email">
                        </div>
                        <div class="col-md-12">
                            <label class=" type--bold">Message:</label>
                            <textarea rows="6" name="message" class="validate-required"></textarea>
                        </div>
                        <div class="col-md-6 col-xs-12 mt--1">
                            @captcha
                        </div>
                        <div class="col-md-6 col-xs-12 pull-right mt--1">
                            <button type="submit" class="btn btn--primary type--uppercase">Send Enquiry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr>

@endsection

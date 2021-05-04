<div class="nav-container">
    <div>
        <div class="bar bar--sm visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-md-2">
                        <a href="{{url('/')}}">
                            <img class="logo logo-dark" alt="logo" src="{{asset('logos/REPANET_Logo-1-remove-bg.png')}}">
                            <img class="logo logo-light" alt="logo" src="{{asset('logos/REPANET_Logo-1-remove-bg.png')}}">
                        </a>
                    </div>
                    <div class="col-9 col-md-10 text-right">
                        <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <nav id="menu2" class="bar bar-2 hidden-xs pb-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-left-sm hidden-xs order-lg-2">
                        <div class="bar__module">
                            <a href="{{url('/')}}">
                                <img class="logo" alt="logo" src="{{asset('logos/REPANET_Logo-1-remove-bg.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="bar__module">
                            <ul class="menu-horizontal text-left">
                                <li>
                                    <a href="{{url('/')}}">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/#about')}}">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/#services')}}">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/#contact')}}">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right text-left-xs text-left-sm order-lg-3">
                        <div class="bar__module">
                            <ul class="menu-horizontal p-0">
                                <li>
                                    <a href="{{url('tel:1300503391')}}">
                                        <i class="fas fa-phone-alt fa-2x text-black"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('https://facebook.com')}}">
                                        <i class="fab fa-facebook-f fa-2x text-black mr-4"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="modal-instance">
                                <a class="btn btn--sm  modal-trigger " href="#">
                                    <span class="btn__text ">
                                        Request a Quote
                                    </span>
                                </a>
                                <div class="modal-container">
                                    <div class="modal-content section-modal">
                                        <section class="unpad ">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6 col-12 ">
                                                        <div class="feature feature-1 text-center">
                                                            <img alt="Logo Strip" class="bg--white" src="{{asset('logos/REPANET_Logo-1-remove-bg.png')}}" />
                                                            <div class="feature__body boxed boxed--lg boxed--bordert">
                                                                <div class="modal-close modal-close-cross"></div>
                                                                <div class="text-block">
                                                                    <h2 class="text-black type--bold">Request a Quote</h2>
                                                                </div>
                                                                <form id="quote-form"
                                                                      class="text-left form-email row mx-0"
                                                                      data-success="Thanks for your enquiry, we'll be in touch shortly."
                                                                      data-error="Please fill in all fields correctly."
                                                                      method="POST"
                                                                      action="{{url('quote-send')}}">
                                                                    @csrf
                                                                    <div class="col-md-6">
                                                                        <label class="type--bold">Your Name:</label>
                                                                        <input type="text" name="name" class="validate-required">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class=" type--bold">Email Address:</label>
                                                                        <input type="email" name="email" class="validate-required validate-email">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class=" type--bold">Service Required:</label>
                                                                        <select id="service" name="service" form="quote-form">
                                                                            <option value="roofing">Roofing</option>
                                                                            <option value="building">Building</option>
                                                                            <option value="cabinetmaking">Cabinet Making</option>
                                                                            <option value="plumbing">Plumbing</option>
                                                                            <option value="electrical">Electrical</option>
                                                                            <option value="painting">Painting</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label class=" type--bold">Message:</label>
                                                                        <textarea rows="6" name="message" class="validate-required"></textarea>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-6 mt--1">
                                                                        @captcha
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-6 pull-right mt--1">
                                                                        <button type="submit" class="btn btn--primary type--uppercase">Send Enquiry</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!--end feature-->
                                                    </div>
                                                </div>
                                                <!--end of row-->
                                            </div>
                                            <!--end of container-->
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

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
        <nav id="menu2" class="bar bar-2 hidden-xs">
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
                                    <a href="{{url('about')}}">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('contact')}}">
                                        Contact
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <span class="dropdown__trigger">
                                        Services
                                    </span>
                                    <div class="dropdown__container">
                                        <div class="container">
                                            <div class="row">
                                                <div class="dropdown__content col-lg-2">
                                                    <ul class="menu-vertical">
                                                        <li>
                                                            <a href="{{url('/services/landscaping')}}">
                                                                Landscaping
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/services/shop-fitting')}}">
                                                                Shop Fitting
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{--<div class="col-lg-5 text-right text-left-xs text-left-sm order-lg-3">
                        <div class="bar__module">
                            <div class="modal-instance">
                                <a class="btn btn--sm  modal-trigger" href="#">
                                    <span class="btn__text">
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
                                                            <img alt="Logo Strip" src="{{asset('logos/logo_strip.png')}}" />
                                                            <div class="feature__body boxed boxed--lg boxed--border  bg--gradient">
                                                                <div class="modal-close modal-close-cross"></div>
                                                                <div class="text-block">
                                                                    <h3 class="color--white type--bold">Request a Quote</h3>
                                                                </div>
                                                                <form action="#"
                                                                      data-success="Thanks for signing up.  Please check your inbox for a confirmation email."
                                                                      data-error="Please check errors">
                                                                    <input class="validate-required"
                                                                           type="text"
                                                                           name="NAME"
                                                                           placeholder="Your Name" />
                                                                    <input class="validate-required validate-email mb-5"
                                                                           type="email"
                                                                           name="EMAIL"
                                                                           placeholder="Email Address" />
                                                                    @captcha
                                                                    <button type="submit"
                                                                            class="btn btn--primary type--uppercase mt-5">
                                                                        Submit
                                                                    </button>
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
                    </div>--}}
                </div>
            </div>
        </nav>
    </div>
</div>

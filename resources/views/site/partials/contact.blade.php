<section class="text-center bg--dark" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 boxed boxed--border">
                <h3 class="mb-0">Contact Us</h3>
                <form id="contact-form"
                      class="text-left form-email row mx-0"
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

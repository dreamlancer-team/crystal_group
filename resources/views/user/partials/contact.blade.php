@inject('setting', 'App\Models\Setting')

<section class="section colored" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Talk To Us</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Have any questions? We'd love to hear from you.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 margin-bottom-30">
                <h5 class="margin-bottom-10">Keep in touch</h5>
                <div class="contact-text">
                    <p>{{ $setting->get('address') }}</p>

                    <h6 class="margin-bottom-15">Send Us Your Query Anytime!</h6>
                    <p>Email : <a href="mailto:{{ $setting->get('email') }}">{{ $setting->get('email') }}</a></p>   
                    <h6 class="margin-bottom-15">Phone Numbers</h6>   
                    <ul>
                      <li><a href="tel:+91{{ $setting->get('mobile') }}">+91 {{ $setting->get('mobile') }}</a></li>
                    </ul>  
                </div>             
            </div>

            <div></div>

            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="contact-form">
                    <form id="contact" action="{{ route('mail.send') }}" method="post">
                      @csrf
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" class="form-control" placeholder="Full Name" required="">
                          </fieldset>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <fieldset>
                            <input name="email" type="email" class="form-control" placeholder="E-Mail Address" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <fieldset>
                            <input name="mobile" type="number" class="form-control" placeholder="Phone Number" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button">Send Message</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
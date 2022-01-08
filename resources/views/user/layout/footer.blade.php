<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="social">
                    @if ($setting->get('instagram') != null)
                        <li><a href="{{ url($setting->get('instagram')) }}"><i class="fa fa-instagram"></i></a></li>                        
                    @endif
                    @if ($setting->get('facebook') != null)
                        <li><a href="{{ url($setting->get('facebook')) }}"><i class="fa fa-facebook"></i></a></li>                        
                    @endif
                    @if ($setting->get('twitter') != null)
                        <li><a href="{{ url($setting->get('twitter')) }}"><i class="fa fa-twitter"></i></a></li>                        
                    @endif
                    @if ($setting->get('linkedin') != null)
                        <li><a href="{{ url($setting->get('linkedin')) }}"><i class="fa fa-linkedin"></i></a></li>                        
                    @endif
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">{{ $setting->get('footer_text') }} - Design: <a href="http://dreamlancer.in/">Dreamlancer</a></p>
            </div>
        </div>
    </div>
</footer>
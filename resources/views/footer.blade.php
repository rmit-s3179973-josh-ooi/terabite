<footer class="footer">
    <div class="container">
        <div class="footer-item">
            <ul>
                <li class="link-item"><a href="{{ route('website.get.home') }}">Home</a></li>
                <li class="link-item"><a href="">About Us</a></li>
                <li class="link-item"><a href="">Contact Us</a></li>
                <li class="link-item"><a href="">Career</a></li>
                <li class="link-item"><a href="">Partner Relations</a></li>
            </ul>
        </div>
        <div class="footer-item">
            <h3>Categories</h3>
            @inject('Category','App\Category')
            <ul class="cat-list">
            @foreach($Category::all() as $c)
                <li class="cat-item"><a href="">{{$c->category_name}}</a></li>
            @endforeach
            </ul>
        </div>
        <div class="footer-item">
            <h3>Newsletter</h3>
            <div class="newsletter-wrap">
                <span class="newsletter-copy">Subscribe to our newsletter to stay up to date with our hot deals and discounts!</span>
                {!! Form::open() !!}
                <div class="form-input-wrap">
                    <span class="form-input">
                        {!! Form::email('email',null,['placeholder'=>'Email','class'=>"newsletter-input"]) !!}                    
                        
                    </span>
                    <span class="form-input">
                        {!! Form::submit('Go',['class'=>'btn-submit newsletter-btn']) !!}
                    </span>
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="social-wrap">
                <span class="social-copy">Follow us</span>
                <div class="social-list">
                    <span class="social-item"><a href="http://www.facebook.com"><img src="{{ asset('assets/images/icons/facebook-logo.png') }}" alt="Facebook logo"></a></span>
                    <span class="social-item"><a href="http://www.instagram.com"><img src="{{ asset('assets/images/icons/instagram-social-network-logo-of-photo-camera.png') }}" alt="instagram"></a></span>
                    <span class="social-item"><a href="http://www.twitter.com"><img src="{{ asset('assets/images/icons/twitter-logo.png') }}" alt="twitter"></a></li>
                </div>
            </div>
        </div>
    </div>
    <div class="lower-footer-wrap">
        <div class="lower-footer-container" >
            <span class="lower-footer-item"><a href="">Privacy Policy</a></span>
            <span class="lower-footer-item"><a href="">Terms & Conditions</a></span>
            <span class="lower-footer-item"><a href="">2018 © terabite.com.au</a></span>
        </div>
    </div>    
</footer>
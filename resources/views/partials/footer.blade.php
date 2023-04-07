<footer class="main-footer">
        
        <div class="footer-links">
            <div class="container">
                <div class="row mb-3">
                    <div class="d-flex col-5">
                    @foreach($menuLinks as $menulink)
                        <div class="col">
                            <h2 class="menu-title ">{{ $menulink['title'] }}</h2>
                            <ul class="menu list-unstyled">
                                @foreach($menulink['links'] as $link)
                                <li class="menu-item">{{$link}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                    </div>
                </div>
                <p class="copyright m-0 pb-0">All Sites Content TM and &copy; 2020 DC Entertainment, unless otherwise 
                    <a href="#">noted here</a>. All rights reserved. <br>
                    <a href="#">Cookies Setting</a>
                </p>
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="Dc Logo">
                </div>
            </div>
        </div>

        <div class="footer-social">

            <div class="container d-flex justify-content-between">
                <button class="btn btn-outline">sign-up now!</button>
                <div class="social-wrap">
                    <ul class="social-icons list-unstyled">
                        <li class="follow">follow us</li>
                        <li>
                            <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                        </li>
                        <li>
                            <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                        </li>
                        <li>
                            <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                        </li>
                        <li>
                            <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                        </li>
                        <li>
                            <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="">
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </footer>
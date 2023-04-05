<footer class="main-footer">
        
        <div class="footer-links">
            <div class="container">
                <div class="row">
                    <div class="col-1">
                        <h2 class="menu-title ">dc-comics</h2>
                        <ul class="menu list-unstyled">
                            <li class="menu-item">Characters</li>
                            <li class="menu-item">Comics</li>
                            <li class="menu-item">Movies</li>
                            <li class="menu-item">TV</li>
                            <li class="menu-item">Games</li>
                            <li class="menu-item">Collectibles</li>
                            <li class="menu-item">Videos</li>
                            <li class="menu-item">Fans</li>
                            <li class="menu-item">News</li>
                        </ul>

                    </div>

                    <div class="col-1">
                        <h2 class="menu-title ">dc</h2>
                        <ul class="menu list-unstyled">
                            <li class="menu-item">Terms Of Use</li>
                            <li class="menu-item">Privacy policy (New)</li>
                            <li class="menu-item">Ad Choices</li>
                            <li class="menu-item">Advertising</li>
                            <li class="menu-item">Privacy</li>
                            <li class="menu-item">Jobs</li>
                            <li class="menu-item">Subscriptions</li>
                            <li class="menu-item">Talent Workshops</li>
                            <li class="menu-item">Subscriptions</li>
                            <li class="menu-item">CPSC Certificates</li>
                            <li class="menu-item">Ratings</li>
                            <li class="menu-item">Shop Help</li>
                            <li class="menu-item">Contact Us</li>
                        </ul>
                    </div>

                    <div class="col">

                        <h2 class="menu-title ">sites</h2>
                        <ul class="menu list-unstyled">
                            <li class="menu-item">DC</li>
                            <li class="menu-item">MAD Magazine</li>
                            <li class="menu-item">DC Kids</li>
                            <li class="menu-item">DC Universe</li>
                            <li class="menu-item">DC Power Visa</li>
                         
                        </ul>

                    </div> 

                    <div class="col">
                        <h2 class="menu-title ">shop</h2>
                        <ul class="menu list-unstyled">
                            <li class="menu-item">Shop DC</li>
                            <li class="menu-item">Shop DC Collectibles</li>
                        </ul>

                    </div>

                </div>
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
                        <li v-for="icon in socialIcons">
                            <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                        </li>
                        <li v-for="icon in socialIcons">
                            <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                        </li><li v-for="icon in socialIcons">
                            <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                        </li><li v-for="icon in socialIcons">
                            <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                        </li><li v-for="icon in socialIcons">
                            <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="">
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </footer>
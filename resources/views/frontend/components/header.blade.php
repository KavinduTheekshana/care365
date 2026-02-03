<header class="header-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{ route('home') }}">
                                        <img class="logo-main" src="assets/img/logo.png" alt="" 
                                            style="max-height: 60px; width: auto; height: auto;">
                                        <img class="logo-scroll" src="assets/img/logo.png" alt="" 
                                            style="max-height: 60px; width: auto; height: auto;">
                                        <img class="logo-mobile" src="assets/img/logo.png" alt="" 
                                            style="max-height: 60px; width: auto; height: auto;">
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                                    <li><a class="menu-item {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('about') }}#who-we-are" class="scroll-link">Vision|Mission</a></li>
                                            <li><a class="menu-item" href="{{ route('about') }}#our-homes" class="scroll-link">Our-Homes</a></li>
                                        </ul>
                                    </li> 
                                    <li><a class="menu-item {{ request()->routeIs('wecare') ? 'active' : '' }}" href="{{ route('wecare') }}">We Care</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('wecare') }}#Packages" class="scroll-link">Packages</a></li>
                                            <li><a class="menu-item" href="{{ route('services') }}" class="scroll-link">Services</a></li>
                                            <li><a class="menu-item" href="{{ route('wecare') }}#FAQ" class="scroll-link">FAQ</a></li>
                                            <li><a class="menu-item" href="{{ route('wecare') }}#Admissions" class="scroll-link">Admissions</a></li>
                                            <li><a class="menu-item" href="{{ route('wecare') }}#Meal-Plan" class="scroll-link">Meal-Plan</a></li>
                                        </ul>
                                    </li>                                    
                                    <li><a class="menu-item {{ request()->routeIs('howitworks') ? 'active' : '' }}" href="{{ route('howitworks') }}">How It Works</a></li>

                                    <li><a class="menu-item {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a class="menu-item {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>

                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <div class="h-phone xs-hide">
                                        <span>Need Help?</span>
                                        <h5>(+94)77 660 40 40</h5>
                                    </div>    
                                    <a href="{{ route('contact') }}" class="btn-main">Book Service Now</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
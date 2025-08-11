<header class="header-area">
    <div class="header-topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="topbar-trending">
                        <span>Trending</span>
                        <div class="trending-slider">
                            <div class="trending-item">
                                <p>Top 10 Best Movies of 2018 So Far: Great Movies To Watch Now </p>
                            </div>
                            <div class="trending-item">
                                <p>Top 10 Best Movies of 2018 So Far: Great Movies To Watch Now </p>
                            </div>
                            <div class="trending-item">
                                <p>Top 10 Best Movies of 2018 So Far: Great Movies To Watch Now </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="topbar-social d-flex align-items-center">
                        <p>Thursday, March 26, 2020</p>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-centerbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header-centerbar-ad">
                        <a href="#"><img src="{{ asset('assets/images/ad/ad-1.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menubar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-sm-3 col-3">
                    <div class="header-menu">
                        <div class="stellarnav">
                            <ul>
                                <li>
                                    <a class="active" href="{{ route('home.index') }}">Anasayfa</a>
                                </li>
                                <li><a href="{{ route('about.index') }}">Hakkımızda</a></li>
                                <li><a href="{{ route('archive.index') }}">Arşiv</a></li>
                                <li><a href="{{ route('business.index') }}">Kategoriler</a>
                                    <ul>
                                        <li class="active"><a href="{{ route('business.index') }}">İşletme</a>
                                        </li>
                                        <li><a href="{{ route('business.index') }}">Eğlence</a>
                                        </li>
                                        <li><a href="{{ route('business.index') }}">Özellikler</a>
                                        </li>
                                        <li><a href="{{ route('business.index') }}">Spor</a>
                                        </li>
                                        <li><a href="{{ route('business.index') }}">Trendler</a>
                                        </li>
                                        <li><a href="{{ route('business.index') }}">Teknoloji</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="">Spor</a></li>
                                <li><a href="">Teknoloji</a></li>
                            </ul>
                        </div><!-- .stellarnav -->
                    </div>
                </div>
                <div class="col-lg-4 col-sm-9 col-9">
                    <div class="header-menu-rightbar">
                        <div class="header-menu-search">
                            <ul>
                                <li><a href="#"><i class="fal fa-search"></i></a></li>
                                <li><a href="#"><i class="fal fa-user-circle"></i></a></li>
                            </ul>
                        </div>
                        <div class="nice-select-item">
                            <select>
                                <option data-display="English">English</option>
                                <option value="1">Bangla</option>
                                <option value="2">Hindi</option>
                                <option value="3">option</option>
                                <option value="4">Potato</option>
                            </select>
                        </div>
                        <div class="header-temperature">
                            <div class="icon">
                                <img src="{{ asset('assets/images/temperature-icon.svg') }}" alt="">
                            </div>
                            <div class="temperature-content text-center">
                                <h5 class="title">13 <sup>0<sub>C</sub></sup></h5>
                                <p>San Francisco</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
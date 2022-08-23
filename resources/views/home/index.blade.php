@extends('main')

@section('container')

{{-- <a href="{{ route('content.edit')}}" class=" btn btn-primary m-3" >Edit Content</a>
<a href="{{ route('content.create')}}" class=" btn btn-primary m-3" >Create Content</a> <br>

{{ $content->nama }} <br>
{{ $content->logo }} <br>
{{ $content->tittle }} <br>
{{ $content->content }} <br>
{{ $content->alamat }} <br>
{{ $content->email }} <br>
{{ $content->no_telp }} <br>
{{ $content->content_about }} <br>
{{ $content->instagram }} <br>
{{ $content->facebook }} <br>
{{ $content->twitter }} <br>
{{ $content->youtube }} <br>

@foreach ($popular_bisnis as $popular)
    {{ $popular->name_bisnis }} <br>
    {{ $popular->logo_bisnis }} <br>
@endforeach

@foreach ($fitur_koperasi as $fitur)
    {{ $fitur->tittle_fitur }} <br>
    {{ $fitur->content_fitur }} <br>
@endforeach

@foreach ($keuntungan_koperasi as $keuntungan)
    {{ $keuntungan->tittle_keuntungan }} <br>
@endforeach

@foreach ($keunggulan_koperasi as $keunggulan)
    {{ $keunggulan->tittle_keunggulan }} <br>
    {{ $keunggulan->content_keunggulan }} <br>
@endforeach --}}


<!-- ======= Header ======= -->
<header id="header" class="fixed-top  header-transparent ">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <div class="container">
            <a href="index.html">
                <img src="{{ asset('assets_landing/logo/'.$content->logo ) }}" alt="Logo" style="width: 183px; height: 40px;"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.html" class="nav-item nav-link active me-4 ms-5 ps-1">Home</a>
                    <a href="about.html" class="nav-item nav-link me-4">About</a>
                    <a href="service.html" class="nav-item nav-link me-4">Service</a>
                    <a href="contact.html" class="nav-item nav-link me-4">Contact</a>
                        <a href="about.html" class="nav-item nav-link me-4">Sign In</a>
                        <a href="service.html" class="nav-item nav-link me-4">Sign Up</a>
                </div>
            </div>

        </div>
    </nav>
</header>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-3 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                <div>
                    <h1 class="animated zoomIn " style="color: var(--main) ; ">{{ $content->nama }}</h1>
                    <h1>{{ $content->tittle }}</span></h1>
                    <h2>{{ $content->content }}</p>
                    </h2>
                    <a href="#" class="started-btn text-center">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                <img src="{{ asset('assets_landing/img/pop.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Popular Bisnis</h2>
                <p>
                    @foreach ($popular_bisnis as $popular)
                        {{ $popular->name_bisnis }} / 
                    @endforeach
                </p>
                {{-- <p>Evo Apps / Evo Kasir / Evo Merchant / Evo Jasa / Modal Desa / Market Place / ABC Phone / SUA </p> --}}
            </div>

            {{-- <div class="mx-auto text-center wow fadeInUp pb-3 pt-3" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="animated zoomIn " style="color: var(--main) ; ">Popular Bisnis</h2>
                <h6 style="font-size: 13px;">Evo Apps / Evo Kasir / Evo Merchant / Evo Jasa / Modal Desa / Market Place / ABC Phone / SUA</h6>
            </div> --}}
            <div class="row justify-content-center pb-3">
                <div class="col-lg-6 wow fadeInUp justify-content-center ps-4 ms-3" data-wow-delay="0.1s">
                    <div class="row ">
                        
                        @foreach ($popular_bisnis as $popular)
                        <div class="col-md-3 mb-3 d-flex justify-content-center">
                            <img class="border rounded-3 ps-4 pe-4 py-3" src="{{ asset('assets_landing/logo_bisnis/'.$popular->logo_bisnis ) }}" alt="... " style="width: 130px; height: 130px"/>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <!-- <div class="row no-gutters justify-content-center">
                <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="bx bx-receipt"></i>
                                <h4>Corporis voluptates sit</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Ullamco laboris nisi</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-images"></i>
                                <h4>Labore consequatur</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-shield"></i>
                                <h4>Beatae veritatis</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-atom"></i>
                                <h4>Molestiae dolor</h4>
                                <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="bx bx-id-card"></i>
                                <h4>Explicabo consectetur</h4>
                                <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </section>
    <!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Fitur Koperasi</h2>
            </div>
            <div class="row content">

                <div class="col-md-4">
                    @foreach ($fitur_koperasi as $key => $fitur)
                        @if ($key <= 3)
                            <figure id="" class="text-end menu" data-aos="fade-up" >
                                <p>{{ $fitur->tittle_fitur }}</p>
                                <h6 style="font-size: 12px;">{{ $fitur->content_fitur }}</h6>
                            </figure> 
                        @endif
                    @endforeach
                </div>
                <div class="col-md-4 p-0" data-aos="fade-up" id="phone">
                    <img src="{{ asset('assets_landing/img/phone.png') }}" alt=" ">
                </div>
                <div class="col-md-4" wow fadeIn data-wow-delay=" 0.1s">
                    @foreach ($fitur_koperasi as $key => $fitur)
                        @if ($key >= 4)
                            <figure class="text-start" data-aos="fade-up">
                                <p>{{ $fitur->tittle_fitur }}</p>
                                <h6 style="font-size: 12px;">{{ $fitur->content_fitur }}</h6>
                            </figure> 
                        @endif
                    @endforeach
                    
                </div>
            </div>

            <div class="row content py-4 px-3 " style="background-color: var(--main);">

                <div class="col-md-6" data-aos="fade-left">
                    <div class="d-flex align-items-center mb-3 ">
                        <h2>Keunggulan Koperasiku</h2>
                    </div>
                    @foreach ($keunggulan_koperasi as $key => $keunggulan)
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <h2>{{ $key+1 }}</h2>
                            </div>
                            <h5 style="color: var(--vav);">{{ $keunggulan->tittle_keunggulan }}</h5>
                        </div>
                        <h6 style="font-size: 12px; color: var(--vav);" ">{{ $keunggulan->content_keunggulan }}</h6>
                    @endforeach
                </div>

                <div class="col-md-6" data-aos="fade-left">
                    <img src="{{ asset('assets_landing/img/hard.png') }}" class="img-fluid pt-3" alt=" ">
                </div>

                
            </div>

            <div class=" row content ">
                <div class=" col-md-4 " data-aos="fade-left">
                    <img src="{{ asset('assets_landing/img/think.png') }} " class=" img-fluid " alt=" ">
                </div>

                <div class=" col-md-7 p-3 ">
                    @foreach ($keuntungan_koperasi as $keuntungan)
                        <h4 class=" desc py-2 ps-1 "><i class=" bi bi-check-circle-fill pe-4 "></i>{{ $keuntungan->tittle_keuntungan }}</h4>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Details Section -->
    {{-- <div class="row">
        <div class="col-md-4">asd</div>
        <div class="col-md-7">
            <h4 class=" desc py-2 ps-1 "><i class=" bi bi-geo-alt-fill me-4"></i>{{ $content->alamat }}</h4>
        </div>
    </div> --}}

    {{-- <div class="row">
        <div class="col-xs-6 col-md-2">.col-xs-12 .col-md-8</div>
        <div class="col-xs-6 col-md-10">.col-xs-6 .col-md-4</div>
    </div> --}}

    <!-- ======= Contact Section ======= -->
    <section id=" contact " class=" contact ">
        <div class=" container " data-aos=" fade-up ">
            <div class=" row ">
                <div class=" col-md-6 p-1" data-aos=" fade-up ">
                    <div>
                        <h1 class=" animated zoomIn "><span style="color: #ea9a08">Partnership in</span><br>Mind</h1>
                    </div>
                    <h4 class=" my-3"><i class=" bi bi-geo-alt-fill "></i>{{ $content->alamat }}</h4>
                    <h4 class=" my-3"><i class=" bi bi-geo-alt-fill "></i>{{ $content->email }}</h4>
                    <h4 class=" my-3"><i class=" bi bi-geo-alt-fill "></i>{{ $content->no_telp }}</h4>
                    {{-- <div class="row">
                        <div class="col-xs-2 col-md-2"><i class=" bi bi-geo-alt-fill "></i></div>
                        <div class="col-xs-10 col-md-10"><h5 >{{ $content->email }}</h5></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 col-md-2"><i class=" bi bi-geo-alt-fill "></i></div>
                        <div class="col-xs-10 col-md-10"><h5 >{{ $content->no_telp }}</h5></div>
                    </div> --}}
                    
                    {{-- <div class="row mt-2">
                        <div class="mt-2 col-md-1 p-1">
                            <i class=" bi bi-geo-alt-fill "></i>
                        </div>
                        <div class=" col-md-10 ">
                            <h5 >{{ $content->alamat }}</h5>

                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-1 p-1">
                            <i class=" bi bi-geo-alt-fill "></i>
                        </div>
                        <div class=" col-md-10 py-3 ">
                            <h5>{{ $content->email }}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-1 p-1">
                            <i class=" bi bi-geo-alt-fill "></i>
                        </div>
                        <div class=" col-md-10 py-3 ">
                            <h5>{{ $content->no_telp }}</h5>
                        </div>
                    </div> --}}
                </div>
                <div class=" col-md-6 p-1" data-aos=" fade-left ">
                    <form action=" forms/contact.php " method=" post " role=" form " class=" php-email-form " data-aos=" fade-up ">
                        <div class=" form-group ">
                            <input placeholder=" Your Name " type=" text " name=" name " class=" form-control " id=" name " required>
                        </div>
                        <div class=" form-group mt-3 ">
                            <input placeholder=" Your Email " type=" email " class=" form-control " name=" email " id=" email " required>
                        </div>
                        <div class=" form-group mt-3 ">
                            <input placeholder=" Subject " type=" text " class=" form-control " name=" subject " id=" subject " required>
                        </div>
                        <div class=" form-group mt-3 ">
                            <textarea placeholder=" Message " class=" form-control " name=" message " rows=" 5 " required></textarea>
                        </div>
                        <div class=" my-3 ">
                            <div class=" loading ">Loading</div>
                            <div class=" error-message "></div>
                            <div class=" sent-message ">Your message has been sent. Thank you!</div>
                        </div>
                        <div class=" text-center "><button type=" submit ">Submit</button></div>
                    </form>
                </div>
                
                
            </div>    
        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
    <footer id=" footer ">
        <div class=" footer ">
            <div class=" container ">
                <div class=" row p-5 ">
                    <div class=" col-lg-5 pb-3 ">
                        <div class=" pb-3 ">
                            <img src="{{ asset('assets_landing/logo/'.$content->logo ) }}" style=" width: 268px; height: 67px; " alt=" ">
                        </div>
                        <p>{{ $content->content_about }}</p> 
                    </div>

                    <div class=" col-md-1 "></div>
                    <div class=" col-lg-6 col-md-6 footer-links p-3 ">
                        <h4>Partner</h4>
                        <ul>
                            <li> <a href=" # ">Digikop</a></li>
                            <li> <a href=" # ">Bina Bangun Bangsa</a></li>
                            <li> <a href=" # ">Himpaudi</a></li>
                            <li> <a href=" # ">Himpunan Desa Mandiri Indonesia</a></li>
                        </ul>
                    </div>

                    <div class=" col-lg-5 ">
                        <h3 class=" pb-2 ">Send to message</h3>
                        <div class=" col-7 ">
                            <label for=" input " class=" visually-hidden "></label>
                            <input type=" " class=" form-control " id=" input " placeholder=" ">
                            <button type=" submit " class=" btn text-white "><i class=" bi bi-send "></i></button>
                        </div>
                        
                    </div>
                    
                    <div class=" col-md-1 "></div>
                    <div class=" col-lg-6 ">
                        <h4>Partner</h4>
                        <div class=" social-links mt-3 ">
                            <a href=" "><button type=" submit " class=" btn "><i class=" bi bi-instagram "></i></button></a>
                            <button type=" submit " class=" btn "><i class=" bi bi-facebook "></i></button>
                            <button type=" submit " class=" btn "><i class=" bi bi-twitter "></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
                <!-- Designed by <a href=" https://bootstrapmade.com/ ">BootstrapMade</a> -->
    </footer>
<!-- End Footer -->

    <style>
        @media only screen and (max-width: 800px) {
            #phone{
                display: none;
                /* background-color: red; */
            }
            
            }
    </style>

    



@endsection
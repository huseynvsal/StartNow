<!doctype html>
<html lang="en">
<head>
    <title>ZalTap.az</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('startnow/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('startnow/css/toast.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="{{asset('startnow/logos/main_logo.png')}}">
</head>
<body>
    {{--Header Start--}}
    <div class="dark-bg">
        <div class="dark-bg-contacts">
            <span>
                <i class="fa fa-phone"></i>
            </span>
            <span>
                +994 50 382 69 22
            </span>
        </div>
        <div class="dark-bg-contacts">
            <span>
                <i class="fa fa-paper-plane"></i>
            </span>
            <span>
                ZalTap@gmail.com
            </span>
        </div>
        <div class="dark-bg-contacts">
            <span>
                <a href="https://www.instagram.com/huseynvsal/"><i class="fa fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=+994503826922"><i class="fa fa-whatsapp"></i></a>
                <a href="https://twitter.com/huseynvsal1"><i class="fa fa-twitter"></i></a>
            </span>
        </div>
    </div>
    {{--Navbar Start--}}
    <div class="navibar">
        <div class="main_name">
            <div class="small_weight"></div>
            <div class="big_weight"></div>
            <div class="very_small_weight"></div>
            <a href="http://michalsnik.github.io/aos/" class="start">START NOW</a>
            <div class="very_small_weight"></div>
            <div class="big_weight"></div>
            <div class="small_weight"></div>
        </div>
        <div class="main_menu">
            <a href="/mainpage" class="current_link">Əsas Səhifə</a>
            <a href="/halls" class="nav_link" id="halls">Zallar</a>
            <a href="/contact" class="nav_link">Əlaqə</a>
            <a href="/login" class="nav_link">Daxil ol</a>
        </div>
    </div>
    {{--Navbar End--}}
    <div id="carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="image">
                    <img src="{{asset('startnow/logos/bg_2.jpg')}}" class="d-block w-100" alt="img1">
                </div>
                <div class="carousel-caption" data-aos="fade-up">
                    <h1>İDMAN HƏR KƏSƏ</h1>
                    <h2 class="text_stroke">LAZIMDIR</h2>
                    <div class="description">
                        <p>
                            Bədənİnİzİ formaya salın
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="image">
                    <img src="{{asset('startnow/logos/bg_1.jpg')}}" class="d-block w-100" alt="img2">
                </div>
                <div class="carousel-caption">
                    <h1>İDMAN HƏR KƏSƏ</h1>
                    <h2 class="text_stroke">LAZIMDIR</h2>
                    <div class="description">
                        <p>
                            Bədənİnİzİ formaya salın
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Header End--}}
    @yield('main')
    {{-- Footer Start --}}
    <div class="foooter">
        <div class="footer_start">
            <div class="footer_first">
                <h2>Haqqımızda</h2>
                <p>Vaxtınıza qənaət edərək sizə ən uyğun olan idman zalını tapmağınıza kömək edirik.</p>
                <div class="footer_links">
                    <a href="https://twitter.com/huseynvsal1" data-aos="fade-up" data-aos-duration="700"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/vusal.huseynli.3958" data-aos="fade-up" data-aos-duration="900"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/huseynvsal/" data-aos="fade-up" data-aos-duration="1100"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer_second">
                <h2>Əlaqə</h2>
                <div class="contacts">
                    <i class="fa fa-map-marker"></i>
                    <p>Mirzə Şəfi Vazeh, Sumqayit, Azərbaycan</p>
                </div>
                <div class="contacts">
                    <i class="fa fa-phone"></i>
                    <p>+994 50 382 69 22</p>
                </div>
                <div class="contacts">
                    <i class="fa fa-envelope"></i>
                    <p>huseynlivusal25@gmail</p>
                </div>
            </div>
            <div class="footer_third">
                <h2>Yardım və geri əlaqə</h2>
                <p>Zəhmət olmasa sual, təklif və iradlarınızı bizə bildirin</p>
                <div class="footer_button">
                    <a class="write_to_us" href="contact">Bizə yazın</a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Bütün hüquqlar ZalTap.az tərəfindən qorunur 2020 &copy; | Hazırladı Vüsal Hüseynli</p>
        </div>
    </div>
    {{-- Footer End --}}
</body>
    <script src="{{asset('startnow/js/script.js')}}"></script>
    <script src="{{asset('startnow/js/toast.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
        AOS.init({
            duration: 700,
        });
    </script>
</html>

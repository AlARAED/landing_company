
<!Doctype html>
<html>

<head>
        <title>Landing page</title>
        <meta charset="utf-8">
        <link rel=icon href="img/logo.png" type="image/png">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
                integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
                crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Cairo|Poppins:400,500,700,800,900&display=swap"
                rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
        <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/selectric.css') }}" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/animation.css') }}" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- jQuery CDN -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .whats-app { position: fixed;
            width: 60px; height: 60px; bottom: 40px; right: 15px;
            background-color: #25d366; color: #FFF; border-radius: 50px;
            text-align: center; font-size: 30px; box-shadow: 2px 2px 3px #999; z-index: 100;
        }
        .my-float
                  { margin-top: 16px; }

    </style>
</head>
<header>
        <div class="container">
                <div class="row clearfix">

                        <div class="logo d-none d-lg-block d-md-block">
                                <a href="index.html"><img src="img/logo.png" alt=""></a>
{{--                            {{ asset('uploads/' .$com->image) }}--}}
                        </div>




                        <nav class="navbar navbar-expand-lg bg-white navbar-light ">
                                <div class="logo float-right d-block d-lg-none d-md-none">
                                        <a href="index.html"><img src="img/logo.png" alt=""></a>
                                </div>

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse float-left" id="navbarTogglerDemo03">
                                      <button type="button" class="close d-block d-lg-none d-md-none" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                        <ul class="navbar-nav">
                                                <li class="nav-item active">
                                                        <a class="nav-link" href="#">الرئيسية</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="#we">من نحن</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="#services" tabindex="-1">خدماتنا</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="#ourWork" tabindex="-1">أعمالنا</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="#ourPartner" tabindex="-1">شركاؤنا
                                                        </a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="#client" tabindex="-1">مدونتنا
                                                        </a>
                                                </li>
                                        </ul>

                                </div>
                        </nav>
                        <div class="ask order-2 order-md-2">
                                <button class="askBtn" data-toggle="modal" data-target="#askModal">اطلب الآن</button>
                        </div>
                </div>
        </div>
</header>

<body>
        <div class="verticalSocial">
                <ul>
                        <li>
                                <a href="{{$com->twitter}}" target = “_blank” ><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                                <a href="{{$com->fb}}" target = “_blank” ><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                                <a href="{{$com->google}}" target = “_blank” ><i class="fab fa-google"></i></a>
                        </li>
                        <li>
                                <a href="{{$com->linkedin}}" target = “_blank” ><i class="fab fa-linkedin-in"></i></a>
                        </li>

                </ul>

        </div>

    @if ($errors->any())
    <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
     @endif

        <section id="we" class="clearfix">
                <div class="circleBlue">
                        <img src="img/3.png " alt="">
                </div>
                <div class="container">
                        <div class="row">
                                <div class="col-lg-7 col-md-8 col-12">
                                        <div class="heroCont bounceInLeft wow animated" data-wow-duration="2s">

                                                <h2><span class="blueColor">{{$aboutUs->title}} </span>
                                                </h2>
                                                <p class="grayColor">{{$aboutUs->text}} </p>

                                        </div>
                                </div>

                        </div>
                </div>


                <div class="imgContainer bounceInRight wow animated" data-wow-duration="2s">

                        <div class="heroImg">
                                <img src="{{ asset('uploads/' .$aboutUs->image) }}" alt="">
                        </div>
                </div>
        </section>
        <section class="services text-center" id="services">
                <div class="container">
                        <div class="row">
                                <div class="col-md-12 text-center ">
                                        <h6 class="sectionSmallTitle blueColor wow animated bounceInDown"
                                                data-wow-duration=".2s" data-wow-delay=".2s">خدماتنا</h6>
                                        <h2 class="sectionTitle">{{$Service->title}}</h2>
                                        <p class="serviceDetails">
                                              {{$Service->text}}
                                        </p>
                                </div>

                                <div class="col-md-6">
                                        <div class="serviceImg">
                                                <div class="ServiceImgLaptop">
                                                        <img src="{{ asset('uploads/' .$Service->image) }}" alt="">
                                                </div>
                                        </div>

                                </div>
                                <div class="col-lg-6 col-md-12">
                                        <ul class="serviceList text-right">
                                            @foreach($Serviceitem as $Serviceit)
                                                <li class="fadeInRight wow animated" data-wow-delay=".2s" data-wow-duration=".4s">
                                                        <h6>{{$Serviceit->title}}</h6>
                                                        <p>{{$Serviceit->text}}</p>
                                                </li>
@endforeach
                                        </ul>

                                </div>
                        </div>
                </div>

        </section>
        {{--<section class="choice" id="choice">--}}
                {{--<div class="container">--}}
                        {{--<div class="row">--}}
                                {{--<div class="col-md-4">--}}
                                        {{--<h2 class="blueColor zoomIn wow animated"  data-wow-delay=".2s" data-wow-duration=".6s">لماذا تقوم باختيارنا؟</h2>--}}
                                        {{--<p class="choiceDetails rollIn wow animated" data-wow-delay=".6s" data-wow-duration=".6s">{{ $ChoiceUs->text }} </p>--}}
                                        {{--<ul class="choiceList ">--}}
                                                {{--<li class="zoomIn wow animated"  data-wow-delay=".8s" data-wow-duration=".6s">--}}
                                                        {{--<h2> <span class="blueColor">01</span> معايير الجودة</h2>--}}

                                                        {{--<p>تمتاز مشاريعنا بالجودة العالية حيث يعتمد فريق العمل على أحدث--}}
                                                                {{--التقنيات وأخر التطورات</p>--}}
                                                {{--</li>--}}
                                                {{--<li class=" zoomIn wow animated"  data-wow-delay="1s" data-wow-duration=".6s">--}}
                                                        {{--<h2> <span class="blueColor">02</span> معايير الجودة</h2>--}}

                                                        {{--<p>تمتاز مشاريعنا بالجودة العالية حيث يعتمد فريق العمل على أحدث--}}
                                                                {{--التقنيات وأخر التطورات</p>--}}
                                                {{--</li>--}}
                                                {{--<li class=" zoomIn wow animated"  data-wow-delay="1.2s" data-wow-duration=".6s">--}}
                                                        {{--<h2> <span class="blueColor">03</span> معايير الجودة</h2>--}}

                                                        {{--<p>تمتاز مشاريعنا بالجودة العالية حيث يعتمد فريق العمل على أحدث--}}
                                                                {{--التقنيات وأخر التطورات</p>--}}
                                                {{--</li>--}}
                                                {{--<li class=" zoomIn wow animated"  data-wow-delay="1.4s" data-wow-duration=".6s">--}}
                                                        {{--<h2> <span class="blueColor">04</span> معايير الجودة</h2>--}}

                                                        {{--<p>تمتاز مشاريعنا بالجودة العالية حيث يعتمد فريق العمل على أحدث--}}
                                                                {{--التقنيات وأخر التطورات</p>--}}
                                                {{--</li>--}}
                                        {{--</ul>--}}
                                {{--</div>--}}
                        {{--</div>--}}
                {{--</div>--}}
                {{--<div class="choiceImg pulse wow animated" data-wow-delay=".1s" data-wow-duration=".8s">--}}
                        {{--<img src="{{ asset('uploads/' .$ChoiceUs->image) }}" alt="">--}}
                        {{--<div class="blueCircle"></div>--}}
                {{--</div>--}}
                {{--<div class="squair"></div>--}}
                {{--<div class="squair OpacitySquire"></div>--}}
        {{--</section>--}}
        <section class="counter">
                <div class="container">
                        <div class="CountCont">
                                <div class="row">
                                        <div class="col-md-3 col-6">
                                                <div class="count">
                                                        <span class="countNum" data-count="{{$com->satisfy_client}}">{{$com->satisfy_client}}</span><span>%</span>
                                                        <p> رضاء العملاء</p>
                                                </div>
                                        </div>

                                        <div class="col-md-3 col-6">
                                                <div class="count">
                                                        <span class="countNum" data-count="{{$com->exp_year}}">{{$com->exp_year}}</span><span>+</span>
                                                        <p> سنوات الخبرة</p>
                                                </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                                <div class="count">
                                                        <span class="countNum" data-count="{{$com->no_emplyee}}">{{$com->no_emplyee}} </span><span>+</span>
                                                        <p> موظفي الشركة</p>
                                                </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                                <div class="count">
                                                        <span class="countNum" data-count="{{$com->no_client}}">{{$com->no_client}}
                                                        </span><span>+</span>
                                                        <p>عدد العملاء</p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        {{--<section class="ourService" id="ourWork">--}}
                {{--<div class="container">--}}
                        {{--<div class="row justify-content-center">--}}
                                {{--<div class="col-md-8 text-center ">--}}
                                        {{--<h6 class="sectionSmallTitle blueColor ">أعمالنا</h6>--}}
                                        {{--<h2 class="sectionTitle">{{$WorkUs->title}} </h2>--}}
                                        {{--<p class="serviceDetails">{{$WorkUs->text}}--}}
                                        {{--</p>--}}
                                {{--</div>--}}


                        {{--</div>--}}
                        {{--<div class="row">--}}
                                        {{--<div class="serviceCont halfService topRightBorder">--}}
                                            {{--<a href="{{ asset('uploads/' .$WorkUsImage->image_1) }}"  target="_blank">  <img src="{{ asset('uploads/' .$WorkUsImage->image_1) }}" alt="" ></a>--}}
                                            {{--<a href="{{ asset('uploads/' .$WorkUsImage->image_2) }}"  target="_blank">  <img src="{{ asset('uploads/' .$WorkUsImage->image_2) }}" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="serviceCont">--}}
                                            {{--<a href="{{ asset('uploads/' .$WorkUsImage->image_6) }}"  target="_blank">  <img src="{{ asset('uploads/' .$WorkUsImage->image_6) }}" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="serviceCont">--}}
                                            {{--<a href="{{ asset('uploads/' .$WorkUsImage->image_7) }}"  target="_blank">  <img src="{{ asset('uploads/' .$WorkUsImage->image_7) }}" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="serviceCont topRightBorder">--}}
                                            {{--<a href="{{ asset('uploads/' .$WorkUsImage->image_4) }}"  target="_blank"> <img src="{{ asset('uploads/' .$WorkUsImage->image_4) }}" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="serviceCont">--}}
                                            {{--<a href={{ asset('uploads/' .$WorkUsImage->image_3) }}""  target="_blank"> <img src="{{ asset('uploads/' .$WorkUsImage->image_3) }}" alt=""></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="serviceCont">--}}
                                            {{--<a href="{{ asset('uploads/' .$WorkUsImage->image_5) }}"  target="_blank"> <img src="{{ asset('uploads/' .$WorkUsImage->image_5) }}" alt=""></a>--}}
                                        {{--</div>--}}
                        {{--</div>--}}
                {{--</div>--}}


        {{--</section>--}}
        <section class="ourPartner" id="ourPartner">
                <div class="container">
                        <div class="row justify-content-center">
                                <div class="col-md-8 text-center ">
                                        <h6 class="sectionSmallTitle blueColor  ">شركاؤنا</h6>
                                        <h2 class="sectionTitle zoomIn wow animated" data-wow-delay=".2s" data-wow-duration=".4s">{{$Partner->title}}</h2>
                                        <p class="serviceDetails rollIn animated wow" data-wow-delay=".4s" data-wow-duration=".8s">{{$Partner->text}}
                                        </p>
                                </div>
                                <div class="col-md-12">
                                        <div class="PartnerSlider owl-carousel">
                                            @foreach($PartnerImage as $PartnerIma)
                                                <div class="PartnerSliderItem">
                                                        <a href="#"><img src="{{ asset('uploads/' .$PartnerIma->image) }}" alt=""></a>
                                                </div>

  @endforeach

                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <section class="client" id="client">
                <div class="container">
                        <div class="row">
                                <div class="col-md-12">
                                        <div class="clientSlider owl-carousel">
                                            @foreach($Review as $rev)
                                                <div class="clientSliderItem clearfix">
                                                        <div class="CImg">
                                                                <img src="{{ asset('uploads/' .$rev->image) }}" alt="">
                                                        </div>


                                                        <div class="clientDesc">
                                                                <h2>آراء العملاء</h2>
                                                                <h3>القليل من التعليقات الإيجابية لعملائنا المميزين</h3>
                                                                <p>{{$rev->text}}
                                                                </p>
                                                                <span class="float-left blueColor">{{$rev->signiture}}</span>

                                                        </div>
                                                </div>
                                                @endforeach

                                        </div>

                                </div>
                        </div>
                </div>
        </section>


        <footer>
                <div class="container">
                        <div class="row">
                                <div class="col-md-4">
                                        <div class="footerSec">
                                                <h2>{{$com->name}} </h2>
                                                <p>{{$com->about_us}}</p>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="footerSec">
                                                <h2> معلوماتنا</h2>
                                                <span> هاتف: {{$com->phone}}</span>
                                                <span>{{$com->country}}</span>
                                                <span>{{$com->email}}</span>
                                                <span>{{$com->website}}</span>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="footerSec">
                                                <h2> اتصل بنا</h2>
                                            {!!  Form::open(['url' => '/contact', 'method' => 'POST']) !!}
                                                        <div class="form-group">
                                       <input type="text" class="form-control" placeholder="الاسم"  name="name" value="{{ old('name') }}" >
                                                        </div>
                                                        <div class="form-group">
                                         <input type="email" class="form-control" placeholder="الايميل"  name="email" value="{{ old('email') }}" >
                                                        </div>
                                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="الجوال"  name="mob_no">
                                                        </div>
                                            <div class="form-group">
                          <textarea class="form-group" name="details" id="details" >تفاصيل الطلب</textarea>
                                            </div>
                                     <button type="submit" class="btn footerBtn">ارسال</button>
                                            {!! Form::close() !!}



                                        </div>
                                </div>
                        </div>
                </div>

        </footer>
        <div class="copyRight">
                <div class="container">

                        <div class="row">
                                <div class="col-md-6">
                                        <span>© جميع الحقوق محفوظة  {{ now()->year }}{{$com->name}}</span>
                                </div>
                                <div class="col-md-6 text-left">
                                        <ul class="copyRightSocial">
                                                <li>
                                                        <a href="{{$com->twitter}}" target = “_blank” ><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                        <a href="{{$com->fb}}" target = “_blank” ><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                        <a href="{{$com->google}}" target = “_blank” ><i class="fab fa-google"></i></a>
                                                </li>
                                                <li>
                                                        <a href="{{$com->linkedin}}" target = “_blank” ><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>

        </div>


        <a class="whats-app" href="https://wa.me/+9720567026263" target="_blank"> <i class="fa fa-whatsapp my-float"></i> </a>

        <div class="modal" tabindex="-1" id="askModal" role="dialog">
                <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                <button type="button" class="close text-left" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modalLogo">
                                        <a href="index.html"> <img src="img/logo.png" alt=""></a>
                                </div>



                                <div class="modal-body">
                                       {!!  Form::open(['url' => '/order', 'method' => 'POST']) !!}
                                                <div class="form-group">
                                                        <label for="#name">الاسم</label>
                  <input type="text" class="form-control fi" id="name"
                                                                placeholder="محمد يوسف خالد"    name="name">
                                                </div>
                                                <div class="form-group">
                                                        <label for="#email">البريد الالكتروني</label>
                                                        <input type="email" class="form-control fi" id="email"
                                                                placeholder="example@gmail.com" name="email" >
                                                </div>
                                                <div class="form-group">
                                                        <label for="#mobile">جوال</label>
                                               <input type="text" class="form-control fi" id="mob_no"
                                                                placeholder="+9664874027" name="mob_no" >
                                                </div>
                                                <div class="form-group selectFormGroup">
                                                        <label for="#email">نوع الطلب</label>
                                                        <select name="category_id" id="category_id" class="form-control" >
                                                            @foreach($Category as $Cate)
                                                                <option value="{{$Cate->id}}">{{$Cate->name}}</option>
                                                              @endforeach
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label for="#textArea"> تفاصيل الطلب</label>
                                                        <textarea name="details" id="details" >هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى</textarea>
                                                </div>


                                        <button type="submit" class="btn modalBtn btn-submit" id="dat" >تم</button>


                                         {!! Form::close() !!}
                                </div>

                        </div>
                </div>
        </div>




        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/owl.carousel.js"   type="text/javascript"></script>
        <script src="js/owl.carousel.min.js"   type="text/javascript"></script>
        <script src="js/wow.js"  type="text/javascript"></script>
        <script src="js/jquery.selectric.min.js"   type="text/javascript"></script>
        <script src="js/main.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="public/sahal.js" type="text/javascript"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

</body>

</html>

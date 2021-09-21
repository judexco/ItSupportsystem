<!DOCTYPE html>
<html>
<head>
<title>Seaba College</title>
<!--css-->
<link href="{{asset('web/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('web/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('web/css/ken-burns.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('web/css/animate.min.css')}}" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Studies Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="{{asset('web/application/x-javascript')}}"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="{{asset('web/js/jquery.min.js')}}"></script>
<script src="{{asset('web/js/bootstrap.min.js')}}"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>

<style>  
.Sucess{
 background: #34b431;
   padding: 6px;
}
</style>
<body>

  @if(Session::has('message'))
            <div class="Sucess">
                  <p><font color="#fff"><?php echo Session::get('message'); ?></font></p>
            </div>
               @endif 
<!--header-->
<div class="header">

    <div class="header-top">
        <div class="container">
            <div class="detail">
                <ul>
                    <li> <h3>SEABA MODEL CHRISTIAN COLLEGE </h3></li>
                    {{--<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> + 1 599-033-5036</li>--}}
                    {{--<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> Mon-Sat 9:00 Am to 16:00 Pm </li>--}}
                        {{--{{Carbon::now()}}--}}
                </ul>
            </div>
            <div class="indicate">
      {{--<a href="https://basic.edves.net/getSchool.php?UniqueSchURL=seaba_1" target="_blank" style="color:#ffffff;">Parents Portal</a>--}}
                    <a href="admin" target="" style="color:#ffffff;"> <i class="glyphicon glyphicon-user" aria-hidden="true"></i>Admin</a>


                    {{--<a href="https://basic.edves.net/getSchool.php?UniqueSchURL=seaba_2 " target="_blank">Primary</a>--}}



            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

            
                        <!---Brand and toggle get grouped for better mobile display--->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">

                            <h1><a href="{{ url('/') }}">SEABA<img src="{{asset('web/images/logo.png')}}" ></a></h1>
                        </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"><span data-hover="HOME">HOME</span></a></li>

                            <li  class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}"><span data-hover="ABOUT">ABOUT</span></a></li>



                            {{--<li><a href="courses"><span data-hover="Courses">Courses</span></a></li>--}}
                            <li class="{{ Request::is('academic') ? 'active' : '' }}"><a href="{{ url('/academic') }}"><span data-hover="ACADEMIC">ACADEMIC</span></a></li>

                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics</a>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="{{url('page/profile')}}">MANAGEMENTS' PROFILE</a></li>--}}
                                    {{--<li><a href="{{url('page/academic')}}">STUDENTS CLUB</a></li>--}}
                                    {{--<li><a href="#">TIMETABLES</a></li>--}}
                                    {{--<li><a href="#">CALENDAR</a></li>--}}

                                    {{--<li class="divider"></li>--}}
                                    {{--<li class="dropdown-header">ADMISSIN PROCESS</li>--}}
                                    {{--<li><a href="#">PRIMARY SCHOOL</a></li>--}}
                                    {{--<li><a href="#">SECONDARY SCHOOL</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}


                            <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ url('/services') }}"><span data-hover="SERVICES">SERVICES</span></a></li>

                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="hvr-rectangle-out scroll dropdown-toggle" data-toggle="dropdown">Facilities</a>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a class="hvr-rectangle-out scroll" href="{{url('page/facility')}}">SCHOOLS HEADS</a></li>--}}
                                    {{--<li><a href="{{url('page/health')}}">HEALTH SERVICES</a></li>--}}
                                    {{--<li><a href="{{url('page/library')}}">LIBRARY</a></li>--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li class="dropdown-header">SPORTS</li>--}}
                                    {{--<li><a class="hvr-rectangle-out scroll" href="#">TENNIS</a></li>--}}
                                    {{--<li><a href="{{url('page/sports')}}">SPORTS</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}


                            <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{ url('/gallery') }}"><span data-hover="GALLERY">GALLERY</span></a></li>

                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="hvr-rectangle-out scroll dropdown-toggle" data-toggle="dropdown">Gallery</a>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="{{url('page/validictory')}}">VALIDICTORY SERVICE</a></li>--}}
                                    {{--<li><a href="{{url('page/gallery')}}">ANNIVERSARY</a></li>--}}
                                    {{--<li><a href="{{url('page/dinner')}}">DINNER NIGHT</a></li>--}}
                                    {{--<li><a href="{{url('page/tour')}}">TOUR</a></li>--}}

                                {{--</ul>--}}
                            {{--</li>--}}

                            <li class="{{ Request::is('news') ? 'active' : '' }}"><a href="{{ url('/news') }}"><span data-hover="NEWS">NEWS</span></a></li>

                            {{--<li><a href="{{url('page/news')}}" class="hvr-rectangle-out scroll">News</a></li>--}}




                            <li class="{{ Request::is('contact_us') ? 'active' : '' }}"><a href="{{ url('/contact_us') }}"><span data-hover="CONTACT">CONTACT</span></a></li>

                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="hvr-rectangle-out scroll dropdown-toggle" data-toggle="dropdown">Contact Us</a>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="{{url('page/contact')}}">Send us an email</a></li>--}}

                                    {{--<li class="divider"></li>--}}
                                    {{--<li class="dropdown-header">SUPPORT SYSTEM</li>--}}
                                    {{--<li><a class="hvr-rectangle-out scroll" href="#">Open New Ticket</a></li>--}}
                                    {{--<li><a href="{{ route('tickets.create') }}">Raise Ticket</a></li>--}}
                                    {{--<li><a href="{{ route('tickets.index') }}">My tickets</a></li>--}}

                                {{--</ul>--}}
                            {{--</li>--}}


                            {{--<li><a href="services"><span data-hover="Services">Services</span></a></li>--}}
                            {{--<li><a href="projects"><span data-hover="Projects">Projects</span></a></li>--}}
                            {{--<li><a href="courses"><span data-hover="Courses">Courses</span></a></li>--}}
                            {{--<li><a href="codes"><span data-hover="Codes">Codes</span></a></li>--}}
                            {{--<li><a href="contact"><span data-hover="Contact">Contact</span></a></li>--}}





                        </ul>
                    </nav>
                </div>
            </div>
        </nav>
    </div>
</div>
<!--header-->


@yield('body')



</body>
</html>
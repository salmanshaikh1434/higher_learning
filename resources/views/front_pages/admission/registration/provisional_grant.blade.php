@extends('layouts.front')
@section('content')
<div class="login sign-up" style="background:#fff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-8 well well-sm">
                @if (responseMessages($errors))
                {{responseMessages($errors)}}"
                @else
                <form action="/admission/provisional_registration/grant" class="form sign-up-form" style="background:#DCDCDC"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">

                        <div class="form-header">
                            <h2> Provisional Registration
                                Form</h2>
                        </div>
                    </div>
                    <hr style="border: 2px solid #cbb58b; border-radius: 5px;">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label class="ldesc">
                                First Name : </label>
                            <span class="justify-content-end	 text-muted">As on Documents </span>
                            <div class="form-group">
                                <input class="form-control" name="firstname" placeholder="First Name" type="text"
                            required="" autofocus="" value="{{old("firstname")}}">
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label>
                                Middle Name :</label>
                            <div class="form-group">
                                <input class="form-control" name=middlename placeholder="Middle Name" type="text"
                                    required="" value="{{old("middlename")}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label>
                                Last Name :</label>
                            <div class="form-group">
                                <input class="form-control" name="lastname" placeholder="Last Name" type="text"
                                    required="" value="{{old("lastname")}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label>
                                Mobile Number :</label>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Your Mobile Number"
                                    pattern="[0-9]{10}" maxlength="10" required="" value="{{old("phone")}}">
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label>
                                Email Address :</label>


                            <div class="form-group">
                                <input class="form-control" name="email" placeholder="Your Email" type="email"
                                    required="" value="{{old("email")}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label>
                                Date of Birth :</label>

                            <div class="form-group">
                                <input class="form-control" type="date" name="dob" class="form-control" required value="{{old("dob")}}">
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>
                                    Gender :</label><br>
                                <div style="height:2vh;"></div>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="inlineCheckbox1" value="male" required="">
                                    Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="inlineCheckbox2" value="female" required="">
                                    Female
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-xs-6 col-md-6">
                            <label for="frmcast">
                                Cast</label>
                            <select class="form-control custom-select" id="frmcast" name="cast" required>
                                <option selected="" value="">Select</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                                <option value="VJ/NT">VJ/NT</option>
                                <option value="OBC">OBC</option>
                                <option value="Open">Open</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-md-6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <label>course to which admission is needed </label>
                            <div class="form-group">
                                <select class="form-control custom-select" name="course" required>
                                    <option selected="" value="">Select</option>
                                    <option value="11 Science">XI Science</option>
                                    <option value="11 Arts">XI Arts</option>
                                    <option value="11 Commerce">XI Commerce</option>
                                    <option value="11 M.C.V.C">XI M.C.V.C</option>
                                    <option value="B.A 1yr"> B.A First Year</option>
                                    <option value="B.Sc 1yr">B.Sc First Year</option>
                                    <option value="B.Com 1yr">B.Com First Year</option>
                                    <option value="M.A 1yr">M.A First year</option>
                                    <option value="M.Sc Maths 1yr">M.Sc Maths First Year</option>
                                    <option value="M.Sc non-maths">M.Sc First Year( All other than Maths )</option>
                                    <option value="M.Com 1yr">M.Com First Year</option>
                                    <option value="BBA 1yr">BBA First Year</option>
                                    <option value="BCA 1yr">BCA First Year</option>
                                    <option value="BCS 1yr">BCS First Year</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <label>Last Qualifying Exam</label>
                            <div class="form-group">
                                <select class="form-control custom-select" name="lastexam" required>
                                    <option selected="" value="">Select</option>
                                    <option value="SSC">S.S.C</option>
                                    <option value="12 Science">XII Science</option>
                                    <option value="12 Arts">XII Arts</option>
                                    <option value="12 Commerce">XII Commerce</option>
                                    <option value="12 M.C.V.C">XII M.C.V.C</option>
                                    <option value="B.A 3yr"> B.A Third Year</option>
                                    <option value="B.Sc 3yr">B.Sc Third Year</option>
                                    <option value="B.Com 3yr">B.Com Third Year</option>
                                    <option value="M.A 2yr">M.A Second year</option>
                                    <option value="M.Sc Maths 2yr">M.Sc Maths Second Year</option>
                                    <option value="M.Sc non-maths 2yr">M.Sc ( All other than Maths ) Second Year
                                    </option>
                                    <option value="M.Com 2yr">M.Com Second Year</option>
                                    <option value="BBA 3yr">BBA Third Year</option>
                                    <option value="BCA 3yr">BCA Third Year</option>
                                    <option value="BCS 3yr">BCS Third Year</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-xs-6 col-md-6">
                            <label>% Marks Obtained </label>
                            <div class="form-group">
                                <input class="form-control" name="percentage" placeholder="% Marks Obtained"
                                    type="number" required="" value="{{old("percentage")}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <label>Last Institute Attended</label>
                            <div class="form-group">
                                <input class="form-control" name="lastinst" maxlength="2"
                                    placeholder="Last Institute Attended" type="text" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <label for="myfile">Upload Scanned Copy of Last Qualifying Exam </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>Max Size 200kb</span>
                            <div class="form-group">
                                <input type="file" name="exam_certificate" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group" id="castupload">
                                <label for="myfile2">Upload Scanned Copy of Cast Certificate</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>Max Size 200kb</span>
                                <input type="file" name="cast_certificate">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label class="checkbox-inline"><input type="checkbox" name="indian" id="indinat"
                                    value="agree" required=""> <strong>&nbsp;&nbsp;&nbsp;&nbsp;I Acknowledge that I am
                                    an Indian National </strong></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="checkbox-inline"><input type="checkbox" name="t_and_c" id="acceptna"
                                    value="agree" required=""> <strong> &nbsp;&nbsp;&nbsp; I have read and agreed to
                                    the <a href="#">Terms &amp; Conditions</a> &amp; <a href="#">Privacy Policy</a>
                                </strong></label>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-warning" id="js-subscribe-btn">REGISTER</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<style>
    p {
        font: normal 14px/20px helvetica, arial, sans-serif;
        color: #333;
    }

    .woot {
        font-weight: bold;
    }

    .nav-menu {
        position: absolute;
        z-index: 1;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 0;
    }

    .nav-logo {
        margin: 0 !important;
    }

    .responsive-logo {
        display: none;
    }

    .icon-menu {
        color: #cbb58b;
    }

    .btn-default {
        text-transform: uppercase;
        color: #cbb58b;
        background: 0 0;
        border: 3px solid #cbb58b;
        font-size: 18px;
        padding: 16px 36px;
        border-radius: 0;
    }

    @media(min-width:767px) {
        .btn+.btn {
            margin-left: 22px;
        }
    }

    .btn-default:hover {
        color: #fff;
        background: #cbb58b;
        border: 3px solid #cbb58b;
    }

    .btn:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #fff;
        background: #cbb58b;
    }

    .dropdown-menu {
        min-width: 14rem;
        border-radius: 0;
        border: none;
    }

    .dropdown-item {
        color: #2d2d2d;
        padding: 5px 1.5rem;
    }

    .dropdown-item.active,
    .dropdown-item:active {
        background-color: #cbb58b;
    }

    .dropdown-menu1 {
        left: -225px;
        top: -6px !important;
    }

    .dropdown-item:hover {
        color: #cbb58b;
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s;
    }

    .dropdown-item.active:hover,
    .dropdown-item.active:focus,
    .dropdown-item.active:active,
    .dropdown-item:active {
        color: #fff;
    }

    .nav-toggle_icon {
        color: #cbb58b;
    }

    .navbar2 {
        padding-left: 0;
        padding-right: 0;
    }

    .navbar-brand {
        margin: 0;
    }

    .nav-brand2 h2 {
        margin: 0;
    }

    .navbar-nav>li {
        margin: 85px 10px;
        text-align: center;
    }

    .navbar-default .navbar-nav>li>a {
        font-size: 19px;
        color: #fff;
    }

    .navbar-default .navbar-nav>.active>a,
    .navbar-default .navbar-nav>.active>a:focus,
    .navbar-default .navbar-nav>.active>a:hover {
        background: 0 0;
        color: #cbb58b;
    }

    .navbar-default .navbar-nav>li>a:focus,
    .navbar-default .navbar-nav>li>a:hover {
        color: #cbb58b;
    }

    .nav .open>a,
    .nav .open>a:focus,
    .nav .open>a:hover {
        background: 0 0;
    }

    .navbar-default .navbar-nav>.open>a,
    .navbar-default .navbar-nav>.open>a:focus,
    .navbar-default .navbar-nav>.open>a:hover {
        background: 0 0;
        color: #cbb58b;
    }

    .bg-faded {
        background: 0 0;
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: #e0c898;
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s;
    }

    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.open,
    .navbar-light .navbar-nav .open>.nav-link {
        color: #cbb58b;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #fff;
        font-size: 19px;
    }

    .navbar-light .navbar-toggler {
        border: 1px solid #cbb58b;
        z-index: 999;
        cursor: pointer;
        outline: none;
        padding: 7px 14px;
    }

    .fa-common {
        font-weight: 700;
    }

    @media(max-width:1200px) {
        .navbar-nav>li {
            margin: 74px 10px;
        }
    }

    @media(max-width:991px) {
        .navbar-nav>li {
            margin: 0 10px;
        }

        .responsive-logo {
            display: block;
        }

        .navbar-brand {
            display: none;
        }

        .nav-brand2 {
            display: block;
        }

        .navbar2 {
            margin: 12px 0 !important;
        }

        .bg-faded {
            background-color: #fafafa;
        }

        .navbar {
            padding: 0;
            margin: -113px 0 0;
        }

        .navbar-nav {
            padding: 10px;
        }

        .navbar-light .navbar-toggler {
            margin: 28px 6px;
        }

        .navbar-light .navbar-toggler2 {
            margin: 0 !important;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #2d2d2d;
        }

        .dropdown .dropdown-menu {
            background-color: #fff;
            border: 1px solid #cbb58b;
        }

        .navbar-toggleable-md .navbar-nav .dropdown-menu {
            text-align: center;
        }
    }

    @media(min-width:991px) {
        .dropdown .dropdown-menu {
            display: block;
            visibility: hidden;
            opacity: 0;
            transition: all .2s ease;
            -moz-transition: all .2s ease;
            -webkit-transition: all .2s ease;
            -o-transition: all .2s ease;
            -ms-transition: all .2s ease;
        }

        .dropdown:hover>.dropdown-menu {
            visibility: visible;
            opacity: 1;
            border: 1px solid #ccc;
            top: 45px;
        }

        .dropdown-submenu:hover .dropdown-menu1 {
            visibility: visible;
            opacity: 1;
        }

        .navbar-toggleable-md .navbar-collapse {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .navbar-toggleable-md .navbar-nav {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }
    }

    html {
        -webkit-text-size-adjust: 100%;
        -webkit-font-smoothing: antialiased;
    }

    body {
        font-family: lora, serif;
    }

    h1 {
        font-size: 54px;
    }

    h2 {
        font-size: 35px;
    }

    h3 {
        font-size: 24px;
    }

    h4 {
        font-size: 20px;
    }

    p {
        font-size: 17px;
    }

    a {
        color: #cbb58b;
        -webkit-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    a:hover {
        text-decoration: none;
        color: #2d2d2d;
    }

    .btn {
        font-family: lora, serif;
        cursor: pointer;
    }

    .slider_img {
        width: 100%;
        background: #000;
    }

    .slider_img img {
        min-width: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: 50% 50%;
        object-position: 50% 50%
    }

    @media(max-width:500px) {
        .slider_img img {
            max-height: 730px;
        }
    }

    .carousel-caption {
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        top: 50%
    }

    @media(min-width:992px) {
        .carousel-caption {
            -webkit-transform: translateY(-57%);
            -ms-transform: translateY(-57%);
            transform: translateY(-57%);
            top: 57%
        }

        .layout_two .carousel-caption {
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            top: 50%
        }
    }

    @media(max-width:500px) {
        .carousel-caption {
            top: 45%
        }
    }

    .slider_title h1 {
        text-align: center;
        color: #fff;
        margin-bottom: 40px;
        font-weight: 700;
    }

    @media(max-width:576px) {
        .slider_title h1 {
            margin-bottom: 18px;
        }
    }

    .slider_title h4 {
        color: #fff;
        text-align: center;
        line-height: 1.8;
    }

    .slider-btn {
        text-align: center;
        margin: 42px 0 0;
    }

    .carousel-indicators .active {
        background: #cbb58b;
    }

    .fa-slider {
        padding: 14px;
        border: 2px solid #fff;
        font-size: 29px;
        border-radius: 2px;
    }

    @media(max-width:768px) {
        .slider_title h1 {
            font-size: 42px;
        }

        .slider_title h4 {
            font-size: 19px;
            line-height: 1.5;
        }

        .btn-default {
            width: 50%;
            margin-bottom: 10px;
            font-size: 13px;
        }
    }

    @media(max-width:480px) {
        .slider_title {
            margin: 0 0 80px;
        }

        .slider_title h1 {
            font-size: 32px;
        }

        .slider_title h4 {
            font-size: 18px;
            line-height: 1.5;
        }

        .btn-default {
            width: 100%;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .fa-slider {
            border: none;
            padding: 0;
        }
    }

    .about {
        padding: 97px 0 56px;
        background: #fff;
    }

    .about h2 {
        text-align: center;
        color: #2d2d2d;
        font-weight: 700;
    }

    .about p {
        text-align: center;
        color: #2d2d2d;
        line-height: 1.8;
        margin: 20px 0;
    }

    .about img {
        margin: 0 auto;
        display: block;
    }

    .our_courses {
        background: #f2f2f2;
        padding: 97px 0;
    }

    .our_courses h2 {
        font-weight: 700;
        margin: 0 0 28px;
    }

    .our_courses .courses_box a {
        text-decoration: none;
        color: #2d2d2d;
    }

    .our_courses .courses_box {
        position: relative;
        background: #fff;
        -webkit-box-shadow: 0 10px 90px -6px #c7c5c7;
        -moz-box-shadow: 0 10px 90px -6px #c7c5c7;
        box-shadow: 0 10px 90px -6px #c7c5c7;
        -webkit-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
        min-height: 340px;
    }

    .our_courses .courses_box img {
        margin: 0;
        width: 100%
    }

    .our_courses .courses_box p {
        margin: 0;
    }

    .our_courses .courses_box h3 {
        font-weight: 600;
    }

    .our_courses .courses_box:hover {
        -webkit-box-shadow: 0 40px 90px -6px #c7c5c7;
        box-shadow: 0 40px 90px -6px #c7c5c7;
        margin-top: -5px;
    }

    @-webkit-keyframes SlideIn {
        100% {
            -webkit-transform: translateX(0px);
            transform: translateX(0px);
            opacity: 1;
        }
    }

    @keyframes SlideIn {
        100% {
            -webkit-transform: translateX(0px);
            transform: translateX(0px);
            opacity: 1;
        }
    }

    @-webkit-keyframes SlideWidth {
        100% {
            width: 550px;
        }
    }

    @keyframes SlideWidth {
        100% {
            width: 550px;
        }
    }

    .courses_box:hover .courses_box-img {
        opacity: 1;
    }

    .courses_box:hover .courses_icon {
        -webkit-transform: rotate(44deg);
        -ms-transform: rotate(44deg);
        transform: rotate(44deg);
    }

    .courses_box:hover .course-link:first-child {
        -webkit-animation: SlideIn .5s;
        animation: SlideIn .5s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-delay: .3s;
        animation-delay: .3s;
    }

    .courses_box:hover .course-link:first-child span:after {
        -webkit-animation: SlideWidth .8s;
        animation: SlideWidth .8s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-delay: .6s;
        animation-delay: .6s;
    }

    .courses_box:hover .course-link:nth-child(2) {
        -webkit-animation: SlideIn .5s;
        animation: SlideIn .5s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-delay: .6s;
        animation-delay: .6s;
    }

    .courses_box:hover .course-link:nth-child(2) span:after {
        -webkit-animation: SlideWidth .8s;
        animation: SlideWidth .8s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-delay: .9s;
        animation-delay: .9s;
    }

    .course-img-wrap {
        position: relative;
    }

    .course-box-content {
        display: block;
        padding: 30px 20px;
    }

    .courses_icon {
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        position: relative;
        height: 43px;
        right: 0;
        width: 43px;
        background: #665c7c;
        border-radius: 50%;
        padding: 8px 11px 8px 13px;
        margin: -23px 10px 0 0;
        float: right;
        z-index: 3;
    }

    .courses_icon a {
        color: #fff;
    }

    .course-link {
        display: block;
        padding-bottom: 6px;
        -webkit-transform: translateX(-50px);
        -ms-transform: translateX(-50px);
        transform: translateX(-50px);
        opacity: 0;
        margin-left: 30px;
    }

    .course-link span {
        position: relative;
        display: inline-block;
    }

    .course-link span:after {
        content: "";
        position: absolute;
        left: 50%;
        top: 10px;
        width: 0;
        right: 0;
        height: 1px;
        background: #fff;
        left: 100%;
        margin-left: 0;
    }

    .courses-link-wrap {
        overflow: hidden;
        position: absolute;
        top: 50%;
        width: 100%;
        right: 15px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .courses_box-img {
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        opacity: 0;
        background: rgba(203, 181, 139, .82);
        width: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        padding-right: 30px;
        z-index: 2;
    }

    .courses_box-img a :hover {
        opacity: .8;
    }

    .courses_box-img a span {
        color: #fff;
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 500;
        padding-right: 10px;
    }

    .btn-courses {
        font-size: 15px;
        font-weight: 700;
    }

    .rotate {
        -moz-transform: rotate(43deg);
        -ms-transform: rotate(43deg);
        -webkit-transform: rotate(43deg);
        transform: rotate(43deg);
    }

    .icon-rotate {
        -moz-transition-duration: .4s;
        -o-transition-duration: .4s;
        -webkit-transition-duration: .4s;
        transition-duration: .4s;
        display: inline-block;
    }

    .event {
        padding: 97px 0;
        background: #fff;
    }

    .event h2 {
        font-weight: 600;
        margin: 0 0 28px;
    }

    .event-img {
        position: relative;
        -webkit-box-shadow: 0 25px 90px 3px #c7c5c7;
        -moz-box-shadow: 0 25px 90px 3px #c7c5c7;
        box-shadow: 0 25px 90px 3px #c7c5c7;
        border-radius: 5px;
    }

    @media(max-width:991px) {
        .event-img {
            margin-bottom: 50px;
        }
    }

    .event-img img {
        width: 100%;
        border-radius: 5px;
    }

    .event-img_date {
        position: absolute;
        top: 28px;
        left: 48px;
        background: #cbb58b;
        border-radius: 2px;
        padding: 8px 12px;
        color: #fff;
        font-size: 13px;
    }

    @media(max-width:575px) {
        .event-img_date {
            display: none;
        }
    }

    .event-img_title {
        position: absolute;
        bottom: 0;
        background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, black 100%);
        background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, black 100%);
        background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), to(black));
        background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0%, black 100%);
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, black 100%);
        padding: 85px 0 20px;
        border-radius: 5px;
    }

    .event-img_title h3 {
        color: #fff;
        padding-left: 48px;
        position: relative;
    }

    @media(max-width:575px) {
        .event-img_title h3 {
            padding-left: 20px;
        }
    }

    .event-img_title p {
        color: #e3e3e3;
        font-size: 17px;
        padding: 16px 48px 0;
    }

    @media(max-width:575px) {
        .event-img_title p {
            padding: 15px 20px;
        }
    }

    @media(max-width:575px) {
        .event-img_title {
            padding: 0;
        }
    }

    .event-img_title h3:after {
        height: 2px;
        width: 21px;
        background: #fff;
        content: "";
        position: absolute;
        left: 48px;
        top: 115%
    }

    @media(max-width:575px) {
        .event-img_title h3: after {
            left: 20px;
        }
    }

    .event_date {
        width: 82px;
        background: #665c7c;
        float: left;
        text-align: center;
        border-radius: 2px;
    }

    .event_date img {
        float: left;
    }

    .event-date-wrap {
        border: 1px dashed #8d84a0;
        margin: 8px;
        padding: 4px 0;
    }

    .event-date-wrap p {
        font-size: 23px;
        font-weight: 700;
        color: #fff;
        margin: 0;
    }

    .event-date-wrap span {
        color: #fff;
        font-weight: 700;
        font-size: 14px;
    }

    .date-description {
        margin-left: 115px;
    }

    .date-description h3 {
        margin-top: 0;
        font-weight: 600;
        margin-bottom: 25px;
        position: relative;
    }

    .date-description h3:after {
        height: 2px;
        width: 21px;
        background: #cbb58b;
        content: "";
        position: absolute;
        left: 0;
        top: 115%
    }

    .btn-read {
        padding: 10px 20px !important;
        font-size: 14px;
    }

    .event_line {
        margin: 40px 0;
    }

    .detailed_chart {
        background: url(../images/chart_bg.jpg) no-repeat;
        -webkit-background-size: cover;
        background-size: cover;
        padding: 97px 0;
    }

    .chart-img img {
        margin: 21px 0 0;
        padding-right: 16px;
        float: left;
    }

    .chart-img p {
        display: inline-block;
        color: #fff;
        font-size: 46px;
        font-weight: 700;
    }

    .chart-img p span {
        font-size: 24px;
        display: block;
        font-weight: 100;
    }

    .chart-text {
        margin: 11px 0 0;
        display: inline-block;
    }

    .chart-text p {
        color: #fff;
        font-size: 23px;
    }

    .chart-text p span {
        font-size: 40px;
        display: block;
        line-height: 1.3;
    }

    @media(max-width:1200px) {
        .chart-img img {
            margin: 10px 0 0;
        }

        .chart-img p {
            font-size: 36px;
        }

        .chart-img p span {
            font-size: 17px;
        }

        .chart-text {
            margin: 0;
        }

        .chart-text p {
            font-size: 17px;
        }

        .chart-text p span {
            font-size: 36px;
        }
    }

    @media(max-width:992px) {
        .chart-img {
            display: block;
        }

        .chart-img img {
            float: none;
            margin: 0 auto 15px;
            padding: 0;
            display: block;
        }

        .chart-text {
            text-align: center;
            display: block;
            margin: 0 0 0;
        }
    }

    @media(max-width:768px) {
        .chart_bottom {
            margin: 0 0 26px;
        }

        .chart_top {
            margin: 0 0 26px;
        }
    }

    .blog {
        background: #f2f2f2;
        padding: 97px 0;
    }

    .blog h2 {
        text-align: center;
        font-weight: 700;
        margin: 0 0 28px;
    }

    .blog-img_box {
        background: #fff;
        -webkit-box-shadow: 0 9px 20px -2px rgba(214, 214, 214, .3);
        box-shadow: 0 9px 20px -2px rgba(214, 214, 214, .3);
        position: relative;
        margin-bottom: 24px;
        -webkit-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    .blog-img_box:hover {
        -webkit-box-shadow: 0 15px 30px -2px rgba(214, 214, 214, .8);
        box-shadow: 0 15px 30px -2px rgba(214, 214, 214, .8);
    }

    .blog_display {
        width: 100%
    }

    .home_blog_link {
        display: block;
        color: #292b2c;
    }

    .blogtitle {
        padding: 24px 30px 10px;
    }

    .blogtitle h3 {
        font-weight: 700;
    }

    .blogtitle p {
        color: #cbb58b;
        display: inline-block;
        padding: 0 6px;
    }

    .blogtitle-rtl {
        padding: 12px;
    }

    .blogtitle-rtl p {
        font-size: 15px;
    }

    @media(max-width:1200px) {
        .blogtitle-rtl p {
            margin: 0;
        }
    }

    .blog_hide {
        background: #665c7c;
        color: #d5d0df;
        padding: 55px 45px 26px;
        -webkit-box-shadow: 0 9px 16px -2px #d9d9d9;
        -moz-box-shadow: 0 9px 16px -2px #d9d9d9;
        box-shadow: 0 9px 16px -2px #d9d9d9;
    }

    .icon-link {
        color: #fff;
        font-size: 34px;
        display: block;
        padding: 0 0 22px;
    }

    .blogtitle-link {
        padding: 65px 0 0;
    }

    .blogtitle-link p {
        display: inline-block;
        padding: 0 6px;
        color: #c5bfd0;
        margin: 0;
    }

    .blogtitle-link .icon-user,
    .blogtitle-link .icon-speedometer {
        color: #fff;
    }

    .blog-video {
        position: relative;
    }

    .blog-play_btn {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translateY(-50%) translateX(-50%);
        -ms-transform: translateY(-50%) translateX(-50%);
        transform: translateY(-50%) translateX(-50%);
    }

    @media(max-width:1200px) {
        .blogtitle {
            padding: 16px 0 0 18px;
        }

        .blogtitle h3 {
            font-size: 20px;
        }

        .blog_hide {
            padding: 28px 20px 27px;
        }

        .blogtitle-link {
            padding: 37px 0 0;
        }

        .blogtitle-rtl {
            padding: 8px;
        }
    }

    @media(max-width:992px) {
        .blogtitle {
            padding: 13px 0 0 8px;
        }

        .blogtitle h3 {
            font-size: 16px;
        }

        .blogtitle p {
            font-size: 14px;
            padding: 0;
        }

        .blog_hide {
            padding: 15px 7px 12px;
        }

        .blog_hide a {
            font-size: 13px;
        }

        .blogtitle-link {
            padding: 18px 0 0;
        }

        .blogtitle-link p {
            font-size: 14px;
            padding: 0;
        }

        .blogtitle-link span {
            font-size: 14px;
        }

        .icon-link {
            padding: 0 0 17px;
            font-size: 27px;
        }
    }

    @media(max-width:768px) {
        .blog-box_block {
            margin-bottom: 0;
        }

        .blog-img_box {
            margin: 0 0 20px;
        }

        .blogtitle {
            padding: 16px 0 0 16px;
        }

        .blogtitle h3 {
            font-size: 20px;
        }

        .blogtitle p {
            font-size: 14px;
            padding: 0 6px;
        }

        .blog_hide {
            padding: 16px;
            margin: 0 0 20px;
        }

        .blog_hide a {
            font-size: 18px;
        }

        .blogtitle-link p {
            font-size: 14px;
            padding: 0 6px;
        }

        .blogtitle-link span {
            font-size: 14px;
            padding: 0 6px;
        }
    }

    @media(max-width:480px) {
        .blogtitle h3 {
            font-size: 17px;
        }
    }

    .gallery-wrap {
        padding: 98px 0;
    }

    .gallery-wrap img {
        margin: 0;
        width: 100%
    }

    .gallery-wrap {
        margin: 0;
    }

    .instafeed_img {
        overflow: hidden;
        position: relative;
    }

    .instafeed_img a {
        display: block;
        cursor: move;
        cursor: grab;
        cursor: -moz-grab;
        cursor: -webkit-grab;
    }

    .instafeed_img a:active {
        cursor: grabbing;
        cursor: -moz-grabbing;
        cursor: -webkit-grabbing;
    }

    .instafeed_img a .instagram_img_holder {
        width: 100%;
        height: 265px;
        -webkit-background-size: cover;
        background-size: cover;
    }

    .instafeed_img .instafeed_img_overlay {
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(203, 181, 139, .85);
        opacity: 0;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
        text-align: center;
    }

    .instafeed_img .instafeed_img_overlay:after {
        content: "";
        position: absolute;
        border: 1px solid #fff;
        left: 20px;
        right: 20px;
        top: 20px;
        bottom: 20px;
    }

    .instafeed_img:hover .instafeed_img_overlay {
        opacity: 1;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    .instafeed_img .instafeed_img_overlay span {
        display: block;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        position: absolute;
        width: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        font-size: 16px;
    }

    @media(max-width:767px) {
        .instafeed_img .instafeed_img_overlay span {
            font-size: 12px;
        }
    }

    footer {
        background: #2d2d2d;
        padding: 60px 0 100px;
    }

    .subscribe {
        border-bottom: 1px solid #3f3f3f;
    }

    .subscribe h3 {
        text-align: center;
        color: #fff;
        padding: 0;
    }

    .subscribe form {
        text-align: center;
        margin: 20px auto 60px;
    }

    .subscribe .form-group {
        position: relative;
    }

    .subscribe .help-block {
        position: absolute;
        text-align: center;
        display: block;
        width: 100%;
        margin: 10px 0;
    }

    @media(max-width:767px) {
        .subscribe .btn-warning {
            margin: 0 auto;
        }

        .subscribe .help-block {
            position: static;
            margin: 0 0 15px;
        }

        .subscribe #js-subscribe-result .help-block {
            margin: 10px 0 15px;
        }
    }

    .signup_form {
        font-family: lora, serif;
        background: #3f3f3f;
        font-size: 17px;
        border: none;
        padding: 15px 60px;
        border-radius: 3px;
        color: #fff;
        outline: none;
        background-image: url(data:image/svg+xml;
 utf8;
        base64,
        PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjAxMiAzMS4wMTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjAxMiAzMS4wMTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8cGF0aCBkPSJNMjguNTEyLDI2LjUyOUgyLjVjLTEuMzc4LDAtMi41LTEuMTIxLTIuNS0yLjVWNi45ODJjMC0xLjM3OSwxLjEyMi0yLjUsMi41LTIuNWgyNi4wMTJjMS4zNzgsMCwyLjUsMS4xMjEsMi41LDIuNXYxNy4wNDcgICBDMzEuMDEyLDI1LjQwOCwyOS44OSwyNi41MjksMjguNTEyLDI2LjUyOXogTTIuNSw1LjQ4MmMtMC44MjcsMC0xLjUsMC42NzMtMS41LDEuNXYxNy4wNDdjMCwwLjgyNywwLjY3MywxLjUsMS41LDEuNWgyNi4wMTIgICBjMC44MjcsMCwxLjUtMC42NzMsMS41LTEuNVY2Ljk4MmMwLTAuODI3LTAuNjczLTEuNS0xLjUtMS41SDIuNXoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0xNS41MDYsMTguMDE4Yy0wLjY2NSwwLTEuMzMtMC4yMjEtMS44MzYtMC42NjJMMC44OTEsNi4yMTljLTAuMjA4LTAuMTgyLTAuMjMtMC40OTctMC4wNDgtMC43MDUgICBjMC4xODItMC4yMSwwLjQ5OC0wLjIzLDAuNzA2LTAuMDQ5bDEyLjc3OCwxMS4xMzdjMC42NCwwLjU1NywxLjcyLDAuNTU2LDIuMzU4LDBMMjkuNDYsNS40NjZjMC4yMDctMC4xODMsMC41MjItMC4xNjIsMC43MDYsMC4wNDkgICBjMC4xODIsMC4yMDgsMC4xNiwwLjUyMy0wLjA0OCwwLjcwNUwxNy4zNDIsMTcuMzU1QzE2LjgzNiwxNy43OTcsMTYuMTcxLDE4LjAxOCwxNS41MDYsMTguMDE4eiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=);
        background-repeat: no-repeat;
        background-position: 22px 19px;
        width: 460px;
        margin-right: 15px;
    }

    @media(max-width:767px) {
        .signup_form {
            width: 100%;
            margin-right: 0;
            margin-bottom: 15px;
        }
    }

    .signup_form::-webkit-input-placeholder {
        color: #969696;
    }

    .signup_form::-moz-placeholder {
        color: #969696;
    }

    .signup_form:-ms-input-placeholder {
        color: #969696;
    }

    .signup_form::placeholder {
        color: #969696;
    }

    .btn-warning {
        background: #cbb58b;
        border: none;
        border-radius: 3px;
        padding: 17px 34px;
        font-size: 15px;
        outline: none;
        cursor: pointer;
        font-weight: 700;
    }

    .btn-black.active,
    .btn-black:active,
    .show>.btn-warning.dropdown-toggle {
        color: #fff;
        background: #cbb58b;
    }

    .btn-warning:hover {
        border: none;
        background: #bfa97f;
    }

    .foot-logo {
        padding: 60px 0 34px;
    }

    .foot-logo p {
        color: #c4c4c4;
        font-weight: 100;
        padding: 24px 0 0;
        font-size: 17px;
    }

    .tweet {
        color: #c4c4c4;
    }

    .tweet ul {
        padding-left: 0;
    }

    .tweet li {
        list-style: none;
        margin-left: 0;
        margin-top: 30px;
    }

    .tweet a:hover {
        color: #cbb58b;
        text-decoration: underline;
    }

    .tweet i {
        font-size: 28px;
        color: #cbb58b;
        float: left;
    }

    .tweet div {
        margin-left: 50px;
    }

    .sitemap ul {
        margin: 0;
        padding: 16px 0 0;
    }

    .sitemap ul li {
        list-style: none;
    }

    .sitemap ul li a {
        color: #c4c4c4;
        font-size: 17px;
        line-height: 2;
    }

    .sitemap ul li :hover {
        color: #cbb58b;
        text-decoration: none;
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s;
    }

    footer h3 {
        color: #fff;
        padding: 60px 0 0;
    }

    .address p {
        color: #c4c4c4;
        padding: 16px 0 0;
    }

    .address p span {
        color: #fff;
    }

    .address ul {
        margin: 0;
        padding: 0;
    }

    .address ul li {
        list-style: none;
        float: left;
    }

    .address ul li a {
        color: #fff;
        margin-right: 5px;
    }

    .footer-social-icons li {
        margin-right: 5px;
    }

    .fa-fb {
        background: #4b6eb9;
        padding: 14px 18px;
        border-radius: 50%;
        width: 44px;
        height: 44px;
    }

    .fa-fb:hover {
        opacity: .8;
        -webkit-transition: .2;
        -o-transition: .2;
        transition: .2;
    }

    .fa-in {
        background: #188bc3;
        padding: 13px 16px;
        border-radius: 50%;
        width: 44px;
        height: 44px;
    }

    .fa-in:hover {
        opacity: .8;
        -webkit-transition: .2;
        -o-transition: .2;
        transition: .2;
    }

    .fa-tw {
        background: #55acee;
        padding: 14px 16px;
        border-radius: 50%;
        width: 44px;
        height: 44px;
    }

    .fa-tw:hover {
        opacity: .8;
        -webkit-transition: .2;
        -o-transition: .2;
        transition: .2;
    }

    @media(max-width:992px) {
        footer h3 {
            font-size: 18px;
        }

        .fa-fb {
            width: 44px;
            height: 44px;
            padding: 15px 17px;
        }

        .fa-in {
            width: 44px;
            height: 44px;
            padding: 14px 16px;
        }

        .fa-tw {
            width: 44px;
            height: 44px;
            padding: 14px 16px;
        }
    }

    @media(max-width:767px) {
        .subscribe form {
            margin: 20px 0 38px;
        }

        .foot-logo {
            padding: 32px 0 34px;
        }

        .foot-logo p {
            padding: 11px 0 0;
        }
    }

    @media(max-width:480px) {
        .btn-warning {
            width: 100%
        }

        .foot-logo {
            padding: 28px 0 0;
        }

        footer h3 {
            padding: 42px 0 0;
        }
    }

    .about-nav {
        position: relative;
        background: #ccc;
    }

    .about_bg {
        background: url(../images/about-bg.jpg) no-repeat;
        -webkit-background-size: cover;
        background-size: cover;
    }

    .about_bg h1 {
        text-align: center;
        color: #fff;
        margin: 0;
        padding: 37px 0 90px;
        font-weight: 700;
    }

    @media(max-width:992px) {
        .about_bg h1 {
            font-size: 42px;
        }
    }

    .welcome_about {
        padding: 98px 0;
    }

    .welcome_about h2 {
        font-weight: 600;
        color: #2d2d2d;
        margin: 0 0 28px;
    }

    .welcome_about p {
        color: #2d2d2d;
        line-height: 1.8;
    }

    .welcome_about img {
        width: 100%
    }

    .btn-about {
        background: 0 0;
        border: 3px solid #cbb58b;
        border-radius: 2px;
        padding: 14px 20px;
        color: #cbb58b;
        font-size: 15px;
        margin: 16px 0 0;
    }

    @media(max-width:992px) {
        .welcome_about {
            padding: 58px 0;
        }

        .btn-about {
            margin: 0 0 32px;
        }
    }

    .testimonial {
        background: #f2f2f2;
        padding: 98px 0;
    }

    .testimonial h2 {
        text-align: center;
        font-weight: 600;
        color: #2d2d2d;
        margin: 0 0 28px;
    }

    .quote {
        text-align: center;
        font-size: 24px;
        outline: none;
        cursor: -webkit-grab;
        cursor: grab;
    }

    .quote i {
        border: 2px solid #cbb58b;
        padding: 20px;
        border-radius: 50%;
        color: #cbb58b;
    }

    .quote .quote_text {
        text-align: center;
        margin: 31px auto;
        line-height: 2;
        position: relative;
        max-width: 710px;
    }

    @media(min-width:992px) {

        .quote .quote_text: before,
        .quote .quote_text:after {
            position: absolute;
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            color: #cbb58b;
        }

        .quote .quote_text:before {
            content: "\f10d";
            top: 0;
            left: -40px;
        }

        .quote .quote_text:after {
            content: "\f10e";
            top: 0;
            right: -40px;
        }
    }

    .testi-img_block {
        max-width: 500px;
        margin: 0 auto 30px;
    }

    .testi-img_block img {
        margin: 0;
        display: inline-block;
        border-radius: 50%;
        max-width: 60px;
        margin-top: -18px;
    }

    .testi-img_block p {
        display: inline-block;
        font-size: 15px;
        margin-bottom: 0;
        padding-left: 10px;
    }

    .testi-img_block p span {
        color: #cbb58b;
        font-size: 16px;
        display: block;
    }

    @media(max-width:768px) {
        .testi-img_block p {
            display: block;
            position: inherit;
            padding: 8px 0;
            margin: 0;
        }
    }

    .our-teachers {
        padding: 98px 0;
    }

    .our-teachers h2 {
        text-align: center;
        font-weight: 600;
        margin: 0 0 28px;
    }

    .our-teachers-block {
        background: #fff;
        border: 1px solid #ececec;
        -webkit-box-shadow: 0 5px 34px 8px #ececec;
        -moz-box-shadow: 0 5px 34px 8px #ececec;
        box-shadow: 0 5px 34px 8px #ececec;
        position: relative;
        min-height: 205px;
        margin-bottom: 30px;
    }

    .our-teachers-block .teachers-img {
        width: 45%;
        position: absolute;
        bottom: 0;
        top: 0;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    @media(max-width:1200px) {
        .our-teachers-block .teachers-img {
            width: 35%
        }
    }

    .our-teachers-block .teachers-description {
        margin-left: 45%;
        padding: 20px 85px 15px 20px;
    }

    @media(max-width:1200px) {
        .our-teachers-block .teachers-description {
            margin-left: 35%
        }
    }

    .our-teachers-block .teachers-description p {
        margin: 0;
    }

    .our-teachers-block .teachers-description p span {
        color: #cbb58b;
        font-weight: 100;
        font-size: 18px;
    }

    .social-icons {
        position: absolute;
        right: 0;
        top: 0;
        background: #fff;
        bottom: 0;
        width: 50px;
        border-left: 1px solid #ececec;
    }

    .social-icons ul {
        padding: 0;
        margin: 0;
        list-style: none;
        display: table;
        height: 100%
    }

    .social-icons ul li {
        list-style: none;
        margin: 0 0 10px;
        display: table-row;
        min-height: 1px;
        text-align: center;
    }

    .social-icons ul li a {
        color: #787878;
        font-size: 20px;
        padding: 5px 15px;
        border-bottom: 1px solid #ececec;
        display: table-cell;
        vertical-align: middle;
        width: 1%
    }

    .social-icons ul li a i {
        -webkit-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    .social-icons ul li a:hover i {
        color: #cbb58b;
    }

    .social-icons ul li:last-child a {
        border-bottom: 0;
    }

    @media(max-width:992px) {
        .our-teachers-block .teachers-img {
            display: block;
            float: none;
            width: 100%;
            position: static;
        }

        .our-teachers-block .teachers-description {
            margin-left: 0;
            padding: 20px 20px 70px;
        }

        .our-teachers-block .social-icons {
            top: inherit;
            left: 0;
            width: 100%;
            border-top: 1px solid #ececec;
            border-left: 0;
            height: 50px;
        }

        .our-teachers-block .social-icons ul {
            width: 100%
        }

        .our-teachers-block .social-icons li {
            display: table-cell;
            margin: 0;
        }

        .our-teachers-block .social-icons li a {
            display: inherit;
            border-bottom: 0;
            border-right: 1px solid #ececec;
            height: 50px;
        }
    }

    .admission_cources {
        padding: 70px 0;
    }

    .admission_cources h2 {
        font-weight: 700;
    }

    .admission_cources p {
        line-height: 1.8;
        padding: 0;
    }

    .course_filter {
        padding: 33px 30px;
        background: #cbb58b;
        border-radius: 2px;
    }

    .course_filter .form-control {
        border: 0;
    }

    select.form-control.custom-select {
        height: 3rem !important;
        margin-right: 13px;
    }

    .btn-admission {
        padding: 13px 54px;
        text-transform: uppercase;
        border: none;
        color: #fff;
        background: #d8c299;
        -webkit-box-shadow: 0 1px 1px 0 rgba(3, 3, 3, .35);
        -moz-box-shadow: 0 1px 1px 0 rgba(3, 3, 3, .35);
        box-shadow: 0 1px 1px 0 rgba(3, 3, 3, .35);
    }

    .btn-admission:hover {
        background: #e0c795;
        color: #fff;
    }

    .course_box {
        border: 1px solid #ececec;
        display: block;
        color: #2d2d2d;
        position: relative;
        min-height: 260px;
        margin-bottom: 30px;
    }

    .course_box img {
        width: 45%;
        position: absolute;
        bottom: 0;
        top: 0;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .course_box h4 {
        font-weight: 600;
    }

    .course_box p {
        font-size: 15px;
        padding-top: 15px;
        margin-bottom: 0;
    }

    .course_box:hover,
    .course_box:focus,
    .course_box:active {
        color: #2d2d2d;
        text-decoration: none;
        opacity: .8;
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s;
    }

    .couse-desc-wrap {
        margin-left: 45%;
        padding: 20px 25px;
    }

    .course_duration {
        margin-left: 45%
    }

    .star-rating .fa-star {
        color: #ffb914;
    }

    .course_duration {
        border-top: 1px solid #eaeaea;
        background: #f6f6f6;
    }

    .course_duration ul {
        padding: 0;
        margin: 0;
    }

    .course_duration ul li {
        list-style: none;
        display: inline-block;
        margin-left: 20px;
        padding: 9px 0;
    }

    .course_duration ul li p {
        padding: 0;
        margin: 0;
        color: #cbb58b;
    }

    .course_duration ul li span {
        font-weight: 700;
        font-size: 15px;
    }

    @media(max-width:1200px) {
        .course_box p {
            font-size: 14px;
        }

        .course_duration ul li p {
            font-size: 13px;
        }

        .course_duration ul li span {
            font-size: 12px;
        }
    }

    @media(max-width:992px) {
        .course_box img {
            position: static;
            width: 100%
        }

        .couse-desc-wrap {
            margin-left: 0;
        }

        .course_duration {
            margin-left: 0;
        }
    }

    .admission_discription {
        padding: 50px 0;
    }

    .admission_discription h4 {
        font-weight: 700;
    }

    .admission_discription p {
        text-align: left;
        margin-top: 12px;
    }

    .admission_discription ul {
        padding: 0;
        margin: 0;
    }

    .admission_discription li {
        background: url(../images/discription-icon.png) no-repeat 5px 3px;
        list-style: none;
        padding: 0 0 12px 36px;
        font-size: 16px;
    }

    .admission-pdf {
        background: #f6f6f6;
        border: 1px solid #ebebeb;
        padding: 18px 22px;
        position: relative;
        width: 86%
    }

    .admission-pdf p {
        display: inline-block;
        text-align: left;
        text-transform: uppercase;
        margin: 0;
        padding: 0 15px;
        font-weight: 700;
        font-size: 14px;
    }

    .admission-pdf p span {
        text-decoration: underline;
    }

    .admission-pdf p span a {
        color: #cbb58b;
    }

    .pdf_btn {
        position: relative;
    }

    .btn-pdf_join {
        position: absolute;
        right: -60px;
        top: 15px;
        text-transform: uppercase;
        -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .75);
        -moz-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .75);
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .75);
    }

    .admission_testimonial {
        padding-top: 70px;
    }

    .admission_testimonial h4 {
        font-weight: 700;
        margin: 0 0 28px;
    }

    .admission_testimonial .admissiontesti-img_block {
        display: inline-block;
    }

    .admission_testimonial .admissiontesti-img_block img {
        border-radius: 50%
    }

    .admission_testimonial .admissiontesti-text_block {
        float: right;
        width: 84%
    }

    .admission_testimonial .admissiontesti-text_block p {
        line-height: 1.8;
        text-align: left;
    }

    .admission_testimonial .admissiontesti-text_block h6 {
        line-height: 1.5;
    }

    .admission_testimonial .admissiontesti-text_block h6 span {
        color: #cbb58b;
    }

    .admission_rating {
        padding: 6px 16px;
        margin: 70px 0 0;
        background: #cbb58b;
        display: inline-block;
    }

    .admission_rating li {
        float: left;
        font-size: 15px;
        width: 50%;
        list-style: none;
        padding: 10px 0;
        color: #fff;
        border-bottom: 1px solid #d1c3a7;
    }

    .admission_rating li span {
        float: right;
    }

    .admission_rating li:nth-child(11) {
        border: none;
    }

    .admission_rating li:last-child {
        border: none;
    }

    .admission_rating .admission_star {
        padding-left: 22px;
        font-size: 15px;
        color: #fff8ea;
        font-weight: 100;
    }

    .admission_insruction {
        padding: 50px 0 0;
    }

    .admission_insruction h4 {
        font-weight: 700;
        margin: 0 0 14px;
    }

    .admission_insruction p {
        font-weight: 700;
        font-size: 15px;
    }

    .admission_insruction p span {
        color: #cbb58b;
    }

    .admission_share-icon {
        margin: 50px 0 0;
    }

    .admission_share-icon h4 {
        font-weight: 700;
    }

    .admission_share-icon a {
        display: inline-block;
        list-style: none;
        background: #e8e8e8;
        width: 52px;
        height: 52px;
        margin-right: 6px;
        border-radius: 50%;
        padding: 16px 20px;
        color: #2d2d2d;
    }

    .admission_share-icon a:hover {
        opacity: .6;
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s;
    }

    @media(max-width:1200px) {
        .admission-pdf p {
            padding: 0 0 0 12px;
            font-size: 13px;
        }
    }

    @media(max-width:992px) {
        .btn-pdf_join {
            right: 20px;
        }

        .admission_rating {
            padding: 6px 8px;
        }

        .admission_rating ul li {
            font-size: 13px;
        }

        .admission_testimonial,
        .admission_insruction,
        .admission_share-icon,
        .admission_testimonial .admissiontesti-text_block p {
            text-align: center;
        }

        .admission_rating {
            font-size: 13px;
        }

        .admission-pdf {
            width: 100%
        }

        .admission_share-icon ul li {
            width: 44px;
            height: 44px;
            padding: 11px 15px;
        }

        .admissiontesti-text_block {
            width: 100% !important;
        }
    }

    @media(max-width:767px) {
        .admission-pdf {
            padding: 20px;
        }

        .admission-pdf i {
            font-size: 2em;
        }
    }

    @media(max-width:575px) {
        .btn-pdf_join {
            position: static;
            margin-top: 20px;
            width: 100%
        }
    }

    .admission-form_rules {
        padding: 60px 0;
    }

    .admission-form_rules h2 {
        font-weight: 700;
        margin: 0 0 28px;
    }

    .admission-form_rules p {
        line-height: 1.8;
    }

    .admission-form_listed {
        padding: 66px 0 0;
        margin: 0;
    }

    .admission-form_listed li {
        list-style: none;
        background: url(../images/right-icon.png) no-repeat;
        font-size: 17px;
        color: #cbb58b;
        padding-left: 30px;
        line-height: 2;
    }

    @media(max-width:768px) {
        .admission-form_listed {
            padding: 12px 0 0;
        }
    }

    .form-control::-webkit-input-placeholder {
        color: #d0d0d0;
        opacity: 1;
    }

    .form-control::-moz-placeholder {
        color: #d0d0d0;
        opacity: 1;
    }

    .form-control:-ms-input-placeholder {
        color: #d0d0d0;
        opacity: 1;
    }

    .form-control::placeholder {
        color: #d0d0d0;
        opacity: 1;
    }

    .has-danger .custom-select {
        background-image: url(data:image/svg+xml;
 charset=utf8;
        base64,
        PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCA0IDUnPjxwYXRoIGZpbGw9JyMzMzMnIGQ9J00yIDBMMCAyaDR6bTAgNUwwIDNoNHonLz48L3N2Zz4=);
    }

    .has-danger .custom-select: focus {
        border-color: #d9534f;
    }

    .admission_form {
        padding: 0 0 98px;
    }

    .admission_form img {
        margin: 0 auto;
        display: block;
    }

    .admission_form h2 {
        text-align: center;
        font-weight: 700;
        margin: 0 0 28px;
    }

    .admission_form label {
        width: 100%;
        margin: 13px 0;
    }

    .form-control {
        border: 2px solid #ccc;
    }

    .form-control:not(textarea) {
        height: 50px;
    }

    .admission-form_dropdown {
        width: 100%;
        border: 2px solid #ccc;
        border-radius: 3px;
        padding: 14px 12px;
        outline: none;
    }

    .admission-form_date {
        width: 32.4%;
        border: 2px solid #ccc;
        border-radius: 3px;
        padding: 14px 12px;
        outline: none;
    }

    .admission-form_text {
        width: 100%;
        border: 2px solid #ccc;
        border-radius: 3px;
        padding: 12px;
        outline: none;
    }

    .admission-form_address {
        margin: 18px 0 0;
    }

    .admission-form_message {
        width: 100%;
        border: 2px solid #ccc;
        border-radius: 3px;
        padding: 12px;
        height: 262px;
        outline: none;
    }

    @media(max-width:1200px) {
        .admission-form_date {
            width: 100%;
            margin: 18px 0 0;
        }

        .admission-form_respons {
            margin: 0;
        }
    }

    .campus {
        padding: 98px 0;
    }

    .campus h2 {
        font-weight: 700;
        margin: 0 0 28px;
    }

    .campus p {
        line-height: 1.8;
        margin: 21px 0 58px;
    }

    .campus-img_block {
        position: relative;
    }

    .campus-img_block .campus-title-block {
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), to(black));
        background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, black 100%);
        background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0%, black 100%);
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, black 100%);
    }

    .campus-img_block .campus-title-block h4 {
        color: #fff;
        padding: 60px 30px 17px;
        margin: 0;
    }

    .campus-img_text {
        padding: 6px 0;
    }

    .campus-img_text p {
        font-size: 15px;
        color: #686868;
    }

    @media(max-width:992px) {
        .campus-img_block h4 {
            top: -36px;
            left: 15px;
            font-size: 18px;
        }

        .campus-img_text {
            padding: 0 8px;
        }
    }

    @media(max-width:768px) {
        .campus-img_block img {
            width: 100%
        }
    }

    .research {
        padding: 98px 0;
    }

    .research h2 {
        font-weight: 700;
        margin: 0 0 28px;
    }

    .research h3 {
        font-weight: 700;
        margin: 6px 0 28px;
    }

    .research-current_block {
        margin-bottom: 60px;
    }

    .research-current_block img {
        float: left;
        max-width: 160px;
    }

    .research-current_block h4 {
        font-weight: 700;
        margin-bottom: 16px;
        margin-left: 190px;
    }

    .research-current_block p {
        line-height: 1.8;
        color: #2d2d2d;
        margin-left: 190px;
    }

    .research-current_block ul {
        margin-left: 190px;
    }

    .research-list li {
        font-weight: 700;
        line-height: 1.8;
    }

    .research-current_last {
        margin-bottom: 0;
    }

    .research-posts .research-news_block {
        border-bottom: 1px solid #efefef;
        padding-bottom: 7px;
        padding-top: 20px;
    }

    .research-posts .research-news_block:first-child {
        padding-top: 0;
    }

    .research-posts .research-news_block:last-child {
        border-bottom: 0;
        padding-bottom: 30px;
    }

    .research-posts .research-news_block span {
        color: #cbb58b;
        font-size: 13px;
        font-weight: 700;
        margin-top: 30px;
    }

    .research-posts .research-news_block p {
        font-weight: 700;
        font-size: 16px;
    }

    @media(max-width:767px) {
        .research-current_block img {
            min-width: 100%;
            margin-bottom: 12px;
        }

        .research-current_block h4,
        .research-current_block p,
        .research-current_block ul {
            margin-left: 0;
        }

        .research h3 {
            margin-top: 40px;
        }
    }

    .research-features img {
        width: 100%
    }

    .research-featurestext_block {
        background: #cbb58b;
        max-width: 850px;
        margin: -180px auto 0;
        padding: 50px 77px;
        position: relative;
    }

    .research-featurestext_block h3 {
        text-align: center;
        color: #fff;
        font-weight: 700;
        margin: 0 0 28px;
    }

    .research-featurestext_block p {
        line-height: 1.8;
        text-align: center;
        color: #eee5d4;
    }

    .resources {
        padding: 98px 0;
    }

    .resources-title {
        text-align: center;
        font-weight: 700;
        margin: 0 0 28px;
    }

    .resources-slider_wrap {
        width: 100%
    }

    .research-testi_block img {
        margin: 0 auto;
        border-radius: 50%;
        display: block;
    }

    .research-testi_block h4 {
        font-weight: 700;
        text-align: center;
        margin: 36px 0;
        margin: 30px 0 16px;
    }

    .research-testi_block p {
        text-align: center;
        line-height: 1.8;
        padding: 0 26px;
    }

    @media(max-width:992px) {
        .research-featurestext_block {
            max-width: 700px;
            margin: -125px auto 0;
            padding: 25px 66px;
        }
    }

    @media(max-width:768px) {
        .research-featurestext_block {
            max-width: 100%;
            margin: 0 auto 0;
            padding: 24px 48px;
        }

        .research-featurestext_block h3 {
            margin: 0 0 13px;
        }
    }

    .blog-wrap {
        padding: 98px 0;
    }

    .blog-img_block {
        position: relative;
    }

    .blog-img_block img {
        padding-left: 40px;
    }

    .blog-date {
        background: #2d2d2d;
        padding: 12px 16px;
        border-radius: 2px;
        display: inline-block;
        position: absolute;
        top: 50%;
        left: 0;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .blog-date span {
        color: #fff;
        font-size: 18px;
        font-weight: 700;
    }

    .blog-tiltle_block {
        padding: 30px 0 0 100px;
    }

    .blog-tiltle_block h4 {
        font-weight: 700;
    }

    .blog-tiltle_block h4 a {
        font-size: 20px;
        text-decoration: none;
    }

    .blog-tiltle_block h6 a {
        padding-right: 15px;
        padding-left: 15px;
        font-weight: 300;
        font-size: 14px;
        text-decoration: none;
    }

    .blog-tiltle_block h6 a span {
        padding-left: 5px;
    }

    .blog-tiltle_block h6 a:first-child {
        padding-left: 0;
    }

    .blog-tiltle_block p {
        line-height: 1.8;
        padding: 22px 16px 0 0;
    }

    .blog-tiltle_block a {
        color: #2d2d2d;
        font-size: 13px;
        text-decoration: underline;
        font-weight: 700;
    }

    .blog-icons {
        border-top: 1px solid #e3eaef;
        border-bottom: 1px solid #e3eaef;
        margin: 36px 0;
        padding: 8px 0;
    }

    .blog-icons .blog-share_block {
        text-align: right;
        line-height: 1.3;
    }

    .blog-icons .blog-share_block ul {
        display: inline-block;
        padding: 3px 0 0;
        margin: 0;
    }

    .blog-icons .blog-share_block ul li {
        list-style: none;
        float: right;
    }

    .blog-icons .blog-share_block ul li a {
        margin: 0 0 0 25px;
        color: #ccc;
    }

    .quote-right {
        float: right;
    }

    .blog-search {
        border: 1px solid #ccc;
        padding: 8px 16px;
        border-radius: 2px;
        font-size: 15px;
    }

    .btn-blogsearch {
        padding: 11px 16px;
        border-radius: 2px;
        font-size: 15px;
        outline: none;
    }

    .blog-category_block {
        padding: 50px 0;
    }

    .blog-category_block h3 {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .blog-category_block ul {
        margin: 0;
        padding: 0;
    }

    .blog-category_block ul li {
        list-style: none;
        margin: 10px 0;
        border-bottom: 1px solid rgba(0, 0, 0, .1);
    }

    .blog-category_block ul li a {
        color: #2d2d2d;
        text-decoration: none;
        padding-bottom: 10px;
        display: block;
    }

    .blog-category_block ul li a i {
        float: right;
    }

    .blog-category_block ul li a:hover {
        opacity: .8;
    }

    .blog-category_block ul hr {
        margin: 0;
    }

    .blog-category_block ul ul {
        background: #f7f7f7;
        padding: 20px;
    }

    .blog-category_block ul ul li {
        border-bottom-color: #fff;
    }

    .blog-featured_post h3 {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .blog-featured_post hr {
        margin: 24px 0;
    }

    .blog-featured-img_block img {
        float: left;
        margin: 0 28px 0 0;
    }

    .blog-featured-img_block h5 {
        font-weight: 700;
        font-size: 17px;
        margin-left: 150px;
    }

    .blog-featured-img_block p {
        font-size: 15px;
        margin-left: 150px;
    }

    .blog-featured-img_block a {
        color: #292b2c;
    }

    .blog-tags_wrap {
        margin: 50px 0 0;
    }

    .blog-tags_wrap h3 {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .blog-tags {
        border: 1px solid #ccc;
        text-align: center;
        padding: 5px 29px;
        margin: 0 0 18px 18px;
        color: #313131;
        font-size: 14px;
    }

    .page-item {
        margin: 0 8px 0 0;
    }

    .page-link {
        line-height: 1;
        color: #2d2d2d;
        font-size: 14px;
        border-color: #e3eaef;
    }

    .page-next {
        background: #cbb58b;
        color: #fff;
        border-color: transparent;
    }

    .page-link:focus,
    .page-link:hover {
        background-color: #f4e9d4;
        color: #2d2d2d;
    }

    @media(max-width:1200px) {
        .blog-search {
            width: 100%
        }

        .btn-blogsearch {
            width: 100%;
            margin-top: 10px;
        }

        .blog-featured-img_block img {
            margin: 0 12px 0 0;
        }

        .blog-tags {
            padding: 5px 20px;
        }
    }

    @media(max-width:992px) {
        .blog-date span {
            font-size: 15px;
        }

        .pagination {
            margin: 0;
        }

        .blog-tiltle_block,
        .blog-img_block img {
            padding-left: 0;
        }

        .blog-icons {
            margin-top: 12px;
        }

        .blog-featured-img_block img {
            width: 100%;
            margin: 0 0 10px;
        }

        .blog-featured-img_block p,
        .blog-featured-img_block h5 {
            margin-left: 0;
        }
    }

    @media(max-width:768px) {
        .blog-search {
            margin: 30px 0 0;
        }
    }

    @media(max-width:480px) {
        .pagination li {
            display: none;
        }

        .pagination li:first-child,
        .pagination li:last-child {
            display: block;
        }
    }

    .blogpost-quotes {
        background: #f4eee3;
        display: inline-block;
        padding: 4px 36px;
        margin: 12px 0 0;
    }

    .blogpost-quotes span {
        font-size: 32px;
    }

    .blogpost-quotes p {
        font-weight: 700;
        font-style: italic;
        padding: 0 65px;
    }

    .blogpost_list {
        font-weight: 700;
        border-bottom: 2px solid #cbb58b;
        padding: 0 0 3px;
        line-height: 2.3;
    }

    .blogpost-tabs {
        margin: 50px 0 0;
    }

    .blogpost-tab-wrap {
        float: left !important;
        width: 100%
    }

    .blogpost-nav-tab {
        border: none !important;
        margin: 0 35px 0 0;
    }

    .blogpost-nav-tab a {
        text-decoration: none;
        font-size: 20px;
        padding: 10px 0;
    }

    .blodpost-tab-img img {
        padding: 0;
        border-radius: 50%
    }

    .blogpost-tab-description h6 {
        font-size: 17px;
        color: #cbb58b;
        margin-bottom: 0;
        margin-top: 10px;
    }

    .blogpost-tab-description p {
        padding: 10px 0 8px;
        font-size: 16px;
        margin: 0;
    }

    .blodpost-tab-img {
        margin-top: 10px;
    }

    p.blogpost-rply {
        color: #6e6e6e;
        padding-top: 0;
    }

    p.blogpost-rply span {
        margin: 0 10px;
        color: #a9a9a9;
        font-size: 12px;
    }

    p.blogpost-rply a {
        font-size: 14px;
    }

    .blogpost-rply-style {
        text-decoration: line-through;
    }

    @media(max-width:992px) {
        .blogpost-quotes {
            padding: 4px 6px;
        }
    }

    @media(max-width:768px) {
        .blogpost-quotes p {
            padding: 0 58px;
        }

        .quote-right {
            float: right !important;
        }

        .blogpost-nav-tab {
            margin: 0 25px 0 0;
        }

        .blogpost-nav-tab a {
            font-size: 15px;
            padding: 6px 0;
        }

        .blodpost-tab-img img {
            width: 16% !important;
        }
    }

    .events {
        padding: 98px 0;
    }

    .event-title {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .event-date {
        background: #cbb58b;
        padding: 20px 5px;
    }

    .event-date h4 {
        font-size: 76px;
        font-weight: 700;
        text-align: center;
        color: #fff;
        margin: 0;
    }

    .event-date span {
        font-weight: 700;
        font-size: 20px;
        text-align: center;
        color: #fff;
        display: block;
    }

    .event-time {
        background: #b39a6b;
        padding: 8px 0;
        display: block;
        color: #e8dabe;
        text-align: center;
    }

    .event-heading {
        margin: 0 0 20px;
    }

    .event-heading h3 {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .event-heading p {
        line-height: 1.8;
    }

    .event-hilights h5 {
        font-size: 18px;
        font-weight: 700;
        margin: 0 0 24px;
    }

    .event-highlight-discription {
        margin: 50px 0 0;
    }

    .event-highlight-discription p {
        line-height: 1.8;
        margin: 0 0 50px;
    }

    .event-toggle {
        text-transform: uppercase;
        font-size: 15px;
        text-decoration: underline;
        color: #cbb58b;
        font-weight: 700;
    }

    .event-toggle:focus {
        color: #cbb58b;
    }

    .event-toggle:hover {
        color: #b39a6b;
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s;
    }

    .tab-list {
        color: #2d2d2d;
        font-weight: 700;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        border-bottom: 2px solid #cbb58b;
        border-right: 1px solid #fff;
        border-left: 1px solid #fff;
        border-top: 1px solid #fff;
        color: #cbb58b;
    }

    .nav-tabs {
        border: none;
        float: right;
    }

    .nav-tabs .nav-link {
        border-bottom: 1px solid #eee;
    }

    .nav-special-br {
        border-left: 1px solid #eee;
        border-right: 1px solid #eee;
    }

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
        border-color: #fff #fff #fff;
        color: #cbb58b;
        border-bottom: 2px solid #cbb58b;
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s;
    }

    .event-underline {
        margin: 68px 0;
    }

    @media(max-width:1200px) {
        .nav-link {
            padding: 8px 12px;
            font-size: 15px;
        }
    }

    @media(max-width:992px) {
        .event-date {
            padding: 12px 5px;
        }

        .event-date h4 {
            font-size: 36px;
        }

        .event-date span {
            font-size: 15px;
        }

        .event-time {
            font-size: 14px;
        }
    }

    @media(max-width:768px) {
        .nav-tabs {
            float: left;
        }

        .event-time {
            font-size: 17px;
        }

        .event-heading {
            margin: 0 0 30px;
        }

        .event-heading h3 {
            margin: 12px 0;
            font-size: 21px;
        }

        .event-heading p {
            font-size: 15px;
        }

        .tab-content img {
            width: 100%;
            margin: 0 0 12px;
        }

        .event-underline {
            margin: 20px 0 30px;
        }

        .event-highlight-discription {
            margin: 12px 0 0;
        }

        .event-highlight-discription p {
            margin: 0 0 8px;
        }
    }

    @media(max-width:320px) {
        .nav-link {
            padding: 4px 7px;
            font-size: 13px;
        }
    }

    .fc-view {
        margin-top: 30px;
    }

    .fc-toolbar {
        margin-bottom: 5px;
        margin-top: 15px;
    }

    .fc-toolbar h2 {
        font-size: 18px;
        line-height: 30px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .fc-toolbar .fc-state-active,
    .fc-toolbar .ui-state-active,
    .fc-toolbar button:focus,
    .fc-toolbar button:hover {
        z-index: 0;
    }

    .fc-widget-content,
    .fc-widget-header {
        border: 1px solid #d7ecfb;
    }

    .fc th.fc-widget-header {
        background: #f5f5f5;
        font-size: 14px;
        line-height: 20px;
        padding: 10px 0;
        text-transform: uppercase;
    }

    .fc th.fc-widget-header a {
        color: #505458;
    }

    .fc .fc-event .fc-bg {
        display: none;
    }

    .fc .fc-list-item[class*=" bg-"] {
        color: #fff;
    }

    .fc .fc-list-item[class*=" bg-"]:hover td {
        background: rgba(255, 255, 255, .2);
    }

    .fc-button {
        background: #fff;
        color: #555;
        text-transform: capitalize;
    }

    .fc-content {
        color: #fff;
    }

    .fc-text-arrow {
        font-size: 16px;
    }

    .fc-state-hover {
        background: #f3f3f3;
    }

    .fc-cell-overlay,
    .fc-state-highlight {
        background: #f0f0f0;
    }

    .fc-unthemed .fc-today {
        background: #fff;
    }

    .fc-state-active,
    .fc-state-down {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    #external-events .fc-event,
    .fc .fc-event {
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        border: none;
        cursor: move;
        font-size: 12px;
        margin: 5px 7px;
        padding: 5px;
        text-align: center;
    }

    .external-event {
        color: #fff;
        cursor: move;
        margin: 10px 0;
        padding: 6px 10px;
    }

    .fc-basic-view td.fc-day-number,
    .fc-basic-view td.fc-week-number span {
        padding-right: 5px;
    }

    .fc-toolbar .fc-button-group .fc-button {
        background: #fff;
    }

    .fc-toolbar .fc-button-group .fc-button:hover {
        background: #f5f5f5;
    }

    .fc .fc-event,
    .fc .fc-event-dot {
        background: #304ffe;
        -o-transition: none;
        transition: none;
        -moz-transition: none;
        -webkit-transition: none;
    }

    .fc .fc-event-dot {
        background: #fff;
    }

    .fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
        color: #434343;
    }

    .fc.fc-ltr .fc-h-event.fc-not-start,
    .fc.fc-rtl .fc-h-event.fc-not-end {
        margin-left: 7px;
    }

    @media(max-width:479px) {
        .fc .fc-toolbar .fc-right {
            width: 100%;
            text-align: left;
            margin-top: 15px;
        }

        .fc .fc-view-container {
            overflow: auto;
        }
    }

    .tabs {
        padding: 98px 0 0;
    }

    .tabs h3 {
        margin: 0 0 24px;
        font-weight: 700;
    }

    .shortcode-tab-content {
        border: 1px solid #ccc;
        padding: 24px;
        min-height: 292px;
        line-height: 1.8;
        border-radius: 2px;
    }

    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        margin: -8px 0 0;
        min-height: 255px;
    }

    .tabcontent p {
        font-size: 15px;
        padding: 24px;
        line-height: 1.8;
        color: #2d2d2d;
        margin: 0;
    }

    button.accordion {
        background: #fff;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: 1px solid #eee;
        border-bottom: none;
        text-align: left;
        outline: none;
        font-size: 16px;
        font-weight: 700;
        padding: 17px 30px;
        -webkit-transition: .4s;
        -o-transition: .4s;
        transition: .4s;
    }

    button.accordion.active,
    button.accordion:hover {
        border-left: 2px solid #cbb58b;
    }

    button.accordion:after {
        content: '\002B';
        color: #777;
        font-weight: 700;
        float: right;
        margin-left: 5px;
    }

    button.accordion.active:after {
        content: "\2212"
    }

    .panel h5 {
        padding: 24px 0 0 30px;
        font-weight: 700;
        font-size: 16px;
    }

    .panel-last {
        border-bottom: 1px solid #eee;
    }

    div.panel {
        background-color: #fff;
        max-height: 0;
        overflow: hidden;
        -webkit-transition: max-height .2s ease-out;
        -o-transition: max-height .2s ease-out;
        transition: max-height .2s ease-out;
        border-right: 1px solid #eee;
        border-left: 2px solid #cbb58b;
    }

    div.panel p {
        font-size: 15px;
        color: #2d2d2d;
        padding: 0 30px 30px;
        margin: 0;
        line-height: 1.8;
    }

    .accordian-link {
        color: #2d2d2d;
        font-size: 16px;
        font-weight: 700;
        text-decoration: none;
    }

    .accordian-link:hover,
    .accordian-link:focus {
        color: #cbb58b;
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s;
        text-decoration: none;
    }

    .accordian-link:active {
        color: #cbb58b;
    }

    .card-header {
        background: 0 0;
    }

    .card-block {
        color: #2d2d2d;
        padding: 20px;
        line-height: 1.8;
    }

    .alert-box {
        padding: 98px 0;
    }

    .alert-title h3 {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .alert {
        border: none;
        border-radius: none;
        margin-bottom: 24px;
    }

    .alert p {
        margin: 0;
    }

    .alert-success {
        padding: 22px 30px;
        border-radius: 0;
        background: #87b08d;
        color: #fff;
    }

    .alert-success i {
        margin-right: 24px;
        font-size: 24px;
        color: #fff;
    }

    .alert-info {
        padding: 22px 30px;
        border-radius: 0;
        background: #82abc6;
        color: #fff;
    }

    .alert-info i {
        margin-right: 24px;
        font-size: 24px;
        color: #fff;
    }

    .alert-danger {
        padding: 22px 30px;
        border-radius: 0;
        background: #f3897e;
        color: #fff;
    }

    .alert-danger i {
        margin-right: 24px;
        font-size: 24px;
        color: #fff;
    }

    .alert-warning {
        padding: 22px 30px;
        border-radius: 0;
        background: #cda371;
        color: #fff;
    }

    .alert-warning i {
        margin-right: 24px;
        font-size: 24px;
        color: #fff;
    }

    .typography {
        padding: 0 0 98px;
    }

    .typography-title {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .shortcode-list h3 {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .shortcode-list ul {
        margin: 0;
        padding: 0;
    }

    .shortcode-list ul li {
        background: url(../images/shortcode-list.html) no-repeat;
        list-style: none;
        color: #686868;
        margin: 0 0 14px;
        padding: 0 0 0 38px;
    }

    .list-general ul {
        margin: 50px 0 0;
        padding: 0;
    }

    .list-general ul li {
        color: #686868;
        list-style: none;
        margin: 0 0 14px;
    }

    .list-general ul li span {
        padding: 0 24px 0 0;
    }

    .shortcode-columns {
        padding: 0 0 98px;
    }

    .shortcode-columns h3 {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .shortcode-columns h5 {
        font-weight: 700;
        margin: 0 0 12px;
    }

    .shortcode-columns p {
        color: #686868;
        font-size: 15px;
        line-height: 1.8;
    }

    .button-toggle {
        padding: 0 0 98px;
    }

    .button-toggle h3 {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .btn-1 {
        width: 100%;
        border-radius: 0;
    }

    .btn-2 {
        width: 100%;
        border-radius: 0;
        background: #d19c85;
    }

    .btn-2:hover {
        background: #cb927a;
    }

    .btn-3 {
        width: 100%;
        border-radius: 0;
        background: #87b08d;
    }

    .btn-3:hover {
        background: #7daa83;
    }

    .btn-warning.active,
    .btn-warning:active,
    .show>.btn-warning.dropdown-toggle {
        border: none;
        background: #cbb58b;
    }

    .bnt-border_1 {
        border-bottom: 4px solid #9e8452;
    }

    .bnt-border_1:hover {
        border-bottom: 4px solid #9e8452;
    }

    .bnt-border_2 {
        border-bottom: 4px solid #ae7056;
    }

    .bnt-border_2:hover {
        border-bottom: 4px solid #ae7056;
    }

    .bnt-border_3 {
        border-bottom: 4px solid #53815a;
    }

    .bnt-border_3:hover {
        border-bottom: 4px solid #53815a;
    }

    .btn-simple {
        text-transform: uppercase;
        color: #2d2d2d;
        background: 0 0;
        border: 1px solid #cbb58b;
        font-size: 15px;
        padding: 16px 36px;
        border-radius: 0;
        font-weight: 700;
    }

    .btn-default-clr1 {
        border: 1px solid #d19c85;
    }

    .btn-default-clr2 {
        border: 1px solid #87b08d;
    }

    @media(max-width:992px) {

        .btn-1,
        .btn-2,
        .btn-3 {
            padding: 17px 6px;
        }
    }

    @media(max-width:768px) {

        .btn-1,
        .btn-2,
        .btn-3 {
            margin: 0 0 10px;
        }

        .button-toggle h3 {
            margin: 30px 0 24px;
        }

        .tabs h3 {
            margin: 30px 0 24px;
        }

        .shortcode-list {
            margin: 30px 0 0;
        }

        .alert-box {
            padding: 34px 0;
        }

        .alert {
            padding: 22px 18px;
        }
    }

    .contact {
        padding: 98px 0 0;
    }

    .contact-title h2 {
        font-weight: 700;
        text-align: center;
        margin: 0 0 24px;
    }

    .contact-form {
        background: #cbb58b;
        position: relative;
        z-index: 2;
    }

    .contact-form h3 {
        font-weight: 700;
        color: #fff;
        margin: 0 0 24px;
    }

    .btn-submit {
        border: 3px solid #fff;
        color: #fff;
        padding: 13px 44px;
        font-size: 15px;
        margin: 8px 0 0;
    }

    .btn-submit:hover {
        border: 3px solid #fff;
        background: #fff;
        color: #cbb58b;
        -webkit-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
    }

    .contact-option {
        border-right: 1px solid #ad9566;
        padding: 45px 64px;
    }

    .contact-option .form-control {
        border-color: transparent;
    }

    .contact-address {
        padding: 45px 50px;
    }

    .contact-address h3 {
        font-weight: 700;
        margin: 0 0 24px;
    }

    .contact-details i {
        color: #fff;
        float: left;
    }

    .contact-details h6 {
        font-size: 19px;
        color: #fff;
        padding: 0 30px;
    }

    .contact-details p {
        color: #fff4e0;
        padding: 0 30px;
    }

    .contact-center {
        background: #ad9566;
        border-radius: 50%;
        text-align: center;
        width: 44px;
        height: 44px;
        padding: 10px 0;
        color: #fff;
        margin: 0 auto;
        top: -17em;
        position: relative;
        z-index: 10;
    }

    #map {
        height: 620px;
        width: 100%;
        margin: -250px 0 0;
    }

    @media(max-width:767px) {
        .contact-option {
            border: 0;
            padding: 20px 15px;
        }

        .contact-option_rsp {
            border-bottom: 1px solid #ad9566;
            padding: 5px 25px 30px;
        }

        .contact-center {
            display: none;
        }
    }

    .nav-menu2 .navbar-light .navbar-nav .nav-link {
        color: #2d2d2d;
        font-size: 16px;
        line-height: 2;
    }

    .nav-menu2 .navbar-light .navbar-nav .nav-link:hover {
        color: #cbb58b;
    }

    .nav-menu2 .navbar-nav>li {
        margin: 0 4px;
    }

    .about-style2 h2 {
        text-align: left;
    }

    .about-style2 p {
        text-align: left;
    }

    .about-style2 img {
        margin: 0;
        border-radius: 50%
    }

    .about-style2 .about-img {
        width: 200px;
        height: 200px;
        margin: 0 auto;
    }

    .event-img2 h3 {
        font-weight: 600;
        padding: 0;
        line-height: 1.5;
        margin-top: -8px;
    }

    .event-img2 span {
        color: #cbb58b;
    }

    .event-img2 p {
        padding: 10px 0 0;
    }

    .detailed_chart2 {
        padding: 97px 0;
        background: #cbb58b;
    }

    .faq {
        padding: 97px 0;
    }

    .login {
        padding: 97px 0;
    }

    .login .btn {
        width: 100%
    }

    .login .modal-content {
        border: 1px solid #ccc;
        padding: 20px;
    }

    .sign-up {
        padding: 97px 0;
    }

    .sign-up .form-control {
        margin-bottom: 10px;
    }

    .sign-up .btn {
        width: 100%
    }

    .radio-inline {
        margin-right: 10px;
    }

    .sign-up-form {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 3px;
    }

    .gallery {
        padding: 97px 0;
    }

    .gallery-title {
        font-size: 36px;
        color: #42b32f;
        text-align: center;
        font-weight: 500;
        margin-bottom: 70px;
    }

    .gallery-title:after {
        content: "";
        position: absolute;
        width: 7.5%;
        left: 46.5%;
        height: 45px;
        border-bottom: 1px solid #5e5e5e;
    }

    .filter-button {
        font-size: 18px;
        border: 0;
        border-radius: 5px;
        text-align: center;
        color: #2d2d2d;
        margin-bottom: 30px;
    }

    .filter-button:hover,
    .filter-button:active {
        font-size: 18px;
        border-radius: 5px;
        text-align: center;
        color: #cbb58b;
        background: 0 0 !important;
        border: 0 !important;
    }

    .btn-default:active .filter-button:active {
        color: #cbb58b;
        background: 0 0 !important;
        border: 0 !important;
    }

    .port-image {
        width: 100%
    }

    .gallery_product {
        margin-bottom: 30px;
    }

    .gallery-style {
        font-weight: 600;
        position: relative;
        padding-bottom: 10px;
        margin-bottom: 20px;
        text-align: center;
    }

    .notice {
        padding: 97px 0;
    }

    .notice-wrap {
        border-bottom: 1px solid #eaeaea;
        padding: 0 0 20px;
        margin: 20px 0;
    }

    .notice-wrap img {
        margin: 0 0 10px;
    }

    .notice-wrap h4 {
        font-weight: 600;
    }

    .notice-wrap span {
        color: #cbb58b;
    }

    .notice-wrap p {
        margin: 12px 0 0;
        line-height: 1.8;
    }

    .speech {
        padding: 97px 0;
    }

    .speech h2 {
        font-weight: 600;
        line-height: 1.3;
        position: relative;
        padding: 0 0 30px;
    }

    .speech h2:after {
        content: "";
        position: absolute;
        height: 5px;
        width: 52px;
        background: #cbb58b;
        left: 0;
        bottom: 0;
        margin: 7px 0 0;
    }

    .speech p {
        line-height: 1.8;
        margin: 30px 0;
    }

    .coming-soon {
        background: url(../images/coming-soon-img.jpg) no-repeat center center;
        -webkit-background-size: cover;
        background-size: cover;
        display: table;
        position: fixed;
        height: 100%;
        width: 100%;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .coming-soon-block {
        position: relative;
        top: 50%;
        -webkit-transform: trannslateY(-50%);
        -ms-transform: trannslateY(-50%);
        transform: trannslateY(-50%);
        text-align: center;
    }

    .coming-soon-block img {
        margin: 0 auto;
        display: block;
    }

    .coming-soon-block h1 {
        color: #fff;
        padding: 40px 0 10px;
        font-weight: 700;
    }

    .coming-soon-block p {
        color: #fff;
        font-size: 21px;
    }

    .coming-soon-block a {
        margin: 20px 0 0;
    }

    @media(max-width:380px) {
        .coming-soon-block {
            top: 58%
        }
    }

    .video-section .pattern-overlay {
        background-color: rgba(0, 0, 0, .5);
        padding: 110px 0 32px;
        min-height: 800px;
    }

    .video-section h1,
    .video-section h3 {
        text-align: center;
        color: #fff;
    }

    .video-section .buttonBar {
        display: none;
    }

    .player {
        font-size: 1px;
    }

    .video-title-block {
        position: absolute;
        top: 58%;
        left: 50%;
        -webkit-transform: translate(-50%, -42%);
        -ms-transform: translate(-50%, -42%);
        transform: translate(-50%, -42%);
    }

    @media(max-width:576px) {
        .video-title-block {
            top: 55%;
            left: 25%;
            -webkit-transform: translate(-17%, -43%);
            -ms-transform: translate(-17%, -43%);
            transform: translate(-17%, -43%);
        }
    }

    .landing-header {
        padding: 20px 0 98px;
    }

    .landing-logo {
        margin: 0 auto;
        display: block;
    }

    .landing-title h2 {
        color: #fff;
        font-weight: 600;
        position: relative;
        padding: 0 0 15px;
    }

    .landing-title h2:after {
        content: "";
        position: absolute;
        height: 3px;
        width: 50px;
        background: #cbb58b;
        left: 0;
        bottom: 0;
    }

    .landing-title p {
        color: #d2d1d0;
        line-height: 1.8;
        padding: 15px 0;
        font-weight: 100;
    }

    .landing-title h4 {
        font-weight: 600;
        margin: 0 0 20px;
        color: #fff;
    }

    .landing-title ul {
        margin: 0;
        padding: 0;
    }

    .landing-title ul li {
        list-style: none;
    }

    .landing-title ul li a {
        line-height: 1.8;
    }

    .landing-title ul li a:hover {
        color: #e6cfa2;
    }

    .landing-highlight {
        background: #cbb58b;
        padding: 20px;
        color: #fff;
        text-align: center;
    }

    .landing-highlight p {
        font-size: 20px;
    }

    .landing-form-wrap {
        background: #fff;
        padding: 25px;
        border-radius: 3px;
        border: 1px solid #cbb58b;
    }

    .landing-form-wrap .btn {
        width: 100%
    }

    .landing-form {
        padding: 65px 0 0;
    }

    .landing-testimonial_block {
        position: relative;
        background: #f1f1f1;
        padding: 30px 40px;
        z-index: 1;
    }

    .landing-testimonial_block i {
        font-size: 70px;
        color: #fff;
        position: absolute;
        z-index: -1;
    }

    .landing-testimonial_block p {
        font-size: 20px;
        z-index: 2;
        padding: 30px 0 0 8px;
    }

    .landing-testimonial_block h6 {
        padding: 0 0 0 8px;
        line-height: 1.5;
    }

    .teachers-single {
        padding: 98px 0;
    }

    .teachers-img_block {
        width: 80%;
        -webkit-box-shadow: 0 14px 28px -9px #ccc;
        box-shadow: 0 14px 28px -9px #ccc;
    }

    .teachers-img_block img {
        width: 100%
    }

    .teachers-title_block {
        text-align: center;
        display: block;
    }

    .teachers-title_block h4 {
        margin: 10px 0 6px;
    }

    .teachers-title_block h6 {
        margin: 0 0 5px;
    }

    .teachers-title_block ul {
        margin: 0 auto;
        display: inline-block;
        padding: 0;
    }

    .teachers-title_block ul li {
        list-style: none;
        float: left;
        margin: 0 6px 0 0;
    }

    .teacher-profile_block h4 {
        font-weight: 600;
        position: relative;
        padding: 0 0 12px;
        margin: 0 0 20px;
    }

    .teacher-profile_block h4:after {
        content: "";
        position: absolute;
        height: 3px;
        background: #cbb58b;
        width: 30px;
        bottom: 0;
        left: 0;
    }

    .teacher-profile_block h3 {
        font-weight: 600;
    }

    .teacher-profile_block span {
        font-weight: 600;
    }

    .teacher-profile_block p {
        padding: 12px 0;
        line-height: 1.8;
        margin: 0;
    }

    .teacher-profile_block .time {
        font-weight: 600;
        margin: 0;
        padding: 0;
    }

    .teacher-profile_block ul {
        padding: 0;
        margin: 10px 0 0;
    }

    .teacher-profile_block ul li {
        line-height: 2;
        list-style: none;
    }

    .teacher-profile_block ul li span {
        padding: 0 8px 0 0;
    }

    .teacher-profile_block ul li a {
        float: left;
        padding: 10px 0;
        margin: 0 8px 0 0;
    }

    .teacher-profile_block ul li a i {
        color: #fff;
    }

    .qualification_detaile {
        margin: 0;
    }

    .experiance {
        text-align: right;
    }

    @media(max-width:768px) {
        .experiance {
            text-align: left;
        }
    }

    .pricing {
        padding: 98px 0;
        background: #f3f3f3;
    }

    .price {
        list-style-type: none;
        border: 1px solid #eee;
        background: #fff;
        margin: 0;
        padding: 0;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
    }

    .price:hover {
        -webkit-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .03);
        box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .03);
    }

    .price .header {
        background-color: #111;
        color: #fff;
        font-size: 25px;
    }

    .bg-gold {
        background-color: #cbb58b !important;
    }

    .price li {
        border-bottom: 1px solid #eee;
        padding: 20px;
        text-align: center;
    }

    .price .grey {
        background-color: #eee;
        font-size: 20px;
    }

    .price .button {
        background-color: #cbb58b;
        border: none;
        color: #fff;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
        font-size: 18px;
    }

    .call-to_action {
        padding: 30px 0;
    }

    .mega-dropdown {
        position: static !important;
        width: 100%;
        top: 0;
    }

    .mega-dropdown-menu {
        padding: 20px 0;
        margin: 0;
        width: 100%;
        box-shadow: none;
        -webkit-box-shadow: none;
        border: none !important;
    }

    .mega-dropdown-menu>li>ul {
        padding: 0;
        margin: 0;
    }

    .mega-dropdown-menu>li {
        margin: 0;
        display: inline-block;
        width: 24%
    }

    @media(max-width:1200px) {
        .mega-dropdown-menu>li {
            vertical-align: top;
        }
    }

    @media(max-width:992px) {
        .mega-dropdown-menu>li {
            text-align: left;
            width: 100%;
            margin: 0 0 8px;
        }
    }

    @media(max-width:768px) {
        .mega-dropdown-menu>li {
            width: 100%
        }
    }

    .mega-dropdown-menu>li>ul>li {
        list-style: none;
    }

    .mega-dropdown-menu>li>ul>li>a {
        display: block;
        padding: 0;
        clear: both;
        font-weight: 400;
        line-height: 1.8;
        color: #999;
        white-space: normal;
    }

    .mega-dropdown-menu>li ul>li>a:hover,
    .mega-dropdown-menu>li ul>li>a:focus {
        text-decoration: none;
        color: #444;
    }

    .mega-dropdown-menu .dropdown-header {
        color: #cbb58b;
        font-size: 18px;
        font-weight: 700;
        margin: 0 0 10px;
    }

    .mega-dropdown-menu form {
        margin: 3px 20px;
    }

    .mega-dropdown-menu .form-group {
        margin-bottom: 3px;
    }

    .dropdown-header {
        padding: 0;
    }

    .dropdown-item.dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .6em;
        vertical-align: middle;
        content: "";
        border-left: .3em solid;
        border-top: .3em solid transparent;
        border-bottom: .3em solid transparent;
    }

    .header-topbar {
        padding: 10px;
        background: #2d2d2d;
    }

    .header-top_address {
        color: #d8d8d8;
        font-size: 15px;
    }

    .header-top_address .header-top_list {
        display: inline-block;
        margin-right: 22px;
    }

    @media(max-width:768px) {
        .header-top_address .header-top_list: last-child {
            display: none;
        }
    }

    @media(max-width:480px) {
        .header-top_address .header-top_list: nth-child(2) {
            display: none;
        }
    }

    .header-top_address .header-top_list span {
        color: #cbb58b;
        margin-right: 10px;
        font-size: 14px;
    }

    @media(max-width:768px) {
        .header-top_address {
            display: inline-block;
        }
    }

    .header-top_login,
    .header-top_login2 {
        float: right;
        color: #fff;
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s;
        font-size: 15px;
    }

    .header-top_login a,
    .header-top_login2 a {
        color: #fff;
    }

    .header-top_login a:hover,
    .header-top_login a:focus,
    .header-top_login2 a:hover,
    .header-top_login2 a:focus {
        color: #cbb58b;
    }

    @media(max-width:574px) {
        .header-top_login {
            display: none;
        }
    }

    @media(min-width:574px) {
        .header-top_login2 {
            display: none;
        }
    }

    .navbar2 {
        border-radius: 0;
        -webkit-transition: all .3s ease-out;
        -moz-transition: all .3s ease-out;
        -o-transition: all .3s ease-out;
        transition: all .3s ease-out;
        background: #fff;
    }

    .affix {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
    }

    .affix {
        background-color: #fff;
        border-bottom: 1px solid #e6e6e6;
        -webkit-box-shadow: 0 3px 12px -5px rgba(0, 0, 0, .2);
        box-shadow: 0 3px 12px -5px rgba(0, 0, 0, .2);
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: 1px;
    }

    .dropdown-submenu>a:after {
        display: block;
        content: "";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover>a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }

    @media(min-width:991px) {
        .dropdown-submenu: hover>.dropdown-menu {
            display: block;
            -webkit-transition: all .2s ease;
            -o-transition: all .2s ease;
            transition: all .2s ease;
        }

        .form-header {
            margin: -30px -30px 20px;
            padding: 30px 30px 10px;
            text-align: center;
            background: #bfa97f;
            border-bottom: 1px solid #eee;
            color: #fff;
        }

        .form-header h2 {
            font-size: 34px;
            font-weight: bold;
            margin: 0 0 10px;
            font-family: 'Pacifico', sans-serif;
        }

        .form-header p {
            margin: 20px 0 15px;
            font-size: 17px;
            line-height: normal;
            font-family: 'Courgette', sans-serif;
        }
    }

</style>
@endsection
@section('js')
<script>
    $("#frmcast").change(function () {
        if ($(this).val() == "Open") {
            $('#castupload').hide();
            $('#myfile2').removeAttr('required');
            $('#myfile2').removeAttr('data-error');
        } else if ($(this).val() == "") {
            $('#castupload').hide();
            $('#myfile2').removeAttr('required');
            $('#myfile2').removeAttr('data-error');
        } else {
            $('#castupload').show();
            $('#myfile2').attr('required', '');
            $('#myfile2').attr('data-error', 'This field is required.');
        }
    });
    $("#frmcast").trigger("change");
</script>
@endsection

@extends('layouts.front')
@section('content')
    <div class="about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="height:25vh"></div>
                    <h1>Admission</h1>
                    <div style="height:8vh"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container-fluid text-center ">
            <div class="alert alert-danger" role="alert">
                <p class="text-uppercase"><i class="fa fa-warning  " aria-hidden="true"></i><b>Students are adviced to go
                        through the instructions before applying !!! </b> </p>
                <div style="height:2vh"></div>
                <p class="text-white"> For technocial difficulties, take screenshot and send your queries to <a
                        class="alert-link" href="mailto:trzthlr@gmail.com"> trzthlr@gmail.com</a> <br>
                    (TECHNICAL ASSISTANCE ONLY !!!) </p>
            </div>
        </div>
        
        <section class="admission-form_rules">
           
                <div style="height:4vh"></div>
                <div class="container">
                    <div style="height:4vh"></div>
                    <div class="sform-header">
                        <h2> Registration And Addmission </h2>
                        <hr style="border: 2px solid #53815a; border-radius: 5px;">
                    </div>

                </div>
                {{-- <h1 class="text-center">Coming Soon !!!</h1> --}}
                <section class="admission-form_rules">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 admission-form_mr">
                                <h2>For First year</h2>
                                <p class="text-justify"><b>Only For Students seeking admission to first year of courses</b></p>
                                <div class="row">
                                    <div class="container">
                                        <h3>Step 1 : Registration:</h3>
                                        <hr style="border: 2px solid #53815a; border-radius: 5px; ">
                                        <p>Students seeking admission to first year non-grant courses must undergo
                                            registration by clicking the link below </p>
                                        <div style="height:2vh"></div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <a href="/admission/nongrant_registration" target="_blank"
                                                class="tn btn-warning btn-3">REGISTER HERE</a>
                                            <br>
                                            <div style="height:6vh"></div>
                                        </div>

                                        <div class="col-md-3"></div>
                                        <h3>Step 2 : Admission confirmation and Fee Pyament (will available soon) </h3>
                                        <hr style="border: 2px solid #53815a; border-radius: 5px; ">
                                        <p>After the registration process is complete institute will scrutinize and select
                                            the candidates based on merit list. Students can check their selection status as
                                            well as proceed to admission with the link below</p>
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                {{-- <a href="#" target="_blank" class="btn btn-warning btn-3">CONFIRM ADMISSION HERE</a> --}}
                                                <br>
                                                <div style="height:4vh"></div>
                                            </div>

                                            <div class="col-md-3"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 admission-form_mr" style="border-left: 6px solid #53815a;
                                      height: 700px;">
                                <h2>For Second and Third year</h2>
                                <p class="text-justify"><b> Existing students of Second and Third year need to apply here to
                                        pay the fees</b></p>
                                <div style="height:8vh"></div>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <a href="/admission/admission_form" target="_blank"
                                            class="tn btn-warning btn-3">ADMISSION HERE</a>
                                        <br>
                                        <div style="height:4vh"></div>
                                    </div>

                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
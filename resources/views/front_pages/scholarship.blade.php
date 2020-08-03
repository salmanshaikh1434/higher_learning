@extends('layouts.front')
@section('content')

<div class="about_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="height:16vh"></div>
                <h1>Scholarships</h1>
                <div style="height:8vh"></div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <section class="admission_form">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-5">
                    <img src="/assets/images/front_end/badge-icon.png" class="img-fluid" alt="#">
                    <h2>Scholarships</h2>
                </div>
            </div>
            <div class="button-toggle">

                <button class="accordion">EBC Freeship</button>
                <div class="panel">
                    <p>Students whose parent's / guardian's annual income from all sources is below Rs. 1,00,000/- are
                        eligible for EBC freeship.</p>
                </div>

                <button class="accordion">Primary / Secondary Teacher's Concession </button>
                <div class="panel">
                    <p>Students whose parents / guardians are primary / school teachers are eligible for fees
                        concession. Repeaters are not eligible for this facility. </p>
                </div>

                <button class="accordion">Ex-Servicemen Concession</button>
                <div class="panel panel-last">
                    <p>Students whose parents / guardians are servicemen / Ex-servicemen are eligible for fees
                        concession. </p>
                </div>
                <button class="accordion">Freedom Fighter Scholarship </button>
                <div class="panel">
                    <p>Students whose parents / guardians are freedom fighters are eligible for fees concession and
                        scholarships. Repeaters are not eligible for this facility. </p>
                </div>

                <button class="accordion">GOI Scholarships for SC, ST, VJNT, OBC, SBC (for income below Rs. 1 lakh)
                </button>
                <div class="panel">
                    <p>Students belonging to SC, ST, VJNT, OBC and SBC are eligible for fees concession and scholarship.
                        Repeaters are not eligible for this facility. </p>
                </div>

                <button class="accordion">GOI Freeship for SC, ST, VJNT, OBC, SBC (For income above Rs. 1 lakh)
                </button>
                <div class="panel">
                    <p>Students belonging to SC, ST, VJNT, OBC, and SBC are eligible for fees concession only. Repeaters
                        are not eligible for this facility. </p>
                </div>

                <button class="accordion">Scholarship for Physically Handicap </button>
                <div class="panel">
                    <p>Students who are physically handicapped are eligible for a scholarship. Repeaters are not
                        eligible for this facility. </p>
                </div>

                <button class="accordion">Minority Communities Scholarship </button>
                <div class="panel">
                    <p>Students belonging to the Muslim, Christian, Buddha, Sikh and Parsi communities are eligible for
                        the scholarship. </p>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection

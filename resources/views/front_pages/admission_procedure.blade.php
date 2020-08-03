@extends('layouts.front')
@section('content')
<div class="about_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="height:16vh"></div>
                <h1>Admission Procedure</h1>
                <div style="height:8vh"></div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <section class="admission-form_rules">
        <div class="container">
            <div class="row">
                <div class="col-md-7 admission-form_mr">
                    <h2>Admission Rules</h2>
                    <p><b>Candidate desirous of taking admission must produce original and three attested copies of the
                            following documents before the Admission committee along with duly filled in admission form
                            which is enclosed with the prospectus;</b></p>
                </div>
                <div class="col-md-5 admission-form_mr">
                    <ul class="admission-form_listed">

                        <li>Leaving Certificate / Transfer Certificate.</li>
                        <li>Marks Memo / Memos of last Qualifying Examination.</li>
                        <li>Caste Certificate if any.</li>
                        <li>Migration Certificate in case of student coming from other Boards.</li>
                        <li>Eligibility form duly filled along with admission form</li>
                        <li>Eligibility form duly filled along with admission form</li>
                        <li>Duly filled in E.B.C. form, if applicable.</li>
                        <li>Latest Passport size photographs (Three).</li>
                        <div style="height: 4vh;"></div>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info" role="alert">
                        <p><i class="fa fa-sticky-note-o" aria-hidden="true"></i>Admissions to BBA / BCA and all PG
                            courses is based on CET. Refer respective links below.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <h3>Enterance Test links:</h3>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" class="accordian-link" data-parent="#accordion"
                                    href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    BBA
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-block">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a class="collapsed accordian-link" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    BCA
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-block">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a class="collapsed accordian-link" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    MSc
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-block">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <!-- <section class="admission_form">
    <div class="container">
    <div class="row">
    <div class="col-md-12 my-5">
    <img src="images/badge-icon.png" class="img-fluid" alt="#">
     <h2>Admission Form</h2>
    </div>
    </div>
    <form action="https://demo.web3canvas.com/themeforest/unisco/php/admission.php" method="post" id="admissionform">
    <div class="row">
    <div class="col-md-6">
    <div class="row form-group">
    <div class="col-lg-4">
    <label>
    Course Name</label>
    </div>
    <div class="col-lg-8">
    <select class="form-control custom-select" name="course" required>
    <option selected="" value="">Select</option>
    <option value="select">One</option>
    <option value="select">Two</option>
    <option value="select">Three</option>
    <option value="select">Four</option>
    </select>
    </div>
    </div>
    <div class="row form-group">
    <div class="col-lg-4">
    <label>
    Join date</label>
    </div>
    <div class="col-lg-8">
    <input type="date" name="join" class="form-control" required>
    </div>
    </div>
    <div class="row form-group">
    <div class="col-lg-4">
    <label>
    First name</label>
    </div>
    <div class="col-lg-8">
    <input type="text" name="first_name" class="form-control" required>
    </div>
    </div>
    <div class="row form-group">
    <div class="col-lg-4">
    <label>
    Last name</label>
    </div>
    <div class="col-lg-8">
    <input type="text" name="last_name" class="form-control" required>
    </div>
    </div>
    <div class="row form-group">
    <div class="col-lg-4">
    <label>
    Email address</label>
    </div>
    <div class="col-lg-8">
    <input type="email" name="email" class="form-control" required>
    </div>
    </div>
    <div class="row form-group">
    <div class="col-lg-4">
    <label>
    Phone</label>
    </div>
    <div class="col-lg-8">
    <input type="text" name="phone" class="form-control">
    </div>
    </div>
    <div class="row form-group">
    <div class="col-lg-4">
    <label>
    Date of birth </label>
    </div>
    <div class="col-lg-8">
    <input type="date" name="dob" class="form-control" required>
    </div> 
    </div>
    </div>
    <div class="col-md-6">
    <div class="row form-group">
    <div class="col-lg-4">
    <label>
    Address</label>
    </div>
    <div class="col-lg-8">
    <div class="form-group">
    <input type="text" name="address1" class="form-control" placeholder="City" required>
    </div>
    <div class="form-group mb-0">
    <input type="text" name="address2" class="form-control" placeholder="State" required>
    </div>
    </div>
    </div>
    <div class="row form-group">
    <div class="col-lg-4">
    <label>
    Education</label>
    </div>
    <div class="col-lg-8">
    <input type="text" name="education" class="form-control" required>
    </div>
    </div>
    <div class="row form-group">
    <div class="col-lg-4">
    <label>
    Message</label>
    </div>
    <div class="col-lg-8">
    <textarea class="form-control" name="message" placeholder="Any other comments?" rows="11"></textarea>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center">
    <button type="submit" class="btn btn-default btn-courses mt-4" id="js-admission-btn">Submit Now</button>
    </div>
    <div class="col-md-12">
    <div id="js-admission-result" data-success-msg="Success, Your application has been sent" data-error-msg="Oops! Something went wrong"></div>
    
    </div>
    </div>
    </form>
    </div>
    </section> -->

</div>



@endsection

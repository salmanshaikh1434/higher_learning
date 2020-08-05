@extends('layouts.front')
@section('content')
    <div class="about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Admissions</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="login sign-up" style="background:#fff;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-8 well well-sm">
                    @if (responseMessages($errors))
                        {{ responseMessages($errors) }}"
                    @endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 well well-sm">
                    <form action="/admission/save_admission_form" class="form sign-up-form" style="background:#DCDCDC"
                        method="POST" enctype="multipart/form-data">
                        <div class="row justify-content-center">
                            <div class="form-header">
                                <h2> Admission form for Existing Students</h2>
                            </div>

                            <p class="text-center text-danger">Fees
                                is to be paid using online mode only eg. Internet banking or UPI on the account
                                credentails
                                below<br>
                                Screenshot of online transaction is compulsory to attached in the form </p>
                            <table calss="text-center">
                                <th calss="text-center">Bank Details</th>
                                <tr>
                                    <td>PAYEE NAME : </td>
                                    <td>DR.RAFIQ ZAKARIA CENTRE FOR HIGHER LEARNING & ADVANCED RES</td>
                                </tr>
                                <tr>
                                    <td>Account Number :</td>
                                    <td>03211500003940</td>
                                </tr>
                                <tr>
                                    <td>IFSC CODE:</td>
                                    <td>DCBL0000032</td>
                                </tr>
                                <tr>
                                    <td>Bank Name :</td>
                                    <td>DCB BANK </td>
                                </tr>
                                <tr>
                                    <td>Branch :</td>
                                    <td>Aurangabad Branch</td>
                                </tr>
                            </table>
                        </div>

                        @csrf
                        <p class="text-center text-danger">Only for students continuing admission to Second and Third Year
                            UG and PG Courses</p>
                        <hr style="border: 2px solid #cbb58b; border-radius: 5px;">
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <label class="ldesc">
                                    First Name : </label>
                                <span class="justify-content-end text-muted">As on Documents </span>
                                <div class="form-group">
                                    <input class="form-control" name="firstname" placeholder="First Name" type="text"
                                        required="" autofocus="" value="{{ old('firstname') }}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <label>
                                    Middle Name :</label>
                                <div class="form-group">
                                    <input class="form-control" name=middlename placeholder="Middle Name" type="text"
                                        required="" value="{{ old('middlename') }}">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <label>
                                    Last Name :</label>
                                <div class="form-group">
                                    <input class="form-control" name="lastname" placeholder="Last Name" type="text"
                                        required="" value="{{ old('lastname') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <label>
                                    Mobile Number :</label>


                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" placeholder="Your Mobile Number"
                                        pattern="[0-9]{10}" required="" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <label>
                                    Email Address :</label>


                                <div class="form-group">
                                    <input class="form-control" name="email" placeholder="Your Email" type="email"
                                        required="" value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <label>
                                    Date of Birth :</label>

                                <div class="form-group">
                                    <input class="form-control" type="date" name="dob" class="form-control" required
                                        value="{{ old('dob') }}">
                                </div>

                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Gender :</label><br>
                                    <div style="height:2vh;"></div>
                                    <label class="radio-inline">
                                        <input type="radio" @if (old('sex') == 'male') checked
                                        @endif name="sex"
                                        id="inlineCheckbox1" value="male" required="">Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" @if (old('sex') == 'female')
                                        checked @endif name="sex"
                                        id="inlineCheckbox2" value="female" required="">male
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
                                <label>course to which admission is needed</label>
                                <div class="form-group">
                                    <select class="form-control custom-select" id="select_courses" name="course" required>
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
                                        <option value="B.Sc biotech 2yr ">B.Sc Bio-Technology Second Year</option>
                                        <option value="B.Sc biotech 3yr ">B.Sc Bio-Technology First Year</option>
                                        <option value="BBA 2yr">BBA Second Year</option>
                                        <option value="BBA 3yr">BBA First Year</option>
                                        <option value="BCA 2yr">BCA Second Year</option>
                                        <option value="BCA 3yr">BCA First Year</option>
                                        <option value="BCS 2yr">BCS Second Year</option>
                                        <option value="BCS 3yr">BCS First Year</option>
                                        <option value="B.Com E-Commerce 2yr">B.Com E-Commerce Second Year</option>
                                        <option value="B.Com E-Commerce 3yr">B.Com E-Commerce First Year</option>
                                        <!-- pg courses -->
                                        <option value="M.Com 2yr">M.Com First Year</option>
                                        <option value="M.Sc Gen. Chemistry 2 yr">M.Sc Gen. Chemistry First Year</option>
                                        <option value="M.Sc Analytical Chemistry 2 yr">M.Sc Analytical Chemistry First Year
                                        </option>
                                        <option value="M.Sc Industrial Chemistry 2 yr">M.Sc Industrial Chemistry First Year
                                        </option>
                                        <option value="M.Sc Mathematics 2 yr">M.Sc Mathematics First Year</option>
                                        <option value="M.Sc Microbiology 2 yr">M.Sc Microbiology First Year</option>
                                        <option value="M.Sc Biotechnology 2 yr">M.Sc Biotechnology First Year</option>
                                        <option value="M.Sc Computer Science 2 yr">M.Sc Computer Science First Year</option>
                                        <option value="Mater of Personnel mgmt 2yr">Mater of Personnel Management First Year
                                        </option>
                                        <!-- diploma courses drilling technology only 1yr course include in admission-->
                                        <!-- <option vlaue="PGD in Drilling Technology">PGD in Drilling Technology</option> -->
                                        <!-- <option value="Other">Other</option> -->
                                    </select>
                                </div>

                            </div>
                            <div class="col-xs-6 col-md-6">
                                <label>% Marks Obtained </label>
                                <div class="form-group">
                                    <input class="form-control" name="percentage" placeholder="% Marks Obtained"
                                        type="number" required="" value="{{ old('percentage') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <label>Last Institute Attended</label>
                                <div class="form-group">
                                    <input class="form-control" name="lastinst" min="35" max="100"
                                        placeholder="Last Institute Attended" type="text" required=""
                                        value="{{ old('lastinst') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <label>Amount Paid</label>
                                <div class="form-group">
                                    <input class="form-control" name="amt_paid" placeholder="  Fees Amount Paid"
                                        type="number" required="" value="{{ old('amt_paid') }}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <label>Transaction Number </label>
                                <div class="form-group">
                                    <input class="form-control" name="txn_id" min="35" max="100"
                                        placeholder=" Provide Transaction number or Reference number" type="text"
                                        required="" value="{{ old('txn_id') }}">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group" id="transid">
                                    <label for="mytrans">Upload Snapshot of online transaction </label>
                                    <span>Max Size 200kb</span>
                                    <input type="file" id="mytrans" name="txncopy" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group" id="photop">
                                    <label for="pphoto">Upload Passport size photograph </label>
                                    <span>Max Size 200kb</span><br>
                                    <input type="file" id="photo" name="photo" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <label for="myfile">Upload Scanned Copy of Last Qualifying Exam </label>
                                <span>Max Size 200kb</span>
                                <div class="form-group">
                                    <input type="file" id="myfile" name="qualification_certificate" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group" id="castupload">
                                    <label for="myfile2">Upload Scanned Copy of Cast Certificate</label>
                                    <span>Max Size 200kb</span>
                                    <input type="file" id="myfile2" name="cast_certificate">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">


                                <label class="checkbox-inline"><input type="checkbox" name="indian" id="indinat"
                                        value="indian" required=""> <strong>&nbsp;&nbsp;&nbsp;&nbsp;I Acknowledge that I am
                                        an Indian National </strong></label>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">


                                <label class="checkbox-inline"><input type="checkbox" name="acceptna" id="acceptna"
                                        value="accept" required=""> <strong> &nbsp;&nbsp;&nbsp; I have read and agreed to
                                        the <a href="#">Terms &amp; Conditions</a>
                                    </strong></label>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-warning" id="js-subscribe-btn">CONFIRM AND SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="feesdetails" tabindex="-1" role="dialog" aria-labelledby="fees_details" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Fees Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <tr>
                            <td>M.Sc Gen. Chemistry </td>
                            <td>16885</td>
                        </tr>
                        <tr>
                            <td>M.Sc Analytical Chemistry </td>
                            <td>16885</td>
                        </tr>
                        <tr>
                            <td>M.Sc Industrial Chemistry</td>
                            <td>16885</td>
                        </tr>
                        <tr>
                            <td>M.Sc Microbiology </td>
                            <td>26885</td>
                        </tr>
                        <tr>
                            <td>M.Sc Biotechnology</td>
                            <td>26685</td>
                        </tr>
                        <tr>
                            <td>M.Sc Mathematics</td>
                            <td>6885</td>
                        </tr>
                        <tr>
                            <td>M.Sc Computer Science</td>
                            <td>32885</td>
                        </tr>
                        <tr>
                            <td>M.Com</td>
                            <td>4185</td>
                        </tr>
                        <tr>
                            <td>Mater of Personnel Management (MPM)</td>
                            <td>5885</td>
                        </tr>
                        <tr>
                            <td>Diploma in Drilling Technologies</td>
                            <td>4885</td>
                        </tr>
                        <tr>
                            <td>BBA </td>
                            <td>17885</td>
                        </tr>
                        <tr>
                            <td>BCA</td>
                            <td>23885</td>
                        </tr>
                        <tr>
                            <td>BCS</td>
                            <td>23885</td>
                        </tr>
                        <tr>
                            <td>B.Sc Biotechnology</td>
                            <td>12885</td>
                        </tr>
                        <tr>
                            <td>B.Com E-Commerce</td>
                            <td>5885</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        var courses = [{
                "name": "M.Sc Gen. Chemistry ",
                "fees": 16885
            },
            {
                "name": "M.Sc Analytical Chemistry ",
                "fees": 16885
            },
            {
                "name": "M.Sc Zoology",
                "fees": 14885
            },
            {
                "name": "M.Sc Botany",
                "fees": 14885
            },
            {
                "name": "M.Sc Industrial Chemistry",
                "fees": 16885
            },
            {
                "name": "M.Sc Microbiology ",
                "fees": 26885
            },
            {
                "name": "M.Sc Mathematics",
                "fees": 6885
            },
            {
                "name": "M.Sc Computer Science",
                "fees": 32885
            },
            {
                "name": "M.A Sociology",
                "fees": 3885
            },
            {
                "name": "M.A English",
                "fees": 3885
            },
            {
                "name": "M.A Urdu",
                "fees": 3885
            }
        ];
        var courseList = '<option selected="" value="">Select</option>';
        $(document).ready(function() {
            courses.forEach(e => {
                courseList += '<option value="' + e.name + '">' + e.name + '</option>';
            });
            $("#select_courses").html(courseList)
        });

        $("#select_courses").change(function(e) {
            e.preventDefault();
            var selected = $(this).val();
            feesFilter(selected);

        });
        $("#frmcast").change(function() {
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
        $("#frmqfy").trigger("change");

        $("#frmcast").change(function() {
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

        function feesFilter(name) {
            courses.forEach(e => {
                if (e.name == name) {
                    $("#amt_paid").attr('min', e.minimum);
                    alert("You are selected " + e.name + " course. Total fees for this course:- " + e.fees);
                    return false;
                }
            });
        }

    </script>
@endsection

@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
        <div class="row filter_rows">
            <!-- Button trigger modal -->
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Photo</th>
                        <th>First Name </th>
                        <th>Middle Name </th>
                        <th>Last Name </th>
                        <th>Phone </th>
                        <th>Email </th>
                        <th>Date of Birth </th>
                        <th>Gender </th>
                        <th>Cast </th>
                        <th>Course </th>
                        <th>Last exam </th>
                        <th>Percentage </th>
                        <th>Last institute </th>
                        <th>Transaction id</th>
                        <th>Last Exam (Document)</th>
                        <th>Cast Certificate</th>
                        <th>Transaction Proof</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($list as $lists)
                        <tr>
                            <td>{{ $lists->id }}</td>
                            <td><a href="/uploads/registration/{{ $lists->attachment_photo }}" target="_blank"
                                    rel="noopener noreferrer"><img
                                        src="/uploads/registration/{{ $lists->attachment_photo }}" alt="profile"
                                        height="150px" width="auto"></a></td>
                            <td>{{ $lists->firstname }}</td>
                            <td>{{ $lists->middlename }}</td>
                            <td>{{ $lists->lastname }}</td>
                            <td>{{ $lists->phone }}</td>
                            <td>{{ $lists->email }}</td>
                            <td>{{ $lists->dob }}</td>
                            <td>{{ $lists->sex }}</td>
                            <td>{{ $lists->cast }}</td>
                            <td>{{ $lists->course }}</td>
                            <td>{{ $lists->lastexam }}</td>
                            <td>{{ $lists->percentage }}</td>
                            <td>{{ $lists->lastinst }}</td>
                            <td>{{ $lists->txn_id }}</td>
                            <td> <a href="/uploads/registration/{{ $lists->attachment_last_exam }}" target="_blank"
                                    rel="noopener noreferrer">{{ $lists->attachment_last_exam }}</a></td>
                            <td> <a href="/uploads/registration/{{ $lists->attachment_cast_certificate }}" target="_blank"
                                    rel="noopener noreferrer">{{ $lists->attachment_cast_certificate }}</a></td>
                            <td> <a href="/uploads/registration/{{ $lists->attachment_txncopy }}" target="_blank"
                                    rel="noopener noreferrer">{{ $lists->attachment_txncopy }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#dataTable").dataTable({
                dom: 'Bfrtip',
                paging: true,
                buttons: [{
                        extend: 'excelHtml5',
                        title: 'Higher learning Center || Provisional Registration Data',
                        exportOptions: {
                            columns: ':visible',
                            columns: [0, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]
                        },
                    },
                    // {
                    //     extend: 'pdfHtml5',
                    //     title: 'Maulana Azad College || Provisional Registration Data',
                    //     orientation: 'landscape',
                    //     exportOptions: {
                    //         columns: [0, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]
                    //     }
                    // },
                ]
            });
        });

    </script>
@endsection

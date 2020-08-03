@extends('layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Provisional Student List</h1>
    <div class="row">
        <!-- Button trigger modal -->
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Sr.</th>
                    <th>First Name	</th>
                    <th>Middle Name	</th>
                    <th>Last Name	</th>
                    <th>Phone	</th>
                    <th>Email	</th>
                    <th>Date of Birth	</th>
                    <th>Sex	</th>
                    <th>Cast	</th>
                    <th>Course	</th>
                    <th>Last exam	</th>
                    <th>Percentage	</th>
                    <th>Last institute	</th>
                </tr>
            </thead>
            <tbody>
              
                @foreach ($provisional_list as $lists)
                <tr>
                   <td>{{ $lists->id }}</td>
                    <td>{{ $lists->firstname	}}</td>
                    <td>{{ $lists->middlename	}}</td>
                    <td>{{ $lists->lastname	}}</td>
                    <td>{{ $lists->phone	}}</td>
                    <td>{{ $lists->email	}}</td>
                    <td>{{ $lists->dob	}}</td>
                    <td>{{ $lists->sex	}}</td>
                    <td>{{ $lists->cast	}}</td>
                    <td>{{ $lists->course	}}</td>
                    <td>{{ $lists->lastexam	}}</td>
                    <td>{{ $lists->percentage	}}</td>
                    <td>{{ $lists->lastinst}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
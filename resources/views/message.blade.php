@extends('layouts.front')
@section('content')
    <div class="container">
        <center>
            <div class="col-xs-12 col-sm-12 col-md-12">
                @if (responseMessages($errors))
                    {{ responseMessages($errors) }}"
                @else
                    <script>
                        setTimeout(function() {
                            window.location.href = '/';
                        }, 10000);

                    </script>
                @endif
            </div>
            <p>your are automatically redirected to home after 10 sec. if not working <a href="/">click here</a> </p>
        </center>
    </div>
@endsection

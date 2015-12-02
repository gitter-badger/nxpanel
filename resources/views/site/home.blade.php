@extends('master')

<div class="container-header">
    <div class="container">

    </div>
</div>

@section('container-main')
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    test ...
                </div>
            </div>

        </div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if(Auth::check())
                        {{Auth::user()->roles()->first()->permissions()->first()->name}}
                    @else

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
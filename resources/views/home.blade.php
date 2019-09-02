@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="links">
                            <a class="btn btn-success" href="{{url('/onboard-insight')}}">Onboard progress Insights</a>
                            <a class="btn btn-info" href="https://github.com/nteej/laravel-highchart">Git Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

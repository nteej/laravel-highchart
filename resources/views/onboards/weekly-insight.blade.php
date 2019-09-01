@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Weekly Insights</div>

                    <div class="card-body">
                        <div id="vue-insights">
                            <insight></insight>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

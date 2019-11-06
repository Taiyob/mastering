@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">About of {{Auth::user()->name}}</div>

                <div class="card-body">
                    {{Auth::user()->name}}
                    {{Auth::user()->phone}}
                    {{Auth::user()->email}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

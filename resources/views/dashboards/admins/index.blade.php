@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <h3>Hi Admin : {{Auth::user()->name}},</h3>
                <hr>
                This is Dashboard

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <hr>
                <div class="container">
                    <h1>Users List :</h1>
                    <ul>
                        @foreach ($users as $item)
                            <li>{{$item->name}}, {{$item->email}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

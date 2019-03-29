@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panneau de gestion</div>

                <div class="d-flex flex-column card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/categories">Categories</a>
                    <a href="/categories">product</a>
                    <a href="/categories">users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

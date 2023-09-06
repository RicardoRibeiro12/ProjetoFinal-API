@extends('layouts.app')

@section('content')
<div class="bg-container"></div>
<div class="container">
    <div class="container mt-5">
        <h1 class="mb-4">User Profile</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                <h5 class="mb-4"><b><label for="user-id" class="form-label">User ID:</label></b></h5>
                    <span id="user-id" class="form-control-plaintext">{{$userdetails[0]->id}}</span>
                </div>
                <div class="mb-3">
                <h5 class="mb-4"><b><label for="user-email" class="form-label">Email:</label></b></h5>
                    <span id="user-email" class="form-control-plaintext">{{$userdetails[0]->email}}</span>
                </div>
                <div class="mb-3">
                <h5 class="mb-4"><b><label for="api-token" class="form-label">API Token:</label></b></h5>
                    <span id="api-token" class="form-control-plaintext">{{$userdetails[0]->api_token}}</span> <!-- Display a masked or truncated token -->
                </div>
            </div>
        </div>
    </div>
@endsection
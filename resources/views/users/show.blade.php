@extends('layouts.master')

@section('content')
<div class="container">
    <div class="mb-4">
        <a href="{{ route('users.home') }}" class="text-primary">Back</a>
    </div>
    <div class="mb-3">
    <label for="name"class="form-label">Name</label>
    <input type="text" value="{{ $user->name }}" class="form-control" disabled >
    </div>
    <div class="mb-3">
    <label for="email"class="form-label">Email Address</label>
    <input type="text" value="{{ $user->email }}" class="form-control" disabled>
     </div>
</div>
@endsection

@extends('layouts.alternate')

@section('title')
Contact | Catch A Vibes
@endsection

@section('body')
<div class="contact-clean container">
        <form method="post">
            <h1 class="">Contact us</h1>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
@endsection

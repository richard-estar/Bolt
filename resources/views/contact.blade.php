@extends('layouts.main')

@section('title')
Contact | Catch A Vibes
@endsection

@section('body')

<div class="contact-clean container">
    <div class="booking_title">
    Contact us
    </div>

        <form method="post">
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
@endsection

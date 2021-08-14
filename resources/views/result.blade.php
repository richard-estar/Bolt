@extends('layouts.alternate')

@section('title')
    Booking | Catch A Vibes
@endsection

@section('body')
<div class="container">
    <h1>YOUR BOOKING IS NOW COMPLETE!</h1>
    <br>
    <p>
        Booking Number :{{$transactionId}} <br>
        Destinations : {{$destinations}} <br>
        Total Charged : ${{$total}} <br>
        Date of Tour :{{$date}} <br>
        Number of Guests : {{$guests}}<br>
    <br>
        An Email has been sent with all your booking info.<br><br>
        If you have any questions email info@info.com
    </p>
</div>

<script type="text/javascript">
    // Callback
    window.onbeforeunload = function(e) {
        // Turning off the event
        e.preventDefault();
    }
</script>
@endsection

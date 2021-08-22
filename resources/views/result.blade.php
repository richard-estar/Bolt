@extends('layouts.alternate')

@section('title')
    Booking | Catch A Vibes
@endsection

@section('body')
<div class="container">
    @if ($result == 1)
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
    @elseif ($result == 2)
        <h1>YOUR BOOKING IS PLACED!</h1>
        <br>
        <p>
            Booking Number :{{$transactionId}} <br>
            Destinations : {{$destinations}} <br>
            Date of Tour :{{$date}} <br>
            Number of Guests : {{$guests}}<br>
            You will need to pay a total of  : ${{$total}} before being admitting on your tour<br>
        <br>
            An Email has been sent with all your booking info.<br><br>
            If you have any questions email info@info.com
        </p>
    @else
        <h1>THERE WAS AN ERROR PROCESSING YOUR TRANSACTION</h1>
        <br>
        <p>
           <h3>Possible Reasons :</h3> <br>
           <ol>
               <li>You may have insufficient funds to process the transation.</li>
               <li>You may have entered incorrect card details</li>
               <li>You may be using American Express </li>
           </ol>
        <br>

            If it was none of the above and you have any questions email info@info.com
        </p>
    @endif

</div>

<script type="text/javascript">
    // Callback
    window.onbeforeunload = function(e) {
        // Turning off the event
        e.preventDefault();
    }
</script>
@endsection

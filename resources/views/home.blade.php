@extends('layouts.app')
<title>Stadsbrouwhuis</title>

@section('content')

<script>

Notification.requestPermission().then(function(result) {
  console.log(result);
});

function notifyMe() {
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support system notifications");
  }

  // Let's check whether notification permissions have already been granted
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var notification = new Notification("Viltje 1 is leeg");
  }

  // Otherwise, we need to ask the user for permission
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      // If the user accepts, let's create a notification
      if (permission === "granted") {
        var notification = new Notification("Viltje 1 is leeg");
      }
    });
  }

  // Finally, if the user has denied notifications and you
  // want to be respectful there is no need to bother them any more.
}

@foreach ($newbeer as $new)
  var status ="{{ $new->full }}";
  if (status == "red"){
    notifyMe();
  }
@endforeach
 </script>

 <div class="container">
   <div class="row">
     <div class="col-sm-5">
       <div class="panel panel-default">
           <div class="panel-heading">
       <h3>Column 1</h3>
       <p>Lorem ipsum dolor..</p>
       <p>Ut enim ad..</p>
     </div>
   </div>
   <div>
     <div class="col-sm-5">
       <div class="panel panel-default">
           <div class="panel-heading">
       <h3>Column 2</h3>

       <div class="panel-body">

       <p>Lorem ipsum dolor..</p>
       <p>Ut enim ad..</p>
</div>
     </div>
   </div>
     </div>
   </div>
 </div>





<!--<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
				@foreach ($newbeer as $new)
					<font color="{{ $new->full }}">
				@endforeach
				<h2>Bierviltje 1</h2>
				</font></div>
                <div class="panel-body">
			<table class="table">
				<tr>
					<th>Bier</th>
					<th>Aantal</th>
				</tr>
				<td>
				@foreach ($beers as $beer)
					{{ $beer->name }}<br>
				@endforeach
				</td>
<td>
@foreach ($beers as $beer)
					{{ $beer->count }}<br>
				@endforeach
</td>
			</table>


			<img src="{{ asset('image/button.svg') }}" id="afrekeken" alt="button">




      <form action="/receipt" method="get">
          <button class="btn btn-primary"> Afrekenen </button>
      </form>


			<link href="{{ asset('css/fonts.css') }}" rel="stylesheet"> -->


                </div>
            </div>





</div>






@endsection
<?php
header("refresh: 10;");
?>

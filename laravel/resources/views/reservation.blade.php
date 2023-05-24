@extends('layouts.main')

@section('title', 'Reservation')

@section('content')
    <div id="reservation">
        <h2>Reservations</h2>
        <h5>예약</h5>
    </div>
    
@foreach($reservations as $reservation)

<div class="container-fluid d-flex flex-wrap">
    <div id="plates-container" class="col-md-12">
        <div id="cards-container" class="row cards-container reservation">
            <div class="card col-sm-3">
                <div class="card-body">
                <p class="card-name">Name: {{ $reservation->name}}</p>
                <a href="/reservations/{{ $reservation->id }}" class="btn btn-primary">See more</a>
                </div>       
            </div>
        </div>
    </div>
</div>
   
@endforeach
@if(count($reservations) == 0)
    <p id="msgnot"> <ion-icon name="ban-outline"></ion-icon> Doesn't have a reservation yet !</p>
@endif
    <a href="reservations/create" id="btn-reservation" class="btn btn-primary reservation"> Create your reservation !</a>
@endsection
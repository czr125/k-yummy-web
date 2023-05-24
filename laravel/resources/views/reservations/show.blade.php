@extends('layouts.main')

@section('title', $reservation->name)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="info-container" class="col-md-6">
            <h1> <ion-icon name="person-outline"></ion-icon>{{ $reservationOwner['name'] }}</h1>
            <p class="date"><ion-icon name="calendar-outline"></ion-icon> Date: {{ $reservation->date}}</p>
            <p class="hour"><ion-icon name="alarm-outline"></ion-icon> Hour: {{$reservation->hour}}</p>
            <p class="number-people"><ion-icon name="people-outline"></ion-icon> Number of People: {{ $reservation->number_of_people}}</p>
            <p class="table-number"><ion-icon name="grid-outline"></ion-icon> Table Number: {{ $reservation->number_table }}</p>
        </div> 
    </div>
</div>

@endsection
@extends@extends('layouts.main')

@section('title', 'Editing')

@section('content')
<div id="reservation-create-container" class="col-md-6 offset-md-3">
    <div id="create_reserve">
    <strong><h1> Editing:  {{ $reservation->name }} </h1></strong>
    </div>
    <form action="/reservations/update/{{ $reservation->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Reservation:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name of responsible" value="{{ $reservation->name }}">
        </div>
        <div class="form-group">
            <label for="title">Table Number:</label>
            <input type="text" class="form-control" id="number_table" name="number_table" placeholder="Table Number" value="{{ $reservation->number_table }}">
        </div>
        <div class="form-group">
            <label for="hour">Hour to reservate:</label>
            <input type="time" class="form-control" id="hour" name="hour" value="{{ $reservation->hour }}">
        </div>
        <div class="form-group">
            <label for="date">Date to reservate:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $reservation->date }}">
        </div>
        <div class="form-group">
            <label for="title">Number of People:</label>
            <input type="text" class="form-control" id="number_of_people" name="number_of_people" placeholder="Number of People" value="{{ $reservation->number_of_people }}">
        </div>
        <input type="submit" class="btn btn-primary create" value="Update Reservation">
    </form>

</div>


@endsection
@extends@extends('layouts.main')

@section('title', 'Create Reservation')

@section('content')
<div id="reservation-create-container" class="col-md-6 offset-md-3">
    <div id="create_reserve">
    <strong><h2> Create your reservation </h2></strong>
    <h5>예약 생성</h5>
    </div>
    <form action="/reservations" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Reservation:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name of responsible">
        </div>
        <div class="form-group">
            <label for="title">Table Number:</label>
            <input type="text" class="form-control" id="number_table" name="number_table" placeholder="Table Number">
        </div>
        <div class="form-group">
            <label for="hour">Hour to reservate:</label>
            <input type="time" class="form-control" id="hour" name="hour">
        </div>
        <div class="form-group">
            <label for="date">Date to reservate:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="title">Number of People:</label>
            <input type="text" class="form-control" id="number_of_people" name="number_of_people" placeholder="Number of People">
        </div>
        <input type="submit" class="btn btn-primary create" value="Create Reservation">
    </form>

</div>


@endsection
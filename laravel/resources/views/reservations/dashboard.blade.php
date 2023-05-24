@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h2>My Reservations</h2>
    <h5>내 예약</h5>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($reservations) > 0)
    <table class="table">
        <thead>
            <tr>  
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Hour</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
    <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td scropt="row">{{ $loop->index + 1 }}</td>
                <td><a href="/reservations/{{ $reservation->id }}">{{ $reservation->name }}</a></td>
                <td>{{ $reservation->date }}</td>
                <td>{{ $reservation->hour }}</td>
                <td>
                    <a href="/reservations/edit/{{ $reservation->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Edit</a> 
                    <form action="/reservations/{{ $reservation->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    @else
    <p>You don't have reservations yet, <a href="/reservations/create">Create your reservation</a></p>
    @endif
</div>

@endsection
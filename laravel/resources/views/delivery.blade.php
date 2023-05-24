@extends('layouts.main')

@section('title', 'Delivery')

@section('content')
<div id="reservation-create-container" class="col-md-6 offset-md-3">
    <div id="create_delivery">
    <strong><h2> Make your order </h2></strong>
    <h5>주문하다</h5>
    </div>        
        <div class="form-group">
            <label for="title">Name of responsible:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name of responsible..." required>
        </div>
        <div class="form-group">
            <label for="telephone">Telephone:</label>
            <input type="text" class="form-control" id="telephone"  placeholder="Telephone number..." required>
        </div>
        <div class="form-group">
            <label for="order">Order:</label>
            <input type="text" class="form-control" id="order" placeholder="Your order..." required>
        </div>
        <input type="submit" class="btn btn-primary create" value="Make Order">
    </div>   
    </div>
</div>
@endsection
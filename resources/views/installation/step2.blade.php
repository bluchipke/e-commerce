@extends('layouts.blank')
@section('content')
    <div class="mar-ver pad-btm text-center">
        <h1 class="h3">Purchase Code provided by BluChip Solutions</h1>       
    </div>
    <p class="text-muted font-13">
        <form method="POST" action="{{ route('purchase.code') }}">
            @csrf
            <div class="form-group">
                <label for="purchase_code">Purchase Code</label>
                <input type="text" class="form-control" id="purchase_code" name = "purchase_code">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-info">Continue</button>
            </div>
        </form>
    </p>
@endsection
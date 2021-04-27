@extends('layouts.app')
@section('content')
    <div class="row mt-5">
        <div class="col">
            <h2>People names start from "A"</h2>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <ul class="list-group">
                @foreach($names as $name)
                    <li class="list-group-item">{{ $name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection


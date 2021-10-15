@extends('layout.app')

@section('content')
    <ul class="houses-list">

        @foreach($houses as $house)
        <li class="house-logo" style="background: #{{ $house->color }};">
            <a href="#/house/1">
                <img src="/assets/img/houses/{{ $house->image }}" alt="{{ $house->name }}">
            </a>
        </li>
        @endforeach

    </ul>
@endsection

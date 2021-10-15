@extends('layout.app')

@section('content')
    <ul class="houses-list">

        @foreach($houses as $house)
        <li class="house-logo" style="background: #{{ $house->colour }};">
            <a href="{{ route('house-showCharacters', ['houseId' => $house->id]) }}">
                <img src="/assets/img/houses/{{ $house->image }}" alt="{{ $house->name }}">
            </a>
        </li>
        @endforeach

    </ul>
@endsection

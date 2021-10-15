@extends('layout.app')


@section('content')
<h2>Maison {{ $house->name }}</h2>

<ul class="characters-list">

    @foreach($house->characters as $character)
    <li class="character-card">
        <a href="{{ route('character-item', ['id' => $character->id]) }}">

            <div class="avatar" style="background: #{{ $house->colour }};">
                <img src="/assets/img/{{ $character->image }}" alt="Cersei">
            </div>
            <div class="name">
                {{ $character->first_name . ' ' . $character->last_name }}
            </div>
        </a>
    </li>
    @endforeach

</ul>
@endsection

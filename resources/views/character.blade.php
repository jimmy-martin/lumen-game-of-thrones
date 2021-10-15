@extends('layout.app')

@section('content')

    <section class="character-page">
        <div class="col-8">
            <h2>{{ $character->first_name . ' ' . $character->last_name }}</h2>
            <div class="bio">
                <h3>Biographie</h3>
                <p>{{ $character->biography }}</p>
            </div>
        </div>
        <div class="col-4">
            <div class="avatar" style="background: #e3e3e3;">
                <img src="/assets/img/{{ $character->image }}" alt="{{ $character->first_name }}">
            </div>
            <div class="infos">
                <h3>Maisons</h3>
                <div class="houses">
                    <ul>
                        <li class="house-logo" style="background: #e3e3e3;">
                            <a href="#/house/1">
                                <img src="/assets/img/houses/stark.png" alt="Stark">
                            </a>
                        </li>
                        <li class="house-logo" style="background: #2b3aab;">
                            <a href="#/house/3">
                                <img src="/assets/img/houses/tully.png" alt="Tully">
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="meta">
                    <li><span>Rang : </span>{{ $character->title->name }}</li>
                    <li><span>Mère : </span>
                        @if($character->mother)
                        {{ $character->mother->first_name . ' ' . $character->mother->last_name}}
                        @else
                        Non renseigné
                        @endif
                    </li>
                    <li><span>Père : </span>
                        @if($character->father)
                            {{ $character->father->first_name . ' ' . $character->father->last_name}}
                        @else
                            Non renseigné
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection

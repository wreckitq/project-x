@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title="📱💰 Reward"></x-titlebar>

    <div class="ui container">
        <x-cards class="three">
            @foreach($rewards as $reward)
                <x-card
                        title="{{ $reward->title }}"
                        content="{{ $reward->excerpt }}"
                >

                    <x-card-footer>
                        <x-slot name="left">
                            <i aria-hidden="true" class="icon coins yellow"></i>
                            {{ readable_number($reward->price) }}
                        </x-slot>
                        <x-slot name="right">
                            @if($reward->stock)
                                Sisa {{ $reward->stock }}
                            @else
                                <i aria-hidden="true" class="icon infinity"></i>
                            @endif
                        </x-slot>
                    </x-card-footer>
                </x-card>
            @endforeach
        </x-cards>
    </div>
@endsection

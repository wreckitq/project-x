@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title="‍🐉 Training"></x-titlebar>

    <div class="ui container">
        <x-cards class="three stackable">
            @foreach($trainings as $training)
                <x-card
                        url="{{ route('training.show', $training) }}"
                        title="{{ $training->title }}"
                        content="{{ $training->excerpt }}"
                        meta.after="{{ $training->start_at->isoFormat('LL') }}"
                >
                    <x-slot name="body">
                        <div class="extra content">
                            @foreach($training->tags as $tag)
                                <x-label color="theme">{{ $tag->name }}</x-label>
                            @endforeach
                        </div>
                    </x-slot>
                    <x-card-footer>
                        <x-slot name="left">
                            <div data-tooltip="Fee {{ $training->fee }}, Reward {{ $training->reward }}" data-position="right center" data-inverted="true">
                                <i class='icon coins yellow'></i>
                                {{ $training->fee }}
                                &nbsp;
                                <i class="icon gift orange"></i>
                                {{ $training->reward }}
                            </div>
                        </x-slot>
                        <x-slot name="right">
                            <i class="icon microphone alternate"></i> {{ $training->trainer->name }}
                        </x-slot>
                    </x-card-footer>
                </x-card>
            @endforeach
        </x-cards>
    </div>
@endsection

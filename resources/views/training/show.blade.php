@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title="‍{{ $training->title }}">
        <x-backlink url="{{ route('training.index') }}" label="Training"></x-backlink>
    </x-titlebar>

    <div class="ui container">
        TODO: // content goes here
    </div>
@endsection

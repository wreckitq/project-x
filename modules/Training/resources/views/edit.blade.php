@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::training.index') }}"></x-backlink>

    <x-panel title="Edit Training">
        {!! form()->bind($training)->put(route('modules::training.update', $training->getKey()))->horizontal()->multipart() !!}
        @include('training::_form')
        {!! form()->close() !!}
    </x-panel>

@stop

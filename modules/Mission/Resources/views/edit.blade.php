@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::mission.index') }}"></x-backlink>

    <x-panel title="Edit Mission">
    {!! form()->bind($mission)->put(route('modules::mission.update', $mission->getKey()))->horizontal()->multipart() !!}
	@include('mission::_form')
    {!! form()->close() !!}
    </x-panel>

@stop

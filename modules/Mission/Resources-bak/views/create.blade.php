@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::mission.index') }}"></x-backlink>

    <x-panel title="Tambah Mission">
    {!! form()->post(route('modules::mission.store'))->horizontal()->multipart() !!}
	@include('mission::_form')
    {!! form()->close() !!}
    </x-panel>

@stop

@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::training.index') }}"></x-backlink>

    <x-panel title="Tambah Training">
        {!! form()->post(route('modules::training.store'))->horizontal()->multipart() !!}
        @include('training::_form')
        {!! form()->close() !!}
    </x-panel>

@stop

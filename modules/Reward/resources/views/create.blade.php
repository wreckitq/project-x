@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::reward.index') }}"></x-backlink>

    <x-panel title="Tambah Reward">
        {!! form()->post(route('modules::reward.store'))->horizontal()->multipart() !!}
        @include('reward::_form')
        {!! form()->close() !!}
    </x-panel>

@stop

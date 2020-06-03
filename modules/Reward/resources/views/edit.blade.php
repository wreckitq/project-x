@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::reward.index') }}"></x-backlink>

    <x-panel title="Edit Reward">
        {!! form()->bind($reward)->put(route('modules::reward.update', $reward->getKey()))->horizontal()->multipart() !!}
        @include('reward::_form')
        {!! form()->close() !!}
    </x-panel>

@stop

@extends('laravolt::layouts.app')

@section('content')


    <x-titlebar title="Reward">
        <x-item>
            <x-link label="Tambah" icon="plus" url="{{ route('modules::reward.create') }}"></x-link>
        </x-item>
    </x-titlebar>

    {!! $table !!}
@stop

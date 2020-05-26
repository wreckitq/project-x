@extends('laravolt::layouts.app')

@section('content')

    <x-titlebar title="Mission">
        <div class="item">
            <x-link label="Tambah" icon="plus" url="{{ route('modules::mission.create') }}"></x-link>
        </div>
    </x-titlebar>

    {!! $table !!}
@stop

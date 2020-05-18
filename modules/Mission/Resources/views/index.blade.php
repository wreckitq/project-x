@extends('laravolt::layouts.app')

@section('content')

    <x-titlebar title="Mission">
        <div class="item">
            <a href="{{ route('modules::mission.create') }}" class="ui button basic primary">
                <i class="icon plus"></i> Tambah
            </a>
        </div>
    </x-titlebar>

    {!! $table !!}
@stop

@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title="">
        <x-backlink url="{{ route('mission.index') }}" label="Mission"></x-backlink>
    </x-titlebar>
    <div class="ui container">
        <x-project-detail :mission="$mission"></x-project-detail>
    </div>
@endsection

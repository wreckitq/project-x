@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title='🧭 Mission'></x-titlebar>

    <div class="ui container">
        <x-project-filter></x-project-filter>
        <div class="ui divider m-t-0 m-b-2"></div>
        <x-project-grid></x-project-grid>
    </div>
@endsection

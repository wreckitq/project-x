@extends('laravolt::layouts.app')

@section('content')
    <div class="ui container">
        <div class="ui grid">
            <div class="four wide column">
                <x-project-filter></x-project-filter>
            </div>
            <div class="twelve wide column">
                <x-project-grid></x-project-grid>
            </div>
        </div>
    </div>
@endsection

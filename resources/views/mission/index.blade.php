@extends('laravolt::layouts.app')

@section('content')
    <div class="ui container">

        <div class="p-3">
            <h2 class="ui header centered"><i class="icon compass"></i> Mission</h2>
        </div>

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

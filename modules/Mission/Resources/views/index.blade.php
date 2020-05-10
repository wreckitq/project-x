@extends('laravolt::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Mission</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('mission.create') }}" class="ui button primary"><i class="icon plus"></i> Add</a>
            </div>
        </div>
    </div>

    {!! $table !!}
@stop

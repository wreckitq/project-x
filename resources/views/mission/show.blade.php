@extends('laravolt::layouts.app-full')

@section('content')
    <div class="ui container">

        <x-backlink url="{{ route('mission.index') }}"></x-backlink>

        <x-project-detail :mission="$mission"></x-project-detail>
    </div>
@endsection

@extends('laravolt::layouts.app-full')

@section('content')
    <div class="ui container">
        <x-project-detail :mission="$mission"></x-project-detail>
    </div>
@endsection

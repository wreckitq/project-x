@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::training.index') }}"></x-backlink>

    <x-panel title="Detil Training">
        <table class="ui table definition">
        <tr><td>Id</td><td>{{ $training->id }}</td></tr>
        <tr><td>Trainer_Id</td><td>{{ $training->trainer_id }}</td></tr>
        <tr><td>Title</td><td>{{ $training->title }}</td></tr>
        <tr><td>Description</td><td>{{ $training->description }}</td></tr>
        <tr><td>Fee</td><td>{{ $training->fee }}</td></tr>
        <tr><td>Reward</td><td>{{ $training->reward }}</td></tr>
        <tr><td>Start_At</td><td>{{ $training->start_at }}</td></tr>
        <tr><td>Created_At</td><td>{{ $training->created_at }}</td></tr>
        <tr><td>Updated_At</td><td>{{ $training->updated_at }}</td></tr>
        </table>
    </x-panel>

@stop

@extends('laravolt::layouts.app')

@section('content')

    <a href="{{ route('modules::mission.index') }}" class="ui button basic">
        <i class="icon long alternate left arrow"></i>
        Kembali
    </a>

    <x-panel title="Detil Mission">
        <table class="ui table definition">
        <tr><td>Id</td><td>{{ $mission->id }}</td></tr>
        <tr><td>Owner_Id</td><td>{{ $mission->owner_id }}</td></tr>
        <tr><td>Assignee_Id</td><td>{{ $mission->assignee_id }}</td></tr>
        <tr><td>Status</td><td>{{ $mission->status }}</td></tr>
        <tr><td>Title</td><td>{{ $mission->title }}</td></tr>
        <tr><td>Description</td><td>{{ $mission->description }}</td></tr>
        <tr><td>Reward</td><td>{{ $mission->reward }}</td></tr>
        <tr><td>Level</td><td>{{ $mission->level }}</td></tr>
        <tr><td>Due_Date</td><td>{{ $mission->due_date }}</td></tr>
        <tr><td>Completion_Date</td><td>{{ $mission->completion_date }}</td></tr>
        <tr><td>Created_At</td><td>{{ $mission->created_at }}</td></tr>
        <tr><td>Updated_At</td><td>{{ $mission->updated_at }}</td></tr>
        <tr><td>Deleted_At</td><td>{{ $mission->deleted_at }}</td></tr>
        </table>
    </x-panel>

@stop

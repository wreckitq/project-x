@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::mission.index') }}"></x-backlink>

    <x-panel title="Edit Mission">
    {!! form()->bind($mission)->put(route('modules::mission.update', $mission->getKey()))->horizontal()->multipart() !!}
	{!! form()->text('owner_id')->label('Owner_Id') !!}
	{!! form()->text('assignee_id')->label('Assignee_Id') !!}
	{!! form()->text('status')->label('Status') !!}
	{!! form()->text('title')->label('Title') !!}
	{!! form()->textarea('description')->label('Description') !!}
	{!! form()->text('reward')->label('Reward') !!}
	{!! form()->text('level')->label('Level') !!}
	{!! form()->datepicker('due_date')->label('Due_Date') !!}
	{!! form()->datepicker('completion_date')->label('Completion_Date') !!}
    {!! form()->action([
        form()->submit('Simpan'),
        form()->link('Batal', route('modules::mission.index'))
    ]) !!}

    {!! form()->close() !!}
    </x-panel>

@stop

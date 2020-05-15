@extends('laravolt::layouts.app')

@section('content')

    <a href="{{ route('modules::mission.index') }}" class="ui button basic">
        <i class="icon long alternate left arrow"></i>
        Kembali
    </a>

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

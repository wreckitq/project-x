@extends('laravolt::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Add Mission</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('mission.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    {!! form()->post(route('mission.store'))->multipart() !!}
	{!! form()->text('owner_id')->label('Owner_Id') !!}
	{!! form()->text('assignee_id')->label('Assignee_Id') !!}
	{!! form()->text('status')->label('Status') !!}
	{!! form()->text('title')->label('Title') !!}
	{!! form()->textarea('description')->label('Description') !!}
	{!! form()->text('reward')->label('Reward') !!}
	{!! form()->text('level')->label('Level') !!}
	{!! form()->selectDate('due_date')->label('Due_Date') !!}
	{!! form()->selectDate('completion_date')->label('Completion_Date') !!}
    {!! form()->action([
        form()->submit('Save'),
        form()->link('Cancel', route('mission.index'))
    ]) !!}
    {!! form()->close() !!}

@stop

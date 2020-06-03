@extends('laravolt::layouts.app')

@section('content')

    <x-backlink url="{{ route('modules::reward.index') }}"></x-backlink>

    <x-panel title="Detil Reward">
        <table class="ui table definition">
        <tr><td>Id</td><td>{{ $reward->id }}</td></tr>
        <tr><td>Title</td><td>{{ $reward->title }}</td></tr>
        <tr><td>Description</td><td>{!! $reward->description !!}</td></tr>
        <tr><td>Stock</td><td>{{ $reward->stock }}</td></tr>
        <tr><td>Price</td><td>{{ $reward->price }}</td></tr>
        <tr><td>Created At</td><td>{{ $reward->created_at }}</td></tr>
        <tr><td>Updated At</td><td>{{ $reward->updated_at }}</td></tr>
        </table>
    </x-panel>

@stop

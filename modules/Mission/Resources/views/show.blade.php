@extends('laravolt::layouts.app')

@section('content')

    <x-titlebar title="{{ $mission->title }}">
        <x-backlink url="{{ route('modules::mission.index') }}" label="Mission"></x-backlink>
    </x-titlebar>

    <x-panel title="Detil Mission">
        <table class="ui table definition">
            <tr>
                <td width="200px">URL</td>
                <td><a href="{{ route('mission.show', $mission) }}">{{ route('mission.show', $mission) }}</a></td>
            </tr>
            <tr>
                <td>Owner</td>
                <td>{{ $mission->owner->name }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $mission->status }}</td>
            </tr>
            <tr>
                <td>Assignee</td>
                <td>{{ $mission->assignee->name }}</td>
            </tr>
            <tr>
                <td>Title</td>
                <td>{{ $mission->title }}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{ $mission->description }}</td>
            </tr>
            <tr>
                <td>Reward</td>
                <td>{{ $mission->reward }}</td>
            </tr>
            <tr>
                <td>Level</td>
                <td>{{ $mission->level }}</td>
            </tr>
            <tr>
                <td>Due Date</td>
                <td>{{ $mission->due_date->isoFormat('LL') }}</td>
            </tr>
            <tr>
                <td>Completion Date</td>
                <td>{{ optional($mission->completion_date)->isoFormat('LL') }}</td>
            </tr>
            <tr>
                <td>Closed Date</td>
                <td>{{ optional($mission->closed_date)->isoFormat('LL') }}</td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>{{ $mission->created_at->isoFormat('LL') }}</td>
            </tr>
            <tr>
                <td>Updated At</td>
                <td>{{ $mission->updated_at->isoFormat('LL') }}</td>
            </tr>
            <tr>
                <td>Deleted At</td>
                <td>{{ optional($mission->deleted_at)->isoFormat('LL') }}</td>
            </tr>
        </table>
    </x-panel>

    <x-panel title="{{ $mission->bidders->count() }} Bid">
        <div class="ui middle aligned divided list">
            @foreach($mission->bidders->sortByDesc('pivot.created_at') as $bidder)
                <div class="item p-y-1">

                    @can('set-winner', $mission)
                        <div class="right floated content">
                            {!! form()->put(route('mission.winner', [$mission, $bidder])) !!}
                            <button type="submit" class="ui button">Set As Winner</button>
                            {!! form()->close() !!}
                        </div>
                    @endcan

                    <img src="{{ Avatar::create($bidder->name)->toBase64() }}" alt="" class="ui avatar image">
                    <div class="content">
                        <div class="header">{{ $bidder->name }}</div>
                        {{ $bidder->pivot->created_at->isoFormat('LLL') }}
                        @if($bidder->is($mission->assignee))
                            <div class="ui label red small">Winner</div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </x-panel>

    <x-panel title="Accomplishment">
        @if($mission->status === \App\Enums\MissionStatus::COMPLETED)
            <p>
                Pada {{ $mission->completion_date->isoFormat('LL') }}, {{ $mission->assignee->name }} menyatakan telah
                menyelesaiakan misi ini.
            </p>
            <p>
                Apakah Anda yakin telah menerima hasil pekerjaan dengan baik?
            </p>
            <div class="ui horizontal list top aligned">
                <div class="item">
                    {!! form()->put(route('mission.close', $mission)) !!}
                    {!! form()->submit('✅ Yes, close this mission')->addClass('black big') !!}
                    {!! form()->close() !!}
                </div>
                <div class="item">
                    {!! form()->put(route('mission.incomplete', $mission)) !!}
                    {!! form()->submit('🤚🏼 No, reopen this mission')->addClass('red basic big') !!}
                    {!! form()->close() !!}
                </div>
            </div>
        @elseif($mission->status === \App\Enums\MissionStatus::CLOSED)
            <div class="ui message info">Misi telah selesai dilaksanakan pada {{ $mission->completion_date->isoFormat('LL') }} dan dikonfirmasi pada {{ $mission->closed_date->isoFormat('LL') }}.</div>
        @else
            <div class="ui message info">Misi belum selesai dilaksanakan</div>
        @endif
    </x-panel>

@stop

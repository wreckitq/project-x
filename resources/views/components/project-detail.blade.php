<div class="ui grid">
    <div class="ten wide column">
        <div class="p-2">
            <h2 class="ui header massive">{{ $mission->title }}</h2>
            <div class="p-b-2 m-b-2" style="border-bottom: 10px dotted #333">
                <span class="ui text black">Diposting oleh {{ $mission->owner->name }} pada {{ $mission->created_at->isoFormat('LLL') }}</span>
            </div>
            <div class="description">
                <div class="ui text fluid container">
                    {{ $mission->description }}
                </div>
            </div>
        </div>
    </div>
    <div class="six wide column">
        <x-panel>
            <table class="ui table definition" style="background-color: transparent">
                <tr>
                    <td>Level</td>
                    <td><div class="ui label small black">{{ $mission->level }}</div></td>
                </tr>
                <tr>
                    <td>Tools</td>
                    <td>
                        @foreach($mission->tags as $tag)
                            <div class="ui basic label small black">{{ $tag->name }}</div>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Reward</td>
                    <td>
                    <span class="ui black text">
                        <i class="icon coins"></i> {{ readable_number($mission->reward) }}
                    </span>
                    </td>
                </tr>
                <tr>
                    <td>Deadline</td>
                    <td>
                        <span class="ui teal text">{{ $mission->due_date->isoFormat('LL') }}</span>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        {{ $mission->status }}
                    </td>
                </tr>
            </table>
        </x-panel>

        @can('bid', $mission)
            @include('components.mission.bid', compact('mission'))
        @endcan
        @can('cancel-bid', $mission)
            @include('components.mission.cancel-bid', compact('mission'))
        @endcan
        @if($mission->status === \App\Enums\MissionStatus::ONPROGRESS && $mission->assignee->isNot(auth()->user()))
            @include('components.mission.onprogress', compact('mission'))
        @endif
        @can('complete', $mission)
            @include('components.mission.completion-form', compact('mission'))
        @endcan
    </div>
</div>

<x-panel>
    <div class="ui stackable grid">
        <div class="ten wide column ui pattern wave">

            <div class="p-2">
                <h2 class="ui header massive centered">{{ $mission->title }}</h2>

                <div class="ui divider section horizontal m-b-0"><i class="icon compass violet"></i></div>

                <div class="description bg-white-70 p-2">
                    <div class="ui text fluid container">
                        {!! $mission->description !!}
                    </div>
                </div>

                <div class="ui divider section horizontal m-t-0"><i class="icon compass rotated violet"></i></div>

            </div>
        </div>
        <div class="six wide column ">
            <x-panel class="b-0">
                <table class="ui table definition" style="background-color: transparent">
                    <tr>
                        <td>Level</td>
                        <td><x-label color="purple">{{ $mission->level }}</x-label></td>
                    </tr>
                    <tr>
                        <td>Tools</td>
                        <td>
                            @foreach($mission->tags as $tag)
                                <x-label color="theme">{{ $tag->name }}</x-label>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>Reward</td>
                        <td>
                    <span class="ui black text">
                        <i class="icon coins yellow"></i> {{ readable_number($mission->reward) }}
                    </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Deadline</td>
                        <td>
                            <span class="ui violet text"><i class="icon calendar outline"></i> {{ $mission->due_date->isoFormat('LL') }}</span>
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
</x-panel>

<div class="ui three stackable cards">
    @foreach($missions as $mission)
        <a href="{{ route('mission.show', $mission) }}" class="ui panel segments card {{ $mission->assignee->is(auth()->user()) ? 's-2' : '' }}">
            <div class="center aligned content p-1">
                <div class="header">{{ $mission->title }}</div>
                <div class="center aligned description">
                    {{ $mission->excerpt }}
                </div>
            </div>
            <div class="extra content center aligned">
                @if($mission->assignee->exists)
                    <div class="ui red small basic label m-b-1">Assigned</div>
                @endif
                @foreach($mission->tags as $tag)
                <div class="ui basic label small black">{{ $tag->name }}</div>
                @endforeach
            </div>
            <div class="extra content">
                <div class="left floated">
                    <span class="ui black text">
                        <i class="icon coins"></i> {{ readable_number($mission->reward) }}
                    </span>
                </div>
                <div class="right floated">
                    <span class="ui teal text">{{ $mission->due_date->isoFormat('LL') }}</span>
                </div>
            </div>
        </a>
    @endforeach
</div>

<div class="ui segment basic center aligned">
    {{ $missions->links() }}
</div>

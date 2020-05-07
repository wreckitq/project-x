<div class="ui three stackable cards">
    @foreach($missions as $mission)
        <a href="{{ route('mission.show', $mission) }}" class="ui card">
            <div class="center aligned content">
                <div class="header">{{ $mission->title }}</div>
                <div class="center aligned description">
                    {{ $mission->excerpt }}
                </div>
            </div>
            <div class="extra content center aligned">
                @foreach($mission->tags as $tag)
                <div class="ui basic label mini black">{{ $tag->name }}</div>
                @endforeach
            </div>
            <div class="extra content">
                <div class="left floated">
                    <span class="ui black text">
                        <i class="icon coins"></i> {{ readable_number($mission->reward) }}
                    </span>
                </div>
                <div class="right floated">
                    <span class="ui teal text"><i class="icon calendar outline"></i> {{ $mission->due_date->isoFormat('LL') }}</span>
                </div>
            </div>
        </a>
    @endforeach
</div>

<div class="ui segment basic center aligned">
    {{ $missions->links() }}
</div>

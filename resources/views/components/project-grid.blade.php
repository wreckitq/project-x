@if($missions->isNotEmpty())
<x-cards class="three stackable">
    @foreach($missions as $mission)
        <x-card
                url="{{ route('mission.show', $mission) }}"
                title="{{ $mission->title }}"
                content="{{ $mission->excerpt }}"
                meta.before="<i class='icon coins yellow'></i> {{ readable_number($mission->reward) }}"
        >
            <x-slot name="body">
                <div class="extra content">
                    <x-label color="purple">{{ $mission->level }}</x-label>
                    @foreach($mission->tags as $tag)
                        <x-label color="theme">{{ $tag->name }}</x-label>
                    @endforeach
                </div>
            </x-slot>
            <x-card-footer>
                <x-slot name="left">
                    <i class="icon calendar outline"></i> {{ $mission->due_date->diffForHumans() }}
                </x-slot>
                <x-slot name="right">
                    @if($mission->assignee->exists)
                        <img src="{{ $mission->assignee->avatar }}" alt="" class="ui image avatar mini">
                    @endif
                </x-slot>
            </x-card-footer>
        </x-card>
    @endforeach
</x-cards>
@else
    <div class="ui placeholder segment">
        <div class="ui icon header">
            <i class="icon hippo"></i>
            Opps, nothing found here..
        </div>
    </div>
@endif


<div class="ui segment basic center aligned">
    {{ $missions->links() }}
</div>

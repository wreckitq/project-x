<x-panel class="b-0">
    <div class="ui divider horizontal"><i class="icon comments violet"></i></div>
    <div class="text-center ui basic segment" style="font-size: 1.25em;">
        <p style="font-style: italic; opacity: .75">
            {{ $mission->remark ?? 'Great Job 👍🏼'}}
        </p>
        <p style="font-style: italic; opacity: .75; font-size: .9em">
        Misi ini telah selesai diselesaikan oleh <strong>{{ $mission->assignee->name }}</strong> pada {{ $mission->completion_date->isoFormat('LL') }}.
        </p>
        <h5 class="ui header">
            {{ $mission->owner->name }}
            <div class="sub header">Mission Owner</div>
        </h5>
    </div>
    <div class="ui divider hidden"></div>
    <x-link url="{{ route('mission.index') }}" class="fluid big">
        <i class="icon left long arrow"></i> Explore Misi Lainnya
    </x-link>
</x-panel>

<form class="p-1 rounded-xl bg-white-30 ui form x-mission-filter-form">
    <div class="ui menu secondary borderless">
        <div class="menu">
            <div class="item" style="min-width: 200px">
                <div class="ui left icon input fluid">
                    <input type="text" name="q" value="{{ request('q') }}" placeholder="Find mission...">
                    <i class="search icon"></i>
                </div>
            </div>
            <div class="item">
                {!! form()->radioGroup('show', ['all' => 'All Mission', 'my' => 'Only My Mission'], request('show', 'all'))->inline() !!}
            </div>
            <div class="item">
                <x-button class="fluid">Apply Filter</x-button>
            </div>
            @if(collect(request()->query())->except('page')->isNotEmpty())
                <div class="item">
                    <a href="{{ route('mission.index') }}"><i class="icon remove"></i> Clear Filter</a>
                </div>
            @endif
        </div>
    </div>
</form>

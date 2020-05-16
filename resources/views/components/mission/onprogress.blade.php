<div class="ui segment raised padded">
    <p>Misi ini sedang dikerjakan oleh <strong>{{ $mission->assignee->name }}</strong> dan dimentori oleh <strong>{{ $mission->owner->name }}</strong>.</p>
    <p>Menyelesaikan misi + upgrading skills + mendapat reward, tertarik mengikuti jejak Anandia?</p>
    <div class="ui divider hidden"></div>
    <a href="{{ route('mission.index') }}" class="ui big button basic black fluid">
        <i class="icon left long arrow"></i> Explore Misi Lainnya
    </a>
</div>

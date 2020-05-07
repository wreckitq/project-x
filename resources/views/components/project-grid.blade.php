<div class="ui three stackable cards">
    @foreach(range(1,12) as $project)
        <a href="{{ route('mission.show', 1) }}" class="ui card">
            <div class="center aligned content">
                <div class="header">Perbaikan Halaman Contact Form</div>
                <div class="center aligned description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
            </div>
            <div class="extra content center aligned">
                <div class="ui label mini black">Easy</div>
                <div class="ui basic label mini black">CSS</div>
                <div class="ui basic label mini black">PHP</div>
            </div>
            <div class="extra content">
                <div class="left floated">
                    <span class="ui black text">
                        <i class="icon coins"></i> 200K
                    </span>
                </div>
                <div class="right floated">
                    <span class="ui teal text"><i class="icon calendar outline"></i> 14 April</span>
                </div>
            </div>
        </a>
    @endforeach
</div>

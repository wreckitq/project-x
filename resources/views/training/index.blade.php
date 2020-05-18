@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title="🤾‍🐉 Training"></x-titlebar>

    <div class="ui container">
        <div class="ui three stackable cards">
            @foreach(range(1, 10) as $i)
                <div class="ui card link">
                    <div class="image">
                        <img src="https://img-a.udemycdn.com/course/240x135/2224520_79cc_2.jpg" alt="">
                    </div>
                    <div class="content center aligned">
                        <div class="header">Deep Analysis</div>
                        <span class="ui text teal">13 Juni 2020</span>
                    </div>
                    <div class="extra content center aligned">
                        Studi kasus berbagai macam persoalan yang dihadapi ketika mengembangkan sistem informasi di Indonesia
                    </div>
                    <div class="extra content center aligned">
                        <div class="ui basic label small black">Problem Solving</div>
                        <div class="ui basic label small black">Mind Map</div>
                        <div class="ui basic label small black">Analyst</div>
                    </div>
                    <div class="extra content">
                        <span class="ui text black">
                        <i class="icon coins"></i>
                        FREE
                        </span>
                        <div class="right floated">
                            <span class="ui text black"><i class="icon microphone"></i> Erikha</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

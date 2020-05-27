@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title="‍🐉 Training"></x-titlebar>

    <div class="ui container">
        <x-cards class="three stackable">
            @foreach(range(1, 10) as $i)
                <x-card
                        url="#"
                        title="Deep Analysis"
                        content="Studi kasus berbagai macam persoalan yang dihadapi ketika mengembangkan sistem informasi di Indonesia"
                        meta.after="13 Juni 2020"
                        cover="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTn2GzRo2cX7vnMstXRLSmKq4EoU6reBzy5dU-ptFaVI26U0S3R&usqp=CAU"
                >
                    <x-slot name="body">
                        <div class="extra content">
                            <x-label color="purple">Basic</x-label>
                            <x-label color="theme">BPMN</x-label>
                            <x-label color="theme">Analyst</x-label>
                        </div>
                    </x-slot>
                    <x-card-footer>
                        <x-slot name="left">
                            <i class='icon coins yellow'></i> 450
                        </x-slot>
                        <x-slot name="right">
                            <i class="icon microphone alternate"></i> Erikha
                        </x-slot>
                    </x-card-footer>
                </x-card>
            @endforeach
        </x-cards>
    </div>
@endsection

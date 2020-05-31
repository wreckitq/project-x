@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title="🦸🏽🦸🏼 ‍Player"></x-titlebar>

    @foreach($users as $user)
        <x-panel>
            <div class="ui grid two equal width">
                <div class="row">
                    <div class="column">
                        <div class="ui items">
                            <div class="item">
                                <img src="{{ Avatar::create($user->name)->toBase64() }}" alt="" class="ui image mini">
                                <div class="content middle aligned">
                                    <strong>{{ $user->name }}</strong>
                                    <br>{{ $user->profile->bio ?? '-'}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column middle aligned">
                        <x-label color="violet"><i class="icon compass"></i>17</x-label>
                        <x-label color="pink"><i class="icon dragon"></i>12</x-label>
                        <x-label color="yellow"><i class="icon coins"></i>100K</x-label>
                    </div>
                </div>
            </div>
        </x-panel>
    @endforeach

    <div class="text-center">
        {{ $users->links() }}
    </div>
@endsection

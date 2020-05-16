@extends('laravolt::layouts.app')

@section('content')
    <div class="p-3">
        <h2 class="ui header centered huge">🦸🏽🦸🏼 ‍Player</h2>
    </div>

    @foreach($users as $user)
        <div class="ui segment">
            <div class="ui grid two equal width">
                <div class="row">
                    <div class="column">
                        <div class="ui items">
                            <div class="item">
                                <img src="{{ Avatar::create($user->name)->toBase64() }}" alt="" class="ui image mini">
                                <div class="content middle aligned">
                                    <strong>{{ $user->name }}</strong>
                                    <br>Sragen
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column middle aligned">
                        <div class="ui label basic">
                            <i class="icon compass"></i>17
                        </div>
                        <div class="ui label basic">
                            <i class="icon dragon"></i>12
                        </div>
                        <div class="ui label basic">
                            <i class="icon coins"></i>100K
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="text-center">
        {{ $users->links() }}
    </div>
@endsection

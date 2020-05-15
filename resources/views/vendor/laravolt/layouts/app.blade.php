@extends('laravolt::layouts.base')

@section('body')
    <div class="layout--app">

        @include('laravolt::menu.topbar')
        @include('laravolt::menu.sidebar')

        <div class="content p-2">

            <div class="ui active inverted dimmer" data-page-loader>
                <div class="ui loader"></div>
            </div>

            <div class="content__inner">
                <div class="ui container-fluid content__body p-1">
                    @yield('content')
                </div>

            </div>
        </div>
    </div>
@endsection

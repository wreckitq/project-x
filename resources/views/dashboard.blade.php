@extends('laravolt::layouts.app')

@section('content')
    <div style="display: flex; min-height: 600px; align-items: center; justify-content: center; flex-direction: column">
        <h1 class="ui header">
            Your Awesome Dashboard
        </h1>

        <div>
            Check file <code class="ui label">{{ \App\Http\Controllers\Dashboard::class }}</code> to edit this page.
        </div>

    </div>
@endsection

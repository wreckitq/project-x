<div class="ui segment raised padded">
    <p>
        Hi {{ auth()->user()->name }}, jika kamu sudah menyelesaikan misi dan merasa pede
        dengan hasilnya, silakan klik tombol di bawah ini.
    </p>

    <p>
        {{ $mission->owner->name }} akan mengecek hasil pekerjaanmu. Jika semuanya OK, reward akan segera dikirim ke akunmu.
        Jika masih ada yang perlu diperbaiki, kamu akan dihubungi secara personal.
    </p>

    {!! form()->put(route('mission.complete', $mission)) !!}
    <button type="submit" class="ui button fluid big secondary">
        💪🏼 Complete This Mission
    </button>
    {!! form()->close() !!}
</div>

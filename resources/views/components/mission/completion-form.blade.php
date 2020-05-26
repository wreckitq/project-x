<x-panel>
    <p>
        Hi {{ auth()->user()->name }}, jika kamu sudah menyelesaikan misi dan merasa pede
        dengan hasilnya, silakan klik tombol di bawah ini.
    </p>

    <p>
        {{ $mission->owner->name }} akan mengecek hasil pekerjaanmu. Jika semuanya OK, reward akan segera dikirim ke akunmu.
        Jika masih ada yang perlu diperbaiki, kamu akan dihubungi secara personal.
    </p>

    {!! form()->put(route('mission.complete', $mission)) !!}
    <x-button class="big fluid">
        💪🏼 Complete This Mission
    </x-button>
    {!! form()->close() !!}
</x-panel>

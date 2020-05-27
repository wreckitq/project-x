<x-panel class="b-0">
    <p class="ui message info blue b-0">
        Hi Bayu Hendra, permintaanmu untuk ambil bagian dalam misi ini sedang diproses.
    </p>
    <p>
        Pejuang yang terpilih akan dihubungi secara personal. Ditunggu ya.
    </p>
    <div class="ui divider hidden"></div>

    <x-button class="big fluid disabled secondary">
        I Want This
        &nbsp;
        <i class="icon space shuttle"></i>
    </x-button>

    <div class="text-center m-t-1">
        {!! form()->post(route('mission.cancel-bid', $mission)) !!}
        <x-button class="fluid basic b-0">
            Saya berubah pikiran 🙌🏻
        </x-button>
        {!! form()->close() !!}
    </div>
</x-panel>

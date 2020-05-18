<div class="ui segment raised padded">
    <p class="ui message info teal">
        Hi Bayu Hendra, permintaanmu untuk ambil bagian dalam misi ini sedang diproses.
    </p>
    <p>
        Pejuang yang terpilih akan dihubungi secara personal. Ditunggu ya.
    </p>
    <div class="ui divider hidden"></div>
    <button class="ui big button fluid disabled">
        I Want This
        &nbsp;
        <i class="icon space shuttle"></i>
    </button>
    <div class="text-center m-t-1">
        {!! form()->post(route('mission.cancel-bid', $mission)) !!}
        <button type="submit" class="ui button basic b-0 fluid">
            Saya berubah pikiran 🙌🏻
        </button>
        {!! form()->close() !!}
    </div>
</div>

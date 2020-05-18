<div class="ui segment raised padded">
    @auth
        <p>Hi {{ auth()->user()->name }}, saat ini <strong>ada {{ $mission->bidders()->count() }} orang</strong> yang
            telah melakukan bidding.</p>
    @endauth

    <p>
        Jika kamu merasa tertantang untuk menyelesaikan misi ini, segera klik tombol di bawah ya.
        Misi ini akan dipandu oleh <strong>{{ $mission->owner->name }}</strong>. Jadi, jangan takut kalau belum
        menguasai teknologinya.
    </p>
    <p>
        <strong>Semua jadi bisa karena mencoba 😊</strong>
    </p>
    <div class="ui divider hidden"></div>
    {!! form()->post(route('mission.bid', $mission)) !!}
    <button type="submit" class="ui big button black fluid">
        I Want This
        &nbsp;
        <i class="icon space shuttle"></i>
    </button>
    {!! form()->close() !!}
</div>

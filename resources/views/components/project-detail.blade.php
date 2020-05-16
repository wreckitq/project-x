<div class="ui grid">
    <div class="ten wide column">
        <div class="p-2">
            <h2 class="ui header massive">{{ $mission->title }}</h2>
            <div class="p-b-2 m-b-2" style="border-bottom: 10px dotted #333">
                <span class="ui text black">Diposting oleh {{ $mission->owner->name }} pada {{ $mission->created_at->isoFormat('LLL') }}</span>
            </div>
            <div class="description">
                <div class="ui text fluid container">
                    {{ $mission->description }}
                </div>
            </div>
        </div>
    </div>
    <div class="six wide column">
        <table class="ui table definition">
            <tr>
                <td>Level</td>
                <td><div class="ui label small black">{{ $mission->level }}</div></td>
            </tr>
            <tr>
                <td>Tools</td>
                <td>
                    @foreach($mission->tags as $tag)
                        <div class="ui basic label small black">{{ $tag->name }}</div>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Reward</td>
                <td>
                    <span class="ui black text">
                        <i class="icon coins"></i> {{ readable_number($mission->reward) }}
                    </span>
                </td>
            </tr>
            <tr>
                <td>Deadline</td>
                <td>
                    <span class="ui teal text">{{ $mission->due_date->isoFormat('LL') }}</span>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    {{ $mission->status }}
                </td>
            </tr>
        </table>
        <div class="ui segment raised padded">
            <p>Hi Bayu Hendra, saat ini <strong>ada 2 orang</strong> yang telah melakukan bidding.</p>
            <p>
                Jika kamu merasa tertantang untuk menyelesaikan misi ini, segera klik tombol di bawah ya.
                Misi ini akan dipandu oleh <strong>Wisnu Manupraba</strong>. Jadi, jangan takut kalau belum menguasai teknologinya.
            </p>
            <p>
                <strong>Semua jadi bisa karena mencoba 😊</strong>
            </p>
            <div class="ui divider hidden"></div>
            <button class="ui big button black fluid">
                Make A Bid
                &nbsp;
                <i class="icon space shuttle"></i>
            </button>
        </div>
        <div class="ui segment raised padded">
            <p>Hi Bayu Hendra, permintaanmu untuk ambil bagian dalam misi ini sedang diproses oleh <strong>Wisnu Manupraba</strong>.</p>
            <p>
                Pejuang yang terpilih akan dihubungi secara personal. Ditunggu ya.
            </p>
            <div class="ui divider hidden"></div>
            <button class="ui big button fluid disabled">
                Make A Bid
                &nbsp;
                <i class="icon space shuttle"></i>
            </button>
            <div class="text-center m-t-1">
                <a href="#"><span class="ui text grey">Saya berubah pikiran 🙌🏻</span></a>
            </div>
        </div>
        <div class="ui segment raised padded">
            <p>Misi ini sedang dikerjakan oleh <strong>Anandia</strong> dan dimentori oleh <strong>Wisnu Manupraba</strong>.</p>
            <p>Menyelesaikan misi + upgrading skills + mendapat reward, tertarik mengikuti jejak Anandia?</p>
            <div class="ui divider hidden"></div>
            <button class="ui big button basic black fluid">
                <i class="icon left long arrow"></i> Explore Misi Lainnya
            </button>
        </div>
        <div class="ui segment raised padded">
            <div class="text-center ui basic segment" style="font-size: 1.25em;">
                <p style="font-style: italic; opacity: .75">
                    Sangat menyenangkan bisa bekerja bersama Anan. Komunikasi sangat lancar.
                </p>
                <h5 class="ui header">
                    Wisnu Manupraba
                    <div class="sub header">Mentor</div>
                </h5>
            </div>
            <p>Misi ini telah selesai diselesaikan oleh <strong>Anandia</strong> pada 21 Mei 2020.
                Secara keseluruhan, misi berjalan dengan <strong>sangat baik</strong> dan <strong>tepat waktu</strong>.</p>
            <div class="ui divider hidden"></div>
            <button class="ui big button basic black fluid">
                <i class="icon left long arrow"></i> Explore Misi Lainnya
            </button>
        </div>
    </div>
</div>

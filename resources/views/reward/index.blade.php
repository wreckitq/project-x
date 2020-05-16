@extends('laravolt::layouts.app')

@section('content')
    <div class="p-3">
        <h2 class="ui header centered huge">📱💰🍦 Reward</h2>
    </div>

    <div class="ui container">
        <div class="ui three stackable cards">
            @foreach(range(1, 10) as $i)
                <a href="#" class="ui card link">
                    <div class="image">
                        <img src="https://ecs7.tokopedia.net/img/blog/promo/2019/12/tokopoints_kopitiam_gold_catalog_banner_lite_576x192.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="header">Voucher Go-Food Rp 300.000</div>
                    </div>
                    <div class="extra content">
                        <span class="ui text black">
                        <i class="icon coins"></i>
                        200K
                        </span>
                        <div class="right floated">
                            <span class="ui text black">
                                Sisa 10
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection

@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title="📱💰 Reward"></x-titlebar>

    <div class="ui container">
        <x-cards class="three">
            <x-card
                url="#"
                title="Paket Wisata Jelajah Desa"
                cover="https://i.misteraladin.com/tour/20200124172052-RCEulsdjoCkXbULv_thumb.jpg"
                content="Nikmati udara segar, air jernih, dan keramahan penduduk lokal di kaki gunung Lawu. 3 hari 2 malam untuk 2 orang."
            >

                <x-card-footer>
                    <x-slot name="left">
                        <i class="icon coins yellow"></i>
                        1K
                    </x-slot>
                    <x-slot name="right">Sisa 1</x-slot>
                </x-card-footer>
            </x-card>
            <x-card
                url="#"
                title="iPhone 11 Black"
                cover="https://secureservercdn.net/160.153.137.15/v88.a4b.myftpupload.com/wp-content/uploads/2019/03/adsasdasd.jpg?time=1589251875"
                content="iPhone terbaru untuk menambah level kegantengan/kecantikanmu. Selesaikan misinya, kumpulkan rewardnya, dapatkan iPhone-nya."
            >

                <x-card-footer>
                    <x-slot name="left">
                        <i class="icon coins yellow"></i>
                        2K
                    </x-slot>
                    <x-slot name="right">Sisa 1</x-slot>
                </x-card-footer>
            </x-card>
            <x-card
                url="#"
                title="Imitasi Keramik Kuno Majapahit"
                cover="https://i.misteraladin.com/tour/20200203160924-rwrTcAKLoiSdKDQb_thumb.jpg"
                content="12 buah guci kuno berbagai ukuran untuk mempercantik rumahmu. Free ongkos kirim seluruh Indonesia."
            >

                <x-card-footer>
                    <x-slot name="left">
                        <i class="icon coins yellow"></i>
                        500
                    </x-slot>
                    <x-slot name="right">Sisa 10</x-slot>
                </x-card-footer>
            </x-card>
        </x-cards>
    </div>
@endsection

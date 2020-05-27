@extends('laravolt::layouts.app')

@section('content')
    <x-titlebar title="📱💰 Reward"></x-titlebar>

    <div class="ui container">
        <x-cards class="three">
            @foreach(range(1, 10) as $i)
                <x-card
                    url="#"
                    title="Paket Data 5GB"
                    cover="https://toko.syarq.com/modules/posslideshows/images/1cbcbf57dddc3fcb58bf785d6245a224b690d24f_Biller%20SyarQ-04.png"
                >

                    <x-card-footer>
                        <x-slot name="left">
                            <i class="icon coins yellow"></i>
                            200K
                        </x-slot>
                        <x-slot name="right">Sisa 10</x-slot>
                    </x-card-footer>
                </x-card>
            @endforeach
        </x-cards>
    </div>
@endsection

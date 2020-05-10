<header class="ui menu borderless fixed top {{ config('laravolt.ui.options.topbar_inverted') ? 'inverted': '' }}">
    <div class="ui container">
        <div class="item mobile only tablet only" data-role="sidebar-visibility-switcher"><i class="icon sidebar"></i></div>
        <a href="{{ route('home') }}" class="item">
            @include('laravolt::components.brand-image', ['class' => 'mini'])
        </a>
        <a href="{{ route('mission.index') }}" class="item">
            <i class="icon compass outline"></i>
            Explore
        </a>
        <a href="#" class="item">
            <i class="icon medal"></i>
            Rank
        </a>

        <div class="menu right p-r-1">
            @auth()
                <div class="ui item dropdown simple right">
                    <img src="{{ auth()->user()->avatar }}" alt="" class="ui image avatar">
                    {{ auth()->user()->name }}
                    <i class="icon dropdown"></i>
                    <div class="menu">
                        <a href="{{ route('epicentrum::my.profile.edit') }}" class="item">@lang('Edit Profil')</a>
                        <a href="{{ route('epicentrum::my.password.edit') }}" class="item">@lang('Edit Password')</a>
                        <div class="divider"></div>
                        <a href="{{ route('auth::logout') }}" class="item">Logout</a>
                    </div>
                </div>
            @endauth

        </div>
    </div>
</header>

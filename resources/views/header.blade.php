<header>
    <div class="header_logo">
        <img class="logo_desktop" src="{{ asset('img/logo.png') }}">
        <img class="logo_mobile" src="{{ asset('img/logo_mobile.png') }}">
        <label for="menu" class="button_menu_mobile">
            <div class="div1"></div>
            <div class="div2"></div>
            <div class="div3"></div>
        </label>
        <input type="checkbox" id="menu" hidden>
    </div>
    <div class="header_items">
        <ul class="Items">
            <li class="item " id="lan_mob" >
                <ul>
                    <li @if(\Illuminate\Support\Facades\App::getLocale() === 'kz')
                        style="padding: 2px;border:solid 1px grey;"
                        @endif>
                        <a href="{{ route('locale', ['locale' => 'kz']) }}"><img src="{{ asset('img/kz.png') }}" ></a></li>
                    <li @if(\Illuminate\Support\Facades\App::getLocale() === 'ru')
                        style="padding: 2px;border:solid 1px grey;"
                        @endif>
                        <a href="{{ route('locale', ['locale' => 'ru']) }}"><img src="{{ asset('img/ru.png') }}" ></a></li>
                    <li @if(\Illuminate\Support\Facades\App::getLocale() === 'en')
                        style="padding: 2px;border:solid 1px grey;"
                        @endif>
                        <a href="{{ route('locale', ['locale' => 'en']) }}"><img src="{{ asset('img/en.png') }}" ></a></li>
                </ul>
            </li>
            <li class="item" id="pos_top"><a href="/">@lang('main.glav')</a></li>
            <li class="item"><a href="/tariff">@lang('main.Tar')</a></li>
            <li class="item"><a href="/security">@lang('main.security')</a></li>
            <li class="item"> <a href="/rules">@lang('main.rules')</a></li>
            <li class="item"> <a href="/manager">@lang('main.AboutCompany')</a></li>
            <li class="item"> <a href="/support">@lang('main.support')</a></li>
            <li class="item"> <a href="/contacts">@lang('main.contact')</a></li>
            <li class="item" id="lan"><a href="#" class="header_items_lang">@lang('main.lang')</a></li>
            <ul class="langs">
                <a href="{{ route('locale', ['locale' => 'kz']) }}">
                    <li class="header_items_langKz"><img class="kzImg" src="{{ asset('img/kz.png') }}">
                        <label>Қазақша</label>
                        @if(\Illuminate\Support\Facades\App::getLocale() === 'kz')
                        <img class="langOk" src="{{ asset('img/langOK.png') }}">
                        @endif
                    </li></a>
                <a href="{{ route('locale', ['locale' => 'ru']) }}">
                    <li class="header_items_langRu"><img class="ruImg" src="{{ asset('img/ru.png') }}">
                        <label>Русский</label>
                        @if(\Illuminate\Support\Facades\App::getLocale() === 'ru')
                        <img class="langOk" src="{{ asset('img/langOK.png') }}">
                        @endif
                    </li></a>
                <a href="{{ route('locale', ['locale' => 'en']) }}">
                    <li class="header_items_langEn"><img class="enImg" src="{{ asset('img/en.png') }}">
                        <label>English</label>
                    @if(\Illuminate\Support\Facades\App::getLocale() === 'en')
                        <img class="langOk" src="{{ asset('img/langOK.png') }}">
                    @endif
                    </li></a>
            </ul>
        </ul>
    </div>
</header>

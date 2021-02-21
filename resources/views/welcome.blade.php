@extends('head')
@section('content')
    <section class="infoSectionWelcome">
        <div class="block">
        <div class="closeBlock">
            <div class="text1">
               @lang('main.clients')
            </div>
            <img src="{{ asset('img/iks.png') }}" >
        </div>
            <div class="welcomeText">
                @lang('main.welcomeInfoText')
            </div>
        </div>
    </section>
    <section class="welcomeSection">
            <div class="welcomeSection_TextAndButton">
             <div class="welcomeSection_Text1">@lang('main.PaymentPlatform')</div>
                <div class="welcomeSection_Text2">INDIGO24</div>
                <div class="welcomeSection_Text3">@lang('main.productINfo')</div>
                <a href="/tariff"><button>@lang('main.Tar')</button></a>
            </div>
            <div class="welcomeSection_img">
                <img src="{{ asset('img/wel1.png') }}">
            </div>
    </section>
    <section class="welcomeSection2">
        <ul>
            <li>
                <img src="{{ asset('img/LOGO1.png') }}">
                <div class="text1">
                   @lang('main.Availability')
                </div>
                <div class="text2">
                    @lang('main.textAvailability')
                </div>
            </li>
            <li>
                <img src="{{ asset('img/LOGO2.png') }}">
                <div class="text1">
                    @lang('main.Communicate')
                </div>
                <div class="text2">
                    @lang('main.textCommunicate')
                </div>
            </li>
            <li>
                <img src="{{ asset('img/LOGO3.png') }}">
                <div class="text1">
                    @lang('main.cart')
                </div>
                <div class="text2">
                    @lang('main.textCart')
                </div>
            </li>
        </ul>
    </section>
    <section class="welcomeSection3">
            <div class="welcomeSection3_block1">
                <img class="phone1" src="{{ asset('img/phone1.png') }}">
                <img class="phone2" src="{{ asset('img/phone2.png') }}">
                <div class="welcomeSection3_block1_blockDownload">
                    <div class="welcomeSection3_block1_blockDownload_text1Block">
                        @lang('main.DownloadPhone')
                    </div>
                    <div class="welcomeSection3_block1_blockDownload_text2">
                        @lang('main.textDownload')
                    </div>
                    <div class="welcomeSection3_block1_blockDownload_buttons">
                        <a target="_blank" href="https://apps.apple.com/ru/app/indigo24/id1519932097"><button class="butApp"><img src="{{ asset('img/apple.png') }}">App Store</button></a>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=kz.indigo24.app"><button class="butPlay"><img src="{{ asset('img/play.png') }}">Google Play</button></a>
                    </div>
                </div>
            </div>
            <div class="welcomeSection3_block2">
                <div class="welcomeSection3_block2_leftBlock">
                    <div class="text1">
                        @lang('main.GSecurity')
                    </div>
                    <div class="text3">
                    text3
                    </div>
                    <a href="/security"><button>@lang('main.security')</button></a>
                </div>
                <div class="welcomeSection3_block2_rightBlock">
                    <img src="{{ asset('img/security.png') }}">
                </div>
            </div>
    </section>
    <img id="go-top" src="{{ asset('img/buttonUp.png') }}">
    <script src="{{asset('js/welcome.js')}}"></script>
@endsection


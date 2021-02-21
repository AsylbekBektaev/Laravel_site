@extends('head')
@section('content')
    <section class="infoSectionCompany">
        <div class="block">
            <div class="closeBlock">
                <div id="doc1" class="text1">
                    СПРАВКА О ГОСУДАРСТВЕННОЙ РЕГИСТРАЦИИ
                </div>
                <div id="doc2" class="text1">
                    МЕМЛЕКЕТТІК ТІРКЕУ ТУРАЛЫ АНЫҚТАМА
                </div>
                <div id="doc3" class="text1">
                    @lang('main.doc1Text')
                </div>
                <div id="doc4" class="text1">
                    @lang('main.doc2Text')
                </div>
                <div id="doc5" class="text1">
                    @lang('main.doc3Text')
                </div>
                <img src="{{ asset('img/iks.png') }}" >
            </div>
            <img class="docImage" src="">
        </div>
    </section>
    <section class="SectionCompany">
        <div class="textPagesCompany">@lang('main.AboutCompany')</div>
        <div class="textPagesCompany2">@lang('main.ruk')</div>
        <ul class="BlockItems1">
            <li class="one">
                <div class="text1">
                    Даурен Казбекулы
                </div>
                <div class="text2">
                    @lang('main.osnovatel')
                </div>
                <div class="text3">
                    @lang('main.osnText')
                </div>
            </li>
            <li class="two">
                <div class="text1">
                    Олег Гредин
                </div>
                <div class="text2">
                    @lang('main.director')
                </div>
                <div class="text3">
                    @lang('main.textDirector')
                </div>
            </li>
        </ul>
        <ul class="BlockItems2">
            <li class="one">
                <div class="text1">
                    Асет Азимканов
                </div>
                <div class="text2">
                    @lang('main.financeDirector')
                </div>
                <div class="text3">
                    @lang('main.finDirText')
                </div>
            </li>
            <li class="two">
                <div class="text1">
                    Сагадиев Данияр
                </div>
                <div class="text2">
                    @lang('main.biznesDir')
                </div>
                <div class="text3">
                    @lang('main.bizDirText')
                </div>
            </li>
        </ul>
        <div class="textPagesCompany3">
            @lang('main.Docs')
        </div>
        <ul class="docItems">
            <li>
                <div>СПРАВКА О ГОСУДАРСТВЕННОЙ РЕГИСТРАЦИИ</div>
                <img src="{{ asset('img/gos1.png') }}">
            </li>
            <li>
                <div>МЕМЛЕКЕТТІК ТІРКЕУ ТУРАЛЫ АНЫҚТАМА</div>
                <img src="{{ asset('img/gos2.png') }}">
            </li>
            <li>
                <div>@lang('main.doc1Text')</div>
                <img src="{{ asset('img/gos3.png') }}">
            </li>
        </ul>
        <ul class="docItems2">
            <li>
                <div>@lang('main.doc2Text')</div>
                <img src="{{ asset('img/gos4.png') }}">
            </li>
            <li>
                <div>@lang('main.doc3Text')</div>
                <img src="{{ asset('img/gos4.png') }}">
            </li>
        </ul>
    </section>
    <script src="{{asset('js/company.js')}}"></script>
@endsection

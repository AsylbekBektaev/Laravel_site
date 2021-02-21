@extends('head')
@section('content')
    <section class="infoSectionContact">
        <div class="block">
            <div class="closeBlock">
                <div class="text1">
                </div>
                <img src="{{ asset('img/iks.png') }}" >
            </div>
            <div class="text1">
                @lang('main.HelpText')
            </div>
            <div class="text2">
                @lang('main.InHelpText')
            </div>
            <form action="callSupport" method="POST">
                @csrf
                <input type="hidden"  name="_token" value="{{csrf_token()}}">
                <div class="nameAndSurname">
                    <label class="labName" for="name">@lang('main.CallName')<span>*</span></label>
                    <input class="formName" style="outline: none; " name="name" type="text" required autocomplete="off">
                    <label class="labsurName"
                           @if(\Illuminate\Support\Facades\App::getLocale() === 'kz')
                           style="right: 300px;"
                           @endif
                    for="surname">@lang('main.CallSurname')<span>*</span></label>
                    <input class="formSurname" style="outline: none;" name="surname" type="text" required autocomplete="off">
                </div>
                <label class="labNum" for="number">@lang('main.CallNumber')<span>*</span></label>
                <input class="formNumber"  style="outline: none;"  name="number" type="text"     required autocomplete="off">
                <label class="labEmail" for="email">Эл-почта<span>*</span></label>
                <input class="formEmail" type="email" name="email" pattern=".+"  required autocomplete="off">
                <label class="labComment" for="comment">@lang('main.CallComment')<span>*</span></label>
                <textarea name="comment" style="outline: none;"   class="formComment" required autocomplete="off">
                </textarea>
                <button type="submit">
                    @lang('main.CallBut')
                </button>
            </form>
        </div>
    </section>
    <section class="SectionContact">
        <div class="textPagesContact">
            @lang('main.contact')
        </div>
        <div class="blockText">
            @lang('main.BlockTextHelp')
        </div>
    </section>
        <div class="blockNumbers">
            <div class="text1">
                @lang('main.HelpText')
            </div>
            <div class="num">
                <a target="_blank" href="https://wa.me/+77750072424">
                    <img src="{{ asset('img/whatsapp.png') }}">
                    <span class="whatsapp2"> +7 775 007 24 24</span>
                </a>
                <a target="_blank" href="https://t.me/+77016040650">
                    <img src="{{ asset('img/telegram.png') }}">
                    <span class="telegram2">+7 701 604 06 50</span>
                </a>
            </div>
            <button class="Callback">
                @lang('main.CallText')
            </button>
        </div>
        <div class="mapsBlock">
            <div class="block1">
                <div class="textPagesContact2">
                    @lang('main.MyTerminals')
                </div>
                <div class="itemsAdr">
                    <ul class="item1">
                        <li class="city">@lang('main.cityAstana')
                        </li>
                        <li>@lang('main.AstanaTer1')
                        </li>
                        <li class="city">@lang('main.cityAlmaty')</li>
                        <li>@lang('main.AlmatyTer1')</li>
                        <li> @lang('main.AlmatyTer2')</li>
                        <li>@lang('main.AlmatyTer3')</li>
                        <li>@lang('main.AlmatyTer4')</li>
                    </ul>
                    <ul class="item2">
                        <li class="city">@lang('main.cityShym')
                        </li>
                        <li>@lang('main.ShymTer1')
                        </li>
                        <li class="city">@lang('main.cityTal')</li>
                        <li>@lang('main.TalTer1')</li>
                        <li>@lang('main.TalTer2')</li>
                        <li>@lang('main.TalTer3')</li>
                        <li>@lang('main.TalTer4') </li>
                        <li>@lang('main.TalTer5')</li>
                    </ul>
                </div>
            </div>
            <div class="block2">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A23a635f63062f6c7941594ca795a1c4ec51e7f852a263010267c84d47bdff99b&amp;source=constructor" width="531" height="417" frameborder="0"></iframe>
            </div>
        </div>
    <script src="{{asset('js/contact.js')}}"></script>
@endsection

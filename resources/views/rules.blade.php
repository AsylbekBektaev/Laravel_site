@extends('head')
@section('content')
    <section class="SectionRules">
        <div class="textPagesRules">
        @lang('main.RulesSog')
        </div>
        <div class="text1">
            @lang('main.RulesText')
        </div>
        <div class="acor-container2">
            <input type="checkbox" name="chacor" id="chacor1"  />
            <label for="chacor1">@lang('main.RulesBlock1')</label>
            <div class="acor-body">
               @lang('main.RulesBlock1Text')
            </div>

            <input type="checkbox" name="chacor" id="chacor2" />
            <label for="chacor2">@lang('main.RulesBlock2')</label>
            <div class="acor-body">
                @lang('main.RulesBlock2Text')
            </div>

            <input type="checkbox" name="chacor" id="chacor3" />
            <label for="chacor3">@lang('main.RulesBlock3')</label>
            <div class="acor-body">
               @lang('main.RulesBlock3Text')
            </div>
            <input type="checkbox" name="chacor" id="chacor4" />
            <label for="chacor4">@lang('main.RulesBlock4')</label>
            <div class="acor-body">
                @lang('main.RulesBlock4Text')
                <table dir="ltr"
                       @if(\Illuminate\Support\Facades\App::getLocale() === 'kz')
                       style="width: 100%;border-radius:20px;"
                       @endif
                       @if(\Illuminate\Support\Facades\App::getLocale() === 'ru')
                       style="width: 100%;border-radius:20px;"
                       @endif
                       @if(\Illuminate\Support\Facades\App::getLocale() === 'en')
                       style="width: 100%;border-radius:20px;"
                       @endif

                       border="1" cellspacing="0" cellpadding="0">
                    <tbody style="border-radius:20px;">
                    <tr style="border-top-left-radius:20px;border-top-right-radius:20px;">
                        <td style="border-top-left-radius:20px;">@lang('main.tr1_td1')</td>
                        <td style="">@lang('main.tr1_td2')</td>
                        <td style="">@lang('main.tr1_td3')</td>
                        <td style="border-top-right-radius:20px;">@lang('main.tr1_td4')</td>
                    </tr>
                    <tr>
                        <td style="">@lang('main.tr2_td1')</td>
                        <td style="">@lang('main.tr2_td2')</td>
                        <td style="">@lang('main.tr2_td3')</td>
                        <td style="">@lang('main.tr2_td4')</td>
                    </tr>
                    <tr>
                        <td style="">@lang('main.tr3_td1')</td>
                        <td style="">@lang('main.tr3_td2')</td>
                        <td style="">@lang('main.tr3_td3')</td>
                        <td style="">@lang('main.tr3_td4')</td>
                    </tr>
                    <tr>
                        <td style="">@lang('main.tr4_td1')</td>
                        <td style="">@lang('main.tr4_td2')</td>
                        <td style="">@lang('main.tr4_td3')</td>
                        <td style="">@lang('main.tr4_td4')</td>
                    </tr>
                    <tr style="border-bottom-left-radius:20px;border-bottom-right-radius:20px;">
                        <td style="border-bottom-left-radius:20px;">@lang('main.tr5_td1')</td>
                        <td style="">@lang('main.tr5_td2')</td>
                        <td style="">@lang('main.tr5_td3')</td>
                        <td style="border-bottom-right-radius:20px;">@lang('main.tr5_td4')</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <input type="checkbox" name="chacor" id="chacor5" />
            <label for="chacor5">@lang('main.RulesBlock5')</label>
            <div class="acor-body">
                @lang('main.RulesBlock5Text')
            </div>
            <input type="checkbox" name="chacor" id="chacor6" />
            <label for="chacor6">@lang('main.RulesBlock6')</label>
            <div class="acor-body">
                @lang('main.RulesBlock6Text')
            </div>

            <input type="checkbox" name="chacor" id="chacor7" />
            <label for="chacor7">@lang('main.RulesBlock7')</label>
            <div class="acor-body">
                @lang('main.RulesBlock7Text')
            </div>
            <input type="checkbox" name="chacor" id="chacor8" />
            <label for="chacor8">@lang('main.RulesBlock8')</label>
            <div class="acor-body">
                @lang('main.RulesBlock8Text')
            </div>

            <input type="checkbox" name="chacor" id="chacor9" />
            <label for="chacor9">@lang('main.RulesBlock9')</label>
            <div class="acor-body">
                @lang('main.RulesBlock9Text')
            </div>
            <input type="checkbox" name="chacor" id="chacor10" />
            <label for="chacor10">@lang('main.RulesBlock10')</label>
            <div class="acor-body">
                @lang('main.RulesBlock10Text')
            </div>

            <input type="checkbox" name="chacor" id="chacor11" />
            <label for="chacor11">@lang('main.RulesBlock11')</label>
            <div class="acor-body">
                @lang('main.RulesBlock11Text')
            </div>
            <input type="checkbox" name="chacor" id="chacor12" />
            <label for="chacor12">@lang('main.RulesBlock12')</label>
            <div class="acor-body">
                @lang('main.RulesBlock12Text')
            </div>
            <div class="mar"></div>
        </div>
    </section>
    <img id="go-top" src="{{ asset('img/buttonUp.png') }}">
@endsection

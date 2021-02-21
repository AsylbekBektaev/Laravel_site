@extends('head')
@section('content')
    <section class="SectionSecurity">
        <div class="textPagesSecurity">
            @lang('main.security')
        </div>
        <div class="text1">
            @lang('main.SecurityText')
        </div>
        <div class="acor-container">

            <input type="checkbox" name="chacor" id="chacor1"  />
            <label for="chacor1">@lang('main.SecBlock1')</label>
            <div class="acor-body">
                @lang('main.SecBlock1Text')
            </div>

            <input type="checkbox" name="chacor" id="chacor2" />
            <label for="chacor2">@lang('main.SecBlock2')</label>
            <div class="acor-body">
               @lang('main.SecBlock2Text')
            </div>
            <input type="checkbox" name="chacor" id="chacor3" />
            <label for="chacor3">@lang('main.SecBlock3')</label>
            <div class="acor-body">
                @lang('main.SecBlock3Text')
            </div>
            <input type="checkbox" name="chacor" id="chacor4" />
            <label for="chacor4">@lang('main.SecBlock4')</label>
            <div class="acor-body">
               @lang('main.SecBlock4Text')
            </div>

            <input type="checkbox" name="chacor" id="chacor5" />
            <label for="chacor5">@lang('main.SecBlock5')</label>
            <div class="acor-body">
                @lang('main.SecBlock5Text')
            </div>
            <div class="mar"></div>
        </div>
    </section>
    <img id="go-top" src="{{ asset('img/buttonUp.png') }}">
@endsection

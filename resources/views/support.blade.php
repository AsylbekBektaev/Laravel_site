@extends('head')
@section('content')
    <section class="infoSectionSupport">
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
                    <input class="formSurname" style="outline: none; "  name="surname" type="text" required autocomplete="off">
                </div>
                <label class="labNum" for="number">@lang('main.CallNumber')<span>*</span></label>
                <input class="formNumber" style="outline: none; " name="number"  type="text"  required autocomplete="off">
                <label class="labEmail" for="email">Эл-почта<span>*</span></label>
                <input class="formEmail" type="email" name="email" pattern=".+"  required autocomplete="off">
                <label class="labComment" for="comment">@lang('main.CallComment')<span>*</span></label>
                <textarea name="comment" class="formComment"  style="outline: none; " required autocomplete="off">
                </textarea>
                <button type="submit">
                    @lang('main.CallBut')
                </button>
            </form>
        </div>
    </section> <section class="infoSectionSupport">
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
  <section class="SectionSupport">
      <div class="textPagesSupport">
          @lang('main.support')
      </div>
      <div class="textPagesSupport2">
          @lang('main.helpV')
      </div>
      <div class="acor-container3">
          <input type="checkbox" name="chacor" id="chacor1"  />
          <label for="chacor1">@lang('main.SupportBlock1')</label>
          <div class="acor-body">
             @lang('main.SupportBlock1Text')
          </div>

          <input type="checkbox" name="chacor" id="chacor2" />
          <label for="chacor2">@lang('main.SupportBlock2')</label>
          <div class="acor-body">
              @lang('main.SupportBlock2Text')
          </div>

          <input type="checkbox" name="chacor" id="chacor3" />
          <label for="chacor3">@lang('main.SupportBlock3')</label>
          <div class="acor-body">
              @lang('main.SupportBlock3Text')
          </div>
          <input type="checkbox" name="chacor" id="chacor4" />
          <label for="chacor4">@lang('main.SupportBlock4')</label>
          <div class="acor-body">
              @lang('main.SupportBlock4Text')
          </div>
          <div class="mar"></div>
      </div>

      <div class="miniContBlock">
          <div class="block1">
                <div>
                    <span class="text1">
                        @lang('main.HelpText')
                    </span>
                    <span class="numberImgLink">
                        <a target="_blank" href="https://wa.me/+77750072424">
                            <img class="wat" src="{{ asset('img/whatsapp.png') }}">
                        <span class="whatsapp">+7775 007 24 24</span>
                        </a>
                        <a target="_blank" href="https://t.me/+77016040650">
                            <img  class="tel" src="{{ asset('img/telegram.png') }}">
                        <span class="telegram">+77016040650</span>
                        </a>
                    </span>
                    <button class="Callback">@lang('main.CallText')</button>
                </div>
          </div>
          <div class="block2">
              <img src="{{ asset('img/human.png') }}">
          </div>
      </div>
  </section>
    <script src="{{asset('js/support.js')}}"></script>
@endsection

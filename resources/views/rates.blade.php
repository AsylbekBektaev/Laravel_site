@extends('head')
@section('content')
    <section class="infoSectionRates">
        <div class="block">
            <div class="closeBlock">
                <div  id="moneyContent" class="text1">
                    @lang('main.MoneyConText')
                </div>
                <div  id="mobileContent" class="text1">
                    @lang('main.MobileConText')
                </div>
                <div  id="partnersContent" class="text1">
                    @lang('main.PartnersConText')
                </div>
                <div  id="televisionContent" class="text1">
                    @lang('main.TVConText')
                </div>
                <div  id="transportContent" class="text1">
                    @lang('main.TransportConText')
                </div>
                <div  id="bukContent" class="text1">
                    @lang('main.BukConText')
                </div>
                <div  id="utilContent" class="text1">
                    @lang('main.UtilConText')
                </div>
                <div  id="mobileSngContent" class="text1">
                    @lang('main.MobSngConText')
                </div>
                <div  id="electronContent" class="text1">
                    @lang('main.ElConText')
                </div>
                <div id="ElMoneyContent" class="text1">
                    @lang('main.ElMoneyContentT')
                </div>
                <div id="LocalUZServices" class="text1">
                    @lang('main.LocalUZServicesText')
                </div>
                <div id="SurSertificate" class="text1">
                    @lang('main.SertificateSurText')
                </div>
                <div id="GameContent" class="text1">
                    @lang('main.GameText')
                </div>
                <div id="SocSet" class="text1">
                    @lang('main.SocSetText')
                </div>
                <div id="PROServices" class="text1">
                    @lang('main.PROServicesText')
                </div>
                <img src="{{ asset('img/iks.png') }}" >
            </div>
            <div class="moneyContent">
                @if($MoneyServices)
                    @foreach($MoneyServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="mobileContent">
                @if($MobileServices)
                    @foreach($MobileServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="partnersContent">
                @if($PartnersServices)
                    @foreach($PartnersServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="televisionContent">
                @if($TVServices)
                    @foreach($TVServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="transportContent">
                @if($TransportServices)
                    @foreach($TransportServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="bukContent">
                @if($BukServices)
                    @foreach($BukServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="utilContent">
                @if($UtilServices)
                    @foreach($UtilServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="mobileSngContent">
                @if($MobileSngServices)
                    @foreach($MobileSngServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="electronContent">
                @if($ElecMoneyServices)
                    @foreach($ElecMoneyServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="ElMoneyContent">
                @if($Indigo24ElMoneyServices)
                    @foreach($Indigo24ElMoneyServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="LocalUZServices">
                @if($LocalUZServices)
                    @foreach($LocalUZServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="SurSertificate">
                @if($CardSurServices)
                    @foreach($CardSurServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
             </div>
            <div class="GameContent">
                @if($GameServices)
                    @foreach($GameServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="SocSet">
                @if($SocSetServices)
                    @foreach($SocSetServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="PROServices">
                @if($ProServices)
                    @foreach($ProServices as $val)
                        <div class="info">
                            <div class="text1">{{$val['name']}}</div>
                            <div class="text2">{{$val['percent']}}</div>
                        </div>
                    @endforeach
                @endif
            </div>
    </section>
    <section class="SectionRates">
        <div class="textPagesRates">
            @lang('main.Tar')
        </div>
        <ul class="Items1">
            <li>
                <div class="text1">@lang('main.MoneyConText')</div>
                <div class="text2">@lang('main.cashRequest')</div>
                <button class="moneyContent">
                    @lang('main.pod_rates')
                </button>
            </li>
            <li>
                <div class="text1">@lang('main.MobileConText')</div>
                <div class="text2">@lang('main.cellular')</div>
                <button class="mobileContent">
                    @lang('main.pod_rates')
                </button>
            </li>

            <li>
                <div class="text1">@lang('main.PartnersConText')</div>
                <div class="text2">@lang('main.partners')</div>
                <button class="partnersContent">
                    @lang('main.pod_rates')
                </button>
            </li>

            <li>
                <div class="text1">@lang('main.TVConText')</div>
                <div class="text2">@lang('main.television')</div>
                <button class="televisionContent">
                    @lang('main.pod_rates')
                </button>
            </li>

            <li>
                <div id="ELMONINDIGO24" class="text1">@lang('main.ElMoneyContentT')</div>
                <div class="text2">@lang('main.ElMoneyContent')</div>
                <button class="ElMoneyContent">
                    @lang('main.pod_rates')
                </button>
            </li>
            <li>
                <div class="text1">@lang('main.TransportConText')</div>
                <div class="text2">@lang('main.transport')</div>
                <button class="transportContent">
                    @lang('main.pod_rates')
                </button>
            </li>
            <li>
                <div class="text1">@lang('main.BukConText')</div>
                <div class="text2">@lang('main.stav')</div>
                <button class="bukContent">
                    @lang('main.pod_rates')
                </button>
            </li>



            <li>
                <div class="text1">@lang('main.UtilConText')</div>
                <div class="text2">@lang('main.comUs')</div>
                <button class="utilContent">
                    @lang('main.pod_rates')
                </button>
            </li>
            <li>
                <div class="text1">@lang('main.MobSngConText')</div>
                <div class="text2">@lang('main.mobileSNG')</div>
                <button class="mobileSngContent">
                    @lang('main.pod_rates')
                </button>
            </li>
            <li>
                <div class="text1">@lang('main.ElConText')</div>
                <div class="text2">@lang('main.electronMoney')</div>
                <button class="electronContent">
                    @lang('main.pod_rates')
                </button>
            </li>


            <li>
                <div class="text1">@lang('main.LocalUZServicesText')</div>
                <div class="text2">@lang('main.LocalUZServices')</div>
                <button class="LocalUZServices">
                    @lang('main.pod_rates')
                </button>
            </li>
            <li>
                <div class="text1">@lang('main.SertificateSurText')</div>
                <div class="text2">@lang('main.SertificateSur')</div>
                <button class="SurSertificate">
                    @lang('main.pod_rates')
                </button>
            </li>
            <li>
                <div class="text1">@lang('main.GameText')</div>
                <div class="text2">@lang('main.Game')</div>
                <button class="GameContent">
                    @lang('main.pod_rates')
                </button>
            </li>


            <li>
                <div class="text1">@lang('main.SocSetText')</div>
                <div class="text2">@lang('main.SocSet')</div>
                <button class="SocSet">
                    @lang('main.pod_rates')
                </button>
            </li>
            <li>
                <div class="text1">@lang('main.PROServicesText')</div>
                <div class="text2">@lang('main.PROServices')</div>
                <button class="PROServices">
                    @lang('main.pod_rates')
                </button>
            </li>
        </ul>
    </section>
    <img id="go-top" src="{{ asset('img/buttonUp.png') }}">
    <script src="{{asset('js/rates.js')}}"></script>
@endsection

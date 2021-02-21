<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class IController extends Controller
{

    public function CallSupport(Request $req){
//        dd($req->request);
        if($req->request){
            $name=$req->request->all()["name"];
            $surname=$req->request->all()["surname"];
            $number=$req->request->all()["number"];
            $comment=$req->request->all()["comment"];
            $email=$req->request->all()["email"];
            session(['name'=>$name]);
            session(['surname'=>$surname]);
            session(['number'=>$number]);
            session(['comment'=>$comment]);
            session(['email'=>$email]);
        }
        Mail::send(['text'=>'mail'],['name',session('name')],function ($message){
            $message->to('support@indigo24.com')->subject('Обратная связь с Сайта indigo24.com');
            $message->from('ab@indigo24.com',session('email'));
        });

        return redirect()->back();
    }


    public function Rates(){
        // block Денежные переводы
        $MoneyRequestServices=[
            ['name'=>'Внутренние переводы между кошельками клиентов системы «INDIGO24»', 'percent'=>'0%'],
            ['name'=>'Вывод (Погашение) электронных денег на платежные карты UzCard и Humo','percent'=>'5,5%'],
            ['name'=>'Вывод (Погашение) электронных денег на платежные карты Visa/ Mastercard/ МИР Россия','percent'=>'5%'],
            ['name'=>'Вывод (Погашение) электронных денег на платежные карты Элкарт','percent'=>'3.5%'],
            ['name'=>'Вывод (Погашение) электронных денег на платежные карты Visa и Mastercard','percent'=>'2.2%']
            ];
        //Сотовая связь
        $MobileServices=[
            ['name'=>'Билайн Казахстан (свыше 5000 тенге комиссия - 2,2%)','percent'=>'0%'],
            ['name'=>'Activ','percent'=>'0%'],
            ['name'=>'Altel 4G','percent'=>'0%'],
            ['name'=>'K-Cell','percent'=>'0%'],
            ['name'=>'Tele2','percent'=>'0%']
        ];
        // Партнеры
        $PartnersServices=[
            ['name'=>'Самообразовательный курс «Evolution»','percent'=>'0%'],
            ['name'=>'Пакет «Быстрый старт»','percent'=>'0%'],
            ['name'=>'YourRanch KZ','percent'=>'0%'],
            ['name'=>'Nano Life Group','percent'=>'0%']
        ];
        //Телевидение
        $TVServices=[
            ['name'=>'Otau TV – Пакет Полный','percent'=>'0%'],
            ['name'=>'Триколор ТВ','percent'=>'6%'],
            ['name'=>'НТВ Плюс','percent'=>'5%']
        ];
        //Транспорт
        $TransportServices=[
            ['name'=>'ОНАЙ - Транспортная карта г.Алматы','percent'=>'0%']
        ];
        //Букмекеры
        $BukmekkersServices=[
            ['name'=>'Букмекерская контора ГОЛ+ПАС','percent'=>'0%'],
            ['name'=>'Profitbet.kz','percent'=>'0%'],
            ['name'=>'StavkaBet','percent'=>'0%'],
            ['name'=>'FAQBET','percent'=>'0%'],
            ['name'=>'parimatch.kz','percent'=>'0%'],
            ['name'=>'fairplay.kz','percent'=>'0%'],
            ['name'=>'FONBET','percent'=>'0%'],
            ['name'=>'1xBet.kz','percent'=>'0%'],
            ['name'=>'OLIMPBET','percent'=>'0%']
        ];
        //Коммунальные услуги
        $UtilitesServices=[
            ['name'=>'KazTransCom','percent'=>'0%'],
            ['name'=>'Степногорск Энергосбыт - физ.лица','percent'=>'0%'],
            ['name'=>'AlemGaz','percent'=>'0%'],
            ['name'=>'Аксу су кубыры','percent'=>'0%'],
            ['name'=>'Алматы Газ - I вентканал','percent'=>'0%'],
            ['name'=>'Алматы паркинг - пополнение счета','percent'=>'0%'],
            ['name'=>'Балхаш - Электронный Город','percent'=>'0%'],
            ['name'=>'Батыс Энергоресурсы','percent'=>'0%'],
            ['name'=>'ГКП Озенинвест акимата г.Жанаозен','percent'=>'0%'],
            ['name'=>'ГКП "Тазалык" акимата г.Жанаозен','percent'=>'0%'],
            ['name'=>'Есиль Лифт Пром','percent'=>'0%'],
            ['name'=>'Есиль Лифт Сервис','percent'=>'0%'],
            ['name'=>'Жайыктеплоэнерго','percent'=>'0%'],
            ['name'=>'Караганда Лифт Инвест','percent'=>'0%'],
            ['name'=>'Караганда-биллинг- Вывоз мусора','percent'=>'0%'],
            ['name'=>'Караганды Жылу Сбыт- за электроэнергию','percent'=>'0%'],
            ['name'=>'Караганды Жылу Сбыт теплоэнергия и гвс','percent'=>'0%'],
            ['name'=>'КГП на ПХВ "Саранькоммунсервис"','percent'=>'0%'],
            ['name'=>'Коммунсбыт - Домофон','percent'=>'0%'],
            ['name'=>'Косшы Тазалык','percent'=>'0%'],
            ['name'=>'КТЭК','percent'=>'0%'],
            ['name'=>'КЭЦ - физ. Лица','percent'=>'0%'],
            ['name'=>'Мартук-сервис','percent'=>'0%'],
            ['name'=>'ГКП Озенжылу','percent'=>'0%'],
            ['name'=>'Озенсантехобслуживание','percent'=>'0%'],
            ['name'=>'Орал Таза Сервис','percent'=>'0%'],
            ['name'=>'Оскемен Водоканал - физ. лица','percent'=>'0%'],
            ['name'=>'Панфилов Су кубыры','percent'=>'0%'],
            ['name'=>'СарыаркаЛифт','percent'=>'0%'],
            ['name'=>'Семей Водоканал','percent'=>'0%'],
            ['name'=>'Семей-Домофон','percent'=>'0%'],
            ['name'=>'Талдыкоргантеплосервис','percent'=>'0%'],
            ['name'=>'Таразэнергоцентр','percent'=>'0%'],
            ['name'=>'Шыгысэнерготрейд - за акты','percent'=>'0%'],
            ['name'=>'Электр жүйелерi','percent'=>'0%'],
            ['name'=>'Актобеэнергоснаб - для физ. Лиц','percent'=>'0%'],
            ['name'=>'Карагандалифт','percent'=>'0%'],
            ['name'=>'Кокшетау Жылу-водоснабжение','percent'=>'0%'],
            ['name'=>'Актобеэнергоснаб - для ИП','percent'=>'0%'],
            ['name'=>'АлматыЭнергоСбыт','percent'=>'0%'],
            ['name'=>'Алматыгазсервис - Холдинг юр.лица','percent'=>'0%'],
            ['name'=>'Алматыгазсервис - Холдинг','percent'=>'0%'],
            ['name'=>'Жетысу Водоканал','percent'=>'0%'],
            ['name'=>'Жетісу газ кубыры','percent'=>'0%'],
            ['name'=>'КГП Балхаш Су','percent'=>'0%'],
            ['name'=>'Кокшетау Жылу – Установка прибора учета','percent'=>'0%'],
            ['name'=>'Кызылордатеплоэлектроцентр','percent'=>'0%'],
            ['name'=>'Мангистауэнерго','percent'=>'0%'],
            ['name'=>'Модус Кокшетау - Вызов мастера','percent'=>'0%'],
            ['name'=>'Степногорск-ЕРЦ','percent'=>'0%'],
            ['name'=>'Тауекел-Н-Алгабас','percent'=>'0%'],
            ['name'=>'КазТрансГаз Аймак–За усл. по подкл. ж/д','percent'=>'0%'],
            ['name'=>'МАЭК - Казатомпром','percent'=>'0%'],
            ['name'=>'Кокшетау Жылу- теплоснабжение','percent'=>'0%'],
            ['name'=>'Каспи жылу су Арнасы','percent'=>'0%'],
            ['name'=>'Астана сити Лифт Сервис','percent'=>'0%']
        ];
        //Сотовая связь СНГ
        $Mobile_SNG_Services=[
            ['name'=>'Билайн (Кыргызстан)','percent'=>'4%'],
            ['name'=>'Megacom (Кыргызстан)','percent'=>'5,5%'],
            ['name'=>'О Нуртелеком! (Кыргызстан)','percent'=>'5%'],
            ['name'=>'Билайн (Узбекистан)','percent'=>'4,5%'],
            ['name'=>'Ucell (Узбекистан)','percent'=>'3%'],
            ['name'=>'UMS (Узбекистан)','percent'=>'3%'],
            ['name'=>'Perfectum (Узбекистан)','percent'=>'3%'],
            ['name'=>'Uzmobile GSM (Узбекистан)','percent'=>'3%'],
            ['name'=>'Uzmobile CDMA (Узбекистан)','percent'=>'3%'],
            ['name'=>'Билайн (Таджикистан)','percent'=>'5%'],
            ['name'=>'TK-Mobile (Таджикистан)','percent'=>'6%'],
            ['name'=>'Мегафон (Таджикистан)','percent'=>'5%'],
            ['name'=>'Вавилон Мобайл (Таджикистан)','percent'=>'5%'],
            ['name'=>'(Tcell) Indigo (Таджикистан)','percent'=>'5%'],
            ['name'=>'Билайн (Россия)','percent'=>'5%'],
            ['name'=>'Мегафон-Москва (Россия)','percent'=>'5%'],
            ['name'=>'МТС (Россия)','percent'=>'5%'],
            ['name'=>'Tele2 (Россия)','percent'=>'5%'],
            ['name'=>'Ucom(Orange (Армения)','percent'=>'6%'],
            ['name'=>'Билайн (Армения)','percent'=>'6%'],
            ['name'=>'МТС (Армения) Vivacell','percent'=>'6%'],
            ['name'=>'Билайн (Грузия)','percent'=>'5%'],
            ['name'=>'GlobalCell (Грузия)','percent'=>'6%']
        ];
        //Электронные деньги
        $ElectronMoneyServices=[
            ['name'=>'Webmoney WMZ','percent'=>'8%'],
            ['name'=>'Webmoney WMR','percent'=>'8%'],
            ['name'=>'Webmoney WMK','percent'=>'2%'],
            ['name'=>'Webmoney | WMY','percent'=>'7%'],
            ['name'=>'ЮMoney (Яндекс.Деньги)','percent'=>'5%'],
            ['name'=>'WalletOne | RUB','percent'=>'6%'],
            ['name'=>'QIWI Wallet | RUB','percent'=>'8%'],
            ['name'=>'ExpressPay | Таджикистан','percent'=>'5%'],
            ['name'=>'B-Pay | Молдова','percent'=>'4%'],
            ['name'=>'Xoocash | Молдова','percent'=>'4%'],
            ['name'=>'Элсом | Кыргызстан','percent'=>'5%'],
            ['name'=>'О! Нуртелеком | Деньги | Кыргызстан','percent'=>'5%'],
            ['name'=>'OsonWallet','percent'=>'6%'],
            ['name'=>'Moneta.ru | Россия','percent'=>'4%'],
            ['name'=>'IntellectMoney | Россия','percent'=>'4%'],
            ['name'=>'Arvand | Wallet | Таджикистан','percent'=>'4%'],
            ['name'=>'Azizi-Moliya | Wallet | Таджикистан','percent'=>'4%'],
            ['name'=>'Алиф | Пополнение кошелька | Таджикистан','percent'=>'4%'],
            ['name'=>'QIWI Wallet | EUR','percent'=>'7%'],
            ['name'=>'QIWI Wallet | KZT','percent'=>'3%'],
            ['name'=>'Payeer | EUR','percent'=>'5%'],
            ['name'=>'Payeer | USD','percent'=>'5%'],
            ['name'=>'Perfect Money | EUR','percent'=>'5%'],
            ['name'=>'Perfect Money | USD','percent'=>'5%'],
            ['name'=>'Яндекс  Касса','percent'=>'5%']
        ];
        // Электронные деньги ИНДИГО24
        $ElMoneyIndigo24Services=[
            ['name'=>'Посредством платежных терминалов самообслуживания','percent'=>'0%'],
            ['name'=>'С платежных карт Visa и Mastercard','percent'=>'2.7%']
        ];
        // Локальные сервисы Узбекистана
        $LocalUZServices=[
            ['name'=>'COMNET | Узбекистан','percent'=>'3%'],
            ['name'=>'EVO | Узбекистан','percent'=>'3%'],
            ['name'=>'FIBERNET | Узбекистан','percent'=>'3%'],
            ['name'=>'SARKOR TELECOM | Узбекистан','percent'=>'3%'],
            ['name'=>'SHARQ TELEKOM | Узбекистан','percent'=>'3%'],
            ['name'=>'TASXUZ | Узбекистан','percent'=>'3%'],
            ['name'=>'TPS | Узбекистан','percent'=>'3%'],
            ['name'=>' UZDIGITAL | Узбекистан','percent'=>'3%'],
            ['name'=>'UZONLINE | Узбекистан','percent'=>'3%'],
        ];
        //Подарочные карты
        $CardSurprise=[
            ['name'=>'Подарочные карты	Пополнение бумажника PlayStation.Store 500','percent'=>'7%'],
            ['name'=>' Пополнение бумажника PlayStation.Store 5500','percent'=>'7%'],
            ['name'=>' 3-месячная подписка PlayStation Plus','percent'=>'5%'],
            ['name'=>'12-месячная подписка PlayStation Plus','percent'=>'5%'],
            ['name'=>'Пополнение бумажника PlayStation.Store 1000','percent'=>'6,5%'],
            ['name'=>' Пополнение бумажника PlayStation.Store 2500','percent'=>'6,5%'],
            ['name'=>'Пополнение бумажника PlayStation.Store 4000','percent'=>'	6,5%'],
            ['name'=>'Blizzard: карты на 500 р','percent'=>'4%'],
            ['name'=>'Blizzard: карты на 1000 р','percent'=>'4%'],
            ['name'=>'Blizzard: карты на 1500 р','percent'=>'4%'],
            ['name'=>'Blizzard: карты на 2000 р','percent'=>'4%'],
            ['name'=>'PUBG Mobile Voucher Codes 60 UC','percent'=>'2%'],
            ['name'=>'PUBG Mobile Voucher Codes 325 UC','percent'=>'2%'],
            ['name'=>'PUBG Mobile Voucher Codes 1800 UC','percent'=>'2%'],
            ['name'=>'PUBG Mobile Voucher Codes 3850 UC','percent'=>'2%'],
            ['name'=>'PUBG Mobile Voucher Codes 8100 UC','percent'=>'2%']
        ];
        //Игровые платформы
        $GameServices=[
            ['name'=>'World of Tanks','percent'=>'4%'],
            ['name'=>'World of Warships','percent'=>'4%'],
            ['name'=>'World of Warplanes','percent'=>'4%'],
            ['name'=>'Steam ','percent'=>'5%'],
            ['name'=>'Tanki Online','percent'=>'6%'],
            ['name'=>'GameNet','percent'=>'6%'],
            ['name'=>'4game','percent'=>'6%']
        ];
        //Социальные сети
        $SocSetServices=[
            ['name'=>'Mamba','percent'=>'4%'],
            ['name'=>'Viber','percent'=>'3%'],
            ['name'=>'Вконтакте','percent'=>'4%']
        ];
        //Прочие услуги (платеж)
        $PROServices=[
            ['name'=>'Интернет-магазины','percent'=>'0%'],
            ['name'=>'MLMкомпании','percent'=>'0%'],
            ['name'=>'букмекерские компании','percent'=>'0%'],
            ['name'=>'сайты знакомств','percent'=>'0%'],
            ['name'=>'благотворительные организации','percent'=>'0%'],
            ['name'=>'социальные сети','percent'=>'0%'],
            ['name'=>'страховые компании','percent'=>'0%'],
            ['name'=>'юридические компании','percent'=>'0%'],
            ['name'=>'рестораны','percent'=>'0%'],
            ['name'=>'кафе','percent'=>'0%'],
            ['name'=>'сауны','percent'=>'0%'],
            ['name'=>'столовые','percent'=>'0%'],
            ['name'=>'массажные салоны','percent'=>'0%'],
            ['name'=>'салоны красоты','percent'=>'0%'],
            ['name'=>'электронные издания (журналы, газеты)','percent'=>'0%'],
            ['name'=>'услуги такси','percent'=>'0%'],
            ['name'=>'автовокзалы','percent'=>'0%'],
            ['name'=>'охранные агентства','percent'=>'0%'],
            ['name'=>'лотереи','percent'=>'0%'],
            ['name'=>'бухгалтерские услуги','percent'=>'0%'],
            ['name'=>'туристические услуги','percent'=>'0%'],
            ['name'=>'покупка авиа и ж/д билетов','percent'=>'0%'],
            ['name'=>'покупка недвижимости','percent'=>'0%'],
            ['name'=>'автотранспорта','percent'=>'0%'],
            ['name'=>'нотариальные услуги','percent'=>'0%'],
            ['name'=>'санаторно-курортные услуги','percent'=>'0%'],
            ['name'=>'справочные службы','percent'=>'0%'],
            ['name'=>'строительные услуги','percent'=>'0%'],
            ['name'=>'специальные технические услуги','percent'=>'0%'],
            ['name'=>'клининговые услуги','percent'=>'0%'],
            ['name'=>'услуги кейтеринга','percent'=>'0%'],
            ['name'=>'ломбарды','percent'=>'0%'],
            ['name'=>'услуги частных клиник','percent'=>'0%'],
            ['name'=>'услуги паркинга','percent'=>'0%'],
            ['name'=>'услуги ЧСИ','percent'=>'0%'],
            ['name'=>'услуги  Forex трейдинг','percent'=>'0%'],
            ['name'=>'Инвестиционные фонды','percent'=>'0%'],
            ['name'=>'репетиторские услуги','percent'=>'0%'],
            ['name'=>'Обучение Forex','percent'=>'0%'],
            ['name'=>'услуги адвоката','percent'=>'0%'],
            ['name'=>'За хранение информации Клиента на Неактивном Кошельке','percent'=>'10000тг в месяц']
        ];
        $data=[
            'MoneyServices'=>$MoneyRequestServices,
            'MobileServices'=>$MobileServices,
            'PartnersServices'=>$PartnersServices,
            'TVServices'=>$TVServices,
            'TransportServices'=>$TransportServices,
            'BukServices'=>$BukmekkersServices,
            'UtilServices'=>$UtilitesServices,
            'MobileSngServices'=>$Mobile_SNG_Services,
            'ElecMoneyServices'=>$ElectronMoneyServices,
            'Indigo24ElMoneyServices'=>$ElMoneyIndigo24Services,
            'LocalUZServices'=>$LocalUZServices,
            'CardSurServices'=>$CardSurprise,
            'GameServices'=>$GameServices,
            'SocSetServices'=>$SocSetServices,
            'ProServices'=>$PROServices
        ];
       return view('rates')->with($data);
    }

}

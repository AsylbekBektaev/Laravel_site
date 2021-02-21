
@if(\Illuminate\Support\Facades\Session::get('name') &&  \Illuminate\Support\Facades\Session::get('surname') && \Illuminate\Support\Facades\Session::get('number') && \Illuminate\Support\Facades\Session::get('comment'))
    Имя:  {{\Illuminate\Support\Facades\Session::get('name')}}
    Фамилия:  {{\Illuminate\Support\Facades\Session::get('surname')}}
    Номер:  {{\Illuminate\Support\Facades\Session::get('number')}}
    Эл-почта:  {{\Illuminate\Support\Facades\Session::get('email')}}
    Комментарии:  {{\Illuminate\Support\Facades\Session::get('comment')}}
@endif


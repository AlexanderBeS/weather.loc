@extends('layouts.main')

@section('title', 'Создать резюме')

@section('content')

<div>
    Дата: {{ $weather['dt'] }}
</div>

<div>
    Температура: {{ $weather['temp'] }} °C
</div>
<div>
    Ощущается как: {{ $weather['feels_like'] }}°C {{ $weather['weather']['description'] }}
</div>
<div>
    Атмосферное давление на уровне моря, гПа: {{ $weather['pressure'] }} hPa
</div>
<div>
    Влажность: {{ $weather['humidity'] }} %
</div>
<div>
    Температура воздуха (варьируется в зависимости от давления и влажности), ниже которой капли
    воды начинают конденсироваться и может образоваться роса: {{ $weather['dew_point'] }} °C
</div>


<div>
    УФ индекс: {{ $weather['uvi'] }}
</div>
<div>
    Облачность: {{ $weather['clouds'] }}
</div>
<div>
    Средняя видимость: {{ $weather['visibility'] }} метров
</div>
<div>
    Скорость ветра: {{ $weather['wind_speed'] }} m/s
</div>
<div>
    Направление ветра, градусы (метеорологические): {{ $weather['wind_deg'] }}
</div>
<div>
    Рассвет: {{ $weather['sunrise'] }}
</div>
<div>
    Закат: {{ $weather['sunset'] }}
</div>

<div>
    <img src="http://openweathermap.org/img/wn/{{ $weather['weather']['icon'] }}@2x.png">
</div>

@endsection
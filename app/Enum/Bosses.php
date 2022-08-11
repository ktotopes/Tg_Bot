<?php

namespace App\Enum;

enum Bosses: string
{
    case KZARKA = 'Кзарка';
    case KARANDA = 'Каранда';
    case NOUVER = 'Нубер';
    case KUTUM = 'Кутум';
    case KVINT = 'Квинт';
    case MURAKA = 'Мурака';
    case VELL = 'Велл';
    case OFFIN = 'Офин';
    case KAMOS = 'Камос';


    public function getImgPath()
    {
        return match ($this) {
            self::KZARKA  => public_path('img/Kzarka.png'),
            self::KARANDA => public_path('img/Karanda.png'),
            self::NOUVER  => public_path('img/Nouver.png'),
            self::KUTUM   => public_path('img/Kutum.png'),
            self::KVINT   => public_path('img/Quint.png'),
            self::MURAKA  => public_path('img/Muraka.png'),
            self::VELL    => public_path('img/Vell.png'),
            self::OFFIN   => public_path('img/Offin.png'),
            self::KAMOS   => public_path('img/Garmoth.png'),
        };
    }
}

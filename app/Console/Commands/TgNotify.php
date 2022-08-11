<?php

namespace App\Console\Commands;

use App\Models\Boss;
use Illuminate\Console\Command;
use Telegram\Bot\Api;

class TgNotify extends Command
{

    protected $signature = 'tg:notify';

    protected $description = 'Command will be notify about feature bosses';


    public function handle()
    {
        if (now()->minute < 45){
            return;
        }

        $telegram = new Api(config('tg.token'));

        $bosses = Boss::query()
            ->where('time', '>', now()->format('H:i'))
            ->where('time', '<=', now()->addHours(1)->format('H:00'))
            ->where('day', '=', now()->dayOfWeek)
            ->get();

        $text = '';

        foreach ($bosses as $boss) {
            $text .= <<<TEXT
            <b>$boss->name</b> через 15 минут
            TEXT;

        }

        $response = $telegram->sendMessage([
            'chat_id' => config('tg.chat_id'),
            'text'    => $text,
            'parse_mode' => 'html'
        ]);
    }
}
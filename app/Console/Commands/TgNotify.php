<?php

namespace App\Console\Commands;

use App\Models\Boss;
use Illuminate\Console\Command;
use Telegram\Bot\Api;
use Telegram\Bot\FileUpload\InputFile;

class TgNotify extends Command
{

    protected $signature = 'tg:notify';

    protected $description = 'Command will be notify about feature bosses';


    public function handle()
    {
        if (now()->minute < 45) {
            return;
        }

        $telegram = new Api(config('tg.token'));

        $nextHourTime = now()->addHours(1)->format('H:00');

        if ($nextHourTime != '00:00') {
            $bosses = Boss::query()
                ->where('time', '>', now()->format('H:i'))
                ->where('time', '<=', $nextHourTime)
                ->where('day', '=', now()->dayOfWeek)
                ->get();
        } else {
            $bosses = Boss::query()
                ->where('time', '=', '00:00')
                ->where('day', '=', now()->addDays(1)->dayOfWeek)
                ->get();
        }

        $text = '';

        foreach ($bosses as $boss) {
            $text .= <<<TEXT
            <b>$boss->name</b> через 15 минут
            TEXT;

            $response = $telegram->sendPhoto([
                'chat_id'    => config('tg.chat_id'),
                'caption'    => $text,
                'photo'      => InputFile::create($boss->img, $boss->name . '.png'),
                'parse_mode' => 'html',
            ]);
        }
    }
}

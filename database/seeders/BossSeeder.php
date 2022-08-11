<?php

namespace Database\Seeders;

use Psy\Util\Str;
use Carbon\Carbon;
use App\Enum\Bosses;
use mysql_xdevapi\Table;
use Carbon\CarbonInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bosses')->insert([
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::MONDAY,
                'time' => '00:00',
                'img'  => Bosses::KARANDA->getImgPath(),
            ],
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::MONDAY,
                'time' => '00:00',
                'img'  => Bosses::KZARKA->getImgPath(),
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::MONDAY,
                'time' => '01:00',
                'img'  => Bosses::NOUVER->getImgPath(),
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::MONDAY,
                'time' => '12:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::MONDAY,
                'time' => '14:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::MONDAY,
                'time' => '16:00',
                'img' => Bosses::KARANDA->getImgPath()
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::MONDAY,
                'time' => '18:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::MONDAY,
                'time' => '23:00',
                'img' => Bosses::KARANDA->getImgPath()
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::MONDAY,
                'time' => '23:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],

        ]);
        DB::table('bosses')->insert([
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::TUESDAY,
                'time' => '00:00',
                'img' => Bosses::KZARKA->getImgPath()
            ],
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::TUESDAY,
                'time' => '01:00',
                'img' => Bosses::KARANDA->getImgPath()
            ],
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::TUESDAY,
                'time' => '12:00',
                'img' => Bosses::KARANDA->getImgPath()
            ],
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::TUESDAY,
                'time' => '14:00',
                'img' => Bosses::KZARKA->getImgPath()
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::TUESDAY,
                'time' => '16:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::TUESDAY,
                'time' => '18:00',
                'img' => Bosses::KARANDA->getImgPath()
            ],
            [
                'name' => Bosses::KVINT,
                'day'  => CarbonInterface::TUESDAY,
                'time' => '23:00',
                'img' => Bosses::KVINT->getImgPath()
            ],
            [
                'name' => Bosses::MURAKA,
                'day'  => CarbonInterface::TUESDAY,
                'time' => '23:00',
                'img' => Bosses::MURAKA->getImgPath()
            ],

        ]);
        DB::table('bosses')->insert([
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::WEDNESDAY,
                'time' => '00:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::WEDNESDAY,
                'time' => '01:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::WEDNESDAY,
                'time' => '14:00',
                'img' => Bosses::KARANDA->getImgPath()
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::WEDNESDAY,
                'time' => '16:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],
            [
                'name' => Bosses::OFFIN,
                'day'  => CarbonInterface::WEDNESDAY,
                'time' => '18:00',
                'img' => Bosses::OFFIN->getImgPath()
            ],
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::WEDNESDAY,
                'time' => '18:00',
                'img' => Bosses::KZARKA->getImgPath()
            ],
            [
                'name' => Bosses::VELL,
                'day'  => CarbonInterface::WEDNESDAY,
                'time' => '23:00',
                'img' => Bosses::VELL->getImgPath()
            ],

        ]);
        DB::table('bosses')->insert([
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::THURSDAY,
                'time' => '00:00',
                'img' => Bosses::KARANDA->getImgPath()
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::THURSDAY,
                'time' => '01:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::THURSDAY,
                'time' => '12:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::THURSDAY,
                'time' => '14:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::THURSDAY,
                'time' => '16:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::THURSDAY,
                'time' => '18:00',
                'img' => Bosses::KZARKA->getImgPath()
            ],
            [
                'name' => Bosses::KAMOS,
                'day'  => CarbonInterface::THURSDAY,
                'time' => '23:00',
                'img' => Bosses::KAMOS->getImgPath()
            ],

        ]);
        DB::table('bosses')->insert([
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::FRIDAY,
                'time' => '00:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::FRIDAY,
                'time' => '01:00',
                'img' => Bosses::KZARKA->getImgPath()
            ],
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::FRIDAY,
                'time' => '12:00',
                'img' => Bosses::KARANDA->getImgPath()
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::FRIDAY,
                'time' => '14:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::FRIDAY,
                'time' => '16:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::FRIDAY,
                'time' => '18:00',
                'img' => Bosses::KZARKA->getImgPath()
            ],
            [
                'name' => Bosses::OFFIN,
                'day'  => CarbonInterface::FRIDAY,
                'time' => '23:00',
                'img' => Bosses::OFFIN->getImgPath()
            ],

        ]);
        DB::table('bosses')->insert([
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::SATURDAY,
                'time' => '00:00',
                'img' => Bosses::KZARKA->getImgPath()
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::SATURDAY,
                'time' => '00:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::SATURDAY,
                'time' => '01:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::SATURDAY,
                'time' => '08:00',
                'img' => Bosses::KZARKA->getImgPath()
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::SATURDAY,
                'time' => '10:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::SATURDAY,
                'time' => '12:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::KVINT,
                'day'  => CarbonInterface::SATURDAY,
                'time' => '14:00',
                'img' => Bosses::KVINT->getImgPath()
            ],
            [
                'name' => Bosses::MURAKA,
                'day'  => CarbonInterface::SATURDAY,
                'time' => '14:00',
                'img' => Bosses::MURAKA->getImgPath()
            ],
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::SATURDAY,
                'time' => '16:00',
                'img' => Bosses::KARANDA->getImgPath()
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::SATURDAY,
                'time' => '18:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
        ]);
        DB::table('bosses')->insert([
            [
                'name' => Bosses::KAMOS,
                'day'  => CarbonInterface::SUNDAY,
                'time' => '00:00',
                'img' => Bosses::KAMOS->getImgPath()
            ],
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::SUNDAY,
                'time' => '01:00',
                'img' => Bosses::KZARKA->getImgPath()
            ],
            [
                'name' => Bosses::KARANDA,
                'day'  => CarbonInterface::SUNDAY,
                'time' => '08:00',
                'img' => Bosses::KARANDA->getImgPath()
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::SUNDAY,
                'time' => '10:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::KAMOS,
                'day'  => CarbonInterface::SUNDAY,
                'time' => '12:00',
                'img' => Bosses::KAMOS->getImgPath()
            ],
            [
                'name' => Bosses::KUTUM,
                'day'  => CarbonInterface::SUNDAY,
                'time' => '14:00',
                'img' => Bosses::KUTUM->getImgPath()
            ],
            [
                'name' => Bosses::VELL,
                'day'  => CarbonInterface::SUNDAY,
                'time' => '16:00',
                'img' => Bosses::VELL->getImgPath()
            ],
            [
                'name' => Bosses::KZARKA,
                'day'  => CarbonInterface::SUNDAY,
                'time' => '18:00',
                'img' => Bosses::KZARKA->getImgPath()
            ],
            [
                'name' => Bosses::NOUVER,
                'day'  => CarbonInterface::SUNDAY,
                'time' => '18:00',
                'img' => Bosses::NOUVER->getImgPath()
            ],
            [
                'name' => Bosses::OFFIN,
                'day'  => CarbonInterface::SUNDAY,
                'time' => '23:00',
                'img' => Bosses::OFFIN->getImgPath()
            ],
        ]);
    }
}

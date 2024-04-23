<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotelsnearby')->insert([
            [
                'name' => 'Ashling Hotel Dublin',
                'stars' => 4.2,
                'image_url' => 'https://th.bing.com/th/id/OIP.mbCLgEVhraH-5qWRQlX00wHaKi?w=137&h=195&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 1
            ],
            [
                'name' => 'The Morrison, a DoubleTree by Hilton Hotel',
                'stars' => 4.4,
                'image_url' => 'https://th.bing.com/th/id/OIP.ppIlzbOaH7M0mpOCDQBraQHaE8?w=227&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 1
            ],
            [
                'name' => 'The Westbury Hotel',
                'stars' => 5,
                'image_url' => 'https://th.bing.com/th/id/OIP.kRECssXFUiSnlZMXtc6zOgHaEK?w=325&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 2
            ],
            [
                'name' => 'The Fitzwilliam Hotel Dublin',
                'stars' => 3.5,
                'image_url' => 'https://th.bing.com/th/id/OIP.KJiNg2_GvcGO_UNtNCNnMQHaE8?w=208&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 2
            ],
            [
                'name' => 'The Clarence Hotel',
                'stars' => 4.3,
                'image_url' => 'https://th.bing.com/th/id/OIP.6cgIvx2fdLxMVuLg4mYG5wHaE7?w=285&h=190&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 3
            ],
            [
                'name' => 'The Westin Dublin',
                'stars' => 4.6,
                'image_url' => 'https://th.bing.com/th/id/OIP.uE4xDyZHgQrAYbZniL8MVQHaE8?w=272&h=181&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 3
            ],
            [
                'name' => 'Phoenix Park Hotel',
                'stars' => 5,
                'image_url' => 'https://th.bing.com/th/id/OIP._xT_zsuG2frt-Kg2rlg6QwHaDw?w=282&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 4
            ],
            [
                'name' => 'Palmerstown House Estate',
                'stars' => 3.4,
                'image_url' => 'https://th.bing.com/th/id/R.9d699d6651357f6b2506fd9cddf93a53?rik=u%2flABhEl9AGcBg&pid=ImgRaw&r=0',
                'destination_id' => 4
            ],
            [
                'name' => 'Temple Bar Inn',
                'stars' => 4.7,
                'image_url' => 'https://th.bing.com/th/id/OIP.C7UnoYtq1r7Vul0TMuZQpgHaFc?w=246&h=181&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 5
            ],
            [
                'name' => 'The Morgan Hotel',
                'stars' => 5,
                'image_url' => 'https://th.bing.com/th/id/OIP.AJlkGa2ICArHGBSCbocVnAHaF7?w=253&h=202&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 5
            ],
            [
                'name' => 'Aspect Hotel Dublin Park West',
                'stars' => 4.3,
                'image_url' => 'https://th.bing.com/th/id/OIP.jO5MBfSlw7P7rUYFZNh4pwHaE8?rs=1&pid=ImgDetMain',
                'destination_id' => 6
            ],
            [
                'name' => 'Castleknock Hotel',
                'stars' => 3.5,
                'image_url' => 'https://th.bing.com/th/id/OIP.QLKFtd5U6XM5xz15vSZSTAHaE8?w=247&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 6
            ],
            [
                'name' => 'Jurys Inn Dublin Christchurch',
                'stars' => 3.8,
                'image_url' => 'https://th.bing.com/th/id/OIP.5sipLTLNk-X5ww3PTP7WLwHaE8?w=264&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 7
            ],
            [
                'name' => 'The Clarence Hotel',
                'stars' => 4.2,
                'image_url' => 'https://th.bing.com/th/id/OIP.IuIBfUAOvG3IBlOXOGvsVQHaE4?w=266&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 7
            ],
            [
                'name' => 'Hilton Dublin Kilmainham',
                'stars' => 4.6,
                'image_url' => 'https://th.bing.com/th/id/OIP.6GGS6Ds-FIbnI7QdCeCR6gHaE8?w=235&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 8
            ],
            [
                'name' => 'The Maldron Hotel Kevin Street',
                'stars' => 5,
                'image_url' => 'https://th.bing.com/th/id/OIP.-sZKlTffATxe4yl5BNrPrAHaDt?w=323&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 8
            ],
            [
                'name' => 'The Davenport Hotel',
                'stars' => 4.1,
                'image_url' => 'https://th.bing.com/th/id/OIP.zJQRRMnPkYz_bqxRAcW5RAHaFj?w=244&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 9
            ],
            [
                'name' => 'Mespil Hotel',
                'stars' => 3.9,
                'image_url' => 'https://th.bing.com/th/id/OIP.OXKA0LYK5aozuGG03oAZ0gHaE_?w=241&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id' => 9

            ],
            [
                'name'=>'Brooks Hotel',
                'stars'=>4,
                'image_url'=>'https://th.bing.com/th/id/OIP.xp3qudUhD7DOAFh0_2sOpgHaEV?w=277&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id'=>10
            ],
            [
                'name'=>'Buswells Hotel',
                'stars'=>3.7,
                'image_url'=>'https://th.bing.com/th/id/OIP.AAdxZL1GlkB2MEizTixjBwHaEo?w=245&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'destination_id'=>10
            ]
        ]);
    }
}

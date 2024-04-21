<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destination')->insert(
            [
                [
                    'name' => 'Guinness Storehouse',
                    'description' => 'The Guinness Storehouse is a must-visit attraction in Dublin, offering a fascinating insight into the history and brewing process of Ireland\s most famous beer. Visitors can enjoy interactive exhibits, learn to pour the perfect pint, and enjoy panoramic views of Dublin from the Gravity Bar.',
                    'rating' => 5
                ],
                [
                    'name' => 'Trinity College Dublin',
                    'description' => 'Trinity College Dublin is Ireland\s oldest university and home to the famous Book of Kells, a beautifully illuminated manuscript dating back to the 9th century. Visitors can explore the historic campus, visit the Long Room library, and admire the stunning architecture.',
                    'rating' => 4.5
                ],
                [
                    'name' => 'Dublin Castle',
                    'description' => 'Dublin Castle has been a symbol of Dublin\s power and authority for over 800 years. Visitors can explore the castle grounds, visit the State Apartments, and learn about Ireland\s history through guided tours and exhibitions.',
                    'rating' => 4.4
                ],
                [
                    'name' => 'Phoenix Park',
                    'description' => 'Phoenix Park is one of the largest enclosed urban parks in Europe, offering a peaceful escape from the hustle and bustle of the city. Visitors can explore the park\s historic monuments, cycle or walk through its scenic trails, and even spot wild deer roaming freely.',
                    'rating' => 4.8
                ],
                [
                    'name' => 'Temple Bar',
                    'description' => 'Temple Bar is Dublin\s cultural quarter, known for its vibrant atmosphere, lively pubs, and eclectic street art. Visitors can enjoy live music, browse the many galleries and studios, and sample traditional Irish cuisine in the area\s many restaurants.',
                    'rating' => 4.6
                ],
                [
                    'name' => 'Dublin Zoo',
                    'description' => 'Dublin Zoo is one of Ireland\s most popular attractions, home to over 400 animals from around the world. Visitors can explore the zoo\s many exhibits, attend daily animal talks and feeding sessions, and even participate in behind-the-scenes experiences.',
                    'rating' => 4.6
                ],
                [
                    'name' => 'Dublinia',
                    'description' => 'Dublinia is a living history museum that brings medieval Dublin to life through interactive exhibits and reenactments. Visitors can explore Viking and medieval Dublin, climb the medieval city walls, and even try their hand at ancient crafts and games.',
                    'rating' => 4.7
                ],
                [
                    'name' => 'Kilmainham Gaol',
                    'description' => 'Kilmainham Gaol is a former prison turned museum, offering a chilling insight into Ireland\s struggle for independence. Visitors can take guided tours of the prison, learn about its famous inmates, and explore the museum\s extensive collection of artifacts.',
                    'rating' => 5
                ],
                [
                    'name' => 'National Museum of Ireland - Archaeology',
                    'description' => 'The National Museum of Ireland - Archaeology is home to a vast collection of artifacts spanning Ireland\s rich history, from prehistoric times to the Middle Ages. Visitors can explore exhibits on the Celts, Vikings, and medieval Ireland, including the famous Ardagh Chalice and Tara Brooch.',
                    'rating' => 4.3
                ],
                [
                    'name' => 'St. Patrick\s Cathedral',
                    'description' => 'St. Patrick\s Cathedral is Ireland\s largest church and one of Dublin\s most iconic landmarks. Visitors can admire its stunning Gothic architecture, explore its beautiful interior, and learn about its history through guided tours and exhibitions.',
                    'rating' => 4.2
                ]
            ]
        );
    }
}

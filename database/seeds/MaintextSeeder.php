<?php

use Illuminate\Database\Seeder;
use App\Maintext;

class MaintextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maintext::create([
        	'name' => 'Контакт',
        	'bode' => '<p>Описание</p>',                                    
        	'url' => 'contact'
        ]);
         Maintext::create([
        	'name' => 'О сайте',
        	'bode' => '<p>Описание</p>',                                    
        	'url' => 'about'
        ]);
             Maintext::create([
        	'name' => 'Сервис',
        	'bode' => '<p>Описание</p>',                                    
        	'url' => 'services'
        ]);


    }
}

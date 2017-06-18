<?php

use Illuminate\Database\Seeder;

class VrPagesCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('vr_pages_categories')->delete();
        
        \DB::table('vr_pages_categories')->insert(array (
            0 => 
            array (
                'count' => 1,
                'id' => 'without_categories_id',
                'created_at' => '2017-06-08 06:32:29',
                'updated_at' => '2017-06-08 06:32:29',
                'deleted_at' => NULL,
                'name' => 'Does not have a category',
            ),
            1 => 
            array (
                'count' => 2,
                'id' => 'vr_categories_id',
                'created_at' => '2017-06-08 06:32:29',
                'updated_at' => '2017-06-08 06:32:29',
                'deleted_at' => NULL,
                'name' => 'virtualus_kambariai_kategorija',
            ),
            2 => 
            array (
                'count' => 3,
                'id' => '69efd427-6091-4f0e-adb3-d320d3e26aac',
                'created_at' => '2017-06-08 08:10:50',
                'updated_at' => '2017-06-08 08:16:15',
                'deleted_at' => NULL,
                'name' => 'apie_kategorija',
            ),
            3 => 
            array (
                'count' => 4,
                'id' => 'b58b7546-3d52-4124-a5ae-b699c8386962',
                'created_at' => '2017-06-13 09:41:44',
                'updated_at' => '2017-06-13 09:41:44',
                'deleted_at' => NULL,
                'name' => 'rezervacija_kategorija',
            ),
            4 => 
            array (
                'count' => 5,
                'id' => 'f2f7b060-ce55-46bb-8baf-779fcacae01a',
                'created_at' => '2017-06-18 16:31:57',
                'updated_at' => '2017-06-18 16:31:57',
                'deleted_at' => NULL,
                'name' => 'remejai_kategorija',
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
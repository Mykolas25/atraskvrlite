<?php

use Illuminate\Database\Seeder;

class VrPagesCategoriesTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('vr_pages_categories_translations')->delete();
        
        \DB::table('vr_pages_categories_translations')->insert(array (
            0 => 
            array (
                'count' => 1,
                'id' => 'vr_id_lt',
                'created_at' => '2017-06-08 06:32:29',
                'updated_at' => '2017-06-08 06:32:29',
                'deleted_at' => NULL,
                'categories_id' => 'vr_categories_id',
                'languages_id' => 'lt',
                'name' => 'Virtualus kambariai',
                'slug' => 'vrkambariai',
            ),
            1 => 
            array (
                'count' => 2,
                'id' => 'vr_id_en',
                'created_at' => '2017-06-08 06:32:29',
                'updated_at' => '2017-06-08 06:32:29',
                'deleted_at' => NULL,
                'categories_id' => 'vr_categories_id',
                'languages_id' => 'en',
                'name' => 'Virtual rooms',
                'slug' => 'vrrooms',
            ),
            2 => 
            array (
                'count' => 3,
                'id' => '642ed517-40d3-4cde-8b59-fbf530d44c03',
                'created_at' => '2017-06-08 08:11:22',
                'updated_at' => '2017-06-08 08:11:22',
                'deleted_at' => NULL,
                'categories_id' => '69efd427-6091-4f0e-adb3-d320d3e26aac',
                'languages_id' => 'lt',
                'name' => 'Apie',
                'slug' => 'apie',
            ),
            3 => 
            array (
                'count' => 4,
                'id' => '7f2ccf75-6169-4038-abed-3eb07e51d9b0',
                'created_at' => '2017-06-08 08:11:22',
                'updated_at' => '2017-06-08 08:11:22',
                'deleted_at' => NULL,
                'categories_id' => '69efd427-6091-4f0e-adb3-d320d3e26aac',
                'languages_id' => 'en',
                'name' => 'About',
                'slug' => 'about',
            ),
            4 => 
            array (
                'count' => 5,
                'id' => '00bb8c51-87ea-4537-81ab-07a4738ee0ef',
                'created_at' => '2017-06-13 09:42:02',
                'updated_at' => '2017-06-13 09:42:02',
                'deleted_at' => NULL,
                'categories_id' => 'b58b7546-3d52-4124-a5ae-b699c8386962',
                'languages_id' => 'lt',
                'name' => 'Rezervacija',
                'slug' => 'rezervacija',
            ),
            5 => 
            array (
                'count' => 6,
                'id' => 'da63430b-fcfa-4151-9b87-9ae76d3fce5e',
                'created_at' => '2017-06-13 09:42:02',
                'updated_at' => '2017-06-13 09:42:02',
                'deleted_at' => NULL,
                'categories_id' => 'b58b7546-3d52-4124-a5ae-b699c8386962',
                'languages_id' => 'en',
                'name' => 'Reservation',
                'slug' => 'reservation',
            ),
            6 => 
            array (
                'count' => 7,
                'id' => 'f49369c4-c3d3-464b-9d4a-7b6ac88a548c',
                'created_at' => '2017-06-18 17:20:58',
                'updated_at' => '2017-06-18 17:20:58',
                'deleted_at' => NULL,
                'categories_id' => 'f2f7b060-ce55-46bb-8baf-779fcacae01a',
                'languages_id' => 'lt',
                'name' => 'Remejai',
                'slug' => 'remejai',
            ),
            7 => 
            array (
                'count' => 8,
                'id' => '648ff04a-8273-45f6-a4ba-12c1a4780e57',
                'created_at' => '2017-06-18 17:20:58',
                'updated_at' => '2017-06-18 17:20:58',
                'deleted_at' => NULL,
                'categories_id' => 'f2f7b060-ce55-46bb-8baf-779fcacae01a',
                'languages_id' => 'en',
                'name' => 'Sponsors',
                'slug' => 'sponsors',
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
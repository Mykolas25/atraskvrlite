<?php

use Illuminate\Database\Seeder;

class VrPagesResourcesConnectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('vr_pages_resources_connections')->delete();
        
        \DB::table('vr_pages_resources_connections')->insert(array (
            0 => 
            array (
                'count' => 1,
                'id' => '3779baeb-90bb-484f-8b40-7d37f30ecf25',
                'created_at' => '2017-06-08 09:02:03',
                'updated_at' => '2017-06-08 09:02:03',
                'deleted_at' => NULL,
                'pages_id' => 'b852de66-6978-45c9-b467-6824e06052db',
                'resources_id' => '5d69fa89-fe75-4926-871c-3d59e1778de2',
            ),
            1 => 
            array (
                'count' => 2,
                'id' => '6fca086e-5d2f-4ea0-8a01-46aa8b2cb1dd',
                'created_at' => '2017-06-18 13:40:40',
                'updated_at' => '2017-06-18 13:40:40',
                'deleted_at' => NULL,
                'pages_id' => '12ecd123-5b8b-43dd-83d2-a87e3192254d',
                'resources_id' => '9f7a46b8-7d01-43b1-b34b-6ca18d941ff7',
            ),
            2 => 
            array (
                'count' => 3,
                'id' => 'c56c8a3b-23fa-4bf8-8f0d-f4717903e523',
                'created_at' => '2017-06-18 13:40:40',
                'updated_at' => '2017-06-18 13:40:40',
                'deleted_at' => NULL,
                'pages_id' => '12ecd123-5b8b-43dd-83d2-a87e3192254d',
                'resources_id' => '84c0a2bd-17e0-4bf7-9657-26cf99752a51',
            ),
            3 => 
            array (
                'count' => 4,
                'id' => '004ca45c-38d2-48d9-8b3b-5ac989a3fbb0',
                'created_at' => '2017-06-18 13:40:40',
                'updated_at' => '2017-06-18 13:40:40',
                'deleted_at' => NULL,
                'pages_id' => '12ecd123-5b8b-43dd-83d2-a87e3192254d',
                'resources_id' => '0d2c83d5-ff4d-4a55-b086-5f14b7296dbd',
            ),
            4 => 
            array (
                'count' => 5,
                'id' => 'bd0bb94e-27e6-4d54-b1b0-e05b6bb03e65',
                'created_at' => '2017-06-18 13:40:40',
                'updated_at' => '2017-06-18 13:40:40',
                'deleted_at' => NULL,
                'pages_id' => '12ecd123-5b8b-43dd-83d2-a87e3192254d',
                'resources_id' => '8e4d54c3-37b8-4c11-9af7-80565b22b1cb',
            ),
            5 => 
            array (
                'count' => 6,
                'id' => '92a042b8-b33c-4a82-bfe4-c410ebb54f22',
                'created_at' => '2017-06-18 13:40:40',
                'updated_at' => '2017-06-18 13:40:40',
                'deleted_at' => NULL,
                'pages_id' => '12ecd123-5b8b-43dd-83d2-a87e3192254d',
                'resources_id' => '2efad435-323b-489d-9cb0-cacee5016535',
            ),
            6 => 
            array (
                'count' => 7,
                'id' => '845a4263-fda5-4b30-b178-6b7d87cee0e1',
                'created_at' => '2017-06-18 13:40:40',
                'updated_at' => '2017-06-18 13:40:40',
                'deleted_at' => NULL,
                'pages_id' => '12ecd123-5b8b-43dd-83d2-a87e3192254d',
                'resources_id' => '3b689ca2-5ee7-48a4-bade-565353fb0da3',
            ),
            7 => 
            array (
                'count' => 8,
                'id' => 'cf9ad869-4c2d-40d5-9393-391e09fae852',
                'created_at' => '2017-06-18 13:40:40',
                'updated_at' => '2017-06-18 13:40:40',
                'deleted_at' => NULL,
                'pages_id' => '12ecd123-5b8b-43dd-83d2-a87e3192254d',
                'resources_id' => '9ab01ee4-0bed-40c9-b81f-2a0a0f2946b9',
            ),
            8 => 
            array (
                'count' => 9,
                'id' => '6348be96-8a19-4ddb-8e72-cb05a5f144df',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'pages_id' => 'fb3656ab-2403-4fdd-8f0a-1d32b33a0453',
                'resources_id' => '62cdda24-e658-43f8-a892-52552dd6dc71',
            ),
            9 => 
            array (
                'count' => 10,
                'id' => 'b0364c35-6d47-4d8c-905b-83ba3bb0c980',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'pages_id' => 'fb3656ab-2403-4fdd-8f0a-1d32b33a0453',
                'resources_id' => '00ab8df6-6c92-495e-9151-1d3f91951c70',
            ),
            10 => 
            array (
                'count' => 11,
                'id' => 'dab7473d-2ebc-445a-8102-649faa12c41d',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'pages_id' => 'fb3656ab-2403-4fdd-8f0a-1d32b33a0453',
                'resources_id' => '2e92b712-1f61-4d14-9949-3d484a1129d7',
            ),
            11 => 
            array (
                'count' => 12,
                'id' => '8939ad70-6085-4cac-aabe-f184b9f272b8',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'pages_id' => 'fb3656ab-2403-4fdd-8f0a-1d32b33a0453',
                'resources_id' => '33eae62d-59bd-4fcb-b846-72c661e842a7',
            ),
            12 => 
            array (
                'count' => 13,
                'id' => 'c63be6ef-460a-44f7-97bc-634ad1bdd8fd',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'pages_id' => 'fb3656ab-2403-4fdd-8f0a-1d32b33a0453',
                'resources_id' => '39cc9c6b-b43d-4a0b-824b-72d92423489a',
            ),
            13 => 
            array (
                'count' => 14,
                'id' => 'e1a19fe0-2a36-4ed0-8194-30e86b87bc40',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'pages_id' => 'fb3656ab-2403-4fdd-8f0a-1d32b33a0453',
                'resources_id' => '38430bf2-a25d-45dd-9a4c-5b82be59d327',
            ),
            14 => 
            array (
                'count' => 15,
                'id' => '7c74705c-45c3-4af8-bb60-d7454c0e9d31',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'pages_id' => 'fb3656ab-2403-4fdd-8f0a-1d32b33a0453',
                'resources_id' => 'db3d993d-ec67-4ece-9ec3-77612308bcf9',
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
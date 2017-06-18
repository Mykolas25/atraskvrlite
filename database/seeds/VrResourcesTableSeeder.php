<?php

use Illuminate\Database\Seeder;

class VrResourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        \DB::table('vr_resources')->delete();
        
        \DB::table('vr_resources')->insert(array (
            0 => 
            array (
                'count' => 1,
                'id' => 'ea3e30ba-f425-4304-bb90-26470b836265',
                'name' => NULL,
                'created_at' => '2017-06-07 13:37:54',
                'updated_at' => '2017-06-07 13:37:54',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/07/1496842674_the-lab-on-steam-archery.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 67079,
            ),
            1 => 
            array (
                'count' => 2,
                'id' => 'b06a1c7f-acb9-44ee-a3a1-7f085642dc5e',
                'name' => NULL,
                'created_at' => '2017-06-07 17:31:22',
                'updated_at' => '2017-06-07 17:31:22',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/07/1496856682_fruit-ninja-vr-screenshot-3.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 120937,
            ),
            2 => 
            array (
                'count' => 3,
                'id' => 'b64eca6f-5e35-4615-a764-8fe239eb5fc0',
                'name' => NULL,
                'created_at' => '2017-06-07 17:40:59',
                'updated_at' => '2017-06-18 18:00:01',
                'deleted_at' => '2017-06-18 18:00:01',
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/18/1497793454_fruit-ninja-vr-screenshot-3.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 120937,
            ),
            3 => 
            array (
                'count' => 4,
                'id' => 'f5b0f3cd-23d6-4e19-8769-05a3503bef98',
                'name' => NULL,
                'created_at' => '2017-06-08 08:51:37',
                'updated_at' => '2017-06-08 16:26:42',
                'deleted_at' => '2017-06-08 16:26:42',
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/08/1496911897_the-lab-on-steam-archery.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 67079,
            ),
            4 => 
            array (
                'count' => 5,
                'id' => '5d69fa89-fe75-4926-871c-3d59e1778de2',
                'name' => NULL,
                'created_at' => '2017-06-08 09:02:03',
                'updated_at' => '2017-06-08 09:02:03',
                'deleted_at' => NULL,
                'mime_type' => 'video/mp4',
            'path' => 'upload/2017/06/08/1496912522_akropolis_be_samsung_youtube (1).mp4',
                'width' => NULL,
                'height' => NULL,
                'size' => 22806681,
            ),
            5 => 
            array (
                'count' => 6,
                'id' => '8f87f3d7-f903-42b9-8760-85d5b94b4a8f',
                'name' => NULL,
                'created_at' => '2017-06-13 09:35:08',
                'updated_at' => '2017-06-13 09:35:08',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/13/1497346508_posterscreen.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 437108,
            ),
            6 => 
            array (
                'count' => 7,
                'id' => 'fbb0e5fd-a2ab-47d4-afad-563e80759a6c',
                'name' => NULL,
                'created_at' => '2017-06-13 09:43:42',
                'updated_at' => '2017-06-13 09:43:42',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/13/1497347022_posterscreen.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 437108,
            ),
            7 => 
            array (
                'count' => 8,
                'id' => '9f7a46b8-7d01-43b1-b34b-6ca18d941ff7',
                'name' => NULL,
                'created_at' => '2017-06-18 13:40:39',
                'updated_at' => '2017-06-18 13:40:39',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/18/1497793239_Avallach-gwent-card.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 29258,
            ),
            8 => 
            array (
                'count' => 9,
                'id' => '84c0a2bd-17e0-4bf7-9657-26cf99752a51',
                'name' => NULL,
                'created_at' => '2017-06-18 13:40:39',
                'updated_at' => '2017-06-18 13:40:39',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/18/1497793239_Cirilla-Fiona-Elen-Riannon-gwent-card.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 29938,
            ),
            9 => 
            array (
                'count' => 10,
                'id' => '0d2c83d5-ff4d-4a55-b086-5f14b7296dbd',
                'name' => NULL,
                'created_at' => '2017-06-18 13:40:39',
                'updated_at' => '2017-06-18 13:40:39',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/18/1497793239_fruit-ninja-vr-screenshot-3.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 120937,
            ),
            10 => 
            array (
                'count' => 11,
                'id' => '8e4d54c3-37b8-4c11-9af7-80565b22b1cb',
                'name' => NULL,
                'created_at' => '2017-06-18 13:40:39',
                'updated_at' => '2017-06-18 13:40:39',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/18/1497793239_google_tiltbrushtrailer16.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 67058,
            ),
            11 => 
            array (
                'count' => 12,
                'id' => '2efad435-323b-489d-9cb0-cacee5016535',
                'name' => NULL,
                'created_at' => '2017-06-18 13:40:39',
                'updated_at' => '2017-06-18 13:40:39',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/18/1497793239_hide-using-your-surroundings-merry-snowballs 02.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 42117,
            ),
            12 => 
            array (
                'count' => 13,
                'id' => '3b689ca2-5ee7-48a4-bade-565353fb0da3',
                'name' => NULL,
                'created_at' => '2017-06-18 13:40:39',
                'updated_at' => '2017-06-18 13:40:39',
                'deleted_at' => NULL,
                'mime_type' => 'video/mp4',
                'path' => 'upload/2017/06/18/1497793239_Jason Mraz - Life is Wonderful Music Video.mp4',
                'width' => NULL,
                'height' => NULL,
                'size' => 5514037,
            ),
            13 => 
            array (
                'count' => 14,
                'id' => '9ab01ee4-0bed-40c9-b81f-2a0a0f2946b9',
                'name' => NULL,
                'created_at' => '2017-06-18 13:40:40',
                'updated_at' => '2017-06-18 13:40:40',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
            'path' => 'upload/2017/06/18/1497793239_posterscreen-u1899-fr (1).jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 111944,
            ),
            14 => 
            array (
                'count' => 15,
                'id' => '4d3cf4a6-a520-41cc-ae87-960543d08cf9',
                'name' => NULL,
                'created_at' => '2017-06-18 17:06:00',
                'updated_at' => '2017-06-18 17:06:00',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/18/1497805560_Cirilla-Fiona-Elen-Riannon-gwent-card.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 29938,
            ),
            15 => 
            array (
                'count' => 16,
                'id' => '62cdda24-e658-43f8-a892-52552dd6dc71',
                'name' => 'akropolis_logo',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/18/1497808933_akropolis-logo__2x.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 24142,
            ),
            16 => 
            array (
                'count' => 17,
                'id' => '00ab8df6-6c92-495e-9151-1d3f91951c70',
                'name' => 'elektromarkt_logo',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'mime_type' => 'image/png',
                'path' => 'upload/2017/06/18/1497808933_elektromarkt_logo.png',
                'width' => NULL,
                'height' => NULL,
                'size' => 28928,
            ),
            17 => 
            array (
                'count' => 18,
                'id' => '2e92b712-1f61-4d14-9949-3d484a1129d7',
                'name' => 'inida_logo',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'mime_type' => 'image/png',
                'path' => 'upload/2017/06/18/1497808933_inida.png',
                'width' => NULL,
                'height' => NULL,
                'size' => 22142,
            ),
            18 => 
            array (
                'count' => 19,
                'id' => '33eae62d-59bd-4fcb-b846-72c661e842a7',
                'name' => 'delfi_logo',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'mime_type' => 'image/png',
                'path' => 'upload/2017/06/18/1497808933_iq9rsp_delfi_logo_2x.png',
                'width' => NULL,
                'height' => NULL,
                'size' => 18398,
            ),
            19 => 
            array (
                'count' => 20,
                'id' => '39cc9c6b-b43d-4a0b-824b-72d92423489a',
                'name' => 'litexpo_logo',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'mime_type' => 'image/png',
                'path' => 'upload/2017/06/18/1497808933_litexpo_logo.png',
                'width' => NULL,
                'height' => NULL,
                'size' => 34162,
            ),
            20 => 
            array (
                'count' => 21,
                'id' => '38430bf2-a25d-45dd-9a4c-5b82be59d327',
                'name' => 'telesoftas_logo',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'mime_type' => 'image/png',
                'path' => 'upload/2017/06/18/1497808933_telesoftas_logo_flat_rgb_2x.png',
                'width' => NULL,
                'height' => NULL,
                'size' => 17771,
            ),
            21 => 
            array (
                'count' => 22,
                'id' => 'db3d993d-ec67-4ece-9ec3-77612308bcf9',
                'name' => 'remejai_text_logo',
                'created_at' => '2017-06-18 18:02:13',
                'updated_at' => '2017-06-18 18:02:13',
                'deleted_at' => NULL,
                'mime_type' => 'image/png',
                'path' => 'upload/2017/06/18/1497808933_u1905-4_2x.png',
                'width' => NULL,
                'height' => NULL,
                'size' => 2477,
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 6,
                'role_id' => 2,
            ),
            9 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 16,
                'role_id' => 2,
            ),
            20 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            21 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            23 => 
            array (
                'permission_id' => 18,
                'role_id' => 2,
            ),
            24 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 19,
                'role_id' => 2,
            ),
            26 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            29 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            32 => 
            array (
                'permission_id' => 26,
                'role_id' => 2,
            ),
            33 => 
            array (
                'permission_id' => 26,
                'role_id' => 3,
            ),
            34 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            35 => 
            array (
                'permission_id' => 27,
                'role_id' => 3,
            ),
            36 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 28,
                'role_id' => 3,
            ),
            38 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            39 => 
            array (
                'permission_id' => 29,
                'role_id' => 3,
            ),
            40 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 30,
                'role_id' => 3,
            ),
            42 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 31,
                'role_id' => 2,
            ),
            44 => 
            array (
                'permission_id' => 31,
                'role_id' => 3,
            ),
            45 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            46 => 
            array (
                'permission_id' => 32,
                'role_id' => 3,
            ),
            47 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            48 => 
            array (
                'permission_id' => 33,
                'role_id' => 3,
            ),
            49 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 34,
                'role_id' => 3,
            ),
            51 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            52 => 
            array (
                'permission_id' => 35,
                'role_id' => 3,
            ),
            53 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            54 => 
            array (
                'permission_id' => 36,
                'role_id' => 2,
            ),
            55 => 
            array (
                'permission_id' => 36,
                'role_id' => 3,
            ),
            56 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            57 => 
            array (
                'permission_id' => 37,
                'role_id' => 3,
            ),
            58 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            60 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            61 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            62 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            64 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            65 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            66 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            67 => 
            array (
                'permission_id' => 75,
                'role_id' => 1,
            ),
            68 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            69 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            70 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            72 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            74 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            75 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            76 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            77 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            78 => 
            array (
                'permission_id' => 91,
                'role_id' => 1,
            ),
            79 => 
            array (
                'permission_id' => 92,
                'role_id' => 1,
            ),
            80 => 
            array (
                'permission_id' => 94,
                'role_id' => 1,
            ),
            81 => 
            array (
                'permission_id' => 95,
                'role_id' => 1,
            ),
        ));
        
        
    }
}
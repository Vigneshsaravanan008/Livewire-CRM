<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->delete();

        DB::table('countries')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => 'AF',
                'name' => 'Afghanistan',
                'phonecode' => 93,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'code' => 'AL',
                'name' => 'Albania',
                'phonecode' => 355,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'code' => 'DZ',
                'name' => 'Algeria',
                'phonecode' => 213,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'code' => 'AS',
                'name' => 'American Samoa',
                'phonecode' => 1684,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'code' => 'AD',
                'name' => 'Andorra',
                'phonecode' => 376,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'code' => 'AO',
                'name' => 'Angola',
                'phonecode' => 244,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'code' => 'AI',
                'name' => 'Anguilla',
                'phonecode' => 1264,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'code' => 'AQ',
                'name' => 'Antarctica',
                'phonecode' => 0,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'code' => 'AG',
                'name' => 'Antigua And Barbuda',
                'phonecode' => 1268,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'code' => 'AR',
                'name' => 'Argentina',
                'phonecode' => 54,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'code' => 'AM',
                'name' => 'Armenia',
                'phonecode' => 374,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'code' => 'AW',
                'name' => 'Aruba',
                'phonecode' => 297,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'code' => 'AU',
                'name' => 'Australia',
                'phonecode' => 61,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'code' => 'AT',
                'name' => 'Austria',
                'phonecode' => 43,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'code' => 'AZ',
                'name' => 'Azerbaijan',
                'phonecode' => 994,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'code' => 'BS',
                'name' => 'Bahamas The',
                'phonecode' => 1242,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'code' => 'BH',
                'name' => 'Bahrain',
                'phonecode' => 973,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'code' => 'BD',
                'name' => 'Bangladesh',
                'phonecode' => 880,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'code' => 'BB',
                'name' => 'Barbados',
                'phonecode' => 1246,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'code' => 'BY',
                'name' => 'Belarus',
                'phonecode' => 375,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'code' => 'BE',
                'name' => 'Belgium',
                'phonecode' => 32,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'code' => 'BZ',
                'name' => 'Belize',
                'phonecode' => 501,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'code' => 'BJ',
                'name' => 'Benin',
                'phonecode' => 229,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'code' => 'BM',
                'name' => 'Bermuda',
                'phonecode' => 1441,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'code' => 'BT',
                'name' => 'Bhutan',
                'phonecode' => 975,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'code' => 'BO',
                'name' => 'Bolivia',
                'phonecode' => 591,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'code' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'phonecode' => 387,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'code' => 'BW',
                'name' => 'Botswana',
                'phonecode' => 267,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'code' => 'BV',
                'name' => 'Bouvet Island',
                'phonecode' => 0,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'code' => 'BR',
                'name' => 'Brazil',
                'phonecode' => 55,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'code' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'phonecode' => 246,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'code' => 'BN',
                'name' => 'Brunei',
                'phonecode' => 673,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'code' => 'BG',
                'name' => 'Bulgaria',
                'phonecode' => 359,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'code' => 'BF',
                'name' => 'Burkina Faso',
                'phonecode' => 226,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'code' => 'BI',
                'name' => 'Burundi',
                'phonecode' => 257,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'code' => 'KH',
                'name' => 'Cambodia',
                'phonecode' => 855,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'code' => 'CM',
                'name' => 'Cameroon',
                'phonecode' => 237,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'code' => 'CA',
                'name' => 'Canada',
                'phonecode' => 1,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'code' => 'CV',
                'name' => 'Cape Verde',
                'phonecode' => 238,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'code' => 'KY',
                'name' => 'Cayman Islands',
                'phonecode' => 1345,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'code' => 'CF',
                'name' => 'Central African Republic',
                'phonecode' => 236,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'code' => 'TD',
                'name' => 'Chad',
                'phonecode' => 235,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'code' => 'CL',
                'name' => 'Chile',
                'phonecode' => 56,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'code' => 'CN',
                'name' => 'China',
                'phonecode' => 86,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'code' => 'CX',
                'name' => 'Christmas Island',
                'phonecode' => 61,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'code' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
                'phonecode' => 672,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'code' => 'CO',
                'name' => 'Colombia',
                'phonecode' => 57,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'code' => 'KM',
                'name' => 'Comoros',
                'phonecode' => 269,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'code' => 'CG',
                'name' => 'Congo',
                'phonecode' => 242,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'code' => 'CD',
                'name' => 'Congo The Democratic Republic Of The',
                'phonecode' => 242,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array (
                'id' => 51,
                'code' => 'CK',
                'name' => 'Cook Islands',
                'phonecode' => 682,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array (
                'id' => 52,
                'code' => 'CR',
                'name' => 'Costa Rica',
                'phonecode' => 506,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array (
                'id' => 53,
                'code' => 'CI',
            'name' => 'Cote D Ivoire (Ivory Coast)',
                'phonecode' => 225,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'code' => 'HR',
            'name' => 'Croatia (Hrvatska)',
                'phonecode' => 385,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'code' => 'CU',
                'name' => 'Cuba',
                'phonecode' => 53,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'code' => 'CY',
                'name' => 'Cyprus',
                'phonecode' => 357,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array (
                'id' => 57,
                'code' => 'CZ',
                'name' => 'Czech Republic',
                'phonecode' => 420,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array (
                'id' => 58,
                'code' => 'DK',
                'name' => 'Denmark',
                'phonecode' => 45,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array (
                'id' => 59,
                'code' => 'DJ',
                'name' => 'Djibouti',
                'phonecode' => 253,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array (
                'id' => 60,
                'code' => 'DM',
                'name' => 'Dominica',
                'phonecode' => 1767,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array (
                'id' => 61,
                'code' => 'DO',
                'name' => 'Dominican Republic',
                'phonecode' => 1809,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array (
                'id' => 62,
                'code' => 'TP',
                'name' => 'East Timor',
                'phonecode' => 670,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array (
                'id' => 63,
                'code' => 'EC',
                'name' => 'Ecuador',
                'phonecode' => 593,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array (
                'id' => 64,
                'code' => 'EG',
                'name' => 'Egypt',
                'phonecode' => 20,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array (
                'id' => 65,
                'code' => 'SV',
                'name' => 'El Salvador',
                'phonecode' => 503,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array (
                'id' => 66,
                'code' => 'GQ',
                'name' => 'Equatorial Guinea',
                'phonecode' => 240,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array (
                'id' => 67,
                'code' => 'ER',
                'name' => 'Eritrea',
                'phonecode' => 291,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array (
                'id' => 68,
                'code' => 'EE',
                'name' => 'Estonia',
                'phonecode' => 372,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array (
                'id' => 69,
                'code' => 'ET',
                'name' => 'Ethiopia',
                'phonecode' => 251,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array (
                'id' => 70,
                'code' => 'XA',
                'name' => 'External Territories of Australia',
                'phonecode' => 61,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array (
                'id' => 71,
                'code' => 'FK',
                'name' => 'Falkland Islands',
                'phonecode' => 500,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array (
                'id' => 72,
                'code' => 'FO',
                'name' => 'Faroe Islands',
                'phonecode' => 298,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array (
                'id' => 73,
                'code' => 'FJ',
                'name' => 'Fiji Islands',
                'phonecode' => 679,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array (
                'id' => 74,
                'code' => 'FI',
                'name' => 'Finland',
                'phonecode' => 358,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array (
                'id' => 75,
                'code' => 'FR',
                'name' => 'France',
                'phonecode' => 33,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array (
                'id' => 76,
                'code' => 'GF',
                'name' => 'French Guiana',
                'phonecode' => 594,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array (
                'id' => 77,
                'code' => 'PF',
                'name' => 'French Polynesia',
                'phonecode' => 689,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array (
                'id' => 78,
                'code' => 'TF',
                'name' => 'French Southern Territories',
                'phonecode' => 0,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array (
                'id' => 79,
                'code' => 'GA',
                'name' => 'Gabon',
                'phonecode' => 241,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array (
                'id' => 80,
                'code' => 'GM',
                'name' => 'Gambia The',
                'phonecode' => 220,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array (
                'id' => 81,
                'code' => 'GE',
                'name' => 'Georgia',
                'phonecode' => 995,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array (
                'id' => 82,
                'code' => 'DE',
                'name' => 'Germany',
                'phonecode' => 49,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array (
                'id' => 83,
                'code' => 'GH',
                'name' => 'Ghana',
                'phonecode' => 233,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array (
                'id' => 84,
                'code' => 'GI',
                'name' => 'Gibraltar',
                'phonecode' => 350,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array (
                'id' => 85,
                'code' => 'GR',
                'name' => 'Greece',
                'phonecode' => 30,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array (
                'id' => 86,
                'code' => 'GL',
                'name' => 'Greenland',
                'phonecode' => 299,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array (
                'id' => 87,
                'code' => 'GD',
                'name' => 'Grenada',
                'phonecode' => 1473,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array (
                'id' => 88,
                'code' => 'GP',
                'name' => 'Guadeloupe',
                'phonecode' => 590,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array (
                'id' => 89,
                'code' => 'GU',
                'name' => 'Guam',
                'phonecode' => 1671,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array (
                'id' => 90,
                'code' => 'GT',
                'name' => 'Guatemala',
                'phonecode' => 502,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array (
                'id' => 91,
                'code' => 'XU',
                'name' => 'Guernsey and Alderney',
                'phonecode' => 44,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array (
                'id' => 92,
                'code' => 'GN',
                'name' => 'Guinea',
                'phonecode' => 224,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array (
                'id' => 93,
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
                'phonecode' => 245,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array (
                'id' => 94,
                'code' => 'GY',
                'name' => 'Guyana',
                'phonecode' => 592,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array (
                'id' => 95,
                'code' => 'HT',
                'name' => 'Haiti',
                'phonecode' => 509,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array (
                'id' => 96,
                'code' => 'HM',
                'name' => 'Heard and McDonald Islands',
                'phonecode' => 0,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array (
                'id' => 97,
                'code' => 'HN',
                'name' => 'Honduras',
                'phonecode' => 504,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array (
                'id' => 98,
                'code' => 'HK',
                'name' => 'Hong Kong S.A.R.',
                'phonecode' => 852,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array (
                'id' => 99,
                'code' => 'HU',
                'name' => 'Hungary',
                'phonecode' => 36,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array (
                'id' => 100,
                'code' => 'IS',
                'name' => 'Iceland',
                'phonecode' => 354,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array (
                'id' => 101,
                'code' => 'IN',
                'name' => 'India',
                'phonecode' => 91,
            'flag' => 'countries/download (1).png',
                'created_at' => NULL,
                'updated_at' => '2020-02-06 13:03:56',
            ),
            101 =>
            array (
                'id' => 102,
                'code' => 'ID',
                'name' => 'Indonesia',
                'phonecode' => 62,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array (
                'id' => 103,
                'code' => 'IR',
                'name' => 'Iran',
                'phonecode' => 98,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array (
                'id' => 104,
                'code' => 'IQ',
                'name' => 'Iraq',
                'phonecode' => 964,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array (
                'id' => 105,
                'code' => 'IE',
                'name' => 'Ireland',
                'phonecode' => 353,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array (
                'id' => 106,
                'code' => 'IL',
                'name' => 'Israel',
                'phonecode' => 972,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array (
                'id' => 107,
                'code' => 'IT',
                'name' => 'Italy',
                'phonecode' => 39,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array (
                'id' => 108,
                'code' => 'JM',
                'name' => 'Jamaica',
                'phonecode' => 1876,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array (
                'id' => 109,
                'code' => 'JP',
                'name' => 'Japan',
                'phonecode' => 81,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array (
                'id' => 110,
                'code' => 'XJ',
                'name' => 'Jersey',
                'phonecode' => 44,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array (
                'id' => 111,
                'code' => 'JO',
                'name' => 'Jordan',
                'phonecode' => 962,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array (
                'id' => 112,
                'code' => 'KZ',
                'name' => 'Kazakhstan',
                'phonecode' => 7,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array (
                'id' => 113,
                'code' => 'KE',
                'name' => 'Kenya',
                'phonecode' => 254,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array (
                'id' => 114,
                'code' => 'KI',
                'name' => 'Kiribati',
                'phonecode' => 686,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array (
                'id' => 115,
                'code' => 'KP',
                'name' => 'Korea North',
                'phonecode' => 850,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array (
                'id' => 116,
                'code' => 'KR',
                'name' => 'Korea South',
                'phonecode' => 82,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array (
                'id' => 117,
                'code' => 'KW',
                'name' => 'Kuwait',
                'phonecode' => 965,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array (
                'id' => 118,
                'code' => 'KG',
                'name' => 'Kyrgyzstan',
                'phonecode' => 996,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array (
                'id' => 119,
                'code' => 'LA',
                'name' => 'Laos',
                'phonecode' => 856,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array (
                'id' => 120,
                'code' => 'LV',
                'name' => 'Latvia',
                'phonecode' => 371,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array (
                'id' => 121,
                'code' => 'LB',
                'name' => 'Lebanon',
                'phonecode' => 961,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array (
                'id' => 122,
                'code' => 'LS',
                'name' => 'Lesotho',
                'phonecode' => 266,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array (
                'id' => 123,
                'code' => 'LR',
                'name' => 'Liberia',
                'phonecode' => 231,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array (
                'id' => 124,
                'code' => 'LY',
                'name' => 'Libya',
                'phonecode' => 218,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array (
                'id' => 125,
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'phonecode' => 423,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array (
                'id' => 126,
                'code' => 'LT',
                'name' => 'Lithuania',
                'phonecode' => 370,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array (
                'id' => 127,
                'code' => 'LU',
                'name' => 'Luxembourg',
                'phonecode' => 352,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array (
                'id' => 128,
                'code' => 'MO',
                'name' => 'Macau S.A.R.',
                'phonecode' => 853,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array (
                'id' => 129,
                'code' => 'MK',
                'name' => 'Macedonia',
                'phonecode' => 389,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array (
                'id' => 130,
                'code' => 'MG',
                'name' => 'Madagascar',
                'phonecode' => 261,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array (
                'id' => 131,
                'code' => 'MW',
                'name' => 'Malawi',
                'phonecode' => 265,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array (
                'id' => 132,
                'code' => 'MY',
                'name' => 'Malaysia',
                'phonecode' => 60,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array (
                'id' => 133,
                'code' => 'MV',
                'name' => 'Maldives',
                'phonecode' => 960,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array (
                'id' => 134,
                'code' => 'ML',
                'name' => 'Mali',
                'phonecode' => 223,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array (
                'id' => 135,
                'code' => 'MT',
                'name' => 'Malta',
                'phonecode' => 356,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array (
                'id' => 136,
                'code' => 'XM',
            'name' => 'Man (Isle of)',
                'phonecode' => 44,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array (
                'id' => 137,
                'code' => 'MH',
                'name' => 'Marshall Islands',
                'phonecode' => 692,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array (
                'id' => 138,
                'code' => 'MQ',
                'name' => 'Martinique',
                'phonecode' => 596,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array (
                'id' => 139,
                'code' => 'MR',
                'name' => 'Mauritania',
                'phonecode' => 222,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array (
                'id' => 140,
                'code' => 'MU',
                'name' => 'Mauritius',
                'phonecode' => 230,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array (
                'id' => 141,
                'code' => 'YT',
                'name' => 'Mayotte',
                'phonecode' => 269,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array (
                'id' => 142,
                'code' => 'MX',
                'name' => 'Mexico',
                'phonecode' => 52,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array (
                'id' => 143,
                'code' => 'FM',
                'name' => 'Micronesia',
                'phonecode' => 691,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array (
                'id' => 144,
                'code' => 'MD',
                'name' => 'Moldova',
                'phonecode' => 373,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array (
                'id' => 145,
                'code' => 'MC',
                'name' => 'Monaco',
                'phonecode' => 377,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array (
                'id' => 146,
                'code' => 'MN',
                'name' => 'Mongolia',
                'phonecode' => 976,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array (
                'id' => 147,
                'code' => 'MS',
                'name' => 'Montserrat',
                'phonecode' => 1664,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array (
                'id' => 148,
                'code' => 'MA',
                'name' => 'Morocco',
                'phonecode' => 212,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array (
                'id' => 149,
                'code' => 'MZ',
                'name' => 'Mozambique',
                'phonecode' => 258,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array (
                'id' => 150,
                'code' => 'MM',
                'name' => 'Myanmar',
                'phonecode' => 95,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array (
                'id' => 151,
                'code' => 'NA',
                'name' => 'Namibia',
                'phonecode' => 264,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array (
                'id' => 152,
                'code' => 'NR',
                'name' => 'Nauru',
                'phonecode' => 674,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array (
                'id' => 153,
                'code' => 'NP',
                'name' => 'Nepal',
                'phonecode' => 977,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array (
                'id' => 154,
                'code' => 'AN',
                'name' => 'Netherlands Antilles',
                'phonecode' => 599,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array (
                'id' => 155,
                'code' => 'NL',
                'name' => 'Netherlands The',
                'phonecode' => 31,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array (
                'id' => 156,
                'code' => 'NC',
                'name' => 'New Caledonia',
                'phonecode' => 687,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array (
                'id' => 157,
                'code' => 'NZ',
                'name' => 'New Zealand',
                'phonecode' => 64,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array (
                'id' => 158,
                'code' => 'NI',
                'name' => 'Nicaragua',
                'phonecode' => 505,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array (
                'id' => 159,
                'code' => 'NE',
                'name' => 'Niger',
                'phonecode' => 227,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array (
                'id' => 160,
                'code' => 'NG',
                'name' => 'Nigeria',
                'phonecode' => 234,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array (
                'id' => 161,
                'code' => 'NU',
                'name' => 'Niue',
                'phonecode' => 683,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array (
                'id' => 162,
                'code' => 'NF',
                'name' => 'Norfolk Island',
                'phonecode' => 672,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array (
                'id' => 163,
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
                'phonecode' => 1670,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array (
                'id' => 164,
                'code' => 'NO',
                'name' => 'Norway',
                'phonecode' => 47,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array (
                'id' => 165,
                'code' => 'OM',
                'name' => 'Oman',
                'phonecode' => 968,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array (
                'id' => 166,
                'code' => 'PK',
                'name' => 'Pakistan',
                'phonecode' => 92,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array (
                'id' => 167,
                'code' => 'PW',
                'name' => 'Palau',
                'phonecode' => 680,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array (
                'id' => 168,
                'code' => 'PS',
                'name' => 'Palestinian Territory Occupied',
                'phonecode' => 970,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array (
                'id' => 169,
                'code' => 'PA',
                'name' => 'Panama',
                'phonecode' => 507,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array (
                'id' => 170,
                'code' => 'PG',
                'name' => 'Papua new Guinea',
                'phonecode' => 675,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array (
                'id' => 171,
                'code' => 'PY',
                'name' => 'Paraguay',
                'phonecode' => 595,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array (
                'id' => 172,
                'code' => 'PE',
                'name' => 'Peru',
                'phonecode' => 51,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array (
                'id' => 173,
                'code' => 'PH',
                'name' => 'Philippines',
                'phonecode' => 63,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array (
                'id' => 174,
                'code' => 'PN',
                'name' => 'Pitcairn Island',
                'phonecode' => 0,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array (
                'id' => 175,
                'code' => 'PL',
                'name' => 'Poland',
                'phonecode' => 48,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array (
                'id' => 176,
                'code' => 'PT',
                'name' => 'Portugal',
                'phonecode' => 351,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array (
                'id' => 177,
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'phonecode' => 1787,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array (
                'id' => 178,
                'code' => 'QA',
                'name' => 'Qatar',
                'phonecode' => 974,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array (
                'id' => 179,
                'code' => 'RE',
                'name' => 'Reunion',
                'phonecode' => 262,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array (
                'id' => 180,
                'code' => 'RO',
                'name' => 'Romania',
                'phonecode' => 40,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array (
                'id' => 181,
                'code' => 'RU',
                'name' => 'Russia',
                'phonecode' => 70,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array (
                'id' => 182,
                'code' => 'RW',
                'name' => 'Rwanda',
                'phonecode' => 250,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array (
                'id' => 183,
                'code' => 'SH',
                'name' => 'Saint Helena',
                'phonecode' => 290,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array (
                'id' => 184,
                'code' => 'KN',
                'name' => 'Saint Kitts And Nevis',
                'phonecode' => 1869,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array (
                'id' => 185,
                'code' => 'LC',
                'name' => 'Saint Lucia',
                'phonecode' => 1758,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array (
                'id' => 186,
                'code' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'phonecode' => 508,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array (
                'id' => 187,
                'code' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
                'phonecode' => 1784,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array (
                'id' => 188,
                'code' => 'WS',
                'name' => 'Samoa',
                'phonecode' => 684,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array (
                'id' => 189,
                'code' => 'SM',
                'name' => 'San Marino',
                'phonecode' => 378,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array (
                'id' => 190,
                'code' => 'ST',
                'name' => 'Sao Tome and Principe',
                'phonecode' => 239,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array (
                'id' => 191,
                'code' => 'SA',
                'name' => 'Saudi Arabia',
                'phonecode' => 966,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array (
                'id' => 192,
                'code' => 'SN',
                'name' => 'Senegal',
                'phonecode' => 221,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array (
                'id' => 193,
                'code' => 'RS',
                'name' => 'Serbia',
                'phonecode' => 381,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array (
                'id' => 194,
                'code' => 'SC',
                'name' => 'Seychelles',
                'phonecode' => 248,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array (
                'id' => 195,
                'code' => 'SL',
                'name' => 'Sierra Leone',
                'phonecode' => 232,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array (
                'id' => 196,
                'code' => 'SG',
                'name' => 'Singapore',
                'phonecode' => 65,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array (
                'id' => 197,
                'code' => 'SK',
                'name' => 'Slovakia',
                'phonecode' => 421,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 =>
            array (
                'id' => 198,
                'code' => 'SI',
                'name' => 'Slovenia',
                'phonecode' => 386,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 =>
            array (
                'id' => 199,
                'code' => 'XG',
                'name' => 'Smaller Territories of the UK',
                'phonecode' => 44,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 =>
            array (
                'id' => 200,
                'code' => 'SB',
                'name' => 'Solomon Islands',
                'phonecode' => 677,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 =>
            array (
                'id' => 201,
                'code' => 'SO',
                'name' => 'Somalia',
                'phonecode' => 252,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 =>
            array (
                'id' => 202,
                'code' => 'ZA',
                'name' => 'South Africa',
                'phonecode' => 27,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 =>
            array (
                'id' => 203,
                'code' => 'GS',
                'name' => 'South Georgia',
                'phonecode' => 0,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 =>
            array (
                'id' => 204,
                'code' => 'SS',
                'name' => 'South Sudan',
                'phonecode' => 211,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 =>
            array (
                'id' => 205,
                'code' => 'ES',
                'name' => 'Spain',
                'phonecode' => 34,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 =>
            array (
                'id' => 206,
                'code' => 'LK',
                'name' => 'Sri Lanka',
                'phonecode' => 94,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 =>
            array (
                'id' => 207,
                'code' => 'SD',
                'name' => 'Sudan',
                'phonecode' => 249,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 =>
            array (
                'id' => 208,
                'code' => 'SR',
                'name' => 'Suriname',
                'phonecode' => 597,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 =>
            array (
                'id' => 209,
                'code' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
                'phonecode' => 47,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 =>
            array (
                'id' => 210,
                'code' => 'SZ',
                'name' => 'Swaziland',
                'phonecode' => 268,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 =>
            array (
                'id' => 211,
                'code' => 'SE',
                'name' => 'Sweden',
                'phonecode' => 46,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 =>
            array (
                'id' => 212,
                'code' => 'CH',
                'name' => 'Switzerland',
                'phonecode' => 41,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 =>
            array (
                'id' => 213,
                'code' => 'SY',
                'name' => 'Syria',
                'phonecode' => 963,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 =>
            array (
                'id' => 214,
                'code' => 'TW',
                'name' => 'Taiwan',
                'phonecode' => 886,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 =>
            array (
                'id' => 215,
                'code' => 'TJ',
                'name' => 'Tajikistan',
                'phonecode' => 992,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 =>
            array (
                'id' => 216,
                'code' => 'TZ',
                'name' => 'Tanzania',
                'phonecode' => 255,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 =>
            array (
                'id' => 217,
                'code' => 'TH',
                'name' => 'Thailand',
                'phonecode' => 66,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 =>
            array (
                'id' => 218,
                'code' => 'TG',
                'name' => 'Togo',
                'phonecode' => 228,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 =>
            array (
                'id' => 219,
                'code' => 'TK',
                'name' => 'Tokelau',
                'phonecode' => 690,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 =>
            array (
                'id' => 220,
                'code' => 'TO',
                'name' => 'Tonga',
                'phonecode' => 676,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 =>
            array (
                'id' => 221,
                'code' => 'TT',
                'name' => 'Trinidad And Tobago',
                'phonecode' => 1868,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 =>
            array (
                'id' => 222,
                'code' => 'TN',
                'name' => 'Tunisia',
                'phonecode' => 216,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 =>
            array (
                'id' => 223,
                'code' => 'TR',
                'name' => 'Turkey',
                'phonecode' => 90,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 =>
            array (
                'id' => 224,
                'code' => 'TM',
                'name' => 'Turkmenistan',
                'phonecode' => 7370,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 =>
            array (
                'id' => 225,
                'code' => 'TC',
                'name' => 'Turks And Caicos Islands',
                'phonecode' => 1649,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 =>
            array (
                'id' => 226,
                'code' => 'TV',
                'name' => 'Tuvalu',
                'phonecode' => 688,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 =>
            array (
                'id' => 227,
                'code' => 'UG',
                'name' => 'Uganda',
                'phonecode' => 256,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 =>
            array (
                'id' => 228,
                'code' => 'UA',
                'name' => 'Ukraine',
                'phonecode' => 380,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 =>
            array (
                'id' => 229,
                'code' => 'AE',
                'name' => 'United Arab Emirates',
                'phonecode' => 971,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 =>
            array (
                'id' => 230,
                'code' => 'GB',
                'name' => 'United Kingdom',
                'phonecode' => 44,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 =>
            array (
                'id' => 231,
                'code' => 'US',
                'name' => 'United States',
                'phonecode' => 1,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 =>
            array (
                'id' => 232,
                'code' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'phonecode' => 1,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 =>
            array (
                'id' => 233,
                'code' => 'UY',
                'name' => 'Uruguay',
                'phonecode' => 598,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 =>
            array (
                'id' => 234,
                'code' => 'UZ',
                'name' => 'Uzbekistan',
                'phonecode' => 998,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 =>
            array (
                'id' => 235,
                'code' => 'VU',
                'name' => 'Vanuatu',
                'phonecode' => 678,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 =>
            array (
                'id' => 236,
                'code' => 'VA',
            'name' => 'Vatican City State (Holy See)',
                'phonecode' => 39,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 =>
            array (
                'id' => 237,
                'code' => 'VE',
                'name' => 'Venezuela',
                'phonecode' => 58,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 =>
            array (
                'id' => 238,
                'code' => 'VN',
                'name' => 'Vietnam',
                'phonecode' => 84,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 =>
            array (
                'id' => 239,
                'code' => 'VG',
            'name' => 'Virgin Islands (British)',
                'phonecode' => 1284,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 =>
            array (
                'id' => 240,
                'code' => 'VI',
            'name' => 'Virgin Islands (US)',
                'phonecode' => 1340,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 =>
            array (
                'id' => 241,
                'code' => 'WF',
                'name' => 'Wallis And Futuna Islands',
                'phonecode' => 681,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 =>
            array (
                'id' => 242,
                'code' => 'EH',
                'name' => 'Western Sahara',
                'phonecode' => 212,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 =>
            array (
                'id' => 243,
                'code' => 'YE',
                'name' => 'Yemen',
                'phonecode' => 967,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 =>
            array (
                'id' => 244,
                'code' => 'YU',
                'name' => 'Yugoslavia',
                'phonecode' => 38,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 =>
            array (
                'id' => 245,
                'code' => 'ZM',
                'name' => 'Zambia',
                'phonecode' => 260,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 =>
            array (
                'id' => 246,
                'code' => 'ZW',
                'name' => 'Zimbabwe',
                'phonecode' => 263,
                'flag' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));

    }
}

<?php

namespace Database\Seeders;

use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [

            [
                'name' => 'Afghanistan',
                'dial_code' => '+93',
                'code' => 'AF',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Aland Islands',
                'dial_code' => '+358',
                'code' => 'AX', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Albania',
                'dial_code' => '+355',
                'code' => 'AL'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Algeria',
                'dial_code' => '+213',
                'code' => 'DZ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'AmericanSamoa',
                'dial_code' => '+1684',
                'code' => 'AS'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Andorra',
                'dial_code' => '+376',
                'code' => 'AD'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Angola',
                'dial_code' => '+244',
                'code' => 'AO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Anguilla',
                'dial_code' => '+1264',
                'code' => 'AI'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Antarctica',
                'dial_code' => '+672',
                'code' => 'AQ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Antigua and Barbuda',
                'dial_code' => '+1268',
                'code' => 'AG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Argentina',
                'dial_code' => '+54',
                'code' => 'AR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Armenia',
                'dial_code' => '+374',
                'code' => 'AM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Aruba',
                'dial_code' => '+297',
                'code' => 'AW'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Australia',
                'dial_code' => '+61',
                'code' => 'AU'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Austria',
                'dial_code' => '+43',
                'code' => 'AT'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Azerbaijan',
                'dial_code' => '+994',
                'code' => 'AZ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Bahamas',
                'dial_code' => '+1242',
                'code' => 'BS'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Bahrain',
                'dial_code' => '+973',
                'code' => 'BH'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Bangladesh',
                'dial_code' => '+880',
                'code' => 'BD'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Barbados',
                'dial_code' => '+1246',
                'code' => 'BB'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Belarus',
                'dial_code' => '+375',
                'code' => 'BY'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Belgium',
                'dial_code' => '+32',
                'code' => 'BE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Belize',
                'dial_code' => '+501',
                'code' => 'BZ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Benin',
                'dial_code' => '+229',
                'code' => 'BJ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Bermuda',
                'dial_code' => '+1441',
                'code' => 'BM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Bhutan',
                'dial_code' => '+975',
                'code' => 'BT'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Bolivia, Plurinational State of',
                'dial_code' => '+591',
                'code' => 'BO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Bosnia and Herzegovina',
                'dial_code' => '+387',
                'code' => 'BA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Botswana',
                'dial_code' => '+267',
                'code' => 'BW'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Brazil',
                'dial_code' => '+55',
                'code' => 'BR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'British Indian Ocean Territory',
                'dial_code' => '+246',
                'code' => 'IO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Brunei Darussalam',
                'dial_code' => '+673',
                'code' => 'BN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Bulgaria',
                'dial_code' => '+359',
                'code' => 'BG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Burkina Faso',
                'dial_code' => '+226',
                'code' => 'BF'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Burundi',
                'dial_code' => '+257',
                'code' => 'BI'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Cambodia',
                'dial_code' => '+855',
                'code' => 'KH'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Cameroon',
                'dial_code' => '+237',
                'code' => 'CM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Canada',
                'dial_code' => '+1',
                'code' => 'CA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Cape Verde',
                'dial_code' => '+238',
                'code' => 'CV'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Cayman Islands',
                'dial_code' => '+ 345',
                'code' => 'KY'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Central African Republic',
                'dial_code' => '+236',
                'code' => 'CF'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Chad',
                'dial_code' => '+235',
                'code' => 'TD'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Chile',
                'dial_code' => '+56',
                'code' => 'CL'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'China',
                'dial_code' => '+86',
                'code' => 'CN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Christmas Island',
                'dial_code' => '+61',
                'code' => 'CX'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Cocos (Keeling) Islands',
                'dial_code' => '+61',
                'code' => 'CC'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Colombia',
                'dial_code' => '+57',
                'code' => 'CO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Comoros',
                'dial_code' => '+269',
                'code' => 'KM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Congo',
                'dial_code' => '+242',
                'code' => 'CG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Congo, The Democratic Republic of the Congo',
                'dial_code' => '+243',
                'code' => 'CD'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Cook Islands',
                'dial_code' => '+682',
                'code' => 'CK'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Costa Rica',
                'dial_code' => '+506',
                'code' => 'CR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => "Cote d'Ivoire",
                'dial_code' => ' + 225',
                'code' => 'CI'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Croatia',
                'dial_code' => ' + 385',
                'code' => 'HR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Cuba',
                'dial_code' => ' + 53',
                'code' => 'CU'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Cyprus',
                'dial_code' => ' + 357',
                'code' => 'CY'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Czech Republic',
                'dial_code' => ' + 420',
                'code' => 'CZ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Denmark',
                'dial_code' => ' + 45',
                'code' => 'DK'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Djibouti',
                'dial_code' => ' + 253',
                'code' => 'DJ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Dominica',
                'dial_code' => ' + 1767',
                'code' => 'DM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Dominican Republic',
                'dial_code' => ' + 1849',
                'code' => 'do'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Ecuador',
                'dial_code' => ' + 593',
                'code' => 'EC'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Egypt',
                'dial_code' => ' + 20',
                'code' => 'EG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'El Salvador',
                'dial_code' => ' + 503',
                'code' => 'SV'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Equatorial Guinea',
                'dial_code' => ' + 240',
                'code' => 'GQ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Eritrea',
                'dial_code' => ' + 291',
                'code' => 'ER'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Estonia',
                'dial_code' => ' + 372',
                'code' => 'EE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Ethiopia',
                'dial_code' => ' + 251',
                'code' => 'ET'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Falkland Islands(Malvinas)',
                'dial_code' => ' + 500',
                'code' => 'FK'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Faroe Islands',
                'dial_code' => ' + 298',
                'code' => 'FO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Fiji',
                'dial_code' => ' + 679',
                'code' => 'FJ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Finland',
                'dial_code' => ' + 358',
                'code' => 'FI'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'France',
                'dial_code' => ' + 33',
                'code' => 'FR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'French Guiana',
                'dial_code' => ' + 594',
                'code' => 'GF'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'French Polynesia',
                'dial_code' => ' + 689',
                'code' => 'PF'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Gabon',
                'dial_code' => ' + 241',
                'code' => 'GA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Gambia',
                'dial_code' => ' + 220',
                'code' => 'GM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Georgia',
                'dial_code' => ' + 995',
                'code' => 'GE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Germany',
                'dial_code' => ' + 49',
                'code' => 'DE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Ghana',
                'dial_code' => ' + 233',
                'code' => 'GH'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Gibraltar',
                'dial_code' => ' + 350',
                'code' => 'GI'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Greece',
                'dial_code' => ' + 30',
                'code' => 'GR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Greenland',
                'dial_code' => ' + 299',
                'code' => 'GL'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Grenada',
                'dial_code' => ' + 1473',
                'code' => 'GD'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Guadeloupe',
                'dial_code' => ' + 590',
                'code' => 'GP'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Guam',
                'dial_code' => ' + 1671',
                'code' => 'GU'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Guatemala',
                'dial_code' => ' + 502',
                'code' => 'GT'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Guernsey',
                'dial_code' => ' + 44',
                'code' => 'GG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Guinea',
                'dial_code' => ' + 224',
                'code' => 'GN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Guinea - Bissau',
                'dial_code' => ' + 245',
                'code' => 'GW'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Guyana',
                'dial_code' => ' + 595',
                'code' => 'GY'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Haiti',
                'dial_code' => ' + 509',
                'code' => 'HT'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Holy See(Vatican City State)',
                'dial_code' => ' + 379',
                'code' => 'VA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Honduras',
                'dial_code' => ' + 504',
                'code' => 'HN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Hong Kong',
                'dial_code' => ' + 852',
                'code' => 'HK'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Hungary',
                'dial_code' => ' + 36',
                'code' => 'HU'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Iceland',
                'dial_code' => ' + 354',
                'code' => 'IS'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'India',
                'dial_code' => ' + 91',
                'code' => 'IN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Indonesia',
                'dial_code' => ' + 62',
                'code' => 'ID'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Iran, Islamic Republic of Persian Gulf',
                'dial_code' => ' + 98',
                'code' => 'IR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Iraq',
                'dial_code' => ' + 964',
                'code' => 'IQ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Ireland',
                'dial_code' => ' + 353',
                'code' => 'IE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Isle of Man',
                'dial_code' => ' + 44',
                'code' => 'IM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Israel',
                'dial_code' => ' + 972',
                'code' => 'IL'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Italy',
                'dial_code' => ' + 39',
                'code' => 'IT'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Jamaica',
                'dial_code' => ' + 1876',
                'code' => 'JM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Japan',
                'dial_code' => ' + 81',
                'code' => 'JP'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Jersey',
                'dial_code' => ' + 44',
                'code' => 'JE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Jordan',
                'dial_code' => ' + 962',
                'code' => 'JO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Kazakhstan',
                'dial_code' => ' + 77',
                'code' => 'KZ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Kenya',
                'dial_code' => ' + 254',
                'code' => 'KE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Kiribati',
                'dial_code' => ' + 686',
                'code' => 'KI'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => "Korea, Democratic People's Republic of Korea",
                'dial_code' => ' + 850',
                'code' => 'KP',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Korea, Republic of South Korea',
                'dial_code' => ' + 82',
                'code' => 'KR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Kuwait',
                'dial_code' => ' + 965',
                'code' => 'KW'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Kyrgyzstan',
                'dial_code' => ' + 996',
                'code' => 'KG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Laos',
                'dial_code' => ' + 856',
                'code' => 'LA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Latvia',
                'dial_code' => ' + 371',
                'code' => 'LV'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Lebanon',
                'dial_code' => ' + 961',
                'code' => 'LB'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Lesotho',
                'dial_code' => ' + 266',
                'code' => 'LS'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Liberia',
                'dial_code' => ' + 231',
                'code' => 'LR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Libyan Arab Jamahiriya',
                'dial_code' => ' + 218',
                'code' => 'LY'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Liechtenstein',
                'dial_code' => ' + 423',
                'code' => 'LI'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Lithuania',
                'dial_code' => ' + 370',
                'code' => 'LT'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Luxembourg',
                'dial_code' => ' + 352',
                'code' => 'LU'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Macao',
                'dial_code' => ' + 853',
                'code' => 'MO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Macedonia',
                'dial_code' => ' + 389',
                'code' => 'MK'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Madagascar',
                'dial_code' => ' + 261',
                'code' => 'MG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Malawi',
                'dial_code' => ' + 265',
                'code' => 'MW'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Malaysia',
                'dial_code' => ' + 60',
                'code' => 'MY'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Maldives',
                'dial_code' => ' + 960',
                'code' => 'MV'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Mali',
                'dial_code' => ' + 223',
                'code' => 'ML'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Malta',
                'dial_code' => ' + 356',
                'code' => 'MT'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Marshall Islands',
                'dial_code' => ' + 692',
                'code' => 'MH'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Martinique',
                'dial_code' => ' + 596',
                'code' => 'MQ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Mauritania',
                'dial_code' => ' + 222',
                'code' => 'MR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Mauritius',
                'dial_code' => ' + 230',
                'code' => 'MU'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Mayotte',
                'dial_code' => ' + 262',
                'code' => 'YT'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Mexico',
                'dial_code' => ' + 52',
                'code' => 'MX'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Micronesia, Federated States of Micronesia',
                'dial_code' => ' + 691',
                'code' => 'FM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Moldova',
                'dial_code' => ' + 373',
                'code' => 'MD'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Monaco',
                'dial_code' => ' + 377',
                'code' => 'MC'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Mongolia',
                'dial_code' => ' + 976',
                'code' => 'MN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Montenegro',
                'dial_code' => ' + 382',
                'code' => 'ME'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Montserrat',
                'dial_code' => ' + 1664',
                'code' => 'MS'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Morocco',
                'dial_code' => ' + 212',
                'code' => 'MA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Mozambique',
                'dial_code' => ' + 258',
                'code' => 'MZ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Myanmar',
                'dial_code' => ' + 95',
                'code' => 'MM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Namibia',
                'dial_code' => ' + 264',
                'code' => 'NA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Nauru',
                'dial_code' => ' + 674',
                'code' => 'NR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Nepal',
                'dial_code' => ' + 977',
                'code' => 'NP'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Netherlands',
                'dial_code' => ' + 31',
                'code' => 'NL'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Netherlands Antilles',
                'dial_code' => ' + 599',
                'code' => 'AN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'new Caledonia',
                'dial_code' => ' + 687',
                'code' => 'NC'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'new Zealand',
                'dial_code' => ' + 64',
                'code' => 'NZ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Nicaragua',
                'dial_code' => ' + 505',
                'code' => 'NI'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Niger',
                'dial_code' => ' + 227',
                'code' => 'NE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Nigeria',
                'dial_code' => ' + 234',
                'code' => 'NG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Niue',
                'dial_code' => ' + 683',
                'code' => 'NU'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Norfolk Island',
                'dial_code' => ' + 672',
                'code' => 'NF'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Northern Mariana Islands',
                'dial_code' => ' + 1670',
                'code' => 'MP'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Norway',
                'dial_code' => ' + 47',
                'code' => 'NO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Oman',
                'dial_code' => ' + 968',
                'code' => 'OM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Pakistan',
                'dial_code' => ' + 92',
                'code' => 'PK'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Palau',
                'dial_code' => ' + 680',
                'code' => 'PW'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Palestinian Territory, Occupied',
                'dial_code' => ' + 970',
                'code' => 'PS'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Panama',
                'dial_code' => ' + 507',
                'code' => 'PA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Papua new Guinea',
                'dial_code' => ' + 675',
                'code' => 'PG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Paraguay',
                'dial_code' => ' + 595',
                'code' => 'PY'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Peru',
                'dial_code' => ' + 51',
                'code' => 'PE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Philippines',
                'dial_code' => ' + 63',
                'code' => 'PH'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Pitcairn',
                'dial_code' => ' + 872',
                'code' => 'PN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Poland',
                'dial_code' => ' + 48',
                'code' => 'PL'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Portugal',
                'dial_code' => ' + 351',
                'code' => 'PT'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Puerto Rico',
                'dial_code' => ' + 1939',
                'code' => 'PR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Qatar',
                'dial_code' => ' + 974',
                'code' => 'QA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Romania',
                'dial_code' => ' + 40',
                'code' => 'RO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Russia',
                'dial_code' => ' + 7',
                'code' => 'RU'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Rwanda',
                'dial_code' => ' + 250',
                'code' => 'RW'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Reunion',
                'dial_code' => ' + 262',
                'code' => 'RE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Saint Barthelemy',
                'dial_code' => ' + 590',
                'code' => 'BL'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Saint Helena, Ascension and Tristan Da Cunha',
                'dial_code' => ' + 290',
                'code' => 'SH'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Saint Kitts and Nevis',
                'dial_code' => ' + 1869',
                'code' => 'KN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Saint Lucia',
                'dial_code' => ' + 1758',
                'code' => 'LC'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Saint Martin',
                'dial_code' => ' + 590',
                'code' => 'MF'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Saint Pierre and Miquelon',
                'dial_code' => ' + 508',
                'code' => 'PM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Saint Vincent and the Grenadines',
                'dial_code' => ' + 1784',
                'code' => 'VC'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Samoa',
                'dial_code' => ' + 685',
                'code' => 'WS'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'San Marino',
                'dial_code' => ' + 378',
                'code' => 'SM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Sao Tome and Principe',
                'dial_code' => ' + 239',
                'code' => 'ST'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Saudi Arabia',
                'dial_code' => ' + 966',
                'code' => 'SA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Senegal',
                'dial_code' => ' + 221',
                'code' => 'SN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Serbia',
                'dial_code' => ' + 381',
                'code' => 'RS'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Seychelles',
                'dial_code' => ' + 248',
                'code' => 'SC'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Sierra Leone',
                'dial_code' => ' + 232',
                'code' => 'SL'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Singapore',
                'dial_code' => ' + 65',
                'code' => 'SG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Slovakia',
                'dial_code' => ' + 421',
                'code' => 'SK'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Slovenia',
                'dial_code' => ' + 386',
                'code' => 'SI'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Solomon Islands',
                'dial_code' => ' + 677',
                'code' => 'SB'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Somalia',
                'dial_code' => ' + 252',
                'code' => 'SO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'South Africa',
                'dial_code' => ' + 27',
                'code' => 'ZA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'South Sudan',
                'dial_code' => ' + 211',
                'code' => 'SS'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'South Georgia and the South Sandwich Islands',
                'dial_code' => ' + 500',
                'code' => 'GS'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Spain',
                'dial_code' => ' + 34',
                'code' => 'ES'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Sri Lanka',
                'dial_code' => ' + 94',
                'code' => 'LK'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Sudan',
                'dial_code' => ' + 249',
                'code' => 'SD'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Suriname',
                'dial_code' => ' + 597',
                'code' => 'SR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Svalbard and Jan Mayen',
                'dial_code' => ' + 47',
                'code' => 'SJ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Swaziland',
                'dial_code' => ' + 268',
                'code' => 'SZ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Sweden',
                'dial_code' => ' + 46',
                'code' => 'SE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Switzerland',
                'dial_code' => ' + 41',
                'code' => 'CH'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Syrian Arab Republic',
                'dial_code' => ' + 963',
                'code' => 'SY'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Taiwan',
                'dial_code' => ' + 886',
                'code' => 'TW'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Tajikistan',
                'dial_code' => ' + 992',
                'code' => 'TJ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Tanzania, United Republic of Tanzania',
                'dial_code' => ' + 255',
                'code' => 'TZ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Thailand',
                'dial_code' => ' + 66',
                'code' => 'TH'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Timor - Leste',
                'dial_code' => ' + 670',
                'code' => 'TL'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Togo',
                'dial_code' => ' + 228',
                'code' => 'TG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Tokelau',
                'dial_code' => ' + 690',
                'code' => 'TK'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Tonga',
                'dial_code' => ' + 676',
                'code' => 'TO'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Trinidad and Tobago',
                'dial_code' => ' + 1868',
                'code' => 'TT'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Tunisia',
                'dial_code' => ' + 216',
                'code' => 'TN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Turkey',
                'dial_code' => ' + 90',
                'code' => 'TR'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Turkmenistan',
                'dial_code' => ' + 993',
                'code' => 'TM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Turks and Caicos Islands',
                'dial_code' => ' + 1649',
                'code' => 'TC'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Tuvalu',
                'dial_code' => ' + 688',
                'code' => 'TV'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Uganda',
                'dial_code' => ' + 256',
                'code' => 'UG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Ukraine',
                'dial_code' => ' + 380',
                'code' => 'UA'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'United Arab Emirates',
                'dial_code' => ' + 971',
                'code' => 'AE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'United Kingdom',
                'dial_code' => ' + 44',
                'code' => 'GB'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'United States',
                'dial_code' => ' + 1',
                'code' => 'US'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Uruguay',
                'dial_code' => ' + 598',
                'code' => 'UY'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Uzbekistan',
                'dial_code' => ' + 998',
                'code' => 'UZ'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Vanuatu',
                'dial_code' => ' + 678',
                'code' => 'VU'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Venezuela, Bolivarian Republic of Venezuela',
                'dial_code' => ' + 58',
                'code' => 'VE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Vietnam',
                'dial_code' => ' + 84',
                'code' => 'VN'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Virgin Islands, British',
                'dial_code' => ' + 1284',
                'code' => 'VG'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Virgin Islands, U . S . ',
                'dial_code' => ' + 1340',
                'code' => 'VI'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Wallis and Futuna',
                'dial_code' => ' + 681',
                'code' => 'WF'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Yemen',
                'dial_code' => ' + 967',
                'code' => 'YE'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Zambia',
                'dial_code' => ' + 260',
                'code' => 'ZM'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),],
            [
                'name' => 'Zimbabwe',
                'dial_code' => ' + 263',
                'code' => 'ZW'
                , 'created_at' => Carbon::now(), 'updated_at' => Carbon::now(),]
        ];

        Country::insert($countries);

    }
}

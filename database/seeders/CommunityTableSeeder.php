<?php

namespace Database\Seeders;

use App\Models\Community;
use Illuminate\Database\Seeder;

class CommunityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        Community::create([
            'community_name' => 'OLOFU META',
            'community_code' => 'OTA',
            'ward_id' => '1',
            'community_description' => 'This is Olofu Meta Community'
        ]);

        Community::create([
            'community_name' => 'IMOKE EMU',
            'community_code' => 'IMU',
            'ward_id' => '1',
            'community_description' => 'This is Imoke Emu Community'
        ]);

        Community::create([
            'community_name' => 'IDI IROKO',
            'community_code' => 'IKO',
            'ward_id' => '1',
            'community_description' => 'This is Idi Iroko Community'
        ]);

        Community::create([
            'community_name' => 'EMU',
            'community_code' => 'EMU',
            'ward_id' => '1',
            'community_description' => 'This is Emu Community'
        ]);

        Community::create([
            'community_name' => 'IKAWO-OLASO',
            'community_code' => 'ISO',
            'ward_id' => '1',
            'community_description' => 'This is Ikawo-Olaso Community'
        ]);

        Community::create([
            'community_name' => 'OGOGORO',
            'community_code' => 'ORO',
            'ward_id' => '1',
            'community_description' => 'This is Ogogoro Community'
        ]);

        Community::create([
            'community_name' => 'ONIGBEDU',
            'community_code' => 'IDU',
            'ward_id' => '1',
            'community_description' => 'This is Onigbedu Community'
        ]);

        Community::create([
            'community_name' => 'BOLORUNPELU',
            'community_code' => 'OLU',
            'ward_id' => '1',
            'community_description' => 'This is Bolorunpelu Community'
        ]);

        Community::create([
            'community_name' => 'IDI-OYIN IBEJU',
            'community_code' => 'IYU',
            'ward_id' => '1',
            'community_description' => 'This is Idi-Oyin Ibeju Community'
        ]);

        Community::create([
            'community_name' => 'IBA-OLOJA',
            'community_code' => 'IJA',
            'ward_id' => '1',
            'community_description' => 'This is Iba-Oloja Community'
        ]);

        Community::create([
            'community_name' => 'TARO',
            'community_code' => 'TRO',
            'ward_id' => '1',
            'community_description' => 'This is Taro Community'
        ]);

        Community::create([
            'community_name' => 'IMOKE-IBEJU',
            'community_code' => 'IJU',
            'ward_id' => '1',
            'community_description' => 'This is IMOKE-IBEJU Community'
        ]);

        Community::create([
            'community_name' => 'OREKI-IBEJU',
            'community_code' => 'OJU',
            'ward_id' => '1',
            'community_description' => 'This is OREKI-IBEJU Community'
        ]);

        Community::create([
            'community_name' => 'OKEGUN BAALE',
            'community_code' => 'OLE',
            'ward_id' => '1',
            'community_description' => 'This is OKEGUN BAALE Community'
        ]);

        Community::create([
            'community_name' => 'OKEGUN OWUYE',
            'community_code' => 'OYE',
            'ward_id' => '1',
            'community_description' => 'This is OKEGUN OWUYE Community'
        ]);

        Community::create([
            'community_name' => 'IDI OROGBO SALISU',
            'community_code' => 'IOU',
            'ward_id' => '1',
            'community_description' => 'This is IDI OROGBO SALISU Community'
        ]);

        Community::create([
            'community_name' => 'IDI OROGBO OLOWU',
            'community_code' => 'IWU',
            'ward_id' => '1',
            'community_description' => 'This is IDI OROGBO OLOWU Community'
        ]);

        Community::create([
            'community_name' => 'MADAGBAYUN',
            'community_code' => 'AUN',
            'ward_id' => '1',
            'community_description' => 'This is MADAGBAYUN Community'
        ]);

        Community::create([
            'community_name' => 'LAPORAGA',
            'community_code' => 'AGA',
            'ward_id' => '1',
            'community_description' => 'This is LAPORAGA Community'
        ]);

        Community::create([
            'community_name' => 'KAYETORO',
            'community_code' => 'ARO',
            'ward_id' => '1',
            'community_description' => 'This is KAYETORO Community'
        ]);

        Community::create([
            'community_name' => 'ARAROMI-IBEJU',
            'community_code' => 'AJU',
            'ward_id' => '1',
            'community_description' => 'This is ARAROMI-IBEJU Community'
        ]);

        Community::create([
            'community_name' => 'OKEGUN SCHOOL',
            'community_code' => 'OSC',
            'ward_id' => '1',
            'community_description' => 'This is OKEGUN SCHOOL Community'
        ]);

        Community::create([
            'community_name' => 'OKEGUN ODOFIN',
            'community_code' => 'OIN',
            'ward_id' => '1',
            'community_description' => 'This is OKEGUN ODOFIN Community'
        ]);

        Community::create([
            'community_name' => 'OKEGUN LADESESO',
            'community_code' => 'OSO',
            'ward_id' => '1',
            'community_description' => 'This is OKEGUN LADESESO Community'
        ]);

        Community::create([
            'community_name' => 'OKEGUN ELEKU',
            'community_code' => 'OKU',
            'ward_id' => '1',
            'community_description' => 'This is OKEGUN ELEKU Community'
        ]);

        Community::create([
            'community_name' => 'OKEGUN MUSEYO',
            'community_code' => 'KYO',
            'ward_id' => '1',
            'community_description' => 'This is OKEGUN MUSEYO Community'
        ]);

        Community::create([
            'community_name' => 'IBEJU AGBE',
            'community_code' => 'IBE',
            'ward_id' => '1',
            'community_description' => 'This is IBEJU AGBE Community'
        ]);

        Community::create([
            'community_name' => 'TAGBATI',
            'community_code' => 'TAG',
            'ward_id' => '2',
            'community_description' => 'This is Tagbati Community'
        ]);

        Community::create([
            'community_name' => 'GBAGBAKELEGBA',
            'community_code' => 'GBA',
            'ward_id' => '3',
            'community_description' => 'This is Gbagbakelegba Community'
        ]);

        Community::create([
            'community_name' => 'ASOKO',
            'community_code' => 'ASK',
            'ward_id' => '4',
            'community_description' => 'This is Asoko Community'
        ]);

        Community::create([
            'community_name' => 'SOLU ORUNMIJA',
            'community_code' => 'SOJ',
            'ward_id' => '5',
            'community_description' => 'This is Solu Orunmija Community'
        ]);

        Community::create([
            'community_name' => 'MUSIRIKOGO',
            'community_code' => 'MUG',
            'ward_id' => '6',
            'community_description' => 'This is Musirikogo Community'
        ]);

        Community::create([
            'community_name' => 'ABEGEDE',
            'community_code' => 'ABE',
            'ward_id' => '7',
            'community_description' => 'This is Abegede Community'
        ]);
    }
}


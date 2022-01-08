<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    protected $settings = [
        [
            'key' => 'site_name',
            'value' => 'Crystal Group'
        ],
        [
            'key' => 'site_logo',
            'value' => ''
        ],
        [
            'key' => 'footer_text',
            'value' => 'COPYRIGHT © 2022 CRYSTAL GROUP'
        ],
        [
            'key' => 'instagram',
            'value' => ''
        ],
        [
            'key' => 'facebook',
            'value' => ''
        ],
        [
            'key' => 'twitter',
            'value' => ''
        ],
        [
            'key' => 'likedin',
            'value' => ''
        ],
        [
            'key' => 'address',
            'value' => 'xyz'
        ],
        [
            'key' => 'email',
            'value' => 'care@crystalgroup.in'
        ],
        [
            'key' => 'mobile',
            'value' => '9876543210'
        ],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting) {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted ' . count($this->settings) . ' records');
    }
}

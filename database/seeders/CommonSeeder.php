<?php

namespace Database\Seeders;

use App\Models\Common;
use Illuminate\Database\Seeder;

class CommonSeeder extends Seeder
{

    protected $items = [
        [
            'key' => 'about_text',
            'value' => '',
        ],
        [
            'key' => 'welcome_title',
            'value' => 'We provide the best strategy to grow up your business',
        ],
        [
            'key' => 'welcome_caption',
            'value' => '',
        ],
        [
            'key' => 'feature_1',
            'value' => '',
        ],
        [
            'key' => 'feature_2',
            'value' => '',
        ],
        [
            'key' => 'total_project',
            'value' => 0,
        ],
        [
            'key' => 'happy_client',
            'value' => 0,
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->items as $index => $item) {
            $result = Common::create($item);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted ' . count($this->items) . ' records');
    }
}

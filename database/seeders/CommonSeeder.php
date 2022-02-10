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
            'key' => 'services',
            'value' => '',
        ],
        [
            'key' => 'welcome_title',
            'value' => 'We provide the best strategy to grow up your business',
        ],
        [
            'key' => 'welcome_caption',
            'value' => 'Pune\'s leading supplier of quality ready mixed concrete.',
        ],
        [
            'key' => 'feature_1',
            'value' => 'Nullam sit amet purus libero. Etiam ullamcorper nisl ut augue blandit, at finibus leo efficitur. Nam gravida purus non sapien auctor, ut aliquam magna ullamcorper.',
        ],
        [
            'key' => 'feature_2',
            'value' => 'Aenean pretium, ipsum et porttitor auctor, metus ipsum iaculis nisi, a bibendum lectus libero vitae urna. Sed id leo eu dolor luctus congue sed eget ipsum. Nunc nec luctus libero. Etiam quis dolor elit.',
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

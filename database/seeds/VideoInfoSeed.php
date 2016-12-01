<?php

use App\Models\VideoInfo;
use Illuminate\Database\Seeder;

class VideoInfoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = $this->testData();

        $videoInfo = new VideoInfo();
        $videoInfo->document()->bulkSave($videos);
    }

    /**
     * test data
     */
    public function testData() {
        return factory(App\Models\VideoInfo::class, 100);

    }
}


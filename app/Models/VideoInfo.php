<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sleimanx2\Plastic\Searchable;

class VideoInfo extends Model
{
    use Searchable;


    // elasticsearch index name
    public $documentIndex = 'Video';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'video_info';

    /**
     * searchable property
     *
     * @var array
     */
    public $searchable = ['video_id', 'video_unique', 'media_id', 'user_id', 'video_name', 'video_desc', 'img', 'video_duration', 'video_file'];

    /**
     * If automatic sync data
     */
    public $syncDocument = false;


    public function buildDocument()
    {
        return [
            'video_id' => $this->video_id,
            'video_unique' => $this->video_unique
        ];
    }
}

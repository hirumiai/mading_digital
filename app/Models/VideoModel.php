<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table            = 'mading_video';
    protected $allowedFields    = [
        'nama_video',
        'status_video',
        'file_video'
    ];

    public function getAllVideo()
    {
        return $this->table('mading_video')
            ->paginate(5);
    }

    public function addNewVideo($data)
    {
        return $this->db->table('mading_video')
            ->insert($data);
    }
}

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


    public function getNumberRowVideos()
    {
        return $this->db->table('mading_video')
            ->get()
            ->getNumRows();
    }

    public function getDataVideoById($id)
    {
        return $this->db->table('mading_video')
            ->where('id_video', $id)
            ->get()
            ->getRowObject();
    }


    public function updateVideoById($id, $data)
    {
        return $this->db->table('mading_video')
            ->where('id_video', $id)
            ->update($data);
    }

    public function deleteVideoById($id)
    {
        return $this->db->table('mading_video')
            ->where('id_video', $id)
            ->delete();
    }

    public function getAllVideoOnly()
    {
        return $this->db->table('mading_video')
            ->select('file_video')
            ->get()
            ->getResultObject();
    }
}

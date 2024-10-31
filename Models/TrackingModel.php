<?php

namespace App\Models;

use CodeIgniter\Model;

class TrackingModel extends Model
{
    protected $table = 'tracking';
    protected $primaryKey = 'ID';

    protected $allowedFields = [];

    public function getTracking() {
        $sql = "SELECT
        convert(varchar(10), cast(upload_date as date), 101) as upload_date,
        schoolid,
        file_name,
        qfuploadname,
        inprocess,
        complete,
        errors
        FROM tracking 
        order by upload_date desc";
        $query = $this->db->query($sql)->getResultArray();
        return $query;
    }

    public function getTrackingBySchool($id) {
        $sql = "SELECT
        convert(varchar(10), cast(upload_date as date), 101) as upload_date,
        schoolid,
        file_name,
        qfuploadname,
        inprocess,
        complete,
        errors
        FROM tracking 
        where schoolid = ?
        order by upload_date desc";
        $query = $this->db->query($sql,[$id])->getResultArray();
        return $query;
    }
}
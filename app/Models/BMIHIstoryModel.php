<?php

namespace App\Models;

use CodeIgniter\Model;

class BMIHistoryModel extends Model
{
    protected $table = 'bmi_history';
    protected $primaryKey = 'id';
    protected $allowedFields = ['height', 'weight', 'bmi', 'gender', 'category', 'created_at'];
}

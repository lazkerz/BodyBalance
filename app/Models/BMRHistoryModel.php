<?php

namespace App\Models;

use CodeIgniter\Model;

class BMRHistoryModel extends Model
{
    protected $table = 'bmr_history';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'height', 'weight', 'age', 'gender', 'activity_level', 'goal', 
        'bmr', 'tdee', 'calories', 'created_at'
    ];
}

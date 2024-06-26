<?php

namespace App\Models;

use CodeIgniter\Model;

class ParticipationFormModel extends Model
{
    protected $table = 'ParticipationForms';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = false;

    protected $returnType = \App\Entities\ParticipationForm::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id','requested_username', 'requested_email', 'email_verified', 'email_token', 'why_participate', 'work_role','github_url'];

    protected $useTimestamps = false;

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
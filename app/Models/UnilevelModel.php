<?php

namespace App\Models;

use CodeIgniter\Model;

class UnilevelModel extends Model
{
    protected $table            = 'ci_unilevels';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'client_id',
        'sponsor_id',
        'sponsor_code',
        'sponsor_name',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function get_partners_by_level($id)
    {
        $obj_result =  $this->db->query("SELECT `customers`.`id` as customer_id2, `memberships`.`name` as membership_name, `customers`.`code` ,`customers`.`email`, `customers`.`avatar`, `customers`.`name`, `customers`.`lastname`,`customers`.`created_at`, `customers`.`range_id`, `customers`.`active`, `ranges`.`name` as range_name,`ranges`.`img` as range_img, `countries`.`nombre` as pais_name, `countries`.`img` as pais_img,
                                        FROM (`customers`) 
                                        JOIN `unilevels` ON `unilevels`.`customer_id` = `customers`.`id`
                                        WHERE `unilevels`.`sponsor_id` = $id 
                                        ORDER BY `unilevels`.`id` ASC");
        return $obj_result->getResult();
    }

    public function get_partners_in_level($id, $begin_date, $end_date)
    {
        $obj_result =  $this->db->query("SELECT `customers`.`id` as customer_id2, `memberships`.`name` as membership_name, `customers`.`code`, `customers`.`email`,`customers`.`created_at`, `customers`.`avatar`,`customers`.`name`, `customers`.`lastname`, `customers`.`range_id`, `unilevels`.`sponsor_id`, `customers`.`active`, `ranges`.`img` as range_img, `ranges`.`name` as range_name, `countries`.`img` as pais_img,
                                        (SELECT COUNT(*) FROM (`customers`)  JOIN `countries` ON `customers`.`country_id` = `countries`.`id`  JOIN `unilevels` ON `unilevels`.`customer_id` = `customers`.`id` JOIN `ranges` ON `customers`.`range_id` = `ranges`.`id`  WHERE `customers`.`active` = '1' AND `unilevels`.`sponsor_id` IN ($id) and countries.id_idioma = 7 ORDER BY `unilevels`.`id` ASC) as total_active,  
                                        (SELECT SUM(points) as points FROM invoices WHERE customer_id = customer_id2 AND invoices.date >= '$begin_date 00:00:00' AND  invoices.date < '$end_date 23:59:59' AND invoices.active = '2') as point_personal,
                                        (SELECT SUM(points) as points FROM invoices WHERE customer_id = customer_id2 AND invoices.date >= '$begin_date 00:00:00' AND  invoices.date < '$end_date 23:59:59' AND invoices.active = '2' and invoices.membership_id = 1) as point_personal_color,
                                        (SELECT  SUM(`points`.`points`) AS points FROM (`points`) WHERE `points`.customer_id = customer_id2 AND `points`.`date` >= '$begin_date 00:00:00' AND `points`.`date` <= '$end_date 23:59:59') as point_grupal  
                                        FROM (`customers`) 
                                        JOIN `countries` ON `customers`.`country_id` = `countries`.`id` 
                                        JOIN `unilevels` ON `unilevels`.`customer_id` = `customers`.`id` 
                                        JOIN `memberships` ON `customers`.`membership_id` = `memberships`.`id` 
                                        JOIN `ranges` ON `customers`.`range_id` = `ranges`.`id` 
                                        WHERE `unilevels`.`sponsor_id` IN ($id) and countries.id_idioma = 7 ORDER BY `unilevels`.`id` ASC");
        return $obj_result->getResult();
    }
}

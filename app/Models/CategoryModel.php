<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{
    protected $table = 'categories';
    protected $allowedFields = ['category','slug','parent_id','level','sort_order','is_active'];
    protected $primaryKey = 'id';

    function getdata($search=false,$filter=false) {
        $builder = $this->db->table('categories')
                ->where(['is_active' => 1]);
        if($search){
            $builder->like('category',$search);
        }
         if($filter){
            $builder->like('is_active',$filter);
        }
        $builder->orderBy('sort_order','ASC');
        return $builder->get()->getResultArray();
    }
}
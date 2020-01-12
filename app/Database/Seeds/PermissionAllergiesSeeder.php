<?php namespace App\Database\Seeds;

class PermissionAllergiesSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show medicine allergies details',
                        'function_description' => 'show medicine allergies details',
                        'slugs' => 'show-medicine-allergies',
                        'name_on_class' => 'show_medicine_allergies',
                        'page_title' => 'medicine allergies details',
                        'module_id' => '6',
                         'link_icon' => '',
                        'order' => '801',
                        'table_name' => 'medicine_allergies',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create medicine allergies',
                        'function_description' => 'create medicine allergies',
                        'slugs' => 'add-medicine-allergies',
                        'name_on_class' => 'add_medicine_allergies',
                        'page_title' => 'create a medicine allergies',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '802',
                        'table_name' => 'medicine_allergies',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of medicine allergies',
                        'function_description' => 'list of medicine allergies',
                        'slugs' => 'list-medicine-allergies',
                        'name_on_class' => 'list_medicine_allergies',
                        'page_title' => 'list of medicine allergies',
                        'module_id' => '6',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '803',
                        'table_name' => 'medicine_allergies',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit medicine allergies account',
                        'function_description' => 'edit medicine allergies account',
                        'slugs' => 'edit-medicine-allergies',
                        'name_on_class' => 'edit_medicine_allergies',
                        'page_title' => 'edit medicine allergies account',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '804',
                        'table_name' => 'medicine_allergies',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete medicine allergies account',
                        'function_description' => 'delete medicine allergies account',
                        'slugs' => 'delete-medicine-allergies',
                        'name_on_class' => 'delete_medicine_allergies',
                        'page_title' => 'delete medicine allergies account',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '805',
                        'table_name' => 'medicine_allergies',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                ];
                //print_r($data); die();
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}

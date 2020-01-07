<?php namespace App\Database\Seeds;

class MedicinePermissionSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show medicine details',
                        'function_description' => 'show medicine details',
                        'slugs' => 'show-medicine',
                        'name_on_class' => 'show_medicine',
                        'page_title' => 'medicine details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => '61',
                        'table_name' => 'medicines',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create medicine',
                        'function_description' => 'create medicine',
                        'slugs' => 'add-medicine',
                        'name_on_class' => 'add_medicine',
                        'page_title' => 'create a medicine',
                        'module_id' => '62',
                        'link_icon' => '',
                        'order' => '3',
                        'table_name' => 'medicines',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of medicines',
                        'function_description' => 'list of medicines',
                        'slugs' => 'list-medicine',
                        'name_on_class' => 'index',
                        'page_title' => 'list of medicines',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '63',
                        'table_name' => 'medicines',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit medicine',
                        'function_description' => 'edit medicine',
                        'slugs' => 'edit-user',
                        'name_on_class' => 'edit_medicine',
                        'page_title' => 'edit medicine',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '64',
                        'table_name' => 'medicines',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete medicine',
                        'function_description' => 'delete medicine',
                        'slugs' => 'delete-medicine',
                        'name_on_class' => 'delete_medicine',
                        'page_title' => 'delete medicine',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '65',
                        'table_name' => 'medicines',
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

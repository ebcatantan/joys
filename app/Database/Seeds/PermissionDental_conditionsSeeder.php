<?php namespace App\Database\Seeds;

class PermissionDental_conditionsSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show dental condition details',
                        'function_description' => 'show dental condition detials',
                        'slugs' => 'show-dentalcondition-details',
                        'name_on_class' => 'show_dental_condition_details',
                        'page_title' => 'dental_condition details',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '401',
                        'table_name' => 'dental_conditions',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create dental condition',
                        'function_description' => 'create dental condition',
                        'slugs' => 'add-dentalcondition',
                        'name_on_class' => 'add_dental_condition',
                        'page_title' => 'create dental_condition',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '402',
                        'table_name' => 'dental_conditions',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of dental conditions',
                        'function_description' => 'list of dental conditions',
                        'slugs' => 'list-dentalcondition',
                        'name_on_class' => 'index',
                        'page_title' => 'list of dental_conditions',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-user-tag"></i>',
                        'order' => '403',
                        'table_name' => 'dental_conditions',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit dental condition',
                        'function_description' => 'edit dental condition',
                        'slugs' => 'edit-dentalcondition',
                        'name_on_class' => 'edit_dental_condition',
                        'page_title' => 'edit dental_condition',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '404',
                        'table_name' => 'dental_conditions',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete dental condition',
                        'function_description' => 'delete dental condition',
                        'slugs' => 'delete-dentalcondition',
                        'name_on_class' => 'delete_dental_condition',
                        'page_title' => 'delete dental_condition',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '405',
                        'table_name' => 'dental_conditions',
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

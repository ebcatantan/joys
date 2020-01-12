<?php namespace App\Database\Seeds;

class PermissionDentistManagementSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                       'function_name' => 'show dentist details',
                       'function_description' => 'show dentist details',
                       'slugs' => 'show-dentist',
                       'name_on_class' => 'show_dentist',
                       'page_title' => 'dentist details',
                       'module_id' => '6',
                        'link_icon' => '',
                       'order' => '101',
                       'table_name' => 'dentists',
                       'func_action' => 'show',
                       'func_type' => 3,
                       'allowed_roles' => "[1]",
                       'status' => 'a',
                       'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create dentist',
                        'function_description' => 'create dentist',
                        'slugs' => 'add-dentist',
                        'name_on_class' => 'add_dentist',
                        'page_title' => 'create a dentist',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '102',
                        'table_name' => 'dentists',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of dentist',
                        'function_description' => 'list of dentist',
                        'slugs' => 'list-dentist',
                        'name_on_class' => 'index',
                        'page_title' => 'list of dentists',
                        'module_id' => '6',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '103',
                        'table_name' => 'dentists',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit dentist',
                        'function_description' => 'edit dentist',
                        'slugs' => 'edit-dentist',
                        'name_on_class' => 'edit_dentist',
                        'page_title' => 'edit dentist',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '104',
                        'table_name' => 'dentists',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete dentist',
                        'function_description' => 'delete dentist',
                        'slugs' => 'delete-dentist',
                        'name_on_class' => 'delete_dentist',
                        'page_title' => 'delete user account',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '105',
                        'table_name' => 'dentists',
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

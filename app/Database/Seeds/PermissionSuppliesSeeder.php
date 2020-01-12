<?php namespace App\Database\Seeds;

class PermissionSuppliesSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [

                    [
                        'function_name' => 'show supplies details',
                        'function_description' => 'show supplies details',
                        'slugs' => 'show-supplies',
                        'name_on_class' => 'show_supplies',
                        'page_title' => 'supplies details',
                        'module_id' => '5',
                         'link_icon' => '',
                        'order' => '601',
                        'table_name' => 'supplies',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create supplies',
                        'function_description' => 'create supplies',
                        'slugs' => 'add-supplies',
                        'name_on_class' => 'add_supplies',
                        'page_title' => 'create supplies',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '602',
                        'table_name' => 'supplies',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of supplies',
                        'function_description' => 'list of supplies',
                        'slugs' => 'list-supplies',
                        'name_on_class' => 'index',
                        'page_title' => 'list of supplies',
                        'module_id' => '5',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '603',
                        'table_name' => 'supplies',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit supplies',
                        'function_description' => 'edit supplies',
                        'slugs' => 'edit-supplies',
                        'name_on_class' => 'edit_supplies',
                        'page_title' => 'edit supplies',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '604',
                        'table_name' => 'supplies',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete supplies',
                        'function_description' => 'delete supplies',
                        'slugs' => 'delete-supplies',
                        'name_on_class' => 'delete_supplies',
                        'page_title' => 'delete supplies',
                        'module_id' => '5',
                        'link_icon' => '',
                        'order' => '605',
                        'table_name' => 'supplies',
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

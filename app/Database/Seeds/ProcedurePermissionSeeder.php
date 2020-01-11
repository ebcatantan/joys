<?php namespace App\Database\Seeds;s

class ProcedurePermissionSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show procedure details',
                        'function_description' => 'show procedure details',
                        'slugs' => 'show-procedure',
                        'name_on_class' => 'show_procedure',
                        'page_title' => 'procedure details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => '701',
                        'table_name' => 'dental-procedures',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create procedure',
                        'function_description' => 'create procedure',
                        'slugs' => 'add-procedure',
                        'name_on_class' => 'add_procedure',
                        'page_title' => 'create procedure',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '702',
                        'table_name' => 'dental-procedures',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of procedures',
                        'function_description' => 'list of procedures',
                        'slugs' => 'list-procedure',
                        'name_on_class' => 'index',
                        'page_title' => 'list of procedures',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '703',
                        'table_name' => 'dental-procedures',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit procedure',
                        'function_description' => 'edit procedure',
                        'slugs' => 'edit-procedure',
                        'name_on_class' => 'edit_procedure',
                        'page_title' => 'edit procedure',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '704',
                        'table_name' => 'dental-procedures',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete procedure',
                        'function_description' => 'delete procedure',
                        'slugs' => 'delete-procedure',
                        'name_on_class' => 'delete_procedure',
                        'page_title' => 'delete procedure',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '705',
                        'table_name' => 'dental-procedures',
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

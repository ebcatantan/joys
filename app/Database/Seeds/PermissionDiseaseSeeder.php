<?php namespace App\Database\Seeds;

class PermissionDiseaseSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [

                    [
                        'function_name' => 'show disease details',
                        'function_description' => 'show disease details',
                        'slugs' => 'show-disease',
                        'name_on_class' => 'show_disease',
                        'page_title' => 'disease details',
                        'module_id' => '6',
                         'link_icon' => '',
                        'order' => '901',
                        'table_name' => 'diseases',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create disease account',
                        'function_description' => 'create disease account',
                        'slugs' => 'add-disease',
                        'name_on_class' => 'add_disease',
                        'page_title' => 'create a disease account',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '902',
                        'table_name' => 'diseases',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of diseases',
                        'function_description' => 'list of diseases',
                        'slugs' => 'list-disease',
                        'name_on_class' => 'index',
                        'page_title' => 'list of diseases',
                        'module_id' => '6',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '903',
                        'table_name' => 'diseases',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit disease account',
                        'function_description' => 'edit disease account',
                        'slugs' => 'edit-disease',
                        'name_on_class' => 'edit_disease',
                        'page_title' => 'edit disease account',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '904',
                        'table_name' => 'diseases',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete disease account',
                        'function_description' => 'delete disease account',
                        'slugs' => 'delete-disease',
                        'name_on_class' => 'delete_disease',
                        'page_title' => 'delete disease account',
                        'module_id' => '6',
                        'link_icon' => '',
                        'order' => '905',
                        'table_name' => 'diseases',
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

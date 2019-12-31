<?php namespace App\Database\Seeds;

class PermissionPatientSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                    [
                        'function_name' => 'show patient details',
                        'function_description' => 'show patient details',
                        'slugs' => 'show-patient',
                        'name_on_class' => 'show_patient',
                        'page_title' => 'patient details',
                        'module_id' => '2',
                         'link_icon' => '',
                        'order' => '14',
                        'table_name' => 'patients',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create patient account',
                        'function_description' => 'create patient account',
                        'slugs' => 'add-user',
                        'name_on_class' => 'add_patient',
                        'page_title' => 'create a patient account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '15',
                        'table_name' => 'patients',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of patients',
                        'function_description' => 'list of patients',
                        'slugs' => 'list-patient',
                        'name_on_class' => 'index',
                        'page_title' => 'list of patient',
                        'module_id' => '2',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '16',
                        'table_name' => 'patients',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit patient account',
                        'function_description' => 'edit patient account',
                        'slugs' => 'edit-patient',
                        'name_on_class' => 'edit_patient',
                        'page_title' => 'edit patient account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '17',
                        'table_name' => 'patients',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete patient account',
                        'function_description' => 'delete patient account',
                        'slugs' => 'delete-patient',
                        'name_on_class' => 'delete_patient',
                        'page_title' => 'delete patient account',
                        'module_id' => '2',
                        'link_icon' => '',
                        'order' => '18',
                        'table_name' => 'patients',
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

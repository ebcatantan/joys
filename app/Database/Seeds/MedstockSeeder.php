<?php namespace App\Database\Seeds;

class MedstockSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [

                    [
                        'function_name' => 'show medicine_stock details',
                        'function_description' => 'show medicine_stock details',
                        'slugs' => 'show_medicine_stock',
                        'name_on_class' => 'show_medicine_stock',
                        'page_title' => 'Medicine-Stocks details',
                        'module_id' => '3',
                         'link_icon' => '',
                        'order' => '501',
                        'table_name' => 'medicine-stocks',
                        'func_action' => 'show',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'create medicine_stock account',
                        'function_description' => 'create medicine_stock account',
                        'slugs' => 'add_medicine_stock',
                        'name_on_class' => 'add_medicine_stock',
                        'page_title' => 'create a medicine-stock account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '502',
                        'table_name' => 'medicine-stocks',
                        'func_action' => 'add',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'list of medicine-stocks',
                        'function_description' => 'list of medicine-stock',
                        'slugs' => 'list_medicine_stock',
                        'name_on_class' => 'index',
                        'page_title' => 'list of medicine-stocks',
                        'module_id' => '3',
                        'link_icon' => '<i class="fas fa-users"></i>',
                        'order' => '503',
                        'table_name' => 'medicine-stocks',
                        'func_action' => 'link',
                        'func_type' => 1,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'edit medicine-stock account',
                        'function_description' => 'edit medicine-stock account',
                        'slugs' => 'edit_medicine_stock',
                        'name_on_class' => 'edit_medicine_stock',
                        'page_title' => 'edit medicine-stock account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '504',
                        'table_name' => 'medicine-stocks',
                        'func_action' => 'edit',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'function_name' => 'delete medicine-stock account',
                        'function_description' => 'delete medicine-stock account',
                        'slugs' => 'delete-medstock',
                        'name_on_class' => 'delete_medicine_stock',
                        'page_title' => 'delete medstock account',
                        'module_id' => '3',
                        'link_icon' => '',
                        'order' => '505',
                        'table_name' => 'medicine-stocks',
                        'func_action' => 'delete',
                        'func_type' => 3,
                        'allowed_roles' => "[1]",
                        'status' => 'a',
                        'created_at' => date('Y-m-d H:i:s')
                    ]
                ];
                //print_r($data); die();
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}

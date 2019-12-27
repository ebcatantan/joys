<?php namespace App\Database\Migrations;

class CreateSupplies extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'supply_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],

                        'description'       => [
                                'type'           => 'TEXT',
                        ],

                        'unit_of_measure'       => [
                          'type'           => 'VARCHAR',
                          'constraint'     => '255',
                        ],

                        'item_per_unit'       => [
                          'type'           => 'INT',
                          'constraint'     => '11',
                        ],
                        
                        'unit_on_stocks'       => [
                          'type'           => 'INT',
                          'constraint'     => '11',
                        ],

                        'reorder_level'       => [
                          'type'           => 'INT',
                          'constraint'     => '11',
                        ],

                        'status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'a'
                        ],

                        'created_at' => [
                                'type'           => 'DATETIME',
                                'comment'        => 'Date of creation',
                        ],

                        'updated_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date last updated',
                        ],
                        'deleted_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date of soft deletion',
                        ]
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('supplies');
        }

        public function down()
        {
                $this->forge->dropTable('supplies');
        }
}

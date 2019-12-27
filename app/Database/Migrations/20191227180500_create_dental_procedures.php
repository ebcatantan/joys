<?php namespace App\Database\Migrations;

class CreateDentalProcedures extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'procedure_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'description'       => [
                                'type'           => 'TEXT'
                        ],

                        'price'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
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
                $this->forge->createTable('dental_procedures');
        }

        public function down()
        {
                $this->forge->dropTable('dental_procedures');
        }
}

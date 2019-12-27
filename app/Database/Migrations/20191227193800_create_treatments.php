<?php namespace App\Database\Migrations;

class CreateTreatments extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'consultation_id'       => [
                              'type'           => 'BIGINT',
                              'constraint'     => '20'
                        ],

                        'dentist_id'       => [
                              'type'           => 'BIGINT',
                              'constraint'     => '20'
                        ],

                        'procedute_date'       => [
                                'type'           => 'DATETIME'
                        ],

                        'tooth_nos'       => [
                                'type'           => 'JSON',
                                'comment'       => 'tooth nos which are given a procedure'
                        ],

                        'procedure_done'       => [
                                'type'           => 'JSON',
                                'comment'       => 'dental procedure id of the procedures done for the tooth or teeth'
                        ],

                        'amount_charged'       => [
                                'type'           => 'JSON',
                                'comment'       => 'dental procedure id of the procedures done for the tooth or teeth'
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
                $this->forge->createTable('treatments');
        }

        public function down()
        {
                $this->forge->dropTable('treatments');
        }
}

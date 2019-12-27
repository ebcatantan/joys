<?php namespace App\Database\Migrations;

class CreatePayments extends \CodeIgniter\Database\Migration {

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

                        'payment_date'       => [
                                'type'           => 'DATETIME'
                        ],

                        'paid_amount'       => [
                                'type'           => 'DOUBLE'
                        ],

                        'recieved_by'       => [
                                'type'           => 'BIGINT',
                                'constraint'    => '20',
                                'comment'       => 'user id of the payment reciepient'
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
                $this->forge->createTable('payments');
        }

        public function down()
        {
                $this->forge->dropTable('payments');
        }
}

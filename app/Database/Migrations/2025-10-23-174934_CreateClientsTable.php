<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClientsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [ // Nombre del cliente
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'lastname' => [ // Apellido del cliente
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'dni' => [ // DNI
                'type'       => 'VARCHAR',
                'constraint' => '8',
                'null'       => true,
            ],
            'address' => [ // Dirección
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'phone' => [ // Teléfono
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique'     => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ci_clients');
    }

    public function down()
    {
        $this->forge->dropTable('ci_clients');
    }
}

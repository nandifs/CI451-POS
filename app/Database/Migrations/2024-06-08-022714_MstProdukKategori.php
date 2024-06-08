<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MstProdukKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'kategori'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mst_produk_kategori');
    }

    public function down()
    {
        $this->forge->dropTable('mst_produk_kategori');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $table = 'skill';
    public function up()
    {
        $sql = 'create table '.$this->table.' (
            id bigint auto_increment primary key,
            nome_skill varchar(100),
            categoria enum("backend", "frontend", "cloud",
                "infraestrutura", "redes", "design", "suporte",
                "mobile", "servidores", "hardware", "pentest",
                "machine learning", "big data", "metodologias ageis")
        )engine=innodb charset=utf8mb4';
        DB::select($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::select('drop table if exists '. $this->table);
    }
};

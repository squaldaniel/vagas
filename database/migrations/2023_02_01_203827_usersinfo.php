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
    public $table = 'users_info';
    public function up()
    {
        $sql = 'create table '.$this->table.'(
            id bigint auto_increment primary key,
            user_id bigint references users(id),
            fullname varchar(100),
            cep varchar(9)
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
        DB::select('drop table ' . $this->table);
    }
};

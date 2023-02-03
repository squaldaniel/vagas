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
    public $table = 'users';
    public function up()
    {
        $sql = 'create table ' . $this->table .'(
            id bigint auto_increment primary key,
            email varchar(100) unique not null,
            snhpwd text,
            active boolean default false,
            created_in datetime default CURRENT_TIMESTAMP,
            deleted_in datetime default CURRENT_TIMESTAMP
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
        DB::select('drop table if exists '.$this->table);
    }
};

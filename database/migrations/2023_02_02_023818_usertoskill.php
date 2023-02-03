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
    public $table = 'user_to_skill';
    public function up()
    {
        $sql = 'create table '.$this->table.' (
            id bigint auto_increment primary key,
            useremail bigint references users(id),
            skill bigint references skill(id),
            user_level enum ("estagiario", "junior", "pleno", "senior"),
            unique(useremail, skill, user_level)
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

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
    public $view = 'user_habil';
    public function up()
    {
       $sql = 'create view '.$this->view.' as
       select 
           a.email,
           c.nome_skill,
           b.user_level
       from
           users a
           inner join user_to_skill b on a.id=b.useremail
           inner join skill c on b.skill=c.id';
           DB::select($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::select('drop view if exists '. $this->view);
    }
};

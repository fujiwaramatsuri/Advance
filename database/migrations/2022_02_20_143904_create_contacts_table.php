<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->biginteger('id',20);
            $table->string('fullname');
            $table->tinyInteger('gender')->unsigned()->comment('性別 1:男、2:女');
            $table->string('email');
            // varcherがNGの場合stringで
            $table->char('postcode',8);
            $table->string('address');
            $table->string('building_name');
            $table->text('opinion');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}

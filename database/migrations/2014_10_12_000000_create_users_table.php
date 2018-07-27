<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nombreCompleto');
            $table->string('residencia',500);
            $table->integer('telefono');
            $table->softDeletes();
            $table->integer('tipo_usuario_id')->unsigned();
            $table->timestamps();
            $table->foreign('tipo_usuario_id')->
            references('id')->
            on('tipo_usuarios')->onDelete('cascade');
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('usuarios_tipoUsuario_id_foreign');

            $table->dropColumn('tipo_usuarios_id');

        });*/
        Schema::dropIfExists('users');
    }
}

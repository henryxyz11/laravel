<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\DepartemenUser;

class CreateDepartemenUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departemen_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('departemen_id');
            $table->foreign('departemen_id')->references('id')->on('departemen')->onDelete('cascade');
            $table->String('Keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departemen_user');
    //     Schema::table('departemen_user', function (Blueprint $table) {
    //         $table->dropForeign(['user_id']);
    //         $table->dropColumn('user_id');
    //         $table->dropForeign(['departemen_id']);
    //         $table->dropColumn('departemen_id');
    //     });
    }
}

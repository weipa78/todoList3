<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->string('registryDate', 255);
            $table->string('completionDate', 255);
            $table->string('content', 255);
            $table->string('priority', 255);
            $table->string('status', 255);
            $table->timestamps();
        });
    }
    /**
     * マイグレーションが使用するデータベース接続
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
};

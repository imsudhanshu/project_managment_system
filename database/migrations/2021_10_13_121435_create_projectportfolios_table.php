<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectportfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectportfolios', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id')->references('id')->on('projects');
            $table->integer('portfolio_id')->references('id')->on('portfolios');
            $table->string('project_details');
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
        Schema::dropIfExists('projectportfolios');
    }
}

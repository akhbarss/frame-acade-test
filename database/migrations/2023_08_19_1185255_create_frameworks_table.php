<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('frameworks', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("keyFrameworks")->unique();
            $table->enum("frameworkType",["BACKEND","FRONTEND"]);
            $table->date("courseEndDate")->default(null);

            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); //relasi framework ke user itu many to 
            $table->timestamps();

            /**
             * frameworks berelasi one to many dengan course
             * frameworks berelasi many to one dengan framework
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frameworks');
    }
};

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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('empname');
            $table->string('age');
            $table->string('location');
            $table->string('email');
            $table->string('skills');
            $table->string('telephone');
            $table->string('files');
            $table->timestamps();
        });

        ['empname', 'age', 'location', 'email', 'skills', 'files', 'telephone'];
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};

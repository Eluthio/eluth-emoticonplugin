<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

if (!Schema::hasTable('custom_emotes')) {
    Schema::create('custom_emotes', function (Blueprint $table) {
        $table->id();
        $table->string('name', 32)->unique(); // alphanumeric/underscore/hyphen, used as :name:
        $table->string('filename');
        $table->boolean('animated')->default(false);
        $table->timestamps();
    });
}

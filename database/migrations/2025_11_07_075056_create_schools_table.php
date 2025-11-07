<?php

use function;

public function up()
{
    Schema::create('schools', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('code')->nullable()->unique();
        $table->string('email')->nullable();
        $table->string('phone')->nullable();
        $table->text('address')->nullable();
        $table->string('website')->nullable();
        $table->boolean('is_active')->default(true);
        $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
        $table->timestamps();
    });
}


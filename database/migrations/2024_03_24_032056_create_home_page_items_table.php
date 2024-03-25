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
        Schema::create('home_page_items', function (Blueprint $table) {
            $table->id();
            // banner section 
            $table->text('banner_title')->nullable();
            $table->text('banner_person_name');
            $table->text('banner_person_designation')->nullable();
            $table->text('banner_description')->nullable();
            $table->text('banner_button_url')->nullable();
            $table->text('banner_button_text')->nullable();
            $table->text('banner_photo');

            // about section
            $table->text('about_subtitle')->nullable();
            $table->text('about_title')->nullable();
            $table->text('about_description')->nullable();
            $table->text('about_person_name')->nullable();
            $table->text('about_person_phone')->nullable();
            $table->text('about_person_email')->nullable();
            $table->text('about_icon1')->nullable();
            $table->text('about_icon1_url')->nullable();
            $table->text('about_icon2')->nullable();
            $table->text('about_icon2_url')->nullable();
            $table->text('about_icon3')->nullable();
            $table->text('about_icon3_url')->nullable();
            $table->text('about_icon4')->nullable();
            $table->text('about_icon4_url')->nullable();
            $table->text('about_icon5')->nullable();
            $table->text('about_icon5_url')->nullable();
            $table->text('about_photo');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_items');
    }
};

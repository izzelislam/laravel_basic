<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenrsamaanTableUsers extends Migration
{
    
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->timestamp('email_verified_at')->nullable();
        });
    }

  
    public function down()
    {
        
    }
}

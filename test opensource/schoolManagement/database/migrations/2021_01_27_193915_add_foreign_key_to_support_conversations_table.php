<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToSupportConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('support_conversations', function (Blueprint $table) {
        //     $table->foreign('support_id')->on('supports')->references('id')->onDelete('cascade');
        //     $table->foreign('sender_id')->on('users')->references('id')->onDelete('cascade');
        // });
    }
      /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('become_instructors.support_id');
        Schema::dropIfExists('become_instructors.sender_id');
    }
}

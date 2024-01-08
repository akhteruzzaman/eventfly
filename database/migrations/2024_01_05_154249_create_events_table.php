<?php

// database/migrations/{timestamp}_create_events_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('shop_id');
            $table->string('event_title');
            $table->string('event_type');
            $table->text('event_details');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('priority');
            $table->string('discount_code');           
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}

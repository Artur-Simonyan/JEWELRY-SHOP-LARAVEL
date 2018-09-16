<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEarringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create ( 'earrings' , function ( Blueprint $table ) {
            $table->increments ( 'earring_id' );
            $table->string ( 'earring_name' , 169 );
            $table->string ( 'earring_price' , 169 );
            $table->integer ( 'check' );
            $table->text ( 'description' );
            $table->timestamps ();
        } );
        DB::table('earrings')->insert(
            array(
                'earring_name' => 'test',
                'earring_price' => 'test',
                'check'=>1,
                'description'=>'test'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists ( 'earrings' );
    }
}

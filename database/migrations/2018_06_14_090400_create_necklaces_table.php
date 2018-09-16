<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNecklacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create ( 'necklaces' , function ( Blueprint $table ) {
            $table->increments ( 'necklace_id' );
            $table->string ( 'necklace_name' , 169 );
            $table->string ( 'necklace_price' , 169 );
            $table->integer ( 'check' );
            $table->text ( 'description' );
            $table->timestamps ();
        } );
        DB::table('necklaces')->insert(
            array(
                'necklace_name' => 'test',
                'necklace_price' => 'test',
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
        Schema::dropIfExists ( 'necklaces' );
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        date_default_timezone_set('America/Mexico_City');
        $hoy = date("Y-m-d H:i:s");
        /*
    	DB::insert('insert into plan (plan_desc,plan_idest,plan_fechalt) values(:plan_desc,:plan_idest,:plan_fechalt)',
    		[
    			'plan_desc'=> 'TLAPAN',
    			'plan_idest'=>1,
    			'plan_fechalt'=>$hoy
    		]);
    	DB::insert('insert into plan (plan_desc,plan_idest,plan_fechalt) values(:plan_desc,:plan_idest,:plan_fechalt)',
    		[
    			'plan_desc'=> 'COAPA',
    			'plan_idest'=>1,
    			'plan_fechalt'=>$hoy
    		]);
    	DB::insert('insert into plan (plan_desc,plan_idest,plan_fechalt) values(:plan_desc,:plan_idest,:plan_fechalt)',
    		[
    			'plan_desc'=> 'SUR',
    			'plan_idest'=>1,
    			'plan_fechalt'=>$hoy
    		]);
        */
    	/*
    	$plan_idest = DB::select('select IdEst from est where Est_UsuDesc = ?',['ACTIVO']);
    	//dd($plan_idest);

        DB::table('plan')->insert([
        	'plan_desc'=>'TLALPAN',
        	'plan_idest'=>$plan_idest[0]->IdEst,
        	'plan_fechalt'=>$hoy
        ]);
        DB::table('plan')->insert([
        	'plan_desc'=>'COAPA',
        	'plan_idest'=>$plan_idest[0]->IdEst,
        	'plan_fechalt'=>$hoy
        ]);
        DB::table('plan')->insert([
        	'plan_desc'=>'SUR',
        	'plan_idest'=>$plan_idest[0]->IdEst,
        	'plan_fechalt'=>$hoy
        ]);
		*/
		//$plan_idest = DB::select('select IdEst from est where Est_UsuDesc = ?',['ACTIVO']);
    	//dd($plan_idest);

        /*
        $plan_idest = DB::table('est')->select('IdEst')->take(1)->get();
        //dd($plan_idest->first()->IdEst);

        DB::table('plan')->insert([
        	'plan_desc'=>'TLALPAN',
        	'plan_idest'=>$plan_idest->first()->IdEst,
        	'plan_fechalt'=>$hoy
        ]);
        DB::table('plan')->insert([
        	'plan_desc'=>'COAPA',
        	'plan_idest'=>$plan_idest->first()->IdEst,
        	'plan_fechalt'=>$hoy
        ]);
        DB::table('plan')->insert([
        	'plan_desc'=>'SUR',
        	'plan_idest'=>$plan_idest->first()->IdEst,
        	'plan_fechalt'=>$hoy
        ]);
        */
        /*
        //$plan_idest = DB::table('est')->select('IdEst')->first();
        //dd($plan_idest->first()->IdEst);
        //$plan_idest = DB::table('est')->select('IdEst')->where('Est_UsuDesc','=','ACTIVO')->first();
        //$plan_idest = DB::table('est')->where('Est_UsuDesc','=','ACTIVO')->first();
        //$plan_idest = DB::table('est')->where('Est_UsuDesc','ACTIVO')->first();


        $plan_idest = DB::table('est')->where(['Est_UsuDesc'=>'ACTIVO'])->first();
        dd($plan_idest);
        DB::table('plan')->insert([
        	'plan_desc'=>'TLALPAN',
        	'plan_idest'=>$plan_idest->IdEst,
        	'plan_fechalt'=>$hoy
        ]);
        DB::table('plan')->insert([
        	'plan_desc'=>'COAPA',
        	'plan_idest'=>$plan_idest->IdEst,
        	'plan_fechalt'=>$hoy
        ]);
        DB::table('plan')->insert([
        	'plan_desc'=>'SUR',
        	'plan_idest'=>$plan_idest->IdEst,
        	'plan_fechalt'=>$hoy
        ]);
        */
        /*
        $plan_idest = DB::table('est')
        			->where('Est_UsuDesc','ACTIVO')
        			->value('IdEst');
        //dd($plan_idest);
        DB::table('plan')->insert([
        	'plan_desc'=>'TLALPAN',
        	'plan_idest'=>$plan_idest,
        	'plan_fechalt'=>$hoy
        ]);
        DB::table('plan')->insert([
        	'plan_desc'=>'COAPA',
        	'plan_idest'=>$plan_idest,
        	'plan_fechalt'=>$hoy
        ]);
        DB::table('plan')->insert([
        	'plan_desc'=>'SUR',
        	'plan_idest'=>$plan_idest,
        	'plan_fechalt'=>$hoy
        ]);
        */
        /*Tambien se puede de la siguiente manera pero en este caso marca error por que e nombre del campo tiene un _
		$plan_idest = DB::table('est')
        			->whereEst_UsuDesc('ACTIVO')
        			->value('IdEst');

        */

        //dd($plan_idest);
        DB::table('plan')->insert([
        	'plan_desc'=>'TLALPAN',
        	'plan_idest'=>DB::table('est')->where('Est_UsuDesc','ACTIVO')->value('IdEst'),
        	'plan_fechalt'=>$hoy,
            'plan_fechbaj'=>$hoy
        ]);
        DB::table('plan')->insert([
        	'plan_desc'=>'COAPA',
        	'plan_idest'=>DB::table('est')->where('Est_UsuDesc','ACTIVO')->value('IdEst'),
        	'plan_fechalt'=>$hoy,
            'plan_fechbaj'=>$hoy
        ]);
        DB::table('plan')->insert([
        	'plan_desc'=>'SUR',
        	'plan_idest'=>DB::table('est')->where('Est_UsuDesc','ACTIVO')->value('IdEst'),
        	'plan_fechalt'=>$hoy,
            'plan_fechbaj'=>$hoy
        ]);
    }
}

<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

use App\Models\Ejemplo;
use Illuminate\Http\Request;

class EjemploJob implements ShouldQueue
{
    use Queueable;
    public  string $mensaje;
    
    /**
     * Create a new job instance.
     */
    public function __construct(string $mensaje)
    {
        $this->mensaje = $mensaje;
        
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $save=new Ejemplo ;
        $save->mensaje=$this->mensaje;
        $save->estado=0;
        $save->fecha=date("Y-m-d H:i:s");
        $save->save();  
    }
}

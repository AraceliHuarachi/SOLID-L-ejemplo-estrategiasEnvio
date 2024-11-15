<?php

namespace App\Console;

use Illuminate\Console\Command;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\ShippingTest;  // Asegúrate de agregar la ruta correcta
use Illuminate\Console\Scheduling\Schedule;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        ShippingTest::class,  // Registrar el comando aquí
    ];

    protected function schedule(Schedule $schedule)
    {
        // Aquí puedes agendar tareas
    }
}

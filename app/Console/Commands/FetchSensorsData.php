<?php

namespace App\Console\Commands;

use App\Models\Sensor;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchSensorsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-sensors-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Busca dados dos Sensores e salva no banco';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
        $route = env('ESP32_IP') . '/sensors';
        $response = Http::get($route);

        if ($response->successful()) {
            $dados = $response->json();

            $sensor = Sensor::create($dados);

            $this->info('Dados salvos com sucesso!');
        } else {
            $this->error('Falha ao acessar API');
        }
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SampleClass extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name {--sample}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sample = $this->option("sample");
        $this->info($sample);
    }
}

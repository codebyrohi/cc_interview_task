<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:test {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $className = "App\\InterviewTests\\$name"; 

        if (class_exists($className)) {
            $this->info("{$name} is running...\n\n");
            $cronJob = new $className(); // Instantiate the class
            $cronJob->handle(); // Call the execute method
        } else {
            return $this->error("\n\n$name not found.");
        }

        $this->info("{$name} has been completed");
    }
}

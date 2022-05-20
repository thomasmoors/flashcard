<?php

namespace App\Console\Commands\Flashcard;

use Illuminate\Console\Command;

class CreateFlashcard extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flashcard:create {--internal}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a flashcard';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $a = $this->ask('asdas');
        $this->info($a);
    }
}

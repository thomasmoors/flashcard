<?php

namespace App\Console\Commands\Flashcard;

use Illuminate\Console\Command;

class ResetFlashcardProgress extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flashcard:reset {--internal}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset progress';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}

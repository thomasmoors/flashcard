<?php

namespace App\Console\Commands\Flashcard;

use Illuminate\Console\Command;

class ShowFlashcardStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flashcard:stats {--internal}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show amount of questions, % of answered questions and % of correctly answered questions';

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

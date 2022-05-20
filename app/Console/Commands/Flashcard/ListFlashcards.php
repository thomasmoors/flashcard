<?php

namespace App\Console\Commands\Flashcard;

use Illuminate\Console\Command;

class ListFlashcards extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flashcard:list {--internal}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all flashcards';

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

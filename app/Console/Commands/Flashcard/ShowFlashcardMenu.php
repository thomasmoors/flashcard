<?php

namespace App\Console\Commands\Flashcard;

use Illuminate\Console\Command;

class ShowFlashcardMenu extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flashcard:interactive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show an interactive menu for the flashcards';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $menuChoices = [
            1 => 'Create a flashcard',
            2 => 'List all flashcards',
            3 => 'Practice',
            4 => 'Stats',
            5 => 'Reset',
            6 => 'Exit',
            '' => '', // hack to get the key as result of the choice instead of the value
        ];

        $choice = $this->choice('Flashcard menu', $menuChoices, 3);

        switch ((int) $choice) {
            case 1:
                $this->call('flashcard:create --internal');
                break;
            case 2:
                $this->call('flashcard:list --internal');
                break;
            case 3:
                $this->call('flashcard:practice --internal');
                break;
            case 4:
                $this->call('flashcard:stats --internal');
                break;
            case 5:
                $this->call('flashcard:reset --internal');
                break;
            case 6:
                return 0;
        }


    }
}

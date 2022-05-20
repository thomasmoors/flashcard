# Flashcard app made with Laravel + Artisan

The purpose of the exercise is to see how comfortable you are with a Laravel project.

## Deliverables
- A docker-compose file (you can use laravel sail)
- A readme file inside that repository with:
- How to run the project.
- Any justification you would like to include (other dependencies/database structure/etc).

## Time Limit
  The task should be simple enough, but we don’t have a time limit. The reason behind it is that we don’t
  want you to cut corners due to lack of time.

##  Task Description
  We want an interactive CLI program for Flashcard practice. For context: a flashcard is a spaced
  repetition tool for memorising questions and their respective answers.
  The command `php artisan flashcard:interactive` should present a main menu with the following
  actions:

###  1 . Create a flashcard
  The user will be prompted to give a flashcard question and the only answer to that question. The
  question and the answer should be stored in the database.

###  2 . List all flashcards
  A table listing all the created flashcard questions with the correct answer.

###  3 . Practice
  This is where a user will practice the flashcards that have been added.
  First, show the current progress: The user will be presented with a table listing all questions, and their
  practice status for each question: Not answered, Correct, Incorrect.
  As a table footer, we want to present the % of completion (all questions vs correctly answered).
  Then, the user will pick the question they want to practice. We should not allow answering questions that
  are already correct.
  Upon answering, store the answer in the DB and print correct/incorrect.
  Finally, show the first step again (the current progress) and allow the user to keep practicing until they
  explicitly decide to stop.
  
###  4 . Stats
  Display the following stats:
- The total amount of questions.
- % of questions that have an answer.
- % of questions that have a correct answer.
  
###  5 . Reset
  This command should erase all practice progress and allow a fresh start.
  
###  6 . Exit
  This option will conclude the interactive command.
  Note: The program should only exit by choosing the `Exit` option on the main menu (or killing the
  process)

## Notes
- Perform any validations you deem necessary.
- The project must be persisted in a SQL database.
- When we say “users”, we don’t actually mean that you should have a user model but keep the
  possibility of multiple users practicing in mind. All future users should be able to practice all
  flashcards.
- Optimized solutions are appreciated but clear and correct solutions are valued far more!
- Test!

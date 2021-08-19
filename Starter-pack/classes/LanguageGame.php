<?php

class LanguageGame
{
    private array $words;
    public Word $selectedWord;
    public string $message = " ";

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array
            $this->words[] = new Word($frenchTranslation, $englishTranslation);
        }
        var_dump('<pre>'. 'we got main array to work with===>');
        var_dump($this->words);
        var_dump("</pre>" ."=====================");

        var_dump('<pre>' ."%_POST===========>");
        var_dump($_POST);
        var_dump("</pre>" ."=====================");

        var_dump('<pre>' ."issetPost(submit)===========>");
        var_dump(isset($_POST['submit']));
        var_dump("</pre>" ."=====================");

        var_dump('<pre>' ."!empty(%_POST))=============>");
        var_dump(!empty($_POST));
        var_dump("</pre>" ."=====================");




    }

    public function run()
    {
        // TODO: check for option A or B
        $formSubmitted = !empty($_POST);
        if(!$formSubmitted){
            $this->prepareGame();

        }else{
            $this->handleUserGuess();
        }

        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate

        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TODO: generate a message for the user that can be shown

    }
    private function prepareGame(): void
    {
        $this->selectedWord = $this->randomWordGenerator();
        $_SESSION["selectedWord"] = serialize($this->selectedWord);
        var_dump( $_SESSION["selectedWord"]);
    }

    private function handleUserGuess()
    {
        $this->selectedWord = unserialize($_SESSION['selectedWord']);
        $result = $this->selectedWord->verify($_POST["userGuess"]);
        var_dump($result);
        if($result){
            $this->message = "Correct! It is " .$this->selectedWord->englishWord;
        } else{
            $this->message ="Your answer " .$_POST["userGuess"]. "is not right. It is" . $this->selectedWord->englishWord;
        }
    }

    private function randomWordGenerator(): Word
    {
        var_dump('<pre>' . '**********');
        var_dump(array_rand($this->words, 1));// Picks random keys from array
        var_dump('</pre>' . '**********');

        $randomInt = array_rand($this->words, 1);
        return $this->words[$randomInt];
    }
}
<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    public string $frenchWord;
    public string $englishWord;

    public function __construct(string $frenchWord,string $englishWord){
        $this->frenchWord = $frenchWord;
        $this->englishWord = $englishWord;
    }
    public function verify(string $userGuess): bool
    {
        // TODO: use this function to verify if the provided answer by the user matches the correct one

        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?

//        if($userGuess == $this->englishWord){
//            return  true;
//        } else{
//            return false;
//        }
        return ($userGuess == $this->englishWord);
    }
}
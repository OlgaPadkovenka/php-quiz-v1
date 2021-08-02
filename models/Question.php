<?php

class Question
{

    public ?int $id;
    public string $text;
    public string $answer1;
    public string $answer2;
    public string $answer3;
    public string $answer4;
    public ?int $rightAnswer;
    public ?int $rank;

    public function __construct(
        ?int $id = null,
        string $text = '',
        string $answer1 = '',
        string $answer2 = '',
        string $answer3 = '',
        string $answer4 = '',
        ?int $rightAnswer = null,
        ?int $rank = null
    ) {
        $this->id = $id;
        $this->text = $text;
        $this->answer1 = $answer1;
        $this->answer2 = $answer2;
        $this->answer3 = $answer3;
        $this->answer4 = $answer4;
        $this->rightAnswer = $rightAnswer;
        $this->rank = $rank;
    }
}

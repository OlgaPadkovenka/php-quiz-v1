<?php

class Question
{

    private ?int $id;
    private string $text;
    private string $answer1;
    private string $answer2;
    private string $answer3;
    private string $answer4;
    private ?int $rightAnswer;
    private ?int $rank;

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

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get the value of answer1
     */
    public function getAnswer1()
    {
        return $this->answer1;
    }

    /**
     * Get the value of answer2
     */
    public function getAnswer2()
    {
        return $this->answer2;
    }

    /**
     * Get the value of answer3
     */
    public function getAnswer3()
    {
        return $this->answer3;
    }

    /**
     * Get the value of answer4
     */
    public function getAnswer4()
    {
        return $this->answer4;
    }

    /**
     * Get the value of rightAnswer
     */
    public function getRightAnswer()
    {
        return $this->rightAnswer;
    }

    /**
     * Get the value of rank
     */
    public function getRank()
    {
        return $this->rank;
    }
}

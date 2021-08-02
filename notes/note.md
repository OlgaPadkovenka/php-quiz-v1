1. Je configura la connexion à la base de donées dans l'index.php.
<?php

$databaseHandler = new PDO('mysql:host=localhost;dbname=quizv1', 'root', 'root');
$statement = $databaseHandler->query('SELECT * FROM `question` ORDER BY `rank` LIMIT 1');
var_dump(
    $statement->fetchAll()
);
die();
?>

2. Je crée un dossier models et Question.php dedans.
3. Je crée un objet Question
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
}

4. Je cherche la premiqère question dans la base de données

<?php

$databaseHandler = new PDO('mysql:host=localhost;dbname=quizv1', 'root', 'root');
$statement = $databaseHandler->query('SELECT * FROM `question` ORDER BY `rank` LIMIT 1');

var_dump(
    $statement->fetch()
);
die();
?>

5. Je voudrais transformer un tableau question en objet Question.
$question = new Question(); Mais il est vide pour le moment.

6. Je fais le constructeur de la classe Question

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

7. J'inclus Question.php à index.php
 include './models/Question.php';
 
8. J'ajoute l'objet question à l'index.php.
Comme j'ai pas passé les paramètres à l'onjet Question, mon objet est vide.
($question = new Question();)

<?php

include './models/Question.php';

$databaseHandler = new PDO('mysql:host=localhost;dbname=quizv1', 'root', 'root');
$statement = $databaseHandler->query('SELECT * FROM `question` ORDER BY `rank` LIMIT 1');
$questionData = $statement->fetch();
$question = new Question();

var_dump($question);
?>

object(Question)#3 (8) { ["id"]=> NULL ["text"]=> string(0) "" ["answer1"]=> string(0) "" ["answer2"]=> string(0) "" ["answer3"]=> string(0) "" ["answer4"]=> string(0) "" ["rightAnswer"]=> NULL ["rank"]=> NULL }

9. Je passe les paramètres à l'objet Question dans l'index.php
$question = new Question(
    $questionData['id'],
    $questionData['text'],
    $questionData['answer1'],
    $questionData['answer2'],
    $questionData['answer3'],
    $questionData['answer4'],
    $questionData['right_answer'],
    $questionData['rank']
);

var_dump($question);

Question (object) [Object ID #3][8 properties]
id: (integer) 1 
text: (string) "Combien de joueurs y a-t-il dans une équipe de football?"
answer1: (string) "5"
answer2: (string) "7"
answer3: (string) "11"
answer4: (string) "235"
rightAnswer: (integer) 3 
rank: (integer) 1

10. J'affiche la question
 <p id="current-question-text" class="question-text"><?= $question->text ?></p>
 De la même manière, j'affiche des reponses:
  <label class="custom-control-label" for="answer1" id="answer1-caption"><?= $question->answer1 ?></label>

11. 

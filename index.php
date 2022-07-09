<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Задание по PHP</title>
    </head>
    <body bgcolor="#BC8F8F">
        <h1>Тест по русскому языку</h1>
        <form method="post"> 
        <ol>
            <li>
                <div class="question-container"> 
                    <div class="question-header">
                        <p>Куда ставится ударение в слове "обеспечение"</p>
                    </div>
                        <div class="question-answers">
                        <p><input type="radio" name="first-quest" value="1"/>обеспечЕние</p>
                        <p><input type="radio" name="first-quest" value="2"/>обеспЕчение</p>
                        <p><input type="radio" name="first-quest" value="3"/>обЕспечение</p>
                    </div>
                </div>
                <br/>
            </li>

            <li>
                <div class="question-container"> 
                    <div class="question-header">
                        <p>В каком слове на месте пропуска пишется буква Е?</p>
                    </div>
                    <div class="question-answers">
                        <p><input type="radio" name="second-quest" value="1"> расст...лать скатерть</p>
                        <p><input type="radio"  name="second-quest" value="2"> разб...ру вещи</p>
                        <p><input type="radio" name="second-quest" value="3"> проб...рался сквозь заросли</p>
                        <p><input type="radio"  name="second-quest" value="4"> выд...рать листы</p>
                    </div>
                </div>
                <br/>
            </li>

            <li>
                <div class="question-container"> 
                    <div class="question-header">
                        <p>Запишите корень слова "предложение"</p>
                    </div>
                    <div class="question-answers">
                        <input type="text" name="third-quest" value="">
                    </div>
                </div>
                <br>
            </li>

            <li>
                <div class="question-container"> 
                    <div class="question-header">
                        <p>Правильно расставлены знаки препинания в предлодении: "Его взгляд упал на сгрудившихся неподалёку странных типов, оживлённо шептавшихся, друг с другом."</p>
                    </div>
                    <div class="question-answers">
                        <p><input type="radio" name="fourth-quest" value="yes"> Да</p>
                    <p><input type="radio" name="fourth-quest" value="no"> Нет</p>
                    </div>
                </div>
                <br>
            </li>

            <li>
                <div class="question-container"> 
                    <div class="question-header">
                        <p>Какая группа лучшая?</p>
                    </div>
                    <div class="question-answers">
                        <p><input type="checkbox" name="fifth-quest-1" value="1"> ПИУ</p>
                        <p><input type="checkbox"  name="fifth-quest-2" value="2"> ПИКД</p>
                        <p><input type="checkbox" name="fifth-quest-3" value="3"> Прикладная информатика в управлении</p>
                        <p><input type="checkbox"  name="fifth-quest-4" value="4">Прикладная информатика в экономике</p>
                    </div>
                </div>
                <br/>
            </li>
        </ol>
        


        <div class="result">
            <button type="submit">Рузультат</button>
        </div>
        <?php
            $right = 0;
            $wrong = 0; 
            if ($_POST["first-quest"] == 1) {
                $right++;
            }
            if ($_POST["second-quest"] == 2) {
                $right++;
            }
            if ($_POST["third-quest"] == 'лож' || $_POST["third-quest"] == 'Лож') {
                $right++;
            }
            if ($_POST["fourth-quest"] == 'no') {
                $right++;
            }
            if ($_POST["fifth-quest-1"] == true && $_POST["fifth-quest-2"] == false && 
            $_POST["fifth-quest-3"] == true && $_POST["fifth-quest-4"] == false){
                $right++;
            }
            $wrong = 5 - $right; 
        ?>
        <p>Правильных ответов: <?php echo $right; ?></p>
        <p>Неправильных ответов: <?php echo $wrong; ?></p>
        <br>
        <br>
        <br>
    </body>
</html>
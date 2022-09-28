<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
    </head>

    <body>
        <!--All PHP scripts go between this tag -->
        <?php
            #Single statement array
            $students = array('Mitchell', 'Derron', 'Omarion', 'Ela', 'Jake', 'Alex', 'Rana', 'Rehman', 'Nour', 'Temi', 'Noman', 'Taylor', 'Elizabete', 'Roddick');

            $age = array('17', '17', '19', '17', '18', '17', '19', '19', '19', '18', '18', '18', '17', '17');

            $student_age = array('Mitchell' => 17, 'Derron' => 17, 'Omarion' => 19, 'Ela' => 17, 'Jake' => 18, 'Alex' => 17, 'Rana' => 19, 'Rehman' => 19, 'Nour' => 19, 'Temi' => 18, 'Noman' => 18, 'Taylor' => 18, 'Elizabete' => 17, 'Roddick' => 17);

            echo "<dl><dt>Original Order<dd>";
            foreach($student_age as $key => $value) {
                echo 'Name = ', $key.' | Age = '.$value;
                echo "<br>";
            }

            #Sorted by Name
            ksort($student_age);
            echo "<br><dt>Sorted by Name<dd>";
            foreach($student_age as $key => $value) {
                echo 'Name = ', $key. " | Age = " .$value;
                echo "<br>";
            }

        
            #Sorted by Age
            #asort($student_age);
            #echo "<dt>Sorted by Age<dd>";
            #foreach($student_age as $key => $value) {
            #    echo '&bull;', $key.' '.$value;
            #}
            
            asort($student_age);
            echo "<br><dt>Sorted by Age<dd>";
            foreach($student_age as $x => $x_value) {
            echo "Name = " . $x . " | Age = " . $x_value;
            echo "<br>";
            }

            $average = array_sum($age) / count($age);
            $average_rounded = ceil($average);

            echo "<br><br><dt>The Average Age is $average_rounded<dd>";

            asort($student_age);
            echo "<br><dt>Compared To My Age<dd>";
            foreach($student_age as $key => $value) {
                if ($value > 18) {
                    echo "<br><dt>$key Is Older Than You<dd>";
                }
                if ($value < 18) {
                    echo "<br><dt>$key Is Younger Than You<dd>";
                }
                if ($value == 18 and $value != "Temi") {
                    echo "<br><dt>$key Is The Same Age as you<dd>";
                }
            }

            

        ?>
    </body>
</html>
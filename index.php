<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();

        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        $third = new Student();
        $third->surname = "Lynn";
        $third->first_name = "Sheldon";
        $third->add_email('home','sheldon@sheldon.com');
        $third->add_email('work1','sheldon@bcit.ca');
        $third->add_email('work2','sheldon@harvard.edu');
        $third->add_grade(100);
        $third->add_grade(100);
        $third->add_grade(100);
        $students['a666'] = $third;

        ksort($students); // one of the many sort functions

        foreach($students as $student)
            echo $student->toString();

        ?>
    </body>
</html>
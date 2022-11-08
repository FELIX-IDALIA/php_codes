<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class example</title>
</head>
<body>
    <?php
        class Person

        {
            public $name = '';
            function name ($newname = NULL)
            {
                if (!is_null($newname)) {
                    $this->name = $newname;
                }
                return $this->name;
            }
        }
        $ed = new Person;
        $ed->name('Idalia');
        echo "Hello, {$ed->name}";
    ?>
    
</body>
</html>


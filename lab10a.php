<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Visitor counter</title>
        <style>
            body {
                font-family:Arial,sans-serif;
                text-align:center;margin-top:50px;
            }
            h1 {
                color:#333;
            }
            p {
                font-size:12em;
            }
        </style>
    </head>
    <body>
        <?php>
            $file='couter.txt';
            $count=file_exists($file)?(int)file_get_contents($file):0;
            file_put_contents($file,++$count);
            ?>
            <h1>visitor counter</h1>
            <p>number of visitor:<strong><?php echo $count;?></strong></p>
    </body>
</html>

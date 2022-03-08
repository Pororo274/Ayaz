<?php
    include('connect.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap" rel="stylesheet">
</head>
<body>

    <?php
        if(isset($_POST['add'])){
            $name = $_POST['name'];
            $date = $_POST['date'];
            $about = $_POST['about'];

            $query = "INSERT INTO news (name, text, date) 
                VALUE ('$name', '$about', '$date')";

            $link->query($query);

            echo '<script>document.location.href="?"</script>';
            echo "Добавлен";
        }
    ?>
    <div class="modal" id="modal">
        <div class="inner">
            <div class="content">
                <div class="zagol2">
                    <p class="zagol1">Добавление новости</p>
                    <a href="#" class="a2">ВЫХОД</a>
                </div>
                <div class="news2">
                    <form method="POST" class="forn" name="add">
                        <input type="text" placeholder="НАЗВАНИЕ НОВоСТИ" class="in1" name="name">
                        <input type="text" placeholder="Дата создания" class="in1" name="date">
                        <textarea name="about" cols="30" name="about" rows="10" class="t1" placeholder="Описание статьи"></textarea>
                        <button class="a2 a3" type="submit" name="add">ДОБАВИТЬ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="inner">
        <div class="news">
        <?php
            include('sm13.php');
        ?>
        <a href="#modal" class="a1">+</a>
    </div>
</body>
</html>
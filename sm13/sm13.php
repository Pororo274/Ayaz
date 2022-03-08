<?php
    $query = "SELECT * FROM news";
    $result = $link->query($query);
    while($stat=$result->fetch_assoc()){?>
    <div class="news1">
        <div class="n1"> 
            <p class="zagol"><?=$stat['name']?></p>
            <p class="date"><?=$stat['date']?></p>
        </div>
        <p class="text"><?=$stat['text']?></p>
        <a href="?m" class="a4">Подробнее</a>
    </div>
  <?php }?>
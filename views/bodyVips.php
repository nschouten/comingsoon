<div class="hero"><h2>Welcome Admin</h2></div>

<div class="vip">
    <div class="main">
        <h2>VIP Subscribers</h2>
        <div class="people">
        <?php
        foreach($this->oVips as $data)
        {
            ?> 
            <div class="person">
                <a href="index.php?controller=admin&action=vip&uID=<?=$data->id?>"><?=$data->strFullName?></a>
            </div>
        <?php 
        } 
        ?>
        </div>
    </div>
</div>
<div class="hero"><h2>Welcome Admin</h2></div>

<div class="vip">
    <div class="main">
        <?php
        foreach($this->oVip as $data)
        { ?>
            <?=$data->id?>
            <?=$data->strFullName?>
            <?=$data->strEmail?>
            <?=$data->strPhone?>
            <?=$data->strCountry?>
            <?=$data->intAge?>
        <?php 
        } 
        ?>
    </div>
</div>
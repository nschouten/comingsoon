<div class="hero"><h2>Welcome Admin</h2></div>

<div class="vip">
    <div class="main">
        <div class="handle">
            <h3>VIP Subscribers</h3>
            <div class="people">
            <?php
            foreach($this->oVips as $data)
            {
                ?> 
                <div class="person">
                    <a href="index.php?controller=admin&action=vip&uID=<?=$data->id?>"><?=$data->strFullName?><img src="imgs/profile.png" alt="profile icon"/></a>
                </div> <!--.person-->
            <?php 
            } 
            ?>
            </div> <!--.people-->
        </div> <!--.handle-->
    </div> <!--.main-->
</div>
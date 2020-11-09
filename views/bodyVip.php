<div class="hero"><h2>VIP Subscriber</h2></div>

<div class="vip subscriber">
    <div class="main">
        <div class="handle">
        <?php
        foreach($this->oVip as $data)
        { ?>
            <div class="row">
                <img src="<?=$data->strFileName?>" alt="profilepic"/>
            </div>
            <div class="row">
                <span class="title">Full Name:</span> <span class="info"><?=$data->strFullName?></span>
            </div>
            <div class="row">
                <span class="title">Email:</span> <span class="info"><?=$data->strEmail?></span>
            </div>
            <div class="row">
                <span class="title">Phone Number:</span> <span class="info"><?=$data->strPhone?></span>
            </div>
            <div class="row">
                <span class="title">Country:</span> <span class="info"><?=$data->strCountry?></span>
            </div>
            <div class="row">
               <span class="title">Age:</span> <span class="info"><?=$data->intAge?></span>
        </div>
        <?php 
        } 
        ?>
        </div>
    </div> <!--main-->
    <div class="Btn">
    <a id="backBtn" href="index.php?controller=admin&action=main">Back</a>
    </div>
</div> <!--subscriber-->
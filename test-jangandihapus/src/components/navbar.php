<div class="fixed bottom-0 left-0 z-50 w-full h-[5rem]" id="navbar">
    <div class="container max-w-[320px] sm:max-w-[639px] mx-auto">
        <div class="navbar-wrap">
            <button type="button" class="flex-col items-center justify-center px-5 py-2 group hidden md:block">
                <img src="../assets/images/hero/logo-detikcom-awards.png" class="w-[132px]" alt="">
            </button>
            <button id="nav-home" type="button" class="navbar-button font-normal" onclick="window.location.href='index.php';">
                <?php
                    if($home){
                        echo "<img src='../assets/images/navbar/icon-home-active.png' class='w-[24px] block md:hidden' alt=''>";
                    } else if($home == false){
                        echo "<img src='../assets/images/navbar/icon-home.png' class='w-[24px] block md:hidden' alt=''>";
                    }
                ?>
                <span class="navbar-menu-span font-['montserrat-medium']">Home</span>
            </button>
            <button id="nav-discovery" type="button" class="navbar-button font-normal" onclick="window.location.href='discover.php';">
                <?php
                    if($discover){
                        echo "<img src='../assets/images/navbar/icon-discovery-active.png' class='w-[24px] block md:hidden' alt=''>";
                    } else if($discover == false){
                        echo "<img src='../assets/images/navbar/icon-discovery.png' class='w-[24px] block md:hidden' alt=''>";
                    }
                ?>
                <span class="navbar-menu-span font-['montserrat-medium']">Discover</span>
            </button>
            <button id="nav-awardlist" type="button" class="navbar-button font-normal" onclick="window.location.href='award-list.php';">
                <?php
                    if($award_list){
                        echo "<img src='../assets/images/navbar/icon-award-active.png' class='w-[24px] block md:hidden' alt=''>";
                    } else if($award_list == false){
                        echo "<img src='../assets/images/navbar/icon-award.png' class='w-[24px] block md:hidden' alt=''>";
                    }
                ?>
                <span class="navbar-menu-span font-['montserrat-medium']">Award List</span>
            </button>
            <!-- <button id="nav-winners" type="button" class="navbar-button font-normal" onclick="window.location.href='winners.php';">
            <?php
                    if($award_list){
                        echo "<img src='../assets/images/navbar/icon-winners-active.png' class='w-[24px] block md:hidden' alt=''>";
                    } else if($award_list == false){
                        echo "<img src='../assets/images/navbar/icon-winners.png' class='w-[24px] block md:hidden' alt=''>";
                    }
                ?>
                <span class="navbar-menu-span">Winners</span>
            </button> -->
        </div>
    </div>
</div>
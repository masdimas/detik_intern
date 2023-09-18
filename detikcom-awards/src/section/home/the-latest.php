<div class="bg-[#050012]" id="the-latest">
    <div class="container w-full mx-auto md:pt-[80px] pb-[100px]">

        <div class="wrapper">
            <h4 class="font-['outfit-medium'] text-[16px] md:text-[24px] text-white text-center md:text-left">The Latest from<h4>
                    <!-- <h2 class="font-['broadsheet-ldo'] text-[24px] md:text-[48px] text-white text-center md:text-left leading-[26px] sm:leading-[58px] pb-[40px] md:pb-0 "><h2> -->
                    <div class="flex justify-center md:justify-start mb-[40px]">
                        <img class="w-[243px] md:w-[399px]" src="../assets/images/the-latest/logo-latest.png" alt="">
                    </div>
                            <div class="carousel">
                                <?php
                                for ($x = 0; $x < 12; $x++) {
                                    echo "
                                    <a href='{clickurl}' target='_blank'>
                        <div>
                        <div class='card'>
                            <div class='card-body'>
                            <img class='object-cover h-full rounded-[12px]' src='../assets/images/the-latest/thumb-1.png' class='w-[400px] md:w-[400px] mx-auto' alt=''>
                                
                                <div class='card-content flex'>
                                    <div class='wrap-content self-end'>
                                    <div class='card-title text-[24px] leading-[29px] text-white font-[broadsheet-ldo]'>Deretan Peraih Program Terpuji detikcom Awards 2023</div>
                                    <div class='card-text'>
                                        <p class='text-[16px] leading-[24px] text-white font-[outfit-regular]'>06/07/2023</p>
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </a>
                        ";
                                }
                                ?>

                            </div>
        </div>
        <div>
            <button type="button" class="w-full py-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-gradient-to-r from-[#e8da9400] via-[#FBFAB0] to-[#e8da9400] hover:from-[#c6ba7d00] hover:via-[#d1d08e] hover:to-[#c6ba7d00] text-[#050012]transition-all text-[14px]" onclick="window.location.href='discover.php';">
                See More
            </button>
        </div>
    </div>
</div>
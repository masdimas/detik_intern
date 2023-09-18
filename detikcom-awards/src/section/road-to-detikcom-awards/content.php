<div class="bg-[#050012]">
    <div class="container max-w-[344px] sm:max-w-[640px] md:max-w-[820px] lg:max-w-[1020px] mx-auto pt-[20px] pb-[10px]">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 grid items-center">
                <div class="w-full md:max-w-[320px] mx-auto bg-gradient-to-r from-[#323232] to-[#000000] rounded-[12px]">
                    <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                        <button type="button" class="hs-tab-active:bg-[#ffffff33] hs-tab-active:text-white hs-tab-active:font-semibold py-1 px-4 inline-flex items-center gap-2 bg-transparent text-[14px] font-semibold text-center text-gray-500 rounded-[12px] hover:text-[#80849f] dark:hover:text-gray-400 active w-1/3 justify-center" id="pills-with-brand-color-item-1" data-hs-tab="#pills-with-brand-color-1" aria-controls="pills-with-brand-color-1" role="tab">
                            News
                        </button>
                        <button type="button" class="hs-tab-active:bg-[#ffffff33] hs-tab-active:text-white hs-tab-active:font-semibold py-1 px-4 inline-flex items-center gap-2 bg-transparent text-[14px] font-semibold text-center text-gray-500 rounded-[12px] hover:text-[#80849f] dark:hover:text-gray-400 w-1/3 justify-center" id="pills-with-brand-color-item-2" data-hs-tab="#pills-with-brand-color-2" aria-controls="pills-with-brand-color-2" role="tab">
                            Photo
                        </button>
                        <button type="button" class="hs-tab-active:bg-[#ffffff33] hs-tab-active:text-white hs-tab-active:font-semibold py-1 px-4 inline-flex items-center gap-2 bg-transparent text-[14px] font-semibold text-center text-gray-500 rounded-[12px] hover:text-[#80849f] dark:hover:text-gray-400 w-1/3 justify-center" id="pills-with-brand-color-item-3" data-hs-tab="#pills-with-brand-color-3" aria-controls="pills-with-brand-color-3" role="tab">
                            Video
                        </button>
                    </nav>
                </div>


                <div class="mt-10">
                    <div id="pills-with-brand-color-1" role="tabpanel" aria-labelledby="pills-with-brand-color-item-1">
                        <div class="grid grid-cols-12 gap-4">

                            <?php
                            for ($x = 0; $x < 9; $x++) {
                                echo "
                                <div class='card-contents'>
                                <a href='{clickurl}'>
                                    <div class='wrap-contents'>
                                        <div class='h-[180px]'>
                                            <img class='img-contents' src='../assets/images/discover/content/thumbnail-1.png' alt='Image Description'>
                                        </div>
                                        <div class='p-4 md:p-5'>
                                        <div class='max-h-[80px]'>
                                        <p class='p-contents'>
                                        1 Sang Pahlawan Kaum Marjinal Raih Anugerah di detikJabar Awards Kaum Marjinal Raih Anugerah di detikJabar Awards
                                        </p>
                                    </div>
                                    <div>
                                        <p class='date-contents'>
                                            Rabu, 21 Jun 2023 07:45 WIB
                                        </p>
                                    </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            ";
                            } ?>


                        </div>
                    </div>
                    <div id="pills-with-brand-color-2" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-2">
                        <div class="grid grid-cols-12 gap-4">
                            <?php
                            for ($x = 0; $x < 9; $x++) {
                                echo "
                                <div class='card-contents'>
                                <a href='{clickurl}'>
                                    <div class='wrap-contents'>
                                        <div class='h-[180px]'>
                                            <img class='img-contents' src='../assets/images/discover/content/thumbnail-1.png' alt='Image Description'>
                                        </div>
                                        <div class='p-4 md:p-5'>
                                        <div class='max-h-[80px]'>
                                        <p class='p-contents'>
                                        2 Sang Pahlawan Kaum Marjinal Raih Anugerah di detikJabar Awards Kaum Marjinal Raih Anugerah di detikJabar Awards
                                        </p>
                                    </div>
                                    <div>
                                        <p class='date-contents'>
                                            Rabu, 21 Jun 2023 07:45 WIB
                                        </p>
                                    </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            ";
                            } ?>
                        </div>
                    </div>
                    <div id="pills-with-brand-color-3" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-3">
                        <div class="grid grid-cols-12 gap-4">
                            <?php
                            for ($x = 0; $x < 9; $x++) {
                                echo "
                                <div class='card-contents'>
                                <a href='{clickurl}'>
                                    <div class='wrap-contents'>
                                        <div class='h-[180px]'>
                                            <img class='img-contents' src='../assets/images/discover/content/thumbnail-1.png' alt='Image Description'>
                                        </div>
                                        <div class='p-4 md:p-5'>
                                        <div class='max-h-[80px]'>
                                        <p class='p-contents'>
                                        3 Sang Pahlawan Kaum Marjinal Raih Anugerah di detikJabar Awards Kaum Marjinal Raih Anugerah di detikJabar Awards
                                        </p>
                                    </div>
                                    <div>
                                        <p class='date-contents'>
                                            Rabu, 21 Jun 2023 07:45 WIB
                                        </p>
                                    </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            ";
                            } ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
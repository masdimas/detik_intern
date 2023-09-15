
<!-- Voted and Not logged in State -->
<div class="row  gap-sm-3 gap-2 w-100 justify-content-center">
            <div class="vote-miss-classy-card d-flex flex-column align-items-center col-6 ">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100 ">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Charlotte Brown</h4>
                        <span class="candidate-school">SMAN 1 Bandung</span>
                    </div>
                    <button 
                    class="vote-button rounded-pill mt-2 d-flex align-items-center justify-content-center gap-2 voted"
                    data-bs-toggle="modal" 
                    data-bs-target="#voteTimeout"
                            >
                        <img src="./assets/images/miss-classy/miss-classy-pic/voted-icon.svg" alt="V">
                        VOTED
                    </button>
                    <!-- Modal -->
                    <div class="modal fade " id="voteTimeout" tabindex="-1" aria-labelledby="voteTimeoutLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content p-3">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex flex-column justify-content-center align-items-center">
                                    <h3>Maaf Banget Ya..</h3>
                                    <img src="./assets/images/miss-classy/miss-classy-pic/30min-vote-timeout.svg" alt="" />
                                    <div class="modal-text-content d-flex flex-column align-items-center">
                                        <h5>Harap bersabar sebentar</h5>
                                        <span>Kamu dapat kembali untuk memberikan dukunganmu setelah 30 menit dari waktu voting terakhir.</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button 
                                    class="mx-auto modal-cta rounded-pill"
                                    data-bs-dismiss="modal"
                                    >
                                        OK
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="vote-miss-classy-card d-flex flex-column align-items-center col-6 ">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Ini sudah vote Mazzeh</h4>
                        <span class="candidate-school">SMAN 2 Bandung</span>
                    </div>
                    <button class="vote-button rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#notLoggedIn">VOTE</button>


                    <!-- Modal -->
                    <div class="modal fade " id="notLoggedIn" tabindex="-1" aria-labelledby="notLoggedInLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content p-3">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex flex-column justify-content-center align-items-center">
                                    <h3>Masuk dulu yuk!</h3>
                                    
                                    <img src="./assets/images/miss-classy/miss-classy-pic/skuy-login-logo.svg" alt="" />
                                    <div class="modal-text-content d-flex flex-column align-items-center">
                                        <h5>Kamu bisa memberi vote setelah masuk</h5>
                                        <span>Untuk melanjutkan aktivitas di Classy Yamaha Youth Festival, silahkan masuk dengan menggunakan akun MPC.</span>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button 
                                    class="mx-auto modal-cta rounded-pill"
                                    data-bs-dismiss="modal"
                                    >Masuk</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

                        
</div>


<!-- Confirm-Success State -->
<div class="row  gap-sm-3 gap-2 w-100 justify-content-center">

            <div class="vote-miss-classy-card d-flex flex-column align-items-center col-6 ">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Konfirmasi Vote</h4>
                        <span class="candidate-school">SMAN 2 Bandung</span>
                    </div>
                    <button class="vote-button rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#confirmVote">VOTE</button>


                    <!-- Modal -->
                    <div class="modal fade " id="confirmVote" tabindex="-1" aria-labelledby="confirmVoteLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content p-3">
                            <div class="modal-header">
                                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex flex-column justify-content-center align-items-center">
                                <h3>Dukung Sekolahmu</h3>
                                
                                <img src="./assets/images/miss-classy/miss-classy-pic/vote-confirmation.svg" alt="">
                                <div class="modal-text-content d-flex flex-column align-items-center">
                                    <h5>Yakin dengan Miss Classy Pilihanmu?</h5>
                                    <span>Kamu punya kuota 1x vote setiap 30 menit.</span>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="mx-auto modal-cta rounded-pill"   
                                data-bs-toggle="modal" 
                                data-bs-target="#afterVote"
                                >Ya, Vote Sekarang</button>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="modal fade " id="afterVote" tabindex="-1" aria-labelledby="afterVoteLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content p-3">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex flex-column justify-content-center align-items-center">
                                    <h3>Terima Kasih Ya..</h3>
                                    
                                    <img src="./assets/images/miss-classy/miss-classy-pic/thanks-for-the-vote.svg" alt="" />
                                    <div class="modal-text-content d-flex flex-column align-items-center">
                                        <h5>Kamu berhasil memberikan dukungan</h5>
                                        <span>Jangan lupa vote lagi dalam 30 menit kedepan biar jagoanmu bisa jadi nomor satu</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button 
                                    id="redirect-top-picks"
                                    class="mx-auto modal-cta rounded-pill" 
                                    data-bs-dismiss="modal"
                                    >Lihat Top Picks</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="vote-miss-classy-card d-flex flex-column align-items-center col-6 ">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Charlotte Brown</h4>
                        <span class="candidate-school">SMAN 1 Bandung</span>
                    </div>
                    <button class="vote-button rounded-pill mt-2">VOTE</button>
                </div>
            </div>
</div>

<!-- Not Login State -->


<!-- Vote Confirmation State -->
<div class="row  gap-sm-3 gap-2 w-100 justify-content-center">



            <div class="vote-miss-classy-card d-flex flex-column align-items-center col-6 ">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Charlotte Brown</h4>
                        <span class="candidate-school">SMAN 1 Bandung</span>
                    </div>
                    <button class="vote-button rounded-pill mt-2">VOTE</button>
                </div>
            </div>

            <div class="vote-miss-classy-card d-flex flex-column align-items-center col-6 ">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Charlotte Brown</h4>
                        <span class="candidate-school">SMAN 1 Bandung</span>
                    </div>
                    <button class="vote-button rounded-pill mt-2">VOTE</button>
                </div>
            </div>

                        
</div>

<!-- After Vote State -->
<div class="row  gap-sm-3 gap-2 w-100 justify-content-center">

            <div class="vote-miss-classy-card d-flex flex-column align-items-center col-6 ">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Charlotte Brown</h4>
                        <span class="candidate-school">SMAN 1 Bandung</span>
                    </div>
                    <button class="vote-button rounded-pill mt-2">VOTE</button>
                </div>
            </div>
            <div class="vote-miss-classy-card d-flex flex-column align-items-center col-6 ">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Charlotte Brown</h4>
                        <span class="candidate-school">SMAN 1 Bandung</span>
                    </div>
                    <button class="vote-button rounded-pill mt-2">VOTE</button>
                </div>
            </div>
                        
</div>


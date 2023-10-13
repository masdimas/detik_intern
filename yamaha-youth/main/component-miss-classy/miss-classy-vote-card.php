
<div class="row flex-wrap w-100 justify-content-start m-auto gy-sm-2 g-3">
    <div class="col-6">
        <div class="vote-miss-classy-card d-flex flex-column align-items-center">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100 p-2">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Sudah Vote</h4>
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
                    
                   
                </div>
            </div>
    </div>
    <div class="col-6">

        <div class="vote-miss-classy-card d-flex flex-column align-items-center">
            <div class="miss-classy-img-container mx-auto ">
                <img
                src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                alt=""
                />
            </div>
            <div class="w-100 p-2">
                <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                    <h4 class="candidate-name">Belum Login</h4>
                    <span class="candidate-school">SMAN 2 Bandung</span>
                </div>
                <button class="vote-button rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#notLoggedIn">VOTE</button>
            </div>
        </div>
    </div>
    <div class="col-6">
            <div class="vote-miss-classy-card d-flex flex-column align-items-center">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100 p-2">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Belum Login</h4>
                        <span class="candidate-school">SMAN 2 Bandung</span>
                    </div>
                    <button class="vote-button rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#notLoggedIn">VOTE</button>


                    
                </div>
            </div>
    </div>
    <div class="col-6">
            <div class="vote-miss-classy-card d-flex flex-column align-items-center">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100 p-2">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Konfirmasi Vote</h4>
                        <span class="candidate-school">SMAN 2 Bandung</span>
                    </div>
                    <button class="vote-button rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#confirmVote">VOTE</button>
                </div>
            </div> 
    </div>
    <div class="col-6">
            <div class="vote-miss-classy-card d-flex flex-column align-items-center">
                <div class="miss-classy-img-container mx-auto ">
                    <img
                    src="./assets/images/miss-classy/miss-classy-pic/miss-classy-1.jpg"
                    alt=""
                    />
                </div>
                <div class="w-100 p-2">
                    <div class="d-flex flex-column align-items-center gap-1 mt-2 finalist-identity">
                        <h4 class="candidate-name">Vote Error</h4>
                        <span class="candidate-school">SMAN 1 Bandung</span>
                    </div>
                    <button class="vote-button rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#voteError">VOTE</button>
                </div>
            </div>
    </div>
                   
</div>


<!-- Modal Error Vote-->
<div class="modal fade " id="voteError" tabindex="-1" aria-labelledby="voteErrorLabel" aria-hidden="true">
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
                    <h5>Terjadi kesalahan dalam sistem voting kami</h5>
                    <span>Kamu bisa coba lagi nanti ya. Terima kasih atas kesabaran dan pengertian kamu</span>
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

<!-- Modal Sudah Vote-->
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

<!-- Modal Belum Login -->
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

<!-- Modal Konfirmasi Vote -->
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
                    <h5>Yakin memilih [Nama Finalis] sebagai Miss Classy Pilihanmu?</h5>
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
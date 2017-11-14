<body>
    <div class="container text-center">
        <?php include "content/templates/navbar.php"; ?>

        <section id="lead">
            <div class="inner">
            <img src="assets/img/kompas-logo.png" alt="">
                <h1>KOMPAS</h1>
                <h4>Kompetisi Olimpiade Mata Pelajaran Antar Sekolah</h4>
                <p class="lead">
                    KOMPAS merupakan acara tahunan KIRSmartCyber yang diselenggarakan untuk siswa SMP/SMA/Sederajat untuk memfasilitasi kegiatan
                    olimpiade mata pelajaran dan eksplorasi ilmu pengetahuan.
                </p>
                <p class="lead">
                    Stay tuned di Instagram KIRSmartCyber ya! <i class="fa fa-instagram"></i><strong>kirsmartcyber47</strong>.
                </p>
            </div>
        </section>

        <section id="countdown">
            <?php 
                if (KOMPAS_COUNTDOWN == true) { 
                    include "content/templates/countdown.php"; 
                }
                if (KOMPAS_COMING_SOON == true) { 
                    echo '<p class="display-3">Coming Soon!</p>';
                }
            ?>
        </section>

        <section id="timeline">
            <h2>Timeline</h2>
            <br/>
            <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-wrap">
                            <i class="fa fa-check"></i>
                            <h5>Announcing KOMPAS SEASON 4</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-wrap">
                            <i class="fa fa-hourglass-1"></i>
                            <h5>Pendaftaran KOMPAS SEASON 4</h5>
                            <p>1 November s.d. 3 Desember 2017</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature-wrap">
                            <i class="fa fa-compass"></i>
                            <h5>KOMPAS SEASON 4</h5>
                            <p>20 Desember 2017</p>
                        </div>
                    </div>
                </div>
            <br/>
        </section>

        <section id="mata-lomba">
            <h2>Mata Lomba</h2>
            <br/>

            <h3>Tingkat SMP</h3>
            <hr/>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-connectdevelop"></i>
                        <h4>Matematika</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-flask"></i>
                        <h4>Kimia</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-magnet"></i>
                        <h4>Fisika</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-leaf"></i>
                        <h4>Biologi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-laptop"></i>
                        <h4>TIK</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-language"></i>
                        <h4>English Competition</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-group"></i>
                        <h4>IPS</h4>
                    </div>
                </div>
            </div>

            <br/>
            <h3>Tingkat SMA</h3>
            <hr/>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-child"></i>
                        <h4>LCC</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-image"></i>
                        <h4>Poster</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-book"></i>
                        <h4>LKTI</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-comments"></i>
                        <h4>Debat</h4>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="feature-wrap">
                        <i class="fa fa-bullhorn"></i>
                        <h4>Speech Contest</h4>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <br/>
            <p class="lead">Untuk informasi mengenai petunjuk teknis, formulir, dan kontak, dapat dilihat pada bagian <strong>Unduhan</strong>.
            </p>
        </section>

        <?php include "content/templates/footer.php"; ?>
    </div>

    <?php include "content/templates/scripts.php"; ?>
</body>
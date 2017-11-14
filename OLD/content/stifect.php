<body>
    <div class="container text-center">
        <?php include "content/templates/navbar.php"; ?>

        <section id="lead">
            <div class="inner">
            <img src="assets/img/stifect-logo.png" alt="" >
                <h1>STIFECT</h1>
                <h4></h4>
                <p class="lead">
                <strong>Smanell Competition of Subjects</strong> adalah kompetisi olimpiade yang mirip dengan KOMPAS
                yang diadakan khusus untuk siswa dari SMA Negeri 1 Leuwiliang.
                </p>
            </div>
        </section>

        <section id="countdown">
            <?php 
                if (STIFECT_COUNTDOWN == true) { 
                    include "content/templates/countdown.php"; 
                }
                if (STIFECT_COMING_SOON == true) { 
                    echo '<p class="display-3">Coming Soon!</p>';
                }
            ?>
        </section>

        <br/>
        <br/>
        <p>Gunakan navbar untuk melakukan navigasi.</p>

        <?php include "content/templates/footer.php"; ?>
    </div>

    <?php include "content/templates/scripts.php"; ?>
</body>
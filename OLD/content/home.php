<body>
    <div class="container text-center">
        <?php include "content/templates/navbar.php"; ?>

        <section id="lead">
            <div class="inner">
            <img src="assets/img/kirsmartcyber-logo.png" alt="">
                <h1>KIRSmartCyber</h1>
                <p class="lead">Selamat datang di halaman daring ekstrakurikuler KIRSmartCyber<br/>SMA Negeri 1 Leuwiliang!</p>
            </div>
        </section>

        <section id="countdown">
            <?php 
                if (HOME_COUNTDOWN == true) { 
                    include "content/templates/countdown.php"; 
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
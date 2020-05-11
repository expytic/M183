    <footer>
    <?php
        $kontakt = "kontakt.php";
        if(basename(getcwd()) != 'pages') $kontakt = "pages/" . $kontakt;
        echo "<hr><a href=\"$kontakt\">Kontakt</a>";
    ?>

        <b><p>© 2020 Doppelklang / 03.2020 BigBand Doppelklang</p></b>
        <script src="js/bootstrap.min.js"></script>
    </footer>
</body>
</html>
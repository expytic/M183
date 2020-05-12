    <footer>
        <?php
            $kontakt = "kontakt.php";
            $bootstrapJs = "js/bootstrap.min.js";
            
            if(basename(getcwd()) != 'pages'){
                
                $kontakt = "pages/" . $kontakt;
            }else{
                $bootstrapJs = "../" . $bootstrapJs;
            }
            echo "<hr><a href=\"$kontakt\">Kontakt</a>";
            echo "<b><p>© 2020 Doppelklang / 03.2020 BigBand Doppelklang</p></b>";
            echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>";
            echo "<script src=\"$bootstrapJs\"></script>";
        ?>
    </footer>
</body>
</html>
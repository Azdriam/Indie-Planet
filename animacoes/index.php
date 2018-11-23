<!doctype html>
<?php
    include '../includes/matrix.php';
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php'; // Uso de $corredor no início dos links para voltar para a o diretorio principal do portal antes de prosseguir para o destino do arquivo
?>

<body class="<?php echo $pastaAtual; ?>">
    <header>
        <?php
                include $corredor.'includes/nav-top.php';
            ?>
        <?php
                    // aqui estarão os lang para dar tradução aos titulos
                    //shaun
                    $shaun=array();
                    $shaun['en']="Shaun the Sheep: Indie Childrens Success";
                    $shaun['es']="Shaun el carnero: éxito indie infantil";
                    $shaun['pt']="Shaun o carneiro: sucesso indie infantil";
                    //gorillaz pt2
                    $ptdois=array();
                    $ptdois['en']="The story of the gorillaz pt2: which way will it lead?";
                    $ptdois['es']="La historia del gorillaz es2: ¿qué camino te llevará?";
                    $ptdois['pt']="A história do gorillaz pt2: qual rumo levara?";
                    //tank girl
                    $tankg=array();
                    $tankg['en']="Tank Girl: All about the girl who lives in the war tank.";
                    $tankg['es']="Tank Girl: todo sobre la chica q vive en el tanque de guerra.";
                    $tankg['pt']="Tank Girl: tudo sobre a garota q vive no tank de guerra. ";
                    //jamie
                    $jamie=array();
                    $jamie['en']="History of Jamie Hewlett: one of the creators and designer gorillaz.";
                    $jamie['es']="Historia de jamie hewlett: uno de los creadores y diseñador gorillaz.";
                    $jamie['pt']="História de jamie hewlett : um dos criadores e desenhista gorillaz.";
                    //gorillaz pt1 
                    $ptum=array();
                    $ptum['en']="The gorillaz story pt1: the beginning.";
                    $ptum['es']="La historia del gorillaz es1: el comienzo.";
                    $ptum['pt']="A história do gorillaz pt1: o começo.";
                    //indie jogo
                    $indjogo=array();
                    $indjogo['en']="The success of indie animations in games";
                    $indjogo['es']="El éxito de las animaciones indie en juegos";
                    $indjogo['pt']="O sucesso das animações indie em jogos";
                    //sobrevivencia animadores
                    $sanimadores=array();
                    $sanimadores['en']="How do indie animators survive?";
                    $sanimadores['es']="¿Cómo sobreviven los animadores indie?";
                    $sanimadores['pt']="Como sobrevivem os animadores indie?";
                    //mudança de linguagem nas datas
                    
                    $dataum=array();
                    $dataum['es']="una hora atras";
                    $dataum['en']="one hour ago";
                    $dataum['pt']="uma hora atrás";
            
                    $datadois=array();
                    $datadois['es']="hace dos horas";
                    $datadois['en']="two hours ago";
                    $datadois['pt']="duas horas atrás";
            
                    $datatres=array();
                    $datatres['es']=" hace tres horas ";
                    $datatres['en']="three hours ago";
                    $datatres['pt']="três horas atrás";
            
                    $dataquatro=array();
                    $dataquatro['es']=" hace cuatro horas ";
                    $dataquatro['en']="four hours ago";
                    $dataquatro['pt']="quatro horas atrás";
            
                    $datacinco=array();
                    $datacinco['es']=" hace cinco horas ";
                    $datacinco['en']="five hours ago";
                    $datacinco['pt']="cinco horas atrás";
            
                    $dataseis=array();
                    $dataseis['es']="hace seis horas";
                    $dataseis['en']="six hours ago";
                    $dataseis['pt']="seis horas atrás";
            
                    $datasete=array();
                    $datasete['es']="hace siete horas";
                    $datasete['en']="seven hours ago";
                    $datasete['pt']="sete horas atrás";
        
                    //mudança da liinguagem das descrições
        
                    $descricaoum=array();
                    $descricaoum['es']="El diseño de shaun gana gran espacio en los cines con dos buenas películas, vea más.";
                    $descricaoum['en']="The shaun drawing gains big space in theaters with two good movies, see more.";
                    $descricaoum['pt']="O desenho de shaun ganha grande espaço nos cinemas com dois bons filmes, veja mais.";
        
                    $descricaodois=array();
                    $descricaodois['es']="Con el murdoc preso qué novedades están por venir ...";
                    $descricaodois['en']="With murdoc arrested what news are coming ...";
                    $descricaodois['pt']="Com o murdoc preso quais novidades estão por vir...";
        
                    $descricaotres=array();
                    $descricaotres['es']="Conocer más sobre las atrocidades de tank girl";
                    $descricaotres['en']="Learn more about tank girl atrocities.";
                    $descricaotres['pt']="Conheça mais sobre as atrocidades de tank girl.";
        
                    $descricaoquatro=array();
                    $descricaoquatro['es']="Ver la evolución del arte de Jamie";
                    $descricaoquatro['en']="See the evolution of Jamies art";
                    $descricaoquatro['pt']="Veja a evolução da arte de Jamie";
        
                    $descricaocinco=array();
                    $descricaocinco['es']="Conoce cómo se formó la banda gorillaz";
                    $descricaocinco['en']="Know how the band formed";
                    $descricaocinco['pt']="Conheça como se formou a banda gorillaz";
        
                    $descricaoseis=array();
                    $descricaoseis['es']="Conoce las animaciones de juegos como flinthook";
                    $descricaoseis['en']="Get to know the animations of games like flinthook";
                    $descricaoseis['pt']="Conheça as animações de jogos como flinthook";
        
                    $descricaosete=array();
                    $descricaosete['es']="Vea cómo los animadores viven a través de donates...";
                    $descricaosete['en']="See how animators live through donates";
                    $descricaosete['pt']="Veja como os animadores vivem atravez de donates...";
        
                
                   
        
            
                $slides=7; // Número de slides do carrossel
                $titles="$shaun[$lang]"// Títulos das postagens
                            ."||".
                            "$ptdois[$lang]"
                            ."||".
                            "$tankg[$lang] "
                            ."||".
                            "$jamie[$lang]"
                            ."||".
                            "$ptum[$lang]"
                            ."||".
                            "$indjogo[$lang]"
                            ."||".
                            "$sanimadores[$lang]";
                $texts="$descricaoum[$lang]"
                    ."||".
                    "$descricaodois[$lang]"
                    ."||".
                    "$descricaotres[$lang]"
                    ."||".
                    "$descricaoquatro[$lang]"
                    ."||".
                    "$descricaocinco[$lang]"
                    ."||".
                    "$descricaoseis[$lang]"
                    ."||".
                    "$descricaosete[$lang]"; // Descrições dos slides
                // Nomes dos arquivos de imagens dos slides
                        $images="../../img/content1.jpg"
                            ."||".
                            "../../img/content3.jpg"
                            ."||".
                            "../../img/content4.jpg"
                            ."||".
                            "../../img/content0.jpg"
                            ."||".
                             "../../img/content2.jpg"
                            ."||".
                            "carouselteste01.png"
                            ."||".
                            "carouselteste03.png";// Títulos dos slides
                $links="novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"; // Links dos destinos de cada slide, começando pela pasta da área referente
                $dates="$dataum[$lang]"
                    ."||".
                    "$datadois[$lang]"
                    ."||".
                    "$datatres[$lang]"
                    ."||".
                    "$dataquatro[$lang]"
                    ."||".
                    "$datacinco[$lang]"
                    ."||".
                    "$dataseis[$lang]"
                    ."||".
                    "$datasete[$lang]"; // Horário de cada postagem
                include $corredor.'includes/carousel.php';
            ?>
        <?php
                include $corredor.'includes/nav-mid.php';
            ?>
    </header>
    <div class="container mt-lg-5">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-7 feed">
                <?php
                        $newsNumber=7; // Número de postagens do feed
                        $highlight=4; // Cada postagem de número semelhante ao valor de $highlight é um destaque

                        $titles="$ptdois[$lang]"// Títulos das postagens
                            ."||".
                            "$tankg[$lang] "
                            ."||".
                            "$jamie[$lang]"
                            ."||".
                            "$shaun[$lang]"
                            ."||".
                            "$ptum[$lang]"
                            ."||".
                            "$indjogo[$lang]"
                            ."||".
                            "$sanimadores[$lang]";
                        $images="../../img/content3.jpg"
                            ."||".
                            "../../img/content4.jpg"
                            ."||".
                            "../../img/content0.jpg"
                            ."||".
                            "../../img/content1.jpg"
                            ."||".
                             "../../img/content2.jpg"
                            ."||".
                            "carouselteste01.png"
                            ."||".
                            "carouselteste03.png";
                        $links="novidades/post/index.php" // Links dos destinos de cada postagem
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php";
                         $dates="$dataum[$lang]"
                            ."||".
                            "$datadois[$lang]"
                             ."||".
                             "$datatres[$lang]"
                             ."||".
                             "$dataquatro[$lang]"
                             ."||".
                             "$datacinco[$lang]"
                             ."||".
                             "$dataseis[$lang]"
                             ."||".
                             "$datasete[$lang]"; // Horário de cada postagem
                        $areas=""; // Área de cada postagem
                        include $corredor.'includes/news.php';
                    ?>
            </div>
            <?php
                    include $corredor.'includes/aside.php';
                ?>
        </div>
    </div>
    <?php
            include $corredor.'includes/footer.php';
        ?>
</body>

</html>
=======
<!doctype html>
<?php
    include '../includes/matrix.php';
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php'; // Uso de $corredor no início dos links para voltar para a o diretorio principal do portal antes de prosseguir para o destino do arquivo
?>

    <body class="<?php echo $pastaAtual; ?>">
        <header>
            <?php
                include $corredor.'includes/nav-top.php';
            ?>
            <?php
                $slides=7; // Número de slides do carrossel
                $titles="Título da primeira postagem teste do carrossel"
                    ."||".
                    "Título da segunda postagem teste do carrossel"
                    ."||".
                    "Título da terceira postagem teste do carrossel"
                    ."||".
                    "Título da quarta postagem teste do carrossel"
                    ."||".
                    "Título da quinta postagem teste do carrossel"
                    ."||".
                    "Título da sexta postagem teste do carrossel"
                    ."||".
                    "Título da sétima postagem teste do carrossel"; // Títulos dos slides
                $texts="Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"; // Descrições dos slides
                $images="carouselteste01.png"
                    ."||".
                    "carouselteste02.png"
                    ."||".
                    "carouselteste03.png"
                    ."||".
                    "carouselteste02.png"
                    ."||".
                    "carouselteste01.png"
                    ."||".
                    "carouselteste02.png"
                    ."||".
                    "carouselteste03.png"; // Nomes dos arquivos de imagens dos slides
                $links="novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"
                    ."||".
                    "novidades/post/index.php"; // Links dos destinos de cada slide, começando pela pasta da área referente
                $dates="uma hora atrás"
                    ."||".
                    "duas horas atrás"
                    ."||".
                    "três horas atrás"
                    ."||".
                    "quatro horas atrás"
                    ."||".
                    "cinco horas atrás"
                    ."||".
                    "seis horas atrás"
                    ."||".
                    "sete horas atrás"; // Horário de cada postagem
                include $corredor.'includes/carousel.php';
            ?>
            <?php
                include $corredor.'includes/nav-mid.php';
            ?>
        </header>
        <div class="container mt-lg-5">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-7 feed">
                    <?php
                        $newsNumber=7; // Número de postagens do feed
                        $highlight=4; // Cada postagem de número semelhante ao valor de $highlight é um destaque
                        $titles="Título da primeira postagem do feed de notícias" // Títulos das postagens
                            ."||".
                            "Título da segunda postagem do feed de notícias"
                            ."||".
                            "Título da terceira postagem do feed de notícias"
                            ."||".
                            "Título da quarta postagem do feed de notícias"
                            ."||".
                            "Título da quinta postagem do feed de notícias"
                            ."||".
                            "Título da sexta postagem do feed de notícias"
                            ."||".
                            "Título da sétima postagem do feed de notícias";
                        $images="carouselteste01.png" // Nomes dos arquivos de imagens do feed
                            ."||".
                            "carouselteste02.png"
                            ."||".
                            "carouselteste03.png"
                            ."||".
                            "carouselteste01.png"
                            ."||".
                            "carouselteste02.png"
                            ."||".
                            "carouselteste03.png"
                            ."||".
                            "carouselteste01.png";
                        $links="novidades/post/index.php" // Links dos destinos de cada postagem
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php";
                        $dates="uma hora atrás" // Horários de cada postagem
                            ."||".
                            "duas horas atrás"
                            ."||".
                            "três horas atrás"
                            ."||".
                            "quatro horas atrás"
                            ."||".
                            "cinco horas atrás"
                            ."||".
                            "seis horas atrás"
                            ."||".
                            "sete horas atrás";
                        $areas=""; // Área de cada postagem
                        include $corredor.'includes/news.php';
                    ?>
                </div>
                <?php
                    include $corredor.'includes/aside.php';
                ?>
            </div>
        </div>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>

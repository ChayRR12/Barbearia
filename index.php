<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velho Barber</title>
    <!--FOLHA DE ESTILO GERAL-->
    <link rel="stylesheet" href="src/css/estilos.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!--FAVICON-->
    <link rel="icon" href="src/img/aba.png">

    <!--FANCYBOX-->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--GOOGLE ICONS-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<style>
    @media(max-width: 1270px){
        h3{
            font-size: 1.1em;
            margin-top: 5px;
            margin-bottom: 10px;
        }
        p{
            text-align:left;
        }
        #sobre-nos-p{
            text-align: center;
        }
        .container-serv{
            display: flex;
            flex-wrap: wrap;;
            flex-direction: column;

        }
        
    @media(max-width: 1100px){
        .img-serv:hover{ width: 15vh;
            border-radius:10px; 
            filter: grayscale(0%);
            transition: width 0.5s, filter 0.5s;}  
        }   
       @media(max-width: 1090px){
            nav ul li a{
            display: block;
            margin-top: -10px;
            
            }
       }
       
    
    @media(min-width:780px){
        .material-symbols-outlined{
            display: none;
            background-color: rgba(161, 166, 170, 0.116);
            height: 200px;
        }

    }


    @media(max-width:780px){
        #voltar-topo{
            margin-top: 5px;
        }  
        a{
            font-size: 0.9em;
        }
        ul li{
            display: flex;
            justify-content: center;
            margin: -10px;
        }

    }

    @media(max-width:575px){
        .container-serv{
            flex-wrap: wrap;
            flex-direction: column;
        }
        .img-serv:hover{
            width: 15vh;
            border-radius:10px; 
            filter: grayscale(0%);
            transition: width 0.5s, filter 0.5s;
        }
        #logo-banner{
            height: 350px;    
            position: absolute;
            top: 20px; 
            left: -80px;
            z-index: -1; 
            margin-top: 20vw;
            margin-left: 50vw;
            display: none;
        }
        .banner{
            height: 350px;
        }
        .img-trabalhos{
            height: 350px;
        }

    }
}
    
</style>
    

</head>
<body>
<!--TITULO-->
<header>
    <div id="topo">
        <a href="#" target="_blank"><img src="src/img/instragram-icon.jpg" alt=""></a>
        <a href="#" target="_blank"><img src="src/img/whatsapp-icon.jpg" alt=""></a>
    </div>
    <div id="logo">
        <img src="src/img/logo.png" alt="logo" width="100">
    </div>
<!--MENU-->
<span class="material-symbols-outlined">menu</span>
    <nav>
        <ul>
            <li><a href="#HOME">HOME</a></li>
            <li><a href="#sobre-nos">SOBRE NÓS</a></li>
            <li><a href="#servicos">SERVIÇOS</a></li>
            <li><a href="#agenda">AGENDAMENTO</a></li>
            <li><a href="#trabalhos">TRABALHOS</a></li>
            <li><a href="#contato">CONTATOS</a></li>
            <li><a href="login.php">LOGIN</a></li>
        </ul>
</nav>
</header>
<!--BANNER-->
<section class="banner cycle-slideshow"    
        data-cycle-fx="scrollHorz"
        data-cycle-speed="1000"
        data-cycle-prev="#prev"
        data-cycle-next="#next"
        >
        <img src="src/img/banner.webp" alt="banner" class="banner">
        <img src="src/img/banner2.jpg" alt="banner2" class="banner">
        <img src="src/img/banner3.jpg" alt="banner3" class="banner">
    </section>
<!--SOBRE NÓS-->
<section id="container-somos">
    <h2 id="sobre-nos">Sobre Nós</h2>
        <div id="texto-quem-somos">
            <p id="sobre-nos-p">A Barbearia <span class="destaque-azul">"Velho Barber"</span> é uma barbearia <span class="destaque-azul">moderna</span>, localizada no coração da cidade. Fundada por <span class="destaque-azul">Miguel Silva</span>, um barbeiro experiente e <span class="destaque-azul">apaixonado</span> pelo ofício, a barbearia tem como objetivo oferecer cortes de cabelo, sobrancelha, depilação com cera e serviços de barba de <span class="destaque-azul">alta qualidade </span> em um <span class="destaque-azul">ambiente acolhedor e descontraído.</span> </p>
        </div>
</section>
<!--SERVIÇOS-->    <h2 id="servicos">Nossos Serviços</h2>
<section id="serv2">

        <div class="container-serv">
            <img src="src/img/tesouras2.png" alt="tesoura" class="img-serv" id="tesoura">
            <h3>Cortes</h3>
            <p>Variedade de estilos modernos e clássicos para atender às preferências de cada cliente.</p>
        </div>

        <div class="container-serv">
            <img src="src/img/barba.png" class="img-serv" alt="barba" id="barba">
            <h3>Barba</h3>
            <p>Serviços de barba, incluindo aparagem, modelagem e tratamentos para uma barba impecável.</p>
        </div>
</section> 
<section id="serv">
        <div class="container-serv">
            <img src="src/img/pincas.png" class="img-serv" alt="pinca" id="pinca">
            <h3>Sobrancelha</h3>
            <p>Destaque sua beleza natural com nosso serviço de sobrancelha. Moldamos e realçamos suas sobrancelhas para um olhar impecável. </p>
        </div>

        <div class="container-serv">
            <img src="src/img/cera.png" class="img-serv" alt="cera" id="cera">
            <h3>Depilação com Cera</h3>
            <p>Descubra suavidade com nossa depilação a cera profissional. Pele macia e sem pelos indesejados.</p>
        </div>
</section> 
<!--AGENDAMENTO-->
<section id="agendamento">
    <h2 id='agenda'>Agendamento</h2>
    <form id="agendamentoForm" action="processarAgendamento.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required><br><br>

        <label for="horario">Horário:</label>
        <input type="datetime-local" id="horario" name="horario" required><br><br>

        <label for="servico">Serviço:</label>
        <select id="servico" name="servico" required>
            <option value="corte">Corte</option>
            <option value="barba">Barba</option>
            <option value="sobrancelha">Sobrancelha</option>
            <option value="depilacao_cera">Depilação com cera</option>
        </select><br><br>
        <button type="submit">Agendar</button>
    </form>
    <div id="message" style="display: none;"></div>
</section>

<!--GALERIA-->
<h2 id="trabalhos">Trabalhos</h2>
<section class="trabalhos">
    <a href="src/img/galeria1.jpg" data-fancybox="gallery">
        <img src="src/img/galeria1.jpg" alt="galeria-1" class="img-trabalhos">
    </a>
    <a href="src/img/galeria2.jpg" data-fancybox="gallery">
        <img src="src/img/galeria2.jpg" alt="galeria-2" class="img-trabalhos">
    </a>
    <a href="src/img/galeria3.jpg" data-fancybox="gallery">
        <img src="src/img/galeria3.jpg" alt="galeria-3" class="img-trabalhos">
    </a>
    <a href="src/img/galeria4.jpg" data-fancybox="gallery">
        <img src="src/img/galeria4.jpg" alt="galeria-4" class="img-trabalhos">
    </a>
    <a href="src/img/galeria5.jpg" data-fancybox="gallery">
        <img src="src/img/galeria5.jpg"  alt="galeria-5" class="img-trabalhos">
    </a>
    <a href="src/img/depila.png" data-fancybox="gallery">
        <img src="src/img/depila.png" alt="depila" class="img-trabalhos">
    </a>
</section>
<!--CONTATO-->
<h2 id="contato">Contatos</h2>   
<section id="contato-container">
    <section class="contato">
        <img src="src/img/telefone.png" alt="telefone" class="img-con">
        <p>Número Telefone: (55)51993829674</p>
    </section>
    <section class="contato">
        <img src="src/img/mapas-e-bandeiras.png" alt="contato" class="img-con">
        <p>Barbearia velho barber Rua das Flores, 123 Centro, Cidade Ijuí</p>
    </section> 
    <section class="contato">  
        <img src="src/img/relogio.png" alt="relogio" class="img-con">
        <p>Segunda a Sexta: 09:00 - 19:00 Sábado: 09:00 - 15:00 Domingo: Fechado</p>
    </section>
<!--Copy--> 
</section>
<div id="assinatura">
    <h4>Lorenzo Padoin Moreira &copy; 2024. Todos os direitos reservados.</h4>
</div>
<!--VOLTAR AO TOPO-->    
<a href="#"><img src="src/img/icons8-divisa-circulada-acima-100.png" alt="icon" title="Voltar ao Topo" id="voltar-topo"></a>  

<script src="src/js/jquery-3.7.1.js"></script>
<script src="src/js/scrolltop.js"></script>
<script src="src/js/jquery.cycle2.min.js"></script>
<script src="src/js/jquery.cycle2.carousel.min.js"></script>

<script>
$(".material-symbols-outlined").click(function(){
    
    $("nav").toggle(800);
})
</script>

<script>  
$("#voltar-topo").click(function (){
    $("html, body").animate({scrollTop: "0px"}, 800); 
});
</script>

<script>
Fancybox.bind("[data-fancybox]")
</script>

<script>
document.getElementById('telefone').addEventListener('blur', verificarCliente);

async function verificarCliente() {
    const telefone = document.getElementById('telefone').value;
    const response = await fetch(`verifTelefone.php?telefone=${telefone}`);
    const data = await response.json();

    if (data && !document.getElementById('nome').value) {
        document.getElementById('nome').value = data.nome;
    }
}

document.getElementById('horario').addEventListener('blur', verificarHorario);

async function verificarHorario() {
    const horario = document.getElementById('horario').value;
    const response = await fetch(`verifHorario.php?horario=${horario}`);
    const ocupado = await response.json();

    if (ocupado) {
        alert('Horário já ocupado. Por favor, escolha outro horário.');
        document.getElementById('horario').value = '';
    }
}

document.getElementById('agendamentoForm').addEventListener('submit', async function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    // Captura os dados do formulário
    const formData = new FormData(this);

    // Envia os dados usando Fetch API
    const response = await fetch('processarAgendamento.php', {
        method: 'POST',
        body: formData
    });

    // Verifica a resposta do servidor
    const result = await response.text();
    alert(result);

    // Limpa os campos do formulário
    if (response.ok) {
        this.reset();
    }
});
</script>
</body>
</html>
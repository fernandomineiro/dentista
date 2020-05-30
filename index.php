

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149849013-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-149849013-1');
    </script>

    <meta charset="iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Ortho E-motion</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <!-- In�cio Contato -->
    <script type="text/javascript" src="js/jquery_slide.js"></script>
    <script type="text/javascript" src="js/jcycle_slide.js"></script>
    <script type="text/javascript" language="javascript">
        var $form = jQuery.noConflict();
        $form(function form($form) {
            // Quando o formulário for enviado, essa função faz a chamada
            $form("#form").submit(function() {
                // Colocamos os valores de cada campo em uma váriavel para facilitar a manipulação
                var tipo = $form("input[name='tipo']:checked").val();
                var tipo_outro = $form("#tipo_outro").val();
                var nome = $form("#nome").val();
                var email = $form("#email").val();
                var fone = $form("#fone").val();
                var whatsapp = $form("#whatsapp").val();
                var mensagem = $form("#mensagem").val();

                // Exibe mensagem de carregamento
                $form("#resultado").html("<img src='images/loading.gif' alt='Enviando...' />");

                // Fazemos a requisÃ£o ajax com o arquivo envia.php e enviamos os valores de cada campo através do método POST
                $form.post('envia.php', {
                    tipo: tipo,
                    tipo_outro: tipo_outro,
                    nome: nome,
                    email: email,
                    fone: fone,
                    whatsapp: whatsapp,
                    mensagem: mensagem
                }, function(resposta) {
                    $('.resultado').collapse();
                    if (resposta == false) {
                        $form("#resultado").html("<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Fechar'><span aria-hidden='true'>&times;</span></button>Mensagem enviada com sucesso!</div>");
                        $form("#nome").val("");
                        $form("#email").val("");
                        $form("#fone").val("");
                        $form("#whatsapp").val("");
                        $form("#mensagem").val("");
                    } else {
                        $form("#resultado").html(resposta);
                    }
                });
            });
        });
    </script>
    <!-- Final Atualização -->
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '460089564857564');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=460089564857564&ev=PageView
&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body onload="abreModal()">
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!--ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol-->
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item-home active p-t-20" style="background-image: url('images/banner-01.jpg')">
                    <div class="container">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-6">
                                    <img src="images/logo.png" class="img-fluid" alt="Ortho E-motion" />
                                </div>
                                <div class="col-6 text-right" style="margin-top:10px">
                                    <a href="https://www.instagram.com/orthoemotion/" target="_blank" class="redes-sociais"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/orthoemotion" target="_blank" class="redes-sociais"><i class="fab fa-facebook-square"></i></a>
                                    <!--a href="" class="redes-sociais"><i class="fab fa-youtube"></i></a-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-make">
                                        <span>make</span><br>your<br><span>move</span>
                                    </div>
                                    <div class="links-home">
                                        <b>
                                            | <a href="https://orthoemotion.com.br/pacientes" class="grey">SOU PACIENTE</a><br>
                                            | <a href="https://orthoemotion.com.br/doutores" class="grey">SOU ORTODONTISTA</a></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--div class="carousel-caption d-none d-md-block">
                        <h3>First Slide</h3>
                        <p>This is a description for the first slide.</p>
                    </div-->
                </div>
            </div>
            <!--a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a-->
        </div>
    </header>

    <!-- description -->
    <div class="container-fluid" style="background-image: url('images/bg-text-home.jpg'); background-position:bottom">
        <div class="container description-home">
            A Ortho E-Motion é uma empresa de tecnologia que fornece produtos e serviços digitais na área da Saúde. Nós produzimos os alinhadores ortodônticos chamados E-Motion Aligners.<br />
<br />
Os E-Motion Aligners são aparelhos removíveis, transparentes, individualizados e confeccionados em placas produzidas em material clinicamente testado e aprovado pelos maiores clínicos em alinhadores do mundo.<br />
<br />
Os E-Motion Aligners unem a estética e excelentes resultados para quem não quer utilizar aparelhos ortodônticos convencionais.<br />
<br />
Os E-Motion Aligners proporcionam maior conforto, flexibilidade e praticidade no seu tratamento.            <!--p>A Ortho E-Motion é uma empresa de tecnologia que fornece produtos e serviços digitais na área da Saúde. Nós produzimos os alinhadores ortodônticos chamados E-Motion Aligners.</p>

            <p>Os E-Motion Aligners são aparelhos removíveis, transparentes, individualizados e confeccionados em placas produzidas em material clinicamente testado e aprovado pelos maiores clínicos em alinhadores do mundo.</p>

            <p>Os E-Motion Aligners unem a estética e excelentes resultados para quem não quer utilizar aparelhos ortodônticos convencionais.</p>

            <p>Os E-Motion Aligners proporcionam maior conforto, flexibilidade e praticidade no seu tratamento.</p-->
        </div>

    </div>
    <!-- /description -->
    <!-- description -->
    <div class="container-fluid" style="background-image: url('images/bg-contact-home.jpg'); background-position:bottom">
        <div class="container contact-home text-center">
            <div class="base-estojo">
                <img src="images/estojo-inicial.png" alt="" class="img-fluid img-estojo" />
            </div>
            <h2>DÚVIDAS, SUGESTÕES OU MENSAGENS</h2>
            <form id="form" action="javascript:form()" method="POST">
                <input type="hidden" name="tipo_outro" id="tipo_outro">
                <div style="margin:30px 0">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo" id="paciente" value="Paciente" style="margin-right:10px" checked>
                        <label class="form-check-label" for="paciente" style="margin-right:20px">PACIENTE</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo" id="dentista" value="Ortodontista" style="margin-right:10px">
                        <label class="form-check-label" for="dentista" style="margin-right:20px">ORTODONTISTA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo" id="outros" value="Outros" style="margin-right:10px">
                        <label class="form-check-label" for="outros" style="margin-right:20px">OUTROS</label>
                    </div>
                </div>
                <div class="box-fields-contact-home">
                    <div class="row">
                        <div class="col">
                            <div class="form-row">
                                <div class="col-12 col-sm-3">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-icon-contact"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" name="nome" id="nome" class="form-control input-contact-home" placeholder="Nome" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-icon-contact"><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <input type="email" name="email" id="email" class="form-control input-contact-home" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-icon-contact"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" name="fone" id="fone" class="form-control input-contact-home" placeholder="Fone">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-icon-contact"><i class="fa fa-mobile"></i></span>
                                        </div>
                                        <input type="text" name="whatsapp" id="whatsapp" class="form-control input-contact-home" placeholder="Whatsapp">
                                    </div>
                                </div>
                                <div class="col-2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col col-lg-10 col-sm-10 mt-10">
                                    <div class="input-group input-group-sm">
                                        <textarea name="mensagem" id="mensagem" class="form-control input-contact-home" placeholder="Sua mensagem..." style="border:1px solid #f1f1f1; width:100%!important" required></textarea>
                                    </div>
                                </div>
                                <div class="col col-lg-2 col-sm-2 mt-10">
                                    <div class="input-group input-group-sm">
                                        <button type="submit" me class="btn btn-secondary btn-sm btn-block" style="padding:14px 0">ENVIAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align:center; color:#900; margin:10px 0; padding:0 20px" id="resultado" class="resultado">
                    </div>
                </div>
            </form>
        </div>
        <!-- /.row -->

    </div>
    <!-- /description -->

    <!-- Footer -->
    <!-- footer -->
        <footer>
        <div class="container-fluid footer-content">
            <div class="container">
                <p class="text-center pb-30"><img src="images/logo.png" alt="Ortho E-motion" class="img-fluid" /></p>
                <div class="row">
                    <div class="col-lg-4 mb-30">
                        <div style="float:left; padding-right:20px; height:100%">
                            <img src="images/icon-address.png" alt="Endereço" />
                        </div>
                        <p>Rua Irineu Martins, 280 - Sala 2<br>
                            Distrito Industrial de Lácio<br>
                            Bairro: José Ferreira da Costa Júnior<br>
                            CEP: 17.539-059 - Marília / SP</p>
                        <p>Tel.: +55 (14) 3311-2703</p>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <h5>SOU PACIENTE</h5>
                        <a href="como-funciona" class="grey">Como funciona o tratamento</a><br>
                        <a href="diferenciais" class="grey">Quais os diferenciais</a><br>
                        <a href="encontre-seu-doutor" class="grey">Encontre seu doutor</a>
                    </div>
                    <div class="col-lg-4 mb-30">
                        <h5>SOU ORTODONTISTA</h5>
                        <a href="nossa-historia" class="grey">Nossa história</a><br>
                        <!--a href="produtos"" class="grey">Produtos</a><br-->
                        <a href="beneficios-e-diferenciais" class="grey">Benefícios e diferenciais</a><br>
                        <a href="credenciamento" class="grey">Credenciamento</a><br>
                        <a href="como-solicitar" class="grey">Submeta seu Caso</a><br>
                        <!--a href="doutores-credenciados" class="grey">Doutores credenciados</a-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 text-right">
                        <img src="images/industria-brasileira.png" alt="Indústria Brasileira" />
                    </div>
                    <div class="col-6 text-left" style="margin-top:12px">
                        <a href="https://www.instagram.com/orthoemotion/" target="_blank" class="redes-sociais-footer"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://www.facebook.com/orthoemotion" target="_blank" class="redes-sociais-footer"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <!--a href="" class="redes-sociais-footer"><i class="fab fa-youtube fa-2x"></i></a-->
                    </div>
                </div>
                <p class="text-center" style="margin:30px 0"><small><strong>Imagens meramente ilustrativas / Resultados podem variar de paciente para paciente/ Casos raros de reação alérgica podem ocorrer.</strong></small></p>
            </div>
        </div>
        <div class="container">
            <p class="text-center copyright">Copyright © Ortho E-motion. Todos os direitos reservados. </p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- sweet alrt -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        function dev() {
            swal("AGUARDE...", "Em breve todas informações estarão disponíveis.", "info");
        }
    </script>    <!-- / footer -->

    <!-- popup modal -->
    <script>
        function abreModal() {
            $('#myModal').modal('show');
        }
    </script>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="http://bit.ly/orthoemotion" target="_blank"><img src="images/popup-webnar-23-05-20.jpg" class="img-fluid" /></a>
                </div>
            </div>
        </div>
    </div>

    <!-- /popup modal -->

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/414f347386.js" crossorigin="anonymous"></script>

    <!-- sweet alrt -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
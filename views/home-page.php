<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo NAME_PROJECT ?></title>

        <link rel="icon" type="image/png" href="<?php echo BASE_URL ?>assets/imagens/icon.png" />
        <!-- Bootstrap -->
        <link href="<?php echo BASE_URL ?>assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/style.css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115249477-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-115249477-1');
        </script>

    </head>
    <body data-spy="scroll" data-target="#navbar-menu-principal">
        <nav class="navbar navbar-default navbar-fixed-top" id="navbar-header-menu">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu-principal" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#inicial" id="logotipo-menu"></a>
                </div>


                <div class="collapse navbar-collapse" id="navbar-menu-principal">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#inicial" class="scroll">Inicial</a></li>
                        <li><a href="#sobre" class="scroll">Sobre</a></li>
                        <li><a href="#diretoria" class="scroll">Diretoria</a></li>
                        <li><a href="#cooperados" class="scroll">Cooperado</a></li>
                        <li><a href="#sites" class="scroll">Produção</a></li>
                        <li><a href="#contato" class="scroll">Contato</a></li>
                        <li><a href="https://sig.cootax.com.br">SIGAPA</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid-fluid -->
        </nav>
        <div id="inicial">
            <div id="banner-inicial" class="bg_paralax" data-speed="15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo BASE_URL ?>assets/imagens/banner_inicial.png" alt="<?php echo NAME_PROJECT ?>" title="<?php echo NAME_PROJECT ?>" class="img-center"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="sobre" class="bg-white clear">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase font-bold font-color-green text-center">SOBRE</h1>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <img src="<?php echo BASE_URL ?>assets/imagens/imagem_sobre.png" class="img-float-right img-responsive" style="margin-top: 5%" alt="<?php echo NAME_PROJECT ?>" title="<?php echo NAME_PROJECT ?>"/>
                        <img src="<?php echo BASE_URL ?>assets/imagens/imagem_sobre2.png" class="img-float-right img-responsive hidden-sm" style="margin-top: 5%" alt="<?php echo NAME_PROJECT ?>" title="<?php echo NAME_PROJECT ?>"/>
                        <img src="<?php echo BASE_URL ?>assets/imagens/imagem_sobre3.png" class="img-float-right img-responsive hidden-sm" style="margin-top: 5%" alt="<?php echo NAME_PROJECT ?>" title="<?php echo NAME_PROJECT ?>"/>
                    </div>
                    <div class='col-md-7 col-lg-9'>
                        <h3 class="font-bold font-color-green">Quem somos</h3>
                        <p class="text-justify text-indent">A Associação dos Pequenos Agricultores Rurais do Assentamento 15 de Agosto - APARAA, registrada no CNPJ 10.765.135/0001-00, constituída em 15 de agosto de 2008, é uma associação jurídica civil de direito privado sem fins lucrativos e econômicos que regerá por este estatuto e a legislação vigente em vigor, com a sede própria na localidade denominada de Assentamento 15 de Agosto, localizada na Rodovia BR 316 KM 54, Ramal do Itaqui, Km 17, próximo a Vila Trindade (Ramal São João), Zona Rural – Castanhal – PA, CEP: 68.745-000, e foro em Castanhal/Pará, sua área de atuação é no município de Castanhal/Pará, município localizado na região norte do estado Pará.</p>
                        <p class="text-justify text-indent">A associação está direcionada a produção agrícola, apicultura e criação de animais, é constituído por um número de associados que compartilham de seus objetivos e princípios</p>
                        <h4 class="font-bold font-color-green">A Associação dos Pequenos Agricultores Rurais do Assentamento 15 de Agosto – APARAA, tem como principais objetivos</h4>
                        <p><i class="font-color-blue glyphicon glyphicon-ok"></i> Promover, estimular e difundir o espirito associativo e coletivo entre os moradores da comunidade, com vistas a sua alta sustentabilidade e melhoria de qualidade de vida de seus integrantes e associados;</p>
                        <p><i class="font-color-blue glyphicon glyphicon-ok"></i> Fomentar e incentivar a pratica de atividades agrícolas e produção culturas (orgânicas hidropônicas), em busca da valorização do trabalho e da luta dos micros-produtores;</p>
                        <p><i class="font-color-blue glyphicon glyphicon-ok"></i> Capacitar os produtores agrícolas através de cursos, debates, palestras, fóruns, seminários, congressos, etc, para que os mesmos possam gerenciar, com competência, seus negócios;</p>
                        <p><i class="font-color-blue glyphicon glyphicon-ok"></i> Reivindicar junto aos poderes públicos a nível Municipal, Estadual e Federal, medidas que assegurem o desenvolvimento e o bem-estar da comunidade;</p>
                        <p><i class="font-color-blue glyphicon glyphicon-ok"></i> Incentivar tanto o homem quanto a mulher a participação de grupos no processo produtivo e social;</p>
                        <p><i class="font-color-blue glyphicon glyphicon-ok"></i> Promover parcerias com entidades externas como modo de incentivo ao produtor na melhoraria; e implementação de novos cultivares.</p>
                        <h3 class="font-bold font-color-green">Missão</h3>
                        <p class="text-justify"><i class="font-color-blue glyphicon glyphicon-ok"></i> Prestar vendas de produtos da agricultura familiar, atender e superar as exigências do cliente.</p>
                        <h3 class="font-bold font-color-green">Visão</h3>
                        <p class="text-justify"><i class="font-color-blue glyphicon glyphicon-ok"></i> Ser referência na comercialização dos produtos agrícolas com qualidade no atendimento.</p>
                        <h3 class="font-bold font-color-green">Valores</h3>
                        <p class="text-justify"><i class="font-color-blue glyphicon glyphicon-ok"></i> Ter a preferência do cliente.</p>
                        <p class="text-justify"><i class="font-color-blue glyphicon glyphicon-ok"></i> Integridade com todos os públicos.</p>
                        <p class="text-justify"><i class="font-color-blue glyphicon glyphicon-ok"></i> Sustentabilidade econômica, social e ambiental.</p>
                        <p class="text-justify"><i class="font-color-blue glyphicon glyphicon-ok"></i> Respeitar nossos clientes e colaboradores cumprindo os princípios da Responsabilidade Social.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="diretoria" class="bg_blue clear">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="font-bold text-center">DIRETORIA </h1>
                        <p class="text-center">Veja a lista dos membros que participam e participaram da diretoria.</p>
                    </div>
                    <div class="col-md-6">
                        <h3>Diretoria Atual</h3>
                        <dl>
                            <dd>Jose Alencar - Diretor Presidente</dd>
                            <dd>João  Soriano Pinheiro - Vice Diretor</dd>
                            <dd>Jose Dos Santos Costa - 1º Secretário   </dd>
                            <dd>Valdy Jota da Silva - 2º Secretário</dd>
                            <dd>Alexandre da Silva Soares - 1º Tesoureiro</dd>
                            <dd>Ailton Sousa Reis - 2º Secretário</dd>
                            <dd><br/></dd>
                            <dt>Conselho Fiscal</dt>
                            <dd>Timoteo Santos Brandão - 1º Fiscal</dd>
                            <dd>Raimundo Leite - 2º Fiscal</dd>
                            <dd>Antonio Luiz da Silva Sousa - 3º Fiscal</dd>
                            <dd><br/></dd>
                            <dt>Suplentes</dt>
                            <dd>Antonio Jose Bruno da Silva - 1º Suplente Fiscal</dd>
                            <dd>Dovar Andrade de Lima - 2º Suplente Fiscal</dd>
                            <dd>Ozimar Oliveira Silva - 3º Suplente Fiscal</dd>
                            <dd><br/></dd>
                            <dt>Relações Publica</dt>
                            <dd>Zedequias Carlos de Melo</dd>
                        </dl>
                    </div>
                    <div class="col-md-6">
                        <p class="text-center text-uppercase font-bold">Área do Assentamento de 15 de Agosto </p>
                        <img src="<?php echo BASE_URL ?>assets/imagens/projeto-3.jpg" class="img-responsive img-center" alt="<?php echo NAME_PROJECT ?>" title="<?php echo NAME_PROJECT ?>">
                    </div>
                </div>
            </div>
        </div>
        <div id="cooperados" class="bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center font-bold font-color-green text-uppercase">COOPERADOS</h1>
                        <h3 class="font-color-green font-bold">Papel do Cooperado</h3>
                        <img src="<?php echo BASE_URL ?>assets/imagens/cootax-itb-cooperados.png" alt="Cootax - Cooperados" title="Cootax- Figura de cooperação" class="img-float-right img-responsive"/>
                        <p class="text-indent text-justify">
                            Para formar uma cooperativa é necessário que as pessoas interessadas estejam conscientes do que pretendem. O cooperado deve estar ciente de sua função de dono e usuário da sociedade. Organizado em comitês, conselhos, núcleos ou comissões, ele deve contribuir da melhor maneira possível em favor daqueles que recebem a incumbência da administração da empresa, para que todas as decisões sejam corretas e representativas da vontade da maioria.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">Direitos do cooperado</h4>
                            </div>
                            <div class="panel-body">
                                <ul class='list-unstyled'>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Votar e ser votado;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Participar de todas as operações da cooperativa;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Receber retorno de sobras apuradas no fim do ano;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Examinar livros e documentos;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Convocar assembleia, caso seja necessário;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Pedir esclarecimento aos Conselhos de Administração e Fiscal;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Opinar e defender suas ideias;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Propor ao Conselho de Administração, ou à Assembleia Geral, medidas de interesse da cooperativa.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">Deveres do cooperado</h4>
                            </div>
                            <div class="panel-body">
                                <ul class='list-unstyled'>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Operar com a cooperativa;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Participar das Assembleias Gerais;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Pagar suas quotas-parte em dia;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Acatar as decisões da Assembleia Geral;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Votar nas eleições da cooperativa;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Cumprir seus compromissos com a cooperativa;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Zelar pela imagem da cooperativa;</li>
                                    <li><i class="font-color-blue glyphicon glyphicon-share-alt"></i> Participar do rateio das perdas, se ocorrerem e das despesas da cooperativa.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-indent text-justify">	Para associa-se na Cootax e necessário que faça sua ficha de inscrição, porem deverá levar os documentos necessário para cada modalidade de associado.</p>
                        <div class="panel-group" id="collapseTiposCooperados">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#collapseTiposCooperados" href="#collapsePermissionario">
                                            Permissionário
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapsePermissionario" class="panel-collapse collapse in">
                                    <div class="panel-body" id="temp1">
                                        <p class="text-justify">Esta modalidade é para membros que querem fazer parte da cooperativa e exerce a profissão de taxista.</p>
                                        <p class="font-bold font-color-green">Deverá apresentar os seguintes documento:</p>
                                        <ul class='list-unstyled'>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> Identidade pessoal;</li>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> Carteira de habilitação;</li>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> Comprovante de residência (Com carência no máximo 90 dias após a data do vencimento);</li>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> CPF;</li>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> 1 Foto 3X4;</li>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> Documentação do veículo (em dia);</li>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> Licença de trafego – (Alvará [carteira de licença de taxis]);</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#collapseTiposCooperados" href="#collapseParticipativo">
                                            Participativo
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseParticipativo" class="panel-collapse collapse">
                                    <div class="panel-body" id="temp2">
                                        <p class="text-justify">Esta modalidade é para membros que querem fazer parte da cooperativa e que ainda não tenha posse de um veículo para trabalha nas atividades de taxista.</p>
                                        <p class="font-bold font-color-green">Deverá apresentar os seguintes documento:</p>
                                        <ul class='list-unstyled'>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> Identidade pessoal;</li>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> Carteira de habilitação;</li>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> CPF;</li>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> 1 Foto 3X4;</li>
                                            <li><i class="font-color-blue glyphicon glyphicon-ok"></i> Comprovante de residência (Com carência no máximo 90 dias após a data do vencimento);</li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sites" class="bg_blue">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase text-center font-bold">Produção</h1>
                        <p class="text-center">Confira a lista de produção mais realizada na <strong>APARAA</strong>.</p>
                    </div>
                    <div class="col-md-12">
                        <article class="table-responsive">
                            <table class="table table-bordered table-condensed">
                                <tr>
                                    <th width="50px">#</th>
                                    <th width="550px">Produção</th>
                                    <th width="200px">Quantitativo de produtores</th>
                                    <th>Porcentagem</th>
                                </tr>
                                <?php
                                if (!empty($producao)):
                                    $qtd = 1;
                                    foreach ($producao as $index) :
                                        ?>
                                        <tr>
                                            <td><?php echo $qtd ?></td>
                                            <td><?php echo $index['producao'] ?></td>
                                            <td><?php echo $index['qtd'] ?></td>
                                            <td>
                                                <div style = "margin-bottom: 0;">
                                                    <div class = "progress-bar progress-bar-success" role = "progressbar" style = "width: <?php echo ($index['qtd'] / $totalProducao) * 100; ?>%; height: 100%;" aria-valuenow = "100" aria-valuemin = "0" aria-valuemax = " <?php echo ($index['qtd'] / $totalProducao) * 100; ?>"> <?php echo ($index['qtd'] / $totalProducao) * 100; ?>%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        $qtd++;
                                    endforeach;
                                endif;
                                ?>
                            </table>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div id="contato" class="bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase font-bold text-center font-color-green">contato</h1>
                    </div>
                    <div class="col-md-12">
                        <div id="mapa_contato"></div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase  font-bold font-color-green">Endereço</h4>
                        <p> <span class="glyphicon glyphicon-home"></span> Travessa João Pessoa, nº 215, Centro - Itaituba - Pará, CEP: 68180-650.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase  font-bold font-color-green">Telefone</h4>                     
                        <p><span class="glyphicon glyphicon-phone"></span> (93) 99158-9470 | (93) 3518-0264.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase  font-bold font-color-green">Email</h4>                        
                        <p><span class="glyphicon glyphicon-envelope"></span> cootax.itb@gmail.com</p>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <form id="form-contato" method="POST" action="recaptch.php">
                                <div class="col-md-4"><input type="text" class="form-control" name="nNome" placeholder="Nome: Joab Torres Alencar"/></div>
                                <div class="col-md-4"><input type="text" class="form-control" name="nEmail" placeholder="Email / Telefone: joab.alencar@hotmail.com"/></div>
                                <div class="col-md-4"><input type="text" class="form-control" name="nAssunto" placeholder="Assunto: Procura-se serviço de taxi"/></div>
                                <div class="col-md-12"><textarea name="nMensagem" class="form-control" placeholder="Mensagem: Olá, estou precisando de um táxi, estarei visitando o munícipio de Itaituba e precisarei de locomoção, desse modo, gostaria que entrassem em contato comigo." rows="10"></textarea></div>
                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6LfpXUgUAAAAALxOx4Zw97kKhg88gbJuGtx0IWQx"></div>
                                </div>
                                <div class="col-md-12"><button type="submit" name="nEnviar"  value="Enviar" class="btn btn-success" >Enviar</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rodape" class="bg-green">
            <div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">
                                © 2008-2022 - aparaa.com.br | Todos os direitos reservados<br/>
                                É proibida a reprodução total ou parcial de qualquer conteúdo deste site.
                            </p>
                        </div>
                    </div>
                </div>        
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo BASE_URL ?>assets/js/jquery.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyDptXrHmgnbA1pZlnvpR3GtwHRLyoGEG2s"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo BASE_URL ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo BASE_URL ?>assets/js/move-top.js"></script>
        <script src="<?php echo BASE_URL ?>assets/js/cootax.js"></script>
    </body>
</html>
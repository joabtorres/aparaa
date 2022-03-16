<?php

class homeController extends controller {

    public function index() {
        $crudModel = new crud_db();
        $viewName = "home-page";
        $dados = array();
        $dados['producao'] = $crudModel->read('SELECT p.producao, COUNT(*) as qtd FROM associado_producao as ap INNER JOIN producao as p ON p.cod=ap.producao_cod GROUP BY p.producao ORDER BY qtd DESC');
        $resultado = $crudModel->read_specific('SELECT COUNT(*) as qtd FROM associado_producao ');
        $dados['totalProducao'] = 0;
        if (!empty($resultado)) {
            $dados['totalProducao'] = $resultado['qtd'];
        }
        if (isset($_POST['nEnviar'])) {
            if (!empty($_POST['nNome']) && empty($_POST['nEmail']) && empty($_POST['nAssunto']) && empty($_POST['nMensagem'])) {
                $cliente = array(
                    'nome' => addslashes($_POST['nNome']),
                    'email' => addslashes($_POST['nEmail']),
                    'assunto' => addslashes($_POST['nAssunto']),
                    'mensagem' => addslashes($_POST['nMensagem'])
                );

                $destinatario = "cootax.itb@gmail.com";

                $email_remetente = "contato@cootax.com.br";

                $assunto = "WEBSITE - CONTATO VIA EMAIL";

                $mensagem = '<!DOCTYPE html>

                <html lang="pt-br">

                <head>

                    <meta charset="UTF-8">

                    <title>' . $assunto . '</title>

                </head>

                <body>

                    <div style="width: 98%;display: block;margin: 10px auto;padding: 0;font-family: Arial, sans-serif; border : 2px solid #EAE8E8;">

                    <h3 style="background: #0091e1;color: white;padding: 10px;margin: 0;"> <small>' . $assunto . '</small> <br/> Cooperativa dos Taxistas de Itaituba - COOTAX</h3>

                        <div style="padding: 10px;">

                            <p>

                                Um novo e-mail foi envido do website www.cootax.com.br, confira abaixo:

                            </p>

                            <p style="margin: 0;">

                                <b>Nome: </b>' . $cliente['nome'] . '

                            </p>

                            <p style="margin: 0;">

                                <b>Meios de Contato: </b>' . $cliente['email'] . '

                            </p>

                            <p style="margin: 0;">

                                <b>Assunto: </b>' . $cliente['assunto'] . '

                            </p>

                            <p style="margin: 0;">

                                <b>Mensagem: </b><br/>' . $cliente['mensagem'] . '

                            </p>

                        </div>

                    </div>

                </body>

                </html>';

                $headers = 'MIME-Version: 1.0' . "\r\n";

                $headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";

                $headers .= 'From: ' . $assunto . ' <' . $email_remetente . '>' . "\r\n";

                $headers .= 'Cc: ' . $email_remetente . "\r\n";

                $headers .= 'Bcc: ' . $email_remetente . "\r\n";

                $headers .= 'X-Mailer: PHP/' . phpversion();

                if (mail($destinatario, $assunto, $mensagem, $headers, "-f$email_remetente")) {

                    echo "<script> alert('Mensagem Envidada!')</script>";
                } else {

                    echo "<script> alert('Email não enviado!')</script>";
                }
            } else {
                echo "<script> alert('E-mail não enviado, preenchar todos os campos do formulário.')</script>";
            }
        }
        $this->loadView($viewName, $dados);
    }

}

?>
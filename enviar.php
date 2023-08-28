<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo e sanitizando
$emailremetente          = 'no-reply@blancmarketingdigital.com.br';
$nome                    = trim(htmlspecialchars($_POST['name-form'], ENT_QUOTES));
$telefone         	     = trim(htmlspecialchars($_POST['cellphone-form'], ENT_QUOTES));
$email                   = trim(htmlspecialchars($_POST['email-form'], ENT_QUOTES));
$capital                 = htmlspecialchars($_POST['capital-form'], ENT_QUOTES);
$url                     = htmlspecialchars($_POST['url-form'], ENT_QUOTES);
$utm_campaign            = htmlspecialchars($_POST['utm_campaign'], ENT_QUOTES);
$utm_content             = htmlspecialchars($_POST['utm_content'], ENT_QUOTES);
$utm_medium              = htmlspecialchars($_POST['utm_medium'], ENT_QUOTES);
$utm_source              = htmlspecialchars($_POST['utm_source'], ENT_QUOTES);
$utm_term                = htmlspecialchars($_POST['utm_term'], ENT_QUOTES);

$emailatt_cliente = 'casablanca.investir@gmail.com';
$emailatt_leads   = 'leads@blancmarketingdigital.com.br';

/* =-=-=-= Informações base do e-mail (enviada para todos os destinatários) =-=-=-=*/
$corpoHTML = '<strong>Formulário de Contato</strong>
<p><b>Nome:</b>                            '.$nome.'           </p>
<p><b>E-Mail:</b>                          '.$email.'          </p>
<p><b>Telefone:</b>                        '.$telefone.'       </p>
<p><b>Capital disponível:</b>              '.$capital.'        </p>
<hr>';

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers  = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
/* =-=-=-= Fim das informações base do e-mail =-=-=-= */


// Envio para o e-mail do cliente
$header_cliente = $headers . "Return-Path: $emailatt_cliente \r\n";
$envio_cliente  = mail($emailatt_cliente,"cliente", $corpoHTML, $header_cliente);

// Envio para o e-mail de leads
$corpoHTML_leads = $corpoHTML       . '<p><b> utm_campaign: </b>' .$utm_campaign.' </p> <hr>';
$corpoHTML_leads = $corpoHTML_leads . '<p><b> utm_content:  </b>' .$utm_content.'  </p> <hr>';
$corpoHTML_leads = $corpoHTML_leads . '<p><b> utm_medium :  </b>' .$utm_medium .'  </p> <hr>';
$corpoHTML_leads = $corpoHTML_leads . '<p><b> utm_source :  </b>' .$utm_source .'  </p> <hr>';
$corpoHTML_leads = $corpoHTML_leads . '<p><b> utm_term   :  </b>' .$utm_term   .'  </p> <hr>';
$corpoHTML_leads = $corpoHTML_leads . '<p><b> URL do Lead:  </b>' .$url.'          </p> <hr>';

$header_leads    = $headers . "Return-Path: $emailatt_leads \r\n";
$envio_leads     = mail($emailatt_leads,"leads", $corpoHTML_leads, $header_leads); 


if($envio_cliente && $envio_leads) {
  echo "<script>location.href='https://materiais.euqueroinvestir.com/planilha-simulador-rf-basico-a/?utm_campaign=20230428-CPT-AON-BSE-X&utm_source=PRC-XXX-XXX&utm_medium=XXX-CT2-JK1&utm_content=RFI-PRF&campaignId=7014V000002J1DXQA0&assessor=2639713'</script>"; // Página que será redirecionada
}

?>
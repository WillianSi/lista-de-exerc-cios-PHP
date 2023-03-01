<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estiloform.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div id="geral">
        <section class="vh-100" style="background-color: #99CCFF;">
            <table class="row d-flex align-items-center justify-content-center h-100">
                <tr>
                    <td>
                    <?php 
  // Array com os dados dos usuários cadastrados
  $usuarios = array(
    "joao" => "senha123",
    "maria" => "senha456",
    "pedro" => "senha789",
    "ana" => "senha987"
  );
  
  // Variáveis de contagem
  $maxTentativas = 3;
  $tentativas = 0;
  
  // Loop de login
  while ($tentativas < $maxTentativas) {
    
      $usuario = $_POST["usuario"];
      $senha = $_POST["senha"];
  
      // Verifica se o usuário está cadastrado no sistema
      if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $senha) {
        // Exibe mensagem de boas-vindas
        echo "Bem vindo: $usuario";
        exit;
      } else {
        // Aumenta a contagem de tentativas
        $tentativas++;
        // Verifica se ainda há tentativas disponíveis
        if ($tentativas < $maxTentativas) {
          // Exibe mensagem de erro
          echo "Usuário ou senha inválidos. Tentativa $tentativas de $maxTentativas.<br>";
        } else {
          // Se chegou aqui, significa que o usuário excedeu o limite de tentativas
          echo "Número máximo de tentativas de login excedido. Tente novamente mais tarde.";
        }
      }
  }
?>

                    </td>
                </tr>
            </table>
        </section>
    </div>  
</body>
</html>
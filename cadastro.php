<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Alpha Code</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/reset.css'>
    <script src='main.js'></script>
</head>

<body>

    <!-- CABEÇALHO -->
    <header>
        <div class="logo">
            <img src="assets/logo_alphacode.png" alt="Logo da empresa">
        </div>
        <p>Cadastro de contatos</p>
    </header>
    
    <?php
    if(isset($_SESSION['msg']))
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    ?>

    <!-- FORMULARIO -->
    <form action="processo.php" class="formulario" method="post">
        <!-- INPUTS -->
        <div class="container">
            <div class="formInput">
                <label for="nome">Nome Completo</label>
                <input class="input" type="text" id="nome" name="nome" placeholder="Digite seu Nome" required>
            </div>

            <div class="formInput">
                <label for="email">E-mail</label>
                <input class="input" type="email" id="email" name="email" placeholder="Filipi@gmail.Com" required>
            </div>

            <div class="formInput">
                <label for="telefone">Telefone para contato:</label>
                <input class="input" type="text" id="telefone" name="telefone" placeholder="4183-6478" required>
            </div>
        </div>

        <div class="container">
            <div class="formInput">
                <label for="dataNascimento">Data de Nascimento</label>
                <input class="input" type="text" id="Data" name="Data" placeholder="24/11/2004" required>
            </div>

            <div class="formInput">
                <label for="profissao">Profissão</label>
                <input class="input" type="text" id="profissao" name="profissao" placeholder="EX.: Desenvolvedor"
                    required>
            </div>

            <div class="formInput">
                <label for="celular">Celular para contato:</label>
                <input class="input" type="text" id="celular" name="celular" placeholder="celular" required>
            </div>
        </div>
    </form>

    <!-- CHECKBOX -->

    <div class="containerCheck">
        <div class="containerInputCheck">
            <div class="formCheck">
                <input class="check" type="checkbox" name="novidade" id="whats">
                <span> Número de celular possui Whatsapp</span>
            </div>

            <div class="formCheck">
                <input class="check" type="checkbox" name="novidade" id="sms">
                <span> Enviar notificações por SMS</span>
            </div>
        </div>

        <div class="containerInputCheck">
            <div class="formCheck">
                <input class="check" type="checkbox" name="novidade" id="email">
                <span> Enviar notificações por E-mail</span>
            </div>
        </div>
    </div>

    <!-- BOTÃO -->
    <input class="button" type="submit" name="acao" value="Cadastrar contato">
  

    <div id="consultaDeDados">
        <table id="tblConsulta" >
            <tr id="tblLinhas">

                <td class="tblColunas destaque"> Nome </td>
                <td class="tblColunas destaque"> Data Nascimento </td>
                <td class="tblColunas destaque"> E-mail </td>
                <td class="tblColunas destaque"> Celular para contato </td>
                <td class="tblColunas destaque"> Ações </td>
               
            </tr>
    
            <tr id="tblLinhas">
                <td class="tblColunas-registros"></td>
                <td class="tblColunas-registros"></td>
                <td class="tblColunas-registros"></td>
                <td class="tblColunas-registros"></td>
                <td class="tblColunas-registros">
        
                    <img src="assets/editar.png" alt="Editar" title="Editar" class="editar">
                        
                    <img src="assets/excluir.png" alt="Excluir" title="Excluir" class="excluir">
                    
                                                                                                            
                   
                </td>
            </tr>
            
        </table>
    </div>
    
    <footer>
        <p>Termos | Políticas</p>
        <div>
            <p>© Copyright 2022 | Desenvolvido por</p>
            <img src="assets/logo_rodape_alphacode.png" alt="Logo da empresa">
        </div>
        <p>©Alphacode IT Solutions 2022</p>
    </footer>

</body>

</html>
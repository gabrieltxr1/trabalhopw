<?php

    switch(@$_REQUEST["acao"]){
        case "CadastroUsuario":
            $nome = @$_POST["nome"];
            $idade = @$_POST["idade"];
            $email = @$_POST["email"];
            $contato = @$_POST["contato"];
            $cpf = @$_POST["cpf"];
            $senha = @$_POST["senha"];

            $sql = "INSERT INTO trabalho_pw (nome, idade, email, contato, cpf, senha)
                    VALUES ('{$nome}','{$idade}', '{$email}', '{$contato}', '{$cpf}', '{$senha}' )";
            
            $res = $conn->query($sql);
            if($res == true){
                echo "<script>alert('USUÁRIO CADASTRADO COM SUCESSO!!!');</script>";
                echo "<script>location.href='?pagina=listarUsuario';</script>";
            }
            else{
                echo "<script type='javascript'> alert('NÃO FOI POSSÍVEL CADASTRAR O USUÁRIO :(');</script>";
                echo "<script>location.href=?pagina=listarUsuario;</script>";
            }

            break;

        /*case "excluir":
            
            $sql = "DELETE FROM trabalho_pw WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);
            if($res == true){
                echo "<script>alert('USUÁRIO EXCLUIDO COM SUCESSO!!!');</script>";
                echo "<script>location.href='?pagina=listarUsuario';</script>";
            }
            else{
                echo "<script>alert('NÃO FOI POSSÍVEL EXCLUIR O USUÁRIO :(');</script>";
                echo "<script>location.href=?pagina=listarUsuario;</script>";
            }
            break;

        case "atualizar":
            $nome = $_POST["nm"];
            $idade = $_POST["idd"];
            $email = $_POST["em"];
            $contato = $_POST["ct"];
            $cpf = $_POST["cpf"];
            $sql = "UPDATE usuario SET nome='{$nome}',idade='{$idade}', email='{$email}', 
            contato='{$contato}', cpf='{$cpf}' WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            
            if($res == true){
                echo "<script>alert('USUÁRIO ATUALIZADO COM SUCESSO!!!');</script>";
                echo "<script>location.href='?pagina=listarUser';</script>";
            }
            else{
                echo "<script>alert('NÃO FOI POSSÍVEL ATUALIZAR O USUÁRIO :(');</script>";
                echo "<script>location.href=?pagina=listarUser;</script>";
            }

            break;

            
            */
            
            
        }

?>

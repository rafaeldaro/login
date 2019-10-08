<?php



//Teste se existe a ação
if(isset($_POST['action'])){


    if($_POST['action'] == 'cadastro'){
        //teste sw ação é igual a cadastro
        echo"<p>cadastro</p>";
        echo"\n<pre>";//pré formatar
        print_r($_POST);
        echo"\n</pre>";

    }else if($_POST['action'] == 'login'){
        //senão, teste se ação é login
        echo "<p>login</p>";
        echo "\n<pre>";//pré formatar
        print_r($_POST);
        echo "\n</pre>";

    }else if($_POST['action'] == 'senha'){
        //senão, teste se ação é recuperar semha
        echo "<p>senha</p>";
        echo "\n<pre>";//pré formatar
        print_r($_POST);
        echo "\n</pre>";
    }else{

        header("location:index.php");
    }

}else{
        //redirecionado para index.php, negando o acesso a esse arquivo diretamente
        header("location:index.php");

    }
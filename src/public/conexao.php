<?php
      ############################################################
      # Autor............: Pedro Moura
      # Data.............: 10/07/2017
      # Página...........: conexao.php
      # Propriedade......: TEDxUFTM
      ############################################################

      //ini_set('display_errors', 1);
      //ini_set('display_startup_erros', 1);
      //error_reporting(E_ALL);

      error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

      $host    = "localhost";

      $banco   = "tedxu156_ted";
      $usuario = "tedxu156_admin";
      $senha   = "62zY0xIue7";

      /*$banco   = "pedro251_kumon";
      $usuario = "pedro251_kumon";
      $senha   = "87qYuY6r5a";*/

      //$conectar = mysql_connect("$host", "$usuario", "$senha"); mysql_set_charset('utf8', $conectar);
      $conectar = @mysql_connect("$host", "$usuario", "$senha");
      mysql_set_charset('ISO-8859-1', $conectar);
      //$conectar = mysql_connect("127.0.0.1", "root", "sistemas"); mysql_set_charset('ISO-8859-1', $conectar);

      if(!$conectar)
      {
        die ("<h1>ERRO DE CONEXAO!</h1>");
      } 

      $db = mysql_select_db("$banco");
      
?>
<?php

    ############################################################
    # Autor.............: Pedro Moura
    # Propriedade.......: TEDxUFTM
    ############################################################

    ini_set('display_errors', 1);
    ini_set('display_startup_erros', 1);
    error_reporting(E_ALL);
    error_reporting(0);

    require('mailchimp/src/Mailchimp.php');

    define('MAILCHIMP_API_KEY',  '5018423e81728546f643967248febf77-us16'); // Sua chave da API
    define('MAILCHIMP_LIST_ID',  'c2eb3728aa'); // O ID da sua lista
    define('MAILCHIMP_CITY_TAG', 'MERGE0'); // A tag do campo personalizado que usaremos

    $form = $_POST;

    if(!empty($form['email'])) 
    {
        try 
        {   
            $mailchimp = new Mailchimp(MAILCHIMP_API_KEY);
            $lists     = new Mailchimp_Lists($mailchimp);
               
            $email = [
                'email' => $form['email'],
            ];
            $merge = [
                MAILCHIMP_CITY_TAG => $form['city'],
            ];

            $lists->subscribe(
                MAILCHIMP_LIST_ID, // List ID
                $email,            // Subscriber ID, his/her email
                $merge,            // Custom fields
                'html',            // E-mail type
                false              // Confirm subscription by email (double opt-in)?
            );

            echo 'Sua Pré-Inscrição foi efetuada com sucesso!';
        } catch (Mailchimp_List_AlreadySubscribed $e) 
        {
            echo 'Já foi feita uma inscrição com este e-mail!';
        } catch (Mailchimp_Email_AlreadySubscribed $e) 
        {
            echo 'Já foi feita uma inscrição com este e-mail!';
        } catch (Mailchimp_Email_NotExists $e) 
        {
            echo 'Este e-mail não existe!';
        } catch (Mailchimp_Invalid_Email $e) 
        {
            echo 'E-mail inválido!';
        } catch (Mailchimp_List_InvalidImport $e) 
        {
            echo 'Dado informado é inválido, provável que seja o e-mail!';
        } catch (Exception $e) 
        {
            echo $e->getMessage(); // Do not show it to the user
        }
    } else 
    {
        echo 'Por favor volte para página inicial. <a href="index.php">Go back</a>';
    }

    /*include "conexao.php";

    $email = $_POST['email'];
  
    ### VERIFICA SE E-MAIL JÁ FOI CADASTRADO
    $sqlValida = " SELECT *
                    FROM tedxu156_ted.inscricoes i
                    WHERE i.email = LOWER('".$email."')";

    mysql_query($sqlValida) or die (mysql_error());

    if(mysql_affected_rows())
    {
        echo(utf8_encode("<script>alert('ESTE E-MAIL JA FOI CADASTRADO!')</script>"));
        echo("<script>window.location.href='index.php'</script>");
    }else
    {
        $sqlInsert = " INSERT INTO tedxu156_ted.inscricoes(email)
                        VALUES(LOWER('".$email."')) ";

        mysql_query($sqlInsert) or die (mysql_error());

        if(mysql_affected_rows())
        {
            echo(utf8_encode("<script>alert('E-MAIL CADASTRADO COM SUCESSO!')</script>"));
            echo("<script>window.location.href='index.php'</script>");
        }else
        {
            echo(utf8_encode("<script>alert('NÃO FOI POSSÍVEL CADASTRAR O E-MAIL!')</script>"));
        }
    }*/

?>
<?php

    ############################################################
    # Autor.............: Pedro Moura
    # Modificado por....: Alvaro Viebrantz
    # Propriedade.......: TEDxUFTM e TEDxUFMT
    ############################################################
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require('../mailchimp/src/Mailchimp.php');
    
    $MAILCHIMP_API_KEY = getenv('MAILCHIMP_API_KEY'); // Sua chave da API
    $MAILCHIMP_LIST_ID = getenv('MAILCHIMP_LIST_ID'); // O ID da sua lista

    $form = $_POST;
    
    if(!empty($form['email'])) 
    {
        try 
        {   
            $mailchimp = new Mailchimp($MAILCHIMP_API_KEY);            
            $lists     = new Mailchimp_Lists($mailchimp);
                           
            $email = [
                'email' => $form['email'],
            ];

            $merge = [];

            $lists->subscribe(
                $MAILCHIMP_LIST_ID, // List ID
                $email,            // Subscriber ID, his/her email
                $merge,            // Custom fields
                'html',            // E-mail type
                false              // Confirm subscription by email (double opt-in)?
            );

            echo 'Sua Pré-Inscrição foi efetuada com sucesso!';
        } catch (Mailchimp_List_AlreadySubscribed $e) 
        {
            echo 'Já foi feita uma inscrição com este e-mail!';
        }  catch (Mailchimp_Email_NotExists $e) 
        {
            echo 'Este e-mail não existe!';
        } catch (Mailchimp_Invalid_Email $e) 
        {
            echo 'E-mail inválido!';
        } catch(Mailchimp_ValidationError $e)
        {
            echo 'E-mail inválido!';        
        } catch (Mailchimp_List_InvalidImport $e) 
        {
            echo 'Dado informado é inválido, provável que seja o e-mail!';
        } catch (Exception $e) 
        {            
            //echo get_class($e);
            //echo ' - ';
            //echo $e->getMessage(); // Do not show it to the user
            echo 'Erro inesperado';
        }
    } else 
    {
        echo 'Por favor informe seu email.';
    }

?>
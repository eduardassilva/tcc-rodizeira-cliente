<?php

    $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
    $user = 'root';
    $pass = '';

    try{
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_POST["resID"];
        $itemID = $_POST["itemID"];
        
        if(empty($resID)){
            $resID = 0;
        }
        
        $insert = 'INSERT 
                    INTO pedidos (item_id
                                , restaurant_id
                                , aberto
                                , data_pedido)
                  VALUES ('.$itemID.'
                        , "'.$resID.'"
                        , 1
                        , CURDATE())';
                    
        $conn->query($insert);
        
        $update = 'UPDATE cardapios
                      SET qtd_pedidos = (qtd_pedidos + 1)
                    WHERE item_id = '.$itemID;
                    
        $conn->query($update);
        
        $conn->close();
        
    }catch(PDOException $e){
        echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
    }
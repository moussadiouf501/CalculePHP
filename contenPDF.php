<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <style>
        table {
            width: auto;
            border: solid 2px ;
            text-align: center;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1><?php echo $_SESSION['user']; ?></h1>
     <table style="width:100%; ">
           <tr><h2>RECAPITULATIF </h2>
            <th></th>
            <th> <h2>  ETAPE 4 </h2></th>
          </tr>
     </table>
    <table style="width:100%; "> 
        <thead>
            <tr>
            <th>N°</th>
            <th>Question & Réponse</th>       
            <th>Validation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nbrRep=1;
            foreach ($_SESSION['Tab_reponse'] as $t){ ?>
                <?php foreach ($t as $q=> $rep){ ?>
                    <?php if($rep=='non') { ?>
                <tr style='background-color:red;  width:500px; height: 70px margin:10px'>
                   
                    <td style=" color:white; font-size:32px; width:100px; height: 70px margin:10px"><?= $nbrRep++; ?></td>
                    <td style=" color:white; font-size:32px; width:100px; height: 70px margin:10px"><?= $q?></td>
                    <td style=" color:white; font-size:32px; width:100px; height: 70px margin:10px"><?= $rep?></td>
                 
                </tr>
                <?php }else{ ?>
                    <tr style='background-color:green; width:500px; height: 70px margin:10px'>
                    <td style=" color:white; font-size:32px; width:100px; height: 70px margin:10px"><?= $nbrRep++; ?></td>
                    <td style=" color:white; font-size:32px; width:100px; height: 70px margin:10px"><?= $q?></td>
                    <td style=" color:white; font-size:32px; width:100px; height: 70px margin:10px"><?= $rep?></td>
                    </tr>
                <?php } } ?>
             <?php } ?>
        </tbody>
    </table>
</body>
</html>
<?php


$produtos = $_GET['produtos'];

switch($produtos){
    case 1:
        echo "Alimento não Perecível";
        break;

    case 2:
    case 3:
    case 4:
        echo "Alimento Perecível";
        break;

    case 5:
    case 6:
        echo "Vestuário";
        break;

    case 7: 
        echo "Higiene pessoal";
        break;

    case 8:
    case 9:
    case 10:
       echo "Limpeza";
       break;

    default:
       echo "Outro código";










}




?>
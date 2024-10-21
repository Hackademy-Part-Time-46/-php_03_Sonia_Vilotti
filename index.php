<?php



do{
$password = readline('inserisci password');
}while(!$password);

$checkLength = checkLength($password);
$checkNumber = checkTheresNumber($password);
$checkUpperChar = theresUpperChar($password);

if(!$checkLength){
    echo 'non hai inserito almeno 8 caratteri';
}
elseif(!$checkNumber){
    echo 'non hai inserito almeno un numero';
}
elseif(!$checkUpperChar){
    echo 'non hai inserito almeno una lettera maiuscola';
}
else{
    echo 'password Corretta';
}

function checkLength($stringa){
    if(strlen(trim($stringa)) >= 8){
        return true;
    }
        return false;
    };


function checkTheresNumber($stringa){
   for($i = 0; $i < strlen($stringa); $i++){
        if(is_numeric($stringa[$i])){
            return true;
        }
    }
            return false;
}

function theresUpperChar($stringa){
    for($i = 0; $i < strlen($stringa); $i++){
        if(ctype_upper($stringa[$i])){
            return true;
        }
            return false;
    }
}
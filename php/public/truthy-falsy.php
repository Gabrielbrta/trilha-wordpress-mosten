<?php 

//Falsy
/**
 * null ....... // null
 * 0 .......... // integer
 * 0.0 ........ // float
 * "0" ........ // string
 * "" ......... // empty string
 * array() .... // empty array
 */


// Truthy - O resto

if(!0) {
    echo "Inverti o valor false de zero";
}

if(!!0) {
    echo "Continua false e retorna boolean";
}
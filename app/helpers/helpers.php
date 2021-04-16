<?php

if(!function_exists("formatPrixBf")){

    function formatPrixBf($prix){

        return number_format($prix, 0, ",", " ")."FCFA";

    };
}

<?php
function validate($textValue){
    if(!empty($textValue)){
        $trim =  trim($textValue);
        return filter_var($trim, FILTER_SANITIZE_STRING);
    }
    return "";
}
function validatemail($mailValue){
    if(!empty($mailValue)){
        $trim =  trim($mailValue);
        return filter_var($trim, FILTER_SANITIZE_EMAIL);
    }
    return "";
}
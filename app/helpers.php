<?php

use App\Models\BookSection;

function get_BookSection_value($id){
    $data = BookSection::where('id',$id)->first();
    if(isset($data->tittle)){
        return $data->tittle;
    }else{
        return 'empty';
    }
}
function get_author_value($id){
    $data = BookSection::where('id',$id)->first();
    if(isset($data->author)){
        return $data->author;
    }else{
        return 'empty';
    }
}

function get_thumbnail_value($id){
    $data = BookSection::where('id',$id)->first();
    if(isset($data)){
        return $data;
    }else{
        return 'empty';
    }
}

function get_price_value($id){
    $data = BookSection::where('id',$id)->first();
    if(isset($data->price)){
        return $data->price;
    }else{
        return 'empty';
    }
}

function get_isbn_value($id){
    $data = BookSection::where('id',$id)->first();
    if(isset($data->isbn)){
        return $data->isbn;
    }else{
        return 'empty';
    }
}

function get_synopsis_value($id){
    $data = BookSection::where('id',$id)->first();
    if(isset($data->synopsis)){
        return $data->synopsis;
    }else{
        return 'empty';
    }
}


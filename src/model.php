<?php

function getArticles() {
    $bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'microcms_user', 'secret');
    return $bdd->query('select * from t_article order by art_id desc');
}
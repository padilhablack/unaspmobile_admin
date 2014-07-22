<?php

require_once '../model/material.php';

function select_material() {
    $cont = 0;
    $material = new Material();
    $html = '';
    $row = $material->selectMaterial();

    $html .='<table>';


    for ($i = 0; $i < count($row); $i++) {
        $html.= '<tr><td>';
        $html.= '<a><img src = "server/php/'.$row[$cont]['foto'].'"></a>';
        $html.= '</td><td>';
        $html.= '<ul class="material">';
        $html.= '<li>Tipo:</li>';
        $html.= '<li>Título;</li>';
        $html.= '<li>Autor:</li>';
        $html.= '<li>Ano:</li>';
        $html.= '<li>Editora</li>';
        $html.= '<li>Status:</li>';
        $html.= '</td><td>';

        $html.='<ul class="material">';
        $html.='<li>' . $row[$cont]['tipo'] . '</li>';
        $html.='<li>' . $row[$cont]['titulo'] . '</li>';
        $html.='<li>' . $row[$cont]['autor'] . '</li>';
        $html.='<li>' . $row[$cont]['ano'] . '</li>';
        $html.='<li>' . $row[$cont]['editora'] . '</li>';
        $html.='<li>' . $row[$cont]['disponivel'] . '</li>';
        $html.='</ul></td>';
        $html.='<td><a href="#" data-role="button" id="button1" class="ui-link ui-btn ui-shadow ui-corner-all">Emprestar</a>';
        $html.='<a href="#" data-role="button" id="button2" class="ui-link ui-btn ui-shadow ui-corner-all">Reservar</a></td>';
        $html.='</tr>';

        $cont++;
    }
    $html.= '</table>';

    return $html;
}



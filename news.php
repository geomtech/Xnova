<?php
/**
 * Tis file is part of XNova:Legacies
 *
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @see http://www.xnova-ng.org/
 *
 * Copyright (c) 2009-Present, XNova Support Team <http://www.xnova-ng.org>
 * All rights reserved.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *                                --> NOTICE <--
 *  This file is part of the core development branch, changing its contents will
 * make you unable to use the automatic updates manager. Please refer to the
 * documentation for further information about customizing XNova.
 *
 */

define('INSIDE' , true);
define('INSTALL' , false);
define('LOGIN'   , true);
define('DISABLE_IDENTITY_CHECK', true);
require_once dirname(__FILE__) .'/common.php';
$parse = $lang;

$Select_news = doquery("SELECT * FROM {{table}} ORDER BY id DESC LIMIT 0, 5","news");
$count = 0;
$DisplayNews ='';
while($ListeNews = mysql_fetch_array($Select_news))
{
	$count++;
	$DisplayNews .='<div class="news">';
	$DisplayNews .='<h3>';
    $DisplayNews .=$ListeNews['titre'];
	$DisplayNews .='le <em>'.date('d/m/Y à H\hi', $ListeNews['timestamp']).'</em>';
    $DisplayNews .='</h3>';
    $DisplayNews .='<p>';
    // On enlève les éventuels antislashs, PUIS on crée les entrées en HTML (<br />).
    $contenu = nl2br(stripslashes($ListeNews['contenu']));
	$DisplayNews .=$contenu;
    $DisplayNews .='</p>';
	$DisplayNews .='</div>';
}
$parse['DisplayNews'] = $DisplayNews;

$page .= parsetemplate(gettemplate('news_body'), $parse);
display($page,"news",false);
?>
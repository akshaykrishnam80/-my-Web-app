<?php


$html = '';
$html .= '<div class="leader-head ">
Leaderboards</div>
<div class="leader-back">
<h><a href="home" a> Home</a> >Leaderboards</h>
</div>

<table class="table table-bottom">
<thead class="thead-color">
    <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Total time</th>
        <th>Score</th>


    </tr>
</thead>
<tbody class="user-details">
    <tr class="active-row">
        <td>1 </td>
        <td>Akshay456</td>
        <td>6.45 min</td>
        <td>2342</td>
    </tr>
    <tr>
        <td>2 </td>
        <td>carl234</td>
        <td>3.45 min</td>
        <td>344</td>
    </tr>
    <tr>
        <td>3 </td>
        <td>Kelly123</td>
        <td>2.55 min</td>
        <td>234</td>
    </tr>
    <tr class="active-row">
        <td>4</td>
        <td>David234</td>
        <td>7.45 min</td>
        <td>3453</td>
    </tr>

    <tr>
        <td>5 </td>
        <td>Gamez 367</td>
        <td>4.45 min</td>
        <td>455</td>
    </tr>

</tbody>

</table>';

echo $html;

?>
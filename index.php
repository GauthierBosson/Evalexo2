<?php
function convertion(int $dollar, float $multiplicateur) {
    $result = $dollar*$multiplicateur;
    echo $result . ' euros est égal à ' . $dollar . ' dollars';
}

convertion(20, 0.814902945);
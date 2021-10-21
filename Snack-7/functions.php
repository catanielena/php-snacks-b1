<?php 
    function average($votes) {
        $sum = 0;
        foreach ($votes as $vote) {
            $sum += $vote;
        };
        return round($sum / count($votes), 2);
    };    
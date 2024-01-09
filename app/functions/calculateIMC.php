<?php

function calculateIMC(float $userHeight, float $userWeight): float
{
    return round($userWeight/($userHeight ** 2), 2);
}
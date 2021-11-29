<?php

interface Chair
{
    public function getDescription(): string;
    public function getLegsMaterial(): string;
    public function getSeatMaterial(): string;
}
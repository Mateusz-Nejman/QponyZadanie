<?php

namespace App\Entity;

use Exception;
use Symfony\Component\Validator\Constraints as Assert;

class CalculatorData
{
    /**
     * @Assert\NotBlank
     * @Assert\Type("integer")
     * @Assert\Positive
     */
    private $serieCount;

    public function getSerieCount(): ?int
    {
        return $this->serieCount;
    }

    public function setSerieCount(int $count): self
    {
        if($count <= 0)
            throw new Exception("Serie count cannot be null or negative!");

        $this->serieCount = $count;

        return $this;
    }

    public function maximum(): int
    {
        $maximumValue = 1;
        $array = [0, 1];

        for($a = 0; $a < $this->serieCount-1; $a++)
        {
            $newIndex = 2+$a;

            $newValue = $newIndex % 2 == 0 ? $array[$newIndex/2] : ($array[$newIndex/2] + $array[($newIndex/2)+1]);

            $array[$newIndex] = $newValue;

            $maximumValue = $newValue > $maximumValue ? $newValue : $maximumValue;
        }

        return $maximumValue;
    }
}

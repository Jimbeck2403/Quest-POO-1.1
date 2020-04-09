<?php

// Truck.php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'diesel', 'petrol',
    ];
    // Do not modify the rest of the file

    /**
     * @var string
     */
    protected $energy;

    /**
     * @var int
     */
    protected $energyLevel;


    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $loading = 0;

    public function tank(): string
    {
        $sentence = "";
        while ($this -> loading < $this->storageCapacity){
            $this -> loading+=10;
            $sentence.="Filling <br>";
        }
        $sentence .= "Full";
        return $sentence;
    }

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public
    function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public
    function getLoading(): int
    {
        return $this->loading;
    }

    public
    function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

}

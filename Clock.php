<?php


namespace Guilde;


class Clock
{
    private int $hours;
    private int $minutes;
    private int $secondes;

    /**
     * Clock constructor.
     * @param int $hour
     * @param int $minutes
     * @param int $secondes
     */
    public function __construct(int $hour, int $minutes, int $secondes)
    {
        $this->hours = $hour;
        $this->minutes = $minutes;
        $this->secondes = $secondes;
    }

    /**
     * @return int
     */
    public function getHours(): int
    {
        return $this->hours;
    }

    /**
     * @param int $hours
     */
    public function setHours(int $hours): void
    {
        $this->hours = $hours;
    }

    /**
     * @return int
     */
    public function getMinutes(): int
    {
        return $this->minutes;
    }

    /**
     * @param int $minutes
     */
    public function setMinutes(int $minutes): void
    {
        $this->minutes = $minutes;
    }

    /**
     * @return int
     */
    public function getSecondes(): int
    {
        return $this->secondes;
    }

    /**
     * @param int $secondes
     */
    public function setSecondes(int $secondes): void
    {
        $this->secondes = $secondes;
    }

    public function increment()
    {
        $seconds = $this->getSecondes();
        $minutes = $this->getMinutes();
        $hours = $this->getHours();

        $seconds++;

        if ($seconds === 60) {
            $minutes++;
            if ($minutes === 60) {
                $hours++;
                if ($hours === 24) {
                    $seconds = $minutes = $hours = 0;
                }
            }
        }
        $this->setSecondes($seconds);
        $this->setMinutes($minutes);
        $this->setHours($hours);

    }

    public function setTime(int $hour, int $minutes, int $secondes)
    {
        if ($this->verify($hour, $minutes, $secondes) === 1) {
            $this->setHours($hour);
            $this->setMinutes($minutes);
            $this->setSecondes($secondes);
        }
    }

    public function print()
    {
        $hour = $this->getHours();
        $minutes = $this->getMinutes();
        $secondes = $this->getSecondes();
        if ($this->verify($hour, $minutes, $secondes) === 1) {
            $hour = $this->format($hour);
            $minutes = $this->format($minutes);
            $secondes = $this->format($secondes);

            echo $hour . ":" . $minutes . ":" . $secondes . "<br>";
        }
    }

    private function verify(int $hour, int $minutes, int $secondes)
    {
        if ($hour < 0 || $hour >= 24 || $minutes < 0 || $minutes >= 60 || $secondes < 0 || $secondes >= 60) {
            echo "Erreur, l'horaire spécifiée n'est pas valide. <br>";
        } else {
            return 1;
        }
    }

    private function format($nb){
        if ($nb < 10){
            return "0".$nb;
        }
        return $nb;
    }
}
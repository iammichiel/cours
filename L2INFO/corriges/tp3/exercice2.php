<?php

// 16 et 45

class Trajet
{
    private $depart;
    private $arrivee;
    private $duree;

    public function __construct($depart, $arrivee, $duree)
    {
        $this->depart = $depart;
        $this->arrivee = $arrivee;
        $this->duree = $duree;
    }
}

class Solution
{
    private $path;
    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getDistance()
    {
        return 1;
    }

    public function __toString()
    {
        return $this->path . " " . $this->getDistance();
    }
}

class Resolver
{
    private $solutions = array();

    public function findShortestWay()
    {
        // $a = new Point('A');
        // $a->addTrajet(new Trajet('A', 'B', 7));
        // $a->addTrajet(new Trajet('A', 'C', 12));
        // $a->addTrajet(new Trajet('A', 'D', 3));
        // $a->addTrajet(new Trajet('A', 'E', 9));
        //
        // $b = new Point('B');
        // $b->addTrajet(new Trajet('B', 'A', 9));
        // $b->addTrajet(new Trajet('B', 'C', 12));
        // $b->addTrajet(new Trajet('B', 'D', 7));
        // $b->addTrajet(new Trajet('B', 'E', 5));
        //
        // $c = new Point('C');
        // $c->addTrajet(new Trajet('C', 'A', 8));
        // $c->addTrajet(new Trajet('C', 'B', 16));
        // $c->addTrajet(new Trajet('C', 'D', 11));
        // $c->addTrajet(new Trajet('C', 'E', 15));
        //
        // $d = new Point('D');
        // $d->addTrajet(new Trajet('D', 'A', 3));
        // $d->addTrajet(new Trajet('D', 'B', 5));
        // $d->addTrajet(new Trajet('D', 'C', 6));
        // $d->addTrajet(new Trajet('D', 'E', 9));
        //
        // $e = new Point('E');
        // $e->addTrajet(new Trajet('E', 'A', 4));
        // $e->addTrajet(new Trajet('E', 'B', 11));
        // $e->addTrajet(new Trajet('E', 'C', 3));
        // $e->addTrajet(new Trajet('E', 'D', 5));
        //
        echo "Starting the calculus...\n";
        // Generating all routes.
        $this->generateRoute('', array('A', 'B', 'C', 'D', 'E'));

        $bestRoute = null;
        foreach ($this->solutions as $solution) {
            $solution = new Solution($solution);
            if ($bestRoute == null || $solution->getDistance() < $bestRoute->getDistance()) {
                $bestRoute = $solution;
            }
        }

        echo $bestRoute;
    }

    public function generateRoute($path, $left)
    {
        if (count($left) == 0) {
            $this->solutions[] = $path;
        } else {
            foreach ($left as $i => $city) {
                $this->generateRoute($path . $city, $this->removeElementFromArray($left, $city));
            }
        }
    }

    public function removeElementFromArray($left, $remove)
    {
        $result = array();
        foreach ($left as $l) {
            if ($remove != $l) {
                $result[] = $l;
            }
        }

        return $result;
    }
}

$resolver = new Resolver();
$resolver->findShortestWay();

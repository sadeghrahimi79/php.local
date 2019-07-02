<?php
trait logger{

    public function log($date)
    {
        echo "$date loged";
    }
}

class sample{
    use logger;
}

(new sample())->log("ample data");
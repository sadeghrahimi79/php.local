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

echo  "hello word:";
(new sample())->log("ample data");
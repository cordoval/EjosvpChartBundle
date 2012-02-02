<?php

namespace Storm\ChartBundle\Chart;

class BarChart extends Chart
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getType()
    {
        return "BarChart";
    }

}

<?php

namespace Ejosvp\ChartBundle\Chart;

class PieChart extends Chart
{
    public function __construct($name, array $rows = array(), array $options = array())
    {
        $columns = array('slice_labels' => 'string','slice_values' => 'number');
        parent::__construct($name, $columns, $rows, $options);

    }

    public function getType()
    {
        return "PieChart";
    }

}

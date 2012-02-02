<?php

namespace Storm\ChartBundle\Chart;

class ChartView implements ChartViewInterface
{
    protected $chart;

    function __construct(Chart $chart)
    {
        $this->chart = $chart;
    }

    public function getName()
    {
        return $this->chart->getName();
    }

    public function getOptions()
    {
        return $this->chart->getOptions();
    }

    public function getType()
    {
        return $this->chart->getType();
    }

    public function getData()
    {
        return array(
            'cols' => $this->getColumns(),
            'rows' => $this->getRows(),
        );
    }

    public function getRows()
    {
        $data = array();
        foreach ($this->chart->getRows() as $row)
        {
            $new_row = array();
            foreach ($row as $cell)
            {
                $new_row['c'][] = array('v' => $cell);
            }
            $data[] = $new_row;
        }
        return $data;
    }

    public function getColumns()
    {
        $data = array();
        foreach ($this->chart->getColumns() as $label => $type)
        {
            $data[] = array('label' => $label, 'type' => $type);
        }
        return $data;
    }

}

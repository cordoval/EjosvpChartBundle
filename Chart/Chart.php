<?php

namespace Storm\ChartBundle\Chart;

abstract class Chart
{
    protected $name;
    protected $columns;
    protected $rows;
    protected $options;

    public function __construct($name, array $columns = array(), array $rows = array(), array $options = array())
    {
        $this->name = $name;
        $this->columns = $columns;
        $this->rows = $rows;
        $this->options = $options;
    }

    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setOptions($options)
    {
        $this->options = $options;
    }

    public function getOptions()
    {
        return $this->options;
    }

    abstract public function getType();

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function createView()
    {
        return new ChartView($this);
    }
}

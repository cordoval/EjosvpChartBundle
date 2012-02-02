<?php

namespace Storm\ChartBundle\Twig;

use Twig_Extension;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Storm\ChartBundle\Chart\ChartViewInterface;

class ChartExtension extends Twig_Extension
{
    private $container;

    function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getName()
    {
        return "aguila_chart";
    }

    public function getFunctions()
    {
        return array(
            'chart_init' => new \Twig_Function_Method($this, 'initChart', array('is_safe' => array('html'))),
            'render_chart' => new \Twig_Function_Method($this, 'renderChart', array('is_safe' => array('html'))),
        );
    }

    public function initChart()
    {
        return $this->render('StormChartBundle:Chart:init.html.twig');
    }

    public function renderChart(ChartViewInterface $chart)
    {
        return $this->render('StormChartBundle:Chart:render.html.twig', array(
            'chart' => $chart,
        ));
    }

    protected function render($template, $options = array())
    {
        return $this->container->get('templating')->render($template, $options);
    }

}

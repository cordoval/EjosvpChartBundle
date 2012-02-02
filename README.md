init
====

inicialize google charts

``` jinja
<head>
...
{{ init_chart() }}
</head>
```

usage
=====

in controller:

``` php
<?php

$pie = new Pie('pizza')
$pie->setRows(array(
    array('Mushrooms', 3),
    array('Onions', 1),
    array('Olives', 1),
    array('Zucchini', 1),
    array('Pepperoni', 2),
));
$pie->setOptions(array(
    'title' => 'How Much Pizza I Ate Last Night',
    'width' => 400,
    'height' => 300,
));
```

in template:

``` jinja
{{ render_chart(pie) }}
```

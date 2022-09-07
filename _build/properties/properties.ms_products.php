<?php

$properties = array();

$tmp = array(
    'tpl' => array(
        'type' => 'textfield',
        'value' => 'tpl.msProducts.row',
    ),
    'limit' => array(
        'type' => 'numberfield',
        'value' => 10,
    ),
    'offset' => array(
        'type' => 'numberfield',
        'value' => 0,
    ),
    'depth' => array(
        'type' => 'numberfield',
        'value' => 10,
    ),
    'sortby' => array(
        'type' => 'textfield',
        'value' => 'id',
    ),
    'sortbyOptions' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'sortdir' => array(
        'type' => 'list',
        'options' => array(
            array('text' => 'ASC', 'value' => 'ASC'),
            array('text' => 'DESC', 'value' => 'DESC'),
        ),
        'value' => 'ASC',
    ),
    'toPlaceholder' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'toSeparatePlaceholders' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'showLog' => array(
        'type' => 'combo-boolean',
        'value' => false,
    ),
    'parents' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'resources' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'includeContent' => array(
        'type' => 'combo-boolean',
        'value' => false,
    ),
    'includeTVs' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'includeThumbs' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'optionFilters' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'where' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'link' => array(
        'type' => 'numberfield',
        'value' => '',
    ),
    'master' => array(
        'type' => 'numberfield',
        'value' => '',
    ),
    'slave' => array(
        'type' => 'numberfield',
        'value' => '',
    ),
    'tvPrefix' => array(
        'type' => 'textfield',
        'value' => '',
    ),
    'outputSeparator' => array(
        'type' => 'textfield',
        'value' => "\n",
    ),
    'returnIds' => array(
        'type' => 'combo-boolean',
        'value' => false,
    ),
    'return' => array(
        'type' => 'textfield',
        'value' => 'data',
    ),
    'showUnpublished' => array(
        'type' => 'combo-boolean',
        'value' => false,
    ),
    'showDeleted' => array(
        'type' => 'combo-boolean',
        'value' => false,
    ),
    'showHidden' => array(
        'type' => 'combo-boolean',
        'value' => true,
    ),
    'showZeroPrice' => array(
        'type' => 'combo-boolean',
        'value' => true,
    ),
    'wrapIfEmpty' => array(
        'type' => 'combo-boolean',
        'value' => true,
    ),
);

foreach ($tmp as $k => $v) {
    $properties[] = array_merge(array(
        'name' => $k,
        'desc' => 'ms2_prop_' . $k,
        'lexicon' => 'minishop2:properties',
    ), $v);
}

return $properties;

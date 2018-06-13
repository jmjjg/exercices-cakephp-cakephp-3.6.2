<?php
use Translator\Utility\Translator;

$this->Html->css('Helpers.extra', ['block' => true]);

$this->ResultsSet->config(
    'messages',
    [
        'first' => __m('<< first'),
        'prev' => __m('<< Previous'),
        'next' => __m('Next >>'),
        'last' => __m('last >>'),
        'empty' => __m('No record was found'),
        'counter' => __m('Page {{page}} out of {{pages}}, showing {{current}} records out of {{count}}')
    ]
);

$translatorParams = (array)isset($translatorParams) === true ? $translatorParams : [];
$translatedPaths = $this->Translator->index($paths, $translatorParams);
echo $this->ResultsSet->index($results, $translatedPaths);

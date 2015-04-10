<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->notName('README.md')
    ->notName('composer.*')
    ->exclude('build')
    ->exclude('vendor')
    ->exclude('.scrutinizer.yml')
    ->exclude('.travis.yml')
    ->exclude('phpcs.xml')
    ->exclude('phpspec.hhvm.xml')
    ->exclude('phpspec.xml')
    ->exclude('.php_cs')
    ->in(__DIR__)
;

if (file_exists(__DIR__.'/local.php_cs')) {
    require __DIR__.'/local.php_cs';
}

return Symfony\CS\Config\Config::create()
    // use default SYMFONY_LEVEL and extra fixers:
    ->fixers(
        [
            '-yoda_conditions',
            'ordered_use',
            'short_array_syntax',
            'strict',
            'strict_param',
            '-no_empty_lines_after_phpdocs',
            'header_comment',
        ]
    )
    ->finder($finder);

<?php
use Nette\Forms\Container;
use Nextras\Forms\Controls;

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;

$configurator->setDebugMode(false);
$configurator->enableDebugger(__DIR__ . '/../log');

$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

Container::extensionMethod('addOptionList', function (Container $container, $name, $label = NULL, array $items = NULL) {
    return $container[$name] = new Controls\OptionList($label, $items);
});
Container::extensionMethod('addMultiOptionList', function (Container $container, $name, $label = NULL, array $items = NULL) {
    return $container[$name] = new Controls\MultiOptionList($label, $items);
});
Container::extensionMethod('addDatePicker', function (Container $container, $name, $label = NULL) {
    return $container[$name] = new Controls\DatePicker($label);
});
Container::extensionMethod('addDateTimePicker', function (Container $container, $name, $label = NULL) {
    return $container[$name] = new Controls\DateTimePicker($label);
});
Container::extensionMethod('addTypeahead', function(Container $container, $name, $label = NULL, $callback = NULL) {
    return $container[$name] = new Controls\Typeahead($label, $callback);
});

return $container;

<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1744222818,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.11',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80319,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [/var/www/calculate/vendor/larastan/larastan/bootstrap.php, /var/www/calculate/vendor/autoload.php, /var/www/calculate/bootstrap/app.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkModelAppends: true, level: 9, paths: [/var/www/calculate/app, /var/www/calculate/bootstrap, /var/www/calculate/config, /var/www/calculate/routes, /var/www/calculate/src], excludePaths: {analyseAndScan: [/var/www/calculate/storage/*, /var/www/calculate/bootstrap/cache/*, /var/www/calculate/routes/console.php], analyse: []}, tmpDir: /var/www/calculate/var/phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}]}',
  'analysedPaths' => 
  array (
    0 => '/var/www/calculate/app',
    1 => '/var/www/calculate/bootstrap',
    2 => '/var/www/calculate/config',
    3 => '/var/www/calculate/routes',
    4 => '/var/www/calculate/src',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/var/www/calculate/composer.lock' => '7a60fd26192590d94c3cc2160349f3fffb4ba097',
  ),
  'composerInstalled' => 
  array (
    '/var/www/calculate/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brick/math' => 
        array (
          'pretty_version' => '0.12.3',
          'version' => '0.12.3.0',
          'reference' => '866551da34e9a618e64a819ee1e01c20d8a588ba',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'clue/ndjson-react' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '392dc165fce93b5bb5c637b67e59619223c931b0',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../clue/ndjson-react',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'colinodell/json5' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => '5724d21bc5c910c2560af1b8915f0cc0163579c8',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../colinodell/json5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'reference' => 'b2bed4734f0cc156ee1fe9c0da2550420d99a21e',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.3',
          'version' => '3.4.3.0',
          'reference' => '4313d26ada5e0c4edfbd1dc481a92ff7bff91f12',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.5',
          'version' => '3.0.5.0',
          'reference' => '6c1925561632e83d60a44492e0b344cf48ab85ef',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.10',
          'version' => '2.0.10.0',
          'reference' => '5817d0659c5b50c9b950feb9af7b9668e2c436bc',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '8c784d071debd117328803d86b2097615b457500',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'evenement/evenement' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '0a16b0d71ab13284339abb99d9d2bd813640efbc',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../evenement/evenement',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.2.0',
          'version' => '1.2.0.0',
          'reference' => '8520451a140d3f46ac33042715115e290cf5785f',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.0',
          'version' => '2.18.0.0',
          'reference' => 'a7de6c3c6c3c022f5cfc337f8ede6a14460cf77e',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'friendsofphp/php-cs-fixer' => 
        array (
          'pretty_version' => 'v3.75.0',
          'version' => '3.75.0.0',
          'reference' => '399a128ff2fdaf4281e4e79b755693286cdf325c',
          'type' => 'application',
          'install_path' => '/var/www/calculate/vendor/composer/../friendsofphp/php-cs-fixer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.9.3',
          'version' => '7.9.3.0',
          'reference' => '7b2f29fe81dc4da0ca0ea7d42107a0845946ea77',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '7c69f28996b0a6920945dd20b3857e499d9ca96c',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.7.1',
          'version' => '2.7.1.0',
          'reference' => 'c2270caaabe631b3b44c85f99e5a04bbb8060d16',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.4',
          'version' => '1.0.4.0',
          'reference' => '30e286560c137526eccd4ce21b2de477ab0676d2',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.6',
          'version' => '0.6.0.0',
          'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.8.1',
          ),
        ),
        'infection/abstract-testframework-adapter' => 
        array (
          'pretty_version' => '0.5.0',
          'version' => '0.5.0.0',
          'reference' => '18925e20d15d1a5995bb85c9dc09e8751e1e069b',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../infection/abstract-testframework-adapter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'infection/extension-installer' => 
        array (
          'pretty_version' => '0.1.2',
          'version' => '0.1.2.0',
          'reference' => '9b351d2910b9a23ab4815542e93d541e0ca0cdcf',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/calculate/vendor/composer/../infection/extension-installer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'infection/include-interceptor' => 
        array (
          'pretty_version' => '0.2.5',
          'version' => '0.2.5.0',
          'reference' => '0cc76d95a79d9832d74e74492b0a30139904bdf7',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../infection/include-interceptor',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'infection/infection' => 
        array (
          'pretty_version' => '0.29.14',
          'version' => '0.29.14.0',
          'reference' => 'feea2a48a8aeedd3a4d2105167b41a46f0e568a3',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../infection/infection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'infection/mutator' => 
        array (
          'pretty_version' => '0.4.0',
          'version' => '0.4.0.0',
          'reference' => '51d6d01a2357102030aee9d603063c4bad86b144',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../infection/mutator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'justinrainbow/json-schema' => 
        array (
          'pretty_version' => '6.4.1',
          'version' => '6.4.1.0',
          'reference' => '35d262c94959571e8736db1e5c9bc36ab94ae900',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../justinrainbow/json-schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.3.1',
          'version' => '3.3.1.0',
          'reference' => '58bee8be51daf12d78ed0a909be3b205607d2f27',
          'type' => 'phpstan-extension',
          'install_path' => '/var/www/calculate/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.8.1',
          'version' => '12.8.1.0',
          'reference' => 'd1ea3566f6e0cad34834c6d18db0bf995438eb87',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.5',
          'version' => '0.3.5.0',
          'reference' => '57b8f7efe40333cdb925700891c7d7465325d3b1',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.41.0',
          'version' => '1.41.0.0',
          'reference' => 'fe1a4ada0abb5e4bd99eb4e4b0d87906c00cdeec',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'b352cf0534aa1ae6b4d825d1e762e35d43f8a841',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.10.1',
          'version' => '2.10.1.0',
          'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.6.1',
          'version' => '2.6.1.0',
          'reference' => 'd990688c91cedfb69753ffc2512727ec646df2ad',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.29.1',
          'version' => '3.29.1.0',
          'reference' => 'edc1bb7c86fab0776c3287dbd19b5fa278347319',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.29.0',
          'version' => '3.29.0.0',
          'reference' => 'e0e8d52ce4b2ed154148453d321e97c8e931bd27',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.5.1',
          'version' => '7.5.1.0',
          'reference' => '81fb5145d2644324614cc532b28efd0215bda430',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.5.0',
          'version' => '7.5.0.0',
          'reference' => '08cfc6c4f3d811584fb09c37e2849e6a7f9b0742',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'marc-mabe/php-enum' => 
        array (
          'pretty_version' => 'v4.7.1',
          'version' => '4.7.1.0',
          'reference' => '7159809e5cfa041dca28e61f7f7ae58063aae8ed',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../marc-mabe/php-enum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.0',
          'version' => '1.13.0.0',
          'reference' => '024473a478be9df5fdaca2c793f2232fe788e414',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '6d16a8a015166fe54e22c042e0805c5363aef50d',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.2',
          'version' => '1.3.2.0',
          'reference' => 'da801d52f0354f70a638673c4a0f04e16529431d',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.6',
          'version' => '4.0.6.0',
          'reference' => 'ce708655043c7050eb050df361c5e313cf708309',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.4.0',
          'version' => '5.4.0.0',
          'reference' => '447a020a1f875a434d62f2a401f53b82a396e494',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.8.0',
          'version' => '8.8.0.0',
          'reference' => '4cf9f3b47afff38b139fb79ce54fc71799022ce8',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '52915afe6a1044e8b9cee1bcff836fb63acf9cda',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ondram/ci-detector' => 
        array (
          'pretty_version' => '4.2.0',
          'version' => '4.2.0.0',
          'reference' => '8b0223b5ed235fd377c75fdd1bfcad05c0f168b8',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../ondram/ci-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.3',
          'version' => '1.9.3.0',
          'reference' => 'e3fac8b24f56113f7cb96af14958c0dd16330f54',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.11',
          'version' => '2.1.11.0',
          'reference' => '8ca5f79a8f63c49b2359065832a654e1ec70ac30',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-phpunit' => 
        array (
          'pretty_version' => '2.0.6',
          'version' => '2.0.6.0',
          'reference' => '6b92469f8a7995e626da3aa487099617b8dfa260',
          'type' => 'phpstan-extension',
          'install_path' => '/var/www/calculate/vendor/composer/../phpstan/phpstan-phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.9',
          'version' => '11.0.9.0',
          'reference' => '14d63fbcca18457e49c6f8bebaa91a87e8e188d7',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.17',
          'version' => '11.5.17.0',
          'reference' => 'fd2e863a2995cdfd864fb514b5e0b28b09895b5c',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.8',
          'version' => '0.12.8.0',
          'reference' => '85057ceedee50c49d4f6ecaff73ee96adb3b3625',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.7.6',
          'version' => '4.7.6.0',
          'reference' => '91039bc1faa45ba123c4328958e620d382ec7088',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'react/cache' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'd47c472b64aa5608225f47965a484b75c7817d5b',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../react/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/child-process' => 
        array (
          'pretty_version' => 'v0.6.6',
          'version' => '0.6.6.0',
          'reference' => '1721e2b93d89b745664353b9cfc8f155ba8a6159',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../react/child-process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/dns' => 
        array (
          'pretty_version' => 'v1.13.0',
          'version' => '1.13.0.0',
          'reference' => 'eb8ae001b5a455665c89c1df97f6fb682f8fb0f5',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../react/dns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/event-loop' => 
        array (
          'pretty_version' => 'v1.5.0',
          'version' => '1.5.0.0',
          'reference' => 'bbe0bd8c51ffc05ee43f1729087ed3bdf7d53354',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../react/event-loop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/promise' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '8a164643313c71354582dc850b42b33fa12a4b63',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../react/promise',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/socket' => 
        array (
          'pretty_version' => 'v1.16.0',
          'version' => '1.16.0.0',
          'reference' => '23e4ff33ea3e160d2d1f59a0e6050e4b0fb0eac1',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../react/socket',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/stream' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '1e5b0acb8fe55143b5b426817155190eb6f5b18d',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../react/stream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.7.6',
          ),
        ),
        'sanmai/later' => 
        array (
          'pretty_version' => '0.1.4',
          'version' => '0.1.4.0',
          'reference' => 'e24c4304a4b1349c2a83151a692cec0c10579f60',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sanmai/later',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sanmai/pipeline' => 
        array (
          'pretty_version' => '6.12',
          'version' => '6.12.0.0',
          'reference' => 'ad7dbc3f773eeafb90d5459522fbd8f188532e25',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sanmai/pipeline',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.1',
          'version' => '6.3.1.0',
          'reference' => '24b8fbc2c8e201bb1308e7b05148d6ab393b6959',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.0',
          'version' => '7.2.0.0',
          'reference' => '855f3ae0ab316bbafe1ba4e16e9f3c078d24a0c5',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.0',
          'version' => '6.3.0.0',
          'reference' => '3473f61172093b2da7de1fb5782e1f24cc036dc3',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => '694d156164372abbd149a4b85ccda2e4670c0e16',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.2',
          'version' => '5.1.2.0',
          'reference' => 'a8a7e30534b0eb0c77cd9d07e82de1a114389f5e',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => 'b81435fbd6648ea425d1ee96a2d8e68f4ceacd24',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => 'e51498ea18570c062e7df29d05a7003585b19b88',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '601a5ce9aaad7bf10797e3663faefce9e26c24e2',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '74c71c939a79f7d5bf3c1ce9f5ea37ba0114c6f6',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '102be5e6a8e4f4f3eb3149bcbfa33a80d1ee374b',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '910c5db85a5356d0fea57680defec4e99eb9c8c1',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '7642f5e970b672283b7823222ae8ef8bbc160b9f',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => 'b8dce482de9d7c9fe2891155035a7248ab5c7fdb',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.2.2',
          'version' => '7.2.2.0',
          'reference' => '87a71856f2f56e4100373e92529eed3171695cfb',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '371272aeb6286f8135e028ca535f8e4d6f114126',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => 'b1fe91bc1fa454a806d3f98db4ba826eb9941a54',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'f3871b182c44997cf039f3b462af4a48fb85f9d3',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '87ca22046b78c3feaff04b337f33b38510fd686b',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '7da8fbac9dcfef75ffc212235d76b2754ce0cf50',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'b9123926e3b7bc2f98c02ad54f6a4b02b91a8abe',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => 'c36586dcf89a12315939e00ec9b4474adcb1d773',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '85181ba99b2345b0ef10ce42ecac37612d9fd341',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '60328e362d4c2c802a54fcbf04f9d3fb892b4cf8',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '2fb86d65e2d424369ad2905e83b236a8805ba491',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.31.0',
          'version' => '1.31.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '87b7c93e57df9d8e39a093d32587702380ff045d',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => 'ee9a67edc6baa33e5fae662f94f91fd262930996',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => 'e53260aabf78fb3d63f8d79d69ece59f80d5eda0',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/stopwatch' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '5a49289e2b308214c8b9c2fda4ea454d8b8ad7cd',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/stopwatch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '446e0d146f991dde3e73f45f2c97a9faad773c82',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.2.4',
          'version' => '7.2.4.0',
          'reference' => '283856e6981286cc0d800b53bd5703e8e363f05a',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '4667ff3bd513750603a09c8dedbea942487fb07c',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.2.0',
          'version' => '7.2.0.0',
          'reference' => '2d294d0c48df244c71c105a169d0190bfb080426',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.2.3',
          'version' => '7.2.3.0',
          'reference' => '82b478c69745d8878eb60f9a049a4d584996f73a',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '4c4b6f4cfcd7e52053f0c8bfad0f7f30fb924912',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'thecodingmachine/safe' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '22ffad3248982a784f9870a37aeb2e522bd19645',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../thecodingmachine/safe',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.1',
          'version' => '5.6.1.0',
          'reference' => 'a59a13791077fe3d44f90e7133eb68e7d22eaff2',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => '/var/www/calculate/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/var/www/calculate/bootstrap/app.php' => 'ccc1e776e0750606fdd4174538627e05c9527811',
    '/var/www/calculate/vendor/autoload.php' => '5c8ba7a6cf799a386f24cdafc4696ca693a24b18',
    '/var/www/calculate/vendor/larastan/larastan/bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar:///var/www/calculate/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///var/www/calculate/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///var/www/calculate/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///var/www/calculate/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'calendar',
    10 => 'ctype',
    11 => 'curl',
    12 => 'date',
    13 => 'dom',
    14 => 'exif',
    15 => 'fileinfo',
    16 => 'filter',
    17 => 'ftp',
    18 => 'gd',
    19 => 'gettext',
    20 => 'hash',
    21 => 'iconv',
    22 => 'igbinary',
    23 => 'imagick',
    24 => 'intl',
    25 => 'json',
    26 => 'libxml',
    27 => 'mbstring',
    28 => 'mysqli',
    29 => 'mysqlnd',
    30 => 'openssl',
    31 => 'pcntl',
    32 => 'pcre',
    33 => 'pdo_mysql',
    34 => 'pdo_sqlite',
    35 => 'posix',
    36 => 'random',
    37 => 'readline',
    38 => 'redis',
    39 => 'session',
    40 => 'shmop',
    41 => 'soap',
    42 => 'sockets',
    43 => 'sodium',
    44 => 'sqlite3',
    45 => 'standard',
    46 => 'sysvmsg',
    47 => 'sysvsem',
    48 => 'sysvshm',
    49 => 'tokenizer',
    50 => 'xml',
    51 => 'xmlreader',
    52 => 'xmlwriter',
    53 => 'xsl',
    54 => 'zip',
    55 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '9',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/var/www/calculate/app/Http/Controllers/CardControllers.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Http\\Controllers\\CardControllers::$viewFactory is never read, only written.',
       'file' => '/var/www/calculate/app/Http/Controllers/CardControllers.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/app/Http/Controllers/CardControllers.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/developing-extensions/always-read-written-properties',
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\ClassPropertiesNode',
       'identifier' => 'property.onlyWritten',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unreachable statement - code above always terminates.',
       'file' => '/var/www/calculate/app/Http/Controllers/CardControllers.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/app/Http/Controllers/CardControllers.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PHPStan\\Node\\UnreachableStatementNode',
       'identifier' => 'deadCode.unreachable',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/config/app.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $string of function explode expects string, bool|string given.',
       'file' => '/var/www/calculate/config/app.php',
       'line' => 103,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/config/app.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 103,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/config/cache.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $title of static method Illuminate\\Support\\Str::slug() expects string, bool|string given.',
       'file' => '/var/www/calculate/config/cache.php',
       'line' => 103,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/config/cache.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 103,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/config/database.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $title of static method Illuminate\\Support\\Str::slug() expects string, bool|string given.',
       'file' => '/var/www/calculate/config/database.php',
       'line' => 146,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/config/database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 146,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/config/logging.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $string of function explode expects string, bool|string given.',
       'file' => '/var/www/calculate/config/logging.php',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/config/logging.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 55,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/config/mail.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $url of function parse_url expects string, bool|string given.',
       'file' => '/var/www/calculate/config/mail.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/config/mail.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/config/session.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $title of static method Illuminate\\Support\\Str::slug() expects string, bool|string given.',
       'file' => '/var/www/calculate/config/session.php',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/config/session.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 131,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property object::$card_id.',
       'file' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property object::$name.',
       'file' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property object::$issuer.',
       'file' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 42,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property object::$annual_fee.',
       'file' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property object::$interest_rate.',
       'file' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 44,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property object::$clickout_url.',
       'file' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 45,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Core\\Cards\\Application\\CreditCardFactory::buildFeatures() has parameter $features with no value type specified in iterable type array.',
       'file' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'line' => 90,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 90,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCardRequest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCardRequest::search() return type has no value type specified in iterable type array.',
       'file' => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCardRequest.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCardRequest.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 22,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface::buildFeatures() has parameter $features with no value type specified in iterable type array.',
       'file' => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 44,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/CreditCard.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Core\\Cards\\Domain\\CreditCard::annualFee() is unused.',
       'file' => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
       'line' => 67,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PHPStan\\Node\\ClassMethodsNode',
       'identifier' => 'method.unused',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Core\\Cards\\Domain\\CreditCard::setAnnualFee() is unused.',
       'file' => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
       'line' => 72,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PHPStan\\Node\\ClassMethodsNode',
       'identifier' => 'method.unused',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Core\\Cards\\Domain\\CreditCard::interestRate() is unused.',
       'file' => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
       'line' => 79,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PHPStan\\Node\\ClassMethodsNode',
       'identifier' => 'method.unused',
       'metadata' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Core\\Cards\\Domain\\CreditCard::setInterestRate() is unused.',
       'file' => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PHPStan\\Node\\ClassMethodsNode',
       'identifier' => 'method.unused',
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $object of method Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface::buildCreditCardFromObject() expects object, mixed given.',
       'file' => '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot call method toArray() on object|null.',
       'file' => '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.nonObject',
       'metadata' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $columns of method Illuminate\\Database\\Query\\Builder::first() expects array|string, int given.',
       'file' => '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/var/www/calculate/app/Http/Controllers/CardControllers.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Controllers\\CardControllers',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'dd',
        1 => 24,
      ),
    ),
  ),
  '/var/www/calculate/app/Models/User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  '/var/www/calculate/routes/web.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 6,
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCard.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Application\\UseCases\\UseCaseService',
        1 => '__construct',
        2 => 19,
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCardRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Application\\UseCases\\Retrieve\\FindCreditCardRequest',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Application\\UseCases\\Retrieve\\FindCreditCardRequest',
        1 => 'id',
        2 => 'Core\\Cards\\Application\\UseCases\\Retrieve\\FindCreditCardRequest',
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCard.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Application\\UseCases\\UseCaseService',
        1 => '__construct',
        2 => 19,
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCardRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCardRequest',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCardRequest',
        1 => 'search',
        2 => 'Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCardRequest',
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/UseCaseService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Application\\UseCases\\UseCaseService',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/CreditCard.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Domain\\CreditCard',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Domain\\CreditCard',
        1 => 'id',
        2 => 'Core\\Cards\\Domain\\CreditCard',
      ),
      1 => 
      array (
        0 => 'Core\\Cards\\Domain\\CreditCard',
        1 => 'name',
        2 => 'Core\\Cards\\Domain\\CreditCard',
      ),
      2 => 
      array (
        0 => 'Core\\Cards\\Domain\\CreditCard',
        1 => 'issuer',
        2 => 'Core\\Cards\\Domain\\CreditCard',
      ),
      3 => 
      array (
        0 => 'Core\\Cards\\Domain\\CreditCard',
        1 => 'annualFee',
        2 => 'Core\\Cards\\Domain\\CreditCard',
      ),
      4 => 
      array (
        0 => 'Core\\Cards\\Domain\\CreditCard',
        1 => 'interestRate',
        2 => 'Core\\Cards\\Domain\\CreditCard',
      ),
      5 => 
      array (
        0 => 'Core\\Cards\\Domain\\CreditCard',
        1 => 'clickOutUrl',
        2 => 'Core\\Cards\\Domain\\CreditCard',
      ),
      6 => 
      array (
        0 => 'Core\\Cards\\Domain\\CreditCard',
        1 => 'features',
        2 => 'Core\\Cards\\Domain\\CreditCard',
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardAnnualFee.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Domain\\ValueObjects\\CardAnnualFee',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Domain\\ValueObjects\\CardAnnualFee',
        1 => 'value',
        2 => 'Core\\Cards\\Domain\\ValueObjects\\CardAnnualFee',
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardClickOutUrl.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
        1 => 'value',
        2 => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardFeatures.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Domain\\ValueObjects\\CardFeatures',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Domain\\ValueObjects\\CardFeatures',
        1 => 'value',
        2 => 'Core\\Cards\\Domain\\ValueObjects\\CardFeatures',
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardId.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
        1 => 'value',
        2 => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardInterestRate.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Domain\\ValueObjects\\CardInterestRate',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Domain\\ValueObjects\\CardInterestRate',
        1 => 'value',
        2 => 'Core\\Cards\\Domain\\ValueObjects\\CardInterestRate',
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardIssuer.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
        1 => 'value',
        2 => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardName.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
        1 => 'value',
        2 => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
      ),
    ),
  ),
  '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Infrastructure\\Persistence\\Repositories\\EloquentCreditCardRepository',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Core\\Cards\\Infrastructure\\Services\\CreditCardManager',
    ),
  ),
); },
	'dependencies' => array (
  '/var/www/calculate/app/Http/Controllers/CardControllers.php' => 
  array (
    'fileHash' => '5043e29adebffb82328a429b1308b34ce6dcea63',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/routes/web.php',
    ),
  ),
  '/var/www/calculate/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => 'b447659afe821a314a7117c6ce3df54178981d43',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/app/Http/Controllers/CardControllers.php',
      1 => '/var/www/calculate/routes/web.php',
    ),
  ),
  '/var/www/calculate/app/Models/User.php' => 
  array (
    'fileHash' => 'c50f26aca463d33fe7ba77e1cbc777153abeb9ad',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/config/auth.php',
    ),
  ),
  '/var/www/calculate/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '0dde0161782208e5b3db63e16dac7e2350f6dcd7',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/bootstrap/providers.php',
    ),
  ),
  '/var/www/calculate/bootstrap/app.php' => 
  array (
    'fileHash' => 'ccc1e776e0750606fdd4174538627e05c9527811',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/bootstrap/providers.php' => 
  array (
    'fileHash' => 'eed995ef205459a92c483d5e4f5bc1fed5ca7e67',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/config/app.php' => 
  array (
    'fileHash' => '601bf8a7662f2d8eeba1c10556b1b770f16bdf9d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/config/auth.php' => 
  array (
    'fileHash' => 'bb20825105f417ea7b1cfdd5790586549050badd',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/config/cache.php' => 
  array (
    'fileHash' => '631f7005a0b355fa499286b5d001bc2b0738f4c2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/config/database.php' => 
  array (
    'fileHash' => 'e83e37f616f77f7b7c7343687ea77eaf4ea7b67d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/config/filesystems.php' => 
  array (
    'fileHash' => '5b080b41943ede9fc4cb7eb54c1ca71a6016648d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/config/logging.php' => 
  array (
    'fileHash' => '4460ec2186cb2ee6c92bdcd37cd6b670364c5c46',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/config/mail.php' => 
  array (
    'fileHash' => 'bc9192eeeb8b0c272f4e93149186be9384dd787f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/config/queue.php' => 
  array (
    'fileHash' => '76ad546832b6827b26dabfee81bab0401b025aa7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/config/services.php' => 
  array (
    'fileHash' => '03086a4fe04271870a05b35706dbb3c8a209b5a8',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/config/session.php' => 
  array (
    'fileHash' => 'cc39655a54a37c2c6eeea8e8913f3b43539a2e87',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/routes/web.php' => 
  array (
    'fileHash' => '7e0a1d01f00087eee3be9b25e026d750a764d5ff',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php' => 
  array (
    'fileHash' => 'd6c0f4d854f415959df0c787bc6c5358f485aa23',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/app/Providers/AppServiceProvider.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/RequestServiceInterface.php' => 
  array (
    'fileHash' => '4e83d8190f7ce10fb0d9c23d7c55d9f0abc10d52',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCard.php',
      1 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCardRequest.php',
      2 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCard.php',
      3 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCardRequest.php',
      4 => '/var/www/calculate/src/core/Cards/Application/UseCases/UseCaseService.php',
      5 => '/var/www/calculate/src/core/Cards/Application/UseCases/UseCaseServiceInterface.php',
      6 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCard.php' => 
  array (
    'fileHash' => '8ba5b24308991b58b7a9c0cfac1bb3362ccb2123',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCardRequest.php' => 
  array (
    'fileHash' => 'c5b2651d3f35a46e088e8e2bd23f8b3a12766517',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCard.php',
      1 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCard.php' => 
  array (
    'fileHash' => '30670b3df313a894be41386ce1c2a6306ea07a6a',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCardRequest.php' => 
  array (
    'fileHash' => '28feeca234c3c6d681703c5e90c499e2ec94ed7a',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCard.php',
      1 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/UseCaseService.php' => 
  array (
    'fileHash' => '289cf171e2393fac0c2a5023bd2818298b43bade',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCard.php',
      1 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCard.php',
      2 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/UseCaseServiceInterface.php' => 
  array (
    'fileHash' => 'a6bab7c54ac0398e1663c8985086102d3e986aec',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCard.php',
      1 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCard.php',
      2 => '/var/www/calculate/src/core/Cards/Application/UseCases/UseCaseService.php',
      3 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php' => 
  array (
    'fileHash' => '623932f7d15beef2a84a60e117bd01760ae37e87',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/app/Providers/AppServiceProvider.php',
      1 => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
      2 => '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php',
      3 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardManagerInterface.php' => 
  array (
    'fileHash' => 'b67332fd5cdb032a82b9758a7b0cfe97cf34da46',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/app/Http/Controllers/CardControllers.php',
      1 => '/var/www/calculate/app/Providers/AppServiceProvider.php',
      2 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardRepositoryInterface.php' => 
  array (
    'fileHash' => '1cd61cfecaa2ee767fe84dcd6bae3381dc4c6a4d',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/app/Providers/AppServiceProvider.php',
      1 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCard.php',
      2 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCard.php',
      3 => '/var/www/calculate/src/core/Cards/Application/UseCases/UseCaseService.php',
      4 => '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/CreditCard.php' => 
  array (
    'fileHash' => '0b1fd6b0877871b90fae0041867a3ae9d7d64b33',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/app/Http/Controllers/CardControllers.php',
      1 => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
      2 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCard.php',
      3 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCard.php',
      4 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php',
      5 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardManagerInterface.php',
      6 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardRepositoryInterface.php',
      7 => '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php',
      8 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardAnnualFee.php' => 
  array (
    'fileHash' => 'ec270e998beb3cb07ec2a76cdd526a0dfbf42b72',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
      1 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php',
      2 => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardClickOutUrl.php' => 
  array (
    'fileHash' => 'ddaa38fbacf30ccbd5cd65f50f2b17ab2df92325',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
      1 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php',
      2 => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardFeatures.php' => 
  array (
    'fileHash' => '8818638605c64d93be61437548554c582fe13897',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
      1 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php',
      2 => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardId.php' => 
  array (
    'fileHash' => '8e2438aa415dc74baee31ac2c6ea32b6cf9f6c11',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
      1 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCard.php',
      2 => '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCardRequest.php',
      3 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php',
      4 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardRepositoryInterface.php',
      5 => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
      6 => '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php',
      7 => '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardInterestRate.php' => 
  array (
    'fileHash' => 'd93e948d5c34e8861aa96a3ee3293d6433631182',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
      1 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php',
      2 => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardIssuer.php' => 
  array (
    'fileHash' => '54538c42c1d4c39bd08f2be01c295671bcf5f91d',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
      1 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php',
      2 => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardName.php' => 
  array (
    'fileHash' => '9f2aeca593085d90ad605de60693edd6810e430c',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php',
      1 => '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php',
      2 => '/var/www/calculate/src/core/Cards/Domain/CreditCard.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php' => 
  array (
    'fileHash' => '8db411ffdbc34c2e2377f180c895aadcd15e2d9f',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/app/Providers/AppServiceProvider.php',
    ),
  ),
  '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php' => 
  array (
    'fileHash' => '6d4e6c6978295fb5c3982b7e7ef5d2b01a87421a',
    'dependentFiles' => 
    array (
      0 => '/var/www/calculate/app/Providers/AppServiceProvider.php',
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/var/www/calculate/app/Http/Controllers/CardControllers.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\CardControllers',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'viewFactory',
               'type' => 'Illuminate\\View\\Factory',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cardManager',
               'type' => 'Core\\Cards\\Domain\\Contracts\\CreditCardManagerInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'creditcardfactory' => 'Core\\Cards\\Application\\CreditCardFactory',
              'creditcardfactoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface',
              'creditcardmanagerinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardManagerInterface',
              'creditcardrepositoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
              'eloquentcreditcardrepository' => 'Core\\Cards\\Infrastructure\\Persistence\\Repositories\\EloquentCreditCardRepository',
              'creditcardmanager' => 'Core\\Cards\\Infrastructure\\Services\\CreditCardManager',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'creditcardfactory' => 'Core\\Cards\\Application\\CreditCardFactory',
              'creditcardfactoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface',
              'creditcardmanagerinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardManagerInterface',
              'creditcardrepositoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
              'eloquentcreditcardrepository' => 'Core\\Cards\\Infrastructure\\Persistence\\Repositories\\EloquentCreditCardRepository',
              'creditcardmanager' => 'Core\\Cards\\Infrastructure\\Services\\CreditCardManager',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Application/CreditCardFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Application\\CreditCardFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildIssuer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'issuer',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildCreditCardFromObject',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'object',
               'type' => 'object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildCreditCard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'issuer',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'annualFee',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardAnnualFee',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'interestRate',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardInterestRate',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'clickOutUrl',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildAnnualFee',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardAnnualFee',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'annualFee',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildClickOutUrl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildInterestRate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardInterestRate',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'interestRate',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildFeatures',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardFeatures',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'features',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/RequestServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCard.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\FindCreditCard',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Core\\Cards\\Application\\UseCases\\UseCaseService',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repository',
               'type' => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws \\Exception
     */',
             'namespace' => 'Core\\Cards\\Application\\UseCases\\Retrieve',
             'uses' => 
            array (
              'requestserviceinterface' => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
              'usecaseservice' => 'Core\\Cards\\Application\\UseCases\\UseCaseService',
              'creditcardrepositoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
              'creditcard' => 'Core\\Cards\\Domain\\CreditCard',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'requestService',
               'type' => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/FindCreditCardRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\FindCreditCardRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'id',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCard.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCard',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Core\\Cards\\Application\\UseCases\\UseCaseService',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repository',
               'type' => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<CreditCard>
     *
     * @throws \\Exception
     */',
             'namespace' => 'Core\\Cards\\Application\\UseCases\\Retrieve',
             'uses' => 
            array (
              'requestserviceinterface' => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
              'usecaseservice' => 'Core\\Cards\\Application\\UseCases\\UseCaseService',
              'creditcardrepositoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
              'creditcard' => 'Core\\Cards\\Domain\\CreditCard',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'requestService',
               'type' => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/Retrieve/GetCreditCardRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCardRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string> $search
     */',
             'namespace' => 'Core\\Cards\\Application\\UseCases\\Retrieve',
             'uses' => 
            array (
              'requestserviceinterface' => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'search',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'search',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/UseCaseService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Application\\UseCases\\UseCaseService',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Core\\Cards\\Application\\UseCases\\UseCaseServiceInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repository',
               'type' => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validateRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws \\Exception
     */',
             'namespace' => 'Core\\Cards\\Application\\UseCases',
             'uses' => 
            array (
              'creditcardrepositoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'requestClass',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Application/UseCases/UseCaseServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'Core\\Cards\\Application\\UseCases\\UseCaseServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'execute',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'mixed',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'requestService',
               'type' => 'Core\\Cards\\Application\\UseCases\\RequestServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardFactoryInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildCreditCardFromObject',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'object',
               'type' => 'object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildCreditCard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'issuer',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'annualFee',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardAnnualFee',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'interestRate',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardInterestRate',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'clickOutUrl',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildIssuer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'issuer',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildAnnualFee',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardAnnualFee',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'annualFee',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildClickOutUrl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildInterestRate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardInterestRate',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'interestRate',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildFeatures',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardFeatures',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'features',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardManagerInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\Contracts\\CreditCardManagerInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCreditCard',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<CreditCard>
     */',
             'namespace' => 'Core\\Cards\\Domain\\Contracts',
             'uses' => 
            array (
              'creditcard' => 'Core\\Cards\\Domain\\CreditCard',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findCreditCard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/Contracts/CreditCardRepositoryInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAll',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string> $search
     *
     * @return array<CreditCard>
     */',
             'namespace' => 'Core\\Cards\\Domain\\Contracts',
             'uses' => 
            array (
              'creditcard' => 'Core\\Cards\\Domain\\CreditCard',
              'cardid' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'search',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/CreditCard.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\CreditCard',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'issuer',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'annualFee',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardAnnualFee',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'interestRate',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardInterestRate',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'clickOutUrl',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'features',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardFeatures',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'id',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setId',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'name',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'issuer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setIssuer',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'issuer',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'clickOutUrl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setClickOutUrl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'clickOutUrl',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'features',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\ValueObjects\\CardFeatures',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setFeatures',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'features',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardFeatures',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardAnnualFee.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\ValueObjects\\CardAnnualFee',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'value',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardClickOutUrl.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\ValueObjects\\CardClickOutUrl',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'value',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardFeatures.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\ValueObjects\\CardFeatures',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string> $value
     */',
             'namespace' => 'Core\\Cards\\Domain\\ValueObjects',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'value',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string>
     */',
             'namespace' => 'Core\\Cards\\Domain\\ValueObjects',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardId.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'value',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardInterestRate.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\ValueObjects\\CardInterestRate',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'float',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'value',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'float',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardIssuer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\ValueObjects\\CardIssuer',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'value',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Domain/ValueObjects/CardName.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Domain\\ValueObjects\\CardName',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'value',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Infrastructure/Persistence/Repositories/EloquentCreditCardRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Infrastructure\\Persistence\\Repositories\\EloquentCreditCardRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'databaseManager',
               'type' => 'Illuminate\\Database\\DatabaseManager',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'cardFactory',
               'type' => 'Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAll',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string> $search
     *
     * @return array<CreditCard>
     */',
             'namespace' => 'Core\\Cards\\Infrastructure\\Persistence\\Repositories',
             'uses' => 
            array (
              'creditcardfactoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface',
              'creditcardrepositoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardRepositoryInterface',
              'creditcard' => 'Core\\Cards\\Domain\\CreditCard',
              'cardid' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
              'databasemanager' => 'Illuminate\\Database\\DatabaseManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'search',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'Core\\Cards\\Domain\\ValueObjects\\CardId',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/var/www/calculate/src/core/Cards/Infrastructure/Services/CreditCardManager.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Core\\Cards\\Infrastructure\\Services\\CreditCardManager',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Core\\Cards\\Domain\\Contracts\\CreditCardManagerInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'factory',
               'type' => 'Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'getCreditCard',
               'type' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCard',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'findCreditCard',
               'type' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\FindCreditCard',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCreditCard',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<CreditCard>
     *
     * @throws \\Exception
     */',
             'namespace' => 'Core\\Cards\\Infrastructure\\Services',
             'uses' => 
            array (
              'findcreditcard' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\FindCreditCard',
              'findcreditcardrequest' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\FindCreditCardRequest',
              'getcreditcard' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCard',
              'getcreditcardrequest' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCardRequest',
              'creditcardfactoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface',
              'creditcardmanagerinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardManagerInterface',
              'creditcard' => 'Core\\Cards\\Domain\\CreditCard',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findCreditCard',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws \\Exception
     */',
             'namespace' => 'Core\\Cards\\Infrastructure\\Services',
             'uses' => 
            array (
              'findcreditcard' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\FindCreditCard',
              'findcreditcardrequest' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\FindCreditCardRequest',
              'getcreditcard' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCard',
              'getcreditcardrequest' => 'Core\\Cards\\Application\\UseCases\\Retrieve\\GetCreditCardRequest',
              'creditcardfactoryinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardFactoryInterface',
              'creditcardmanagerinterface' => 'Core\\Cards\\Domain\\Contracts\\CreditCardManagerInterface',
              'creditcard' => 'Core\\Cards\\Domain\\CreditCard',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?Core\\Cards\\Domain\\CreditCard',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];

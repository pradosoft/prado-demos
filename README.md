# Prado PHP Framework - Demos

PRADO is a component-based and event-driven programming framework for developing Web applications in PHP 5 and 7.
PRADO stands for PHP Rapid Application Development Object-oriented.

This repo contains application demos for Prado4. 

Please refer to the main repository: https://github.com/pradosoft/prado for further informations.

# Prado website

The Prado website is actually one of the provided application demo, contained in the [site](https://github.com/pradosoft/prado-demos/tree/master/site) folder.
When installing the site application you may want to change the default values for the `DocsUrl` and `DemoUrl` parameters in [application.xml](https://github.com/pradosoft/prado-demos/blob/master/site/protected/application.xml):

```xml
		<module id="parameter" class="System.Util.TParameterModule">
			<!-- the site lives in the demos directory -->
			<parameter id="DocsUrl" value="http://pradosoft.github.io/docs" />
			<parameter id="DemoUrl" value=".." />
<!--
			<parameter id="DemoUrl" value="../demos" />			
-->
		</module>
```

# Prado quickstart

The Prado quickstart is the biggest bundled application providing a lot of static pages, component examples and source code.
Page content is searchable using an interface based on Zend Framework's [Lucene search](https://github.com/zf1/zend-search-lucene). A script is provided to rebuild the index, that must be run from inside the `quickstart/protected/index` directory:

```sh
cd quickstart/protected/index/
php QuickstartIndex.php 
Building search index...
... (trimmed)
 139 files indexed.
```

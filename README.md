# cs_maps_extended

Just an example extension. Based on go_maps_ext and news some extended functionality.

## Example of a Route Enhancer for categories

```yaml
  # @TODO: change limitToPages
  GoMapsExtPluginList:
    type: Extbase
    extension: GoMapsExt
    limitToPages:
      - 1
    plugin: Show
    routes:
      - routePath: '/{category-title}'
        _controller: 'Map::show'
        _arguments:
          category-title: 'category'
    defaultController: 'Map::show'
    aspects:
      category-title:
        type: PersistedPatternMapper
        tableName: sys_category
        routeFieldPattern: '^(?P<slug>.+)-(?P<uid>\d+)$'
        routeFieldResult: '{slug}-{uid}'
```

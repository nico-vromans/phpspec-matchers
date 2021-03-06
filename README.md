# PhpSpec extension that adds custom Matchers
## Installation
Simply install via Composer: 
```
composer require nico-vromans/phpspec-matchers
```

After that, add the extension to you `phpspec.yml`:
```yaml
extensions:
    NicoVromans\PhpSpecMatchers\Extension: ~
```

## Matchers and how to use them
### `beFinal()`
This checks if the tested class is a final class.

To test if a class is final:
```php
$this->shouldBeFinal();
```

or if a class is not final:

```php
$this->shouldNotBeFinal();
```

## Extra info
For more info on custom extensions, check out PhpSpec's [Extensions manual](http://www.phpspec.net/en/stable/cookbook/extensions.html). For some more examples look at the [Example extensions](http://www.phpspec.net/en/stable/cookbook/extensions.html#example-extensions) section.

## License
GNU General Public License v3.0, check [LICENSE](LICENSE) for more information.

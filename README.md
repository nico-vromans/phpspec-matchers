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

If you also use a code coverage package (for example [leanphp/phpspec-code-coverage](https://packagist.org/packages/leanphp/phpspec-code-coverage)), you might want to exclude this extension to not lower your coverage. Just add the following snippet to the code coverage config in your `phpspec.yml`:
```yaml
    blacklist:
      - src/PhpSpecMatchers
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

## License
GNU General Public License v3.0, check [LICENSE](LICENSE) for more information.

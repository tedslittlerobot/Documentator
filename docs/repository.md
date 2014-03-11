Documentor:: Repository
=======================

To make multiple styles / formatters easier to manage across an application, there is a `Repository` class where you can store and access them.

```php
$repo = new Documentor\Repository;

// you can add a format to the repository explicitly like so
$repo->add( 'plaintext', 'Documentor\PlainOutputRenderer' );

// then retrieve it later
$repo->format( 'plaintext' );
```

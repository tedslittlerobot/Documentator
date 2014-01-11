Documentor:: Repository
=======================

To make multiple styles / formatters easier to manage across an application, there is a `Repository` class where you can store and access them.

    :::php
    $repo = new Documentor\Repository;

    // you can add a format to the repository explicitly like so
    $repo->add( 'plaintext', 'Documentor\PlainOutputRenderer' );

    // then retrieve it later
    $repo->format( 'plaintext' );

    // you can also use the format method to add a preset if it doesn't already exist
    $repo->format( 'markdown', 'Documentor\MarkdownOutputRenderer', array() );

You can use php's magic __call method as a shortcut to that:

    :::php
    $repo->plain;
      # returns $repo->format('plain')

    $repo->unicorns( 'Documentor\UnicornOutputRenderer', array() );
      # returns $repo->format('unicorns', 'Documentor\UnicornOutputRenderer', array())

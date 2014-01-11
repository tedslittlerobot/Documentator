Documentor:: Laravel
====================

#### Setup

- Add `Documentor\Laravel\DocumentorServiceProvider` to the `providers` array in `app.php`.
- For convenience, you can also add the following to the `aliases` array:

    :::php
    'Document'        => 'Documentor\Laravel\Facades\Document',

#### Config

To set up some presets, you can add a `documents.php` to your `config` directory. It should contain an array of config arrays, formatted like so:

    :::php
    <?php

		/**
		 * Document Format Presets
		 */

    return array(
			'plain' => array(
				'class' => 'Documentor\PlainOutputRenderer',
				'options' => array(),
			),
			'markdown' => array(
				'class' => 'Documentor\MarkdownOutputRenderer',
				'options' => array(),
			),
			'colourful' => array(
				'class' => 'Documentor\ColourfulOutputRenderer',
				'options' => array(),
			),
    );

#### Usage

The `Document` facade is a shortcut to `Documentor\Laravel\Repository`, which is a subclass of `Documentor\Repository` (it has been subclassed to use Laravel's IOC container to resolve new classes).

Here's some example usage, using the above config:

    :::php
    Document::markdown()->format( $document );

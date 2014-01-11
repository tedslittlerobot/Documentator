Documentor:: Structure
======================

#### Data Structure

The Structure of a document is simple:

    Document  --has many->  Chapters  --has many->  Sections

These three models can have various peices of data associated with them:
- title: the title of a document, chapter or section
- content: section content will be the bulk of most documents. Document and Chapter content could be for an intro, prefix or blurb

Each content type can also have additional data associated with it, for example, documents also have an author.

#### Formatter

The formatter is the main class of the application

I'm split as to whether or not it should be split into three classes. If an implementation is getting too unruly, it can serve as a factory / manager, and distribute the rendering to separate classes

I want to come up with a way to make some more formal options - ie. so that it is not dependant on someone remembering that they have to implement chapter numbers, but that they can just format or filter the page numbers.
That way, the options would be more rigid / formal, and it wouldn't be such an epic task to move to a different formatter

Documentor:: Structure
======================

#### Data Structure

The Structure of a document is simple:

    Document  --has many-->  Chapters  --has many-->  Sections

These three models can have various peices of data associated with them:
- title: the title of a document, chapter or section
- content: section content will be the bulk of most documents. Document and Chapter content could be for an intro, prefix or blurb

Each content type can also have additional data associated with it, for example, documents also have an author.

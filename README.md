a JS Tetris experiment
==========================

This is just something made for fun and experimentation.

jQuery is used for the selectors, and `$.extend` (for cloning objects).

The `index.php` file is used to generate the HTML for the game - `index.html` is
an already generated version (literally copy-pasted from the PHP output, except
for relative paths for the style and script), in case someone wants to try and
run this without setting up a new website.

The basic game is surprisingly easy to implement, so I'll mostly be playing
around with the architecture and the user interface. Oh, there's a lot of work
on the architecture, since I was just trying to throw something together, so I
haven't put much though into it beforehand.

The CSS is generated from an SCSS file where it's easy to control settings like
the game size, the colors, etc.

Due to known non-optimized code, it currently only works smoothly under Chrome,
but this will be fixed in the future.

Released under no license for now - just do what you want with it. Eventually,
I'll get around to reading about that stuff and put some *free*ish license.

A playable version is available online at http://js-tetris.levacic.net


To-Do
-----

* Standardize the block starting positions
* Do some sane refactoring

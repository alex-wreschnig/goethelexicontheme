# The Goethe-Lexicon Theme for OJS 3+

A child theme developed for the Goethe-Lexicon, inheriting the Bootstrap 3 theme.

## Installation

1. This theme has been developed for OJS 3.1.2, and has not been tested with other versions of OJS or the Bootstrap 3 theme. We recommend installing this theme on OJS 3.1.2, and installing the stable-3_1_2 branch of the Bootstrap 3 theme. [The Bootstrap 3 theme is available here](https://github.com/NateWr/bootstrap3). Follow the instructions in that repository to complete the installation. 
2. Download the [latest release of the Goethe-Lexicon theme here](https://github.com/ulsdevteam/goethelexicontheme).
3. Unpack the .zip file and move the `goethelexicontheme` directory to your OJS installation at `/plugins/themes/goethelexicontheme`.
4. Login to the admin area of your OJS website. Browse to the `Settings` > `Website` > `Plugins` page and enable the Goethe-Lexicon theme.
5. Browse to the `Settings` > `Website` > `Appearance` page and select Goethe-Lexicon from the theme option and save your change.

You can now see the Goethe-Lexicon theme on your website.

## Inheriting Options from Bootstrap

As of the time of this writing, the choices made in the Bootstrap theme will influence the Goethe-Lexicon theme, because the Goethe-Lexicon is a child-theme of the Bootstrap theme and inherits its styles and options. The Goethe-Lexicon itself is built on top of the Clean Blog styles included in the Bootstrap theme. To include those styles, set OJS to use the Bootstrap theme on the `Settings` > `Website` > `Appearance` page, set Bootstrap to use Clean Blog, and save. Then, switch OJS to use the Goethe-Lexicon theme.

## Version Compatibility

The Goethe-Lexicon theme is currently intended for OJS 3.1.2, and is based on the stable-3.1.2 branch of the Bootstrap theme. It has not been tested with other versions of OJS or the Bootstrap 3 theme. Some versions of the Bootstrap3 theme are only compatible with certain releases of OJS.

## Contributions

Development of this theme was performed at [the University Library System of the University of Pittsburgh](https://library.pitt.edu).

Thanks to our contributors:
- Alex Wreschnig, @alex-wreschnig ([University of Pittsburgh](https://library.pitt.edu))
- Brian Klausmeyer, [Goethe-Lexicon](https://goethe-lexicon.pitt.edu/GL/index) and Virginia Tech


## License
This theme is released under the GPL license and relies on content from [the Bootstrap 3 theme](https://github.com/NateWr/bootstrap3).

The following fonts are distributed under the terms of the [Open Font License](https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL):

- Lato
- News Cycle
- Raleway
- Source Sans Pro

The following fonts are distributed under the terms of the [Apache License, 2.0](http://www.apache.org/licenses/LICENSE-2.0):

- Open Sans
- Roboto

The Ubuntu font is distributed under the terms of the [Ubuntu Font License](http://font.ubuntu.com/ufl/).
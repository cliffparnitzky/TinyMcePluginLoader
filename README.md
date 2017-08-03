[![Latest Version on Packagist](http://img.shields.io/packagist/v/cliffparnitzky/tiny-mce-plugin-loader.svg?style=flat)](https://packagist.org/packages/cliffparnitzky/tiny-mce-plugin-loader)
[![Installations via composer per month](http://img.shields.io/packagist/dm/cliffparnitzky/tiny-mce-plugin-loader.svg?style=flat)](https://packagist.org/packages/cliffparnitzky/tiny-mce-plugin-loader)
[![Installations via composer total](http://img.shields.io/packagist/dt/cliffparnitzky/tiny-mce-plugin-loader.svg?style=flat)](https://packagist.org/packages/cliffparnitzky/tiny-mce-plugin-loader)

Contao Extension: TinyMcePluginLoader
=====================================

Special extension that will load additional TinyMCE plugins (check out the available plugins: [here](#plugins)).

Now for TinyMCE 4.


Installation
------------

Install the extension via composer: [cliffparnitzky/tiny-mce-plugin-loader](https://packagist.org/packages/cliffparnitzky/tiny-mce-plugin-loader).

If you prefer to install it manually, download the latest release here: https://github.com/cliffparnitzky/TinyMcePluginLoader/releases



Tracker
-------

https://github.com/cliffparnitzky/TinyMcePluginLoader/issues


Compatibility
-------------

- Contao version >= 3.3.0 ... <  3.6.0
- Contao version >= 4.4.0


Dependency
----------

- There are no dependencies to other extensions, that have to be installed.


Components
----------

![Components](components.png)


### Plugins

These are the currently integrated plugins and their respective availability status. The plugins must be installed separately, either individually or via [bundle](#bundles).

| Plugin                                                                               | Contao 3.2 compatible                                                                    | Contao 3.5 compatible                                                             | Contao 4.4 compatible                                                             |
| ------------------------------------------------------------------------------------ | :--------------------------------------------------------------------------------------: | :-------------------------------------------------------------------------------: | :------------------------------------------------------------------------------: |
| [TinyMceAdvancedList](https://github.com/cliffparnitzky/TinyMceAdvancedList)         | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceAnchor](https://github.com/cliffparnitzky/TinyMceAnchor)                     | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceCodeMirror](https://github.com/cliffparnitzky/TinyMceCodeMirror)             | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceColorpicker](https://github.com/cliffparnitzky/TinyMceColorpicker)           | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceContextMenu](https://github.com/cliffparnitzky/TinyMceContextMenu)           | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceEmoticons](https://github.com/cliffparnitzky/TinyMceEmoticons)               | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) | 
| [TinyMceFontAwesome](https://github.com/cliffparnitzky/TinyMceFontAwesome)           | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceGoogleMaps](https://github.com/cliffparnitzky/TinyMceGoogleMaps)             | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceHorizontalRuler](https://github.com/cliffparnitzky/TinyMceHorizontalRuler)   | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) | 
| [TinyMceImageEnhancement](https://github.com/cliffparnitzky/TinyMceImageEnhancement) | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) | 
| [TinyMceInsertDateTime](https://github.com/cliffparnitzky/TinyMceInsertDateTime)     | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceLinkAutoDetect](https://github.com/cliffparnitzky/TinyMceLinkAutoDetect)     | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceLinkLightbox](https://github.com/cliffparnitzky/TinyMceLinkLightbox)         | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) | 
| [TinyMceLocalStorage](https://github.com/cliffparnitzky/TinyMceLocalStorage)         | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMcePagebreak](https://github.com/cliffparnitzky/TinyMcePagebreak)               | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceQuotes](https://github.com/cliffparnitzky/TinyMceQuotes)                     | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceStrikethrough](https://github.com/cliffparnitzky/TinyMceStrikethrough)       | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceTextColor](https://github.com/cliffparnitzky/TinyMceTextColor)               | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceTextPattern](https://github.com/cliffparnitzky/TinyMceTextPattern)           | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceUnderline](https://github.com/cliffparnitzky/TinyMceUnderline)               | ![Contao 3.2 n/a](http://img.shields.io/badge/Contao%203.2-n/a-lightgrey.svg?style=flat) | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceWordCount](https://github.com/cliffparnitzky/TinyMceWordCount)               | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceYouTube](https://github.com/cliffparnitzky/TinyMceYouTube)                   | ![Contao 3.2 ok](http://img.shields.io/badge/Contao%203.2-ok-green.svg?style=flat)       | ![Contao 3.5 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | ![Contao 4.4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |

(More plugins will be added soon. For wishes add a comment to [issue #3](https://github.com/cliffparnitzky/TinyMcePluginLoader/issues/3).)


### Bundles

These are the currently available bundles (packages of plugins) for easier installation via composer:

- [TinyMceBundleAll](https://github.com/cliffparnitzky/TinyMceBundleAll) - installs all available plugins
- [TinyMceBundleClassic](https://github.com/cliffparnitzky/TinyMceBundleClassic) - installs the missing default plugins known from TinyMCE 3
- [TinyMceBundleTextColor](https://github.com/cliffparnitzky/TinyMceBundleTextColor) - installs the text color plugins


### Setups

These are the currently available setups, which redefines the TinyMCE toolbars:

- [TinyMceZUpAll](https://github.com/cliffparnitzky/TinyMceZUpAll) - creates the toolbars with all known buttons
- [TinyMceZUpClassic](https://github.com/cliffparnitzky/TinyMceZUpClassic) - creates the toolbars known from TinyMCE 3


Additional information
----------------------

### Special notes

There is nothing special to pay attention to.

### Information in the wiki

#### Create a new ...

* [Creating a new plugin](https://github.com/cliffparnitzky/TinyMcePluginLoader/wiki/Creating-a-new-plugin)
* [Creating a new bundle](https://github.com/cliffparnitzky/TinyMcePluginLoader/wiki/Creating-a-new-bundle)
* [Creating a new setup](https://github.com/cliffparnitzky/TinyMcePluginLoader/wiki/Creating-a-new-setup)

#### Installation hints
* [Install manually](https://github.com/cliffparnitzky/TinyMcePluginLoader/wiki/Install-manually)

#### Bug report hints

* [Report a bug](https://github.com/cliffparnitzky/TinyMcePluginLoader/wiki/Report-a-bug)

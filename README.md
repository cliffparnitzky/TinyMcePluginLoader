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

| Plugin                                                                               | TinyMCE 3 compatible                                                                   | TinyMCE 4 compatible                                                             |
| ------------------------------------------------------------------------------------ | :------------------------------------------------------------------------------------: | :------------------------------------------------------------------------------: |
| [TinyMceAdvancedList](https://github.com/cliffparnitzky/TinyMceAdvancedList)         | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceAnchor](https://github.com/cliffparnitzky/TinyMceAnchor)                     | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceCodeMirror](https://github.com/cliffparnitzky/TinyMceCodeMirror)             | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceColorpicker](https://github.com/cliffparnitzky/TinyMceColorpicker)           | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceContextMenu](https://github.com/cliffparnitzky/TinyMceContextMenu)           | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceEmoticons](https://github.com/cliffparnitzky/TinyMceEmoticons)               | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | 
| [TinyMceFontAwesome](https://github.com/cliffparnitzky/TinyMceFontAwesome)           | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceGoogleMaps](https://github.com/cliffparnitzky/TinyMceGoogleMaps)             | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceHorizontalRuler](https://github.com/cliffparnitzky/TinyMceHorizontalRuler)   | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | 
| [TinyMceImageEnhancement](https://github.com/cliffparnitzky/TinyMceImageEnhancement) | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | 
| [TinyMceInsertDateTime](https://github.com/cliffparnitzky/TinyMceInsertDateTime)     | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceLinkAutoDetect](https://github.com/cliffparnitzky/TinyMceLinkAutoDetect)     | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceLinkLightbox](https://github.com/cliffparnitzky/TinyMceLinkLightbox)         | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) | 
| [TinyMceLocalStorage](https://github.com/cliffparnitzky/TinyMceLocalStorage)         | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMcePagebreak](https://github.com/cliffparnitzky/TinyMcePagebreak)               | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceQuotes](https://github.com/cliffparnitzky/TinyMceQuotes)                     | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 nok](http://img.shields.io/badge/tinymce%204-nok-red.svg?style=flat) |
| [TinyMceStrikethrough](https://github.com/cliffparnitzky/TinyMceStrikethrough)       | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceTextColor](https://github.com/cliffparnitzky/TinyMceTextColor)               | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceTextPattern](https://github.com/cliffparnitzky/TinyMceTextPattern)           | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceUnderline](https://github.com/cliffparnitzky/TinyMceUnderline)               | ![tinymce 3 n/a](http://img.shields.io/badge/tinymce%203-n/a-lightgrey.svg?style=flat) | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceWordCount](https://github.com/cliffparnitzky/TinyMceWordCount)               | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |
| [TinyMceYouTube](https://github.com/cliffparnitzky/TinyMceYouTube)                   | ![tinymce 3 ok](http://img.shields.io/badge/tinymce%203-ok-green.svg?style=flat)       | ![tinymce 4 ok](http://img.shields.io/badge/tinymce%204-ok-green.svg?style=flat) |

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

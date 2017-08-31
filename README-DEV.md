Dev notes for myWpTheme
=======================

Current version
---------------

Reached prealpha-2: version 0.2

Features for next release
-------------------------

~* Basic commit function, header, index, footer
* Basic commit archive, single, page, home, index
* Basic use wp ids and classes for comments section in my theme
* Basic admin mode editing capabilites
* Basic assign proper roles, aria to the elements

* Add RSS feeds etc
* Add bootstrap themes
* Add non card layout scheme
* Add date, category formats
~* Add bower font-awesome
~* Add grunt build system - DROPPED: Unnecessarily complex - Using makefiles as an alternative till no issues arise

~* Improve navbar binding from navbar to top to make it more wordpress friendly
~* Improve clean up css
* Improve make functions into classes
~* Improve more modern wordpress notions
* Refactor content-front-page.php name to frontpage-default.php

* Customise the header and background colours from theme support
* Customise header logo position
* Customise navbar Searchbar

~* Must fix blockquote in posts, card
~* Must fix image in posts, card

* Fix social bar css 
* Fix archive page
* Fix navbar placements
* Fix dropdown bgcolor
* Fix navbar dropdown colour




Big list of TODOs and DONEs
---------------------------


* Features - Are there inside the partials as TODOs

* Theme support with colour pallettes
* Woocommerce
* Header video
* Header text placement
* searchbar google
* RTL language support
* google code prettify
* responsive embed content
* Transparent navbar with header background support
* Social nav with just css support
* Horizontal card support and positional content support like http://tinyatlasquarterly.com/
* Responsive navbar for content

DOD for alpha
-------------

* Basic
* Add
* Improve
* Must fix

Bookmarks
---------

[Default WP page structure](https://codex.wordpress.org/Site_Architecture_1.5)
[WP content loop](https://codex.wordpress.org/The_Loop)
[See `Related` for list of content functions](https://codex.wordpress.org/Function_Reference/post_class)


Changelog
=========

Release for prealpha2
----------------------

~* Build for sass components
~* Use wp ids and classes in my theme
~* Move navbar into header - DROPPED: For page semantics - Added tarnsparent navbar in wishlist
~* Modify custom css for better bootstrap integration - PARTIAL: Social nav with server code implemented - Alternate social nav with css in wishlist
~* Keep css in proper files
~* Add code pretifier - DROPPED: Unnecssary - Exists https://wordpress.org/plugins/code-prettify/
~* Move files into correct folders
~* Wordpress background and heading colour support integration - DROPPED: For incompatibilty with basic bootstrap concept - Added theme support in wishlist
~* Post content image and blockquote support
~* Screen reader check
~* Build and sanity and smoke tests
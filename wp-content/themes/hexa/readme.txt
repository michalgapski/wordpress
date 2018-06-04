=== Hexa ===
Contributors: automattic
Donate link:
Tags: blue, brown, red, tan, light, one-column, fixed-layout, responsive-layout, custom-background, custom-colors, custom-header, custom-menu, editor-style, featured-images, flexible-header, infinite-scroll, post-formats, rtl-language-support, sticky-post, translation-ready, blog, design, journal, lifestream, tumblelog, bright, clean, colorful, geometric, modern, playful, simple, whimsical, vibrant
Tested up to: 3.8
Stable tag: 3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

A colorful personal blogging theme with support for post formats and a flair for geometry.

== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Where is my custom menu? =

Hexa's primary menu is tucked behind an icon in the header. Click the open menu icon (three horizontal lines) to see it.

= Does Hexa use featured images? =

If a Featured Image at least 842px wide is set for a post, it will display above the post.

= Quick Specs (all measurements in pixels) =

1. The main column width is 654.
2. The header sidebar widths are 207 each.

== Changelog ==

= 8 June 2017 =
* Cleaning up formatting around style tags.
* Add styles to make sure text doesn't run outside of widget areas. Add theme support for title-tags.

= 7 June 2017 =
* Update JavaScript that toggles hidden widget area, to make sure new video and audio widgets are displaying correctly when opened.

= 22 March 2017 =
* add Custom Colors annotations directly to the theme
* move fonts annotations directly into the theme

= 6 February 2017 =
* Replace get_the_tag_list() with the_tags() for a more straightforward approach that prevents potential fatal errors.

= 9 August 2016 =
* Update Headstart URL to a smaller file.

= 4 July 2016 =
* Fix excerpt admin URL.

= 16 June 2016 =
* Add a class of .widgets-hidden to the body tag when the sidebar is active; allows the widgets to be targeted by Direct Manipulation.

= 9 June 2016 =
* Add Headstart annotations;

= 6 November 2015 =
* Add support for missing Genericons and update to 3.4.1.

= 20 August 2015 =
* Add text domain and/or remove domain path. (E-I)

= 31 July 2015 =
* Remove .`screen-reader-text:hover` and `.screen-reader-text:active` style rules.

= 16 July 2015 =
* Always use https when loading Google Fonts. See #3221;

= 10 June 2015 =
* Fixing display issues with gists in both Hexa and Quadra; Fixes #3068;

= 6 May 2015 =
* Fully remove example.html from Genericons folders.
* Remove index.html file from Genericions.

= 17 December 2014 =
* Second fix for touch devices.
* First pass at making submenus accessible on mobile devices;

= 11 November 2014 =
* fix broken pt-br translation string

= 5 August 2014 =
* Trigger .resize on the sidebar area so widgets display properly

= 24 July 2014 =
* change theme/author URIs and footer links to `wordpress.com/themes`.

= 3 July 2014 =
* remove unused `outdoorsy` tag, add `outdoors` tag

= 1 June 2014 =
* add/update pot files.

= 30 May 2014 =
* Text and link update footer credit.

= 15 May 2014 =
* Fix infinite footer for small screens by removing left padding;
* Ensure site footer credits are broken into two lines; works better with the design, and with longer footer credit text.

= 14 April 2014 =
* Update Responsive video support

= 24 February 2014 =
* Use whole pixel values rather than decimals, which can cause odd rendering issues in some browsers
* Standardize button font size/line height to better match input fields. Modifications to readme.txt

= 23 February 2014 =
* Improvements to infinite footer styles
* Remove unnecessary border rules for mobile infinite loader styles
* Minor fix for border width for child comments
* Fix post navigation in mobile RTL; remove border from no-comments class
* More
* More
* Fix mobile RTL styles; padding, spacing
* Update borders in comments section such that there are no gaps between content and comments, disrupting the flow of the design.
* Fix custom background callback to support custom background images as well as colors; only worked for colors, which didn't allow users to choose a background image.

= 21 February 2014 =
* Add margin to the responsive video container to keep it from sticking to the content.

= 20 February 2014 =
* Add missing tag vibrant
* Remove incorrect theme-options tag
* Updates to readme.txt in prep for submission to .org
* Add POT file
* Use largest size of post thumbnail for content_width to avoid images appearing smaller than they should.

= 19 February 2014 =
* Fixes/improvements for RTL styles; add custom background callback to adjust image border colors when a custom background color is selected
* Improvements to captioned image and Goodreads widget styles
* Ensure Customizer does not change color of site description when hidden/changed
* Adjustments to aligned image borders and editor styles for aligned images
* Improvements to author archives header and no results styles
* Attempt to fix issue with search box not displaying at full column width in IE
* Updates to editor style
* Updated sidebar column code to remove unnecessary styles and add mobile styles
* Remove sidebar classes function in favor of a CSS-only solution for adjusting sidebar widths based on number of columns
* Update incorrect theme reference in style.css
* Move style-wpcom.css to inc/ to clean things up a bit
* No need to setup the_post() and rewind_posts() to get author information in archive.php; we're using hexa_setup_author() to take care of this in inc/extras.php
* Namespace add_image_size handle
* Update version number for style-wpcom.css enqueue
* Escape get_the_author with esc_html
* Minor updates to customizer settings; fix wrong theme name in comments, wrong version number in JS enqueue
* Re-enqueue Genericons font CSS rather than embedding in style.css; update all stylesheets to reflect this change

= 18 February 2014 =
* Update screenshot
* First pass at RTL styles
* Fix font sizes for mobile devices using pixels instead of relative values
* Improve contrast between background and foreground on post meta; change font size declarations on pseudo-elements to pixels, as IE 10+ won't recognize relative font size values in pseudoelements.
* Hack to make Firefox behave
* Fix infinite scroll bug, set partly transparent background on infinite scroll footer, attempt to fix jagged edges in Firefox
* Tweaks to editor styles and main navigation
* Adjust positioning of toggle icons
* Fix infinite scroll footer when scrolling; adjust width of site branding
* More tweaks to WP.com-specific styles
* Tweaks to WordPress.com-specific styles

= 17 February 2014 =
* Add screenshot
* Sigh, fix dumb typo
* tweak to WP.com-specific styles for comment form
* Add description and tags to style.css
* Add and style custom headers
* Update wording on 404 to accurately reflect available choices
* Fix mobile navigation menu styles
* Update to proper content width
* Remove unnecessary enqueued fonts; update prefixes to correct theme name; remove unnecessary styles from style-wpcom.css and fix wp.com-specific styles
* Initial commit to /pub

=== Hexa ===
Contributors: automattic
Donate link:
Tags: blue, brown, red, tan, light, one-column, fixed-layout, responsive-layout, custom-background, custom-colors, custom-header, custom-menu, editor-style, featured-images, flexible-header, infinite-scroll, post-formats, rtl-language-support, sticky-post, theme-options, translation-ready, blog, design, journal, lifestream, tumblelog, bright, clean, colorful, geometric, modern, playful, simple, whimsical
Tested up to: 3.8
Stable tag: 3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

A colorful personal blogging theme with support for post formats and a flair for geometry.

== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Where is my custom menu? =

Hexa's primary menu is tucked behind an icon in the header. Click the open menu icon (three horizontal lines) to see it.

= Does Hexa use featured images? =

If a Featured Image at least 842px wide is set for a post, it will display above the post.

= Quick Specs (all measurements in pixels) =

1. The main column width is 654.
2. The header sidebar widths are 207 each.

== Changelog ==

= 1.0.1 - February 23, 2014 - Multiple minor fixes
* Improvements to infinite footer styles
* Minor fix for border width for child comments
* Fix post navigation in mobile RTL; remove border from no-comments class
* Fix mobile RTL styles; padding, spacing
* Update borders in comments section such that there are no gaps between content and comments, disrupting the flow of the design.
* Fix custom background callback to support custom background images as well as colors; only worked for colors, which didn't allow users to choose a background image.
* Add margin to the responsive video container to keep it from sticking to the content.
* Remove incorrect theme-options tag

= 1.0 - February 20, 2014 - Initial release

= 1.0 - February 20, 2014 - Initial release
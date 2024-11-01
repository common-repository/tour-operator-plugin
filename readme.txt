=== Tour & Activity Operator Plugin for TourCMS ===
Contributors: TourCMS
Tags:
Version: 1.7.0
Plugin URI: https://www.tourcms.com/support/webdesign/wordpress/
Requires at least: 3.0
Tested up to: 5.9.2
Stable tag: 1.7.0


Integrate WordPress with TourCMS to aid creating specialist Tour and Activity Operator websites.

== Description ==

Integrate WordPress with [TourCMS](https://www.tourcms.com "TourCMS") to aid creating Tour & Activity Operator websites.

This plugin extends WordPress with new Post types for Tours (and other travel products) and integrates with the TourCMS booking engine. Upload your prices once (into TourCMS) and ensure you are always displaying live pricing and booking against live availability.

Includes widgets for displaying products on Google Maps or showing a monthly availability overview and a basic example theme can be downloaded from our website (or customise your existing theme).

Store complex pricing, availability, bookings and customer data secure in TourCMS. Use WordPress templates to design and build your website, integrating with TourCMS for the booking/enquiry process.

The TourCMS booking engine is configurable in 20+ languages (let us know if you need one we don't currently support) and integrates with various payment gateway solutions from around the world.

**This plugin requires a paid [TourCMS](https://www.tourcms.com "TourCMS") account, free trial accounts are available**

If you have any feedback or queries we'd love to hear from you so please drop by the [TourCMS forums](http://community.tourcms.com "TourCMS forums") or [Send us a message](http://www.tourcms.com/company/contact.php "Send us a message").

Please do feel free to contact us prior to starting your project, we have other website integration options, matching all developer skill-sets.

== Installation ==

Full installation instructions are available on our website:

[View installation instructions](https://www.tourcms.com/support/webdesign/wordpress/installation.php "Installation instructions")

== Screenshots ==

1. Google Maps Widget
2. Availability Widget
3. Some of the Meta data pulled from TourCMS, accessible via Shortcodes
4. Editing Products types / Locations
5. Product types / Locations appear in the Menu editor

== Changelog ==

= 1.7.0 =
* Fix missing check availability data

= 1.6.0 =
* Video embeds are now secure (https) by default

= 1.5.1 =
* Improve availability widget

= 1.5.0 =
* MapBox Widget
* Additional meta for rates and dates
* Integration with new TourCMS WordPress theme

= 1.4.1 =
* WordPress post tag support
* Add new plugin setting to toggle between standard and beta booking engine links 
* Adjust plugin labels "Tours/Hotels" become just "Tours"

= 1.2.3 =
* Fix display of Health & Safety data in editor

= 1.2.0 =
* Added Tour Health & Safety checklist data
* PHP 8 support
* POT file for translation
* Icon

= 1.0.11 =
* Version number fixes - no functional change

= 1.0.10 =
* Google maps v3 support

= 1.0.9 =
* Added support for alternative tours
* Tour name now uses full "Tour name long"

= 1.0.8 =
* Added grade, accom_rating, tourleader_type
* Added "suitable for" fields
* Added "languages spoken" fields
* Sanitised version numbering

= 0.107 =
* Now includes all geocodes stored in TourCMS

= 0.101 =
* Added support for embedded videos
* Added support for uploaded documents
* Added alternative "tourcms_" prefixed shortcodes, can be used if there are any conflicts

= 0.100 =
* Added thumbnail image URLs
* Fixed issue where sometimes only 6 images would be returned

= 0.99 =
* Added "Tour ID" field and [tour_id] short code
* Added new "Includes", "Excludes" and "Redeem" fields
* Added support for extra images (now up to 10)

= 0.97 =
* Tour Availability widget now links through to the month the user clicked on
* New plugin setting to allow extra query string parameters to be added to booking links

= 0.96 =
* Added "Experience" data pulled from TourCMS and [exp] shortcode
* Added support for custom fields and [tourcms_custom tag=""] shortcode
* Added support for the standard WordPress "Author" box

= 0.94 =
* Fixed errors when the bcmath module is not installed in PHP

= 0.93 =
* Fixed issue when PHP short tags aren't enabled

= 0.91 =
* Fix missing header issue on install

= 0.9 =
* Added "Priority" field (Commercial Priority configured in TourCMS)
* Added ability to manually specify an "Order" for each Tour/Hotel
* Fixed admin page displaying broken images when less than 6 images are loaded for a Tour

= 0.8 =
* Fix settings links

= 0.7 =
* Version number fixes - no functional change

= 0.6 =
* Added more fields (Primary location, Summary, Tour/Hotel Name, Itinerary, Pickup / Dropoff, Extras / Upgrades, Restrictions, Short Description, Long Description).

= 0.5 =
* Fixed display of Map widget when not using TourCMS Theme
* Streamlined setup

= 0.4 =
* Added screenshots
* Improved readme.txt

= 0.3 =
* Updated lead in prices to use the new 'display' price which was added to the TourCMS API (includes currency symbol / description)
* Added new Meta to store the monthly availability which was added to the TourCMS API
* Added new Availability widget

= 0.2 =
* Documentation improvements

= 0.1 =
* Initial release

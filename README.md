# wp-theme-bendbulletin

### Wordpress theme to mimic main BendBulletin.com

##### Purpose

This template is used to mimic the look and feel of the main BendBulletin.com website. This allows for tight blog integration into BendBuletin.com properties.

##### Separate statics server for Bootstrap3

This theme is a Bootstrap 3 markup site.  BS3 files are stored on a separate statics server.  The BS3 CSS and Javascript are compiled using the CodeKit app for Mac.  With the CSS, it is SASS compiled with CodeKit.

##### Markup and CSS

Wordpress specific Markup and CSS are not compiled at this point. The specific CSS is only for details for Wordpress itself and some legacy markup from the last non-responsive/non-Bootstrap theme.  The main style.css uses in @import tag to bring in BS3 styles from the statics server mentioned above.

##### More to do

1.
Possibly add dynamic updating of the Wordpress template via curl calls back to fragments generated by BendBulletin.com. This might not happen though as I don't want to introduce too much interdependency.

2.
Add more variables to the template for specific site details such as navigations, titling, Google DFP setups, and so on.

##### Notes

What is seen here is just a theme and not the whole Wordpress installation.

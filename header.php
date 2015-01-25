/*
Theme Name: Freezer
Theme URI: http://freezer.kevanlee.com/
Author: Kevan Lee
Author URI: http://kevanlee.com/
Description: Minimal, responsive theme for bloggers
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wows
Tags: responsive, minimal, custom header, featured post, custom post types

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.

Freezer is based on Underscores http://underscores.me/, (C) 2012-2015 Automattic, Inc. With inspiration from Wistia, Cody House, Brian Lovin, Unsplash, and Coolors.

Resetting and rebuilding styles have been helped along thanks to the fine work of
Eric Meyer http://meyerweb.com/eric/tools/css/reset/index.html
along with Nicolas Gallagher and Jonathan Neal http://necolas.github.com/normalize.css/
and Blueprint http://www.blueprintcss.org/
*/

/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
1.0 Reset
2.0 Typography
3.0 Elements
4.0 Forms
5.0 Navigation
5.1 Links
5.2 Menus
6.0 Accessibility
7.0 Alignments
8.0 Clearings
9.0 Widgets
10.0 Content
10.1 Posts and pages
10.2 Asides
10.3 Comments
11.0 Infinite scroll
12.0 Media
12.1 Captions
12.2 Galleries
--------------------------------------------------------------*/

/*--------------------------------------------------------------
1.0 Reset
--------------------------------------------------------------*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
  border: 0;
  font-family: inherit;
  font-size: 100%;
  font-style: inherit;
  font-weight: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
  vertical-align: baseline;
}

html {
  font-size: 62.5%; /* Corrects text resizing oddly in IE6/7 when body font-size is set using em units http://clagnut.com/blog/348/#c790 */
  overflow-y: scroll; /* Keeps page centered in all browsers regardless of content height */
  -webkit-text-size-adjust: 100%; /* Prevents iOS text size adjust after orientation change, without disabling user zoom */
  -ms-text-size-adjust:     100%; /* www.456bereastreet.com/archive/201012/controlling_text_size_in_safari_for_ios_without_disabling_user_zoom/ */
  box-sizing: border-box; /* Apply a natural box layout model to the document; see http://www.paulirish.com/2012/box-sizing-border-box-ftw/ */
}
*,
*:before,
*:after { /* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
  box-sizing: inherit;
}

body {
  background: #fff; /* Fallback for when there is no custom background color defined. */
  border-bottom: 5px solid #002538;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
nav,
section {
  display: block;
}

ol,
ul {
  list-style: none;
}

table { /* tables still need 'cellspacing="0"' in the markup */
border-collapse: separate;
border-spacing: 0;
}

caption,
th,
td {
  font-weight: normal;
  text-align: left;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
  content: "";
}

blockquote,
q {
  quotes: "" "";
}

a:focus {
  outline: thin dotted;
}

a:hover,
a:active {
  outline: 0;
}

a img {
  border: 0;
}

/*--------------------------------------------------------------
2.0 Typography
--------------------------------------------------------------*/
body,
button,
input,
select,
textarea {
  color: #404040;
  font-family: sans-serif;
  font-size: 17px;
  font-size: 1.6rem;
  line-height: 1.5;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  clear: both;
  font-family: 'Vollkorn', serif;
  text-decoration: none;
}

h1 {
  font-size: 2em;
}

h2 {
  font-size: 1.5em;
}

h3 {
  font-size: 1.3em;
}

.entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .entry-content h5, .entry-content h6 {
  margin-bottom: 1.2em;
}

p {
  margin-bottom: 1.5em;
  -webkit-font-smoothing: antialiased;
  vertical-align: baseline;
  font-size:17px;
  line-height:32px;
}

b,
strong {
  font-weight: bold;
}

dfn,
cite,
em,
i {
  font-style: italic;
}

blockquote {
  margin: 0 1.5em 1.5em 1.5em;
  padding:25px;
  background-color: #ddd;
  color:#ffffff;
}

address {
  margin: 0 0 1.5em;
}

pre {
  background: #eee;
  font-family: "Courier 10 Pitch", Courier, monospace;
  font-size: 15px;
  font-size: 1.5rem;
  line-height: 1.6;
  margin-bottom: 1.6em;
  max-width: 100%;
  overflow: auto;
  padding: 1.6em;
}

code,
kbd,
tt,
var {
  font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
  font-size: 15px;
  font-size: 1.5rem;
}

abbr,
acronym {
  border-bottom: 1px dotted #666;
  cursor: help;
}

mark,
ins {
  background: #fff9c0;
  text-decoration: none;
}

sup,
sub,
.sup,
.sub {
  font-size: 75%;
  height: 0;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sup, .sup {
  bottom: 1ex;
}

sub, .sub {
  top: .5ex;
}

small, .small {
  font-size: 75%;
}

big, .big {
  font-size: 125%;
}

/*--------------------------------------------------------------
3.0 Elements
--------------------------------------------------------------*/
hr {
  background-color: #ccc;
  border: 0;
  height: 1px;
  margin-bottom: 1.5em;
}

ul,
ol {
  margin: 0 0 1.5em 3em;
}

ul {
  list-style: disc;
}

ol {
  list-style: decimal;
}

li > ul,
li > ol {
  margin-bottom: 0;
  margin-left: 1.5em;
}

.entry-content li {
  margin-bottom: 1.5em;
  -webkit-font-smoothing: antialiased;
  vertical-align: baseline;
  font-size:17px;
  line-height:32px;
}

dt {
  font-weight: bold;
}

dd {
  margin: 0 1.5em 1.5em;
}

img {
  height: auto; /* Make sure images are scaled correctly. */
  max-width: 100%; /* Adhere to container width. */
}

figure {
  margin: 0;
}

table {
  margin: 0 0 1.5em;
  width: 100%;
  border:1px solid #ddd;
  padding:20px;
}

th, td {
  border-bottom: 1px solid #ddd;
  padding: 5px;
}

th {
  font-weight: bold;
}

#bg {
  background: url(http://i.imgur.com/mUZX8ED.gif);
}

#masthead, #colophon {
  margin:20px;
  padding:20px;
}

#content {
  margin:20px;
}

#masthead {
  background: #002538;
/*  border: 1px solid #ddd; */
}

h1.site-title a {
  color:#ddd;
  text-decoration: none;
}

h1.site-title a:hover {
  color:#ef946c;
}

.site-description {
  color: #70877f;
  margin: 20px;
}

.main-navigation button {
  margin: 20px 20px 20px 0;
  min-height:32px;
  margin-left:10px;
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
  box-shadow: none;
  text-shadow: none;
}

.main-navigation button:hover {
  box-shadow:none;
}

#secondary.widget-area {
  background: #002538;
  margin-top: 55px;
  padding: 20px;
}

#secondary h1 {
  color:#70877f;
}

#secondary ul li a {
  text-decoration: none;
}

#featured_image {
  position: absolute;
  z-index: -1;
  overflow: hidden;
  width: 100%;
  height: 520px;
  border-bottom: 1px solid #ddd;
  top:0;
  background:#f6f6f6;
}

#whitebg {
  height:100%;
  background:#fff;
  margin-top:400px;
  position:absolute;
  z-index:-1;
  width:100%
}

.single#featured_image {
  display:none;
}

/*--------------------------------------------------------------
4.0 Forms
--------------------------------------------------------------*/
button,
input,
select,
textarea {
  font-size: 100%; /* Corrects font size not being inherited in all browsers */
  margin: 0; /* Addresses margins set differently in IE6/7, F3/4, S5, Chrome */
  vertical-align: baseline; /* Improves appearance and consistency in all browsers */
}

button {
  min-height:32px;
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
  border: 1px solid;
  border-color: #ccc #ccc #bbb;
  border-radius: 3px;
  background: #e6e6e6;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.5), inset 0 15px 17px rgba(255, 255, 255, 0.5), inset 0 -5px 12px rgba(0, 0, 0, 0.05);
  color: rgba(0, 0, 0, .8);
  cursor: pointer; /* Improves usability and consistency of cursor style between image-type 'input' and others */
  -webkit-appearance: button; /* Corrects inability to style clickable 'input' types in iOS */
  font-size: 12px;
  font-size: 1.2rem;
  line-height: 1;
  padding: .6em 1em .4em;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
}

button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
  border-color: #ccc #bbb #aaa;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.8), inset 0 15px 17px rgba(255, 255, 255, 0.8), inset 0 -5px 12px rgba(0, 0, 0, 0.02);
}

button:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
input[type="submit"]:focus,
button:active,
input[type="button"]:active,
input[type="reset"]:active,
input[type="submit"]:active {
  border-color: #aaa #bbb #bbb;
  box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.5), inset 0 2px 5px rgba(0, 0, 0, 0.15);
}

input[type="checkbox"],
input[type="radio"] {
  padding: 0; /* Addresses excess padding in IE8/9 */
}

input[type="search"] {
  -webkit-appearance: textfield; /* Addresses appearance set to searchfield in S5, Chrome */
  box-sizing: content-box;
}

input[type="search"]::-webkit-search-decoration { /* Corrects inner padding displayed oddly in S5, Chrome on OSX */
  -webkit-appearance: none;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
textarea {
  color: #666;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
textarea:focus {
  color: #111;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"] {
  padding: 3px;
}

textarea {
  overflow: auto; /* Removes default vertical scrollbar in IE6/7/8/9 */
  padding-left: 3px;
  vertical-align: top; /* Improves readability and alignment in all browsers */
  width: 100%;
}

/* --------------------------------
4.1 Newsletter form
-------------------------------- */

#mc_embed_signup {
  margin: 20px;
  padding: 20px;
  background:#002538;
}

#mc_embed_signup h2 {
  color:#70877f;
}

#mc_embed_footer h2 {
  color:#000;
}

#mc_embed_signup label, #mc_embed_footer label {
  display:none;
}

#mc_embed_signup input, #mc_embed_footer input {
  max-width:70%;
  margin:20px 0;
}

#mc_embed_signup input.button {
  min-height:32px;
  margin-left:10px;
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
  box-shadow: none;
  text-shadow: none;
}

#mc_embed_signup input.email {
  background: #002538;
  border: 0;
  border-bottom: 1px solid #70877f;
  color:#70877f;
}

.single #mc_embed_signup {
  display:none;
  }

.single #mc_embed_footer {
  margin:35px 0;
  padding:20px;
  background:#ddd;
  position:initial;
}

/*--------------------------------------------------------------
5.0 Navigation
--------------------------------------------------------------*/
/*--------------------------------------------------------------
5.1 Links
--------------------------------------------------------------*/
a {
  color: #454372;
  text-decoration: none;
}

a:visited {
  color: #454372;
}

a:hover,
a:focus,
a:active {
  color: #ef946c;
}

/*--------------------------------------------------------------
5.2 Menus
--------------------------------------------------------------*/
.main-navigation {
  clear: both;
  display: block;
  float: left;
  width: 100%;
  margin-left: 20px;
}

.main-navigation ul {
  list-style: none;
  margin: 0;
  padding-left: 0;
}

.main-navigation li {
  float: left;
  position: relative;
  padding-right: 20px;
  margin-bottom:5px;
}

.main-navigation a {
  display: block;
  text-decoration: none;
  color:#ef946c;
}

.main-navigation ul ul {
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
  float: left;
  position: absolute;
  top: 1.5em;
  left: -999em;
  z-index: 99999;
}

.main-navigation ul ul ul {
  left: -999em;
  top: 0;
}

.main-navigation ul ul a {
  width: 200px;
}

.main-navigation ul ul li {

}

.main-navigation li:hover > a {
}

.main-navigation ul ul :hover > a {
}

.main-navigation ul ul a:hover {
}

.main-navigation ul li:hover > ul {
  left: auto;
}

.main-navigation ul ul li:hover > ul {
  left: 100%;
}

.main-navigation .current_page_item > a,
.main-navigation .current-menu-item > a,
.main-navigation .current_page_ancestor > a {
}

ul.sub-menu {
  background: #2f2f2f;
  padding: 20px;
}

/* Small menu */
.menu-toggle {
  display: none;
}

@media screen and (max-width: 600px) {
  .menu-toggle,
  .main-navigation.toggled .nav-menu {
    display: block;
  }

  .main-navigation ul {
    display: none;
  }
}

.site-main .comment-navigation,
.site-main .posts-navigation,
.site-main .post-navigation {
  margin: 0 0 1.5em;
  overflow: hidden;
}

.comment-navigation .nav-previous,
.posts-navigation .nav-previous {
  float: left;
  width: 50%;
}

.post-navigation .nav-previous {
  margin: 0 0 35px 0;
}

.comment-navigation .nav-next,
.posts-navigation .nav-next {
  float: right;
  text-align: right;
  width: 50%;
}

.post-navigation .nav-next {
  margin:35px 0 0 0;
}

/*--------------------------------------------------------------
6.0 Accessibility
--------------------------------------------------------------*/
/* Text meant only for screen readers */
.screen-reader-text {
  clip: rect(1px, 1px, 1px, 1px);
  position: absolute !important;
  height: 1px;
  width: 1px;
  overflow: hidden;
}

.screen-reader-text:hover,
.screen-reader-text:active,
.screen-reader-text:focus {
  background-color: #f1f1f1;
  border-radius: 3px;
  box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
  clip: auto !important;
  color: #21759b;
  display: block;
  font-size: 14px;
  font-size: 1.4rem;
  font-weight: bold;
  height: auto;
  left: 5px;
  line-height: normal;
  padding: 15px 23px 14px;
  text-decoration: none;
  top: 5px;
  width: auto;
  z-index: 100000; /* Above WP toolbar */
}

/*--------------------------------------------------------------
7.0 Alignments
--------------------------------------------------------------*/
.alignleft {
  display: inline;
  float: left;
  margin-right: 1.5em;
}

.alignright {
  display: inline;
  float: right;
  margin-left: 1.5em;
}

.aligncenter {
  clear: both;
  display: block;
  margin: 0 auto;
}

/*--------------------------------------------------------------
8.0 Clearings
--------------------------------------------------------------*/
.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.comment-content:before,
.comment-content:after,
.site-header:before,
.site-header:after,
.site-content:before,
.site-content:after,
.site-footer:before,
.site-footer:after {
  content: "";
  display: table;
}

.clear:after,
.entry-content:after,
.comment-content:after,
.site-header:after,
.site-content:after,
.site-footer:after {
  clear: both;
}

/*--------------------------------------------------------------
9.0 Widgets
--------------------------------------------------------------*/
.widget {
  margin: 0 0 1.5em;
}

/* Make sure select elements fit in widgets */
.widget select {
  max-width: 100%;
}

/* Search widget */
.widget_search .search-submit {
  display: none;
}

/*--------------------------------------------------------------
10.0 Content
--------------------------------------------------------------*/
/*--------------------------------------------------------------
10.1 Posts and pages
--------------------------------------------------------------*/
#main {
  background:#fff;
  padding: 0 35px;
  }

.single #main {
  padding:0;
}
.sticky .entry-title{
  background:yellow;
  padding:20px;
}

.hentry {
  margin: 0 0 1.5em;
  border-top: 1px solid #e8eaed;
  padding: 55px 0 20px;
}

.blog .entry-content:after {
  clear:initial;
}

.byline,
.updated:not(.published) {
  display: none;
}

.single .byline,
.group-blog .byline {
  display: inline;
}

.page-content,
.entry-content,
.entry-summary {
  margin: 1.5em 0 0;
}

.page-links {
  clear: both;
  margin: 0 0 1.5em;
}

.entry-title {
  margin-bottom: 20px;
}

.entry-title a {
  text-decoration: none;
  margin-bottom: 10px;
}

.entry-meta, .entry-meta a {
  color:#ddd;
  display:none;
}

.entry-footer, .entry-footer a {
  color:#ddd;
  display:none;
}

.posts-navigation {
  border-top: 1px solid #ddd;
  padding-top: 55px;
}

.single .main-navigation button, .single .main-navigation {
  margin: 20px 0;
}

.single .site-description {
  display:none;
}

.single .entry-meta, .single .entry-meta a, .single .entry-footer, .single .entry-footer a {
  display:inherit;
}

.single .attachment-thumbnail {
  display:none;
}

.single article {
  border-top: 0;
}

.featured {
  background:#ddd;
  padding: 0 35px;
}

.featured article {
  border:0;
}

.blog article:first-child {
  border-top: 0;
}

.author #main, .category #main, .error404 #main, .archive #main, .tag #main, .search #main {
  padding:55px;
}

.error404 #main .page-content .widget h2 {
  margin:20px 0;
}
/*--------------------------------------------------------------
10.2 Asides
--------------------------------------------------------------*/
.blog .format-aside .entry-title,
.archive .format-aside .entry-title {
  display: none;
}

/*--------------------------------------------------------------
10.2.1 Quotes
--------------------------------------------------------------*/
.blog .format-quote .entry-content,
.archive .format-aside .entry-content {
  padding:25px;
  background-color: #ddd;
  color:#002538;
  margin-bottom:1.5em;
}
.blog .format-quote .entry-content p,
.article .format-quote .entry-content p {
  margin-bottom:0;
}
.blog .format-quote .entry-title,
.article .format-quote .entry-title {
  display:none;
}

/*--------------------------------------------------------------
10.3 Comments
--------------------------------------------------------------*/
.comment-content a {
  word-wrap: break-word;
}

.bypostauthor {
  display: block;
}

#comments {
  margin:55px 0;
  padding:35px 0;
  border-top: 1px solid #ddd;
}

h3#reply-title {
  margin-bottom: 20px;
}

.form-allowed-tags, .form-allowed-tags code {
  font-size: 0.8em;
}

#comments label {
  display:block;
  margin: 20px 0;
}
/*--------------------------------------------------------------
11.0 Infinite scroll
--------------------------------------------------------------*/
/* Globally hidden elements when Infinite Scroll is supported and in use. */
.infinite-scroll .posts-navigation, /* Older / Newer Posts Navigation (always hidden) */
.infinite-scroll.neverending .site-footer { /* Theme Footer (when set to scrolling) */
  display: none;
}

/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before */
.infinity-end.neverending .site-footer {
  display: block;
}

/*--------------------------------------------------------------
12.0 Media
--------------------------------------------------------------*/
.page-content img.wp-smiley,
.entry-content img.wp-smiley,
.comment-content img.wp-smiley {
  border: none;
  margin-bottom: 0;
  margin-top: 0;
  padding: 0;
}

/* Make sure embeds and iframes fit their containers */
embed,
iframe,
object {
  max-width: 100%;
}

.attachment-thumbnail {
  margin-bottom: 20px;
  display:none;
}

/*--------------------------------------------------------------
12.1 Captions
--------------------------------------------------------------*/
.wp-caption {
  margin-bottom: 1.5em;
  max-width: 100%;
}

.wp-caption img[class*="wp-image-"] {
  display: block;
  margin: 0 auto;
}

.wp-caption-text {
  text-align: center;
  font-style: italic;
  font-size: 15px;
  border-bottom:1px solid #ddd;
  padding: 10px 0;
}

.wp-caption .wp-caption-text {
  margin: 0.8075em 0;
}

/*--------------------------------------------------------------
12.2 Galleries
--------------------------------------------------------------*/
.gallery {
  margin-bottom: 1.5em;
}

.gallery-item {
  display: inline-block;
  text-align: center;
  vertical-align: top;
  width: 100%;
}

.gallery-columns-2 .gallery-item {
  max-width: 50%;
}

.gallery-columns-3 .gallery-item {
  max-width: 33.33%;
}

.gallery-columns-4 .gallery-item {
  max-width: 25%;
}

.gallery-columns-5 .gallery-item {
  max-width: 20%;
}

.gallery-columns-6 .gallery-item {
  max-width: 16.66%;
}

.gallery-columns-7 .gallery-item {
  max-width: 14.28%;
}

.gallery-columns-8 .gallery-item {
  max-width: 12.5%;
}

.gallery-columns-9 .gallery-item {
  max-width: 11.11%;
}

.gallery-caption {
  display: block;
}


/*--------------------------------------------------------------
12.3 Sidebar Scroll
--------------------------------------------------------------*/



/*--------------------------------------------------------------
13.0 Media Queries
--------------------------------------------------------------*/

/* iPads (portrait and landscape) ----------- */
@media only screen and (min-width : 768px) {
  /* Styles */
  #masthead {
    width:50%;
  }
  .has-post-thumbnail .attachment-thumbnail {
    float:left;
    margin-right:55px;
    display:inline;
  }
  .single .has-post-thumbnail .attachment-thumbnail {
    display:none;
  }
  .has-post-thumbnail .entry-title {
    clear:none;
  }
  .has-post-thumbnail .entry-meta, .has-post-thumbnail .entry-meta a {
    display: inherit;
  }
  .has-post-thumbnail .entry-footer, .has-post-thumbnail .entry-footer a {
    display: inherit;
  }
  .single .attachment-thumbnail {
    float:right;
    display:none;
  }
  .single .entry-content .attachment-thumbnail {
    display:inherit;
  }
  .single .entry-title {
    clear:none;
  }
  #mc_embed_signup {
    position: absolute;
    top: 0;
    left: 55%;
    /*  max-height: 275px;
    overflow: hidden;*/
  }
}

/* Desktops and laptops ----------- */
@media only screen  and (min-width : 1024px) {
  /* Styles */
  #masthead, #content, #colophon {
    margin:55px;
  }
  #primary.content-area {
    float:left;
    width:66.6%;
  }
  #main.site-main {
/*    margin-right:-50px; */
  }
  #secondary.widget-area {
    right: 20px;
    position: absolute;
    background:none;
    text-align:right;
  }
  #secondary.widget-area ul {
    list-style-type: none;
  }
  #secondary h1 {
    color:#000;
  }
  .featured {
    left:58%;
  }
  #mc_embed_signup {
    margin-top: 55px;
  }
  .cd-top {
    display: inline-block;
    position: fixed !important;
    bottom: 40px;
    right: 10px;
    /* image replacement properties */
    white-space: nowrap;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: opacity .3s 0s, visibility 0s .3s;
    -moz-transition: opacity .3s 0s, visibility 0s .3s;
    transition: opacity .3s 0s, visibility 0s .3s;
    right: 30px;
    bottom: 30px;
  }
  .cd-top.cd-is-visible, .cd-top.cd-fade-out, .no-touch .cd-top:hover {
    -webkit-transition: opacity .3s 0s, visibility 0s 0s;
    -moz-transition: opacity .3s 0s, visibility 0s 0s;
    transition: opacity .3s 0s, visibility 0s 0s;
  }
  .cd-top.cd-is-visible {
    /* the button becomes visible */
    visibility: visible;
    opacity: 1;
  }
  .cd-top.cd-fade-out {
    /* if the user keeps scrolling down, the button is out of focus and becomes less visible */
    opacity: .5;
  }
  .cd-top:hover {
    background-color: #e86256;
    opacity: 1;
  }
  .single .attachment-thumbnail {
    float:none;
  }
  .single .entry-title {
    clear:both;
  }
  .single #featured_image {
    display:initial;
  }
  .single .content-area {
    background:#ffffff;
    padding:0 55px;
  }
  .single #content {
    padding:0;
  }
}

<?php
	define('JAVASCRIPT', true);
	error_reporting(0);
	header("Content-Type: text/css");
?>
/* <style> */
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td { margin: 0; padding: 0; }
table { border-collapse: collapse; border-spacing: 0; }
fieldset,img { border: 0; }
address,caption,cite,code,dfn,em,strong,th,var { font-style: normal; font-weight: normal; }
li { list-style: none; }
caption,th { text-align: left; }
h1,h2,h3,h4,h5,h6 { font-size: 100%; font-weight: normal; }
abbr,acronym { border: 0; font-variant: normal; }
input,textarea,select { font-family: inherit; font-size: inherit; font-weight: inherit; }
a { text-decoration: none; color: inherit; }

html {
	font-size: 62.5%;
}
body {
	background-color: #fff;
	color: #111;
	font: normal 1.1em/1.5em 'Helvetica Neue', Helvetica, Arial, Verdana, sans-serif;
	margin: 0;
}

code {
	font-family: monospace;
}
em {
	font-style: italic;
}
strong {
	font-weight: bold;
}

a:link,
a:visited {
	color: #222;
}
a:hover {
	text-decoration: underline;
}

h1,
h2 {
	letter-spacing: -.1em;
	margin-bottom: .5em;
}
h1 {
	color: #344469;
	font: bold 2.6em "palatino linotype", palatino, georgia, "times new roman", times, serif;
}
h2 {
	color: #664761;
	font: bold 2em "palatino linotype", palatino, georgia, "times new roman", times, serif;
}

ul {
	margin: 0 0 0 1.75em;
}
ul li {
	list-style-type: disc;
}
ol {
	list-style: decimal;
	padding-left: 2em;
	margin-bottom: 1em;
}

a.comment_delete_link,
a.comment_edit_link,
a.delete_link,
a.edit_link,
a.next_page,
a.prev_page,
a.next_post,
a.prev_post,
a.cancel,
a.logout {
	font-weight: bold;
}

a.comment_delete_link,
a.comment_edit_link {
	float: right;
	margin: 0 0 0 .5em;
}
a.delete_link {
	color: #d8583e !important;
}
a.edit_link {
	color: #93ba52 !important;
}
a.next_page,
a.prev_page,
a.next_post,
a.prev_post {
	background-color: #e2e2e2;
	color: #3C4D69;
	margin: 0 0 2em;
	padding: .4em .6em;
}
a.next_page:hover,
a.prev_page:hover,
a.next_post:hover,
a.prev_post:hover {
	color: #4E6B83;
}
a.cancel {
	color: #e35533;
	border: none;
	text-decoration: underline;
}
a.logout {
	color: #5B7C99;
	float: right;
}

label {
	color: #777;
	display: block;
	letter-spacing: -.1em;
	font: bold 1.4em "palatino linotype", palatino, georgia, "times new roman", times, serif;
	font-weight: bold;
	padding: 0 0 0.2em 0;
}
input[type="text"],
input[type="password"],
textarea {
	background-color: #f9f9f9;
	border: 1px solid #ccc;
	border-bottom: 1px solid #eee;
	border-right: 1px solid #eee;
	font-family: 'Monaco', Courier, monospace;
	font-size: .9em;
	margin-bottom: 1.5em;
	padding: .3em .4em;
}
input[type="file"] {
	margin-bottom: 1.5em;
}
input[type="text"],
input[type="password"] {
	width: 20em;
}
textarea.wide {
<?php if (substr_count($_SERVER['HTTP_USER_AGENT'], "Safari")): ?>
	width: 48em;
<?php else: ?>
	width: 43.5em;
<?php endif; ?>
}
input.big {
	font-size: 1.5em;
}

div#controls {
	background-color: #131313;
	border-bottom: .1em solid #0f0f0f;
	padding: .2em 0 .3em;
	width: 100%;
}
div#controls ul {
	margin: 0 auto;
	padding: .4em;
	width: 60em;
}
div#controls ul li {
	background: none;
	display: inline;
	font-weight: bold;
	margin: 0;
	padding: 0;
}
div#controls ul li a:link,
div#controls ul li a:visited {
	color: #bbb;
	border: none;
	padding: .1em .6em;
}
div#controls ul li a:hover {
	color: #fff;
}
div#controls ul li.close a:link,
div#controls ul li.close a:visited {
	color: #e35533;
}
div#controls ul li.close a:hover {
	color: #ff6039;
}

div#wrapper {
	width: 60em;
	margin: 4em auto;
	padding: 0 0 1em 0;
}

div#content {
	width: 40em;
	float: left;
}

div#sidebar {
	background: url('../images/dots-grey.gif') top left repeat;
	float: right;
	margin: 0 0 2em 0;
	padding: 1.5em 1em;
	width: 15em;
}
div#sidebar a:link,
div#sidebar a:visited {
	padding: .1em .2em;
	margin: 0 0 0 -.4em;
}
div#sidebar a:hover {
	background-color: #111;
	color: #ddd;
	text-decoration: none;
}
div#sidebar h1 {
	color: #664761;
	font-size: 1.4em;
	font-style: normal;
	margin: 1em 0 .2em 0;
}
div#sidebar input#search {
	background-color: #fff;
	border: 0;
	font-size: .9em;
<?php if (substr_count($_SERVER['HTTP_USER_AGENT'], "Safari")): ?>
	margin: -.5em auto 0;
	width: 17em;
<?php else: ?>
	margin: -.4em auto 0;
	width: 15em;
<?php endif; ?>
	padding: .5em .75em;
	display: block;
}
div#sidebar ul li {
	color: #555;
}


div#header {
	background-color: #111;
	padding: 4em 0 .6em 0;
	margin: 0 0 2em;
	width: 100%;
}
div#header .header_box {
	margin: auto;
	width: 60em;
}
div#header h1 {
	margin-bottom: 0;
}
div#header h1 a:link,
div#header h1 a:visited,
div#header h2 {
	color: #eee;
	font-family: Georgia;
	font-style: italic;
}
div#header h1 a:hover {
	color: #fff;
	text-decoration: none;
}
div#header h2 {
	color: #664761;
	margin: -.2em 0 0 0;
}

div#footer {
	background: url('../images/dots-lightgrey.gif') top left repeat;
	clear: both;
	color: #888;
	margin: 3em 0;
	padding: .4em .6em;
}
div#footer a.chyrp:hover {
	color: #6189a3;
}
div#footer a.atom {
	background-color: #bbb;
	border: none;
	color: #222;
	margin: -2.5em .4em 0 0;
	padding: .3em .6em;
	float: right;
}
div#footer a.atom:hover {
	background-color: #EEA64A;
}

div.notice, div.message, div.warning, div.date {
	color: #111;
	font-weight: bold;
	margin: 0 0 1em 0;
	padding: .5em .8em;
}
div.notice {
	background: url('../images/dots-green.gif') repeat top left;
}
div.message {
	background: url('../images/dots-blue.gif') repeat top left;
}
div.warning {
	background: url('../images/dots-red.gif') repeat top left;
}
div.date {
	background: url('../images/dots-lightgrey.gif') repeat top left;
	cursor: normal;
}
div.notice .sub, div.message .sub, div.warning .sub {
	font-size: .9em;
	color: #888;
	margin-left: .5em;
}

h2.comments {
	margin: 0 0 1.0em 0;
}
ol.comments {
	list-style: none;
	margin-bottom: 1em;
	padding: 0;
	word-wrap: break-word;
}
ol.comments li {
	margin-bottom: 1.5em;
	width: auto;
}
ol.comments li blockquote {
	background: #111;
	color: #eee;
	margin: 0;
	padding: 1em 1em 0;
}
ol.comments li blockquote p {
	padding: 0 0 1em;
}
ol.comments li blockquote blockquote {
	padding: 0 1em;
	color: #aaa;
}
ol.comments li cite {
	background: #141414;
	color: #666;
	display: block;
	font-style: normal;
	margin: 0;
	padding: .4em 1.3em;
}
ol.comments li cite a:link,
ol.comments li cite a:visited {
	color: #bbb;
}
ol.comments ul {
	padding: 0 0 1em;
}
ol.comments ol li,
ol.comments ul li {
	margin: 0;
}
ol.comments ol li {
	list-style-type: decimal;
}

#add_comment {
	margin-top: 3em;
}

div.post {
	margin: 0 0 3em;
	word-wrap: break-word;
}
div.post a:link,
div.post a:visited {
	color: #3f5161;
}
div.post h2 {
	font-size: 2em;
	padding: 0 0 .3em 0;
	margin: 0;
}
div.post h2 a:link,
div.post h2 a:visited {
	color: #222;
	font-size: .8em;
	font-style: normal;
	font-weight: bold;
}
div.post h2 a:hover {
	color: #000;
}
div.post .pinned_text {
	content: "!";
	float: left;
	font-size: 1.5em;
	font-weight: bold;
	margin: .15em 0 0 -1em;
	color: #e35533;
}
div.post p,
div.page p {
	padding: 0 0 1em;
}
div.post blockquote {
	padding: .5em .8em;
	background: #f9f9f9;
	border: .1em solid #eee;
	color: #333;
	margin: 0 0 1em 0;
}
div.post blockquote p {
	padding: 0;
}
div.post span.info,
div.post span.controls,
div.page span.controls {
	background-color: #111;
	color: #666;
	float: left;
	margin: .6em 0 0 0;
	padding: .3em .6em;
}
div.post span.info a:link,
div.post span.info a:visited {
	color: #bbb;
	padding: none;
}
div.post span.controls,
div.page span.controls {
	background-color: #eee;
	color: #ccc;
	margin: .6em 0 0 .6em;
}
div.post.text ul {
	margin-bottom: 1em;
}
div.post.quote blockquote {
	background: none;
	border: 0;
	color: #777;
	font: 2em/1.25em normal "palatino linotype", palatino, georgia, "times new roman", times, serif;
	margin: 0 0 -.5em 0;
	padding: 0;
}
div.post.quote .source {
	color: #999;
	display: block;
	margin: .8em 0 1em 0;
}
div.post.quote .source p {
	display: inline;
	margin: 0;
}
div.post.link h2 a:link,
div.post.link h2 a:visited {
	color: #3f5161;
	font-size: 1.2em;
	margin: 0 0 -.5em 0;
	padding: 0;
	text-decoration: underline;
}
div.post.link h2 a:hover {
	color: #354451;
}
div.post.link p {
	color: #444;
}
div.post.chat p {
	display: inline;
}
div.post.chat ul {
	font-family: "monaco", monospace;
	font-size: .9em;
	margin: 0 1em 1em 0;
	padding: 0;
	color: #535353;
}
div.post.chat ul li {
	background: none;
	list-style-type: none;
	padding: 0;
}
div.post.chat li .label {
	color: #2D3879;
}
div.post.chat li.me .label {
	color: #AB2F26;
}
div.post.photo img {
	background-color: #111;
	padding: .3em;
}
div.post.photo img a:link,
div.post.photo img a:visited {
	border: none;
}
div.post.photo p,
div.post.audio p,
div.post.video p {
	color: #444;
	margin: .4em 0;
}
div.post.video .object-youtube,
div.post.video .embed-youtube {
	width: 440px;
	height: 366px;
}

div.page h1 {
	margin-bottom: .5em;
	color: #4f3a56;
	font: bold 2.2em "palatino linotype", palatino, georgia, "times new roman", times, serif;
	letter-spacing: -.01em;
}
div.page span.controls {
	float: right;
}

.inline_edit {
	color: #ddd;
	padding: 1em;
	background: #111;
}
.inline_edit input[type="text"],
.inline_edit textarea {
	background-color: #222;
	border: none;
	color: #eee;
	padding: .4em;
<?php if (substr_count($_SERVER['HTTP_USER_AGENT'], "Safari")): ?>
	width: 45.875em;
<?php else: ?>
	width: 41.4em;
<?php endif; ?>
}
.inline_edit input[type="file"] {
	color: #eee;
}
.inline_edit .more_options_link:link {
	color: #5B7C99;
	display: block;
	font-weight: bold;
	padding: 0 0 .3em 0;
}
.inline_edit .more_options {
	background-color: #1a1a1a;
	padding: 1em;
}
.inline_edit .more_options p {
	float: left;
	width: 50%;
	height: 5.5em;
	margin: 0;
}
.inline_edit .more_options p input[type="text"] {
	width: 90%;
	margin-bottom: 0;
}
.inline_edit .more_options p .sub {
	font-size: .8em;
	color: #777;
}
.inline_edit .buttons {
	padding: .5em;
	background: #1a1a1a;
	color: #ddd;
}
.inline_edit h2 {
	color: #83A650;
}
.post_edit {
	margin-bottom: 2em;
}

div.pagination {
	margin: 0 0 2em 0;
}

.sub {
	font-size: .85em;
	color: #999;
	font-weight: normal;
}

button {
	background-color: #664761;
	border: 1px solid #795473;
	border-bottom: 1px solid #593E55;
	border-right: 1px solid #593E55;
	color: #ddd;
	font-size: 1em;
	font-weight: bold;
	padding: 5px 8px;
}
button:hover {
	color: #fff;
	cursor: pointer;
}

p.lost_pass {
	margin: 0 0 1em 0;
}

span.pages {
	color: #888;
	font-weight: bold;
	padding: 0 0.3em;
}
span.who,
span.waiting {
	background-color: #e2e2e2;
	font-weight: bold;
	display: block;
	margin: 0 0 1em;
	padding: 4px 6px;
}

.clear {
	clear: both;
}
.right {
	float: right;
}
.left {
	float: left;
}
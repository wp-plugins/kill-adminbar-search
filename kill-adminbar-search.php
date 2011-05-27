<?php
/*
Plugin Name: Kill Adminbar Search
Plugin URI: http://somadesign.ca/
Description: Kills the adminbar search field.
Author: Soma Design
Author URI: http://somadesign.ca/
Version: 1.0
*/
/*
Copyright (c) Soma Design. http://somadesign.ca/

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/


add_action('wp_before_admin_bar_render', 'sd_before_admin_bar');
add_action('wp_after_admin_bar_render', 'sd_after_admin_bar');

function sd_before_admin_bar() {
	ob_start();
}
function sd_after_admin_bar() {
	echo str_replace( 'id="adminbarsearch-wrap"', 'id="adminbarsearch-wrap" style="display:none"', ob_get_clean() );
}
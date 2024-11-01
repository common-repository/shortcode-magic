<?php
/**
* Plugin Name: Shortcode Magic
* Plugin URI: http://www.678studios.tk/p/shortcode-magic.html
* Description: A plugin of quick and easy to use shortcodes, with little to no coding knowledge required.
* Version: 1.5.1
* Author: 678 Studios
* Author URI: http://www.678studios.tk/
* License: GPL2
*/
 
 /* Copyright 2013 i678 (email : 6title78cp@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

// Use *THIS FILE* for releasing on Wordpress.org!!!

//Social area - Start
// Start the [irc] shortcode
function irc_short( $atts ){
        extract( shortcode_atts( array(
                'network' => 'irc.techmansworld.com',
                'channel' => 'Lounge'
        ), $atts ) );
        
        return "<iframe src=\"https://kiwiirc.com/client/$network/#$channel\" style=\"border:0; width:100%; height:450px;\"></iframe>";
}
// End the [irc] shortcode


// Start the [ircraw] shortcode
function ircraw_short( $atts ){
        extract( shortcode_atts( array(
                'network' => 'irc.techmansworld.com',
                'channel' => 'Lounge',
                'port' => '6697',
                'networkname' => 'Techmans World IRC'
        ), $atts ) );
        
        return "Click <a href=\"irc://$network:$port/$channel\" rel=\"nofollow\">here to join $networkname's $channel channel!</a>";
}
// End the [ircraw] shortcode


// Start the [twitter] shortcode
function twit_short( $atts ){
        extract( shortcode_atts( array(
                'text' => 'Check me out on Twitter!',
                'user' => 'Twitter'
        ), $atts ) );
        
        return "<a href=\"http://twitter.com/$user\">$text</a>";
}
// End the [twitter] shortcode


// Start the [yt] and [youtube] shortcodes
function yt_short( $atts ){
        extract( shortcode_atts( array(
                'text' => 'Find me on YouTube!',
                'user' => 'YouTube'
        ), $atts ) );
        
        return "<iframe width=\"$width\" height=\"$height\" src=\"//www.youtube.com/embed/$video\" frameborder=\"0\" allowfullscreen></iframe>";
}
// End the [yt] and [youtube] shortcodes


// Start the [twitch] shortcode
function twitch_short( $atts ){
        extract( shortcode_atts( array(
                'text' => 'Watch me on Twitch!',
                'user' => 'Twitch'
        ), $atts ) );
  
        return "<a href=\"http://twitch.tv/$user\">$text</a>";
}
// End the [twitch] shortcode
//Social area - End


//Game sites - start
// Start the [mcskin] shortcode
function mcsk_short( $atts ){
        extract( shortcode_atts( array(
                'player' => 'Notch'
        ), $atts ) );
        
        return "<a href=\"http://minecraft.aggenkeech.com/player/$player\" rel=\"nofollow\">Check out my Minecraft skin!</a>";
}
// End the [mcskin] shortcode


// Start the [minecraft] shortcode
function mc_short( $atts ){
        extract( shortcode_atts( array(
                'text' => 'here'
        ), $atts ) );
        
        return "Click <a href=\"http://minecraft.net\">here</a> to see the official Minecraft website!";
}
// End the [minecraft] shortcode


// Start the [mcstatus] shortcode
function mcstatus_short( $atts ){
        extract( shortcode_atts( array(
                'test' => 'test'
        ), $atts ) );
        
        return "You can check out the current <a href=\"http://xpaw.ru/mcstatus/\">Minecraft servers status</a> here!";
}
// End the [mcstatus] shortcode
//Game sites - end

//General Area - Start
// Start the [rank] shortcode
function rank_short( $atts ){
        extract( shortcode_atts( array(
                'user' => 'i678',
                'rank' => 'Coder',
                'support' => 'can',
                'gender' => 'them',
        ), $atts ) );
        
        return "<span style=\"color:green\">$user</span> is ranked \"<span style=\"color:red\">$rank</span>\", you <span style=\"color:green\">$support</span> ask $gender for support.";
}
// End the [rank] shortcode


// Start the [ytvid] and [youtubevid] shortcodes
function ytvid_short( $atts ){
        extract( shortcode_atts( array(
                'video' => 'Z9x2snkWMd8',
                'height' => '315',
                'width' => '560'
        ), $atts ) );
        
        return "<a href=\"http://youtube.com/user/$user\">$text</a>";
}
// End the [ytvid] and [youtubevid] shortcodes


// Start the [facebook] shortcode
function fb_short( $atts ){
        extract( shortcode_atts( array(
                'user' => 'facebook'
        ), $atts ) );
        
        return "Like me on <a href=\"http://facebook.com/$user\">Facebook</a>!";
}
// End the [facebook] shortcode

// Start the [emailme] shortcode
function emailme_short( $atts ){
        extract( shortcode_atts( array(
                'email' => 'myemail@email.com'
        ), $atts ) );
        
        return "Email me <a href=\"mailto:$email\" rel=\"nofollow\">by clicking here!</a>";
}
// End the [emailme] shortcode


// Start the [twitchemote] shortcode
function twitchem_short( $atts ){
        extract( shortcode_atts( array(
                'emote' => 'Kappa'
        ), $atts ) );
        
        return "Click <a href=\"http://twitchemotes.com/emote/$emote\">here</a> to check out the info for the Twitch emote \"$emote\"!";
}
// End the [helloworld] shortcode


// Start the [soundcloud] shortcode
function scloud_short( $atts ){
        extract( shortcode_atts( array(
                'type' => 'song',
                'artist' => 'jimjum',
                'song' => 'jimjum-warbinator-the'
        ), $atts ) );
        
        return "Check out <a href=\"http://soundcloud.com/$songartist/$song\" rel=\"nofollow\">this SoundCloud $type</a>!";
}
// End the [soundcloud] shortcode
//General Area - end

// User shortcode


// general shortcodes - start
add_shortcode( 'mcskin', 'mcsk_short' );
add_shortcode( 'rank', 'rank_short' );
add_shortcode( 'soundcloud', 'scloud_short' );
add_shortcode( 'tweet', 'tweet_short' );
//add_shortcode( 'user', 'user_short' )
// general shortcodes - end

// game sites - start
add_shortcode( 'minecraft', 'mc_short' );
add_shortcode( 'mcstatus', 'mcstatus_short' );
// game sites - end

// video shortcodes - start
add_shortcode( 'facebook', 'fb_short' );
add_shortcode( 'emailme', 'emailme_short' );
add_shortcode( 'twitchemote', 'twitchem_short' );
add_shortcode( 'ircraw', 'ircraw_short' );
add_shortcode( 'twitter', 'twit_short' );
add_shortcode( 'irc', 'irc_short' );
// video sites - end

// social shortcodes - start
add_shortcode( 'twitch', 'twitch_short' );
add_shortcode( 'youtubevid', 'yt_short' );
add_shortcode( 'ytvid', 'yt_short' );
add_shortcode( 'yt', 'ytvid_short' );
add_shortcode( 'youtube', 'ytvid_short' );
// social shortcodes - end

// Admin Panel - start
add_action( 'admin_menu', 'shortcode_magic_admin' );

function shortcode_magic_admin() {
	add_posts_page( 'Shortcodes', 'Shortcode Magic', 'manage_options', 'shortcode_magic', 'shmagic_admin' );
}

function shmagic_admin() {
	if ( !current_user_can( 'publish_posts' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<h1>Shortcode Magic</h1>';
	echo '<p><strong>Your version: 1.5.1</strong></p>';
	echo '<p>Defaults are located <a href="https://github.com/678Studios/shortcode-magic/wiki/Shortcodes-Defaults">here</a></p>';
	echo '<h2>Social</h2>';
	echo '<h3>[irc] Shortcode</h3>';
	echo '<p>Embed a KiwiIRC chat window.</p>';
	echo '<p><strong>Usage:</strong> [irc network="network.ip" channel="channelname"]</p>';
	echo '<h3>[ircraw] Shortcode</h3>';
	echo '<p>Embed an irc:// link.</p>';
	echo '<p><strong>Usage:</strong> [ircraw network="network.ip" channel="channelname" networkname="Network Name"]</p>';
	echo '<p><span style="color:red">Notice: This shortcode is not 100% recommended, but is available. It uses an <strong>irc://</strong> link, so this may not work with some users configurations.</span></p>';
	echo '<h3>[twitter] Shortcode</h3>';
	echo '<p>Embed a Twitter link.</p>';
	echo '<p><strong>Usage:</strong> [twitter user="username" text="Your text here"]</p>';
	echo '<h3>[youtube]/[yt] Shortcode</h3>';
	echo '<p>Embed a YouTube video.</p>';
	echo '<p><strong>Usage:</strong> [youtube video="video_linK"] (You can find the video link like this: youtube/watch?v=<span style="color:red">video</span>.)</p>';
	echo '<h3>[ytuser]/[youtubeuser] Shortcode</h3>';
	echo '<p>Insert a link to a YouTube user page.</p>';
	echo '<p><strong>Usage:</strong> [ytuser user="username"]</p>';
	echo '<h2>Games Shortcodes</h2>';
	echo '<h3>[minecraft] Shortcode</h3>';
	echo '<p>Embed a link to the official Minecraft site. Nothing to configure here.</p>';
	echo '<h3>[mcskin] Shortcode</h3>';
	echo '<p>Embed a link to a Minecraft user skin.</p>';
	echo '<p><strong>Usage:</strong> [mcskin player="playername"]</p>';
	echo '<h3>[mcstatus] Shortcode</h3>';
	echo '<p>Embed a link to the (un)official MC Status site. Nothing to configure here.</p>';
	echo '<h2>General Shortcodes</h2>';
	echo '<h3>[rank] Shortcode</h3>';
	echo '<p>Embed info about a user\'s rank. <strong>It is recommended if there is an area in this shortcode like "yes/no" to use one of the two.</strong></p>';
	echo '<p><strong>Usage:</strong> [rank user="user" rank="rank" gender="him/her" support="can/cannot"]</p>';
	echo '</div>';
}
// Admin Panel - end


 ?>

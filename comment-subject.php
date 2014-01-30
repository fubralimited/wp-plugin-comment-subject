<?php
/**
 * ============================================================================
 * Comment Subject
 * ============================================================================
 *
 * @package     WordPress
 * @subpackage  Plugin: Comment Subject
 * @author      Neil Sweeney <neil.sweeney@fubra.com>
 * @license     GPL-2.0+
 *
 * ----------------------------------------------------------------------------
 *
 * @wordpress-plugin
 * Plugin Name:  Comment Subject
 * Description:  Adds a subject field to your comments
 * Version:      1.0.0
 * Author:       Neil Sweeney <neil.sweeney@fubra.com>
 * Author URI:   http://wolfiezero.com/
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI:  fubralimited/wp-plugin-comment-subject
 * GitHub Branch:      master
 */


// ----------------------------------------------------------------------------
// Accessed Directly
// ----------------------------------------------------------------------------

if( !defined( 'WPINC' ) ) die;


// ----------------------------------------------------------------------------
// Hooks
// ----------------------------------------------------------------------------

// Actions
add_action( 'comment_post', array( 'CommentSubject', 'save_comment_subject' ) );

// Filters
add_filter( 'comment_form_logged_in_after', array( 'CommentSubject', 'custom_fields' ), 99 );
add_filter( 'comment_form_after_fields', array( 'CommentSubject', 'custom_fields' ), 99 );

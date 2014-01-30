<?php

/**
 * @package     WordPress
 * @subpackage  Plugin: Comment Subject
 * @author      Neil Sweeney <neil.sweeney@fubra.com>
 * @license     GPL-2.0+
 */
class CommentSubject {

    function custom_fields () {

        $html = '';

        $html .= '<p class="comment-form-subject">';
            $html .= '<label for="subject">' . __( 'Subject' ) . '</label>' .
            $html .= '<input id="subject" name="subject" type="text" size="30" />' .
        $html .= '</p>';

    }

    function save_comment_subject( $comment_id ) {

        if ( ( isset( $_POST['subject'] ) ) && ( $_POST['subject'] != '') ){

            $subject = wp_filter_nohtml_kses( $_POST['subject'] );
            add_comment_meta( $comment_id, 'comment_subject', $subject );

        }

    }

}
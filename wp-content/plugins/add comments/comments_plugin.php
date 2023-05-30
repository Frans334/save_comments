<?php
/**
 * Plugin Name:add comments
 * Description: adds comments to external api
 * Author: Frans Marumo
 * version:0.1.0
 * Text Domain: add-comments
 */

 defined('ABSPATH') or die;

 ?><script>
        function save_comment(){
            
       <?php
            function add_comment_api(){
                ?>
    <form method='post' action='' onsubmit="return save_comment()">
        <label for="txtComment">Add your comment<label>
        <textarea name="txtComment"></textarea>
        <input type="submit" value="Save comment">
    </form>


<?php
                $url = 'http://127.0.0.1:8000/api/store';
            
                $args = array(
                    'Method' => 'POST',
                    'body' => array('comment_description' =>$_REQUEST['txtComment'] ),
            
                ); 
                $response = wp_remote_post($url, $args); 
            }
        ?>}
    </script>
<?php  

add_action('admin_menu', 'add_comments_menu');

function add_comments_menu(){
    add_menu_page(
        'Add Comment',
        'Add comment',
        'manage_options',
        'comments-plugin',
        'add_comment_api',
        'dashicons-book',
        16,
    );
}






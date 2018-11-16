<?php

function add_custom_script(){
?>
<script type="text/javascript">
jQuery(window).load(function(){
	jQuery('.open-popup-link').magnificPopup({
	  type:'inline',
	  midClick: true
	});
});
</script>
<?php
}
add_action('wp_footer', 'add_custom_script');


?>
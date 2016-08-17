<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<div class="fw-alert fw-alert-<?php echo esc_attr( $atts['type'] ); ?>">
	<?php
	switch ( $atts['type'] ) {
		case 'success' :
			echo '<i class="fa fa-check-circle alert-icon"></i>';
			echo '<strong>' . __( 'Congratulations!', 'guitar' ) . '</strong> ';
			break;
		case 'info' :
			echo '<i class="fa fa-exclamation-circle alert-icon"></i>';
			echo '<strong>' . __( 'Information!', 'guitar' ) . '</strong> ';
			break;
		case 'warning' :
			echo '<i class="fa fa-warning alert-icon"></i>';
			echo '<strong>' . __( 'Alert!', 'guitar' ) . '</strong> ';
			break;
		case 'danger' :
			echo '<i class="fa fa-times-circle alert-icon"></i>';
			echo '<strong>' . __( 'Error!', 'guitar' ) . '</strong> ';
			break;
	}
	echo esc_attr($atts['message']);
	?>
</div>
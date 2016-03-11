

<div class="wrap">

<?php if ( isset( $_GET['alert'] ) ) : ?>
	<div class="notice notice-success">
		<p>
			<?php echo $_GET['alert']; ?>
		</p>
	</div>
<?php endif // alert ?>
	<form action="" method="post">
		<table class="form-table">
			<td>
				<label class="radio">
					<input type="radio" name="request" value="Technical support request" checked>
					<span><?php esc_attr_e( 'Request technical support', 'kanban' ); ?></span>
				</label>
				
			</td>
		</table>
	</form>

<?php
global $wpdb;
if(isset($_GET['action']) && $_GET['action'] == 'wp_dummy_content_generator_deleteproducts'){
	wp_dummy_content_generatorDeleteFakeProducts();
	wp_redirect("admin.php?page=wp_dummy_content_generator-products&tab=view_products&status=success");
}
$wp_dummy_content_generatorQueryData = wp_dummy_content_generatorGetFakeProductsList();
$wp_dummy_content_generatorProductData = $wp_dummy_content_generatorQueryData->posts;
$wp_dummy_content_generatorActual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 ?>
 <h2>Bellow are all the products generated by this plugin 
 	<?php if ( !empty($wp_dummy_content_generatorProductData) ) { ?>
	 	<span class="deleteSpan">
	 		<a onclick="return confirm('Are you sure you want to delete all dummy products generated by this plugin?')" class="wp_dummy_content_generator-btn wp_dummy_content_generator-btnRed" href="<?=$wp_dummy_content_generatorActual_link?>&action=wp_dummy_content_generator_deleteproducts">Delete dummy products</a>
	 	</span>
 	<?php } ?>
 </h2>
<table id="wp_dummy_content_generatorListProductsTbl" class="stripe" style="width:100%">
	<thead>
		<tr>
			<th>#</th>
			<th>Product title</th>
			<th>Product Status</th>
			<th>Created date</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if ( !empty($wp_dummy_content_generatorProductData) ) {
			$counter = 1;
			foreach ($wp_dummy_content_generatorProductData as $key => $productDatavalue){ ?>
				<tr>
					<td><?=$counter?></td>
					<td><?=$productDatavalue->post_title?></td>

					<td><?=$productDatavalue->post_status?></td>
					<td><?=date("F jS, Y", strtotime($productDatavalue->post_date));?></td>
				</tr>
				<?php
				$counter++;
			}
			wp_reset_postdata();
		} ?>
	</tbody>
</table>
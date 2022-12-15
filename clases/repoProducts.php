<?php

	abstract class repoProducts {
		public abstract function getProducts();
		public abstract function getProductById($product_id);
		public abstract function getProductBySku($product_sku);
		public abstract function setProductAsUnavailable($product_id);
		public abstract function getPaymentType($payment_type_id);
		public abstract function getPaymentStatus($payment_status);
		public abstract function saveTransaction( $user, $product, $payments );
		
	}

?>
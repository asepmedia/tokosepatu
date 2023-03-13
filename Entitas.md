Entitas
-Pelanggan
-Produk
-Produk Kategori
-Keranjang
-Order
-Admin


1.customers
--id
--name
--email
--phone
--name
--password

2.product_categories
--id
--name

3.products
--id
--name
--slug
--description
--image
--price
--stock
--is_publish

4.carts
--id
--customer_id
--product_id
--qty

5.addresses
--id
--customer_id
--address
--is_main

6.orders
--id
--customer_id
--address_id
--order_number
--discount
--subtotal
--grand_total
--order_status [pending, paid. dll]

7.order_details
--id
--order_id
--product_id
--qty
--discount
--subtotal
--grand_total
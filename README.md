# Special Offer API in Magento 2

This document outlines the steps for implementing a special offer product API, adding an observer for product save events, creating a Promotion CRUD in the admin panel, and running PHPUnit tests.

## 1. Retrieve Special Offer Products

We have implemented a custom route to retrieve only the products where the 'Special Offer' attribute is applied.

- **Route:** `specialprice/api/specialoffer`
- **Purpose:** To fetch and display only products with the 'Special Offer' attribute enabled.

## 2. Special Offer API Route

We have created a custom API route to retrieve only the products with the 'Special Offer' attribute set to true.

- **Route:** `specialprice/api/specialoffer`
- **Purpose:** To fetch and return only products marked as 'Special Offer'.

## 3. Observer for Product Save Event

An observer is implemented to listen to the `catalog_product_save_after` event. If the product has the 'Special Offer' attribute set to true, it will log the product data.

- **Event:** `catalog_product_save_after`
- **Condition:** If 'Special Offer' is true.
- **Logger Output:**
  ```json
  Special Offer Product: {"ID":"1","Name":"Special Offer Product","Price":"349.000000","Special Offer":"1"}
  ```

## 4. Promotion CRUD in Admin Panel

A Promotion CRUD interface has been added under **Marketing → Promotions** in the Magento admin panel. This allows admin users to manage special promotions.

- **Location:** `Marketing → Promotions`
- **Functionality:** Add, Edit, View, and Delete promotions.

## 5. Running PHPUnit Tests

Unit tests are included to ensure the functionality works as expected. To run the PHPUnit tests, use the following command:

```bash
php bin/magento dev:tests:run unit
```

This command will execute all unit tests, verifying the correctness of the special offer API, the observer logic, and the CRUD operations for promotions.

---

By following this guide, you can ensure that special offer products are correctly filtered via API, logged after product save events, and managed through a dedicated admin interface, with unit tests validating the entire setup.

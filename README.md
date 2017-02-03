Catalog API
====




Order API
====

1) `GET /orders/{id}`

- method

  ```php
  getOrder($orderId)
  ```

- data

  ```php
  uuid $orderId
  ```

- return

  - on success

    ```javascript
    {
      statusCode: 200,
      order: order_object
    }
    ```

    Where order object is like this:

    ```javascript
    {
        id: '274e918b-63d6-4cc7-af08-66d79cff2b3b',
        product_amount: { value: 10050, currency: 'EUR' },
        transaction_amount: { value: 10050, currency: 'EUR' },
        current_status: 'pending',
        created_at: 'Mon Jul 04 2016 10:13:08 GMT+0200 (CEST)',
        merchant_id: '77e3faaa-b40e-4ba1-a506-80a3d08c2d16',
        merchant_order_reference: null,
        product_id: '99e3faaa-b40e-4ba1-a506-80a3d08c2d16',
        product: { product_object },
        quantity: 1,
        shipment_amount: { value: 10050, currency: 'EUR' },
        sku_id: '00e3faaa-b40e-4ba1-a506-80a3d08c2d16',
        status: [ { date: '2016-07-04T08:13:08.197766+00:00', status: 'pending' } ],
        transaction_id: '88e3faaa-b40e-4ba1-a506-80a3d08c2d16',
        vat: { product: 20, shipment: 20 },
        updated_at: null,
        user_id: '77e3faaa-b40e-4ba1-a506-80a3d08c2d16',
        user: { user_object }
    }
    ```

   - on error

    ```javascript
    {
      statusCode: integer,
      message: string
    }
    ```


2) `PUT /orders/{id}`

- method

  ```php
  putOrder($data)
  ```

- data

  ```php
  array(
    'oyst_order_id'   => integer
    'order_reference' => 'MYLOCALORDERREF'
  )
  ```

  or

  ```php
  array(
    'oyst_order_id' => integer
    'status'        => string
  )
  ```

  Where `status` can take one of these values `[accepted, denied, pending, refunded]`

- return

  - on success

    ```javascript
    {
      statusCode: 200,
      order: order_object
    }
    ```

    Where order object is like this:

    ```javascript
    {
      id: '274e918b-63d6-4cc7-af08-66d79cff2b3b',
      product_amount: { value: 10050, currency: 'EUR' },
      transaction_amount: { value: 10050, currency: 'EUR' },
      current_status: 'pending',
      created_at: 'Mon Jul 04 2016 10:13:08 GMT+0200 (CEST)',
      merchant_id: '77e3faaa-b40e-4ba1-a506-80a3d08c2d16',
      merchant_order_reference: null,
      product_id: '99e3faaa-b40e-4ba1-a506-80a3d08c2d16',
      product: { product_object },
      quantity: 1,
      shipment_amount: { value: 10050, currency: 'EUR' },
      sku_id: '00e3faaa-b40e-4ba1-a506-80a3d08c2d16',
      status: [ { date: '2016-07-04T08:13:08.197766+00:00', status: 'pending' } ],
      transaction_id: '88e3faaa-b40e-4ba1-a506-80a3d08c2d16',
      vat: { product: 20, shipment: 20 },
      updated_at: null,
      user_id: '77e3faaa-b40e-4ba1-a506-80a3d08c2d16',
      user: { user_object }
    }
    ```

   - on error

    ```javascript
    {
      statusCode: integer,
      message: string
    }
    ```

Payment API
====

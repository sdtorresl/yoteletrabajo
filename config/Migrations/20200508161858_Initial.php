<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up()
    {
        $this->table('addresses')
            ->addColumn('address', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('city_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'city_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('categories')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('keywords', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('parent_category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'parent_category_id',
                ]
            )
            ->create();

        $this->table('categories_images', ['id' => false, 'primary_key' => ['category_id', 'image_id']])
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('image_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'category_id',
                ]
            )
            ->addIndex(
                [
                    'image_id',
                ]
            )
            ->create();

        $this->table('cities')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('country_code', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'country_code',
                ]
            )
            ->create();

        $this->table('contacts')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('message', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('viewed', 'boolean', [
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('countries')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('code', 'string', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'code',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('currencies')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('code', 'string', [
                'default' => null,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('rate_to_usd', 'decimal', [
                'default' => '1',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'code',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('discounts')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => 16777215,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('expiry_date', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('value', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 3,
                'scale' => 2,
            ])
            ->create();

        $this->table('images')
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('filename', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('directory', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('size', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('format', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 55,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('invoices')
            ->addColumn('expiry_date', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('customer_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('currency_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('total', 'decimal', [
                'default' => '0.00',
                'null' => false,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('state', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'currency_id',
                ]
            )
            ->addIndex(
                [
                    'created_by',
                ]
            )
            ->create();

        $this->table('items', ['id' => false, 'primary_key' => ['id', 'invoice_id']])
            ->addColumn('id', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('invoice_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('image', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('price', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('discount', 'decimal', [
                'default' => '0.00',
                'null' => false,
                'precision' => 3,
                'scale' => 2,
            ])
            ->addColumn('quantity', 'smallinteger', [
                'default' => '1',
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('total', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addIndex(
                [
                    'invoice_id',
                ]
            )
            ->create();

        $this->table('notes')
            ->addColumn('note', 'text', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('invoice_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'invoice_id',
                ]
            )
            ->addIndex(
                [
                    'created_by',
                ]
            )
            ->create();

        $this->table('pages')
            ->addColumn('key', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('content', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('summary', 'text', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'key',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'created_by',
                ]
            )
            ->create();

        $this->table('podcasts')
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('keywords', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('filename', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('directory', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('size', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('format', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 55,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'category_id',
                ]
            )
            ->create();

        $this->table('products')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('value', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('available', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('sku', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('keywords', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('attributes', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('expiry_date', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('discounts_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'sku',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'category_id',
                ]
            )
            ->addIndex(
                [
                    'discounts_id',
                ]
            )
            ->create();

        $this->table('products_images', ['id' => false, 'primary_key' => ['product_id', 'image_id']])
            ->addColumn('product_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('image_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'image_id',
                ]
            )
            ->addIndex(
                [
                    'product_id',
                ]
            )
            ->create();

        $this->table('roles')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('permissions', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('settings')
            ->addColumn('identifier', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('value', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => false,
            ])
            ->addIndex(
                [
                    'identifier',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('shopping_carts')
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('active', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('shopping_carts_products', ['id' => false, 'primary_key' => ['product_id', 'shopping_cart_id']])
            ->addColumn('product_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('shopping_cart_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'product_id',
                ]
            )
            ->addIndex(
                [
                    'shopping_cart_id',
                ]
            )
            ->create();

        $this->table('social_networks')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('link', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => false,
            ])
            ->addColumn('icon', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('taxes')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('display_name', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('tax', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 3,
                'scale' => 2,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('enabled', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $this->table('taxes_items', ['id' => false, 'primary_key' => ['tax_id', 'item_id', 'item_invoice_id']])
            ->addColumn('tax_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('item_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('item_invoice_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'item_id',
                    'item_invoice_id',
                ]
            )
            ->addIndex(
                [
                    'tax_id',
                ]
            )
            ->create();

        $this->table('users')
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('last_name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => false,
            ])
            ->addColumn('login_attempts', 'smallinteger', [
                'default' => '0',
                'limit' => 6,
                'null' => true,
            ])
            ->addColumn('recovery_token', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('token_expiry_date', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('enabled', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('role_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'role_id',
                ]
            )
            ->create();

        $this->table('users_shopping_carts', ['id' => false, 'primary_key' => ['user_id', 'shopping_cart_id']])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('shopping_cart_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'shopping_cart_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('addresses')
            ->addForeignKey(
                'city_id',
                'cities',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('categories')
            ->addForeignKey(
                'parent_category_id',
                'categories',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('categories_images')
            ->addForeignKey(
                'category_id',
                'categories',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'image_id',
                'images',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('cities')
            ->addForeignKey(
                'country_code',
                'countries',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('invoices')
            ->addForeignKey(
                'currency_id',
                'currencies',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'created_by',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('items')
            ->addForeignKey(
                'invoice_id',
                'invoices',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('notes')
            ->addForeignKey(
                'invoice_id',
                'invoices',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'created_by',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('pages')
            ->addForeignKey(
                'created_by',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('podcasts')
            ->addForeignKey(
                'category_id',
                'categories',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('products')
            ->addForeignKey(
                'category_id',
                'categories',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'discounts_id',
                'discounts',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('products_images')
            ->addForeignKey(
                'image_id',
                'images',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'product_id',
                'products',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('shopping_carts_products')
            ->addForeignKey(
                'product_id',
                'products',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'shopping_cart_id',
                'shopping_carts',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('taxes_items')
            ->addForeignKey(
                [
                    'item_id',
                    'item_invoice_id',
                ],
                'items',
                [
                    'id',
                    'invoice_id',
                ],
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'tax_id',
                'taxes',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('users')
            ->addForeignKey(
                'role_id',
                'roles',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();

        $this->table('users_shopping_carts')
            ->addForeignKey(
                'shopping_cart_id',
                'shopping_carts',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION',
                ]
            )
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down()
    {
        $this->table('addresses')
            ->dropForeignKey(
                'city_id'
            )
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('categories')
            ->dropForeignKey(
                'parent_category_id'
            )->save();

        $this->table('categories_images')
            ->dropForeignKey(
                'category_id'
            )
            ->dropForeignKey(
                'image_id'
            )->save();

        $this->table('cities')
            ->dropForeignKey(
                'country_code'
            )->save();

        $this->table('invoices')
            ->dropForeignKey(
                'currency_id'
            )
            ->dropForeignKey(
                'created_by'
            )->save();

        $this->table('items')
            ->dropForeignKey(
                'invoice_id'
            )->save();

        $this->table('notes')
            ->dropForeignKey(
                'invoice_id'
            )
            ->dropForeignKey(
                'created_by'
            )->save();

        $this->table('pages')
            ->dropForeignKey(
                'created_by'
            )->save();

        $this->table('podcasts')
            ->dropForeignKey(
                'category_id'
            )->save();

        $this->table('products')
            ->dropForeignKey(
                'category_id'
            )
            ->dropForeignKey(
                'discounts_id'
            )->save();

        $this->table('products_images')
            ->dropForeignKey(
                'image_id'
            )
            ->dropForeignKey(
                'product_id'
            )->save();

        $this->table('shopping_carts_products')
            ->dropForeignKey(
                'product_id'
            )
            ->dropForeignKey(
                'shopping_cart_id'
            )->save();

        $this->table('taxes_items')
            ->dropForeignKey(
                [
                    'item_id',
                    'item_invoice_id',
                ]
            )
            ->dropForeignKey(
                'tax_id'
            )->save();

        $this->table('users')
            ->dropForeignKey(
                'role_id'
            )->save();

        $this->table('users_shopping_carts')
            ->dropForeignKey(
                'shopping_cart_id'
            )
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('addresses')->drop()->save();
        $this->table('categories')->drop()->save();
        $this->table('categories_images')->drop()->save();
        $this->table('cities')->drop()->save();
        $this->table('contacts')->drop()->save();
        $this->table('countries')->drop()->save();
        $this->table('currencies')->drop()->save();
        $this->table('discounts')->drop()->save();
        $this->table('images')->drop()->save();
        $this->table('invoices')->drop()->save();
        $this->table('items')->drop()->save();
        $this->table('notes')->drop()->save();
        $this->table('pages')->drop()->save();
        $this->table('podcasts')->drop()->save();
        $this->table('products')->drop()->save();
        $this->table('products_images')->drop()->save();
        $this->table('roles')->drop()->save();
        $this->table('settings')->drop()->save();
        $this->table('shopping_carts')->drop()->save();
        $this->table('shopping_carts_products')->drop()->save();
        $this->table('social_networks')->drop()->save();
        $this->table('taxes')->drop()->save();
        $this->table('taxes_items')->drop()->save();
        $this->table('users')->drop()->save();
        $this->table('users_shopping_carts')->drop()->save();
    }
}

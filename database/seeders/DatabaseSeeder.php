<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Table others
        DB::table('others')->insert([
            [
                'product_id' => '1',
                'user_id' => '2',
                'like' => '1',
                'submit' => 'Good!',
                'star' => '4',
            ],
            [
                'product_id' => '1',
                'user_id' => '3',
                'like' => '1',
                'submit' => 'Verry good!',
                'star' => '5',
            ],
            [
                'product_id' => '2',
                'user_id' => '2',
                'like' => '0',
                'submit' => 'Bad!',
                'star' => '3',
            ],
            [
                'product_id' => '2',
                'user_id' => '3',
                'like' => '0',
                'submit' => 'Verry bad!',
                'star' => '2',
            ],
        ]);

        // Table detail
        DB::table('details')->insert([
            [
                'payment_id' => '1',
                'product_id' => '1',
                'quantity' => '2',
            ],
            [
                'payment_id' => '1',
                'product_id' => '2',
                'quantity' => '1',
            ],
            [
                'payment_id' => '2',
                'product_id' => '3',
                'quantity' => '3',
            ]
        ]);

        // Table Payment
        DB::table('payments')->insert([
            [
                'user_id' => '2',
                'discount' => '3',
                'created_at' => '2022-03-05',
            ],
            [
                'user_id' => '3',
                'discount' => '5',
                'created_at' => '2022-01-21',
            ]
        ]);

        //Table Users
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123456'),
                'admin' => '1',
            ],
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('user123456'),
                'admin' => '0',
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('user23456'),
                'admin' => '0',
            ],
            [
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('user3456'),
                'admin' => '0',
            ]
        ]);

        // Table Manufacturers
        DB::table('manufacturers')->insert([
            [
                'manu_name' => 'Pizza',
            ],
            [
                'manu_name' => 'Món Khai vị',
            ],
            [
                'manu_name' => 'Mì ý và Cơm',
            ],
            [
                'manu_name' => 'Nước',
            ],
            [
                'manu_name' => 'Combo',
            ]
        ]);

        // Table Products
        DB::table('products')->insert([
            [
                'manu_id' => '1',
                'product_name' => 'Pizza RAU Củ',
                'price' => '89000',
                'image' => 'anh1.jpg',
                'description' => 'mon an: pizza 1#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352 ',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '0',
                'star' => '5',
                'created_at' => '2022-01-09',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Pizza Hải SẢN',
                'price' => '299000',
                'image' => 'anh2.jpg',
                'description' => 'mon an: pizza 2#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '5',
                'star' => '4',
                'created_at' => '2021-02-09',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Pizza tomato',
                'price' => '279000',
                'image' => 'anh3.jpg',
                'description' => 'mon an: pizza 3#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '5',
                'star' => '3',
                'created_at' => '2021-03-09',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Pizza Salat',
                'price' => '299000',
                'image' => 'anh4.jpg',
                'description' => 'mon an: pizza 5#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '15',
                'feature' => '1',
                'sale' => '10',
                'star' => '3',
                'created_at' => '2020-04-19',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Pizza Xúc xích ',
                'price' => '269000',
                'image' => 'anh5.jpg',
                'description' => 'mon an: pizza 4#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '20',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2020-05-09',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Bánh mì bơ tỏi',
                'price' => '89000',
                'image' => 'k1.jpg',
                'description' => 'mon an: banh1#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '0',
                'star' => '5',
                'created_at' => '2021-06-09',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Nachos ',
                'price' => '99000',
                'image' => 'k2.jpg',
                'description' => 'mon an: banh2#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '5',
                'star' => '4',
                'created_at' => '2021-07-19',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Súp gà',
                'price' => '129000',
                'image' => 'k3.jpg',
                'description' => ' mon an: banh3#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '5',
                'star' => '3',
                'created_at' => '2020-01-19',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Khoai Lang Tây',
                'price' => '90000',
                'image' => 'k4.jpg',
                'description' => 'mon an: banh4#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '10',
                'star' => '3',
                'created_at' => '2021-03-08',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Salat ',
                'price' => '90000',
                'image' => 'k5.jpg',
                'description' => ' mon an: banh5#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '15',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2022-02-01',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Cơm chiên tôm',
                'price' => '79000',
                'image' => 'm1.jpg',
                'description' => 'mon an: com 1#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '15',
                'feature' => '1',
                'sale' => '0',
                'star' => '5',
                'created_at' => '2021-12-09',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Mì ý',
                'price' => '99000',
                'image' => 'm2.jpg',
                'description' => 'mon an: com 2#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '5',
                'star' => '4',
                'created_at' => '2021-05-10',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Cơm Gà',
                'price' => '99000',
                'image' => 'm3.jpg',
                'description' => 'mon an: com 3#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '5',
                'star' => '3',
                'created_at' => '2019-04-09',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Cơm chiên Hải sản',
                'price' => '99000',
                'image' => 'm4.jpg',
                'description' => 'mon an: com 5#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '5',
                'feature' => '0',
                'sale' => '10',
                'star' => '3',
                'created_at' => '2021-08-09',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Mì Ý BÒ',
                'price' => '99000',
                'image' => 'm5.jpg',
                'description' => 'mon an: com 1#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '10',
                'feature' => '0',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2020-07-09',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'Pessi',
                'price' => '20000',
                'image' => 'n1.jpg',
                'description' => 'mon an: nuoc 1#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '20',
                'feature' => '1',
                'sale' => '0',
                'star' => '5',
                'created_at' => '2021-09-09',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'Pessi không calo',
                'price' => '25000',
                'image' => 'n2.jpg',
                'description' => 'mon an: Nuoc 2#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '15',
                'feature' => '1',
                'sale' => '5',
                'star' => '4',
                'created_at' => '2021-10-09',
            ],
            [
                'manu_id' => '4',
                'product_name' => '7up',
                'price' => '20000',
                'image' => 'n3.jpg',
                'description' => ' mon an: Nuoc 3#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '5',
                'star' => '3',
                'created_at' => '2022-02-22',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'Trà đào ',
                'price' => '49000',
                'image' => 'n4.jpg',
                'description' => 'mon an: Nuoc 4#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '10',
                'star' => '3',
                'created_at' => '2022-02-22',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'Trà Vải',
                'price' => '49000',
                'image' => 'n5.jpg',
                'description' => 'mon an: Nuoc 5#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2020-02-24',
            ],
            [
                'manu_id' => '5',
                'product_name' => 'Combo C1',
                'price' => '399000',
                'image' => 'c1.jpg',
                'description' => ' mon an: combo1#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '0',
                'star' => '5',
                'created_at' => '2021-03-22',
            ],
            [
                'manu_id' => '5',
                'product_name' => 'Combo c2',
                'price' => '490000',
                'image' => 'c2.jpg',
                'description' => 'mon an: combo2#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '8',
                'feature' => '1',
                'sale' => '5',
                'star' => '4',
                'created_at' => '2021-11-19',
            ],
            [
                'manu_id' => '5',
                'product_name' => 'Combo C3',
                'price' => '469000',
                'image' => 'c3.jpg',
                'description' => 'mon an: combo3#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '9',
                'feature' => '1',
                'sale' => '5',
                'star' => '3',
                'created_at' => '2021-01-01',
            ],
            [
                'manu_id' => '5',
                'product_name' => 'Combo C4',
                'price' => '469000',
                'image' => 'c4.jpg',
                'description' => 'mon an: combo4#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '10',
                'feature' => '0',
                'sale' => '10',
                'star' => '3',
                'created_at' => '2022-4-16',
            ],
            [
                'manu_id' => '5',
                'product_name' => 'Combo C5',
                'price' => '299000',
                'image' => 'c2.jpg',
                'description' => ': mon an: combo5#noi san xuat: #ngay: 3 #thang: 12 #nam: 2020#size:12cm #hight: 128#with:oppp#idpass: 4352',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ]
        ]);
    }
}

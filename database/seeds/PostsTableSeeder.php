<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'tag_id' => 1,
                'title' => 'Pengenalan ReactJS',
                'alias' => 'pengenalan-reactjs',
                'description' => '<p>Contrary to popular belief, <i>Lorem Ipsum</i> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>',
                'image_post' => 'https://loremflickr.com/320/240?random=1',
                'image_banner' => 'https://loremflickr.com/320/240?random=1',
                'created_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 2,
                'tag_id' => 2,
                'title' => 'Membuat Aplikasi SPA sederhana dengan AngularJS',
                'alias' => 'membuat-aplikasi-spa-sederhana-dengan-angularjs',
                'description' => '<p>Contrary to popular belief, <i>Lorem Ipsum</i> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>',
                'image_post' => 'https://loremflickr.com/320/240?random=1',
                'image_banner' => 'https://loremflickr.com/320/240?random=1',
                'created_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 1,
                'tag_id' => 3,
                'title' => 'Pengenalan VueJS',
                'alias' => 'pengenalan-vuejs',
                'description' => '<p>Contrary to popular belief, <i>Lorem Ipsum</i> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>',
                'image_post' => 'https://loremflickr.com/320/240?random=1',
                'image_banner' => 'https://loremflickr.com/320/240?random=1',
                'created_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 3,
                'tag_id' => 4,
                'title' => 'Pengenalan Laravel Framework PHP',
                'alias' => 'pengenalan-laravel-framework-php',
                'description' => '<p>Contrary to popular belief, <i>Lorem Ipsum</i> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>',
                'image_post' => 'https://loremflickr.com/320/240?random=1',
                'image_banner' => 'https://loremflickr.com/320/240?random=1',
                'created_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 1,
                'tag_id' => 4,
                'title' => 'Instalasi Laravel Framework PHP - Part 1',
                'alias' => 'instalasi-laravel-framework-php-part-1',
                'description' => '<p>Contrary to popular belief, <i>Lorem Ipsum</i> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>',
                'image_post' => 'https://loremflickr.com/320/240?random=1',
                'image_banner' => 'https://loremflickr.com/320/240?random=1',
                'created_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 1,
                'tag_id' => 4,
                'title' => 'Pengenalan Routing di Laravel Framework PHP - Part 2',
                'alias' => 'pengenalan-routing-di-laravel-framework-php-part-2',
                'description' => '<p>Contrary to popular belief, <i>Lorem Ipsum</i> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>',
                'image_post' => 'https://loremflickr.com/320/240?random=1',
                'image_banner' => 'https://loremflickr.com/320/240?random=1',
                'created_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 1,
                'tag_id' => 4,
                'title' => 'Pengenalan Controller di Laravel Framework PHP - Part 3',
                'alias' => 'pengenalan-controller-di-laravel-framework-php-part-3',
                'description' => '<p>Contrary to popular belief, <i>Lorem Ipsum</i> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>',
                'image_post' => 'https://loremflickr.com/320/240?random=1',
                'image_banner' => 'https://loremflickr.com/320/240?random=1',
                'created_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 1,
                'tag_id' => 4,
                'title' => 'Pengenalan Model di Laravel Framework PHP - Part 4',
                'alias' => 'pengenalan-model-di-laravel-framework-php-part-3',
                'description' => '<p>Contrary to popular belief, <i>Lorem Ipsum</i> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>',
                'image_post' => 'https://loremflickr.com/320/240?random=1',
                'image_banner' => 'https://loremflickr.com/320/240?random=1',
                'created_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 3,
                'tag_id' => 5,
                'title' => 'Pengenalan Golang - Part 1',
                'alias' => 'pengenalan-golang-part-1',
                'description' => '<p>Contrary to popular belief, <i>Lorem Ipsum</i> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>',
                'image_post' => 'https://loremflickr.com/320/240?random=1',
                'image_banner' => 'https://loremflickr.com/320/240?random=1',
                'created_at' => date('Y-m-d h:i:s'),
            ],
            [
                'user_id' => 2,
                'tag_id' => 6,
                'title' => 'Pengenalan PHP Dasar - Part 1',
                'alias' => 'pengenalan-php-dasar-part-1',
                'description' => '<p>Contrary to popular belief, <i>Lorem Ipsum</i> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>',
                'image_post' => 'https://loremflickr.com/320/240?random=1',
                'image_banner' => 'https://loremflickr.com/320/240?random=1',
                'created_at' => date('Y-m-d h:i:s'),
            ]
        ]);
    }
}

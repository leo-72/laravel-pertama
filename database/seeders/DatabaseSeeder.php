<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Nadhif Pamungkas S',
        //     'email' => 'nadhifnps@gmail.com',
        //     'password' => bcrypt('npssword')
        // ]);

        // User::create([
        //     'name' => 'Ventra Mungkung',
        //     'email' => 'ventrabang@gmail.com',
        //     'password' => bcrypt('ventrabang')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quasi nobis totam, expedita numquam nihil molestiae modi, eveniet minima corporis quibusdam qui illo possimus! Culpa sunt recusandae accusantium consectetur pariatur obcaecati incidunt qui harum soluta molestiae',
        //     'body' => '<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quasi nobis totam, expedita numquam nihil molestiae modi, eveniet minima corporis quibusdam qui illo possimus! Culpa sunt recusandae accusantium consectetur pariatur obcaecati incidunt qui harum soluta molestiae et quo provident nostrum laudantium, est vel tenetur! Ex molestias itaque distinctio unde facere quis maiores, magni laborum, aperiam minus accusamus quod quisquam quidem. Voluptatibus aut, dolores ea dolorem veniam, itaque fugit quia libero id mollitia sapiente eligendi ipsa enim blanditiis pariatur, repellat nisi modi eius amet. Harum eius obcaecati quia unde? Laboriosam sapiente labore nostrum non laborum veniam officiis debitis quis! Nostrum, beatae.</p><p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique tempore illo perspiciatis officia ullam repellendus, accusantium adipisci eius sunt voluptas! Dignissimos labore numquam laboriosam cumque quam nihil rerum vitae inventore, impedit eius dicta non? Praesentium pariatur adipisci sint voluptatibus vitae tempora eaque sit consequuntur temporibus veritatis rerum, officiis illo cumque?</p><p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum provident, eum laboriosam unde autem, asperiores cum, amet quibusdam magnam nihil ab facere! Tempore sed voluptate exercitationem officiis magni laudantium repellat aut saepe inventore doloribus unde voluptates pariatur iure assumenda illo aspernatur, at veniam beatae dolor sequi qui dignissimos fuga ad! Animi assumenda doloribus et suscipit, commodi asperiores recusandae sequi ad porro cupiditate quos quibusdam ducimus nesciunt aut quia corporis culpa veniam aperiam dolor expedita error dolorum quae incidunt. Quas, expedita.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur tempora deleniti, tempore neque aperiam sapiente aliquam vitae ratione consectetur ipsam atque aut alias! Ad, natus accusantium ea mollitia doloremque veniam, exercitationem officia cum illo necessitatibus nostrum totam fuga assumenda modi.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quasi nobis totam, expedita numquam nihil molestiae modi, eveniet minima corporis quibusdam qui illo possimus! Culpa sunt recusandae accusantium consectetur pariatur obcaecati incidunt qui harum soluta molestiae',
        //     'body' => '<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quasi nobis totam, expedita numquam nihil molestiae modi, eveniet minima corporis quibusdam qui illo possimus! Culpa sunt recusandae accusantium consectetur pariatur obcaecati incidunt qui harum soluta molestiae et quo provident nostrum laudantium, est vel tenetur! Ex molestias itaque distinctio unde facere quis maiores, magni laborum, aperiam minus accusamus quod quisquam quidem. Voluptatibus aut, dolores ea dolorem veniam, itaque fugit quia libero id mollitia sapiente eligendi ipsa enim blanditiis pariatur, repellat nisi modi eius amet. Harum eius obcaecati quia unde? Laboriosam sapiente labore nostrum non laborum veniam officiis debitis quis! Nostrum, beatae.</p><p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique tempore illo perspiciatis officia ullam repellendus, accusantium adipisci eius sunt voluptas! Dignissimos labore numquam laboriosam cumque quam nihil rerum vitae inventore, impedit eius dicta non? Praesentium pariatur adipisci sint voluptatibus vitae tempora eaque sit consequuntur temporibus veritatis rerum, officiis illo cumque?</p><p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum provident, eum laboriosam unde autem, asperiores cum, amet quibusdam magnam nihil ab facere! Tempore sed voluptate exercitationem officiis magni laudantium repellat aut saepe inventore doloribus unde voluptates pariatur iure assumenda illo aspernatur, at veniam beatae dolor sequi qui dignissimos fuga ad! Animi assumenda doloribus et suscipit, commodi asperiores recusandae sequi ad porro cupiditate quos quibusdam ducimus nesciunt aut quia corporis culpa veniam aperiam dolor expedita error dolorum quae incidunt. Quas, expedita.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur tempora deleniti, tempore neque aperiam sapiente aliquam vitae ratione consectetur ipsam atque aut alias! Ad, natus accusantium ea mollitia doloremque veniam, exercitationem officia cum illo necessitatibus nostrum totam fuga assumenda modi.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quasi nobis totam, expedita numquam nihil molestiae modi, eveniet minima corporis quibusdam qui illo possimus! Culpa sunt recusandae accusantium consectetur pariatur obcaecati incidunt qui harum soluta molestiae',
        //     'body' => '<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quasi nobis totam, expedita numquam nihil molestiae modi, eveniet minima corporis quibusdam qui illo possimus! Culpa sunt recusandae accusantium consectetur pariatur obcaecati incidunt qui harum soluta molestiae et quo provident nostrum laudantium, est vel tenetur! Ex molestias itaque distinctio unde facere quis maiores, magni laborum, aperiam minus accusamus quod quisquam quidem. Voluptatibus aut, dolores ea dolorem veniam, itaque fugit quia libero id mollitia sapiente eligendi ipsa enim blanditiis pariatur, repellat nisi modi eius amet. Harum eius obcaecati quia unde? Laboriosam sapiente labore nostrum non laborum veniam officiis debitis quis! Nostrum, beatae.</p><p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique tempore illo perspiciatis officia ullam repellendus, accusantium adipisci eius sunt voluptas! Dignissimos labore numquam laboriosam cumque quam nihil rerum vitae inventore, impedit eius dicta non? Praesentium pariatur adipisci sint voluptatibus vitae tempora eaque sit consequuntur temporibus veritatis rerum, officiis illo cumque?</p><p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum provident, eum laboriosam unde autem, asperiores cum, amet quibusdam magnam nihil ab facere! Tempore sed voluptate exercitationem officiis magni laudantium repellat aut saepe inventore doloribus unde voluptates pariatur iure assumenda illo aspernatur, at veniam beatae dolor sequi qui dignissimos fuga ad! Animi assumenda doloribus et suscipit, commodi asperiores recusandae sequi ad porro cupiditate quos quibusdam ducimus nesciunt aut quia corporis culpa veniam aperiam dolor expedita error dolorum quae incidunt. Quas, expedita.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur tempora deleniti, tempore neque aperiam sapiente aliquam vitae ratione consectetur ipsam atque aut alias! Ad, natus accusantium ea mollitia doloremque veniam, exercitationem officia cum illo necessitatibus nostrum totam fuga assumenda modi.</p>'
        // ]);
    }
}

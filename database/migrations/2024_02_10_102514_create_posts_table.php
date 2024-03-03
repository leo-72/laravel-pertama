<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};


// <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nam assumenda sit! Vitae dolorem minus eveniet? Quam ullam facere perferendis, dolor nostrum quod fugiat pariatur architecto recusandae nesciunt magnam. Aliquam ipsa facere dicta doloremque. Ut voluptates recusandae illo delectus expedita deserunt, alias tenetur.</p><p class="mb-5">Cupiditate vitae a sed veniam perspiciatis, molestias modi nostrum ipsum rem fugiat at, unde beatae hic voluptatum delectus expedita voluptatibus omnis pariatur ut. Amet excepturi nulla assumenda cupiditate perferendis qui, autem debitis provident non est, ipsam culpa mollitia deleniti atque aliquid reprehenderit sequi, delectus laboriosam?</p><p class="mb-5">Odio sit deserunt explicabo iure quisquam quia aperiam voluptatibus vero quidem amet natus inventore ad, sint repellendus id laudantium unde! Placeat molestias nihil praesentium veritatis eius? At, quaerat repudiandae autem doloremque fugit ducimus impedit corrupti tempore atque recusandae debitis suscipit cum illo, expedita facilis quibusdam quo dolore deleniti omnis veritatis rem.</p><p class="mb-5">Quaerat possimus, illum culpa unde quae deleniti voluptatum impedit quasi ullam perferendis amet eos fugit numquam, beatae necessitatibus quos cupiditate aspernatur animi rem totam reprehenderit officia accusamus dolor aliquid. Quia quibusdam cupiditate necessitatibus ratione quam aperiam. Cupiditate sapiente, dolorem praesentium laborum fugit itaque ea pariatur molestias, cumque nesciunt iusto exercitationem facilis iure corporis illum quia nam deserunt laboriosam. Qui, architecto neque.</p>

// $post->create([
//     'title' => 'Judul Ketiga',
//     'slug' => 'judul-ketiga',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nam assumenda sit! Vitae dolorem minus eveniet? Quam ullam facere perferendis, dolor nostrum quod fugiat pariatur architecto recusandae nesciunt magnam. Aliquam ipsa facere dicta doloremque. Ut voluptates recusandae illo delectus expedita deserunt, alias tenetur.',
//     'body' => '<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nam assumenda sit! Vitae dolorem minus eveniet? Quam ullam facere perferendis, dolor nostrum quod fugiat pariatur architecto recusandae nesciunt magnam. Aliquam ipsa facere dicta doloremque. Ut voluptates recusandae illo delectus expedita deserunt, alias tenetur.</p><p class="mb-5">Cupiditate vitae a sed veniam perspiciatis, molestias modi nostrum ipsum rem fugiat at, unde beatae hic voluptatum delectus expedita voluptatibus omnis pariatur ut. Amet excepturi nulla assumenda cupiditate perferendis qui, autem debitis provident non est, ipsam culpa mollitia deleniti atque aliquid reprehenderit sequi, delectus laboriosam?</p><p class="mb-5">Odio sit deserunt explicabo iure quisquam quia aperiam voluptatibus vero quidem amet natus inventore ad, sint repellendus id laudantium unde! Placeat molestias nihil praesentium veritatis eius? At, quaerat repudiandae autem doloremque fugit ducimus impedit corrupti tempore atque recusandae debitis suscipit cum illo, expedita facilis quibusdam quo dolore deleniti omnis veritatis rem.</p><p class="mb-5">Quaerat possimus, illum culpa unde quae deleniti voluptatum impedit quasi ullam perferendis amet eos fugit numquam, beatae necessitatibus quos cupiditate aspernatur animi rem totam reprehenderit officia accusamus dolor aliquid. Quia quibusdam cupiditate necessitatibus ratione quam aperiam. Cupiditate sapiente, dolorem praesentium laborum fugit itaque ea pariatur molestias, cumque nesciunt iusto exercitationem facilis iure corporis illum quia nam deserunt laboriosam. Qui, architecto neque.</p>'
// ])
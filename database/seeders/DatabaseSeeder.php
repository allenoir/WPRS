<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Destinasi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Fachly Juliansyah',
            'username' => 'Fachly Juliansyah',
            'email' => 'terserahgua@gmail.com',   
            'password' => bcrypt('12345')
        ]);

        Kategori::create([
            'name'=>'Alam',
            'slug'=>'alam'
        ]);

        Kategori::create([
            'name'=>'Budaya',
            'slug'=>'Budaya'
        ]);

        Destinasi::create([
            'kategori_id'=>'1',
            'user_id'=>'1',
            'title'=> 'Karang batu anyar',
            'slug'=>'karang-batu-anyar',
            'latitude'=>'adhuhfyewugrquiuoqueyu',
            'longitude'=>'dsfdfftftfftftfytftyfyt',
            'image_path'=>'/img/gdgashdahdhaskdhk.jpg',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum magnam, saepe quae eligendi quam consectetur laboriosam? Quia cupiditate explicabo recusandae, optio error autem expedita modi? Est maxime ad neque exercitationem.',
            'body'=>'<P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio nesciunt exercitationem architecto dolor, excepturi veniam? Expedita sit exercitationem optio distinctio ad dolor odit quam, modi, officiis quo dolorem alias aliquam saepe deleniti accusantium. Accusamus molestias, eaque qui vel quibusdam provident quia id mollitia sit voluptatibus dolore ratione libero atque ut, ullam distinctio reprehenderit quas at, eveniet placeat magnam fugiat laudantium. Harum placeat perspiciatis numquam aspernatur ducimus architecto obcaecati voluptatum ad! Culpa eligendi in sint. Quis eos, iure iste ab repudiandae consequatur ad molestias impedit. Repudiandae doloribus obcaecati rerum laudantium.</P><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo rerum corporis ratione? Voluptate, corrupti? Eum doloremque dignissimos a ipsum blanditiis pariatur ipsa culpa nihil perferendis, soluta ducimus molestias? Ipsum atque officia illo voluptas repellendus voluptatem culpa hic consequatur quia quae est earum accusamus dolorem expedita voluptatibus iure repellat error quod, labore perferendis, dolor nisi, adipisci dolorum vero! Nihil, earum consequuntur? Voluptatum facere commodi eum similique officiis eveniet? Numquam, sit! Dolor cupiditate architecto officiis temporibus fugiat tenetur, sint repellendus aut quibusdam natus! Expedita iusto dolorem sit consequuntur nobis dolores velit voluptatibus. Harum aspernatur nulla itaque maxime neque asperiores eveniet quidem fugit officiis ratione, excepturi et, provident omnis unde pariatur. Eos aspernatur ea quos nisi iure corporis illum voluptas quisquam nemo placeat?</p>',
        ]);

        Destinasi::create([
            'kategori_id'=>'1',
            'user_id'=>'1',
            'title'=> 'Curug Panganten',
            'slug'=>'curug-panganten',
            'latitude'=>'adhuhfyewugrquiuoqueyu',
            'longitude'=>'dsfdfftftfftftfytftyfyt',
            'image_path'=>'/img/gdgashdahdhaskdhk.jpg',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum magnam, saepe quae eligendi quam consectetur laboriosam? Quia cupiditate explicabo recusandae, optio error autem expedita modi? Est maxime ad neque exercitationem.',
            'body'=>'<P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio nesciunt exercitationem architecto dolor, excepturi veniam? Expedita sit exercitationem optio distinctio ad dolor odit quam, modi, officiis quo dolorem alias aliquam saepe deleniti accusantium. Accusamus molestias, eaque qui vel quibusdam provident quia id mollitia sit voluptatibus dolore ratione libero atque ut, ullam distinctio reprehenderit quas at, eveniet placeat magnam fugiat laudantium. Harum placeat perspiciatis numquam aspernatur ducimus architecto obcaecati voluptatum ad! Culpa eligendi in sint. Quis eos, iure iste ab repudiandae consequatur ad molestias impedit. Repudiandae doloribus obcaecati rerum laudantium.</P><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo rerum corporis ratione? Voluptate, corrupti? Eum doloremque dignissimos a ipsum blanditiis pariatur ipsa culpa nihil perferendis, soluta ducimus molestias? Ipsum atque officia illo voluptas repellendus voluptatem culpa hic consequatur quia quae est earum accusamus dolorem expedita voluptatibus iure repellat error quod, labore perferendis, dolor nisi, adipisci dolorum vero! Nihil, earum consequuntur? Voluptatum facere commodi eum similique officiis eveniet? Numquam, sit! Dolor cupiditate architecto officiis temporibus fugiat tenetur, sint repellendus aut quibusdam natus! Expedita iusto dolorem sit consequuntur nobis dolores velit voluptatibus. Harum aspernatur nulla itaque maxime neque asperiores eveniet quidem fugit officiis ratione, excepturi et, provident omnis unde pariatur. Eos aspernatur ea quos nisi iure corporis illum voluptas quisquam nemo placeat?</p>',
        ]);

        Destinasi::create([
            'kategori_id'=>'2',
            'user_id'=>'1',
            'title'=> 'Kampung penjahit',
            'slug'=>'kampung-penjahit',
            'latitude'=>'adhuhfyewugrquiuoqueyu',
            'longitude'=>'dsfdfftftfftftfytftyfyt',
            'image_path'=>'/img/gdgashdahdhaskdhk.jpg',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum magnam, saepe quae eligendi quam consectetur laboriosam? Quia cupiditate explicabo recusandae, optio error autem expedita modi? Est maxime ad neque exercitationem.',
            'body'=>'<P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio nesciunt exercitationem architecto dolor, excepturi veniam? Expedita sit exercitationem optio distinctio ad dolor odit quam, modi, officiis quo dolorem alias aliquam saepe deleniti accusantium. Accusamus molestias, eaque qui vel quibusdam provident quia id mollitia sit voluptatibus dolore ratione libero atque ut, ullam distinctio reprehenderit quas at, eveniet placeat magnam fugiat laudantium. Harum placeat perspiciatis numquam aspernatur ducimus architecto obcaecati voluptatum ad! Culpa eligendi in sint. Quis eos, iure iste ab repudiandae consequatur ad molestias impedit. Repudiandae doloribus obcaecati rerum laudantium.</P><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo rerum corporis ratione? Voluptate, corrupti? Eum doloremque dignissimos a ipsum blanditiis pariatur ipsa culpa nihil perferendis, soluta ducimus molestias? Ipsum atque officia illo voluptas repellendus voluptatem culpa hic consequatur quia quae est earum accusamus dolorem expedita voluptatibus iure repellat error quod, labore perferendis, dolor nisi, adipisci dolorum vero! Nihil, earum consequuntur? Voluptatum facere commodi eum similique officiis eveniet? Numquam, sit! Dolor cupiditate architecto officiis temporibus fugiat tenetur, sint repellendus aut quibusdam natus! Expedita iusto dolorem sit consequuntur nobis dolores velit voluptatibus. Harum aspernatur nulla itaque maxime neque asperiores eveniet quidem fugit officiis ratione, excepturi et, provident omnis unde pariatur. Eos aspernatur ea quos nisi iure corporis illum voluptas quisquam nemo placeat?</p>',
        ]);

        Destinasi::create([
            'kategori_id'=>'2',
            'user_id'=>'1',
            'title'=> 'Lembur kuring',
            'slug'=>'lembur-kuring',
            'latitude'=>'adhuhfyewugrquiuoqueyu',
            'longitude'=>'dsfdfftftfftftfytftyfyt',
            'image_path'=>'/img/gdgashdahdhaskdhk.jpg',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum magnam, saepe quae eligendi quam consectetur laboriosam? Quia cupiditate explicabo recusandae, optio error autem expedita modi? Est maxime ad neque exercitationem.',
            'body'=>'<P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio nesciunt exercitationem architecto dolor, excepturi veniam? Expedita sit exercitationem optio distinctio ad dolor odit quam, modi, officiis quo dolorem alias aliquam saepe deleniti accusantium. Accusamus molestias, eaque qui vel quibusdam provident quia id mollitia sit voluptatibus dolore ratione libero atque ut, ullam distinctio reprehenderit quas at, eveniet placeat magnam fugiat laudantium. Harum placeat perspiciatis numquam aspernatur ducimus architecto obcaecati voluptatum ad! Culpa eligendi in sint. Quis eos, iure iste ab repudiandae consequatur ad molestias impedit. Repudiandae doloribus obcaecati rerum laudantium.</P><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo rerum corporis ratione? Voluptate, corrupti? Eum doloremque dignissimos a ipsum blanditiis pariatur ipsa culpa nihil perferendis, soluta ducimus molestias? Ipsum atque officia illo voluptas repellendus voluptatem culpa hic consequatur quia quae est earum accusamus dolorem expedita voluptatibus iure repellat error quod, labore perferendis, dolor nisi, adipisci dolorum vero! Nihil, earum consequuntur? Voluptatum facere commodi eum similique officiis eveniet? Numquam, sit! Dolor cupiditate architecto officiis temporibus fugiat tenetur, sint repellendus aut quibusdam natus! Expedita iusto dolorem sit consequuntur nobis dolores velit voluptatibus. Harum aspernatur nulla itaque maxime neque asperiores eveniet quidem fugit officiis ratione, excepturi et, provident omnis unde pariatur. Eos aspernatur ea quos nisi iure corporis illum voluptas quisquam nemo placeat?</p>',
        ]);

        

        Blog::create([
            'user_id'=>'1',
            'title'=> 'Apakah worth it',
            'slug'=>'apakah-worth-it',
            'image_path'=>'/img/gdgashdahdhaskdhk.jpg',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum magnam, saepe quae eligendi quam consectetur laboriosam? Quia cupiditate explicabo recusandae, optio error autem expedita modi? Est maxime ad neque exercitationem.',
            'body'=>'<P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio nesciunt exercitationem architecto dolor, excepturi veniam? Expedita sit exercitationem optio distinctio ad dolor odit quam, modi, officiis quo dolorem alias aliquam saepe deleniti accusantium. Accusamus molestias, eaque qui vel quibusdam provident quia id mollitia sit voluptatibus dolore ratione libero atque ut, ullam distinctio reprehenderit quas at, eveniet placeat magnam fugiat laudantium. Harum placeat perspiciatis numquam aspernatur ducimus architecto obcaecati voluptatum ad! Culpa eligendi in sint. Quis eos, iure iste ab repudiandae consequatur ad molestias impedit. Repudiandae doloribus obcaecati rerum laudantium.</P><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo rerum corporis ratione? Voluptate, corrupti? Eum doloremque dignissimos a ipsum blanditiis pariatur ipsa culpa nihil perferendis, soluta ducimus molestias? Ipsum atque officia illo voluptas repellendus voluptatem culpa hic consequatur quia quae est earum accusamus dolorem expedita voluptatibus iure repellat error quod, labore perferendis, dolor nisi, adipisci dolorum vero! Nihil, earum consequuntur? Voluptatum facere commodi eum similique officiis eveniet? Numquam, sit! Dolor cupiditate architecto officiis temporibus fugiat tenetur, sint repellendus aut quibusdam natus! Expedita iusto dolorem sit consequuntur nobis dolores velit voluptatibus. Harum aspernatur nulla itaque maxime neque asperiores eveniet quidem fugit officiis ratione, excepturi et, provident omnis unde pariatur. Eos aspernatur ea quos nisi iure corporis illum voluptas quisquam nemo placeat?</p>',
        ]);

        Blog::create([
            'user_id'=>'1',
            'title'=> 'Tentu saja tidak',
            'slug'=>'tentu-saja-tidak',
            'image_path'=>'/img/gdgashdahdhaskdhk.jpg',
            'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum magnam, saepe quae eligendi quam consectetur laboriosam? Quia cupiditate explicabo recusandae, optio error autem expedita modi? Est maxime ad neque exercitationem.',
            'body'=>'<P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio nesciunt exercitationem architecto dolor, excepturi veniam? Expedita sit exercitationem optio distinctio ad dolor odit quam, modi, officiis quo dolorem alias aliquam saepe deleniti accusantium. Accusamus molestias, eaque qui vel quibusdam provident quia id mollitia sit voluptatibus dolore ratione libero atque ut, ullam distinctio reprehenderit quas at, eveniet placeat magnam fugiat laudantium. Harum placeat perspiciatis numquam aspernatur ducimus architecto obcaecati voluptatum ad! Culpa eligendi in sint. Quis eos, iure iste ab repudiandae consequatur ad molestias impedit. Repudiandae doloribus obcaecati rerum laudantium.</P><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo rerum corporis ratione? Voluptate, corrupti? Eum doloremque dignissimos a ipsum blanditiis pariatur ipsa culpa nihil perferendis, soluta ducimus molestias? Ipsum atque officia illo voluptas repellendus voluptatem culpa hic consequatur quia quae est earum accusamus dolorem expedita voluptatibus iure repellat error quod, labore perferendis, dolor nisi, adipisci dolorum vero! Nihil, earum consequuntur? Voluptatum facere commodi eum similique officiis eveniet? Numquam, sit! Dolor cupiditate architecto officiis temporibus fugiat tenetur, sint repellendus aut quibusdam natus! Expedita iusto dolorem sit consequuntur nobis dolores velit voluptatibus. Harum aspernatur nulla itaque maxime neque asperiores eveniet quidem fugit officiis ratione, excepturi et, provident omnis unde pariatur. Eos aspernatur ea quos nisi iure corporis illum voluptas quisquam nemo placeat?</p>',
        ]);
    }
}

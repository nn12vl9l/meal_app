<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\UploadedFile;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('ja_JP');

        // $fileName = date('YmdHis') . '_test.jpg';
        // $file = UploadedFile::fake()->image($fileName);

        $file = $this->faker->image();
        $fileName = basename($file);

        File::move($file, storage_path('app/public/images/posts/' . $fileName));

        // Storage::putFileAs('public/images/posts', $file, $fileName);
        // File::delete($file);
        
        return [
            'title' => $faker->word(),
            'user_id' => Arr::random(Arr::pluck(User::all(), 'id')),
            'category_id' => Arr::random(Arr::pluck(User::all(), 'id')),
            'body' => $faker->paragraph(),
            'image' => $fileName,
        ];
    }
}

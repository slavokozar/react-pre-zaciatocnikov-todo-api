<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $docsUser = User::where('email', 'docs@email.com')->first();
        if(!$docsUser){
            $docsUser = User::create([
                'name' => 'Docs',
                'email' => 'docs@email.com',
                'password' => '',
            ]);
        }

        $docsUser->api_token = hash('sha256', env('SCRIBE_AUTH_KEY'));
        $docsUser->save();

        $tasks = [
            'Nainštaluj si Node.js',
            'Naštuduj prezentácie z Kurz pre začiaťočníkov',
            'Priebežne pracuj na zadaniach',
            'Staň sa react developerom'
        ];

        $docsUser->tasks()->whereNotIn('text', $tasks)->forceDelete();

        $foundTasks = [];
        foreach($docsUser->tasks()->get() as $task){
            $foundTask = array_search($task->text, $tasks);
            if($foundTask !== false){
                $foundTasks[] = $foundTask;
            }
        }

        print_r($foundTasks);

        foreach($tasks as $index => $task){
            if(!in_array($index, $foundTasks)){
                $docsUser->tasks()->create([
                    'text' => $task
                ]);
            }
        }
    }
}

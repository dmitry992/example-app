<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Faker\Factory as Faker;

class DevController extends Controller
{

    public function index(Request $request, string $action = null)
    {
        if ($action === null) {
            $result = '<p>Available actions:</p><ul>';
            foreach (array_diff(get_class_methods($this), get_class_methods(Controller::class)) as $method) {
                if ($method !== 'index') {
                    $result .= '<li><a href="/dev/' . $method . '">' . $method . '</a></li>';
                }
            }

            return $result . '</ul>';
        }

        if (method_exists($this, $action)) {
            return $this->{$action}($request);
        }

        return null;
    }
    public function test()
    {
    }

    public function getDummyConfig()
    {
        return [
            'url' => config('dummyjson.url'),
            'username' => config('dummyjson.username'),
            'password' => config('dummyjson.password'),
        ];
    }

    public function addProject()
    {


        $faker = Faker::create();


        for ($i = 0; $i < 5; $i++) {

            $user = User::inRandomOrder()->first();

            Project::create([
                'project_name' => $faker->sentence(3),
                'user_id' => $user->id,
                'assignee_id' => User::inRandomOrder()->value('id'),
                'deadline_date' => $faker->dateTimeBetween('-10 days', '+20 days'),
                'active' => true,
            ]);
        }
        return response()->json([
            'status' => 'ok',
        ]);

    }

    public function getAdminProjects()
    {
        $projects = Project::with('owner')
            ->whereHas('owner', function ($query) {
                $query->where('role', 'admin');
            })
            ->get();

        return $projects;
    }

    public function getExpired()
    {
        $projects = Project::where('deadline_date', '<', now())
            ->orderBy('deadline_date', 'asc')
            ->get();

        return $projects;
    }

    public function updateRandom()
    {
        $faker = Faker::create();

        $project = Project::inRandomOrder()->first();

        if (!$project) {
            return 'Проектов нет';
        }

        $project->update([
            'project_name' => $faker->sentence(3),
            'assignee_id' => User::inRandomOrder()->value('id'),
            'deadline_date' => $faker->dateTimeBetween('-5 days', '+30 days'),
            'active' => $faker->boolean,
        ]);

        return $project;
    }


}

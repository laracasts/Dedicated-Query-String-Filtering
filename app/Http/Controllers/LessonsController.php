<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\LessonFilters;
use Illuminate\Database\Eloquent\Collection;

class LessonsController extends Controller
{
    /**
     * Show all lessons.
     *
     * @param  LessonFilters $filters
     * @return Collection
     */
    public function index(LessonFilters $filters)
    {
        return Lesson::filter($filters)->get();
    }
}

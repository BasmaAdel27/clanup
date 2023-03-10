<?php

namespace App\Traits;

use App\Models\Visit;
use Carbon\Carbon;

trait Visitable
{
    public function visit($user = null, $group = null)
    {
        return Visit::firstOrCreate([
            'user_id' => $user ? $user->id : null,
            'group_id' => $group ? $group->id : null,
            'date' => Carbon::now()->toDateString(),
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'visitable_id' => $this->id,
            'visitable_type' => (new \ReflectionClass($this))->getName(),
        ]);
    }

    public function visits()
    {
        return $this->morphMany(Visit::class, 'visitable');
    }

    public function visitsForever()
    {
        return $this->visits()
            ->count();
    }

    public function visitsDay()
    {
        return $this->visits()
            ->where('date', '>=', Carbon::now()->subDay()->toDateString())
            ->count();
    }

    public function visitsWeek()
    {
        return $this->visits()
            ->where('date', '>=', Carbon::now()->subDays(7)->toDateString())
            ->count();
    }

    public function visitsMonth()
    {
        return $this->visits()
            ->where('date', '>=', Carbon::now()->subMonth()->toDateString())
            ->count();
    }

    public function scopePopularLast($query, $days)
    {
        return $query->withCount(['visits' => function($query) use ($days) {
            $query->where('date', '>=', Carbon::now()->subDays($days)->toDateString());
        }])->orderBy('visits_count', 'desc');
    }

    public function scopePopularDay($query)
    {
        return $query->withCount(['visits' => function($query) {
                $query->where('date', '>=', Carbon::now()->subDay()->toDateString());
            }])->orderBy('visits_count', 'desc');
    }

    public function scopePopularWeek($query)
    {
        return $query->withCount(['visits' => function($query) {
            $query->where('date', '>=', Carbon::now()->subWeek()->toDateString());
        }])->orderBy('visits_count', 'desc');
    }

    public function scopePopularMonth($query)
    {
        return $query->withCount(['visits' => function($query) {
            $query->where('date', '>=', Carbon::now()->subMonth()->toDateString());
        }])->orderBy('visits_count', 'desc');
    }
}
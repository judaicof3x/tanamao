<?php

namespace App\Observers\Supervisao\Planos;

use App\Models\Supervisao\Planos\Detail;
use Illuminate\Support\Str;

class DetailObserver
{
    /**
     * Handle the Detail "creating" event.
     *
     * @param  \App\Models\Detail  $detail
     * @return void
     */
    public function creating(Detail $detail)
    {
        $detail->slug = Str::kebab($detail->name);
    }

    /**
     * Handle the Detail "updating" event.
     *
     * @param  \App\Models\Detail  $detail
     * @return void
     */
    public function updating(Detail $detail)
    {
        $detail->slug = Str::kebab($detail->name);
    }

    /**
     * Handle the Detail "deleted" event.
     *
     * @param  \App\Models\Detail  $detail
     * @return void
     */
    public function deleted(Detail $detail)
    {
        //
    }

    /**
     * Handle the Detail "restored" event.
     *
     * @param  \App\Models\Detail  $detail
     * @return void
     */
    public function restored(Detail $detail)
    {
        //
    }

    /**
     * Handle the Detail "force deleted" event.
     *
     * @param  \App\Models\Detail  $detail
     * @return void
     */
    public function forceDeleted(Detail $detail)
    {
        //
    }
}

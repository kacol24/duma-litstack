<?php

namespace Lit\Actions;

use Illuminate\Support\Collection;

class ManageProjectOrder
{
    public function run(Collection $models)
    {
        return redirect(route('lit.crud.project_category.show', $models->first()->project_category_id));
    }
}

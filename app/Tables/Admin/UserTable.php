<?php

namespace App\Tables\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class UserTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    protected $unit;
    public function __construct()
    {
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return User::orderBy('created_at', 'desc');
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table->withGlobalSearch(columns:['name', 'email','phone_number'])

        ->rowLink(fn (User $user) => route('admin.user.show', ['unit' => 'user', 'id' => $user->id],$user))
        // ->export()
        ->column('phone_number')
        ->column('name')
        ->column('email')
        // ->column(
        //     label:'Dibuat',
        //     key: 'data',
        //     as: function (User $user) {
        //         $a = $user->created_at->format('d M Y');
        //         return $a;
        //     }
        // )
        ->paginate(15);
    }
}

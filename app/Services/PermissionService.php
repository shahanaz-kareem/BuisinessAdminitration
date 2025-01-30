<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\Permission\Models\Permission;

class PermissionService
{

    public function store($request)
    {
        $permission =  Permission::create([
            'name' => $request->permission,
            'status' => 1,
        ]);
        return response()->json([
            'id' => $permission->id,
            'name' => $permission->name,
        ]);

    }

    public function destroy($id)
    {
        try {
            $permission = Permission::findOrFail($id);
            $permission->delete();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }


}
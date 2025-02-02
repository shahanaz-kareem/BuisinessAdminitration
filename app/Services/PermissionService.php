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
    public function show($id)
    {
        $permission = Permission::find($id);
    
        if ($permission) {
            return response()->json([
                'success' => true,
                'data' => $permission
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Permission not found'
            ], 404);
        }
    }
    public function update($request, $id)
    {
        $permission = Permission::find($id);

        if (!$permission) {
            return response()->json(['success' => false, 'message' => 'Permission not found'], 404);
        }

        $permission->name = $request->input('permission');
        $permission->save();

        return response()->json(['success' => true, 'message' => 'Permission updated successfully']);
    }


}
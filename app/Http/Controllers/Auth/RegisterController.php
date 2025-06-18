<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\CategoryService;
use Illuminate\View\View;
use App\Models\proffesional_category;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';
    protected $categoryService;

    // ✅ Inject CategoryService via constructor
    public function __construct(CategoryService $categoryService)
    {
        $this->middleware('guest');
        $this->categoryService = $categoryService;
    }

    // ✅ Use injected service (no parameters here)
    public function showRegistrationForm(): View
    {
        $categories = $this->getCategory();
        return view('auth.register', ['categories' => $categories]);
    }

    // ✅ Use the service from the property, not as a parameter
    public function getCategory()
    {
       $category = proffesional_category::get();;
        return $category;
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'cat_id' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
       
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'cat_id' => $data['cat_id'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

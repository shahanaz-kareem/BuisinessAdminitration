<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\CategoryService;
use Illuminate\View\View;
use App\Models\proffesional_category;
use DB;

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
        $country = $this->getCountry();
      
        return view('auth.register', ['categories' => $categories,'country' => $country]);
    }

    // ✅ Use the service from the property, not as a parameter
    public function getCategory()
    {
       $category = proffesional_category::get();;
        return $category;
    }
      public function getCountry()
    {
       $country = Country::where('id','103')->get();
        return $country;
    }
    // Get states by country ID
    public function getStates($country_id)
    {
      
        $states = DB::table('states')->where('country_id', $country_id)->get();
        return response()->json($states);
    }

    // Get cities by state ID
    public function getCities($state_id)
    {
        $cities = DB::table('cities')->where('state_id', $state_id)->get();
        return response()->json($cities);
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
        // First save user
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'cat_id'   => $data['cat_id'],
            'password' => Hash::make($data['password']),
        ]);

        // Handle profile image
        $imageName = null;
        if (request()->hasFile('profile_picture')) {
            $file = request()->file('profile_picture');
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/profiles'), $imageName);
        }

       $userDetail = new \App\Models\Userdetails();

        $userDetail->user_id    = $user->id;
        $userDetail->address    = $data['address'] ?? null;
        $userDetail->country_id = $data['country'] ?? null;
        $userDetail->state_id   = $data['state'] ?? null;
        $userDetail->city_id    = $data['city'] ?? null;
        $userDetail->image      = $imageName;

        $userDetail->save();

        return $user;
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $query = Service::where('is_active', true)->orderBy('display_order');
        
        // Filtrer par catégorie (SR ou GL)
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        
        $services = $query->get();
        
        return view('services', compact('services'));
    }
    
    public function show($slug)
    {
        $service = Service::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
        
        return view('service-single', compact('service'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::where('is_active', true)
            ->latest()
            ->get();
        
        return view('training', compact('trainings'));
    }
    
    public function show($slug)
    {
        $training = Training::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
        
        return view('training-single', compact('training'));
    }
}

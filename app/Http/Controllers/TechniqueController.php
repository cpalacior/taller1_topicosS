<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Technique;
use Exception;

class TechniqueController extends Controller
{

    public function index(): View{
        $viewData = [];
        $viewData["technique"] = Technique::all();
        return view('technique.index')->with("viewData", $viewData);
    }
    public function create(): View{
        return view('technique.create')->with("message", "");
    }

    public function save(Request $request): View{
        try{
            $request->validate([
                "model" => "required",
                "image" => "required",
                "description" => "required",
                "price" => "required"
            ]);
            
            Technique::create($request->only(["model","image","description","price"]));
            //return redirect()->route('technique.create')->with("message", "satisfactory-creation");
            return view('technique.create')->with("message", "satisfactory-creation");
        }
        catch(Exception $e){
            echo($e);
            //return redirect()->route('technique.create')->with("message", "failed-creation");
            return view('technique.create')->with("message", "failed-creation");
        }
        
    }

    public function show(string $id): View{
        $technique = Technique::findOrFail($id);
        $viewData = [];
        $viewData["technique"] = $technique;
        return view('technique.show')->with("viewData", $viewData);
    }

    public function delete(string $id): RedirectResponse{
        $technique = Technique::findOrFail($id);
        $technique->delete();
        return redirect()->route('technique.index');
    }
}
?>
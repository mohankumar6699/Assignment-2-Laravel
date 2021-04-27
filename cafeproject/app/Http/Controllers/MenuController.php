<?php


namespace App\Http\Controllers;


use DB;
use App\Models\Menu;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;


class MenuController extends Controller
{

    public function index(){
        $cafemenus = Menu::all();
        return view('cafemenu', compact('cafemenus'));
    }



    public function create()
    {

        return view('addmenu');
    }

    public function make()
    {

        return view('displaymenu');
    }

    public function display(){
        $cafemenus = Menu::all();
        return view('displaymenu', compact('cafemenus'));
    }

    public function store(Request $request)
    {
        $mcategory = $request->get('menu_category');
        //dd(request()->all());
        //return "Saved";
        //return $request->all();
        $menu = new Menu;
        $menu->menu_name = request('menu_name');
        $menu->menu_desc = request('menu_desc');
        $menu->menu_price = request('menu_price');
        $menu->menu_category = $mcategory;
        $menu->save();
        $message = "New Menu is saved!!";
        return view('addmenu', compact('message'));

    }


    public function updateMenu(Request $request)
    {

        $menu = Menu::where('id',$request->id)->first();
        $menu->menu_name = $request->menu_name;
        $menu->menu_desc = $request->menu_desc;
        $menu->menu_price = $request->menu_price;
        $menu->menu_category = $request->menu_category;
        $menu->save();
        //return "Menu updated successfully";
        $message = "Menu updated successfully";
        return view('updateview', compact('message'));
        //return $request->all();
    }

    public function updateForm($id){

        $menu = Menu::where('id',$id)->first();
        return view('editmenu',['menu'=>$menu]);
    }

    public function deleteMenu($id)
    {
        Menu::where('id',$id)->delete();
        //$cafemenus = Menu::all();
        //return view('displaymenu', compact('cafemenus'));
        $message = "Menu deleted successfully!!";
        return view('deleteview', compact('message'));

    }




}

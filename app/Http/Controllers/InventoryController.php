<?php

namespace App\Http\Controllers;

use App\Enums\ItemType;
use App\Models\Armor;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Tools;
use App\Models\Weapon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function index() {
        $user = Auth::user();
        $weapons = Weapon::all();
        $armors = Armor::all();
        $items = Item::whereNotIn('type',array_merge(ItemType::focuses(), [ItemType::Pack, ItemType::Food]))->get();

        $focuses = Item::whereIn('type',ItemType::focuses())->get();
        $packs = Item::where('type',ItemType::Pack)->get();
        $foods = Item::where('type',ItemType::Food)->get();
        $tools = Tools::all();

        return view('items.index',  [
            'user' => $user,
            'weapons' => $weapons,
            'armors' => $armors,
            'items' => $items,
            'focuses' => $focuses,
            'packs' => $packs,
            'foods' => $foods,
            'tools' => $tools,
        ]);
    }

    public function show(Inventory $inventory) {
        $user = Auth::user();

        return view("items.show", [
            'user' => $user,
            'item' => $inventory,
        ]);
    }

    public function store(Inventory $inventory) {
        $user = Auth::user();
        $title = strip_tags(request('title'));
        if (in_array(request('theme'), ["rose","yellow","indigo","gray","cyan","lime","purple","orange","pink"])) {
            $theme = request('theme');
        } else {
            $theme = "yellow";
        }
        $text = strip_tags(request('text'));

        Inventory::create([
            'user_id' => $user->id,
            'title' => $title,
            'theme' => $theme,
            'text' => $text,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect("/items");
    }
    
    public function inventory() {
        $user = Auth::user();
        $items = $user->character->inventory;

        return view("items.inventory", [
            'user' => $user,
            'items' => $items,
        ]);
    }
}

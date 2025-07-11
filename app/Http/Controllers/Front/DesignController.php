<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;
use App\Models\Robe;
use App\Models\Hood;
use App\Models\Scarf;

class DesignController extends Controller
{
    public function create()
    {
        $robes = Robe::all();
        $hoods = Hood::all();
        $scarves = Scarf::all();

        return view('order', compact('robes', 'hoods', 'scarves'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'design_type' => 'required|in:individual,batch',
            'shoulder_width' => 'required|numeric',
            'arm_length' => 'required|numeric',
            'total_length' => 'required|numeric',
            'name_customer' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',

            'robe_id' => 'nullable|exists:robes,id',
            'custom_robe_image' => 'nullable|image',

            'hood_id' => 'nullable|exists:hoods,id',
            'custom_hood_image' => 'nullable|image',
            'color_image' => 'nullable|image',
            'hood_color_image' => 'nullable|image',
            'scarf_color_image' => 'nullable|image',
            'hood_direction' => 'nullable|in:right,left,back',
            'hood_text' => 'nullable|string|max:500',

            'scarf_id' => 'nullable|exists:scarves,id',
            'custom_scarf_image' => 'nullable|image',
            'scarf_logo' => 'nullable|image',
            'scarf_text' => 'nullable|string',
            'scarf_position' => 'nullable|in:right,left,back',
        ]);
        // dd($request->file('color_image'));
        // رفع الصور
        if ($request->hasFile('custom_robe_image')) {
            $data['custom_robe_image'] = $request->file('custom_robe_image')->store('custom_robes', 'public');
        }

        if ($request->hasFile('custom_hood_image')) {
            $data['custom_hood_image'] = $request->file('custom_hood_image')->store('custom_hoods', 'public');
        }

        if ($request->hasFile('custom_scarf_image')) {
            $data['custom_scarf_image'] = $request->file('custom_scarf_image')->store('custom_scarves', 'public');
        }

        if ($request->hasFile('scarf_logo')) {
            $data['scarf_logo'] = $request->file('scarf_logo')->store('logos', 'public');
        }
        if ($request->hasFile('color_image')) {
            $data['color_image'] = $request->file('color_image')->store('colors', 'public');
        }

        if ($request->hasFile('hood_color_image')) {
            $data['hood_color_image'] = $request->file('hood_color_image')->store('hood_colors', 'public');
        }

        if ($request->hasFile('scarf_color_image')) {
            $data['scarf_color_image'] = $request->file('scarf_color_image')->store('scarf_colors', 'public');
        }

        $price = 0;

        if (isset($data['robe_id'])) {
            $price += Robe::find($data['robe_id'])->price ?? 0;
        }

        if (isset($data['hood_id'])) {
            $price += Hood::find($data['hood_id'])->price ?? 0;
        }

        if (isset($data['scarf_id'])) {
            $price += Scarf::find($data['scarf_id'])->price ?? 0;
        }

        $data['total_price'] = $price;

        Design::create($data);

        return redirect()->route('design.apply')->with('success', 'تم إرسال الطلب بنجاح ✅');
    }
}

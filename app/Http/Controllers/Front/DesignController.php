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
        $minRobePrice = Robe::min('price');

        return view('order', compact('robes', 'hoods', 'scarves', 'minRobePrice'));
    }

    public function createGroubOrder()
    {
        $robes = Robe::all();
        $hoods = Hood::all();
        $scarves = Scarf::all();
        $minRobePrice = Robe::min('price');

        return view('groubOrder', compact('robes', 'hoods', 'scarves', 'minRobePrice'));
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

            'university_name' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'batch_number' => 'nullable|string|max:255',

            'robe_id' => 'nullable|exists:robes,id',
            'custom_robe_image' => 'nullable|image',
            'hood_direction' => 'nullable|in:top,side,both',

            'hood_id' => 'nullable|exists:hoods,id',
            'custom_hood_image' => 'nullable|image',
            'color_image' => 'nullable|image',
            'hood_color_image' => 'nullable|image',
            'hood_direction_color_image' => 'nullable|image',
            'scarf_color_image' => 'nullable|image',
            'hood_text' => 'nullable|string|max:500',
            'custom_robe_price' => 'nullable|numeric|min:0',
            'custom_hood_price' => 'nullable|numeric|min:0',
            'custom_scarf_price' => 'nullable|numeric|min:0',
            'scarf_id' => 'nullable|exists:scarves,id',
            'custom_scarf_image' => 'nullable|image',
            'scarf_logo' => 'nullable|image',
            'scarf_text' => 'nullable|string',
            'scarf_embroidery' => 'nullable|array',
            'scarf_embroidery.*' => 'nullable|in:right,left,back',
            'scarf_embroidery_image_right' => 'nullable|image',
            'scarf_embroidery_image_left' => 'nullable|image',
            'scarf_embroidery_image_back' => 'nullable|image',
            'scarf_position' => 'nullable|in:right,left,back',
        ]);

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

        if ($request->hasFile('hood_direction_color_image')) {
            $data['hood_direction_color_image'] = $request->file('hood_direction_color_image')->store('hood_direction_color_image', 'public');
        }

        if ($request->hasFile('scarf_color_image')) {
            $data['scarf_color_image'] = $request->file('scarf_color_image')->store('scarf_colors', 'public');
        }

        if ($request->hasFile('scarf_embroidery_image_right')) {
            $data['scarf_embroidery_image_right'] = $request->file('scarf_embroidery_image_right')->store('scarf_embroidery_images', 'public');
        }

        if ($request->hasFile('scarf_embroidery_image_left')) {
            $data['scarf_embroidery_image_left'] = $request->file('scarf_embroidery_image_left')->store('scarf_embroidery_images', 'public');
        }

        if ($request->hasFile('scarf_embroidery_image_back')) {
            $data['scarf_embroidery_image_back'] = $request->file('scarf_embroidery_image_back')->store('scarf_embroidery_images', 'public');
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

        if (isset($data['hood_direction'])) {
            switch ($data['hood_direction']) {
                case 'top':
                case 'side':
                    $price += 5.000;
                    break;
                case 'both':
                    $price += 10.000;
                    break;
            }
        }

        if (!empty($data['custom_robe_price'])) {
            $price += floatval($data['custom_robe_price']);
        }

        if (!empty($data['custom_hood_price'])) {
            $price += floatval($data['custom_hood_price']);
        }

        if (!empty($data['custom_scarf_price'])) {
            $price += floatval($data['custom_scarf_price']);
        }

        if ($request->has('scarf_embroidery') && in_array('back', $request->scarf_embroidery)) {
            $price += 5.000;
        }

        $data['scarf_embroidery'] = $request->scarf_embroidery ? json_encode($request->scarf_embroidery) : null;

        $data['total_price'] = $price;

        Design::create($data);

        return redirect()->back()->with('success', 'تم إرسال الطلب بنجاح ✅');
    }
}

<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Faq;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Get Contact Us Page For End User.
     *
     * @return View
     */
    public function getContactUs()
    {
        return view('website.pages.contact_us');
    }

    /**
     * End User Can Send Message.
     *
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|max:120',
            'phone' => 'required|max:30',
            'message' => 'required|string|max:1000',
        ]);
        
        ContactUs::create($validated);

        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }
}

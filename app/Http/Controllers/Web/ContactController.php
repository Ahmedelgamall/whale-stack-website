<?php

namespace App\Http\Controllers\Web;

use App\Enums\WebsiteType;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Faq;
use App\Models\Website;
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
    /**
     * End User Can Send Message.
     *
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function submitFull(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|email|max:120',
            'work_email' => 'required|email|max:120',
            'country' => 'required|max:120',
            'phone' => 'required|max:30',
            'url' => 'required|max:250',
            'message' => 'required|string|max:1000',
        ]);

        Website::create($validated + [
            'type' => WebsiteType::FULL
        ]);

        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }

    /**
     * End User Can Send Message.
     *
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function submitTest(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:200',
            'phone' => 'required|max:30',
            'url' => 'required|url|max:250',
        ]);

        Website::create($validated + [
            'type' => WebsiteType::TEST
        ]);

        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }

    /**
     * End User Can Send Message.
     *
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function submitSubscribtion(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:120',
        ]);

        Website::create($validated + [
            'type' => WebsiteType::SUBSCRIBTION
        ]);

        return response()->json(['success' => true, 'message' => 'Subscribtion sent successfully!']);
    }
}

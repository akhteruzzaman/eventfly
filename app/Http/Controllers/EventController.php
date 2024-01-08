<?php


namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;

use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;
use App\Models\Faq;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class EventController extends BaseController
{
    public function eventStore(Request $request): RedirectResponse
    {
        $eventid = $request->id;

        if ($eventid != 0) {
            $event = Event::find($eventid);
        } else {
            $event = new Event(); // Change this line to use the correct model class
        }

        $eventData = [
            'shop_id' => auth()->user()->id,
            'event_title' => $request->event_title,
            'event_type' => $request->event_type,
            'event_details' => $request->event_details,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'priority' => $request->priority,
            'discount_code' => $request->discount_code,
        ];        

        Event::updateOrCreate(['id' => $eventid], $eventData);
        return Redirect::away(URL::shopifyRoute('events'))->with('success', 'Event saved successfully !');
    }

    function getEvents()
    {       
        $currentShopId = auth()->user()->id;
        $events = Event::where('shop_id', $currentShopId)->orderBy('created_at', 'desc')->get();
        $this->fetchDiscountCodes();

        return view('pages.events', ['events' => $events,'discountCodesList' => $this->discountCodesList]);       
    }

    public function eventUpdateData($id)
    {
        $event = Event::find($id);
        $this->fetchDiscountCodes();
        return view('pages.event-update', ['event' => $event,'discountCodesList' => $this->discountCodesList]);
    }

    public function deleteEvent($id): RedirectResponse
    {
        $event = Event::find($id);        

        $event->delete();

        return Redirect::away(URL::shopifyRoute('events'))->with('success', 'Event deleted successfully !');
    }

}
